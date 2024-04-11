document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', () => {
        const answer = item.nextElementSibling;
        if (answer.style.display === "block") {
            answer.style.display = "none";
        } else {
            document.querySelectorAll('.faq-answer').forEach(a => a.style.display = "none");
            answer.style.display = "block";
        }
    });
});
