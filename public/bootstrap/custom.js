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
        var productType = button.getAttribute('data-type');

        // URL API
        var apiUrl = `/api/produk/${productType}/${productId}`;

        // Elemen-elemen di dalam modal
        var mainProductImage = document.getElementById('mainProductImage');
        var thumbnailContainer = document.querySelector('.thumbnail-images');
        var productName = document.getElementById('productName');
        var productCategory = document.getElementById('productCategory');
        var productDescription = document.getElementById('productDescription');
        var buyNowLink = document.getElementById('buyNowLink');

        // Membersihkan konten modal sebelum mengisi dengan data baru
        mainProductImage.src = '';
        thumbnailContainer.innerHTML = '';
        productName.innerText = 'Loading...';
        productCategory.innerText = '';
        productDescription.innerText = '';
        buyNowLink.href = '#';

        // Fetch data dari API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    productName.innerText = 'Produk tidak ditemukan';
                    productDescription.innerText = data.error;
                    return;
                }

                productName.innerText = data.nama_produk;
                productCategory.innerText = data.kategori_produk;
                productDescription.innerText = data.deskripsi_produk;

                // Tentukan URL produk berdasarkan jenis produk
                let productUrl;

                switch(productType) {
                    case 'terbaik':
                        productUrl = `localhost/produk/${productId}/detail-terbaik`;
                        break;
                    case 'anyaman':
                        productUrl = `localhost/produk/${productId}/detail-anyaman`;
                        break;
                    case 'ttg':
                        productUrl = `localhost/produk/${productId}/detail-ttg`;
                        break;
                    case 'makanan':
                        productUrl = `localhost/produk/${productId}/detail-makanan`;
                        break;
                    default:
                        productUrl = `localhost/produk/${productId}`;
                        break;
                }

                // Buat link WhatsApp dengan nama produk dan link produk
                buyNowLink.href = `https://wa.me/+62895410172288?text=Saya%20ingin%20menanyakan%20produk%20${encodeURIComponent(data.nama_produk)}%20yang%20ada%20pada%20link%20:%20${encodeURIComponent(productUrl)}`;

                // Set gambar utama
                if (data.img_produk.length > 0) {
                    mainProductImage.src = `/storage/${data.img_produk[0]}`;
                } else {
                    mainProductImage.src = 'https://via.placeholder.com/300';
                }

                // Set thumbnail images
                data.img_produk.forEach((img, index) => {
                    var thumbnail = document.createElement('img');
                    thumbnail.src = `/storage/${img}`;
                    thumbnail.classList.add('thumbnail-img', 'mx-2', 'img-thumbnail');
                    thumbnail.style.width = '80px';
                    thumbnail.style.cursor = 'pointer';

                    thumbnail.addEventListener('click', function () {
                        mainProductImage.src = `/storage/${img}`;
                        document.querySelectorAll('.thumbnail-img').forEach(img => img.classList.remove('active'));
                        thumbnail.classList.add('active');
                    });

                    thumbnailContainer.appendChild(thumbnail);
                });
            })
            .catch(error => {
                console.error('Error fetching product data:', error);
                productName.innerText = 'Terjadi kesalahan';
                productDescription.innerText = 'Tidak dapat mengambil data produk.';
            });
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


document.addEventListener("DOMContentLoaded", function () {
    // Welcome text animation (typewriter effect)
    const welcomeText = document.getElementById('welcomeText');
    const text = welcomeText.textContent;
    welcomeText.innerHTML = ''; // Clear the text

    for (let i = 0; i < text.length; i++) {
        let span = document.createElement('span');
        span.textContent = text[i];
        span.style.animationDelay = `${i * 0.1}s`; // Delay for each character
        welcomeText.appendChild(span);
    }

    // Setelah teks selesai muncul, tunggu beberapa detik sebelum menghilangkan welcome screen
    setTimeout(function () {
        // Tambahkan waktu standby sebelum menghilang
        setTimeout(function () {
            document.getElementById('welcomeScreen').style.opacity = '0';
            setTimeout(function () {
                document.getElementById('welcomeScreen').style.display = 'none'; // Hide after fading out
            }, 1000); // 1 second fade-out effect
        }, 2000); // Tambahkan standby selama 2 detik
    }, text.length * 100 + 500); // Adjust based on text length
});

// welcome screen
window.onload = function() {
    console.log('Page loaded'); // Debugging
    document.body.classList.add('loaded'); // Tambahkan class loaded ke body untuk menampilkan konten halaman

    if (!sessionStorage.getItem('firstVisit')) {
        console.log('First visit, showing welcome screen');
        // Tetap tampilkan welcome screen pertama kali
        var welcomeScreen = document.getElementById('welcomeScreen');
        welcomeScreen.style.display = 'flex';

        document.addEventListener('click', function() {
            welcomeScreen.style.display = 'none'; // Hilangkan welcome screen setelah klik
            sessionStorage.setItem('firstVisit', 'true');
        });
    } else {
        console.log('Welcome screen already seen, skipping');
        var welcomeScreen = document.getElementById('welcomeScreen');
        welcomeScreen.style.display = 'none'; // Jangan tampilkan welcome screen jika sudah pernah dilihat
    }
};
