"use strict";

// Form validation function
function validateForm() {
    let isvalid = true;

    const nameInput = document.getElementById("name");
    const visitedInput = document.getElementById("visited");
    const stateInput = document.getElementById("state");

    if (nameInput.value === "") {
        nameInput.style.borderColor = "red";
        nameInput.style.backgroundColor = "pink";
        document.getElementById("error1").innerHTML = "Enter Your Name";
        isvalid = false;
    } else {
        nameInput.style = null;
    }

    if (visitedInput.value === "") {
        visitedInput.style.borderColor = "red";
        document.getElementById("errorMessage").innerHTML = "Enter a valid date";
        isvalid = false;
    } else {
        visitedInput.style = null;
    }

    if (stateInput.value === "") {
        stateInput.style.borderColor = "red";
        document.getElementById("error3").innerHTML = "Choose a state";
        isvalid = false;
    } else {
        stateInput.style = null;
    }

    return isvalid;
}

document.addEventListener("DOMContentLoaded", () => {
    // Hamburger menu toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.querySelector('.navbar');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }

    // Mobile dropdown toggle
    document.querySelectorAll('.dropdown .dropbtn').forEach(btn => {
        btn.addEventListener('click', e => {
            const dropdown = e.target.closest('.dropdown');
            dropdown.classList.toggle('active');
        });
    });

    // Typing animation
    const text = "Find your next adventure, bite, or stay.";
    const speed = 100;
    const delay = 1500;
    let i = 0;
    let isDeleting = false;
    const el = document.getElementById("hero-text");

    if (el) {
        function typeWriter() {
            if (!isDeleting && i < text.length) {
                el.innerHTML = text.substring(0, i + 1);
                i++;
                setTimeout(typeWriter, speed);
            } else if (isDeleting && i > 0) {
                el.innerHTML = text.substring(0, i - 1);
                i--;
                setTimeout(typeWriter, speed / 2);
            } else {
                isDeleting = !isDeleting;
                setTimeout(typeWriter, delay);
            }
        }
        typeWriter();
    }

    // Explore button scroll
    const exploreBtn = document.getElementById("explore");
    if (exploreBtn) {
        exploreBtn.addEventListener("click", () => {
            const mainElement = document.getElementById("main");
            if (mainElement) {
                mainElement.scrollIntoView({ behavior: "smooth" });
            }
        });
    }
});
