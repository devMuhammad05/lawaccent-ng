<x-app-layout>


    <section class="aboutlawaccent">
        <div class="container">
            <img src="{{ asset("web/assets/images/quizsvg.svg") }}" alt="image" />
            <h3>{{ $quiz->title }}</h3>
            <p>
                {{ $quiz->description }}
            </p>
            <button class="btn btn-quiz">
                <a href="{{ route('our-impact.show.quiz', $quiz) }}">Start Quiz</a>
            </button>
        </div>
    </section>

    <div class="container">
        <hr />
    </div>

    <section class="whytake">
        <div class="container">
            <div class="row whytakerow">
                <div class="col-md-4">
                    <img src="{{ asset("web/assets/images/people.svg") }}" alt="image" />
                </div>
                <div class="col-md-7">
                    <h3>Why take this quiz?</h3>
                    <div class="whytakediv">

                        @if ($quiz->why_take_quiz)
                            {!! $quiz->why_take_quiz !!}
                        @else
                            <p>
                                Understanding legal risk is the first step toward protecting
                                your <br />
                                interests.
                            </p>

                            <p>Our short, interactive quizzes can help you:</p>
                            <ul>
                                <li>
                                    ✅ Identify areas where your business or personal life may be
                                    <br />
                                    legally vulnerable
                                </li>
                                <li>
                                    ✅ Learn key concepts in employment law, contracts,
                                    compliance, <br />
                                    and more
                                </li>
                                <li>✅ Prepare for meetings with lawyers or regulators</li>
                                <li>✅ Avoid costly legal mistakes</li>
                            </ul>

                            <p>
                                Each quiz takes just takes a few minutes and provides immediate
                                <br />
                                feedback, with helpful insights and next steps.
                            </p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('web.partials.newsletter')

</x-app-layout>
