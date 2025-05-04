<x-app-layout>
    <section class="aboutlawaccent">
        <div class="container">
            <img src="{{ asset("web/assets/images/lan-bordered.svg") }}" alt="image" />
            <h2>Practice Areas</h2>
            <p>
                Law Accent specialises in corporate law, regulatory compliance, data
                protection, intellectual <br />
                property, contract negotiation, and dispute resolution. We provide
                strategic legal solutions to <br />
                keep individuals and businesses compliant, protected, and informed.
            </p>
        </div>
        <div class="legalrow">
            <img src="{{ asset("web/assets/images/practicarea.webp") }}" alt="image" />
        </div>
    </section>

    <section class="legalexpertise">
        <h2>
            Legal Expertise Tailored <br />
            To Your Needs
        </h2>
        <div class="greenlegalcontainer">
            <div class="row align-items-center justify-content-evenly">
                <div class="col-md-8 containerrow">
                    <p>
                        At Law Accent, we understand that legal challenges are rarely
                        one-size-fits-all. That is why we offer a comprehensive range of
                        services designed to address your specific needs, from complex
                        litigation and intricate contract negotiations to intellectual
                        property protection and strategic business advice. Our team of
                        experienced experts possesses a deep understanding of various
                        legal landscapes, allowing them to provide insightful solutions
                        tailored to your unique goals and objectives.
                    </p>
                    <br />
                    <p>
                        We believe in building strong client relationships based on open
                        communication and trust. We take the time to understand your
                        unique context; whether personal, commercial, or
                        community-related, so we can provide legal solutions that truly
                        align with your needs and goals. This collaborative approach
                        allows us to develop a customised legal strategy that aligns with
                        your overall vision. Throughout the process, we remain readily
                        available to answer your questions and address any concerns you
                        may have. We are committed to being a trusted partner in your
                        success, guiding you through legal complexities with clarity and
                        confidence.
                    </p>
                </div>
                <div class="col-md-4 legalimg">
                    <img src="{{ asset("web/assets/images/man.webp") }}" alt="image" />
                    <img src="{{ asset("web/assets/images/Logo.svg") }}" alt="image" />
                    <div class="legalcard">
                        <h3>150+</h3>
                        <p>
                            Legal Solutions <br />
                            Offered
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="legalrowcontainer container">
            @include('web.partials.services-cards')
        </div>
    </section>

    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
