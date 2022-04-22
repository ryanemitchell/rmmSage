import {domReady} from '@roots/sage/client';
/**
 * editor.main
 */
const wpwrap = (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // window.alert('admin');

};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(wpwrap);
import.meta.webpackHot?.accept(wpwrap);

domReady(() => {



})
