document.addEventListener('DOMContentLoaded', function () {
    const userLoggedIn = user_data.logged_in; // Access the localized PHP data
    const quoteButton = document.getElementById('quote-button');
    const sidebarQuoteButton = document.getElementById('sidebar-quote-button');

    // Dynamically change button text based on user status
    if (userLoggedIn) {
        quoteButton.textContent = 'Get a Personalized Quote';
        sidebarQuoteButton.textContent = 'Get a Personalized Quote';
    } else {
        quoteButton.textContent = 'Request a Quote';
        sidebarQuoteButton.textContent = 'Request a Quote';
    }
});
