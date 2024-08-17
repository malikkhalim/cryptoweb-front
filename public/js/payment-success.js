function submitPayment() {
    // Simulate form submission and redirect to success page
    setTimeout(() => {
        window.location.href = "/success-payment";
    }, 1000); // Simulate a delay for the payment process
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('payment-form').addEventListener('submit', function (e) {
        e.preventDefault();
        submitPayment();
    });
});
