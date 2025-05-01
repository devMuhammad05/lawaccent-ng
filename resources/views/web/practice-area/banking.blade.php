<x-app-layout>
    <section class="dataprotection">
        <div class="container">
          <div class="row dataprotectionrow">
            <div class="col-md-6 dataprotectiontext">
              <div>
                <img src="{{ asset("web/assets/images/expertise.svg") }}" alt="" />
                <h3>Banking and Finance Law</h3>
              </div>
            </div>
            <div class="col-md-6 smillingman">
              <img src="{{ asset("web/assets/images/laptop.webp") }}" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="otherservice">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-2 othercol col-12">
              <h6>OTHER SERVICE</h6>
              <a href="{{ route('practice-areas.data.protection.services') }}"
                ><p>
                  Data Protection <br />
                  and Advisory
                </p></a
              >
              <a href="{{ route('practice-areas.corporate.law.services') }}"><p>Corporate Law</p></a>
              <a href="{{ route('practice-areas.family.law.services') }}"><p>Family Law</p></a>
              <a href="{{ route('practice-areas.litigation.services') }}"><p>Litigation</p></a>
              <a href="{{ route('practice-areas.real.estate.services') }}"><p>Real Estate Law</p></a>
              <a href="{{ route('practice-areas.debt.recovery.services') }}.html"><p>Debt Recovery</p></a>
            </div>
            <div class="col-md-5 othercol-p col-12">
              <p>Banking & Finance Law</p>
              <p>
                At Law Accent, we provide comprehensive legal services in banking
                and finance law, ensuring that financial institutions, businesses,
                and individuals operate within the bounds of regulatory compliance
                while maximising opportunities in the financial sector.
              </p>
              <p>
                Our expertise spans across corporate financing, regulatory
                compliance, fintech law, investment advisory, and dispute
                resolution, helping clients navigate the ever-evolving financial
                landscape. We assist banks, lenders, borrowers, and financial
                service providers in structuring and negotiating loan agreements,
                credit facilities, debt recovery, and financial transactions. Our
                legal team ensures that financial operations comply with
                regulations from the Central Bank of Nigeria (CBN), the Securities
                and Exchange Commission (SEC), and other financial regulatory
                bodies. Additionally, we provide expert guidance on fintech
                regulations, digital banking compliance, anti-money laundering
                (AML) policies, and financial risk management, ensuring that
                businesses in the finance sector remain compliant and competitive.
              </p>

              <p>
                Whether you are a bank, a startup, an investor, or a corporate
                entity, Law Accent Nigeria offers tailored legal solutions to
                protect your financial interests, mitigate risks, and facilitate
                smooth transactions. From regulatory advisory to contract
                negotiations and dispute resolution, we are committed to
                safeguarding your financial operations while ensuring full legal
                compliance in Nigeria and beyond.
              </p>
            </div>
            <div class="col-md-3 otherimg col-12">
              <div class="otherimg-img">
                <img src="{{ asset("web/assets/images/consult.webp") }}" alt="" />
              </div>
              <div class="otherimgdiv">
                <div class="contactdiv">
                  <span>CONTACT</span>
                  <img src="{{ asset("web/assets/images/line.svg") }}" alt="" />
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

      <section class="contact-section">
        <div class="container">
          <div class="contact-row">
            <div class="contact-info">
              <h1>Need Legal Clarity? Let's Talk.</h1>
              <p>For Enquiries and Consultations</p>
               <button class="btn">
                <a href="{{ route('consultation') }}"
                  >Schedule a Consultation</a
                ></button
              ><br />
              <div class="buttonspread">
                <button class="btn">
                  <img src="{{ asset("web/assets/images/calling.svg") }}" alt="image" />
                  <a href="tel:+2347040092801">Call Us</a></button
                ><br />
                <button class="btn">
                  <a href="mailto:info@lawaccent.com"
                    ><img src="{{ asset("web/assets/images/mail.svg") }}" alt="image" /> Email Us</a
                  >
                </button>
              </div>
            </div>

            <div class="contact-form">
              <form>
                <input type="text" placeholder="Your Name" required />
                <input type="email" placeholder="Email Address" required />
                <input type="tel" placeholder="Phone Number" required />
                <textarea placeholder="Describe Your Enquiries"></textarea>
                <button type="submit">Contact Us</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      @include('web.partials.contact-us-form')

      @include('web.partials.newsletter')


</x-app-layout>
