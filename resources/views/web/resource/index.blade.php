<x-app-layout>

    <section class="resources">
        <div class="container">
            <div class="resources-header">
                <img src="{{ asset("web/assets/images/lan-bordered.svg") }}" alt="image" />
                <h2>Resources</h2>
            </div>

            <div class="row chooserow justify-content-center">
                <div class="col-md-4">
                    <div class="resources-card">
                        <img src="{{ asset("web/assets/images/blog.svg") }}" alt="image" />
                        <a href="blogpost.html">
                            <h4>Blog Posts / Articles</h4>
                        </a>
                        <p>
                            Stay updated with expert insights on Nigerian legal trends,
                            regulatory changes, and business compliance.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="resources-card">
                        <img src="{{ asset("web/assets/images/faq.svg") }}" alt="image" />
                        <a href="faq.html">
                            <h4>FAQs</h4>
                        </a>
                        <p>
                            Find quick answers to common legal questions in Nigeria,
                            covering business setup, contracts, compliance, and more
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="resources-card">
                        <img src="{{ asset("web/assets/images/note.svg") }}" alt="image" />
                        <a href="{{ route(name: 'resources.case.studies') }}">
                            <h4>Case Studies</h4>
                        </a>
                        <p>
                            Explore real-world legal scenarios that highlight key principles
                            and best practices for businesses in Nigeria.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="resources-card">
                        <img src="{{ asset("web/assets/images/video.svg") }}" alt="image" />
                        <a href="mediahub.html">
                            <h4>Media Hub</h4>
                        </a>
                        <p>
                            Watch and listen to expert led discussions, explainer videos,
                            and legal insights tailored to Nigerian businesses
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="resources-card">
                        <img src="{{ asset("web/assets/images/briefcase.svg") }}" alt="image" />
                        <a href="doingbusiness.html">
                            <h4>Doing Business in Nigeria</h4>
                        </a>
                        <p>
                            Essential legal and regulatory information for businesses
                            entering or operating in Nigeria
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="resources-card">
                        <img src="{{ asset("web/assets/images/cross.svg") }}" alt="image" />
                        <a href="crossborder.html">
                            <h4>Cross Border Legal Services</h4>
                        </a>
                        <p>
                            Navigating cross-border legal challenges for smooth global
                            operations.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="resources-card">
                        <img src="{{ asset("web/assets/images/settings.svg") }}" alt="image" />
                        <a href="legalchecklist.html">
                            <h4>Legal Checklist and Assessment Tool</h4>
                        </a>
                        <p>
                            Legal checklists and tools to spot risks before they become
                            problems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('web.partials.contact-us-form')

    @include('web.partials.newsletter')

</x-app-layout>
