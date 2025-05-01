<x-app-layout>

    <section class="dataprotection">
        <div class="container">
          <div class="row dataprotectionrow">
            <div class="col-md-6 dataprotectiontext">
              <div>
                <img src="assets/images/expertise.svg" alt="" />
                <h3>Debt Recovery</h3>
              </div>
            </div>
            <div class="col-md-6 smillingman">
              <img src="assets/images/laptop.webp" alt="" />
            </div>
          </div>
        </div>
    </section>

      <section class="otherservice">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-2 othercol col-12">
              <h6>OTHER SERVICE</h6>
              <a href="dataprotection.html"
                ><p>
                  Data Protection <br />
                  and Advisory
                </p></a
              >
              <a href="corporatelaw.html"><p>Corporate Law</p></a>
              <a href="familylaw.html"><p>Family Law</p></a>
              <a href="litigation.html"><p>Litigation</p></a>
              <a href="realestatelaw.html"><p>Real Estate Law</p></a>
              <a href="bankingandfinancelaw.html"
                ><p>
                  Banking and <br />
                  Finance Law
                </p></a
              >
            </div>
            <div class="col-md-5 othercol-p col-12">
              <p>Debt Recovery Services</p>
              <p>
                At Law Accent, we provide strategic and result-oriented debt
                recovery services to help businesses and individuals reclaim
                outstanding debts efficiently and legally. Our approach combines
                legal expertise with a deep understanding of commercial and
                financial regulations, ensuring that clients recover their funds
                while maintaining compliance with Nigerian debt recovery laws. We
                handle negotiations, demand letters, and alternative dispute
                resolution methods, such as mediation and arbitration, to
                facilitate amicable settlements. However, when necessary, we
                pursue litigation to enforce debt recovery through court
                proceedings, leveraging our legal proficiency to secure favourable
                outcomes.
              </p>
              <br />
              <p>
                Our team is committed to minimising financial losses by providing
                tailored recovery strategies that align with each client's
                specific needs. Whether dealing with unpaid invoices, defaulted
                loans, or complex commercial debt disputes, we take a proactive
                approach to accelerate recovery while preserving business
                relationships whenever possible. We also offer advisory services
                to help businesses implement preventive measures, such as well
                structured contracts and credit policies, reducing the risk of
                future bad debts. With Law Accent Nigeria, you gain a reliable
                legal partner dedicated to protecting your financial interests and
                ensuring that debts are recovered efficiently and ethically.
              </p>
            </div>
            <div class="col-md-3 otherimg col-12">
              <div class="otherimg-img">
                <img src="assets/images/consult.webp" alt="" />
              </div>
              <div class="otherimgdiv">
                <div class="contactdiv">
                  <span>CONTACT</span>
                  <img src="assets/images/line.svg" alt="" />
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
                <a href="scheduleconversation.html"
                  >Schedule a Consultation</a
                ></button
              ><br />
              <div class="buttonspread">
                <button class="btn">
                  <img src="assets/images/calling.svg" alt="image" />
                  <a href="tel:+2347040092801">Call Us</a></button
                ><br />
                <button class="btn">
                  <a href="mailto:info@lawaccent.com"><img src="assets/images/mail.svg" alt="image" /> Email Us</a>
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
