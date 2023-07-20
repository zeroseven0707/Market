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
            <h3>Total</h3>
        </div>
        <?php
        $total_produk = 0;
        $total = 0;
        ?>
        @foreach (session()->get('cart') as $key => $item)
        <div class="cart-product-box">
            <div class="cart-product-detail">
                <div class="cart-product-image">
                    <img src="images/coca-cola.png" alt="">
                </div>
                <div class="cart-product-name">
<<<<<<< HEAD
                    <h3>Coca Cola</h3>
                    {{-- <span>Deskripsi produk(kalau ada)</span> --}}
                    <a href="#"><button>Hapus</button></a>
=======
                    <h3>{{ $item['nama']}}</h3>
                    <a href="remove-cart/{{ $key }}"><button>Hapus</button></a>
>>>>>>> e99f4688521f086a32ed74723277de336c2eedfc
                </div>
            </div>
            <div class="cart-product-quantity">
                <div class='qty-layout'>
                    <button onclick="decreaseQty()"><iconify-icon icon="fa6-solid:minus"></iconify-icon></button>
                    <input type="text" value="{{ $item['qty'] }}" id="qty"/>
                    <button onclick="increaseQty()"><iconify-icon icon="fa6-solid:plus"></iconify-icon></button>
                </div>
            </div>
            <div class="product-layout-price">
<<<<<<< HEAD
                <span>Rp. 15.000,-</span>
            </div>
            <div class="product-layout-price">
                <span>Rp. 15.000,-</span>
=======
                <span>Rp. {{ $item['harga'] }},-</span>
            </div>
            <div class="product-layout-price">
                <span>Rp. {{ $item['total'] }},-</span>
>>>>>>> e99f4688521f086a32ed74723277de336c2eedfc
            </div>
        </div>
        <?php
        $total_produk += $item['qty'];
        $total += $item['total'];
        ?>
        @endforeach
    </div>
    <a href="/katalog">
        <button class="back-buy">
            <iconify-icon icon="pajamas:arrow-left"></iconify-icon>
            Lanjutkan Belanja
        </button>
    </a>
</div>
<div class="checkout-button">
    <div class="checkout-button-layout width">
        <a href="/remove-allcart">
            <button class="checkout-button__option">
                <iconify-icon icon="fa-solid:trash"></iconify-icon>
            Hapus Semua
        </button>
    </a>
        <button class="checkout-button__option">
            <iconify-icon icon="mdi:heart"></iconify-icon>
            Masukkan ke Daftar Keinginan
        </button>
        <div class="total-produk">
<<<<<<< HEAD
            <span>Total (1 Produk):</span>
            <h3>Rp. 15.000,-</h3>
=======
            <span>Total ({{ $total_produk }} Produk):</span>
            <h3>Rp. {{ $total }}</h3>
>>>>>>> e99f4688521f086a32ed74723277de336c2eedfc
        </div>
        <a href="/informasi">
            <button class="checkout-button__next">
                Lanjut isi Informasi
            </button>
        </a>
    </div>
</div>
<div class="width recommend-cart">
    <div class="recommend-layout">
        <div class="heading-section-1">
            <h1>Produk <span>Pilihan Khusus</span> untukmu</h1>
        </div>
        <div class="layout-product-main">
            <div class="box-category box-category__product">
                <div class="button-product__select">
                    <div class="button-product__select-icon">
                        <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                        <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                    </div>
                </div>
                <div class="image-box-category image-box-category__product">
                    <a href="/produk">
                        <img src="images/masker.png" alt="">
                    </a>
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="button-product__select">
                    <div class="button-product__select-icon">
                        <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                        <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                    </div>
                </div>
                <div class="image-box-category image-box-category__product">
                    <img src="images/coca-cola.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="button-product__select">
                    <div class="button-product__select-icon">
                        <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                        <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                    </div>
                </div>
                <div class="image-box-category image-box-category__product">
                    <img src="images/mizone.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="button-product__select">
                    <div class="button-product__select-icon">
                        <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                        <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                    </div>
                </div>
                <div class="image-box-category image-box-category__product">
                    <img src="images/youc.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="button-product__select">
                    <div class="button-product__select-icon">
                        <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                        <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                    </div>
                </div>
                <div class="image-box-category image-box-category__product">
                    <img src="images/kue.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="button-product__select">
                    <div class="button-product__select-icon">
                        <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                        <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                    </div>
                </div>
                <div class="image-box-category image-box-category__product">
                    <img src="images/chitato.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="button-product__select">
                    <div class="button-product__select-icon">
                        <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                        <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                    </div>
                </div>
                <div class="image-box-category image-box-category__product">
                    <img src="images/adem-sari.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>Nexcare Daily Mask</h4>
                    <span>Rp. 5600 ,-</span>
                </div>
            </div>
            <div class="box-category box-category__product">
                <div class="button-product__select">
                    <div class="button-product__select-icon">
                        <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                        <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                    </div>
                </div>
                <div class="image-box-category image-box-category__product">
                    <img src="images/sensi.png" alt="">
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
