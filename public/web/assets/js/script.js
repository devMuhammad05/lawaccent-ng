// sticky nav
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 0) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

//   // Blog Post Swtiching
//   const tabs = document.querySelectorAll("#categoryTabs div");
//   const blogHeading = document.getElementById("blogHeading");
//   const blogRows = document.querySelectorAll(".recent-blogrow");
//   const wrapper = document.getElementById("blogContentCaseWrapper");

//   tabs.forEach((tab) => {
//     tab.addEventListener("click", () => {
//       tabs.forEach((t) => t.classList.remove("blogpostactive"));
//       tab.classList.add("blogpostactive");

//       const selectedCategory = tab.getAttribute("data-category");

//       if (selectedCategory === "all") {
//         blogHeading.textContent = "Recent Blog Posts";
//       } else if (selectedCategory === "others") {
//         blogHeading.textContent = "Other Blog Posts";
//       } else {
//         const newHeading =
//           selectedCategory
//             .split("-")
//             .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
//             .join(" ") + " Blog Posts";
//         blogHeading.textContent = newHeading;
//       }

//       blogRows.forEach((row) => {
//         const rowCategory = row.getAttribute("data-category");
//         if (selectedCategory === "all" || rowCategory === selectedCategory) {
//           row.style.display = "flex";
//         } else {
//           row.style.display = "none";
//         }
//       });

//       wrapper.scrollIntoView({
//         behavior: "smooth",
//         block: "start",
//       });
//     });
//   });

//   // Case Study Swtiching
//   const casetabs = document.querySelectorAll("#categorycaseTabs div");
//   const caseblogRows = document.querySelectorAll(".recent-caserow");
//   const casewrapper = document.getElementById("blogContentcaseWrapper");

//   casetabs.forEach((tab) => {
//     tab.addEventListener("click", () => {
//       casetabs.forEach((t) => t.classList.remove("blogpostactive"));
//       tab.classList.add("blogpostactive");

//       const selectedCategory = tab.getAttribute("data-category");
//       caseblogRows.forEach((row) => {
//         const rowCategory = row.getAttribute("data-category");
//         if (selectedCategory === "all" || rowCategory === selectedCategory) {
//           row.style.display = "flex";
//         } else {
//           row.style.display = "none";
//         }
//       });

//       casewrapper.scrollIntoView({
//         behavior: "smooth",
//         block: "start",
//       });
//     });
//   });

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

