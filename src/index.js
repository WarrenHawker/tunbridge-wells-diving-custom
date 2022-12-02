const toggleButton = document.getElementsByClassName('mobile-toggle-button')[0];
const navBarLinks = document.getElementsByClassName('nav-bar-links')[0];

toggleButton.addEventListener('click', () => {
    navBarLinks.classList.toggle('mobile')
});

function myFunction(x) {
    const frontPageText = document.getElementsByClassName('front-page-banner-text')[0];
    const frontPageHeader = document.getElementsByClassName('front-page-header')[0];
    const frontPageBanner = document.getElementsByClassName('front-page-banner')[0];
    const pageFooter = document.querySelector('footer');
    if (x.matches) { // If media query matches
      pageFooter.parentNode.insertBefore(frontPageText, pageFooter);
      frontPageBanner.classList.toggle('mobile');
      frontPageText.classList.toggle('mobile');
    } else {
        frontPageHeader.appendChild(frontPageText);    
    }
  }


let x = window.matchMedia("(max-width: 1300px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes