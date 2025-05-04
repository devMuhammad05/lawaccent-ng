<x-app-layout>

    <section class="privacy">
        <div class="container">
          <div class="privacyrow">
            <h3>Cookie Notice</h3>
            <p>Effective Date: [<span id="currentDate">{{ $effectiveDate }}</span>]</p>
            <p>
              At Law Accent we use cookies and similar tracking technologies to
              enhance your experience when visiting our website
              <span class="cookielink"
                ><a href="https://www.lawaccent.ng">(www.lawaccent.ng)</a></span
              >. This Cookie Policy explains what cookies are, how we use them,
              and your choices regarding their use. By using our website, you
              consent to the use of cookies in accordance with this policy. If you
              do not agree with this policy, please adjust your browser settings
              or refrain from using our website.
            </p>
          </div>
        </div>
    </section>

    <section class="faq-section">
    <div class="container">

        @if (count($cookieNotice) > 0)
            <div class="accordion accordionprivacy" id="accordionExample">
                @foreach ($cookieNotice as $cookie)
                    <div class="accordion-item mt-4">
                        <h2 class="accordion-header">
                        <button
                            aria-label="Name"
                            class="accordion-button accordionprivacy-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $cookie->id }}"
                            aria-controls="collapse{{ $cookie->id }}"
                        >
                            {{ $cookie->question }}
                        </button>
                        </h2>
                        <div
                        id="collapse{{ $cookie->id }}"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample"
                        >
                        <div class="accordion-body">
                        {!! $cookie->answer !!}
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
