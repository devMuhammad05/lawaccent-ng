<x-app-layout>
    <section class="dataprotection">
        <div class="container">
            <div class="row dataprotectionrow">
                <div class="col-md-6 dataprotectiontext">
                    <div>
                        <img src="{{ asset("web/assets/images/resourcesvg.svg") }}" alt="" />
                        <h3>Media Hub</h3>
                        <p>
                            Explore our library of legal videos and <br />
                            podcasts—clear, concise, and crafted to <br />
                            inform.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 smillingman">
                    <img src="{{ asset("web/assets/images/mediaguy.webp") }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="mediahub">
        <div class="container">
            <div class="row mediahubrow">
                <div class="col-md-6"></div>
                <div class="col-md-6 mediahubrowcol">
                    <h5>
                        Subscribe to Law Accent <br />
                        YouTube Channel
                    </h5>
                    <p>
                        Don't miss a single explainer - hit <br />
                        subscribe and stay in the loop!
                    </p>
                    <a href="{{ $youtube_link }}" target="_blank">
                        <button class="btn">Subscribe</button>
                    </a>
                </div>
            </div>
            <hr class="hr-media" />
        </div>
    </section>

    @if (count($videoMedias))
        <section class="youtubesection">
            <div class="container mb-5">
                <h5>Recent Videos</h5>
                <div class="row youtubesectionrow">
                    @include('web.partials.video-card')
                </div>
            </div>
        </section>
    @endif

    @if (count($podcasts))
        <section class="podcastsection mb-4">
            <div class="container">
                <h5>Recent PodCasts</h5>
                <div class="row podcastsectionrow">
                    @foreach ($podcasts as $index => $podcast)
                        <div class="col-md-4">
                            <div class="podcastsectionrowcard">
                                <img src="{{ asset("web/assets/images/podcast.webp") }}" alt="" />
                                <div class="podcastsectionrowcard-body">
                                    <h5>
                                        Know Your Rights: Arrests & Police Encounters in Nigeria
                                    </h5>
                                    <p>
                                        Understand what the law says about arrests, your rights during
                                        police encounters, and how to protect yourself legally.
                                    </p>
                                    <div class="podcast-audio-player">
                                        <audio id="audio{{ $index }}"
                                            src="{{ asset($podcast->media_location ?? $podcast->media_link) }}"></audio>
                                        <button onclick="togglePlay('audio{{ $index }}', this)" class="play-btn">
                                            <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="black" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z" />
                                            </svg>
                                        </button>
                                        <input type="range" value="0" class="progress-bar" id="progress-audio1"
                                            onchange="seekAudio('audio{{ $index }}', this)" />
                                        <span class="duration" id="current-time-audio{{ $index }}">0:00 /</span>
                                        <span class="duration" id="duration-audio{{ $index }}">0:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @include('web.partials.newsletter')

</x-app-layout>
