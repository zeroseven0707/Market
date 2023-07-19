@extends('template.index')
@section('content')

<div class="checkout-proses">
    <div class="heading-section-1">
        <h1>Isi <span>Rincian Pengiriman</span> kamu</h1>
    </div>
    <div class="informasi-layout informasi-layout__shipping">
        <div class="login-box-layout">
            <form action="">
                <div class="form-box">
                    <label for="alamat">Pengiriman ke alamat</label>
                    <div class="form-box__shipping">
                        <label class="shipping-radio">
                            <input type="radio" name="radio" checked/>
                            <span>
                                <div class="heading-shipping-method">
                                    <h3>JNE - REG (Layanan Reguler)</h3>
                                    <p>1-2 Days</p>
                                </div>
                                <div class="price-shipping">
                                    <h5>Rp. 9000 ,-</h5>
                                </div>
                            </span>
                        </label>
                        <label class="shipping-radio form-box__shipping">
                            <input type="radio" name="radio"/>
                            <span>
                                <div class="heading-shipping-method">
                                    <h3>JNE - REG (Layanan Reguler)</h3>
                                    <p>1-2 Days</p>
                                </div>
                                <div class="price-shipping">
                                    <h5>Rp. 9000 ,-</h5>
                                </div>
                            </span>
                        </label>
                    </div>
                </div>
                
                <div class="form-box">
                    <label for="alamat">Pengiriman ke alamat</label>
                    <textarea placeholder="Pengiriman Alamat Kamu"></textarea>
                </div>
                <div class="informasi-layout-button__form informasi-layout-button__form-shipping">
                    <a href="/shipping"><button>Melanjutkan Pembayaran</button></a>
                    <a href="/cart"><button class="back__btn">Kembali ke Informasi</button></a>
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