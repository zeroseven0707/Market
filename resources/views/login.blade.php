@extends('template.index')
@section('content')
<div class="login">
    <div class="login-box">
        <div class="heading-login">
            <h2>Masuk</h2>
        </div>
        <div class="login-box-layout">
            <form action="">
                <div class="form-box">
                    <label for="Email">Email</label>
                    <input type="email" placeholder="Email Kamu">
                </div>
                <div class="form-box">
                    <label for="Password">Password</label>
                    <input type="password" placeholder="Password Kamu">
                </div>
                <button>Masuk</button>
            </form>
        </div>
        <div class="button-login-bottom">
            <span class="lupa-sandi">Lupa kata sandi? <a href="">Reset kata sandi</a></span>
            <span class="lupa-sandi">Tidak punya akun? <a href="/signup">Buat Akun</a></span>
        </div>
    </div>
</div>
@endsection
