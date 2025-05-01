<x-app-layout>

    <section class="dataprotection">
        <div class="container">
            <div class="row dataprotectionrow">
                <div class="col-md-6 dataprotectiontext col-12">
                    <div>
                        <img src="{{ asset("web/assets/images/expertise.svg") }}" alt="" />
                        <h3>Real Estate Law</h3>
                    </div>
                </div>
                <div class="col-md-6 smillingman col-12">
                    <img src="{{ asset("web/assets/images/estate.webp") }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="otherservice">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-2 othercol col-12">
                    <h6>OTHER SERVICE</h6>
                    <a href="{{ route('practice-areas.data.protection.services') }}">
                        <p>
                            Data Protection <br />
                            and Advisory
                        </p>
                    </a>
                    <a href="{{ route('practice-areas.corporate.law.services') }}">
                        <p>Corporate Law</p>
                    </a>
                    <a href="{{ route('practice-areas.family.law.services') }}">
                        <p>Family Law</p>
                    </a>
                    <a href="{{ route('practice-areas.litigation.services') }}">
                        <p>Litigation</p>
                    </a>
                    <a href="{{ route('practice-areas.debt.recovery.services') }}.html">
                        <p>Debt Recovery</p>
                    </a>
                    <a href="{{ route('practice-areas.banking.and.finance.services') }}">
                        <p>
                            Banking and <br />
                            Finance Law
                        </p>
                    </a>
                </div>
                <div class="col-md-5 othercol-p col-12">
                    <p>Real Estate Law Services</p>
                    <p>
                        At Law Accent, we provide comprehensive legal services to
                        individuals, businesses, and investors navigating the complexities
                        of real estate transactions. Our team ensures that every aspect of
                        property acquisition, sales, leasing, and development complies
                        with Nigerian property laws and regulations. We conduct thorough
                        due diligence, including title verification, contract drafting,
                        and regulatory compliance checks, to safeguard our clients from
                        legal disputes and financial risks. Whether you are purchasing
                        residential or commercial property, our expertise ensures a
                        seamless and legally sound transaction.
                    </p>
                    <br />
                    <p>
                        Beyond transactional support, we offer strategic legal advisory
                        services on land use, zoning regulations, property financing, and
                        dispute resolution. We represent clients in matters involving
                        property litigation, landlord-tenant disputes, and real estate
                        investment structuring. Our goal is to help you mitigate risks,
                        protect your property interests, and maximise returns on your real
                        estate investments. With a client-focused approach and a deep
                        understanding of Nigeria's evolving real estate landscape, we
                        provide tailored legal solutions to meet your unique needs.
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

    @include('web.partials.contact-us-form')

    @include('web.partials.newsletter')

</x-app-layout>
