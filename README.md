# Hometown Website  

This project is a personal web showcase highlighting my hometown’s best **activities**, **food spots**, and **places to rest**. It was built using **HTML**, **CSS**, **JavaScript**, and **PHP**, with an emphasis on responsive design, modular styling, and an interactive user experience.  

---

## Overview  

The goal of this website is to give visitors an engaging guide to my hometown through a clean and cohesive design. Each section (Activities, Food, and Rest) follows a consistent card layout featuring high-quality images, short descriptions, and hover-based interactivity.  

A navigation bar allows users to easily move between pages, while a contact/survey page lets visitors share their feedback. Upon submission, users are redirected to a **Thank You** page.  

---

## Design  

### Global Styles  
- **main.css** defines shared elements such as the navigation bar structure, typography, and footer.  
- Each page uses an **internal style block or linked stylesheet** to override unique elements (like navigation colors or card layouts).  

### Page Highlights  
- **Activities / Food / Rest Pages:**  
  - Two stacked cards per page  
  - Each card features a full-width image and description  
  - On hover, the card image swaps with a secondary image  
- **Homepage:**  
  - Hero banner with typing animation  
  - “Explore” button scrolls smoothly to main content  
- **Survey Page:**  
  - Form validation handled in JavaScript  
  - On submission, users are redirected to the thank-you page  

---

## JavaScript Functionality  

- **Form Validation:** Ensures that name, date, and state fields are filled before submission.  
- **Hamburger Menu:** Toggles visibility of the navigation bar on mobile screens.  
- **Typing Animation:** Displays dynamic text in the homepage hero section.  
- **Image Hover Swap:** Replaces the card image with a secondary image when hovered.  
- **Smooth Scrolling:** Scrolls from the “Explore” button to the main section.  

---

## Responsive Design  

The site includes several breakpoints to ensure compatibility across devices:  

- **1024px and below (Tablet):**  
  Cards stack vertically and expand to 95% width.  
  Navigation collapses into a hamburger menu.  

- **768px and below (Mobile):**  
  Cards expand to 98% width for better visibility.  
  Dropdown menus display directly below their parent item.  

- **480px and below (Small Mobile):**  
  Cards take full width and images shrink proportionally.  

---

## PHP Functionality  

- **`comments.php`** processes the survey form submission and redirects users to the thank-you page.  
- Uses PHP `include` statements for reusable navigation and footer sections.  

---

## Technologies Used  

- **HTML5** – Structure and layout  
- **CSS3 / Flexbox** – Styling and responsive design  
- **JavaScript (ES6)** – Animations and interactivity  
- **PHP** – Form handling and dynamic routing  

---

## Future Improvements  

- Add a database to store survey responses  
- Implement an admin panel to view submissions  
- Include location-based recommendations using a map API  
- Optimize images for faster mobile performance  

---

## Author  

**Shyanne Cortes**  
> Web Designer & Developer  
> [shyannecortes.com](https://shyannecortes.com)
 

