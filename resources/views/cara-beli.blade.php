@extends('template.index')
@section('content')

<div class="swiper caraBeli">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="cara-beli__box">
                <div class="cara-beli__image">
                    <img src="images/katalog.png" alt="">
                </div>
                <div class="cara-beli__content">
                    <h3>1. Jelajahi Produk</h3>
                    <p>Telusuri kategori produk yang Anda inginkan, seperti Bahan Pokok, Makanan Ringan, Minuman, dan lain-lain. Lalu setelah itu klik icon cart pada produk</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="cara-beli__box">
                <div class="cara-beli__image">
                    <img src="images/cart.png" alt="">
                </div>
                <div class="cara-beli__content">
                    <h3>2. Cek Keranjang Belanja</h3>
                    <p>Setelah Anda selesai memilih produk, periksa keranjang belanja Anda dengan mengklik ikon keranjang atau menu "Keranjang Belanja". Pastikan semua produk yang Anda inginkan sudah ada di sana.</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="cara-beli__box">
                <div class="cara-beli__image">
                    <img src="images/informasi.png" alt="">
                </div>
                <div class="cara-beli__content">
                    <h3>3. Isi form Informasi</h3>
                    <p>Setelah Anda mengisi keranjang belanja dengan produk-produk yang ingin Anda beli di Minimarket.id, Anda akan melanjutkan proses pembelian dengan mengisi informasi, lalu klik "Melanjutkan Pembayaran"</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="cara-beli__box">
                <div class="cara-beli__image">
                    <img src="images/shipping.png" alt="">
                </div>
                <div class="cara-beli__content">
                    <h3>4. Pilih untuk Pengiriman</h3>
                    <p>Setelah Kamu mengisi informasi dengan benar, selanjutnya kamu akan diminta untuk memilih pengiriman paket dan mengisi form alamat pengiriman</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="cara-beli__box">
                <div class="cara-beli__image">
                    <img src="images/konfir.png" alt="">
                </div>
                <div class="cara-beli__content">
                    <h3>4. Konfirmasi data dan pengiriman</h3>
                    <p>Setelah itu cek kembali data diri dan jika semuanya benar maka kamu hanya perlu klik "Melanjutkan Pembayaran", kamu juga bisa edit jika ada data yang salah</p>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

@endsection