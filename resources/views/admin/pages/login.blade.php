@extends('admin.app')

@section('container')
<div class="login-container uk-height-viewport">
    <div class="uk-width-1-3@l uk-width-2-3@m uk-width-1-1@s uk-container uk-margin-auto">
        <div class="uk-card uk-card-default login-card">
            <div class="uk-card-body login-body">
                <div class="login-intro">
                    <div class="uk-text-center login-title">Selamat Datang</div>
                    <div class="uk-text-center login-subtitle">Silahkan masuk menggunakan akun Anda</div>
                </div>

                <form class="uk-form-stacked login-form">
                    <div class="uk-margin">
                        <label for="i_email" class="uk-form-label form-label-login">Email</label>
                        <div class="uk-form-controls">
                            <input id="i_email" class="uk-input form-input-login" type="email" placeholder="Masukkan email" required>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="i_password" class="uk-form-label form-label-login">Password</label>
                        <div class="uk-form-controls">
                            <input id="i_password" class="uk-input form-input-login" type="password" placeholder="Masukkan password" required>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <button class="uk-button uk-button-primary uk-width-1-1 button-login" type="submit">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection