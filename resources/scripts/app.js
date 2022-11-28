import {domReady} from '@roots/sage/client';

// Font Awesome
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faCrown, faFireFlameCurved, faMagnifyingGlass, faBagShopping, faPlus, faMinus, faArrowUpFromBracket } from "@fortawesome/free-solid-svg-icons";
library.add(faCrown, faFireFlameCurved, faMagnifyingGlass, faBagShopping, faPlus, faMinus, faArrowUpFromBracket);
dom.watch();
import './megamenu';

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

// getUserAgreement();  // Works from here but from html not