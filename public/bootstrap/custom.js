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
        fixedHeaderText.innerText = 'Produk Terbaru';
        fixedHeader.style.display = 'block';
        console.log('Displaying: New products');
      } else if (recentlyViewedTop <= navbarHeight) {
        fixedHeaderText.innerText = 'Barusaja Dilihat';
        fixedHeader.style.display = 'block';
        console.log('Displaying: Recently viewed');
      } else {
        fixedHeader.style.display = 'none';
        console.log('Hiding fixed header');
      }
    });
  });

// end custom head produk

// start popup detail produk
document.addEventListener('DOMContentLoaded', function () {
    var productModal = document.getElementById('productModal');
    productModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var productId = button.getAttribute('data-id');

        // Lakukan AJAX request untuk mendapatkan detail produk berdasarkan ID
        fetch(`/api/produk/${productId}`)
            .then(response => response.json())
            .then(data => {
                // Update isi modal dengan detail produk
                var carouselInner = document.querySelector('.modal-carousel .carousel-inner');
                var productName = document.getElementById('productName');
                var productPrice = document.getElementById('productPrice');
                var productCategory = document.getElementById('productCategory');
                var productDescription = document.getElementById('productDescription');
                var buyNowLink = document.getElementById('buyNowLink');

                carouselInner.innerHTML = '';
                data.img_produk.forEach((img, index) => {
                    if (img) { // Pastikan gambar tidak null atau kosong
                        var carouselItem = document.createElement('div');
                        carouselItem.classList.add('carousel-item');
                        if (index === 0) carouselItem.classList.add('active');
                        carouselItem.innerHTML = `<img src="${img}" class="d-block w-100" alt="...">`;
                        carouselInner.appendChild(carouselItem);
                    }
                });

                productName.innerText = data.nama_produk;
                productPrice.innerText = `Rp. ${data.harga}`;
                productCategory.innerText = data.kategori_produk;
                productDescription.innerText = data.deskripsi_produk;
                buyNowLink.href = `https://wa.me/+62895410172288?text=Saya%20ingin%20membeli%20produk%20anda%20yang%20bernama%20${data.nama_produk}`;
            })
            .catch(error => console.error('Error fetching product data:', error));
    });
});



// custom slider produk
$('#myCarousel').carousel({
    interval: 3000,
 })
