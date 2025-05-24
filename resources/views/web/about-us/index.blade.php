<x-app-layout>
    <section class="aboutlawaccent">
        <div class="container">
            <img src="{{ asset("web/assets/images/lan-bordered.svg") }}" alt="image" />
            <h2>About Law Accent</h2>
            <p>
                At Law Accent, we simplify legal principles through expert legal
                practice, practical guidance, and educational support. As a law firm,
                <br />
                we work closely with individuals and businesses to ensure they not
                only stay informed, but also remain compliant, protected, and <br />
                empowered in every legal decision.
            </p>
            <div class="row aboutrow">
                <div class="col-md-5">
                    <img src="{{ asset("web/assets/images/lawbook.webp") }}" alt="image" width="100%" />
                </div>
                <div class="col-md-6 mobile">
                    <div class="row">
                        <div class="col-md-5 box">
                            <h3>{{ $aboutUsMetrics['year'] }}</h3>
                            <span>Law Accent opens for business in the heart of Lagos</span>
                        </div>
                        <div class="col-md-5 box">
                            <h3 class="counter" data-target="{{ $aboutUsMetrics['number_of_offices'] }}">0</h3>

                            <span>Offices across Africa <br />
                                and the Globe</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-5 box">
                            <h3 class="counter" data-target="{{ $aboutUsMetrics['number_of_clients'] }}">
                                0
                            </h3>
                            <span>Serving clients in Nigeria <br />
                                and beyond</span>
                        </div>
                        <div class="col-md-5 box">
                            <h3 class="counter" data-target="{{ $aboutUsMetrics['number_of_scholarships'] }}">
                                0
                            </h3>
                            <span>Law School Scholarships <br />
                                and Counting</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="story">
        <div class="container">
            <h3>Our Story</h3>
            <p>
                Law Accent is a full service law firm committed to bridging the gap
                between complex legal systems and real-life challenges. We do not just
                talk about the law - we practice it daily, representing individuals,
                families, and businesses with professionalism and purpose.
            </p>
            <p>
                Our name reflects our mission: to speak the language of the law in a
                way that is clear, relatable, and effective. We believe legal
                knowledge empowers, but legal action protects. That is why we combine
                expert legal representation with accessible advice, helping you make
                confident, informed decisions. At Law Accent, we are passionate about
                preventing legal pitfalls and resolving disputes proactively, through
                skilled counsel and a deep understanding of the communities we serve.
            </p>
        </div>
    </section>

    <section class="mission">
        <div class="container">
            <div class="missionwrapper">
                <div><img src="{{ asset("web/assets/images/aboutsvg.svg") }}" alt="" /> Our Vision</div>
                <div><img src="{{ asset("web/assets/images/aboutsvg.svg") }}" alt="" /> Our Mission</div>
                <div><img src="{{ asset("web/assets/images/aboutsvg.svg") }}" alt="" /> Our Core Values</div>
            </div>
            <div class="missionwrappermobile">
                <div><img src="{{ asset("web/assets/images/aboutsvg.svg") }}" alt="" /> Our Mission</div>
            </div>
            <div class="row missionrow">
                <img src="{{ asset("web/assets/images/halfpattern.webp") }}" alt="" class="missionimg" />
                <div class="missioncontent">
                    <div class="row missioncontentrow">
                        <div class="col-md-4">
                            <h2>Our Mission</h2>
                        </div>
                        <div class="col-md-8">
                            <ul>
                                <li>
                                    To transform the practice of law in Africa by building a
                                    forward-thinking legal team that <br />
                                    sets the pace for modern, client-focused legal services.
                                </li>
                                <br class="br" />
                                <li>
                                    To connect Africans and global markets, especially in
                                    Europe, to diverse legal <br />
                                    opportunities and pathways for expansion across the
                                    continent.
                                </li>
                                <br class="br" />
                                <li>
                                    To deliver seamless cross-border legal solutions through our
                                    presence in key <br />
                                    international markets.
                                </li>
                                <br class="br" />
                                <li>
                                    To promote legal literacy and empower individuals and
                                    businesses through accessible <br />
                                    legal education and plain language resources.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vision">
        <div class="container">
            <div class="vissionwrapper">
                <div><img src="{{ asset("web/assets/images/aboutsvg.svg") }}" alt="" /> Our Vision</div>
                <div><img src="{{ asset("web/assets/images/aboutsvg.svg") }}" alt="" /> Our Mission</div>
                <div><img src="{{ asset("web/assets/images/aboutsvg.svg") }}" alt="" /> Our Core Values</div>
            </div>
            <div class="visionwrappermobile">
                <div><img src="{{ asset("web/assets/images/aboutsvg.svg") }}" alt="" /> Our Vission</div>
            </div>
            <div class="row visionrow">
                <img src="{{ asset("web/assets/images/halfpattern.webp") }}" alt="" class="visionimg" />
                <div class="visioncontent">
                    <div class="row missioncontentrow">
                        <div class="col-md-4">
                            <h2>Our Vision</h2>
                        </div>
                        <div class="col-md-8">
                            <p>
                                To be the leading Pan-African law firm with a global
                                footprint, serving as a vital bridge <br />
                                between Africa, Europe, and the rest of the world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="corevalue">
        <div class="container">
            <div class="row">
                <h3>Our Core Values</h3>
                <div class="row corevaluerow">
                    <div class="col-md-3">
                        <div class="corevaluecard">
                            <img src="{{ asset("web/assets/images/scale.svg") }}" alt="image" />
                            <h4>Fairness</h4>
                            <p>
                                We are committed to fairness, honesty, and ethical conduct in
                                our dealings with clients, colleagues, partners, and the
                                public. We aim to deeply understand the needs of those we
                                serve and consider the broader impact of our legal solutions.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="corevaluecard">
                            <img src="{{ asset("web/assets/images/bulb.svg") }}" alt="image" />
                            <h4>Innovation</h4>
                            <p>
                                We are committed to innovation, continuously exploring
                                creative approaches, tools, and strategies to deliver modern
                                legal solutions that benefit our clients and community.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="corevaluecard">
                            <img src="{{ asset("web/assets/images/ethic.svg") }}" alt="image" />
                            <h4>Work Ethics</h4>
                            <p>
                                We possess a work ethic that is devoted to giving our clients
                                timely, accurate and logical solutions to problems through
                                focused work, determination and diligence
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="corevaluecard">
                            <img src="{{ asset("web/assets/images/puzzle.svg") }}" alt="image" />
                            <h4>Coordination</h4>
                            <p>
                                We are a well managed productive law firm that is poised to
                                make profitable contributions to our clients and the legal
                                system globally by synchronising efforts of all arms,
                                department and levels of the firm
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ourteam">
        <div class="container">
            <h2>Our Team</h2>
            <p>
                At Law Accent, our team consists of experienced legal professionals
                dedicated to providing expert guidance, strategic advisory services,
                and innovative legal solutions. We bring together a diverse group of
                lawyers, compliance specialists, and legal consultants who are
                passionate about simplifying complex legal matters for individuals and
                businesses. With a commitment to integrity, excellence, and client
                satisfaction, we work collaboratively to ensure that our clients
                receive the best legal support tailored to their needs.
            </p>

            @if (count($teamMembers) > 0)
                <div class="teamrow">
                    <div class="row">

                        @foreach ($teamMembers as $teamMember)
                            <div class="col-md-3 col-sm-6">
                                <div class="team-member">
                                    <div class="tooltip-wrapper">
                                        <a href="{{ @$teamMember->linkedin_url }}"><img src="{{ asset($teamMember->image_path) }}"
                                                alt="{{ $teamMember->full_name }}" class="profileImage" /></a>
                                        <div class="svg-wrap">
                                            <a href="{{ @$teamMember->linkedin_url }}"><img
                                                    src="{{ asset("web/assets/images/profilelinkedin.svg") }}" alt=""
                                                    class="profilelinkedin" /></a>
                                            <img src="{{ asset("web/assets/images/profilelogo.svg") }}" alt="" class="profilelogo" />
                                        </div>
                                    </div>
                                    <h6>{{ $teamMember->full_name }}</h6>
                                    <span>{{ $teamMember->role }}</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endif

    </section>

    <livewire:contact-us-form />

    @include('web.partials.newsletter')

    @push('script')
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const counters = document.querySelectorAll(".counter");

                counters.forEach((counter) => {
                    const updateCount = () => {
                        const target = +counter.getAttribute("data-target");
                        const count = +counter.innerText;
                        const increment = target / 100;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + increment);
                            setTimeout(updateCount, 80);
                        } else {
                            counter.innerText = target + "+";
                        }
                    };

                    updateCount();
                });
            });
        </script>
    @endpush

</x-app-layout>
