<x-app-layout>

    <section class="dataprotection">
        <div class="container">
            <div class="row dataprotectionrow">
                <div class="col-md-6 dataprotectiontext">
                    <div>
                        <img src="{{ asset("web/assets/images/expertise.svg") }}" alt="" />
                        <h3>Family Law</h3>
                    </div>
                </div>
                <div class="col-md-6 smillingman">
                    <img src="{{ asset("web/assets/images/officewoman.webp") }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="otherservice">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-2 othercol">
                    <h6>OTHER SERVICE</h6>
                    <a href="dataprotection.html">
                        <p>
                            Data Protection <br />
                            and Advisory
                        </p>
                    </a>
                    <a href="corporatelaw.html">
                        <p>Corporate Law</p>
                    </a>
                    <a href="litigation.html">
                        <p>Litigation</p>
                    </a>
                    <a href="realestatelaw.html">
                        <p>Real Estate Law</p>
                    </a>
                    <a href="debtrecovery.html">
                        <p>Debt Recovery</p>
                    </a>
                    <a href="bankingandfinancelaw.html">
                        <p>
                            Banking and <br />
                            Finance Law
                        </p>
                    </a>
                </div>
                <div class="col-md-5 othercol-p">
                    <p>Family Law Services</p>
                    <p>
                        At Law Accent, we provide compassionate and strategic legal
                        support for individuals and families navigating complex family law
                        matters. Whether you are dealing with marriage, divorce, child
                        custody, adoption, or inheritance disputes, our experienced legal
                        team is committed to protecting your rights and securing the best
                        possible outcomes. We understand the emotional and legal
                        intricacies involved in family-related legal issues and work
                        closely with our clients to provide personalised solutions that
                        align with their unique circumstances. Our goal is to ensure a
                        smooth legal process while minimising stress and conflict.
                    </p>
                    <br />
                    <p>
                        From drafting prenuptial agreements to resolving disputes through
                        mediation or litigation, our firm handles a wide range of family
                        law matters with professionalism and discretion. We advocate for
                        fair settlements in divorce cases, ensuring equitable distribution
                        of assets and proper child support arrangements. In custody and
                        guardianship cases, we prioritise the child's best interests while
                        safeguarding parental rights. Our team also provides expert legal
                        guidance on adoption, paternity matters, and domestic violence
                        protection. At Law Accent Nigeria, we are dedicated to helping
                        families resolve legal issues with clarity, fairness, and
                        confidence.
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
