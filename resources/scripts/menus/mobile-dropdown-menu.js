import {domReady} from '@roots/sage/client';
import {slideUp, slideDown, slideToggle} from '../modules/slide-functions';

const main = async (err) => {
    if (err) {
        // handle hmr errors
        console.error(err);
    }

    // application code
};


domReady(main);


domReady(() => {


    /* =========================== Menu Toggle Button  ========================== */

    document.getElementById("mobile-menu-toggle").addEventListener('click', function () {
        var target = document.getElementById("mobile-menu-wrapper");
        target.parentElement.classList.toggle('menu-open');
        this.classList.toggle('menu-open');
        // Set Aria Arributes
        this.setAttribute(
            'aria-expanded',
            this.getAttribute('aria-expanded') === 'true'
                ? 'false'
                : 'true'
        );
        slideToggle(target, 200);
    });


    /* =========================== In Menu Close Button  ========================== */

    document.getElementById("mobile-menu-close").addEventListener('click', function () {
        var target = document.getElementById("mobile-menu-wrapper");
        target.parentElement.classList.toggle('menu-open');
        document.getElementById("mobile-menu-toggle").classList.toggle('menu-open');
        // Set Aria Arributes
        document.getElementById("mobile-menu-toggle").setAttribute(
            'aria-expanded',
            this.getAttribute('aria-expanded') === 'true'
                ? 'false'
                : 'true'
        );
        slideToggle(target, 200);
    });

    /* ===========================  Submenu Toggles  ========================== */

    document.addEventListener('click', function (event) {

        // Check if is a toggle element
        if (!event.target.matches('.controlToggle')) return;

        // open/close slide function
        slideToggle(event.target.parentElement.nextElementSibling, 200);

        // toggle active/open class
        event.target.parentElement.classList.toggle('active');


    }, false);


})
