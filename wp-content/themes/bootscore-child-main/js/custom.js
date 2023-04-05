jQuery(function ($) {
  // Do stuff here
  $(document).ready(function () {
    $(".customer-logos").slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 520,
          settings: {
            slidesToShow: 3,
          },
        },
      ],
    });
  });
}); // jQuery End
let scrollhead = document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    if (this.window.scrollY > 200) {
      this.document.getElementById("navbar-info").classList.add("scroll-top");
      navbar_height = this.document.querySelector(".navbar").offsetHeight;
      this.document.body.style.paddingTop = navbar_height + "px";
    } else {
      this.document
        .getElementById("navbar-info")
        .classList.remove("scroll-top");
      this.document.body.style.paddingTop = "0";
    }
  });
});

let scrolllogo = document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    if (this.window.scrollY > 200) {
      this.document.getElementById("nav-main").classList.add("header-fix");
      navbar_height = this.document.querySelector(".navbar").offsetHeight;
      this.document.body.style.paddingTop = navbar_height + "px";
    } else {
      this.document.getElementById("nav-main").classList.remove("header-fix");
      this.document.body.style.paddingTop = "0";
    }
  });
});
