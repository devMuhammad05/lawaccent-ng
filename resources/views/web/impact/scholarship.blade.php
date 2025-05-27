<x-app-layout>


    <section class="aboutlawaccent">
        <div class="container">
            <img src="{{ asset("web/assets/images/social.svg") }}" alt="image" />
            <h3>Law Accent Legal Scholarship Application Form</h3>

            @if ($isAcceptingApplication)
                <p>
                    Please ensure you meet the eligibility criteria before proceeding to
                    fill out the form below.
                </p>
            @endif
        </div>
    </section>


    @if ($isAcceptingApplication)
        @include('web.partials.scholarship-application-form')
    @else
        <section class="scholarshipforms">
            <div class="scholarshipformcontainer">
                <img src="{{ asset("web/assets/images/notactive.svg") }}" alt="image" />
                <p>
                    Sorry, this form is currently not accepting responses. Check later.
                </p>
                <button class="btn btn-homepage">
                    <a href="{{ route('home') }}">Back to Homepage</a>
                </button>
            </div>
        </section>
    @endif


    <livewire:contact-us-form />

    @include('web.partials.newsletter')

    @push('script')
        <script src="{{ asset("web/assets/js/scholarship.js") }}"></script>
    @endpush


</x-app-layout>
