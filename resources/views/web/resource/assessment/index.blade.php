<x-app-layout>

    <section class="dataprotection">
        <div class="container">
            <div class="row dataprotectionrow">
                <div class="col-md-6 dataprotectiontext">
                    <div>
                        <img src="{{ asset("web/assets/images/resourcesvg.svg") }}" alt="" />
                        <h3>
                            Legal Checklist and <br />
                            Assessment Tool
                        </h3>
                        <p>
                            Identify legal risks and gaps in minutes for <br />
                            your business or personal matters with our <br />
                            free checklist and assessment tool.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 smillingman">
                    <img src="{{ asset("web/assets/images/legal.webp") }}" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="legalchecklist">
        <div class="container">
            <div class="legalchecklist-text">
                <h3>Why a Legal Checklist and Assessment Matters</h3>
                <p>
                    Many individuals and businesses overlook key legal obligations until
                    it's too late. Our Legal Checklist <br />
                    & Assessment helps you proactively spot and address legal issues
                    before they become costly.
                </p>
                <p>
                    Our goal is to help individuals and businesses self-assess their
                    legal risks and prompt them to take <br />
                    action without being overwhelmed.
                </p>
            </div>
            <h4>Assessments</h4>
            <div class="row assessmentrow">


                @foreach ($assessments as $assessment)
                    <div class="col-md-4">
                        <div class="assessmentcard">
                            <div class="assessmentimage-wrapper">
                                <img src="{{ asset("web/assets/images/assessment.webp") }}" alt="" />
                                {{-- <img src="{{ asset($assessment->thumbnail) }}" alt="" /> --}}
                                <div class="overlay">
                                    <img src="{{ asset("web/assets/images/overlayimg.svg") }}" alt="" />
                                    <p>{{ $assessment->title }}</p>
                                </div>
                            </div>
                            <div class="assesmentcard-body">
                                <h6>{{ $assessment->title }}</h6>
                                <p>
                                    {{ $assessment->description }}
                                </p>
                                <button class="btn">
                                    <a href="{{ route('resources.show.assessment', $assessment) }}">Take Assessment</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if (count($assessments) < 1)
                    <p class="text-secondary">No assessment at the moment, check back later!</p>
                @endif

            </div>

            <hr>

        </div>
    </section>

    <section class="legalchecklist">
        <div class="container">
            <h4>Checklists</h4>
            <div class="row assessmentrow">

                @foreach ($legalCheckLists as $legalCheckList)
                <div class="col-md-4">
                    <div class="assessmentcard">
                        <div class="assessmentimage-wrapper">
                            <img src="{{ asset("web/assets/images/assessment.webp") }}" alt="" />
                            <div class="overlay">
                                <img src="{{ asset("web/assets/images/overlaycheck.svg") }}" alt="" />
                                <p>{{ $legalCheckList->title }}</p>
                            </div>
                        </div>
                        <div class="assesmentcard-body">
                            <h6>{{ $legalCheckList->title }}</h6>
                            <p>
                                {{ $legalCheckList->description }}
                            </p>
                            <button class="btn">
                                <a href="{{ route('resources.show.legal.check.list', $legalCheckList) }}">Read Checklist</a>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach

                @if (count($assessments) < 1)
                    <p class="text-secondary">No checklist at the moment, check back later!</p>
                @endif

            </div>

        </div>
    </section>

    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
