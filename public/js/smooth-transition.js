document.addEventListener('DOMContentLoaded', function () {
    // Fade-in effect
    document.body.classList.add('fade-in');

    // Add event listeners to all links
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function (event) {
            // Prevent default action
            event.preventDefault();

            // Get the href attribute
            const href = this.getAttribute('href');

            // Fade-out effect
            document.body.classList.add('fade-out');

            // Wait for the fade-out to complete before navigating
            setTimeout(() => {
                window.location.href = href;
            }, 500);
        });
    });
});
