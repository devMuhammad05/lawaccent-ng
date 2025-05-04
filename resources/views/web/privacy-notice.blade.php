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
        <div class="accordion accordionprivacy" id="accordionExample">

        @foreach ($privacyPolicies as $privacy)
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

        {{-- <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-controls="collapseTwo"
            >
                What Personal Data Do We Collect?
            </button>
            </h2>
            <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Dolorem temporibus voluptates sapiente earum iusto dolores eos
                totam reiciendis dicta, architecto porro maxime error nihil sunt
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-controls="collapseThree"
            >
                How Do We Use Your Personal Data?
            </button>
            </h2>
            <div
            id="collapseThree"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Dolorem temporibus voluptates sapiente earum iusto dolores eos
                totam reiciendis dicta, architecto porro maxime error nihil sunt
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-controls="collapseFour"
            >
                What Is the Legal Basis for Processing Your Personal Data?
            </button>
            </h2>
            <div
            id="collapseFour"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta
                aspernatur voluptatem expedita, natus voluptatum incidunt
                dolorum, et consequuntur quis provident porro alias quasi
                suscipit perferendis veniam nam ullam ad reiciendis molestiae
                pariatur ducimus corporis facere at! Suscipit consectetur ipsum
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFive"
                aria-controls="collapseFive"
            >
                What Is the Legal Basis for Processing Your Personal Data?
            </button>
            </h2>
            <div
            id="collapseFive"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Repellat, quo neque maxime corrupti minima soluta enim
                architecto sequi aut, sunt, commodi a veniam sint amet expedita?
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSix"
                aria-controls="collapseSix"
            >
                How Long Do We Keep Your Personal Data?
            </button>
            </h2>
            <div
            id="collapseSix"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Dolorem temporibus voluptates sapiente earum iusto dolores eos
                totam reiciendis dicta, architecto porro maxime error nihil sunt
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSeven"
                aria-controls="collapseSeven"
            >
                Automated Decision-Making
            </button>
            </h2>
            <div
            id="collapseSeven"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta
                aspernatur voluptatem expedita, natus voluptatum incidunt
                dolorum, et consequuntur quis provident porro alias quasi
                suscipit perferendis veniam nam ullam ad reiciendis molestiae
                pariatur ducimus corporis facere at! Suscipit consectetur ipsum
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseEight"
                aria-controls="collapseEight"
            >
                How Do We Protect Your Personal Data?
            </button>
            </h2>
            <div
            id="collapseEight"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Repellat, quo neque maxime corrupti minima soluta enim
                architecto sequi aut, sunt, commodi a veniam sint amet expedita?
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseNine"
                aria-controls="collapseNine"
            >
                Will We Share Your Data?
            </button>
            </h2>
            <div
            id="collapseNine"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Repellat, quo neque maxime corrupti minima soluta enim
                architecto sequi aut, sunt, commodi a veniam sint amet expedita?
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTen"
                aria-controls="collapseTen"
            >
                Will Your Data Be Processed Outside Nigeria?
            </button>
            </h2>
            <div
            id="collapseTen"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Repellat, quo neque maxime corrupti minima soluta enim
                architecto sequi aut, sunt, commodi a veniam sint amet expedita?
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseEleven"
                aria-controls="collapseEleven"
            >
                Children's Privacy
            </button>
            </h2>
            <div
            id="collapseEleven"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Repellat, quo neque maxime corrupti minima soluta enim
                architecto sequi aut, sunt, commodi a veniam sint amet expedita?
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwelve"
                aria-controls="collapseTwelve"
            >
                How Can You Make a Complaint?
            </button>
            </h2>
            <div
            id="collapseTwelve"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Repellat, quo neque maxime corrupti minima soluta enim
                architecto sequi aut, sunt, commodi a veniam sint amet expedita?
            </div>
            </div>
        </div>
        <div class="accordion-item mt-4">
            <h2 class="accordion-header">
            <button
                aria-label="Name"
                class="accordion-button accordionprivacy-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThirteen"
                aria-controls="collapseThirteen"
            >
                Updates to This Privacy Notice
            </button>
            </h2>
            <div
            id="collapseThirteen"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
            >
            <div class="accordion-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Repellat, quo neque maxime corrupti minima soluta enim
                architecto sequi aut, sunt, commodi a veniam sint amet expedita?
            </div>
            </div>
        </div> --}}
        </div>
    </div>
    </section>

    @include('web.partials.newsletter')

</x-app-layout>
