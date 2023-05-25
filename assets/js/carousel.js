;(function ($) {
  class heroCarousel {
    constructor() {
      this.initiateCarousel()
    }

    initiateCarousel() {
      $(".dfy-hero-carousel").slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
      })
    }
  }

  new heroCarousel()
})(jQuery)
