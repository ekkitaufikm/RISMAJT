@extends('auth/layout')

@section('content')
<div class="col-12 p-0">
    <div class="login-card">
        <div>
            <div>
                <a class="logo" href="#">
                    {{-- <img class="img-fluid for-light" src="{{ url('') }}/assets/images/logo/login.png" alt="looginpage">
                    <img class="img-fluid for-dark" src="{{ url('') }}/assets/images/logo/logo_dark.png" alt="looginpage"> --}}
                </a>
            </div>
            <div class="login-main">
                <form action="{{ url('login-gone', []) }}" method="post" class="theme-form">
                    @csrf
                    <h4>Halaman Login</h4>
                    <p>Dibutuhkan Username dan Password untuk akses ke dalam Sistem.</p>
                    <div class="form-group">
                        <label class="col-form-label">Username</label>
                        <input type="text" id="i-username" class="form-control" name="username" placeholder="Masukkan Username" required="" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <div class="form-input position-relative">
                            <input type="password" id="i-password" class="form-control" name="password" required="" placeholder="*********">
                            <div class="show-hide"><span class="show"> </span></div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        {{-- <div class="checkbox p-0">
                            <input id="checkbox1" type="checkbox">
                            <label class="text-muted" for="checkbox1">Remember password</label>
                        </div><a class="link" href="forget-password.html">Forgot password?</a> --}}
                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection