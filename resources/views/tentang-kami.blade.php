@extends('template.index')
@section('content')

<link rel="stylesheet" href="css/menu.css">

<div class="other-page">
    <div class="heading-section-page">
        <h1>Tentang Kami</h1>
    </div>
    <div class="about-us-first width">
        <div class="about-us__image">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-us__content">
            <h2>Apa itu <span>Minimarket.id</span></h2>
            <p>Minimarket.id adalah platform belanja daring yang menyediakan pengalaman belanja praktis dan terpercaya bagi pelanggan. Dengan misi untuk memudahkan kegiatan belanja sehari-hari, Minimarket.id menawarkan beragam produk kebutuhan sehari-hari seperti makanan, minuman, produk rumah tangga, perawatan pribadi, dan masih banyak lagi.</p>
            <span class="slogan-about">- Minimarket.id Solusi Belanja Praktis dan Terpercaya</span>
        </div>
    </div>
    <div class="visi">
        <div class="heading-section-1 visi-heading">
            <h1>VISI</h1>
        </div>
        <div class="visi-content">
            <p>"Menjadi platform belanja daring terkemuka yang memberikan pengalaman belanja praktis dan terpercaya bagi semua pelanggan."</p>
        </div>
    </div>
    <div class="about-us-second">
        <div class="about-us-second__layout width">
            <div class="heading-section-1 heading-section-about">
                <h1>MISI</h1>
            </div>
            <div class="about-us-second__box-layout">
                <div class="about-us-second__box">
                    <div class="about-us-second__box-icon">
                        <img src="images/icon-1.png" alt="">
                        <h4>Kemudahan & Kepuasan</h4>
                    </div>
                    <div class="about-us-second__box-content">
                        <p>Minimarket.id dirancang dengan fokus pada pengalaman pengguna yang mudah dan menyenangkan. Layanan pelanggan yang responsif juga memberikan kepuasan tambahan bagi pengguna.</p>
                    </div>
                </div>
                <div class="about-us-second__box">
                    <div class="about-us-second__box-icon">
                        <img src="images/icon-2.png" alt="">
                        <h4>Beragam Pilihan Produk</h4>
                    </div>
                    <div class="about-us-second__box-content">
                        <p>Minimarket.id menyediakan beragam produk kebutuhan sehari-hari, termasuk makanan, minuman, produk rumah tangga, perawatan pribadi, dan banyak lagi. </p>
                    </div>
                </div>
                <div class="about-us-second__box">
                    <div class="about-us-second__box-icon">
                        <img src="images/icon-3.png" alt="">
                        <h4>Kualitas Produk Terjamin</h4>
                    </div>
                    <div class="about-us-second__box-content">
                        <p>Minimarket.id bekerja sama dengan pemasok terpercaya dan jaringan minimarket yang telah teruji untuk memastikan kualitas produk yang dijual.  </p>
                    </div>
                </div>
                <div class="about-us-second__box">
                    <div class="about-us-second__box-icon">
                        <img src="images/icon-4.png" alt="">
                        <h4>Aman dan Terpercaya</h4>
                    </div>
                    <div class="about-us-second__box-content">
                        <p>Keamanan transaksi adalah prioritas utama Minimarket.id. Platform ini menggunakan sistem pembayaran yang aman dan menyediakan berbagai pilihan pembayaran yang dapat dipercaya. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection