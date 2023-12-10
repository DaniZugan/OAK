

const navbarMenu = document.querySelector(".navbar .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");
// Show mobile menu
hamburgerBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});
// Hide mobile menu
hideMenuBtn.addEventListener("click", () =>  hamburgerBtn.click());
// Show login popup
showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});
// Hide login popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());
// Show or hide signup form
signupLoginLink.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup.classList[link.id === 'signup-link' ? 'add' : 'remove']("show-signup");
    });
});



//popups for event page 
function openPopup(title, description, images) {
    const eventTitle = document.getElementById('event-title');
    const eventDescription = document.getElementById('event-description');
    const embeddedCircles = document.querySelector('.embedded-circles');

    eventTitle.innerHTML = title;

    if (Array.isArray(description)) {
        eventDescription.innerHTML = description.length > 0 ? description[0] : '';
    } else {
        eventDescription.innerHTML = description || '';
    }

    embeddedCircles.innerHTML = '';

    if (Array.isArray(images)) {
        images.forEach((imageSrc) => {
            const circle = document.createElement('div');
            circle.className = 'embedded-circle';
            circle.style.backgroundImage = `url(${imageSrc})`;
            circle.setAttribute('onclick', `showImage('${imageSrc}')`);
            embeddedCircles.appendChild(circle);
        });
    } else {
        console.error('Images must be an array.');
    }

    document.getElementById('popup').style.display = 'block';
    document.body.style.overflow = 'hidden';
}



function closePopup() {
    const popup = document.getElementById('popup');
    document.body.style.overflow = 'auto';

    // Close your carousel if needed
    // Example: $('#carusel').slick('unslick');

    popup.style.display = 'none';
}
