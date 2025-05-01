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
            <div class="row servicerow justify-content-center">
                <div class="col-md-4">
                    <div class="serviceCard">
                        <img src="{{ asset("web/assets/images/robot.webp") }}" class="card-img-top" alt="..." />
                        <div class="cardBody">
                            <h5>Data Protection and Advisory Services</h5>
                            <p>Expert guidance on compliance and data security.</p>
                            <a href="dataprotection.html"><button class="btn">Read More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serviceCard">
                        <img src="{{ asset("web/assets/images/law.webp") }}" class="card-img-top" alt="..." />
                        <div class="cardBody">
                            <h5>Corporate Law</h5>
                            <p>
                                Advising businesses on contracts, compliance, and growth
                                strategies.
                            </p>
                            <a href="{{ route('practice-areas.corporate.law.services') }}"><button class="btn">Read More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serviceCard">
                        <img src="{{ asset("web/assets/images/family.webp") }}" class="card-img-top" alt="..." />
                        <div class="cardBody">
                            <h5>Family Law</h5>
                            <p>
                                Guiding families through sensitive matters such as divorce,
                                custody, and maintentance.
                            </p>
                            <a href="familylaw.html"><button class="btn">Read More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serviceCard">
                        <img src="{{ asset("web/assets/images/judge.webp") }}" class="card-img-top" alt="..." />
                        <div class="cardBody">
                            <h5>Litigation</h5>
                            <p>
                                Professional representation to protect your rights and achieve
                                justice.
                            </p>
                            <a href="{{ route('practice-areas.litigation.services') }}"><button class="btn">Read More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serviceCard">
                        <img src="{{ asset("web/assets/images/realestate.webp") }}" class="card-img-top" alt="..." />
                        <div class="cardBody">
                            <h5>Real Estate Law</h5>
                            <p>
                                Seamless legal support for property transactions, leases, and
                                disputes.
                            </p>
                            <a href="{{ route('practice-areas.real.estate.services') }}"><button class="btn">Read More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serviceCard">
                        <img src="{{ asset("web/assets/images/debt.webp") }}" class="card-img-top" alt="..." />
                        <div class="cardBody">
                            <h5>Debt Recovery</h5>
                            <p>
                                Reclaim lost revenue efficiently with our Debt Recovery as a
                                Service.
                            </p>
                            <a href="{{ route('practice-areas.debt.recovery.services') }}.html"><button class="btn">Read More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serviceCard">
                        <img src="{{ asset("web/assets/images/calculator.webp") }}" class="card-img-top" alt="..." />
                        <div class="cardBody">
                            <h5>Banking and Finance Law</h5>
                            <p>
                                Comprehensive legal services for banking, finance, and
                                investment transactions.
                            </p>
                            <a href="{{ route('practice-areas.banking.and.finance.services') }}"><button class="btn">Read More</button></a>
                        </div>
                    </div>
                </div>
            </div>
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
          <a href="#" class="legal-row">
            <span class="legal-title">Legal Literacy</span>
            <span class="legal-description"
              >Webinars and resources for growing your legal knowledge.</span
            >
            <span class="legal-arrow">
              <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
            </span>
          </a>

          <a href="blogpost.html" class="legal-row">
            <span class="legal-title">Articles / Blog</span>
            <span class="legal-description"
              >Articles, explainers, and case studies on key legal issues.</span
            >
            <span class="legal-arrow">
              <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
            </span>
          </a>

          <a href="mediahub.html" class="legal-row">
            <span class="legal-title">Media Hub</span>
            <span class="legal-description"
              >Watch sessions led by experts on general legal topics</span
            >
            <span class="legal-arrow">
              <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
            </span>
          </a>

          <a href="#" class="legal-row">
            <span class="legal-title">Law Quiz</span>
            <span class="legal-description"
              >Challenge yourself with quizzes on Nigerian and international
              laws.</span
            >
            <span class="legal-arrow">
              <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
            </span>
          </a>

          <a href="legalchecklist.html" class="legal-row">
            <span class="legal-title">Legal Checklists and Assessment</span>
            <span class="legal-description">Identify legal risks and gap</span>
            <span class="legal-arrow">
              <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
            </span>
          </a>

          <a href="#" class="legal-row">
            <span class="legal-title">Law School Scholarship</span>
            <span class="legal-description"
              >Empowering the next generation of lawyers.</span
            >
            <span class="legal-arrow">
              <img src="{{ asset("web/assets/images/arrow.svg") }}" alt="image" />
            </span>
          </a>
        </div>
        <hr />
      </div>
    </section>

    <section class="casestudy">
      <div class="service-text">
        <h1>Case Studies</h1>
        <p>
          Explore real-world legal scenarios that highlight key challenges,
          applicable legal principles, and <br />
          effective resolutions.
        </p>
        <button class="btn btn-case-study">
          <a href="casestudies.html">Explore All Case Studies</a>
        </button>
      </div>
      <div class="scroll-container">
        <div class="casestudycard">
          <img src="{{ asset("web/assets/images/stickynote.webp") }}" alt="Sticky notes" />
          <div class="casestudycard-body">
            <div class="casestudycard-title">
              Data Privacy Compliance<br />Under the NDPR
            </div>
            <div class="casestudycard-subtitle">Legal Issue Explored:</div>
            <div class="casestudycard-text">
              Understanding the obligations of businesses under the Nigeria Data
              Protection Regulation (NDPR) and the consequences of
              non-compliance.
            </div>
            <a href="casestudydetails.html" class="casestudyread-more-btn"
              >Read More</a
            >
          </div>
        </div>

        <div class="casestudycard">
          <img src="{{ asset("web/assets/images/stickynote.webp") }}" alt="Sticky notes" />
          <div class="casestudycard-body">
            <div class="casestudycard-title">
              Data Privacy Compliance<br />Under the NDPR
            </div>
            <div class="casestudycard-subtitle">Legal Issue Explored:</div>
            <div class="casestudycard-text">
              Understanding the obligations of businesses under the Nigeria Data
              Protection Regulation (NDPR) and the consequences of
              non-compliance.
            </div>
            <a href="casestudydetails.html" class="casestudyread-more-btn"
              >Read More</a
            >
          </div>
        </div>

        <div class="casestudycard">
          <img src="{{ asset("web/assets/images/stickynote.webp") }}" alt="Sticky notes" />
          <div class="casestudycard-body">
            <div class="casestudycard-title">
              Data Privacy Compliance<br />Under the NDPR
            </div>
            <div class="casestudycard-subtitle">Legal Issue Explored:</div>
            <div class="casestudycard-text">
              Understanding the obligations of businesses under the Nigeria Data
              Protection Regulation (NDPR) and the consequences of
              non-compliance.
            </div>
            <a href="casestudydetails.html" class="casestudyread-more-btn"
              >Read More</a
            >
          </div>
        </div>

        <div class="casestudycard">
          <img src="{{ asset("web/assets/images/stickynote.webp") }}" alt="Sticky notes" />
          <div class="casestudycard-body">
            <div class="casestudycard-title">
              Data Privacy Compliance<br />Under the NDPR
            </div>
            <div class="casestudycard-subtitle">Legal Issue Explored:</div>
            <div class="casestudycard-text">
              Understanding the obligations of businesses under the Nigeria Data
              Protection Regulation (NDPR) and the consequences of
              non-compliance.
            </div>
            <a href="casestudydetails.html" class="casestudyread-more-btn"
              >Read More</a
            >
          </div>
        </div>

        <div class="casestudycard">
          <img src="{{ asset("web/assets/images/stickynote.webp") }}" alt="Sticky notes" />
          <div class="casestudycard-body">
            <div class="casestudycard-title">
              Data Privacy Compliance<br />Under the NDPR
            </div>
            <div class="casestudycard-subtitle">Legal Issue Explored:</div>
            <div class="casestudycard-text">
              Understanding the obligations of businesses under the Nigeria Data
              Protection Regulation (NDPR) and the consequences of
              non-compliance.
            </div>
            <a href="casestudydetails.html" class="casestudyread-more-btn"
              >Read More</a
            >
          </div>
        </div>
        <div class="casestudycard">
          <img src="{{ asset("web/assets/images/stickynote.webp") }}" alt="Sticky notes" />
          <div class="casestudycard-body">
            <div class="casestudycard-title">
              Data Privacy Compliance<br />Under the NDPR
            </div>
            <div class="casestudycard-subtitle">Legal Issue Explored:</div>
            <div class="casestudycard-text">
              Understanding the obligations of businesses under the Nigeria Data
              Protection Regulation (NDPR) and the consequences of
              non-compliance.
            </div>
            <a href="casestudydetails.html" class="casestudyread-more-btn"
              >Read More</a
            >
          </div>
        </div>
        <div class="casestudycard">
          <img src="{{ asset("web/assets/images/stickynote.webp") }}" alt="Sticky notes" />
          <div class="casestudycard-body">
            <div class="casestudycard-title">
              Data Privacy Compliance<br />Under the NDPR
            </div>
            <div class="casestudycard-subtitle">Legal Issue Explored:</div>
            <div class="casestudycard-text">
              Understanding the obligations of businesses under the Nigeria Data
              Protection Regulation (NDPR) and the consequences of
              non-compliance.
            </div>
            <a href="casestudydetails.html" class="casestudyread-more-btn"
              >Read More</a
            >
          </div>
        </div>
      </div>
    </section>


    @include('web.partials.contact-us-form')

    @include('web.partials.newsletter')

</x-app-layout>
