<x-app-layout>


    <section class="dataprotection">
        <div class="container">
          <div class="row dataprotectionrow">
            <div class="col-md-6 dataprotectiontext">
              <div>
                <img src="{{ asset("web/assets/images/resourcesvg.svg") }}" alt="image" />
                <h3>Cross Border Legal Services</h3>
                <p>
                  Expanding or operating internationally?<br />
                  Cross-border legal issues can get complex <br />
                  fast. This resource is designed to help your <br />
                  team stay compliant, avoid costly missteps, <br />
                  and operate smoothly across countries.
                </p>
              </div>
            </div>
            <div class="col-md-6 smillingman">
              <img src="{{ asset("web/assets/images/uk.webp") }}" alt="image" />
            </div>
          </div>
          <hr class="hr-cross" />
        </div>
      </section>

      <section class="chooseus">
        <div class="container">
          <h2>Our Cross-Border Legal Solutions</h2>
          <div class="row chooserow">
            <div class="col-md-4">
              <div class="chooseuscard">
                <img src="{{ asset("web/assets/images/01.svg") }}" alt="image" />
                <h4>Regulatory Compliance Mapping</h4>
                <p>Custom frameworks for every country you operate in</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="chooseuscard">
                <img src="{{ asset("web/assets/images/02.svg") }}" alt="image" />
                <h4>Multi-Jurisdictional Contract Drafting</h4>
                <p>Legally sound, enforceable contracts across borders.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="chooseuscard">
                <img src="{{ asset("web/assets/images/03.svg") }}" alt="image" />
                <h4>IP & Data Protection Strategy</h4>
                <p>Global intellectual property and privacy compliance.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="chooseuscard">
                <img src="{{ asset("web/assets/images/04.svg") }}" alt="image" />
                <h4>Business Expansion Legal Toolkit</h4>
                <p>
                  Full support for incorporation, licensing, and local compliance.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="chooseuscard">
                <img src="{{ asset("web/assets/images/05.svg") }}" alt="image" />
                <h4>Tax & Employment Law Advisory</h4>
                <p>Stay compliant with local labour and tax laws.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="chooseuscard">
                <img src="{{ asset("web/assets/images/06.svg") }}" alt="image" />
                <h4>International Dispute Resolution</h4>
                <p>Arbitration, litigation, and negotiation support.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      @if (count($caseStudies))
        <section>
            <div class="container">
            <h5 class="pt-5">Case Studies and Practical Insights</h5>
            <div class="row recent-caserow">
                @foreach ($caseStudies as $caseStudy)
                    @include('web.partials.case-study-card')
                @endforeach
            </div>
            </div>
        </section>
      @endif

      @if (count($blogs))
        <section class="recent-blog">
            <div class="container mt-5">
            <h4 id="blogHeading">Blog Posts</h4>
            <div id="blogContentWrapper">
                <div class="row recent-blogrow">
                    @foreach ($blogs as $blog)
                    @include('web.partials.blog-card')
                @endforeach
                </div>
            </div>
            </div>
        </section>
      @endif

      <section class="youtubesection">
        <div class="container">
          <h5>Video Hub</h5>
          <div class="row youtubesectionrow">
            <div class="col-md-6 col-12">
              <div class="youtube-card">
                <iframe
                  src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0"
                  frameborder="0"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="youtube-card">
                <iframe
                  src="https://www.youtube.com/embed/3JZ_D3ELwOQ?rel=0"
                  frameborder="0"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
          </div>
          {{-- <div class="loadmore">
            <div class="loadmorediv"></div>
            <button class="btn py-2 px-3">Load More Videos</button>
            <div class="loadmorediv"></div>
          </div> --}}
        </div>
      </section>

      @if (count($faqs))
        <section class="faq-section">
            <div class="container mt-5">
            <h5>Frequently Asked Questions</h5>
            @include('web.partials.faq-accordion')
            </div>
        </section>
      @endif


    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
