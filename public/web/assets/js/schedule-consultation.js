let currentStep = 1;
showStep(currentStep);

// Track which fields have been interacted with
const touchedFields = {
    fullName: false,
    email: false,
    phone: false,
    consultationType: false,
    legalArea: false,
    dateTime: false,
    info: false,
};

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
    if (validateStep1()) {
        showStep(2);
    }
}

function prevStep() {
    showStep(1);
}

function submitForm() {
    if (validateStep2()) {
        // Update confirmation page with user info
        $(".name").text(fullName.value);
        $(".email").text(email.value);
        $(".phone_number").text(phone.value);
        $(".date_time").text(dateTime.value);

        // Get consultation type
        let consultationType = "";
        for (let r of radioInputs) {
            if (r.checked) {
                consultationType = r.value;
                break;
            }
        }
        $(".consultation_type").text(consultationType);

        // showStep(3);
    }
}

// Get form elements
const fullName = document.getElementById("fullName");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const nextBtn = document.getElementById("nextBtn");

// const legalArea = document.getElementById("legalArea");
const dateTime = document.getElementById("dateTime");
const info = document.getElementById("info");
const submitBtn = document.getElementById("submitBtn");

const radioInputs = document.getElementsByName("type");

// Individual field validators
function validateFullName() {
    if (!touchedFields.fullName) return true;

    if (fullName.value.trim() === "") {
        document.getElementById("errorName").textContent =
            "Full name is required";
        return false;
    } else {
        document.getElementById("errorName").textContent = "";
        return true;
    }
}

function validateEmail() {
    if (!touchedFields.email) return true;

    const emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email.value.trim())) {
        document.getElementById("errorEmail").textContent =
            "Enter a valid email";
        return false;
    } else {
        document.getElementById("errorEmail").textContent = "";
        return true;
    }
}

function validatePhone() {
    if (!touchedFields.phone) return true;

    // Requires the number to start with + and followed by 10 to 14 digits
    const phoneRegex = /^\+\d{10,14}$/;

    if (!phoneRegex.test(phone.value.trim())) {
        document.getElementById("errorPhone").textContent =
            "Enter a valid phone number starting with + and country code (e.g., +234...)";
        return false;
    } else {
        document.getElementById("errorPhone").textContent = "";
        return true;
    }
}

function validateConsultationType() {
    if (!touchedFields.consultationType) return true;

    let selectedType = false;
    for (let r of radioInputs) {
        if (r.checked) selectedType = true;
    }
    if (!selectedType) {
        document.getElementById("errorType").textContent =
            "Select a consultation type";
        return false;
    } else {
        document.getElementById("errorType").textContent = "";
        return true;
    }
}

// function validateLegalArea() {
//     if (!touchedFields.legalArea) return true;

//     if (legalArea.value === "") {
//         document.getElementById("errorArea").textContent =
//             "Please choose an area";
//         return false;
//     } else {
//         document.getElementById("errorArea").textContent = "";
//         return true;
//     }
// }

function validateDateTime() {
    if (!touchedFields.dateTime) return true;

    if (dateTime.value === "") {
        document.getElementById("errorDate").textContent =
            "Date and time required";
        return false;
    } else {
        document.getElementById("errorDate").textContent = "";
        return true;
    }
}

function validateInfo() {
    if (!touchedFields.info) return true;

    if (info.value.length > 500) {
        document.getElementById("errorInfo").textContent =
            "Additional info must be less than 500 characters";
        return false;
    } else {
        document.getElementById("errorInfo").textContent = "";
        return true;
    }
}

// Full step validators
function validateStep1() {
    // When clicking Next, mark all step 1 fields as touched
    touchedFields.fullName = true;
    touchedFields.email = true;
    touchedFields.phone = true;
    touchedFields.consultationType = true;

    // Validate all fields and update their error messages
    const isNameValid = validateFullName();
    const isEmailValid = validateEmail();
    const isPhoneValid = validatePhone();
    const isTypeValid = validateConsultationType();

    const isValid = isNameValid && isEmailValid && isPhoneValid && isTypeValid;
    nextBtn.disabled = !isValid;
    return isValid;
}

function validateStep2() {
    // When clicking Submit, mark all step 2 fields as touched
    // touchedFields.legalArea = true;
    touchedFields.dateTime = true;
    touchedFields.info = true;

    // Validate all fields and update their error messages
    // const isAreaValid = validateLegalArea();
    const isDateValid = validateDateTime();
    const isInfoValid = validateInfo();

    const isValid = isDateValid && isInfoValid;
    submitBtn.disabled = !isValid;
    return isValid;
}

