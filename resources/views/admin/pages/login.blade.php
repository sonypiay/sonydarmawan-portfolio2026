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

                <form class="uk-form-stacked login-form" method="POST" action="{{ route('admin.auth.authenticate') }}">
                    @csrf

                    @session('login_error')
                        <div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>{{ $value }}</p>
                        </div>
                    @endsession

                    <div class="uk-margin">
                        <label for="i_email" class="uk-form-label form-label-login">Email</label>
                        <div class="uk-form-controls">
                            <input 
                                id="i_email" 
                                name="email" 
                                class="uk-input form-input-login @error('email') form-login-invalid @enderror" 
                                type="text" 
                                placeholder="Masukkan email"
                                value="{{ old('email') }}">
                        </div>

                        @error('email')
                            <div class="uk-text-small uk-text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="uk-margin">
                        <label for="i_password" class="uk-form-label form-label-login">Password</label>
                        <div class="uk-form-controls">
                            <input id="i_password" name="password" class="uk-input form-input-login @error('password') form-login-invalid @enderror" type="password" placeholder="Masukkan password">
                        </div>

                        @error('password')
                            <div class="uk-text-small uk-text-danger">{{ $message }}</div>
                        @enderror
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