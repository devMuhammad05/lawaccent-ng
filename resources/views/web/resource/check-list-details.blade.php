<x-app-layout>

    <section class="mt-4">
        <div class="container">
            <div class="text-center">
                <img src="{{ asset("web/assets/images/legalsvg.svg") }}" alt="image" />
                <h2 class="py-3">
                  {{ $legalCheckList->title }}
                </h2>
                <p>
                    {{ $legalCheckList->description }}
                </p>
            </div>
            <div class="row checklistrow">
                <div class="col-md-5">
                    <div class="assessmentimage-wrapper">
                        <img src="{{ asset("web/assets/images/assessment.webp") }}" alt="image" />
                        <div class="overlay">
                            <img src="{{ asset("web/assets/images/checklist.svg") }}" alt="image" />
                            <p>{{ $legalCheckList->title }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h6>Legal Checklist</h6>
                    <br />
                    {!! $legalCheckList->body !!}
                </div>
            </div>
        </div>
    </section>

    @include('web.partials.newsletter')

</x-app-layout>
