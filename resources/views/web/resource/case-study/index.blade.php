<x-app-layout>

    <section class="dataprotection">
        <div class="container">
            <div class="row dataprotectionrow">
                <div class="col-md-6 dataprotectiontext">
                    <div>
                        <img src="{{ asset("web/assets/images/resourcesvg.svg") }}" alt="" />
                        <h3>Case Studies</h3>
                        <p>
                            Find quick answers to common legal <br />
                            questions in Nigeria, covering business <br />
                            setup, contracts, compliance, and more
                        </p>
                    </div>
                </div>
                <div class="col-md-6 smillingman">
                    <img src="{{ asset("web/assets/images/officewoman.webp") }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <livewire:case-studies />

    {{-- <livewire:contact-us-form /> --}}

    @include('web.partials.newsletter')

</x-app-layout>
