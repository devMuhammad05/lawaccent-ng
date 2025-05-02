document.addEventListener("DOMContentLoaded", function () {
    const fileInputs = document.querySelectorAll(".file-input");

    fileInputs.forEach((input) => {
      input.addEventListener("change", function () {
        const wrapper = input.closest(".file-upload-box");
        const instructions = wrapper.querySelector(".file-instructions");

        // Remove any existing preview and name
        wrapper
          .querySelectorAll(".file-name, .file-preview")
          .forEach((el) => el.remove());

        if (input.files.length > 0) {
          const file = input.files[0];

          // Create file name element
          const fileName = document.createElement("p");
          fileName.classList.add("file-name");
          fileName.textContent = file.name;
          wrapper.appendChild(fileName);

          // If image, preview it
          if (file.type.startsWith("image/")) {
            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.classList.add("file-preview");
            wrapper.appendChild(img);
          }

          // Hide instructions
          instructions.style.display = "none";
        } else {
          instructions.style.display = "block";
        }
      });
    });
  });
