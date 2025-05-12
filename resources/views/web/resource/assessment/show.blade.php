<x-app-layout>

    <section class="testassessment">
        <div class="testassessmentcontainer">
            <div class="testassessmentcard" id="assessmentCard">
                <h4>{{ $assessment->title }}</h4>

                <div class="testprogress-bar">
                    <div class="testprogress" id="progress"></div>
                    <span class="testprogress-percent" id="progressPercent">0%</span>
                </div>

                <div id="questionSection" class="fade">
                    <h6 id="questionHead">1. Contracts</h6>
                    <div class="question" id="questionText">Question Text</div>

                    <div class="testoptions" id="optionsContainer"></div>

                </div>

                <div class="testbuttons">
                    <button class="testprevious" onclick="prevQuestion()">
                        Previous
                    </button>
                    <button class="testnext" onclick="nextQuestion()" id="nextBtn">
                        Next
                    </button>
                    <button class="testsubmit" onclick="submitAssessment()" id="submitBtn" style="display: none">
                        Submit
                    </button>
                </div>

                <div class="testresults" id="resultsSection">
                    <h6>📊 Your Results Breakdown</h6>
                    <div class="testquestion-list" id="questionList"></div>
                    <h6 id="finalScoreText"></h6>
                    <p>✅ Low Risk</p>
                    <p>
                        Great job! You have a good grasp of essential legal concepts. Keep
                        building your knowledge and stay updated, especially as laws
                        evolve and new situations arise.
                    </p>
                </div>
            </div>

            <div class="testmore-buttons" id="moreButtons" style="display: none">
                <a href="{{ route('resources.assessment.tool') }}">
                    <button class="btn">More Assessments</button>
                </a>
                <button class="btn"><a href="{{ route('home') }}">Go To Homepage</a></button>
            </div>
        </div>
    </section>

    @push('script')
        @include('web.resource.assessment.assessmentJs')
    @endpush
</x-app-layout>
