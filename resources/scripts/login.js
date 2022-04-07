import {domReady} from '@roots/sage/client';
/**
 * editor.main
 */
const login = (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(login);
import.meta.webpackHot?.accept(login);

domReady(() => {



})
