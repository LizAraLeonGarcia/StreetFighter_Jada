document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.swiper-container').forEach(function (container) {
    new Swiper(container, {
      loop: true,
      spaceBetween: 20,
      navigation: {
        nextEl: container.querySelector('.swiper-button-next'),
        prevEl: container.querySelector('.swiper-button-prev'),
      },
      pagination: {
        el: container.querySelector('.swiper-pagination'),
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  });
});
