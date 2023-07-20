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
                        <label class="katalog-page__filter-choose-category">Semua Produk
                          <input type="checkbox">
                          <span class="checkmark-category"></span>
                        </label>
                    </div>
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
            <script>
                const checkboxes = document.querySelectorAll('.katalog-page__filter-choose-category input[type="checkbox"]');
              
                checkboxes.forEach(checkbox => {
                  checkbox.addEventListener('click', function () {
                    checkboxes.forEach(otherCheckbox => {
                      if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                      }
                    });
                  });
                });
            </script>
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
                        <h4>Coca Cola</h4>
                        <span>Rp. 15600 ,-</span>
                    </div>
                </div>
                <div class="box-category box-category__product">
                    <div class="button-product__select">
                        <div class="button-product__select-icon">
                            <a href="/wishlist"><iconify-icon icon="mdi:heart"></iconify-icon></a>
                            <a href="/cart"><iconify-icon icon="vaadin:cart"></iconify-icon></a>
                        </div>
                    </div>
                    <div class="diskon">
                        <span>-25%</span>
                    </div>
                    <div class="image-box-category image-box-category__product">
                        <img src="images/mizone.png" alt="">
                    </div>
                    <div class="content-box-category content-box-category__product">
                        <h4>Mizone Isotonic</h4>
                        <span>Rp. 3000 ,-</span>
                        <p>Rp. 5600 ,-</p>
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
                        <h4>You c1000</h4>
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
                        <h4>Sari Gandum</h4>
                        <span>Rp. 8000 ,-</span>
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
                        <h4>Chitato</h4>
                        <span>Rp. 4000 ,-</span>
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
                        <h4>Adem Sari Chingku</h4>
                        <span>Rp. 6000 ,-</span>
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
                        <h4>Sensi Mask</h4>
                        <span>Rp. 10000 ,-</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection