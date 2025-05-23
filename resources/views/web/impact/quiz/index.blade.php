<x-app-layout>

    <section class="aboutlawaccent">
        <div class="container">
            <img src="{{ asset("web/assets/images/quizsvg.svg") }}" alt="image" />
            <h3>Test Your Legal Awareness</h3>
            <p>
                Legal matters don't have to feel overwhelming. Our quizzes are
                designed to help you understand where you <br />
                stand, highlight blind spots, and guide you toward safer legal
                decisions — whether you're running a business <br />
                or managing personal affairs.
            </p>

            @if (count($quizzes))
                <button class="btn btn-quiz">
                    <a href="#quizpage">Go To Quizzes</a>
                </button>
            @endif
        </div>
    </section>

    <div class="container">
        <hr />
    </div>

    <section class="quizzes">
        <div class="container">
            <div class="quizzes-text">
                <h5>Quizzes</h5>

                <form method="GET" action="{{ route('our-impact.quizes.index') }}">
                    <div class="quizzes-wrapper">
                        <input type="text" name="search" placeholder="Enter a keyword" value="{{ request('search') }}"
                             />
                        <button type="submit" class="px-2">Search Quizzes</button>
                    </div>
                </form>

            </div>

            @if($quizzes->isNotEmpty())
                <div class="row quizzesrow" id="quizpage">
                    @foreach ($quizzes as $quiz)
                        <div class="col-md-3">
                            <div class="quizzesrowcard">
                                <h5>{{ $quiz->title }}</h5>
                                <p>{{ $quiz->sub_title }}</p>
                                <div class="dotwrap">
                                    <div class="img-m">
                                        <img src="{{ asset("web/assets/images/time.svg") }}" alt="image" width="50%" />2m
                                    </div>
                                    <div><img src="{{ asset("web/assets/images/dot.svg") }}" alt="image" /></div>
                                    <div>
                                        {{ $quiz->questions_count }} {{ Str::plural('Question', $quiz->questions_count) }}
                                    </div>
                                </div>
                                <button class="btn takequizbtn">
                                    <a href="{{ route('our-impact.why.take.quiz', $quiz) }}">Take Quiz</a>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else

                @if(request('search') && $quizzes->isEmpty())
                    <br>
                    <p class="text-danger">No quiz found for "{{ request('search') }}". Try another keyword.</p>
                @elseif($quizzes->isEmpty())
                    <br>
                    <p class="text-secondary">No quiz at the moment. Check back later!</p>
                @endif
            @endif
        </div>
    </section>

</x-app-layout>
