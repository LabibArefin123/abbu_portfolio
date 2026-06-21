<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Contact;
use App\Models\Training;
use App\Models\SupervisionExperience;
use App\Models\SystemProblem;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WelcomePageController extends Controller
{
    public function index()
    {
        return view('frontend.welcome');
    }

    public function about()
    {
        return view('frontend.about_page.about');
    }

    public function training()
    {
        $localTrainings =
            Training::where('type', 'Bangladesh')->get();

        $internationalTrainings =
            Training::where('type', 'International')->get();

        return view(
            'frontend.training_page.training',
            compact(
                'localTrainings',
                'internationalTrainings'
            )
        );
    }

    public function experience(Request $request)
    {
        if ($request->ajax()) {

            $query = SupervisionExperience::query();

            // keyword search
            if ($request->search) {
                $query->where(function ($q) use ($request) {
                    $q->where('position', 'like', "%{$request->search}%")
                        ->orWhere('description', 'like', "%{$request->search}%")
                        ->orWhere('location', 'like', "%{$request->search}%");
                });
            }

            // date filter (duration format: dd-mm-yyyy to dd-mm-yyyy)
            if ($request->from_date || $request->to_date) {

                $query->where(function ($q) use ($request) {

                    if ($request->from_date) {
                        $q->whereRaw("STR_TO_DATE(SUBSTRING_INDEX(duration,' to ',1),'%d-%m-%Y') >= STR_TO_DATE(?,'%Y-%m-%d')", [
                            $request->from_date
                        ]);
                    }

                    if ($request->to_date) {
                        $q->whereRaw("STR_TO_DATE(SUBSTRING_INDEX(duration,' to ',-1),'%d-%m-%Y') <= STR_TO_DATE(?,'%Y-%m-%d')", [
                            $request->to_date
                        ]);
                    }
                });
            }

            return response()->json([
                'data' => $query->orderBy('sort_order')->get()
            ]);
        }

        $experiences = SupervisionExperience::orderBy('sort_order')->get();

        return view('frontend.experience_page.experience', compact('experiences'));
    }

    public function contact_index()
    {
        return view('frontend.contact_page.contact');
    }

    public function contact_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function system_problem_store(Request $request)
    {
        $request->validate([
            'problem_title' => 'required|string|max:255',
            'problem_description' => 'required|string',
            'status' => 'required|in:low,medium,high,critical',
            'problem_file' => 'nullable|file|max:4096',
            'multiple_images.*' => 'nullable|image|max:4096',
            'multiple_pdfs.*' => 'nullable|file|max:4096',
        ]);

        $uid = 'DFCH-PROB-' . strtoupper(Str::random(6));

        // SINGLE FILE
        $fileName = null;
        if ($request->hasFile('problem_file')) {
            $file = $request->file('problem_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/problem/files'), $fileName);
        }

        // MULTIPLE IMAGES
        $images = [];
        if ($request->hasFile('multiple_images')) {
            foreach ($request->file('multiple_images') as $img) {
                $name = time() . '_' . $img->getClientOriginalName();
                $img->move(public_path('uploads/problem/images'), $name);
                $images[] = $name;
            }
        }

        // MULTIPLE FILES
        $files = [];
        if ($request->hasFile('multiple_pdfs')) {
            foreach ($request->file('multiple_pdfs') as $f) {
                $name = time() . '_' . $f->getClientOriginalName();
                $f->move(public_path('uploads/problem/files'), $name);
                $files[] = $name;
            }
        }

        SystemProblem::create([
            'problem_uid' => $uid,
            'problem_title' => $request->problem_title,
            'problem_description' => $request->problem_description,
            'status' => $request->status,
            'problem_file' => $fileName,
            'multiple_images' => $images,
            'multiple_pdfs' => $files,
        ]);

        return back()->with('success', '✅ Problem submitted successfully!');
    }
}
