<x-app-layout>

    <!--=============================
        DISPLAY ANY ERROR START
    ==============================-->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @php
                flash()->error("$error")
            @endphp
        @endforeach
    @endif
    <!--=============================
       DISPLAY ANY ERROR END
    ==============================-->

    <section class="sectiontitle">
        <div class="container">
            <div class="row sectiontitlerow">
                <div class="col-md-6 col-12">
                    <a href="{{ route('our-impact.legal.literacy') }}#webinar">
                        <div class="backicon">
                            <img src="{{ asset("web/assets/images/lessthan.svg") }}" alt="" />
                            <span>Back To Webinars</span>
                        </div>
                    </a>
                    <h4 class="pt-4">{{ $pastWebinar->title }}</h4>
                    <p>{{ $pastWebinar->date->format('d M Y') }}</p>

                    <img src="{{ asset("web/assets/images/webline.svg") }}" alt="" />
                    <h4 class="accesstext">Access the Materials</h4>
                    <p>
                        You can access the materials and presentation from this <br />
                        event below. If you have any enquiries,
                        <a href="{{ route('contact-us') }}"><span class="contactspan">contact us.</span></a>
                    </p>
                    <div class="btn-container">
                        <a href="{{ $pastWebinar->recording_url }}"><button class="btn btnrsvp">
                                View the Webinar Recording
                            </button></a>
                        <a href="{{ $pastWebinar->material_link }}"><button class="btn downloadmat">
                                Download the Material Here
                            </button></a>
                    </div>
                </div>
                <div class="col-md-4 col-12 webmob">
                    <img src="{{ asset("web/assets/images/laptophone.webp") }}" alt="image" />
                </div>
            </div>
        </div>
    </section>

    @include('web.partials.newsletter')


</x-app-layout>
