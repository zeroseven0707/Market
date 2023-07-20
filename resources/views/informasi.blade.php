@extends('template.index')
@section('content')
<div class="informasi-page width">
    <div class="heading-section-1">
        <h1>Isi <span>Informasi</span> kamu</h1>
    </div>
    <div class="informasi-layout">
        <div class="login-box-layout">
            <form action="/shipping" method="post">
                <div class="signup-layout">
                    <div class="form-box">
                        <label for="nama-lengkap">Nama Lengkap</label>
                        <input name="nama" type="text" placeholder="Nama Lengkap Kamu">
                    </div>
                    <div class="form-box">
                        <label for="no-telp">Nomor Telepon</label>
                        <input name="no_telpon" type="text" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-box">
                        <label for="kelurahan">Kelurahan</label>
                        <input name="kelurahan" type="text" placeholder="Kelurahan Kamu">
                    </div>
                    <div class="form-box">
                        <label for="Kecamatan">Kecamatan</label>
                        <input name="kecamatan" type="text" placeholder="Kecamatan Kamu">
                    </div>
                    <div class="form-box">
                        <label for="kota">Kota</label>
                        <select name="kota" id="kota">
                            @foreach ($city as $item)
                                <option value="{{ $item['city_id'] }}">{{ $item['city_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-box">
                        <label for="provinsi">Provinsi</label>
                        <select name="provinsi" id="">
                            @foreach ($prov as $prov)
                                <option value="{{ $prov['province'] }}">{{ $prov['province'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-box">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea name="alamat_lengkap" placeholder="Isi Alamat Lengkap Kamu"></textarea>
                </div>
                <div>
                    <label class="remind">
                        <input name="nama" type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        Save this information for next time
                    </label>
                </div>
                <div class="informasi-layout-button__form">
                    <a href="/cart"><button class="back__btn">Kembali ke Keranjang</button></a>
                        @csrf
                        <button type="submit">Melanjutkan Pembayaran</button>
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
                        <img src="https://api.upos-conn.com/master/v1/{{ $item['gambar'] }}" alt="">
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
