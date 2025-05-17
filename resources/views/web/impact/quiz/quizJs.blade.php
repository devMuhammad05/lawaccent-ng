{{-- <script>
    const questions = @json($questionsJson);

    let currentQuestion = 0;
    const userAnswers = Array(questions.length).fill(null);
    let percentageScore = 0;

    function renderQuestion() {
        const card = document.getElementById("testquizquizCard");
        const bar = document.getElementById("testquizprogressBar");
        const barText = document.getElementById("testquizprogressText");
        const q = questions[currentQuestion];

        document.querySelector(".testquizprogress-container").style.display =
            "flex";

        percentage = Math.round(
            ((currentQuestion + 1) / questions.length) * 100
        );
        bar.style.width = `${percentage}%`;
        barText.innerText = `${percentage}%`;

        let html = `<div class="testquizquestion">Question ${currentQuestion + 1
            }/${questions.length}: ${q.question}</div>`;

        q.options.forEach((opt, i) => {
            const selected = userAnswers[currentQuestion] === i;
            let className = "testquizoption";
            if (selected) {
                className += opt.correct ? " correct" : " incorrect";
            }
            const disabled =
                userAnswers[currentQuestion] !== null
                    ? "style='pointer-events:none;'"
                    : "";
            html += `<div class="${className}" onclick="selectOption(this, ${opt.correct}, ${i})" ${disabled}>${opt.text}</div>`;
        });

        html += `<div class="feedback" id="feedbackText"></div>`;
        html += `
      <div class="testquiznavigation">
        <button class="btn testquizprevious" onclick="prevQuestion()" ${currentQuestion === 0 ? "disabled" : ""
            }>Previous</button>
        ${currentQuestion === questions.length - 1
                ? `<button class="btn testquiznext" onclick="submitQuiz()">Submit</button>`
                : `<button class="btn testquiznext" onclick="nextQuestion()">Next</button>`
            }
      </div>
    `;

        card.innerHTML = html;

        if (userAnswers[currentQuestion] !== null) {
            const feedback = document.getElementById("feedbackText");
            feedback.innerText = `<b>Correct Answer</b>: ${questions[currentQuestion].options.find((o) => o.correct).text
                }\n\n${questions[currentQuestion].explanation}`;
        }
    }

    function selectOption(element, isCorrect, optionIndex) {
        if (userAnswers[currentQuestion] !== null) return;
        userAnswers[currentQuestion] = optionIndex;

        const options = document.querySelectorAll(".testquizoption");
        options.forEach((opt) => {
            opt.style.pointerEvents = "none";
        });

        element.classList.add(isCorrect ? "correct" : "incorrect");

        const feedback = document.getElementById("feedbackText");
        feedback.innerText = `Correct Answer: ${questions[currentQuestion].options.find((o) => o.correct).text
            }\n\n${questions[currentQuestion].explanation}`;
    }

    function nextQuestion() {
        if (userAnswers[currentQuestion] === null) {
            alert("Please select an answer before proceeding.");
            return;
        }

        if (currentQuestion < questions.length - 1) {
            currentQuestion++;
            renderQuestion();
        }
    }

    function prevQuestion() {
        if (currentQuestion > 0) {
            currentQuestion--;
            renderQuestion();
        }
    }

    function submitQuiz() {
        if (userAnswers[currentQuestion] === null) {
            alert("Please select an answer before submitting.");
            return;
        }

        document.querySelector(".testquizprogress-container").style.display =
            "none";

        const card = document.getElementById("testquizquizCard");

        let correctCount = 0;

        let breakdownHtml = questions
            .map((q, i) => {
                const isCorrect = q.options[userAnswers[i]]?.correct;
                if (isCorrect) correctCount++;
                return `<div style="display:inline-block; margin:5px; width: "80%">
          <div style="
              background: ${isCorrect ? "#DFFFE0" : "#FFE0E0"};
              border: 2px solid ${isCorrect ? "green" : "red"};
              color: ${isCorrect ? "green" : "red"};
              padding: 10px 20px;
              border-radius: 15px;
              font-weight: 600;
            ">
            Question ${i + 1}
          </div>
        </div>`;
            })
            .join("");

        percentageScore = (correctCount / questions.length) * 100;

        const riskLevel =
            percentageScore >= 80
                ? "Low Risk"
                : percentageScore >= 50
                    ? "Medium Risk"
                    : "High Risk";

        const riskColor =
            percentageScore >= 80
                ? "#00B300"
                : percentageScore >= 50
                    ? "#FF9900"
                    : "#D8000C";

        const resultHtml = `
      <div style="text-align: center;">
        <h6 style="margin-top: 20px;">📊 Your Results Breakdown</h6>
        <div style="margin: 20px 0;">${breakdownHtml}</div>
        <h3>You got ${correctCount} questions right!</h3>
        <div style="color:${riskColor}; font-weight:bold; margin:10px 0;">
          ✅ ${riskLevel}
        </div>
        <p style="max-width: 500px; margin: 0 auto;">
          Great job! You have a good grasp of essential legal concepts. Keep building your knowledge and stay updated, especially as laws evolve and new situations arise.
        </p>
      </div>
    `;

        card.innerHTML = resultHtml;

        console.log("percentageScore", percentageScore);

    }

    window.onload = renderQuestion;
</script> --}}


