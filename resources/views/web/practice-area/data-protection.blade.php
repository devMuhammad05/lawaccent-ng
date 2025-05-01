<x-app-layout>

    <section class="dataprotection">
        <div class="container">
          <div class="row dataprotectionrow">
            <div class="col-md-6 dataprotectiontext">
              <div>
                <img
                  src="assets/images/expertise.svg"
                  alt=""
                  class="dataprotectiontext-img"
                />
                <h3>
                  Data Protection and <br />
                  Advisory Services
                </h3>
              </div>
            </div>
            <div class="col-md-6 smillingman">
              <img src="assets/images/smillingman.webp" alt="" />
            </div>
          </div>
        </div>
    </section>

    <section class="otherservice">
    <div class="container">
        <div class="row justify-content-between">
        <div class="col-md-2 othercol">
            <h6>OTHER SERVICE</h6>
            <a href="corporatelaw.html"><p>Corporate Law</p></a>
            <a href="familylaw.html"><p>Family Law</p></a>
            <a href="litigation.html"><p>Litigation</p></a>
            <a href="realestatelaw.html"><p>Real Estate Law</p></a>
            <a href="debtrecovery.html"><p>Debt Recovery</p></a>
            <a href="bankingandfinancelaw.html"
            ><p>
                Banking and <br />
                Finance Law
            </p></a
            >
        </div>
        <div class="col-md-5 othercol-p">
            <p>Data Protection and Advisory Services</p>
            <p>
            At Law Accent, we provide expert Data Protection & Advisory
            Services to help businesses comply with Nigeria's evolving data
            privacy laws, including the Nigeria Data Protection Act (NDPA) and
            international frameworks like the General Data Protection
            Regulation (GDPR). In today's digital economy, protecting personal
            and business data is essential to avoid legal risks, maintain
            customer trust, and ensure smooth business operations. Our team of
            legal professionals offers comprehensive solutions, including
            compliance audits, privacy policy drafting, data protection impact
            assessments (DPIA), and regulatory advisory services. Whether you
            are a startup or an established enterprise, we tailor our
            strategies to align with your business structure, ensuring that
            your data handling practices meet the highest legal and ethical
            standards.
            </p>
            <br />
            <p>
            Beyond compliance, we help organisations strengthen their data
            security measures and risk management strategies. Our services
            extend to data breach response planning, employee training on data
            privacy, and continuous monitoring of regulatory updates to keep
            your business ahead of legal changes. We work closely with clients
            to identify potential vulnerabilities and implement proactive
            solutions that minimise legal and financial liabilities. With our
            expertise, your business can confidently navigate the complexities
            of data protection, ensuring regulatory compliance while fostering
            a culture of transparency and accountability. Schedule a free
            consultation today to discuss how we can help safeguard your
            business's data and ensure compliance with Nigeria's data
            protection laws.
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

    <section class="bottomsection">
    <div class="container">
        <div class="row align-item-center">
        <div class="col-md-6">
            <p>
            <b>
                Law Accent has an expert office in the United <br />
                Kingdom and across Europe serving data protection <br />
                needs like:</b
            >
            </p>
            <ul>
            <li>Outsourced Data Protection Officer (DPO) Services</li>
            <li>EU & UK Representation Services</li>
            <li>Data Protection Consultancy and Interim Support</li>
            <li>Data Protection Training & Awareness</li>
            <li>DSAR Response Services</li>
            <li>Caldicott Guardian Service</li>
            </ul>
            and more
            <a href="http://lawaccent.co.uk/">
            <p>Click here to go to Law Accent UK website</p></a
            >
        </div>
        <div class="col-md-6 scaleimg">
            <img src="assets/images/scale.webp" alt="" />
        </div>
        </div>
    </div>
    </section>

    @include('web.partials.contact-us-form')

    @include('web.partials.newsletter')

</x-app-layout>
