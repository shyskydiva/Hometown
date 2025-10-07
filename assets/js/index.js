function validateForm(){
    "use strict";
    var isvalid = true;

    if(document.getElementById("name").value == ""){
        document.getElementById("name").style.borderColor = "red";
        document.getElementById("name").style.backgroundColor = "pink";
        document.getElementById("error1").innerHTML= "Enter Your Name";
    }
    else{
        document.getElementById("name").style = null;
    }

    if(document.getElementById("visited").value == ""){
        document.getElementById("visited").style.borderColor = "red";
        document.getElementById("errorMessage").innerHTML= "Enter a valid date";
    }
    else{
        document.getElementById("visited").style = null;
    }

    if(document.getElementById("state").value == ""){
        document.getElementById("state").style.borderColor = "red";
        document.getElementById("error3").innerHTML= "Choose a state";
    }
    else{
        document.getElementById("state").style = null;
    }

    if(document.getElementById("name").value == "" || document.getElementById("visited").value == "" || document.getElementById("state").value == ""){
        isvalid = false;
    }
    else{
        isvalid = true;
    }

    return (isvalid);
}

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
