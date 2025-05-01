// sticky nav
window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 0) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// Blog Post Swtiching
// const tabs = document.querySelectorAll("#categoryTabs div");
// const blogHeading = document.getElementById("blogHeading");
// const blogRows = document.querySelectorAll(".recent-blogrow");
// const wrapper = document.getElementById("blogContentCaseWrapper");

// tabs.forEach((tab) => {
//   tab.addEventListener("click", () => {
//     tabs.forEach((t) => t.classList.remove("blogpostactive"));
//     tab.classList.add("blogpostactive");

//     const selectedCategory = tab.getAttribute("data-category");

//     if (selectedCategory === "all") {
//       blogHeading.textContent = "Recent Blog Posts";
//     } else if (selectedCategory === "others") {
//       blogHeading.textContent = "Other Blog Posts";
//     } else {
//       const newHeading =
//         selectedCategory
//           .split("-")
//           .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
//           .join(" ") + " Blog Posts";
//       blogHeading.textContent = newHeading;
//     }

//     blogRows.forEach((row) => {
//       const rowCategory = row.getAttribute("data-category");
//       if (selectedCategory === "all" || rowCategory === selectedCategory) {
//         row.style.display = "flex";
//       } else {
//         row.style.display = "none";
//       }
//     });

//     wrapper.scrollIntoView({
//       behavior: "smooth",
//       block: "start",
//     });
//   });
// });

// Case Study Swtiching
const casetabs = document.querySelectorAll("#categorycaseTabs div");
const caseblogRows = document.querySelectorAll(".recent-caserow");
const casewrapper = document.getElementById("blogContentcaseWrapper");

casetabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    casetabs.forEach((t) => t.classList.remove("blogpostactive"));
    tab.classList.add("blogpostactive");

    const selectedCategory = tab.getAttribute("data-category");
    caseblogRows.forEach((row) => {
      const rowCategory = row.getAttribute("data-category");
      if (selectedCategory === "all" || rowCategory === selectedCategory) {
        row.style.display = "flex";
      } else {
        row.style.display = "none";
      }
    });

    casewrapper.scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  });
});

// AUDIO FUNCTION
function togglePlay(audioId, btn) {
  const audio = document.getElementById(audioId);
  if (audio.paused) {
    audio.play();
    btn.innerHTML = `
      <svg class="pause-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" viewBox="0 0 24 24">
        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
      </svg>
    `;
  } else {
    audio.pause();
    btn.innerHTML = `
      <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" viewBox="0 0 24 24">
        <path d="M8 5v14l11-7z"/>
      </svg>
    `;
  }
}

function seekAudio(audioId, input) {
  const audio = document.getElementById(audioId);
  audio.currentTime = (input.value / 100) * audio.duration;
}

function formatTime(seconds) {
  const mins = Math.floor(seconds / 60);
  const secs = Math.floor(seconds % 60);
  return `${mins}:${secs < 10 ? "0" : ""}${secs}`;
}

// Setup audio players when page loads
window.addEventListener("DOMContentLoaded", () => {
  const audios = document.querySelectorAll("audio");

  audios.forEach((audio) => {
    const audioId = audio.id;
    const progressBar = document.getElementById(`progress-${audioId}`);
    const durationSpan = document.getElementById(`duration-${audioId}`);
    const currentTimeSpan = document.getElementById(`current-time-${audioId}`);

    audio.addEventListener("loadedmetadata", () => {
      if (durationSpan) {
        durationSpan.textContent = formatTime(audio.duration);
      }
    });

    audio.addEventListener("timeupdate", () => {
      if (progressBar) {
        const progress = (audio.currentTime / audio.duration) * 100;
        progressBar.value = progress || 0;
      }
      if (currentTimeSpan) {
        currentTimeSpan.textContent = formatTime(audio.currentTime);
      }
    });

    audio.addEventListener("ended", () => {
      const playBtn = document.querySelector(`button[onclick*="${audioId}"]`);
      if (playBtn) {
        playBtn.innerHTML = `
          <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" viewBox="0 0 24 24">
            <path d="M8 5v14l11-7z"/>
          </svg>
        `;
      }
    });
  });
});

// TEST ASSESSMENT FUNCTION
const questions = [
  {
    head: "1. Contracts",
    text: "Do you use written contracts for your clients, suppliers, or freelancers?",
  },
  {
    head: "2. Privacy",
    text: "Do you have a privacy policy if you collect personal data?",
  },
  {
    head: "3. Business Registration",
    text: "Is your business registered properly (LLC, Corporation, Sole Proprietor)?",
  },
  {
    head: "4. Intellectual Property",
    text: "Do you protect your intellectual property (trademarks, copyrights)?",
  },
  {
    head: "5. Liability Insurance",
    text: "Do you have liability insurance for your business operations?",
  },
  {
    head: "6. Disputes & Liability",
    text: "Do you have insurance that covers business disputes or legal claims?",
  },
];

let currentQuestion = 0;
let answers = [];

function showQuestion() {
  const questionSection = document.getElementById("questionSection");

  questionSection.classList.remove("fade");
  void questionSection.offsetWidth; // trigger reflow to restart animation
  questionSection.classList.add("fade");

  document.getElementById("questionHead").innerText =
    questions[currentQuestion].head;
  document.getElementById("questionText").innerText =
    questions[currentQuestion].text;

  const progressPercent = ((currentQuestion + 1) / questions.length) * 100;
  document.getElementById("progress").style.width = progressPercent + "%";
  document.getElementById("progressPercent").innerText =
    Math.round(progressPercent) + "%";

  document
    .querySelectorAll(".testoption")
    .forEach((opt) => opt.classList.remove("active"));

  if (answers[currentQuestion]) {
    document.querySelectorAll(".testoption").forEach((opt) => {
      if (
        (answers[currentQuestion] === "yes" && opt.innerText.includes("✅")) ||
        (answers[currentQuestion] === "no" && opt.innerText.includes("⚠"))
      ) {
        opt.classList.add("active");
      }
    });
  }

  if (currentQuestion === questions.length - 1) {
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("submitBtn").style.display = "inline-block";
  } else {
    document.getElementById("nextBtn").style.display = "inline-block";
    document.getElementById("submitBtn").style.display = "none";
  }
}

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

  const list = document.getElementById("questionList");
  list.innerHTML = "";

  let correctCount = 0;
  answers.forEach((ans, index) => {
    const div = document.createElement("div");
    if (ans === "yes") {
      div.className = "testquestion-box";
      div.innerText = `✅ ${questions[index].head}`;
      correctCount++;
    } else {
      div.className = "testquestion-box wrong";
      div.innerText = `❌ ${questions[index].head}`;
    }
    list.appendChild(div);
  });

  document.getElementById(
    "finalScoreText"
  ).innerText = `You got ${correctCount} out of ${questions.length} questions right!`;
}

function restart() {
  location.reload();
}
showQuestion();

// MULTISTEP FORM (Schedule Page) FUNCTION
let currentStep = 1;
showStep(currentStep);

function showStep(step) {
  document.querySelectorAll(".form-step").forEach((el, index) => {
    el.style.display = index === step - 1 ? "block" : "none";
  });
  document.querySelectorAll(".step-indicator").forEach((el, index) => {
    el.classList.remove("active");
    el.style.width = "12px";
  });
  document.getElementById(`indicator${step}`).classList.add("active");
  document.getElementById(`indicator${step}`).style.width = "45px";
  currentStep = step;
}

function nextStep() {
  showStep(2);
}

function prevStep() {
  showStep(1);
}

function submitForm() {
  showStep(3);
}

function goHome() {
  window.location.href = "index.html";
}
