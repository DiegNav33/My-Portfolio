document.addEventListener("DOMContentLoaded", function() {
    // START CHANGE HEADER ALL PAGES
        function swipeHeader() {
        const headerElt = document.querySelector("header");
        const headerLogoElt = document.querySelector("header img");
            if (window.scrollY >= 100) {

                headerElt.classList.remove("homeHeaderWhite");
                headerElt.classList.add("homeHeaderBlack");
                headerLogoElt.src="/images/header_black.png";
                headerLogoElt.style.width="50px";

            }

            else if (window.scrollY <= 70) {

                headerElt.classList.remove("homeHeaderBlack");
                headerElt.classList.add("homeHeaderWhite");
                headerLogoElt.src="/images/header_white.png";
                headerLogoElt.style.width="80px";

            }
        };

        document.addEventListener("scroll", swipeHeader);
    //END CHANGE HEADER ALL PAGES

    // START TRANSLATE ON PROJECTS PAGE
        function translateProjectsArticle(){
        let articlesFromLeft = document.querySelectorAll(".articleLeft");
        let articlesFromRight = document.querySelectorAll(".articleRight");

        const {scrollTop, clientHeight} = this.document.documentElement; // destructuring -> creation deux const a partir de proprieté utile. a partir des proprieté de l' objet document.documentElement, maintenant acces a scrollTop (scroll depuis le top) et client height(hauteur de la partie visible de ma fenetre)

        for (let articleLeft of articlesFromLeft) {
            const topEltToTopViewport = articleLeft.getBoundingClientRect().top // retourne l'objet DOMRect avec les propriétés :top,bottom,left,right,x,y --> sa retourne la taille et  position de l'element relatif au viewport.

            if(scrollTop > (scrollTop + topEltToTopViewport).toFixed() - clientHeight * 0.85) {
                articleLeft.classList.add("activeTranslateArticle");
            }
        };

        for (let articleRight of articlesFromRight) {
            const topEltToTopViewport = articleRight.getBoundingClientRect().top

            if(scrollTop > (scrollTop + topEltToTopViewport).toFixed() - clientHeight * 0.85) {
                articleRight.classList.add("activeTranslateArticle");
            }
        };
        };

        window.addEventListener("scroll", translateProjectsArticle);
    // END TRANSLATE ON PROJECTS PAGE
    // START MEDIA QUERY TRANSLATE ON PROJECTS PAGE
        const mediaQuery = window.matchMedia("(max-width: 900px)");

        if(mediaQuery.matches) {

            window.addEventListener("scroll", translateProjectsArticle);

        }
    // END MEDIA QUERY TRANSLATE ON PROJECTS PAGE

    //START BURGER MENU
        let iconsElt = document.getElementById("icons");
        let navBarElt = document.querySelector("nav");
        let bodyElt = document.querySelector("body");
        iconsElt.addEventListener("click",function(){
            navBarElt.classList.toggle("burger");
            bodyElt.style.overflow = bodyElt.style.overflow === "hidden" ? "auto" : "hidden"; // si overflow = hidden alors passe en auto sinon hidden
        });
    // END BURGER MENU
});