<script>
    const questions = @json($questionsJson);

let currentQuestion = 0;
const userAnswers = Array(questions.length).fill(null);
let percentageScore = 0;

function renderQuestion() {
    const card = document.getElementById("testquizquizCard");
    const bar = document.getElementById("testquizprogressBar");
    const barText = document.getElementById("testquizprogressText");
    const q = questions[currentQuestion];

    document.querySelector(".testquizprogress-container").style.display = "flex";

    percentage = Math.round(((currentQuestion + 1) / questions.length) * 100);
    bar.style.width = `${percentage}%`;
    barText.innerText = `${percentage}%`;

    let html = `<div class="testquizquestion">Question ${currentQuestion + 1}/${questions.length}: ${q.question}</div>`;

    q.options.forEach((opt, i) => {
        const selected = userAnswers[currentQuestion] === i;
        let className = "testquizoption";
        if (selected) {
            className += opt.correct ? " correct" : " incorrect";
        }
        const disabled = userAnswers[currentQuestion] !== null ? "style='pointer-events:none;'" : "";
        html += `<div class="${className}" onclick="selectOption(this, ${opt.correct}, ${i})" ${disabled}>${opt.text}</div>`;
    });

    html += `<div class="feedback" id="feedbackText"></div>`;
    html += `
      <div class="testquiznavigation">
        <button class="btn testquizprevious" onclick="prevQuestion()" ${currentQuestion === 0 ? "disabled" : ""}>Previous</button>
        ${currentQuestion === questions.length - 1
            ? `<button class="btn testquiznext" onclick="submitQuiz()">Submit</button>`
            : `<button class="btn testquiznext" onclick="nextQuestion()">Next</button>`
        }
      </div>
    `;

    card.innerHTML = html;

    if (userAnswers[currentQuestion] !== null) {
        displayFeedback(userAnswers[currentQuestion]);
    }
}

function selectOption(element, isCorrect, optionIndex) {
    if (userAnswers[currentQuestion] !== null) return;
    userAnswers[currentQuestion] = optionIndex;

    const options = document.querySelectorAll(".testquizoption");
    options.forEach((opt) => {
        opt.style.pointerEvents = "none";
    });

    element.classList.add(isCorrect ? "correct" : "incorrect");

    displayFeedback(optionIndex);
}

function displayFeedback(selectedOptionIndex) {
    const feedback = document.getElementById("feedbackText");
    const q = questions[currentQuestion];
    const selectedOption = q.options[selectedOptionIndex];
    const correctOption = q.options.find(opt => opt.correct);
    const isCorrect = selectedOption.correct;

    let feedbackText = '';

    if (isCorrect) {
        feedbackText += `<div style="color: green; font-weight: bold; margin-top: 15px;">✓ Your answer is correct!</div>`;
    } else {
        feedbackText += `<div style="color: red; font-weight: bold; margin-top: 15px;">✗ Your answer is incorrect.</div>`;
    }

    feedbackText += `<div style="margin-top: 10px;"><strong>Your selection:</strong> ${selectedOption.text}</div>`;

    // Add explanation for the selected option if available
    if (selectedOption.explanation) {
        feedbackText += `<div style="margin-top: 5px; padding: 8px; background-color: ${isCorrect ? '#f0fff0' : '#fff0f0'}; border-radius: 5px;">
            <strong>${isCorrect ? 'Explanation' : 'Why this is incorrect'}:</strong> ${selectedOption.explanation}
        </div>`;
    }


    console.log(selectedOption.explanation);


    // If the selected answer is wrong, show the correct answer and its explanation
    if (!isCorrect) {
        feedbackText += `<div style="margin-top: 10px;"><strong>Correct answer:</strong> ${correctOption.text}</div>`;
        if (correctOption.explanation) {
            feedbackText += `<div style="margin-top: 5px; padding: 8px; background-color: #f0fff0; border-radius: 5px;">
                <strong>Explanation:</strong> ${correctOption.explanation}
            </div>`;
        }
    }

    // Add the question's general explanation if available
    if (q.explanation) {
        feedbackText += `<div style="margin-top: 15px; padding: 10px; background-color: #f0f8ff; border-radius: 5px;">
            <strong>Additional information:</strong> ${q.explanation}
        </div>`;
    }

    feedback.innerHTML = feedbackText;
}

function nextQuestion() {
    if (userAnswers[currentQuestion] === null) {
        alert("Please select an answer before proceeding.");
        return;
    }

    if (currentQuestion < questions.length - 1) {
        currentQuestion++;
        renderQuestion();
    }
}

function prevQuestion() {
    if (currentQuestion > 0) {
        currentQuestion--;
        renderQuestion();
    }
}

function submitQuiz() {
    if (userAnswers[currentQuestion] === null) {
        alert("Please select an answer before submitting.");
        return;
    }

    document.querySelector(".testquizprogress-container").style.display = "none";

    const card = document.getElementById("testquizquizCard");

    let correctCount = 0;

    let breakdownHtml = questions
        .map((q, i) => {
            const isCorrect = q.options[userAnswers[i]]?.correct;
            if (isCorrect) correctCount++;
            return `<div style="display:inline-block; margin:5px; width: "80%">
                <div style="
                    background: ${isCorrect ? "#DFFFE0" : "#FFE0E0"};
                    border: 2px solid ${isCorrect ? "green" : "red"};
                    color: ${isCorrect ? "green" : "red"};
                    padding: 10px 20px;
                    border-radius: 15px;
                    font-weight: 600;
                ">
                Question ${i + 1}
                </div>
            </div>`;
        })
        .join("");

    percentageScore = (correctCount / questions.length) * 100;

    const riskLevel =
        percentageScore >= 80
            ? "Low Risk"
            : percentageScore >= 50
                ? "Medium Risk"
                : "High Risk";

    const riskColor =
        percentageScore >= 80
            ? "#00B300"
            : percentageScore >= 50
                ? "#FF9900"
                : "#D8000C";

    const resultHtml = `
        <div style="text-align: center;">
            <h6 style="margin-top: 20px;">📊 Your Results Breakdown</h6>
            <div style="margin: 20px 0;">${breakdownHtml}</div>
            <h3>You got ${correctCount} out of ${questions.length} questions right!</h3>
            <div style="color:${riskColor}; font-weight:bold; margin:10px 0;">
                ✅ ${riskLevel}
            </div>
            <p style="max-width: 500px; margin: 0 auto;">
                 ${riskLevel === "Low Risk"
                ? "Great job! You have a good grasp of essential legal concepts. Keep building your knowledge and stay updated."
                : riskLevel === "Medium Risk"
                    ? "You're on the right track. Review the areas you missed and continue studying."
                    : "There’s room for improvement. Consider revisiting key concepts and practicing further."
            }
            </p>
            <button class="btn" onclick="reviewQuiz()" style="margin-top: 15px;">Review Your Answers</button>
        </div>
    `;

    card.innerHTML = resultHtml;
    console.log("percentageScore", percentageScore);
}

function reviewQuiz() {
    currentQuestion = 0;
    renderQuestion();
}

window.onload = renderQuestion;
</script>
