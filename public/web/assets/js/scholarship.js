document.addEventListener("DOMContentLoaded", function () {
    const allowedTypes = [
        "application/pdf",
        "application/msword",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        "text/plain",
    ];
    const maxSize = 5 * 1024 * 1024; // 5MB

    const fileInputs = document.querySelectorAll(".file-input");

    fileInputs.forEach((input) => {
        const dropZone = input.closest(".drop-zone");
        const instructions = dropZone.querySelector(".file-instructions");

        const handleFile = (file) => {
            // Clear existing messages
            dropZone
                .querySelectorAll(".file-name, .file-preview, .file-error")
                .forEach((el) => el.remove());

            // Validate file type
            if (!allowedTypes.includes(file.type)) {
                const error = document.createElement("p");
                error.classList.add("file-error");
                error.style.color = "red";
                error.textContent =
                    "Invalid file type. Upload PDF, DOC, DOCX, or TXT only.";
                dropZone.appendChild(error);
                input.value = "";
                instructions.style.display = "block";
                return;
            }

            // Validate size
            if (file.size > maxSize) {
                const error = document.createElement("p");
                error.classList.add("file-error");
                error.style.color = "red";
                error.textContent = "File too large. Max size is 5MB.";
                dropZone.appendChild(error);
                input.value = "";
                instructions.style.display = "block";
                return;
            }

            // Show file name
            const fileName = document.createElement("p");
            fileName.classList.add("file-name");
            fileName.textContent = file.name;
            dropZone.appendChild(fileName);

            // Hide instructions
            instructions.style.display = "none";
        };

        // Handle standard input change
        input.addEventListener("change", () => {
            if (input.files.length > 0) {
                handleFile(input.files[0]);
            }
        });

        // Drag-and-drop events
        ["dragenter", "dragover"].forEach((evt) =>
            dropZone.addEventListener(evt, (e) => {
                e.preventDefault();
                dropZone.classList.add("dragging");
            })
        );

        ["dragleave", "drop"].forEach((evt) =>
            dropZone.addEventListener(evt, (e) => {
                e.preventDefault();
                dropZone.classList.remove("dragging");
            })
        );

        dropZone.addEventListener("drop", (e) => {
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                input.files = files; // update actual input field
                handleFile(files[0]);
            }
        });
    });
});
