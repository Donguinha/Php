document.addEventListener("scroll", function () {
    var scrollPosition = window.scrollY;
    var background = document.querySelector(".background");
    background.style.backgroundPosition =
        "center " + -scrollPosition / 2 + "px";
});
