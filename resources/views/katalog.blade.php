@extends('template.index')
@section('content')
    <div class="katalog-page width">
        <div class="katalog-page__filter">
            <div class="katalog-page__filter-box">
                <div class="katalog-page__filter-box-layout">
                    <h4>Kategori :</h4>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Bahan Pokok
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Makanan Ringan
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Bumbu Masakan
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Minuman
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Makanan Instan
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Susu & Produk Olahan
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Menu Sarapan
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Kesehatan
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Perlengkapan Rumah
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Bayi & Anak
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Perawatan Tubuh
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Alat Tulis & Kantor
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Perlengkapan Mandi
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Otomatif
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
                <div class="katalog-page__filter-box-layout">
                    <div class="katalog-page__filter-choose">
                        <label class="katalog-page__filter-choose-category">Kecantikan
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="katalog-page__filter-box katalog-page__filter-box-select">
                <div class="katalog-page__filter-box-layout katalog-page__filter-box-layout-sort">
                    <h4>Urutkan Produk :</h4>
                </div>
                <div class="katalog-page__filter-box-layout katalog-page__filter-box-layout-sort">
                    <div class='sort-catalog-select'>
                        <select name="" id="">
                            <option value="">Harga Terendah</option>
                            <option value="">Harga Tertinggi</option>
                            <option value="">Diskon Tertinggi</option>
                            <option value="">Diskon Terendah</option>
                            <option value="">A - Z</option>
                            <option value="">Z - A</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="katalog-page__product-katalog">
            <div class="layout-product-main katalog-page__product-layout">
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