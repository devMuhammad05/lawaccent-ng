
<x-app-layout>


    <section class="aboutlawaccent">
        <div class="container">
          <img src="{{ asset("web/assets/images/casestudysvg.svg") }}" alt="image" />
          <h2>
            {{ $caseStudy->title }}
          </h2>
        </div>
      </section>

      <section class="blogwriteup">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-8 blogwriteupcol">

                {!! $caseStudy->body !!}

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
          {{-- <div class="sharerow">
              share
              <div class="shareicon">
                <img src="assets/images/twitter.svg" alt="image" />
                <img src="assets/images/facebook.svg" alt="image" />
                <img src="assets/images/instagram.svg" alt="image" />
                <img src="assets/images/linked.svg" alt="image" />
              </div>
              <img src="assets/images/longline.svg" alt="image" class="longline" />
            </div> --}}
        </div>
      </section>

    @include('web.partials.newsletter')

</x-app-layout>
