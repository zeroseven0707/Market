<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimarket</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<body>
    <div class="menu">
        <div class="menu-top-layout ">
            <div class="menu-top width">
                <div class="menu-top-box">
                    <ul>
                        <a href="#"><li>Tentang Kami</li></a>
                        <a href="#"><li>Temukan Kami</li></a>
                        <a href="#"><li>Pembayaran</li></a>
                        <a href="#"><li>Gabung Kemitraan</li></a>
                    </ul>
                    <button class="hamburger-menu" onclick="toggleMenu()">Tentang Kami <iconify-icon icon="tabler:chevron-down"></iconify-icon></button>
                </div>
                <div class="menu-item-top">
                    <a href="#">
                        <button><iconify-icon icon="ic:baseline-phone"></iconify-icon> <span>Hubungi Kami</span></button>
                    </a>
                    <a href="/login">
                        <button><iconify-icon icon="clarity:login-line"></iconify-icon> <span>Masuk</span></button>
                    </a>
                    <div class="wishlist-icon cart-icon">
                        <div class="ciri-masuk">
                            <span>1</span>
                        </div>
                        <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                    </div>
                    <div class="cart-icon">
                        <div class="ciri-masuk">
                            <span>1</span>
                        </div>
                        <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- POPUP MENU TOP HANYA UNTUK MOBILE -->
        <div id="targetMenu" class="popup-menu">
            <div class="popup-menu-overlay" onclick="toggleMenu()">
                <div class="popup-menu-box">
                    <ul>
                        <a href="tentang-kami.php"><li>Tentang Kami <iconify-icon icon="octicon:chevron-right-16"></iconify-icon></li></a>
                        <a href="#"><li>Temukan Kami <iconify-icon icon="octicon:chevron-right-16"></iconify-icon></li></a>
                        <a href="#"><li>Pembayaran <iconify-icon icon="octicon:chevron-right-16"></iconify-icon></li></a>
                        <a href="#"><li>Hubungi Kami <iconify-icon icon="octicon:chevron-right-16"></iconify-icon></li></a>
                        <a href="#"><li style="border-bottom:none;">Gabung Kemitraan <iconify-icon icon="octicon:chevron-right-16"></iconify-icon></li></a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="primary-menu width">
            <div class="logo">
                <img src="images/logo.png" alt="Logo Minimarket">
            </div>
            <div class="nav-menu">
                <div id="hiddenPrimaryMenu">
                    <ul>
                        <a href=""><li>Beranda</li></a>
                        <a href=""><li>Program</li></a>
                        <a href="/katalog"><li>Produk & Layanan Digital</li></a>
                        <a href=""><li class="sign-in"><iconify-icon icon="clarity:login-line"></iconify-icon> Masuk</li></a>
                    </ul>
                    <button onclick="togglePrimaryMenu()"><iconify-icon icon="ic:baseline-close"></iconify-icon></button>
                </div>

                <div class="hamburger-primary-menu" onclick="togglePrimaryMenu()">
                    <iconify-icon icon="pajamas:hamburger"></iconify-icon>
                </div>
                <button onclick="toggleSearch()"><iconify-icon icon="ic:outline-search"></iconify-icon></button>
            </div>
        </div>

        <!-- POPUP CARI -->
        <div id="hiddenSearch">
            <div class="search-box">
                <input type="text" placeholder="Cari disini...">
                <button>Cari</button>
            </div>
        </div>
    </div>
    @yield('content')
    <div class="footer">
        <div class="layout-footer width">
            <div class="footer-content-logo">
                <img src="images/logo.png" alt="">
                <h3>PT. Indonesia Merdeka</h3>
                <div class="address-footer">
                    <p>Perum Alexandria Estate Jl.Palermo Kel.Tugujaya Kec.Cihideung Kota Tasikmalaya</p>
                </div>
                <span>perusahaan2808@gmail.com</span>
            </div>
            <div class="footer-menu footer-menu__center">
                <h3>Perusahaan</h3>
                <ul>
                    <a href=""><li>Tentang Kami</li></a>
                    <a href=""><li>Gabung Kemitraan</li></a>
                    <a href=""><li>Temukan Kami</li></a>
                    <a href=""><li>Cara Pembayaran</li></a>
                </ul>
            </div>
            <div class="footer-menu ">
                <h3>Hubungi Kami</h3>
                <div class="social-icon-footer">
                    <div class="icon-box">
                        <iconify-icon icon="basil:instagram-outline"></iconify-icon>
                    </div>
                    <div class="icon-box">
                        <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                    </div>
                    <div class="icon-box">
                        <iconify-icon icon="mdi:linkedin"></iconify-icon>
                    </div>
                </div>
                <div class="input-footer">
                    <input type="text" placeholder="Masukkan email">
                    <a href="#"><button>Kirim</button></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span>© 2023 grosir. Hak cipta dilindungi.</span>
        </div>
    </div>
    </body>
    <script src="js/quantity.js"></script>
    <script src="js/popup-primary-menu.js"></script>
    <script src="js/popup-menu.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="js/search.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/category-slide.js"></script>
    <script src="js/hover-sidebar.js"></script>
    </html>