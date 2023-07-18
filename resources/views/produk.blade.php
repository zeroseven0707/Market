@extends('template.index')
@section('content')
<div class="product width">
    <div class="product-layout">
        <div class="image-page-product">
            <img src="images/masker.png" alt="">
        </div>
        <div class="desc-page-product">
            <h1>Nexcare daily mask 4pcs</h1>
            <div class="harga-page-product">
                <span>Rp. 13000,-</span>
            </div>
            <div class="hashtag-product">
                <div class="hashtag-product-box">
                    <span>Masker</span>
                </div>
                <div class="hashtag-product-box">
                    <span>Kesehatan</span>
                </div>
                <div class="hashtag-product-box">
                    <span>Stok Tersedia</span>
                </div>
            </div>
            <div class="qty-box">
                <h4>Jumlah barang</h4>
                <div class='qty-layout'>
                    <button onclick="decreaseQty()"><iconify-icon icon="fa6-solid:minus"></iconify-icon></button>
                    <input type="text" value="1" id="qty"/>
                    <button onclick="increaseQty()"><iconify-icon icon="fa6-solid:plus"></iconify-icon></button>
                </div>
            </div>
            <div class="button-page-product">
                <button><iconify-icon icon="vaadin:cart"></iconify-icon> Masukkan ke Keranjang</button>
                <button class="wishlist-product"><iconify-icon icon="mdi:heart"></iconify-icon></button>
            </div>
        </div>
    </div>
    <div class="recommend-layout">
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