;(function ($) {
  class heroCarousel {
    constructor() {
      this.initiateCarousel()
    }

    initiateCarousel() {
      $(".dfy-hero-carousel").slick()
    }
  }

  new heroCarousel()
})(jQuery)
