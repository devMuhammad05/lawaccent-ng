function validatePhoneNumber() {
    const phoneInput = document.getElementById('phone');
    const errorSpan = document.getElementById('error');
    const phone = phoneInput.value.trim();

    const regex = /^(\+?\d{1,3}[- ]?)?\d{10}$/;

    if (phone === '') {
        errorSpan.textContent = '';
        phoneInput.style.borderColor = '';
    } else if (!regex.test(phone)) {
        errorSpan.textContent = 'Invalid phone number format.';
        phoneInput.style.borderColor = 'red';
    } else {
        errorSpan.textContent = '';
        phoneInput.style.borderColor = 'green';
    }
}
