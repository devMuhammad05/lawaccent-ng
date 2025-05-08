<x-app-layout>

    <section class="dataprotection">
        <div class="container">
            <div class="row dataprotectionrow">
                <div class="col-md-6 dataprotectiontext">
                    <div>
                        <img src="{{ asset("web/assets/images/resourcesvg.svg") }}" alt="" />
                        <h3>Blog Posts</h3>
                        <p>
                            Stay updated with expert insights <br />
                            on Nigerian legal trends, regulatory <br />
                            changes, and business compliance.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 smillingman">
                    <img src="{{ asset("web/assets/images/officewoman.webp") }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <livewire:blog-posts>

        {{-- <livewire:contact-us-form /> --}}

    @include('web.partials.newsletter')

</x-app-layout>
