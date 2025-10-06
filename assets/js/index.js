document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

hamburger.addEventListener('click', () => {
  navMenu.classList.toggle('active');
}); 

  const text = "Find your next adventure, bite, or stay.";
  const speed = 100;  // typing speed (ms)
  const delay = 1500; // pause before erasing
  let i = 0;
  let isDeleting = false;
  const el = document.getElementById("hero-text");

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

  const exploreBtn = document.getElementById("explore");
  if (exploreBtn) {
    exploreBtn.addEventListener("click", () => {
      document.getElementById("main").scrollIntoView({
        behavior: "smooth"
      });
    });
  }
});
