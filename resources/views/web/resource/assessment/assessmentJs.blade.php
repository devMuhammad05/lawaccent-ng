<script>

    // TEST ASSESSMENT FUNCTION
    const questions = @json($questionsJson)

    let currentQuestion = 0;
    let answers = [];

    function showQuestion() {
        const question = questions[currentQuestion];
        document.getElementById("questionHead").innerText = `${currentQuestion + 1}. ${question.head || question.question}`;

        document.getElementById("questionText").innerText = question.question;

        const progressPercent = ((currentQuestion + 1) / questions.length) * 100;
        document.getElementById("progress").style.width = progressPercent + "%";
        document.getElementById("progressPercent").innerText = Math.round(progressPercent) + "%";

        // Clear and render new options
        const container = document.getElementById("optionsContainer");
        container.innerHTML = "";


        question.options.forEach(option => {
            const div = document.createElement("div");
            div.className = "testoption";
            div.innerText = option.text;
            div.onclick = () => selectOption(option.text, div);

            if (answers[currentQuestion] === option.text) {
                div.classList.add("active");
            }

            container.appendChild(div);
        });



        if (currentQuestion === questions.length - 1) {
            document.getElementById("nextBtn").style.display = "none";
            document.getElementById("submitBtn").style.display = "inline-block";
        } else {
            document.getElementById("nextBtn").style.display = "inline-block";
            document.getElementById("submitBtn").style.display = "none";
        }
    }
    showQuestion();



    function selectOption(value, element) {
        answers[currentQuestion] = value;
        document
            .querySelectorAll(".testoption")
            .forEach((opt) => opt.classList.remove("active"));
        element.classList.add("active");
    }

    function nextQuestion() {
        if (answers[currentQuestion]) {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                showQuestion();
            }
        } else {
            alert("Please select an answer before proceeding.");
        }
    }

    function prevQuestion() {
        if (currentQuestion > 0) {
            currentQuestion--;
            showQuestion();
        }
    }


    function submitAssessment() {
        if (!answers[currentQuestion]) {
            alert("Please select an answer before submitting.");
            return;
        }

        // Count correct answers
        let correctCount = 0;
        questions.forEach((q, i) => {
            const correctOption = q.options.find(opt => opt.correct);
            if (correctOption && correctOption.text === answers[i]) {
                correctCount++;
            }

        });

        const percentageScore = (correctCount / questions.length) * 100;

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

        const breakdownHtml = questions.map((q, i) => {
            const correctOption = q.options.find(opt => opt.correct);
            const isCorrect = correctOption && correctOption.text === answers[i];
            return `
    <div style="margin-bottom: 10px;">
      <strong>Q${i + 1}:</strong> ${q.question}<br>
      <span style="color:${isCorrect ? 'green' : 'red'}">
        Your answer: ${answers[i]} ${isCorrect ? '✔️' : '❌'}
      </span>
    </div>
  `;
        }).join('');


//         const resultHtml = `
//     <div style="text-align: center;">
//       <h6 style="margin-top: 20px;">📊 Your Results Breakdown</h6>
//       <div style="margin: 20px 0;">${breakdownHtml}</div>
//       <h3>You got ${correctCount} out of ${questions.length} questions right!</h3>
//       <div style="color:${riskColor}; font-weight:bold; margin:10px 0;">
//         ✅ ${riskLevel}
//       </div>
//       <p style="max-width: 500px; margin: 0 auto;">
//         ${riskLevel === "Low Risk"
//                 ? "Great job! You have a good grasp of essential legal concepts. Keep building your knowledge and stay updated."
//                 : riskLevel === "Medium Risk"
//                     ? "You're on the right track. Review the areas you missed and continue studying."
//                     : "There’s room for improvement. Consider revisiting key concepts and practicing further."
//             }
//       </p>
//     </div>
//   `;

const resultHtml = `
    <div style="text-align: center;">
      <h6 style="margin-top: 20px;">📊 Your Results Breakdown</h6>
      <div style="margin: 20px 0;">${breakdownHtml}</div>
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
    </div>
  `;

        // Replace content with result
        document.getElementById("resultsSection").innerHTML = resultHtml;

        // Hide test and show result
        document.getElementById("questionSection").style.display = "none";
        document.querySelector(".testbuttons").style.display = "none";
        document.querySelector(".testprogress-bar").style.display = "none";
        document.getElementById("resultsSection").style.display = "block";
        document.getElementById("moreButtons").style.display = "flex";
    }

</script>
