document.addEventListener("DOMContentLoaded", () => {
  const quotes = [
    '"The only way to do great work is to love what you do." - Steve Jobs',
    '"Opportunities don\'t happen, you create them." - Chris Grosser',
    '"Don\'t watch the clock; do what it does. Keep going." - Sam Levenson',
    '"Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time." - Thomas A. Edison',
    '"I find that the harder I work, the more luck I seem to have." - Thomas Jefferson',
    '"Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful." - Albert Schweitzer',
    '"It is never too late to be what you might have been." - George Eliot',
    '"Build your own dreams, or someone else will hire you to build theirs." - Farrah Gray',
    '"I have learned over the years that when one\'s mind is made up, this diminishes fear." - Rosa Parks',
    '"A person who never made a mistake never tried anything new." - Albert Einstein',
    '"What you get by achieving your goals is not as important as what you become by achieving your goals." - Zig Ziglar',
  ];

  const dailyQuote = document.getElementById("dailyQuote");
  dailyQuote.innerText = quotes[Math.floor(Math.random() * quotes.length)];
});

document.getElementById("signupForm").addEventListener("submit", function(event) {
  let isValid = true;
  // Example: Validate email
  const email = document.getElementById("email").value;
  if (!email.match(/^[^@]+@\w+(\.\w+)+\w$/)) {
      alert("Please enter a valid email address.");
      isValid = false;
  }
  // Prevent form submission if validation fails
  if (!isValid) {
      event.preventDefault();
  }
});

// Adjusted for client-side redirection
function onLoginSuccess() {
  window.location.href = '/career-hub/career-hub.html'; // Redirect to the dashboard within the profile folder
}






