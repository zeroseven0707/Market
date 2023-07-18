@extends('template.index')
@section('content')

<div class="checkout-proses">
    <div class="heading-section-1">
        <h1>Periksa dan <span>Pastikan Semuanya</span> Tepat</h1>
    </div>
    <div class="informasi-layout informasi-layout__shipping">
        <div class="login-box-layout">
            <form action="">
                <div class="form-box form-box__shipping form-box-konfir">
                    <div class="konfirmasi-edit">
                        <label for="nomor-telepon">Nomor Telepon</label>
                        <button><iconify-icon icon="clarity:note-edit-line"></iconify-icon></button>
                    </div>
                    <input type="text" value="0895610411991">
                </div>
                <div class="form-box">
                    <div class="konfirmasi-edit">
                        <label for="alamat">Pengiriman ke alamat</label>
                        <button><iconify-icon icon="clarity:note-edit-line"></iconify-icon></button>
                    </div>
                    <textarea>Jl. Bojongnangka RT.02 RW.03 Kel.Sukamenak Kec.Purbaratu Kota Tasikmalaya Jawa Barat 19676, Indonesia</textarea>
                </div>
                <div class="form-box form-box__shipping form-box-konfir">
                    <div class="konfirmasi-edit">
                        <label for="metode-pengiriman">Metode Pengiriman</label>
                        <button><iconify-icon icon="clarity:note-edit-line"></iconify-icon></button>
                    </div>
                    <input type="text" value="JNE - REG (Layanan Reguler) - Rp8,000.00">
                </div>
                <div class="informasi-layout-button__form informasi-layout-button__form-shipping">
                    <a href="/shipping"><button>Melanjutkan Pembayaran</button></a>
                    <a href="/cart"><button class="back__btn">Kembali ke Informasi Pengiriman</button></a>
                    
                </div>
            </form>
            
        </div>
        <div class="sidebar-informasi-layout">
            <div class="sidebar-informasi-overflow" id="overflow">
                <div class="sidebar-informasi-box">
                    <div class="sidebar-informasi__image">
                        <img src="images/masker.png" alt="">
                    </div>
                    <div class="sidebar-informasi__desc">
                        <h4>Nexcare daily mask 4pcs</h4>
                        <span>1</span>
                    </div>
                    <div class="sidebar-informasi__price">
                        <span>Rp. 13000,-</span>
                    </div>
                </div>
                <div class="sidebar-informasi-box">
                    <div class="sidebar-informasi__image">
                        <img src="images/masker.png" alt="">
                    </div>
                    <div class="sidebar-informasi__desc">
                        <h4>Nexcare daily mask 4pcs</h4>
                        <span>1</span>
                    </div>
                    <div class="sidebar-informasi__price">
                        <span>Rp. 13000,-</span>
                    </div>
                </div>
                <div class="sidebar-informasi-box">
                    <div class="sidebar-informasi__image">
                        <img src="images/masker.png" alt="">
                    </div>
                    <div class="sidebar-informasi__desc">
                        <h4>Nexcare daily mask 4pcs</h4>
                        <span>1</span>
                    </div>
                    <div class="sidebar-informasi__price">
                        <span>Rp. 13000,-</span>
                    </div>
                </div>
                <div class="sidebar-informasi-box">
                    <div class="sidebar-informasi__image">
                        <img src="images/masker.png" alt="">
                    </div>
                    <div class="sidebar-informasi__desc">
                        <h4>Nexcare daily mask 4pcs dan saat ini kita harus menang</h4>
                        <span>1</span>
                    </div>
                    <div class="sidebar-informasi__price">
                        <span>Rp. 13000,-</span>
                    </div>
                </div>
            </div>
            
            <div class="sidebar-informasi__total">
                <div class="sidebar-informasi__total-box">
                    <span>Subtotal</span>
                    <span>Rp. 28000,-</span>
                </div>
                <div class="sidebar-informasi__total-box">
                    <span>Diskon</span>
                    <span>Rp. -0,-</span>
                </div>
            </div>
            <div class="sidebar-informasi__total sidebar-informasi__total-main">
                <div class="sidebar-informasi__total-box">
                    <span>Total</span>
                    <span>Rp. 28000,-</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection