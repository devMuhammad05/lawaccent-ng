<script>
    // const questions = [
    //   {
    //     question:
    //       "You're hiring a remote employee in another country. What's your first legal step?",
    //     options: [
    //       {
    //         text: "Sign your standard employment contract and proceed",
    //         correct: false,
    //       },
    //       { text: "Register a local business entity", correct: false },
    //       {
    //         text: "Check local labour laws and employment requirements",
    //         correct: true,
    //       },
    //       { text: "Send them a contract via email", correct: false },
    //     ],
    //     explanation:
    //       "Each country has unique employment laws — from tax obligations to benefits and notice periods. You may need to adjust contracts or consult local counsel.",
    //   },
    //   {
    //     question:
    //       "You're forming a new partnership. What's one of the first legal documents you should draft?",
    //     options: [
    //       { text: "Shareholder resolution", correct: false },
    //       { text: "Partnership agreement", correct: true },
    //       { text: "Employee handbook", correct: false },
    //       { text: "Articles of incorporation", correct: false },
    //     ],
    //     explanation:
    //       "A partnership agreement outlines responsibilities, profit sharing, and dispute resolution—key to avoiding legal conflicts.",
    //   },
    //   {
    //     question:
    //       "Your company collects customer data from the EU. What regulation must you comply with?",
    //     options: [
    //       { text: "HIPAA", correct: false },
    //       { text: "CCPA", correct: false },
    //       { text: "GDPR", correct: true },
    //       { text: "FERPA", correct: false },
    //     ],
    //     explanation:
    //       "GDPR governs how you collect, store, and use personal data from EU citizens, with strict penalties for violations.",
    //   },
    //   {
    //     question: "Which of these protects your brand identity legally?",
    //     options: [
    //       { text: "Copyright", correct: false },
    //       { text: "Trademark", correct: true },
    //       { text: "Patent", correct: false },
    //       { text: "NDA", correct: false },
    //     ],
    //     explanation:
    //       "A trademark protects logos, names, and slogans used to identify your business, helping prevent misuse by others.",
    //   },
    //   {
    //     question:
    //       "You hire a freelance developer. What legal step helps clarify rights over the code they create?",
    //     options: [
    //       { text: "NDA", correct: false },
    //       { text: "Consulting agreement", correct: false },
    //       { text: "Work-for-hire contract", correct: true },
    //       { text: "Code of conduct", correct: false },
    //     ],
    //     explanation:
    //       "A work-for-hire contract transfers ownership of the code to your business and protects IP rights.",
    //   },
    //   {
    //     question:
    //       "What's the most appropriate way to protect sensitive internal documents?",
    //     options: [
    //       { text: "Require two-factor authentication", correct: false },
    //       { text: "Sign NDAs with employees", correct: true },
    //       { text: "Keep them in cloud storage", correct: false },
    //       { text: "Share via encrypted email", correct: false },
    //     ],
    //     explanation:
    //       "NDAs legally bind employees or contractors to confidentiality, offering enforceable protection against leaks.",
    //   },
    // ];

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
            feedback.innerText = `Correct Answer: ${questions[currentQuestion].options.find((o) => o.correct).text
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
</script>
