// Initialize Wow
new WOW().init();

// Reviews Slider
$(".reviewsSlider").slick({
  infinite: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 5000,
  centerMode: true,
  cssEase: "linear",
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
});
// Product Slider
$(".productSlider").slick({
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
});

// Accordion
const accordion = document.querySelectorAll(".accordion");
accordion.forEach((i) =>
  i.addEventListener("click", (e) => {
    if (e.target.classList.contains("accordion-header")) {
      e.target.classList.toggle("active");
      const accordionContent = e.target.nextElementSibling;
      accordionContent.style.maxHeight
        ? (accordionContent.style.maxHeight = null)
        : (accordionContent.style.maxHeight = `${accordionContent.scrollHeight}px`);
    }
  })
);
