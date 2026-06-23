document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.swiper-container').forEach(function (container) {
    const nextBtn = container.querySelector('.swiper-button-next');
    const prevBtn = container.querySelector('.swiper-button-prev');
    const paginationEl = container.querySelector('.swiper-pagination');

    document.querySelectorAll('[data-bs-toggle="pill"]').forEach(tab => {
      tab.addEventListener('shown.bs.tab', function () {
        document.querySelectorAll('.swiper-container').forEach(swiperEl => {
          swiperEl.swiper?.update();
        });
      });
    });

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
