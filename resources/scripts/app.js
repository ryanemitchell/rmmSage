import {domReady} from '@roots/sage/client';
import Accordion from 'accordion-js';
import Flickity from "flickity/js"
import AOS from 'aos';
import {rmmExternalLinks} from "@scripts/modules/rmmExternalinks";
import {slideToggle} from "@scripts/modules/slide-functions";


window.Flickity = Flickity;
window.Accordion = Accordion;
window.slideToggle = slideToggle;
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
// eslint-disable-next-line
//   window.alert(businessName);

  rmmExternalLinks();

    /* ===========================  Sticky Header  ========================== */

    window.addEventListener('scroll', function () {
        const header = document.querySelector('.main-header');
        header.classList.toggle("is-stuck", window.scrollY > 50);
        document.body.classList.toggle("stuck-header", window.scrollY > 50);
    })


  /* ===========================  Accordion On Load and Resize  ========================== */


  // https://github.com/michu2k/Accordion






  /* ===========================  InItialize multiple Accordions  ========================== */
// Reference: https://github.com/michu2k/Accordion/issues/7

  // const accordions = Array.from(document.querySelectorAll('.accordion'));
  //
  // if (accordions) {
  //   let count = 0;
  //   let id = null;
  //
  //   accordions.forEach(item => {
  //     id = 'accordion' + count;
  //     item.id = id;
  //
  //     new Accordion('#' + id, {
  //       duration: 300,
  //     });
  //     count++;
  //   });
  // }
  //




  /* ===========================  Mobile Menu  ========================== */





  //TREMP SWIPER



  /* ===========================  Animate on Scroll  ========================== */
  // https://github.com/michalsnik/aos

  AOS.init({
    // Global settings:
    disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 0, // offset (in px) from the original trigger point
    delay: 200, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

  });

  /* ===========================  Page Specific JS   ========================== */


  const classNames = ['home', 'blog', 'page-template-template-development-swiper']
  if (classNames.some(className => document.body.classList.contains(className))) {
  //Page SSpecific Functions Here
  }

  /* ==========================================================================
     ACCORDION from: https://michu2k.github.io/Accordion/
     ========================================================================== */

















})

// let slideUp = (target, duration=500) => {
//   target.style.transitionProperty = 'height, margin, padding';
//   target.style.transitionDuration = duration + 'ms';
//   target.style.boxSizing = 'border-box';
//   target.style.height = target.offsetHeight + 'px';
//   target.offsetHeight;
//   target.style.overflow = 'hidden';
//   target.style.height = 0;
//   target.style.paddingTop = 0;
//   target.style.paddingBottom = 0;
//   target.style.marginTop = 0;
//   target.style.marginBottom = 0;
//   window.setTimeout( () => {
//     target.style.display = 'none';
//     target.style.removeProperty('height');
//     target.style.removeProperty('padding-top');
//     target.style.removeProperty('padding-bottom');
//     target.style.removeProperty('margin-top');
//     target.style.removeProperty('margin-bottom');
//     target.style.removeProperty('overflow');
//     target.style.removeProperty('transition-duration');
//     target.style.removeProperty('transition-property');
//     //alert("!");
//   }, duration);
// }
// let slideDown = (target, duration=500) => {
//   target.style.removeProperty('display');
//   let display = window.getComputedStyle(target).display;
//
//   if (display === 'none')
//     display = 'block';
//
//   target.style.display = display;
//   let height = target.offsetHeight;
//   target.style.overflow = 'hidden';
//   target.style.height = 0;
//   target.style.paddingTop = 0;
//   target.style.paddingBottom = 0;
//   target.style.marginTop = 0;
//   target.style.marginBottom = 0;
//   target.offsetHeight;
//   target.style.boxSizing = 'border-box';
//   target.style.transitionProperty = "height, margin, padding";
//   target.style.transitionDuration = duration + 'ms';
//   target.style.height = height + 'px';
//   target.style.removeProperty('padding-top');
//   target.style.removeProperty('padding-bottom');
//   target.style.removeProperty('margin-top');
//   target.style.removeProperty('margin-bottom');
//   window.setTimeout( () => {
//     target.style.removeProperty('height');
//     target.style.removeProperty('overflow');
//     target.style.removeProperty('transition-duration');
//     target.style.removeProperty('transition-property');
//   }, duration);
// }
// let slideToggle = (target, duration = 500) => {
//   if (window.getComputedStyle(target).display === 'none') {
//     return slideDown(target, duration);
//   } else {
//     return slideUp(target, duration);
//   }
// }
