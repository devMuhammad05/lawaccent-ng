<x-app-layout>

    <section class="aboutlawaccent">
        <div class="container-fluid">
            <img src="{{ asset("web/assets/images/lan-bordered.svg") }}" alt="image" />
            <h2>
                Our Impact <br class="br" />
                (Corporate Social Responsibility)
            </h2>
            <p>
                At Law Accent, we believe in using our legal expertise to create a
                meaningful impact beyond <br />
                the practice of law. Our Corporate Social Responsibility (CSR)
                initiatives reflect our <br />
                commitment to ethical practice, social justice, and community
                development.
            </p>
            <img src="{{ asset("web/assets/images/manwoman.webp") }}" alt="image" width="100%" />
        </div>
    </section>

    <section class="chooseus">
        <div class="container">
            <h2>Our Commitment to Society</h2>
            <p class="text-center">
                As a responsible legal service provider, we actively <br />
                contribute to social good through initiatives that promote:
            </p>
            <div class="row chooserow">
                <div class="col-md-4">
                    <div class="chooseuscard">
                        <img src="{{ asset("web/assets/images/01.svg") }}" alt="image" />
                        <h4>Access to Justice</h4>
                        <p>
                            Providing free legal consultations and pro bono services to
                            underserved communities.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chooseuscard">
                        <img src="{{ asset("web/assets/images/02.svg") }}" alt="image" />
                        <h4>Legal Awareness & Education</h4>
                        <p>
                            Conducting workshops and seminars to educate individuals and
                            businesses on their legal rights and obligations.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chooseuscard">
                        <img src="{{ asset("web/assets/images/03.svg") }}" alt="image" />
                        <h4>Ethical & Sustainable Business Practices</h4>
                        <p>
                            Upholding the highest standards of integrity, fairness, and
                            compliance in our legal services..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="csrinitiatives">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <h3>Our CSR Initiatives</h3>
                    <ol>
                        <li>
                            <u>Legal Literacy & Public Education</u> <br />
                            Through partnerships with schools, universities, and NGOs, we
                            organise legal literacy programmes to empower people with
                            knowledge about their rights and responsibilities under Nigerian
                            law.
                        </li>
                        <br class="br" />
                        <li>
                            <u>Law School Scholarship Programme</u><br />
                            We are committed to supporting the next generation of legal
                            professionals. Our Law School Scholarship Programme provides
                            financial assistance to outstanding law students who demonstrate
                            academic excellence and a passion for justice but face financial
                            barriers.
                        </li>
                        <br class="br" />
                        <li>
                            <u>Environmental Responsibility</u><br />
                            While legal practice has minimal environmental impact, we aim to
                            adopt sustainable practices such as paperless documentation,
                            digital case management, and energy-efficient office operations
                            to reduce our carbon footprint.
                        </li>
                        <br class="br" />
                        <li>
                            <u>Community Engagement & Social Impact</u><br />
                            We collaborate with non-profit organisations, human rights
                            groups, and local communities to advocate for policy reforms and
                            social change in areas like human rights, consumer protection,
                            and corporate ethics.
                        </li>
                    </ol>
                </div>
                <div class="col-md-5 col-12 sisterimage">
                    <img src="{{ asset("web/assets/images/sisters.webp") }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="businesscontact">
        <div class="container">
            <div class="row businesscontactrow">
                <h4>Join Us in Making a Difference</h4>
                <p>
                    At Law Accent, we recognise that law is a powerful tool for change.
                    We are <br />
                    always open to partnerships with organisations and individuals who
                    share our <br />
                    vision for a fairer and more just society.
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

    @include('web.partials.contact-us-form')

    @include('web.partials.newsletter')

</x-app-layout>
