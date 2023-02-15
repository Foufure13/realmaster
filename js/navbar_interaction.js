

(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el) => {
    return document.querySelector(el);
  }

  /**
   * Easy event listener function
   */
  const on = (el, type, listener) => {
    const selectEl = select(el);
    if (selectEl) {
      selectEl.addEventListener(type, listener);
    }
  }
  


  on('.mobile-nav-toggle', 'click', function(e) {
    select('.window1').classList.toggle('mobile-nav-active');
  });


})();
