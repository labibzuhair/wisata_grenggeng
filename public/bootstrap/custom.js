// click scroll on event branda
$("#scrollButton").click(function () {
    $("html, body").animate(
        {
            scrollTop: $("#targetButton").offset().top,
        },
        1000
    ); // 1000 adalah durasi scroll dalam milidetik (1 detik)
});

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
            rect.right <=
                (window.innerWidth || document.documentElement.clientWidth)
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
document.addEventListener("DOMContentLoaded", function () {
    const fixedHeader = document.getElementById("fixed-header");
    const fixedHeaderText = document.getElementById("fixed-header-text");
    const anyamanHeader = document.getElementById("anyaman");
    const ttgHeader = document.getElementById("ttg");
    const makananHeader = document.getElementById("makanan");

    if (
        fixedHeader &&
        fixedHeaderText &&
        anyamanHeader &&
        ttgHeader &&
        makananHeader
    ) {
        window.addEventListener("scroll", function () {
            const anyamanTop = anyamanHeader.getBoundingClientRect().top;
            const ttgTop = ttgHeader.getBoundingClientRect().top;
            const makananTop = makananHeader.getBoundingClientRect().top;
            const navbarHeight = 50; // Sesuaikan dengan tinggi navbar Anda

            console.log("Scroll position:", window.scrollY);
            console.log("anyamanTop:", anyamanTop);
            console.log("ttgTop:", ttgTop);
            console.log("makananTop:", makananTop);

            if (anyamanTop <= navbarHeight && ttgTop > navbarHeight) {
                fixedHeaderText.innerText = "Produk Anyaman Pandan";
                fixedHeader.style.display = "block";
                console.log("Displaying: Produk Anyaman Pandan");
            } else if (ttgTop <= navbarHeight && makananTop > navbarHeight) {
                fixedHeaderText.innerText = "TTG (Teknologi Tepat Guna)";
                fixedHeader.style.display = "block";
                console.log("Displaying: TTG (Teknologi Tepat Guna)");
            } else if (makananTop <= navbarHeight) {
                fixedHeaderText.innerText = "Makanan Ringan";
                fixedHeader.style.display = "block";
                console.log("Displaying: Makanan Ringan");
            } else {
                fixedHeader.style.display = "none";
                console.log("Hiding fixed header");
            }
        });
    } else {
        console.error("One or more elements are missing");
    }
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
                var mainProductImage = document.getElementById('mainProductImage');
                var thumbnailContainer = document.querySelector('.thumbnail-images');
                var productName = document.getElementById('productName');
                var productCategory = document.getElementById('productCategory');
                var productDescription = document.getElementById('productDescription');
                var buyNowLink = document.getElementById('buyNowLink');

                // Gambar utama
                mainProductImage.src = `http://localhost/storage/${data.img_produk[0]}`;

                // Gambar kecil di bawah, termasuk gambar utama
                thumbnailContainer.innerHTML = '';
                data.img_produk.forEach((img, index) => {
                    if (img) {
                        var thumbnail = document.createElement('img');
                        thumbnail.src = `http://localhost/storage/${img}`;
                        thumbnail.classList.add('thumbnail-img', 'mx-2');

                        // Tambahkan class 'active' ke gambar pertama secara default
                        if (index === 0) {
                            thumbnail.classList.add('active');
                        }

                        // Tambahkan event listener untuk mengganti gambar utama saat gambar kecil diklik
                        thumbnail.addEventListener('click', function() {
                            // Ganti gambar utama
                            mainProductImage.src = `http://localhost/storage/${img}`;

                            // Hapus class 'active' dari semua thumbnail
                            document.querySelectorAll('.thumbnail-img').forEach(img => img.classList.remove('active'));

                            // Tambahkan class 'active' pada thumbnail yang diklik
                            this.classList.add('active');
                        });

                        thumbnailContainer.appendChild(thumbnail);
                    }
                });

                productName.innerText = data.nama_produk;
                productCategory.innerText = data.kategori_produk;
                productDescription.innerText = data.deskripsi_produk;
                buyNowLink.href = `https://wa.me/+62895410172288?text=Saya%20ingin%20membeli%20produk%20anda%20yang%20bernama%20${data.nama_produk}`;
            })
            .catch(error => console.error('Error fetching product data:', error));
    });
});



// view produk in beranda
var swiper = new Swiper(".swiper-container", {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },
});
