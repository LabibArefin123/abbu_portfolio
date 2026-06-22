@foreach($trainings->where('type','Bangladesh') as $training)

    <div class="col-lg-6 mb-4">

        <div class="training-card">

            <span class="training-badge">
                {{ $training->type }}
            </span>

            <h4>{{ $training->title }}</h4>

            @if($training->duration)
                <p>{{ $training->duration }}</p>
            @endif

            <span>{{ $training->location }}</span>

        </div>

    </div>

@endforeach