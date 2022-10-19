@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Member Only')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Register') }}</strong></h4>
            <div class="social-line">
              {{-- <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a> --}}
            </div>
          </div>


          {{-- halaman ini di komen dulu , nnt kalo ada daftaran dibuka --}}

          
          {{-- <div class="card-body ">
            <p class="card-description text-center">{{ __('Or Be Classical') }}</p>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif

              
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="Id_anggota" class="form-control" placeholder="{{ __('Id anggota...') }}" value="{{ old('Id_anggota') }}" required>
              </div>
              @if ($errors->has('Id_anggota'))
                <div id="Id_anggota-error" class="error text-danger pl-3" for="Id_anggota" style="display: block;">
                  <strong>{{ $errors->first('Id_anggota') }}</strong>
                </div>
              @endif

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="alamat" class="form-control" placeholder="{{ __('alamat...') }}" value="{{ old('alamat') }}" required>
              </div>
              @if ($errors->has('alamat'))
                <div id="alamat-error" class="error text-danger pl-3" for="alamat" style="display: block;">
                  <strong>{{ $errors->first('alamat') }}</strong>
                </div>
              @endif

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="wa" class="form-control" placeholder="{{ __('whatsapp...') }}" value="{{ old('whatsapp') }}" required>
              </div>
              @if ($errors->has('whatsapp'))
                <div id="whatsapp-error" class="error text-danger pl-3" for="whatsapp" style="display: block;">
                  <strong>{{ $errors->first('whatsapp') }}</strong>
                </div>
              @endif

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="angkatan" class="form-control" placeholder="{{ __('angkatan...') }}" value="{{ old('angkatan') }}" required>
              </div>
              @if ($errors->has('angkatan'))
                <div id="angkatan-error" class="error text-danger pl-3" for="angkatan" style="display: block;">
                  <strong>{{ $errors->first('angkatan') }}</strong>
                </div>
              @endif

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="badan_ahli" class="form-control" placeholder="{{ __('badan_ahli...') }}" value="{{ old('badan_ahli') }}" required>
              </div>
              @if ($errors->has('badan_ahli'))
                <div id="badan_ahli-error" class="error text-danger pl-3" for="badan_ahli" style="display: block;">
                  <strong>{{ $errors->first('badan_ahli') }}</strong>
                </div>
              @endif


            </div>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
              </label>
            </div>
          </div> --}}
          <div class="card-footer justify-content-center">
            {{-- <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Create account') }}</button> --}}
            <a href="/">OPREC belum dibuka</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
