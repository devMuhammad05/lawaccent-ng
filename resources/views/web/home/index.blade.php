<x-app-layout>
    <section class="heroImage">
        <div class="container">
            <div class="row heroImageBottom">
                <img src="{{ asset("web/assets/images/lan.svg") }}" alt="image" />
                <h1>
                    Trusted Legal Expertise, <br />
                    Tailored to Your Needs
                </h1>
                <p>
                    Dedicated to providing strategic legal solutions that protect your
                    <br />
                    interests, resolve disputes, and guide you through every legal
                    challenge.
                </p>
                <div class="buttons">
                    <button class="btn">
                        <a href="mailto:info@lawaccent.com">Send An Email</a>
                    </button>
                    <button><a href="tel:+2347040092801">Call Us</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container">
            <div class="service-text">
                <h1>Comprehensive Legal Services</h1>
                <p>
                    We offer a broad range of legal solutions tailored to individuals,
                    businesses, and families. Our team of seasoned professionals is
                    committed to guiding you every step of the way, ensuring clarity,
                    confidence, and favourable outcomes.
                </p>
                <button class="btn">
                    <a href="{{ route("practice-areas.index") }}">Explore Our Services</a>
                </button>
            </div>
            @include('web.partials.services-cards')
        </div>
    </section>

    <section class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset("web/assets/images/about.svg") }}" alt="image" />
                    <h2>About Law Accent</h2>
                    <p>
                        A Pan-African Law Firm, strategically positioned as the vital
                        bridge between Africa and the Global marketplace. We leverage the
                        deep expertise of our lawyers across diverse jurisdictions to
                        seamlessly navigate clients through the complexities of the
                        continent's legal landscape.
                    </p>
                    <p>
                        Our clients tap from the experience and expertise of our lawyers
                        on complex transactions, high-stakes mergers and acquisitions,
                        capital markets activities, intellectual property rights,
                        regulatory compliance, tax issues, and virtually every other type
                        of legal matter that can impact the modern business or
                        institution.
                    </p>
                    <button class="btn btn-read-mobile">
                        <a href="{{ route("about-us") }}">Read More About Us</a>
                    </button>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset("web/assets/images/officewoman.webp") }}" alt="image" class="aboutusimage" />
                </div>
                <button class="btn btn-read-more">
                    <a href="{{ route("about-us") }}">Read More About Us</a>
                </button>
            </div>
        </div>
    </section>


    <section class="chooseus">
        <div class="container">
            <img src="{{ asset("web/assets/images/chooseus.svg") }}" alt="image" class="chooseimg" />
            <h2>
                What sets Law Accent apart in <br />
                today's legal landscape
            </h2>
            <div class="row chooserow">
                <div class="col-md-3">
                    <div class="chooseuscard">
                        <img src="{{ asset("web/assets/images/global.svg") }}" alt="image" />
                        <h4>Global Presence</h4>
                        <p>
                            With offices in the UK, Africa and synergies across Europe, we
                            offer local insight and international reach.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="chooseuscard">
                        <img src="{{ asset("web/assets/images/chat.svg") }}" alt="image" />
                        <h4>Plain Language Advocacy</h4>
                        <p>
                            We explain legal matters in clear, everyday terms — no jargon.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="chooseuscard">
                        <img src="{{ asset("web/assets/images/legal.svg") }}" alt="image" />
                        <h4>Legal Education Tools</h4>
                        <p>
                            Access videos, checklists, and webinars to stay informed,
                            empowered and educated.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="chooseuscard">
                        <img src="{{ asset("web/assets/images/service.svg") }}" alt="image" />
                        <h4>Diverse and Inclusive Legal Services</h4>
                        <p>
                            We cover a wide range of practice areas that reflect the diverse
                            needs of our clients across Africa and beyond.
                        </p>
                    </div>
                </div>
            </div>
            <hr />
        </div>
    </section>

    <section class="explore">
        <div class="container">
            <img src="{{ asset("web/assets/images/explore.svg") }}" alt="image" class="chooseimg" />
            <h2>
                Discover tools, insights, and services that put <br />
                the law within your reach.
            </h2>
            <div class="legal-grid">
                <a href="{{ route('our-impact.legal.literacy') }}" class="legal-row">
                    <span class="legal-title">Legal Literacy</span>
                    <span class="legal-description">Webinars and resources for growing your legal knowledge.</span>
                    <span class="legal-arrow">
                        <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
                    </span>
                </a>

                <a href="{{ route('resources.blogs') }}" class="legal-row">
                    <span class="legal-title">Articles / Blog</span>
                    <span class="legal-description">Articles, explainers, and case studies on key legal issues.</span>
                    <span class="legal-arrow">
                        <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
                    </span>
                </a>

                <a href="{{ route('resources.media.hub') }}" class="legal-row">
                    <span class="legal-title">Media Hub</span>
                    <span class="legal-description">Watch sessions led by experts on general legal topics</span>
                    <span class="legal-arrow">
                        <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
                    </span>
                </a>

                <a href="{{ route('our-impact.quizes.index') }}" class="legal-row">
                    <span class="legal-title">Law Quiz</span>
                    <span class="legal-description">Challenge yourself with quizzes on Nigerian and international
                        laws.</span>
                    <span class="legal-arrow">
                        <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
                    </span>
                </a>

                <a href="{{ route('resources.assessment.tool') }}" class="legal-row">
                    <span class="legal-title">Legal Checklists and Assessment</span>
                    <span class="legal-description">Identify legal risks and gap</span>
                    <span class="legal-arrow">
                        <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
                    </span>
                </a>

                <a href="{{ route('our-impact.law.school.scholarship') }}" class="legal-row">
                    <span class="legal-title">Law School Scholarship</span>
                    <span class="legal-description">Empowering the next generation of lawyers.</span>
                    <span class="legal-arrow">
                        <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
                    </span>
                </a>
            </div>
            <hr />
        </div>
    </section>


    @if ($caseStudies->isNotEmpty())
        <section class="casestudy">
            <div class="service-text">
                <h1>Case Studies</h1>
                <p>
                    Explore real-world legal scenarios that highlight key challenges,
                    applicable legal principles, and <br />
                    effective resolutions.
                </p>
                <button class="btn btn-case-study">
                    <a href="{{ route('resources.case.studies') }}">Explore All Case Studies</a>
                </button>
            </div>
            <div class="scroll-container">

                @foreach ($caseStudies as $caseStudy)
                    <div class="casestudycard">
                        <img src="{{ asset($caseStudy->thumbnail) }}" alt="{{ $caseStudy->title }}" />
                        <div class="casestudycard-body">
                            <div class="casestudycard-title">
                                {{ $caseStudy->title }}
                            </div>
                            <div class="casestudycard-subtitle">Legal Issue Explored:</div>
                            <div class="casestudycard-text">
                                {{ $caseStudy->legal_issues_explored }}
                            </div>
                            <a href="{{ route('resources.show.case.study', $caseStudy->slug) }}"
                                class="casestudyread-more-btn">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif


    @if ($faqs->isNotEmpty())
        <section class="faq-section">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <p class="text-center">
                    Find quick answers to common legal
                    questions in Nigeria, covering business
                    setup, contracts, compliance, and more.
                </p>
                @include('web.partials.faqs-section', $faqs)
            </div>
        </section>
    @endif


    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
