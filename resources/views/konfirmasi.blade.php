@extends('template.index')
@section('content')
<div class="checkout-proses">
    <div class="heading-section-1">
        <h1>Periksa dan <span>Pastikan Semuanya</span> Tepat</h1>
    </div>
    <div class="informasi-layout informasi-layout__shipping">
        <div class="login-box-layout">
                <div class="form-box form-box__shipping form-box-konfir">
                    <div class="konfirmasi-edit">
                        <label for="nomor-telepon">Nomor Telepon</label>
                        <button><iconify-icon icon="clarity:note-edit-line"></iconify-icon></button>
                    </div>
                    <input type="text" value="{{ $get_pelanggan['data']['noHp'] }}">
                </div>
                <div class="form-box">
                    <div class="konfirmasi-edit">
                        <label for="alamat">Pengiriman ke alamat</label>
                        <button><iconify-icon icon="clarity:note-edit-line"></iconify-icon></button>
                    </div>
                    <textarea>{{ $costumer['data']['alamat'] }}</textarea>
                </div>
                <div class="form-box form-box__shipping form-box-konfir">
                    <div class="konfirmasi-edit">
                        <label for="metode-pengiriman">Metode Pengiriman</label>
                        <button><iconify-icon icon="clarity:note-edit-line"></iconify-icon></button>
                    </div>
                    <input type="text" value="{{ $costumer['data']['shiping'] }}">
                    {{-- <input type="text" value="JNE - REG (Layanan Reguler) - Rp8,000.00"> --}}
                </div>
                <div class="informasi-layout-button__form informasi-layout-button__form-shipping">
                    <button id="pay-button">Melanjutkan Pembayaran</button>
                    <a href="/informasi"><button class="back__btn">Kembali ke Informasi Pengiriman</button></a>

                </div>

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
                <div class="sidebar-informasi__total-box">
                    <span>Shipping</span>
                    <span>Rp. {{ $cost }},-</span>
                </div>
            </div>
            <div class="sidebar-informasi__total sidebar-informasi__total-main">
                <div class="sidebar-informasi__total-box">
                    <span>Total</span>
                    <span>Rp. {{ $sub+$cost }},-</span>
                </div>
            </div>
        </div>
    </div>
</div>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>

  <body>

    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snap_token }}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            alert("payment success!"); console.log(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })
      });
    </script>
  </body>
</html>
@endsection
