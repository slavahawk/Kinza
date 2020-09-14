const headerMenu = document.querySelector("header"),
    mainSection = document.querySelector(".mainSection"),
    scrollPrev = 0;

if (mainSection) {
    scrollStyleHeader();
} else {
    headerMenu.classList.add("fast");
    headerMenu.classList.add("out");
}

function scrollStyleHeader() {
    window.onscroll = () => {
        let winScroll =
            document.body.scrollTop || document.documentElement.scrollTop;
        let height =
            document.documentElement.scrollHeight -
            document.documentElement.clientHeight;
        let scrolled = (winScroll / height) * 100;

        if (scrolled > 1 && scrolled > scrollPrev) {
            headerMenu.classList.add("out");
        } else if (scrolled == 0) {
            headerMenu.classList.remove("out");
        } else {
            headerMenu.classList.add("out");
        }
    };
}

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
