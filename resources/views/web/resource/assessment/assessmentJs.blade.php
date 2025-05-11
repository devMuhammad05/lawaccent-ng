<script>

// TEST ASSESSMENT FUNCTION
// const questions = [
//   {
//     head: "1. Contracts",
//     text: "Do you use written contracts for your clients, suppliers, or freelancers?",
//     options: ["✅ Something Else", "⚠ No"]
//   },
//   {
//     head: "2. Privacy",
//     text: "Do you have a privacy policy if you collect personal data?",
//     options: ["✅ Yes", "⚠ No"]
//   },
//   {
//     head: "3. Business Registration",
//     text: "Is your business registered properly (LLC, Corporation, Sole Proprietor)?",
//     options: ["✅ Yes", "⚠ No"]
//   },
//   {
//     head: "4. Intellectual Property",
//     text: "Do you protect your intellectual property (trademarks, copyrights)?",
//     options: ["✅ Yes", "⚠ No"]
//   },
//   {
//     head: "5. Liability Insurance",
//     text: "Do you have liability insurance for your business operations?",
//     options: ["✅ Yes", "⚠ No"]
//   },
//   {
//     head: "6. Disputes & Liability",
//     text: "Do you have insurance that covers business disputes or legal claims?",
//     options: ["✅ Yes", "⚠ No"]
//   },
// ];


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

  document.getElementById("questionSection").style.display = "none";
  document.querySelector(".testbuttons").style.display = "none";
  document.querySelector(".testprogress-bar").style.display = "none";
  document.getElementById("resultsSection").style.display = "block";
  document.getElementById("moreButtons").style.display = "flex";




//   const list = document.getElementById("questionList");
//   list.innerHTML = "";

//   let correctCount = 0;
//   answers.forEach((ans, index) => {
//     const div = document.createElement("div");
//     if (ans === "yes") {
//       div.className = "testquestion-box";
//       div.innerText = `✅ ${questions[index].head}`;
//       correctCount++;
//     } else {
//       div.className = "testquestion-box wrong";
//       div.innerText = `❌ ${questions[index].head}`;
//     }
//     list.appendChild(div);
//   });

//   document.getElementById(
//     "finalScoreText"
//   ).innerText = `You got ${correctCount} out of ${questions.length} questions right!`;

}

function restart() {
  location.reload();
}

</script>
