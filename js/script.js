document.addEventListener("DOMContentLoaded", function() {

    function swipeHeader() {
        const headerElt = document.querySelector("header");
        const headerLogoElt = document.querySelector("header img");
        if (window.scrollY >= 100) {

            headerElt.classList.remove("homeHeaderWhite");
            headerElt.classList.add("homeHeaderBlack");
            headerLogoElt.src="/images/Diego-logo-black-header.png";
            headerLogoElt.style.width="50px";
            
        }

        else if (window.scrollY <= 70) {

            headerElt.classList.remove("homeHeaderBlack");
            headerElt.classList.add("homeHeaderWhite");
            headerLogoElt.src="/images/diego-logo-white-header.png";
            headerLogoElt.style.width="80px";
            
        }
    };

    document.addEventListener("scroll", swipeHeader);
    
});