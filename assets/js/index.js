document.addEventListener("DOMContentLoaded", () => {
  const text = "Find your next adventure, bite, or stay.";
  const speed = 100;  // typing speed (ms)
  const delay = 1500; // pause before erasing
  let i = 0;
  let isDeleting = false;
  const el = document.getElementById("hero-text");

  function typeWriter() {
    if (!isDeleting && i < text.length) {
      // typing forward
      el.innerHTML = text.substring(0, i + 1);
      i++;
      setTimeout(typeWriter, speed);
    } else if (isDeleting && i > 0) {
      // deleting backwards
      el.innerHTML = text.substring(0, i - 1);
      i--;
      setTimeout(typeWriter, speed / 2); // deleting faster
    } else {
      // switch modes
      isDeleting = !isDeleting;
      setTimeout(typeWriter, delay);
    }
  }

  typeWriter();
});
