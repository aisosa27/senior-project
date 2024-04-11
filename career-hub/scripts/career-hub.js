function openFeedbackForm() {
    // Redirect to the contact page located in the main folder
    window.location.href = '../contact.html'; // Adjust the path as necessary
}
document.addEventListener('DOMContentLoaded', () => {
    const userNameDisplay = document.querySelector('.welcome-message h1');
    const userName = localStorage.getItem('userName'); // Assuming you've stored the username as 'userName' in localStorage
    if (userNameDisplay && userName) {
        userNameDisplay.textContent = `Welcome, ${userName}!`;
    }
});
