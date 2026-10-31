document.addEventListener('DOMContentLoaded', function () {
    const bookingForm = document.getElementById('bookingForm');

    if (bookingForm) {
        bookingForm.addEventListener('submit', function (event) {
            let isValid = true;

            const plateInput = document.getElementById('vehicle_plate');
            const plateRegex = /^[A-Z0-9\s\-]{3,10}$/i;

            if (plateInput && !plateRegex.test(plateInput.value.trim())) {
                isValid = false;
                showFieldError(plateInput, 'Please enter a valid vehicle plate (3-10 alphanumeric characters).');
            } else if (plateInput) {
                clearFieldError(plateInput);
            }

            const dateInput = document.getElementById('booking_date');
            if (dateInput) {
                const selectedDate = new Date(dateInput.value);
                const today = new Date();
                today.setHours(0, 0, 0, 0);

                if (selectedDate < today) {
                    isValid = false;
                    showFieldError(dateInput, 'Booking date cannot be in the past.');
                } else {
                    clearFieldError(dateInput);
                }
            }

            if (!isValid) {
                event.preventDefault();
                event.stopPropagation();
            }
        });
    }

    function showFieldError(inputElement, message) {
        inputElement.classList.add('is-invalid');
        let errorDiv = inputElement.nextElementSibling;
        if (!errorDiv || !errorDiv.classList.contains('invalid-feedback')) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'invalid-feedback';
            inputElement.parentNode.appendChild(errorDiv);
        }
        errorDiv.textContent = message;
    }

    function clearFieldError(inputElement) {
        inputElement.classList.remove('is-invalid');
        const errorDiv = inputElement.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
            errorDiv.textContent = '';
        }
    }
});
