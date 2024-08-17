function submitSignup() {
    // Simulate form submission and redirect to success page
    setTimeout(() => {
        window.location.href = "/success-signup";
    }, 1000); // Simulate a delay for the payment process
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('signup').addEventListener('submit', function (e) {
        e.preventDefault();
        submitSignup();
    });
});
