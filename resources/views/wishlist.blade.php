@extends('template.index')
@section('content')

<div class="cart-page width">
    <div class="heading-section-1">
        <h1>Keranjang <span>Belanja</span> kamu</h1>
    </div>
    <div class="cart-product-wrapper">
        <div class="cart-product-body-heading">
            <h3>Rincian Produk</h3>
            <h3>Kuantitas</h3>
            <h3>Harga</h3>
            <h3>Aksi</h3>
        </div>
        <div class="cart-product-box">
            <div class="cart-product-detail">
                <div class="cart-product-image">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="cart-product-name">
                    <h3>Nexcare daily mask 4pcs</h3>
                    <span>Deskripsi produk(kalau ada)</span>
                    <a href="#"><button>Hapus</button></a>
                </div>
            </div>
            <div class="product-layout-price">
                <span>Stok Tersedia</span>
            </div>
            <div class="product-layout-price">
                <span>Rp. 13.000,-</span>
            </div>
            <div class="product-layout-price">
                <a href="">
                    <button class="checkout-button__next">
                        +<iconify-icon icon="vaadin:cart"></iconify-icon>
                    </button>
                </a>
            </div>
        </div>
        <div class="cart-product-box">
            <div class="cart-product-detail">
                <div class="cart-product-image">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="cart-product-name">
                    <h3>Nexcare daily mask 4pcs</h3>
                    <span>Deskripsi produk(kalau ada)</span>
                    <a href="#"><button>Hapus</button></a>
                </div>
            </div>
            <div class="product-layout-price">
                <span>Stok Tersedia</span>
            </div>
            <div class="product-layout-price">
                <span>Rp. 13.000,-</span>
            </div>
            <div class="product-layout-price">
                <a href="">
                    <button class="checkout-button__next">
                        +<iconify-icon icon="vaadin:cart"></iconify-icon>
                    </button>
                </a>
            </div>
        </div>
        
    </div>
    <a href="/katalog">
        <button class="back-buy">
            <iconify-icon icon="pajamas:arrow-left"></iconify-icon>
            Lanjutkan Belanja
        </button>
    </a>
</div>
<div class="width recommend-cart">
    <div class="recommend-layout recommend-layout__wishlist">
        <div class="heading-section-1">
            <h1>Produk <span>Pilihan Khusus</span> untukmu</h1>
        </div>
        <div class="layout-product-main">
            <div class="box-category box-category__product">
                <div class="image-box-category image-box-category__product">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="image-box-category image-box-category__product">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="image-box-category image-box-category__product">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="image-box-category image-box-category__product">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="image-box-category image-box-category__product">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="image-box-category image-box-category__product">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="image-box-category image-box-category__product">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="image-box-category image-box-category__product">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection