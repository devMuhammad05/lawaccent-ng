<x-app-layout>

    <section class="dataprotection">
        <div class="container">
          <div class="row dataprotectionrow">
            <div class="col-md-6 dataprotectiontext">
              <div>
                <img src="{{ asset("web/assets/images/expertise.svg") }}" alt="" />
                <h3>Corporate Law</h3>
              </div>
            </div>
            <div class="col-md-6 smillingman">
              <img src="{{ asset("web/assets/images/corporate.webp") }}" alt="" />
            </div>
          </div>
        </div>
    </section>

    <section class="otherservice">
    <div class="container">
        <div class="row justify-content-between">
        <div class="col-md-2 othercol">
            <h6>OTHER SERVICE</h6>
            <a href="{{ route('practice-areas.data.protection.services') }}"
            ><p>
                Data Protection <br />
                and Advisory
            </p></a
            >
            <a href="{{ route('practice-areas.family.law.services') }}"><p>Family Law</p></a>
            <a href="{{ route('practice-areas.litigation.services') }}"><p>Litigation</p></a>
            <a href="{{ route('practice-areas.real.estate.services') }}"><p>Real Estate Law</p></a>
            <a href="{{ route('practice-areas.debt.recovery.services') }}.html"><p>Debt Recovery</p></a>
            <a href="{{ route('practice-areas.banking.and.finance.services') }}"
            ><p>
                Banking and <br />
                Finance Law
            </p></a
            >
        </div>
        <div class="col-md-5 othercol-p">
            <p>Corporate Law Services</p>
            <p>
            Corporate Law Services At Law Accent, we provide comprehensive
            corporate law services tailored to businesses of all sizes.
            Whether you are a startup, SME, or large conglomerate, we assist
            with company formation, regulatory compliance, corporate
            governance, contract drafting, and dispute resolution. Our legal
            experts ensure that your business structure aligns with Nigerian
            corporate laws, including the Companies and Allied Matters Act
            (CAMA), while also addressing industry-specific legal
            requirements. From shareholder agreements to mergers and
            acquisitions, we provide strategic legal guidance to protect your
            business interests and promote long-term growth.
            </p>
            <br />
            <p>
            Beyond foundational legal support, we offer advisory services on
            corporate restructuring, compliance with regulatory bodies such as
            the Corporate Affairs Commission (CAC) and the Securities and
            Exchange Commission (SEC), and legal risk management. We help
            businesses navigate complex transactions, minimise liabilities,
            and resolve disputes efficiently through negotiation or litigation
            when necessary. Our goal is to provide proactive legal solutions
            that safeguard your business, ensuring it operates smoothly within
            the legal framework while seizing opportunities for expansion and
            innovation.
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

    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
