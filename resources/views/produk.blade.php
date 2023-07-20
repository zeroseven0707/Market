@extends('template.index')
@section('content')
<div class="product width">
    <div class="product-layout">
        <div class="image-page-product">
            <img src="https://api.upos-conn.com/master/v1/{{ $product['gambar'] }}" alt="">
        </div>
        <div class="desc-page-product">
            <h1>{{ $product['namaVarian']}}</h1>
            <div class="harga-page-product">
                <span>Rp. {{ $product['hargaJual'] }},-</span>
            </div>
            <div class="hashtag-product">
                <div class="hashtag-product-box">
                    <span>Kesehatan</span>
                </div>
                <div class="hashtag-product-box">
                    <span>Stok Tersedia</span>
                </div>
            </div>
            <form action="/addto/{{ $product['posVarianId'] }}" method="post">@csrf
                <div class="qty-box">
                    <h4>Jumlah barang</h4>
                    <div class='qty-layout'>
                        <button type="button" onclick="decreaseQty()"><iconify-icon icon="fa6-solid:minus"></iconify-icon></button>
                        <input type="text" name="qty" value="1" id="qty"/>
                        <button type="button" onclick="increaseQty()"><iconify-icon icon="fa6-solid:plus"></iconify-icon></button>
                </div>
            </div>
            <div class="button-page-product">
                <button type="submit" name="save" value="cart"><iconify-icon icon="vaadin:cart"></iconify-icon> Masukkan ke Keranjang</button>
                <button type="submit" name="save" value="wishlist" class="wishlist-product"><iconify-icon icon="mdi:heart"></iconify-icon></button>
            </div>
        </form>
        </div>
    </div>
    <div class="recommend-layout">
        <div class="heading-section-1">
            <h1>Produk <span>Pilihan Khusus</span> untukmu</h1>
        </div>
        <div class="layout-product-main">
            @foreach ($product_all as $all)
            <div class="box-category box-category__product">
                <div class="image-box-category image-box-category__product">
                    <img src="images/masker.png" alt="">
                </div>
                <div class="content-box-category content-box-category__product">
                    <h4>{{ $all['namaVarian'] }}</h4>
                    <span>Rp. {{ $all['hargaJual'] }} ,-</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
