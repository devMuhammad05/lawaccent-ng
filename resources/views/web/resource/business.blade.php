<x-app-layout>


    <section class="aboutlawaccent">
        <div class="container">
            <img src="{{ asset("web/assets/images/resourcesvg.svg") }}" alt="image" />
            <h2>Doing Business In Nigeria</h2>
        </div>
    </section>

    <section class="doingbusiness">
        <div class="container">
            <div class="row doingbusinessrow">
                <div class="col-md-6">
                    <p>
                        Nigeria, Africa's largest economy and most populous nation, offers
                        vast business opportunities across diverse sectors, including
                        technology, finance, real estate, manufacturing, and agriculture.
                        However, successfully setting up and operating a business in
                        Nigeria requires a solid understanding of legal, regulatory, and
                        compliance frameworks. At Law Accent Nigeria, we provide expert
                        legal guidance to help businesses navigate the complexities of the
                        Nigerian market while ensuring full compliance with the law.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset("web/assets/images/flag.webp") }}" alt="" />
                </div>
                <div class="col-md-6 mobilescale">
                    <img src="{{ asset("web/assets/images/scale.webp") }}" alt="" class="scale-img" />
                </div>
                <div class="col-md-6">
                    <p>
                        From business registration and corporate structuring to taxation,
                        employment laws, contracts, and regulatory compliance, our team
                        assists local and foreign investors in establishing and growing
                        their businesses seamlessly. We also provide insights into
                        investment incentives, sector-specific regulations, intellectual
                        property protection, and dispute resolution mechanisms. Whether
                        you are launching a startup, expanding an existing business, or
                        seeking partnerships in Nigeria, Law Accent Nigeria offers
                        tailored legal solutions to help you operate efficiently and
                        securely.
                    </p>
                </div>
            </div>
        </div>
    </section>


    @if (count($blogs) > 0)
        <section class="recent-blog pb-5">
            <div class="container">
                <h4 id="blogHeading">Recent Blog Posts</h4>
                <div id="blogContentWrapper">
                    <div class="row recent-blogrow" data-category="all">
                        @forelse ($blogs as $blog)
                            <div class="col-md-4">
                                <div class="recentblogcard">
                                    <img src="{{ asset($blog->thumbnail) }}" alt="" />
                                    <div class="recentblogcard-body">
                                        <h5>{{ $blog->title }}</h5>
                                        <p>{{ Str::limit($blog->sub_heading, 200, '...') }}</p>
                                        <div class="recentblog-buttons">
                                            <button class="btn">
                                                <a href="{{ route('resources.show.blog', $blog->slug) }}">Read More</a>
                                            </button>
                                            <button class="btn">Download PDF</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No blog posts found.</p>
                        @endforelse
                    </div>
                </div>

            </div>
        </section>
    @endif

    <section class="businesscontact">
        <div class="container">
            <div class="row businesscontactrow">
                <h4>
                    Need expert legal support to start or expand your <br />
                    business in Nigeria? Contact us today!
                </h4>
                <div class="businesscontactbutton">
                    <button class="btn">
                        <a href="mailto:info@lawaccent.com">Send An Email</a>
                    </button>
                    <button class="btn">
                        <a href="tel:+2347040092801">Call Us</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
