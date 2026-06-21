<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Contact;
use App\Models\Career;
use App\Models\Project;
use App\Models\Training;
use App\Models\Achievement;
use App\Models\SupervisionExperience;
use App\Models\SystemProblem;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WelcomePageController extends Controller
{
    public function index()
    {
        return view('frontend.welcome_page.welcome');
    }

    public function about()
    {
        return view('frontend.about_page.about');
    }

    public function career()
    {
        $careers = Career::orderBy('sort_order')->get();

        return view(
            'frontend.career_page.career',
            compact('careers')
        );
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

    public function experience()
    {
        $experiences = $this->formatExperience(
            SupervisionExperience::query()
        );


        return view(
            'frontend.experience_page.experience',
            compact('experiences')
        );
    }

    public function experienceAjax(Request $request)
    {
        try {


            $query = SupervisionExperience::query();

            if ($request->filled('search')) {

                $search = trim($request->search);

                $query->where(function ($q) use ($search) {

                    $q->where('position', 'LIKE', "%{$search}%")
                        ->orWhere('location', 'LIKE', "%{$search}%")
                        ->orWhere('description', 'LIKE', "%{$search}%")
                        ->orWhere('responsibilities', 'LIKE', "%{$search}%");
                });
            }

            if ($request->filled('from_date')) {

                $query->whereRaw(
                    "STR_TO_DATE(SUBSTRING_INDEX(duration,' to ',1),'%d-%m-%Y') >= STR_TO_DATE(?,'%Y-%m-%d')",
                    [$request->from_date]
                );
            }

            if ($request->filled('to_date')) {

                $query->whereRaw(
                    "STR_TO_DATE(SUBSTRING_INDEX(duration,' to ',-1),'%d-%m-%Y') <= STR_TO_DATE(?,'%Y-%m-%d')",
                    [$request->to_date]
                );
            }

            $experiences = $this->formatExperience($query);

            return response()->json([
                'success' => true,
                'count' => $experiences->count(),
                'data' => $experiences
            ]);
        } catch (\Exception $e) {

            \Log::error('Experience AJAX Error', [
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong.'
            ], 500);
        }
    }

    private function formatExperience($query)
    {
        return $query
            ->orderBy('sort_order')
            ->get()
            ->map(function ($item) {


                try {

                    $dates = explode(' to ', $item->duration ?? '');

                    $from = !empty($dates[0])
                        ? Carbon::createFromFormat('d-m-Y', trim($dates[0]))->format('d F Y')
                        : '';

                    $to = !empty($dates[1])
                        ? Carbon::createFromFormat('d-m-Y', trim($dates[1]))->format('d F Y')
                        : '';

                    $item->formatted_duration = "{$from} - {$to}";
                } catch (\Exception $e) {

                    \Log::error('Experience Date Error', [
                        'duration' => $item->duration,
                        'message' => $e->getMessage()
                    ]);

                    $item->formatted_duration = $item->duration;
                }

                $item->description = preg_replace_callback(
                    '/\b(\d{2}-\d{2}-\d{4})\b/',
                    function ($matches) {

                        try {
                            return Carbon::createFromFormat(
                                'd-m-Y',
                                $matches[1]
                            )->format('d F Y');
                        } catch (\Exception $e) {
                            return $matches[1];
                        }
                    },
                    $item->description ?? ''
                );

                $item->responsibilities = preg_replace_callback(
                    '/\b(\d{2}-\d{2}-\d{4})\b/',
                    function ($matches) {

                        try {
                            return Carbon::createFromFormat(
                                'd-m-Y',
                                $matches[1]
                            )->format('d F Y');
                        } catch (\Exception $e) {
                            return $matches[1];
                        }
                    },
                    $item->responsibilities ?? ''
                );

                return $item;
            });
    }

    public function project()
    {
        $projects = Project::orderBy('sort_order')
            ->get();

        return view(
            'frontend.project_page.project',
            compact('projects')
        );
    }

    public function projectAjax(Request $request)
    {
        try {

            $query = Project::query();

            if ($request->filled('search')) {

                $search = trim($request->search);

                $query->where(function ($q) use ($search) {

                    $q->where('project_name', 'LIKE', "%{$search}%")
                        ->orWhere('location', 'LIKE', "%{$search}%")
                        ->orWhere('river_name', 'LIKE', "%{$search}%")
                        ->orWhere('project_type', 'LIKE', "%{$search}%")
                        ->orWhere('description', 'LIKE', "%{$search}%");
                });
            }

            if ($request->filled('project_type')) {

                $query->where(
                    'project_type',
                    $request->project_type
                );
            }

            $projects = $query
                ->orderBy('sort_order')
                ->get();

            return response()->json([
                'success' => true,
                'count' => $projects->count(),
                'data' => $projects
            ]);
        } catch (\Exception $e) {

            \Log::error($e);

            return response()->json([
                'success' => false
            ]);
        }
    }
    public function achievement()
    {
        $achievements = Achievement::orderBy('sort_order')->get();

        return view(
            'frontend.achievement_page.achievement',
            compact('achievements')
        );
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
