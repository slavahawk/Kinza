const footerMain = document.querySelector("footer"),
    about = document.querySelector(".aboutUs"),
    contact = document.querySelector(".contact"),
    footerLinks = footerMain.querySelectorAll("a"),
    socialBorder = document.querySelector(".footer__content-right-social");

for (let link of footerLinks) {
    if (!about) {
        footerMain.style.background = "#121212";
        footerMain.style.color = "#fff";
        link.style.color = "white";
        socialBorder.style.borderColor = "#fff";
    }

    if (contact) {
        footerMain.style.display = "none";
    }
}
