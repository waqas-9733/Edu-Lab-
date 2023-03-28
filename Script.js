'use script';
/* Add event on multiple elements */
const addElementOnElement= function (elements, evetType, callback){
    for(let i=0 , len = elements.length; i<len; i++){
        elements[i].addEventListener(evetType, callback);
    }
}
/* Navbar toggle for mobile */
const navbar = document.querySelector("[data-navbar]");
const navTogglebtn = document.querySelector("[data-nav-toggle-btn]");
const overLay = document.querySelector("[data-overlay]");

const toggleNavbar = function (){
    navbar.classList.toggle("active");
    navTogglebtn.classList.toggle("activ");
    overLay.classList.toggle("active");
    document.body.classList.toggle("nav-active");
}
addElementOnElement([navTogglebtn, overLay],"click",toggleNavbar);

/* ---------Paralax Effect */
const parrallaxElements = document.querySelectorAll("[data-parrallax]");
window.addEventListener("mousemove", event =>{
    for (let i = 0, len = parrallaxElements.length; i <len; i++){
        const movementX = (event.clientX / window.innerWidth) * 
        Number(parrallaxElements[i].dataset.parallaxSpeed);
        const movementY = (event.clientY / window.innerHeight) * 
        Number(parrallaxElements[i].dataset.parallaxSpeed);

        parrallaxElements[i].animate({
            transform:'translate(${movementX}px,${movementY}px)'
        }, {duration: 500, fill:"forwards"});
    }
})