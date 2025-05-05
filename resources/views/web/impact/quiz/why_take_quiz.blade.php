<x-app-layout>


    <section class="aboutlawaccent">
        <div class="container">
          <img src="assets/images/quizsvg.svg" alt="image" />
          <h3>How Legally Protected Is Your Business?</h3>
          <p>
            Legal matters don't have to feel overwhelming. Our quizzes are
            designed to help you understand where you <br />
            stand, highlight blind spots, and guide you toward safer legal
            decisions — whether you're running a business <br />
            or managing personal affairs.
          </p>
          <button class="btn btn-quiz">
            <a href="testquiz.html">Start Quiz</a>
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
              <img src="assets/images/people.svg" alt="image" />
            </div>
            <div class="col-md-7">
              <h3>Why take this quiz?</h3>
              <div class="whytakediv">
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
              </div>
            </div>
          </div>
        </div>
      </section>

    @include('web.partials.newsletter')

</x-app-layout>
