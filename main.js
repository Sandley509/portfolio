   // Show or hide the button
   window.onscroll = function() {
    var button = document.getElementById("backToTop");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        button.style.display = "flex";
    } else {
        button.style.display = "none";
    }
};

// Scroll to top function
function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}