// Check button states whenever any input changes
function checkStep1ButtonState() {
    // Only check fields that have been touched
    const isNameValid = !touchedFields.fullName || fullName.value.trim() !== "";
    const isEmailValid =
        !touchedFields.email || /^\S+@\S+\.\S+$/.test(email.value.trim());
    const isPhoneValid =
        !touchedFields.phone || /^\+?\d{10,15}$/.test(phone.value.trim());

    let isTypeValid = !touchedFields.consultationType;
    if (touchedFields.consultationType) {
        for (let r of radioInputs) {
            if (r.checked) {
                isTypeValid = true;
                break;
            }
        }
    }

    // Enable button if all required fields have valid values
    const requiredFieldsValid =
        isNameValid && isEmailValid && isPhoneValid && isTypeValid;

    // Check if form has any actual values to enable the button
    const hasValues =
        fullName.value.trim() !== "" &&
        email.value.trim() !== "" &&
        phone.value.trim() !== "" &&
        Array.from(radioInputs).some((r) => r.checked);

    nextBtn.disabled = !requiredFieldsValid || !hasValues;
}

function checkStep2ButtonState() {
    // Only check fields that have been touched
    // const isAreaValid = !touchedFields.legalArea || legalArea.value !== "";
    const isDateValid = !touchedFields.dateTime || dateTime.value !== "";
    const isInfoValid = !touchedFields.info || info.value.length <= 500;

    // Enable button if all required fields have valid values
    const requiredFieldsValid = isDateValid && isInfoValid;

    // Check if form has the required values to enable the button
    const hasRequiredValues =  dateTime.value !== "";

    submitBtn.disabled = !requiredFieldsValid || !hasRequiredValues;
}

// Attach input event handlers for Step 1
fullName.addEventListener("input", function () {
    touchedFields.fullName = true;
    validateFullName();
    checkStep1ButtonState();
});

email.addEventListener("input", function () {
    touchedFields.email = true;
    validateEmail();
    checkStep1ButtonState();
});

phone.addEventListener("input", function () {
    touchedFields.phone = true;
    validatePhone();
    checkStep1ButtonState();
});

for (let radio of radioInputs) {
    radio.addEventListener("change", function () {
        touchedFields.consultationType = true;
        validateConsultationType();
        checkStep1ButtonState();
    });
}

// Attach input event handlers for Step 2
// legalArea.addEventListener("input", function () {
//     touchedFields.legalArea = true;
//     validateLegalArea();
//     checkStep2ButtonState();
// });

dateTime.addEventListener("input", function () {
    touchedFields.dateTime = true;
    validateDateTime();
    checkStep2ButtonState();
});

info.addEventListener("input", function () {
    touchedFields.info = true;
    validateInfo();
    checkStep2ButtonState();

    // Update character count or display warning if approaching limit
    const remainingChars = 500 - info.value.length;
    const infoCharCount = document.getElementById("infoCharCount");
    if (infoCharCount) {
        infoCharCount.textContent = `${remainingChars} characters remaining`;
        if (remainingChars < 50) {
            infoCharCount.style.color = "red";
        } else {
            infoCharCount.style.color = "";
        }
    }
});

// Function to check if form has pre-filled values (after page refresh)
function checkForExistingValues() {
    // For Step 1
    if (fullName.value.trim() !== "") touchedFields.fullName = true;
    if (email.value.trim() !== "") touchedFields.email = true;
    if (phone.value.trim() !== "") touchedFields.phone = true;

    for (let r of radioInputs) {
        if (r.checked) {
            touchedFields.consultationType = true;
            break;
        }
    }

    // For Step 2
    // if (legalArea.value !== "") touchedFields.legalArea = true;
    if (dateTime.value !== "") touchedFields.dateTime = true;
    if (info.value.trim() !== "") touchedFields.info = true;

    // Run validations based on current step
    if (currentStep === 1) {
        checkStep1ButtonState();
    } else if (currentStep === 2) {
        checkStep2ButtonState();
    }
}

// Initialize button states and check for pre-filled values
checkStep1ButtonState();
checkStep2ButtonState();
checkForExistingValues();

// Add a listener for when the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    checkForExistingValues();
});
