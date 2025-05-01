<x-app-layout>

    <section class="dataprotection">
        <div class="container">
            <div class="row dataprotectionrow">
                <div class="col-md-6 dataprotectiontext">
                    <div>
                        <img src="{{ asset("web/assets/images/expertise.svg") }}" alt="" />
                        <h3>Litigation</h3>
                    </div>
                </div>
                <div class="col-md-6 smillingman">
                    <img src="{{ asset("web/assets/images/litigation.webp") }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="otherservice">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-2 othercol">
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
                    <a href="{{ route('practice-areas.real.estate.services') }}">
                        <p>Real Estate Law</p>
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
                <div class="col-md-5 othercol-p">
                    <p>Litigation Services</p>
                    <p>
                        At Law Accent, we provide strategic and result-driven litigation
                        services to protect our clients' legal rights and interests.
                        Whether you are facing a business dispute, contract breach,
                        employment conflict, intellectual property infringement, or any
                        other legal challenge, our experienced litigators are committed to
                        advocating for you in and out of court. We take a meticulous
                        approach to case preparation, conducting in-depth legal research,
                        gathering compelling evidence, and crafting strong arguments to
                        present before the courts. Our goal is to resolve disputes
                        efficiently, whether through litigation, arbitration, or
                        alternative dispute resolution, always prioritising our clients'
                        best interests.
                    </p>
                    <br />
                    <p>
                        With extensive experience in Nigerian courts, from trial courts to
                        appellate levels, we represent individuals, businesses, and
                        organisations in complex legal matters. We understand that
                        litigation can be time-consuming and costly, which is why we also
                        explore negotiation and mediation when beneficial to our clients.
                        However, when litigation becomes necessary, we are fully prepared
                        to present a compelling case backed by thorough legal analysis and
                        persuasive advocacy. At Law Accent Nigeria, we are dedicated to
                        delivering effective legal representation that safeguards your
                        rights and interests.
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
