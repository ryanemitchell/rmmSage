import {domReady} from '@roots/sage/client';
import Swiper from 'swiper/bundle';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);





domReady(() => {

    /* ===========================  Sticky Header  ========================== */

    window.addEventListener('scroll', function () {
        const header = document.querySelector('.main-header');
        header.classList.toggle("sticky", window.scrollY > 50);
        document.body.classList.toggle("stuck-header", window.scrollY > 50);
    })





  const swiper = new Swiper('.mySwiper', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });



})

