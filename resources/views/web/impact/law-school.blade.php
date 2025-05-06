<x-app-layout>

    <section class="dataprotection">
        <div class="container">
          <div class="row dataprotectionrow">
            <div class="col-md-6 dataprotectiontext">
              <div>
                <img src="{{ asset("web/assets/images/social.svg") }}" alt="image" />
                <h3>
                  Annual Law School <br />
                  Scholarship Programme
                </h3>
                <p>
                  At Law Accent, we believe that knowledge of the law <br />
                  is essential for individuals, businesses, and <br />
                  communities to make informed decisions and <br />
                  protect their rights.
                </p>
              </div>
            </div>
            <div class="col-md-6 smillingman">
              <img src="{{ asset("web/assets/images/ladyscholar.webp") }}" alt="image" />
            </div>
          </div>
        </div>
      </section>

      <section class="Scholarship">
        <div class="container">
          <h3>About the Scholarship</h3>
          <p>
            The Law Accent Annual Law School Scholarship provides financial
            assistance to <br />
            promising law graduates pursuing their Nigerian Law School (NLS)
            programme. This <br />
            initiative is part of our Corporate Social Responsibility (CSR)
            efforts to promote legal <br />
            education, diversity, and equal opportunities in the legal profession.
          </p>
          <div class="row Scholarshiprow">
            <div class="col-md-5">
              <h4>Scholarship Benefits</h4>
              <ol>
                <li>
                  Full or Partial Tuition Coverage - Financial aid to ease the
                  <br />
                  burden of law school fees.
                </li>
                <li>
                  Mentorship & Career Support - Scholars receive <br />
                  professional guidance from experienced legal practitioners.
                </li>
                <li>
                  Internship Opportunities - Gain hands-on experience <br />
                  through internships at top law firms or corporate legal
                  departments.
                </li>
                <li>
                  Networking & Development - Access to exclusive <br />
                  workshops, seminars, and industry connections.
                </li>
              </ol>
            </div>
            <div class="col-md-5">
              <img src="{{ asset("web/assets/images/malegraduate.webp") }}" alt="image" />
            </div>
            <div class="criteria">
              <h4>Eligibility Criteria</h4>
              <p>To qualify for the scholarship, applicants must:</p>
            </div>

            <div class="col-md-5">
              <img src="{{ asset("web/assets/images/femalegraduate.webp") }}" alt="image" />
            </div>
            <div class="col-md-5 laww">
              <ol>
                <li>
                  Have obtained a law degree (LL.B.) from a recognised university.
                </li>
                <li>
                  Have an outstanding academic record with a minimum of
                  Second-Class Upper (2:1).
                </li>
                <li>
                  Demonstrate leadership skills and commitment to legal advocacy,
                  public service, or social justice.
                </li>
                <li>Provide proof of financial need.</li>
                <li>Have secured admission into the Nigerian Law School.</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <section class="scholarshipapply">
        <div class="container">
          <div class="scholarshipapply-text">
            <h3>How to Apply</h3>
            <p>Interested candidates must complete the following steps:</p>
          </div>
          <div class="row scholarshipapplyrow">
            <div class="col-md-3">
              <div class="scholarshipapplyrowcard">
                <img src="{{ asset("web/assets/images/01svg.svg") }}" alt="image" />
                <p>
                  <b
                    >Fill out the online <br class="br" />
                    application form</b
                  >
                </p>
                <button class="btn btnapplyhere">
                  <a href="{{ route('our-impact.scholarship') }}">Apply Here</a>
                </button>
              </div>
            </div>
            <div class="col-md-3">
              <div class="scholarshipapplyrowcard">
                <img src="{{ asset("web/assets/images/02svg.svg") }}" alt="image" />
                <p>
                  <b
                    >Submit supporting <br class="br" />
                    documents</b
                  ><br class="br" /><br class="br" />
                  <small>(See the list of documents below)</small>
                </p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="scholarshipapplyrowcard">
                <img src="{{ asset("web/assets/images/03svg.svg") }}" alt="image" />
                <p>
                  <b
                    >Shortlisted candidates <br class="br" />
                    will be invited for <br class="br" />
                    an interview.</b
                  >
                </p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="scholarshipapplyrowcard">
                <img src="{{ asset("web/assets/images/04svg.svg") }}" alt="image" />
                <p>
                  <b
                    >Final selection and <br class="br" />
                    award announcement.</b
                  >
                </p>
              </div>
            </div>
          </div>
          <p class="last-text">
            <b>Supporting documents include:</b> Academic transcripts and degree
            certificate, personal statement (500 words) on career goals and how
            the scholarship will impact you, recommendation letter from a
            professor, employer, or legal professional, Proof of financial need
            (e.g., income statement, sponsorship request).
          </p>
        </div>
      </section>

      <section class="businesscontact">
        <div class="container">
          <div class="row businesscontactrow">
            <h3 class="getext">Join the Future of Legal Excellence!</h3>
            <p>
              If you are passionate about law and need financial assistance to
              complete your <br />
              legal education, we encourage you to apply for the Law Accent Annual
              Law <br />
              School Scholarship.
            </p>

            <p>
              📩 For enquiries, contact us or visit our office. <br class="br" />
              🚀 Apply now and take the next step toward a successful legal
              career!
            </p>
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
