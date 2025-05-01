<x-app-layout>
    <section class="dataprotection">
        <div class="container">
            <div class="row dataprotectionrow">
                <div class="col-md-6 dataprotectiontext">
                    <div>
                        <img src="assets/images/resourcesvg.svg" alt="" />
                        <h3>Media Hub</h3>
                        <p>
                            Explore our library of legal videos and <br />
                            podcasts—clear, concise, and crafted to <br />
                            inform.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 smillingman">
                    <img src="assets/images/mediaguy.webp" alt="" />
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
                    <button class="btn">Subscribe</button>
                </div>
            </div>
            <hr class="hr-media" />
        </div>
    </section>

    <section class="youtubesection">
        <div class="container">
            <h5>Recent Videos</h5>
            <div class="row youtubesectionrow">
                <div class="col-md-6">
                    <div class="youtube-card">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="youtube-card">
                        <iframe src="https://www.youtube.com/embed/3JZ_D3ELwOQ?rel=0" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="youtube-card">
                        <iframe src="https://www.youtube.com/embed/fLexgOxsZu0?rel=0" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="youtube-card">
                        <iframe src="https://www.youtube.com/embed/L_jWHffIx5E?rel=0" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="youtube-card">
                        <iframe src="https://www.youtube.com/embed/hTWKbfoikeg?rel=0" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="youtube-card">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?rel=0" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="loadmore">
                <div class="loadmorediv"></div>
                <button class="btn py-2 px-3">Load More Videos</button>
                <div class="loadmorediv"></div>
            </div>
        </div>
    </section>

    <section class="podcastsection">
        <div class="container">
            <h5>Recent PodCasts</h5>
            <div class="row podcastsectionrow">
                <div class="col-md-4">
                    <div class="podcastsectionrowcard">
                        <img src="assets/images/podcast.webp" alt="" />
                        <div class="podcastsectionrowcard-body">
                            <h5>
                                Know Your Rights: Arrests & Police Encounters in Nigeria
                            </h5>
                            <p>
                                Understand what the law says about arrests, your rights during
                                police encounters, and how to protect yourself legally.
                            </p>
                            <div class="podcast-audio-player">
                                <audio id="audio1"
                                    src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"></audio>
                                <button onclick="togglePlay('audio1', this)" class="play-btn">
                                    <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="black" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                                <input type="range" value="0" class="progress-bar" id="progress-audio1"
                                    onchange="seekAudio('audio1', this)" />
                                <span class="duration" id="current-time-audio1">0:00 /</span>
                                <span class="duration" id="duration-audio1">0:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="podcastsectionrowcard">
                        <img src="assets/images/podcast.webp" alt="" />
                        <div class="podcastsectionrowcard-body">
                            <h5>
                                Know Your Rights: Arrests & Police Encounters in Nigeria
                            </h5>
                            <p>
                                Understand what the law says about arrests, your rights during
                                police encounters, and how to protect yourself legally.
                            </p>

                            <div class="podcast-audio-player">
                                <audio id="audio2"
                                    src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3"></audio>
                                <button onclick="togglePlay('audio2', this)" class="play-btn">
                                    <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="black" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                                <input type="range" value="0" class="progress-bar" id="progress-audio2"
                                    onchange="seekAudio('audio2', this)" />
                                <span class="duration" id="current-time-audio2">0:00 /</span>
                                <span class="duration" id="duration-audio2">0:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="podcastsectionrowcard">
                        <img src="assets/images/podcast.webp" alt="" />
                        <div class="podcastsectionrowcard-body">
                            <h5>
                                Know Your Rights: Arrests & Police Encounters in Nigeria
                            </h5>
                            <p>
                                Understand what the law says about arrests, your rights during
                                police encounters, and how to protect yourself legally.
                            </p>

                            <div class="podcast-audio-player">
                                <audio id="audio3"
                                    src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3"></audio>
                                <button onclick="togglePlay('audio3', this)" class="play-btn">
                                    <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="black" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                                <input type="range" value="0" class="progress-bar" id="progress-audio3"
                                    onchange="seekAudio('audio3', this)" />
                                <span class="duration" id="current-time-audio3">0:00 / </span>
                                <span class="duration" id="duration-audio3"> 0:00 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="podcastsectionrowcard">
                        <img src="assets/images/podcast.webp" alt="" />
                        <div class="podcastsectionrowcard-body">
                            <h5>
                                Know Your Rights: Arrests & Police Encounters in Nigeria
                            </h5>
                            <p>
                                Understand what the law says about arrests, your rights during
                                police encounters, and how to protect yourself legally.
                            </p>
                            <div class="podcast-audio-player">
                                <audio id="audio1"
                                    src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"></audio>
                                <button onclick="togglePlay('audio1', this)" class="play-btn">
                                    <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="black" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                                <input type="range" value="0" class="progress-bar" id="progress-audio1"
                                    onchange="seekAudio('audio1', this)" />
                                <span class="duration" id="current-time-audio1">0:00 /</span>
                                <span class="duration" id="duration-audio1">0:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="podcastsectionrowcard">
                        <img src="assets/images/podcast.webp" alt="" />
                        <div class="podcastsectionrowcard-body">
                            <h5>
                                Know Your Rights: Arrests & Police Encounters in Nigeria
                            </h5>
                            <p>
                                Understand what the law says about arrests, your rights during
                                police encounters, and how to protect yourself legally.
                            </p>

                            <div class="podcast-audio-player">
                                <audio id="audio2"
                                    src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3"></audio>
                                <button onclick="togglePlay('audio2', this)" class="play-btn">
                                    <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="black" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                                <input type="range" value="0" class="progress-bar" id="progress-audio2"
                                    onchange="seekAudio('audio2', this)" />
                                <span class="duration" id="current-time-audio2">0:00 /</span>
                                <span class="duration" id="duration-audio2">0:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="podcastsectionrowcard">
                        <img src="assets/images/podcast.webp" alt="" />
                        <div class="podcastsectionrowcard-body">
                            <h5>
                                Know Your Rights: Arrests & Police Encounters in Nigeria
                            </h5>
                            <p>
                                Understand what the law says about arrests, your rights during
                                police encounters, and how to protect yourself legally.
                            </p>

                            <div class="podcast-audio-player">
                                <audio id="audio3"
                                    src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3"></audio>
                                <button onclick="togglePlay('audio3', this)" class="play-btn">
                                    <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="black" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                                <input type="range" value="0" class="progress-bar" id="progress-audio3"
                                    onchange="seekAudio('audio3', this)" />
                                <span class="duration" id="current-time-audio3">0:00 / </span>
                                <span class="duration" id="duration-audio3"> 0:00 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loadmore">
                <div class="loadmorediv"></div>
                <button class="btn py-2 px-3">Load More Podcasts</button>
                <div class="loadmorediv"></div>
            </div>
        </div>
    </section>

    @include('web.partials.newsletter')

</x-app-layout>
