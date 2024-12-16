// Initialize Swiper slider
var swiper = new Swiper(".home-slider", {
    loop:true, // Enable loop mode
    navigation: {
      nextEl: ".swiper-button-next", // Next button selector
      prevEl: ".swiper-button-prev", // Previous button selector
    },
});

// Adjust font size of the first <h1> element
document.getElementsByTagName("h1")[0].style.fontSize = "6vw";