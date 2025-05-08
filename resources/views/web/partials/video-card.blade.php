@foreach ($videoMedias as $videoMedia)
    <div class="col-md-6 col-12">
        <div class="youtube-card">

            @if($videoMedia->media_link)
                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/NRvS5GHhpAM?si=gIBoT1EsM8-QbfOh"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}

                {!! $videoMedia->media_link !!}

            @else
                <video width="640" height="440" controls>
                    <source src="{{ asset($videoMedia->media_location) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @endif

        </div>
    </div>
@endforeach
