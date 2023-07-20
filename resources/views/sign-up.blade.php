@extends('template.index')
@section('content')
<div class="login">
    <div class="login-box">
        <div class="heading-login">
            <h2>Daftar</h2>
        </div>
        <div class="login-box-layout">
            <form action="">
                <div class="signup-layout">
                    <div class="form-box">
                        <label for="nama-lengkap">Nama Lengkap</label>
                        <input type="text" placeholder="Nama Lengkap Kamu">
                    </div>
                    <div class="form-box">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email Kamu">
                    </div>
                    <div class="form-box">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password Kamu">
                    </div>
                    <div class="form-box">
                        <label for="konfirmasi-password">Konfirmasi Password</label>
                        <input type="password" placeholder="Konfirmasi Password Kamu">
                    </div>
                    <div class="form-box">
                        <label for="jenis-kelamin">Jenis Kelamin</label>
                        <input type="text" placeholder="Pria/Wanita">
                    </div>
                    <div class="form-box">
                        <label for="nomor-telepon">Nomor Telepon</label>
                        <input type="text" placeholder="Nomor Telepon Kamu">
                    </div>
                </div>
                <div class="form-box">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea placeholder="Isi Alamat Lengkap Kamu"></textarea>
                </div>
                <button>Daftar Sekarang</button>
            </form>
        </div>
    </div>
</div>
@endsection
