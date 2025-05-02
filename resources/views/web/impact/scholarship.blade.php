<x-app-layout>


    <section class="aboutlawaccent">
        <div class="container">
          <img src="{{ asset("web/assets/images/social.svg") }}" alt="image" />
          <h3>Law Accent Legal Scholarship Application Form</h3>
          <p>
            Please ensure you meet the eligibility criteria before proceeding to
            fill out the form below.
          </p>
        </div>
      </section>

    <livewire:scholarship-application-form />

    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
