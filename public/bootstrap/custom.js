// timeline activitie
(function () {
    "use strict";

    // define variables
    var items = document.querySelectorAll(".timeline li");

    // check if an element is in viewport
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function callbackFunc() {
      for (var i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
          items[i].classList.add("in-view");
        }
      }
    }

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
  })();
// end timeline activity

// start custom head produk

document.addEventListener('DOMContentLoaded', function () {
    const fixedHeader = document.getElementById('fixed-header');
    const fixedHeaderText = document.getElementById('fixed-header-text');
    const newProductsHeader = document.getElementById('new-products');
    const recentlyViewedHeader = document.getElementById('recently-viewed');

    window.addEventListener('scroll', function () {
      const newProductsTop = newProductsHeader.getBoundingClientRect().top;
      const recentlyViewedTop = recentlyViewedHeader.getBoundingClientRect().top;
      const navbarHeight = 50; // Sesuaikan dengan tinggi navbar Anda

      console.log('Scroll position:', window.scrollY);
      console.log('newProductsTop:', newProductsTop);
      console.log('recentlyViewedTop:', recentlyViewedTop);

      if (newProductsTop <= navbarHeight && recentlyViewedTop > navbarHeight) {
        fixedHeaderText.innerText = 'New products';
        fixedHeader.style.display = 'block';
        console.log('Displaying: New products');
      } else if (recentlyViewedTop <= navbarHeight) {
        fixedHeaderText.innerText = 'Recently viewed';
        fixedHeader.style.display = 'block';
        console.log('Displaying: Recently viewed');
      } else {
        fixedHeader.style.display = 'none';
        console.log('Hiding fixed header');
      }
    });
  });

// end custom head produk
