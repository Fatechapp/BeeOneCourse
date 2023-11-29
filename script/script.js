

document.addEventListener("DOMContentLoaded", function () {

    // TAB MENU

    var aboutUsLink = document.getElementById("about-us-button");
    var galeryLink = document.getElementById("galery-button");
    var reviewLink = document.getElementById("review-button");

    var aboutUsContent = document.querySelector(".content-about-us");
    var galeryContent = document.querySelector(".content-galery");
    var reviewContent = document.querySelector(".content-review");

    aboutUsLink.addEventListener("click", function (event) {
        event.preventDefault();

        aboutUsContent.removeAttribute("hidden");
        galeryContent.setAttribute("hidden", "");
        reviewContent.setAttribute("hidden", "");
    });
    galeryLink.addEventListener("click", function (event) {
        event.preventDefault();

        aboutUsContent.setAttribute("hidden", "");
        galeryContent.removeAttribute("hidden");
        reviewContent.setAttribute("hidden", "");
    });
    reviewLink.addEventListener("click", function (event) {
        event.preventDefault();

        aboutUsContent.setAttribute("hidden", "");
        galeryContent.setAttribute("hidden", "");
        reviewContent.removeAttribute("hidden");
    });

    // LOGIN BUTTON
    var loginButton = document.getElementById("login");
    loginButton.addEventListener("click", function () {
        window.location.href = "pages/choose-role.html"
    })

});
