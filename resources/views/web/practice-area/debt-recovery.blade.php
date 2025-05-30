<x-app-layout>

    <section class="dataprotection">
        <div class="container">
            <div class="row dataprotectionrow">
                <div class="col-md-6 dataprotectiontext">
                    <div>
                        <img src="{{ asset("web/assets/images/expertise.svg") }}" alt="" />
                        <h3>Debt Recovery</h3>
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
                    <a href="{{ route('practice-areas.real.estate.services') }}">
                        <p>Real Estate Law</p>
                    </a>
                    <a href="{{ route('practice-areas.banking.and.finance.services') }}">
                        <p>
                            Banking and <br />
                            Finance Law
                        </p>
                    </a>
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
