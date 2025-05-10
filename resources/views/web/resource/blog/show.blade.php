<x-app-layout>
    <section class="blogdetails">
        <div class="container">
            <div class="row blogdetailrow">
                <div class="image-wrapper">
                    <img src="{{ asset("web/assets/images/baldman.webp") }}" alt="Business Registration" />
                    <div class="text-overlay">
                        <h4>
                            {{ $blog->title }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogwriteup">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8 blogwriteupcol">

                    <div class="text-align-left">
                        {!! $blog->body !!}
                    </div>

                    <a href="{{ route('resources.download.blog', $blog->slug) }}">
                        <button class="btn pdfbutton">Download PDF</button>
                    </a>
                    
                </div>
                <div class="col-md-3 otherimg col-12">
                    <div class="otherimg-img">
                        <img src="{{ asset("web/assets/images/consult.webp") }}" alt="image" />
                    </div>
                    <div class="otherimgdiv">
                        <div class="contactdiv">
                            <span>CONTACT</span>
                            <img src="{{ asset("web/assets/images/line.svg") }}" alt="image" />
                        </div>
                        <h5>Get a Free Consultation Call!</h5>
                        <p>
                            Schedule your free consultation today to explore how our expert
                            legal services can support your business with compliance,
                            contracts, and regulatory guidance.
                        </p>
                        <div class="otherimgdivbutton">
                            <button class="btn">
                                <a href="mailto:info@lawaccent.com">Send An Email</a>
                            </button>
                            <button class="btn">
                                <a href="tel:+2347040092801">Call Us</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @if (count($recentBlogs))
        <section class="recent-blog pb-5">
            <div class="container">
                <h4 id="blogHeading">Recent Blog Posts</h4>

                <div id="blogContentWrapper">
                    @include('web.partials.blog-card', ['blogs' => $recentBlogs])
                </div>
            </div>
        </section>
    @endif


    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
