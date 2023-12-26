const navbarMenu = document.querySelector(".navbar .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const profilePop = document.querySelector(".profile-btn");
const memPop = document.querySelector(".circle")
const userPop = document.querySelector(".user-popup");

const hideMem = userPop.querySelector(".close-btn");

hamburgerBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});
// Hide mobile menu
hideMenuBtn.addEventListener("click", () =>  hamburgerBtn.click());
// Show login popup


profilePop.addEventListener("click", () => {
    document.body.classList.toggle("show-user");
});
memPop.addEventListener("click", () => {
    document.body.classList.toggle("show-user");
});
hideMem.addEventListener("click", () => profilePop.click());

