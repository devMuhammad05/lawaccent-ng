<x-app-layout>

    <section class="privacy">
        <div class="container">
          <div class="privacyrow">
            <h3>
              Privacy Notice <br />
              (Privacy Policy for Prospective Clients in Nigeria)
            </h3>
            <p>Effective Date: [<span id="currentDate">{{ $effectiveDate }}</span>]</p>
            <p>
              This Privacy Notice outlines how we collect, use, store, and share
              your personal data in compliance with the General Data Protection
              Regulation (GDPR) and relevant Nigerian data protection laws. It
              also explains your rights regarding your personal information and
              how we protect your data while providing our legal services.
            </p>
          </div>
        </div>
    </section>

    <section class="faq-section">
    <div class="container">
        @if (count($privacyNotice) > 0)
            <div class="accordion accordionprivacy" id="accordionExample">

            @foreach ($privacyNotice as $privacy)
                <div class="accordion-item mt-4">
                    <h2 class="accordion-header">
                    <button
                        aria-label="Name"
                        class="accordion-button accordionprivacy-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $privacy->id }}"
                        aria-controls="collapse{{ $privacy->id }}"
                    >
                        {{ $privacy->question }}
                    </button>
                    </h2>
                    <div
                    id="collapse{{ $privacy->id }}"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                    >
                    <div class="accordion-body">
                    {!! $privacy->answer !!}
                    </div>
                    </div>
                </div>
            @endforeach


            </div>
        @endif
    </div>
    </section>

    @include('web.partials.newsletter')

</x-app-layout>
