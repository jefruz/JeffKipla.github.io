window.addEventListener("scroll", function() {
    var backToTopButton = document.querySelector(".back-to-top");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
});

// Smooth scrolling when clicking the back to top button
document.querySelector(".back-to-top").addEventListener("click", function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});



