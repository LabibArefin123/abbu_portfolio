@foreach ($internationalTrainings as $training)
    <div class="col-lg-4 mb-4">

        <div class="country-card">

            <h5>{{ $training->title }}</h5>

            <p>{{ $training->location }}</p>

        </div>

    </div>
@endforeach
