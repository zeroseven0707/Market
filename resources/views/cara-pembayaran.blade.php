@extends('template.index')
@section('content')

<div class="cara-pembayaran">
    <div class="heading-section-page">
        <h1>Cara Pembayaran Minimarket.id!</h1>
    </div>
    <div class="cara-pembayaran__layout width">
        <div class="gabung-mitra-box-layout">
            <div class="gabung-mitra-box">
                <img src="images/transfer-bank.png" alt="">
                <h3>Transfer Bank</h3>
                <p>Kamu dapat melakukan pembayaran dengan transfer bank melalui rekening kamu. Setelah memilih produk yang ingin dibeli, kamu akan menerima informasi rekening tujuan pembayaran.</p>
            </div>
            <div class="gabung-mitra-box">
                <img src="images/e-wallet.png" alt="">
                <h3>Dompet Digital</h3>
                <p>Minimarket.id mendukung berbagai dompet digital yang populer, seperti GoPay, OVO, Dana, dan lain-lain. Kamu dapat memilih dompet digital untuk melakukan pembayaran dengan cepat dan aman.</p>
            </div>
            <div class="gabung-mitra-box">
                <img src="images/cod.png" alt="">
                <h3>Cash On Delivery</h3>
                <p>Kamu dapat membayar langsung ketika pesanan tiba di alamat yang telah ditentukan. Pembayaran dilakukan secara tunai kepada kurir pengiriman.</p>
            </div>
            <div class="gabung-mitra-box">
                <img src="images/virtual account.png" alt="">
                <h3>Virtual Account</h3>
                <p>Kami juga menyediakan virtual account sebagai opsi pembayaran. Kamu akan menerima nomor virtual account yang dapat digunakan untuk melakukan transfer pembayaran dari bank pilihan kamu</p>
            </div>
            <div class="gabung-mitra-box">
                <img src="images/debit.png" alt="">
                <h3>Kartu Kredit/Debit</h3>
                <p>Kamu dapat dengan cepat memasukkan detail kartu pada saat checkout untuk menyelesaikan pembayaran dengan mudah.</p>
            </div>
        </div>
    </div>
    
</div>

@endsection