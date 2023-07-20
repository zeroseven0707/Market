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
                        @foreach ($ongkos as $item)
                        @foreach ($item['costs'] as $detail)
                        <label class="shipping-radio">
                            <input type="radio" name="radio" checked/>
                            <span>
                                <div class="heading-shipping-method">
                                    <h3>JNE - {{ $detail['service'] }} ({{ $detail['description'] }})</h3>
                                    @foreach ($detail['cost'] as $harga)
                                    <p>{{ $harga['etd'] }} Days</p>
                                </div>
                                <div class="price-shipping">
                                    <h5>Rp. {{ $harga['value'] }}. ,-</h5>
                                </div>
                                @endforeach
                            </span>
                        </label>
                        @endforeach
                        @endforeach
                    </div>
                </div>

                <div class="form-box">
                    <label for="alamat">Pengiriman ke alamat</label>
                    <textarea placeholder="Pengiriman Alamat Kamu">{{ session()->get('costumer')['alamat_lengkap']}}</textarea>
                </div>
                <div class="informasi-layout-button__form informasi-layout-button__form-shipping">
                    <a href="/shipping"><button>Melanjutkan Pembayaran</button></a>
                    <a href="/cart"><button class="back__btn">Kembali ke Informasi</button></a>
                </div>
            </form>

        </div>
        <div class="sidebar-informasi-layout">
            <div class="sidebar-informasi-overflow" id="overflow">
                <?php
                    $sub = 0;
                    ?>
            @foreach (session()->get('cart') as $key => $item)
                <div class="sidebar-informasi-box">
                    <div class="sidebar-informasi__image">
                        <img src="images/masker.png" alt="">
                    </div>
                    <div class="sidebar-informasi__desc">
                        <h4>{{ $item['nama'] }}</h4>
                        <span>{{ $item['qty'] }}</span>
                    </div>
                    <div class="sidebar-informasi__price">
                        <span>Rp. {{ $item['harga'] }},-</span>
                    </div>
                </div>
                <?php
                    $sub+=$item['total'];
                ?>
            @endforeach
            </div>

            <div class="sidebar-informasi__total">
                <div class="sidebar-informasi__total-box">
                    <span>Subtotal</span>
                    <span>Rp. {{ $sub }},-</span>
                </div>
                <div class="sidebar-informasi__total-box">
                    <span>Diskon</span>
                    <span>Rp. -0,-</span>
                </div>
            </div>
            <div class="sidebar-informasi__total sidebar-informasi__total-main">
                <div class="sidebar-informasi__total-box">
                    <span>Total</span>
                    <span>Rp. {{ $sub }},-</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
