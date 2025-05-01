<x-app-layout>

    <section class="aboutlawaccent">
        <div class="container">
            <img src="{{ asset("web/assets/images/lan-bordered.svg") }}" alt="image" />
            <h2>Contact Us at Law Accent</h2>
            <p>Reach Out to Law Accent for Expert Legal Assistance</p>
        </div>
        <div class="legalrow">
            <img src="{{ asset("web/assets/images/lawmen.webp") }}" alt="image" />
        </div>
    </section>

    <section class="legalexpertise">
        <div class="container">
            <h2>
                Reach out to us through <br />
                these contacts
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-7 contact col-12">
                    <div class="servicecard">
                        <img src="{{ asset("web/assets/images/linesvg.svg") }}" alt="" />
                        <div class="servicetext">
                            <h6>Data Protection Services</h6>
                            <span>
                                <img src="{{ asset("web/assets/images/callsvg.svg") }}" alt="" />
                                +234 704 009 2801
                            </span>
                        </div>
                    </div>

                    <div class="servicecard">
                        <img src="{{ asset("web/assets/images/linesvg.svg") }}" alt="" />
                        <div class="servicetext">
                            <h6>Corporate Law</h6>
                            <span>
                                <img src="{{ asset("web/assets/images/callsvg.svg") }}" alt="" />
                                +234 913 537 4214
                            </span>
                        </div>
                    </div>

                    <div class="servicecard">
                        <img src="{{ asset("web/assets/images/linesvg.svg") }}" alt="" />
                        <div class="servicetext">
                            <h6>Law Accent, Lagos</h6>
                            <span>
                                <img src="{{ asset("web/assets/images/callsvg.svg") }}" alt="" />
                                +234 704 009 2801
                            </span>
                        </div>
                    </div>

                    <div class="servicecard">
                        <img src="{{ asset("web/assets/images/linesvg.svg") }}" alt="" />
                        <div class="servicetext">
                            <h6>Law Accent, Ogun</h6>
                            <span>
                                <img src="{{ asset("web/assets/images/callsvg.svg") }}" alt="" />
                                +234 814 590 7521
                            </span>
                        </div>
                    </div>

                    <div class="servicecard">
                        <img src="{{ asset("web/assets/images/linesvg.svg") }}" alt="" />
                        <div class="servicetext">
                            <h6>Litigation</h6>
                            <span>
                                <img src="{{ asset("web/assets/images/callsvg.svg") }}" alt="" />
                                +234 704 009 2801
                            </span>
                        </div>
                    </div>

                    <div class="servicecard">
                        <img src="{{ asset("web/assets/images/linesvg.svg") }}" alt="" />
                        <div class="servicetext">
                            <h6>Real Estate</h6>
                            <span>
                                <img src="{{ asset("web/assets/images/callsvg.svg") }}" alt="" />
                                +234 704 009 2801
                            </span>
                        </div>
                    </div>

                    <div class="servicecard">
                        <img src="{{ asset("web/assets/images/linesvg.svg") }}" alt="" />
                        <div class="servicetext">
                            <h6>Debt Recovery</h6>
                            <span>
                                <img src="{{ asset("web/assets/images/callsvg.svg") }}" alt="" />
                                +234 903 485 2393
                            </span>
                        </div>
                    </div>

                    <div class="servicecard">
                        <img src="{{ asset("web/assets/images/linesvg.svg") }}" alt="" />
                        <div class="servicetext">
                            <h6>International Contact</h6>
                            <span>
                                <img src="{{ asset("web/assets/images/callsvg.svg") }}" alt="" />
                                +44(0)746 951 9358
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
