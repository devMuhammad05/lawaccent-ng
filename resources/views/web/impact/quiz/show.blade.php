<x-app-layout>

    <section class="testquiz">
        <div class="testquiztext">
          <img src="{{ asset("web/assets/images/quizsvg.svg") }}" alt="Quiz Icon" />
          <h4>{{ $quiz->title }}</h4>
        </div>

        <div class="testquizprogress-container">
          <div class="testquizprogress-bar" id="testquizprogressBar"></div>
          <div class="testquizprogress-text" id="testquizprogressText">0%</div>
        </div>

        <div class="testquizquiz-card" id="testquizquizCard"></div>

      </section>


      @push('script')
        @include('web.impact.quiz.quizJs')
      @endpush
</x-app-layout>
