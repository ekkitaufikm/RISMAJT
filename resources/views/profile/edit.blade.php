@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        {{-- sambutan --}}
        <style>
          /* css sambutan */
          .containerlain {
            width: 400px;
            margin: 100px auto 100px;
            background-color: #fff;
            padding: 0 20px 20px;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.075);
            -webkit-box-shadow: 0 2px 5px rgba(0,0,0,0.075);
            -moz-box-shadow: 0 2px 5px rgba(0,0,0,0.075);
            text-align: center;
          }
          .containerlain:hover .avatar-flip {
            transform: rotateY(180deg);
            -webkit-transform: rotateY(180deg);
          }
          .containerlain:hover .avatar-flip img:first-child {
            opacity: 0;
          }
          .containerlain:hover .avatar-flip img:last-child {
            opacity: 1;
          }
          .avatar-flip {
            border-radius: 100px;
            overflow: hidden;
            height: 150px;
            width: 150px;
            position: relative;
            margin: auto;
            top: -60px;
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            box-shadow: 0 0 0 13px #339933;
            -webkit-box-shadow: 0 0 0 13px #339933;
            -moz-box-shadow: 0 0 0 13px #339933;
          }
          .avatar-flip img {
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 100px;
            transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
          }
          .avatar-flip img:first-child {
            z-index: 1;
          }
          .avatar-flip img:last-child {
            z-index: 0;
            transform: rotateY(180deg);
            -webkit-transform: rotateY(180deg);
            opacity: 0;
          }

        </style>
        <div class="section-header text-center">
        </div>
        <div class="containerlain">
            <div class="avatar-flip">
                <img src="landing/img/foto-profil/75319183_2656409434434832_4807420308881741659_n.jpg" height="150" width="150">         
                <img src="landing/img/foto-profil/75319183_2656409434434832_4807420308881741659_n.jpg" height="150" width="150">
            </div>
            <h2> {{ old('name', auth()->user()->name) }}</h2>
            <h4>Anggota <strong>Aktif</strong> {{ old('badan_ahli', auth()->user()->badan_ahli) }}</h4>
          </div>
      {{--  end of sambutan--}}
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Data {{ old('name', auth()->user()->name) }}</h4>
            <p class="card-category"> Data Pribadi Anda</p>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th> No </th> 
                  <th> Nama </th>
                  <th> Angkatan </th>
                  <th> Id Anggota </th>
                  <th> Badan Ahli </th>
                  <th> E-mail </th>
                  <th> Alamat </th>
                  <th> Wa Aktif </th>
                  <th> Create at </th>
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td>
                      {{ old('name', auth()->user()->name) }}
                    </td>
                    <td>
                      {{ old('angkatan', auth()->user()->angkatan) }}
                    </td>
                    <td>
                      {{ old('Id_anggota', auth()->user()->Id_anggota) }}
                    </td>
                    <td class="text-primary">
                      {{ old('badan_ahli', auth()->user()->badan_ahli) }}
                    </td>
                    <td>
                      {{ old('email', auth()->user()->email) }}
                    </td>
                    <td>
                      {{ old('alamat', auth()->user()->alamat) }}
                    </td>
                    <td>
                      {{ old('whatsapp', auth()->user()->whatsapp) }}
                    </td>
                    <td>
                      {{ old('created_at', auth()->user()->created_at) }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                <p class="card-category">{{ __('User information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Angkatan') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('angkatan') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('angkatan') ? ' is-invalid' : '' }}" name="angkatan" id="input-angkatan" type="text" placeholder="{{ __('angkatan') }}" value="{{ old('angkatan', auth()->user()->angkatan) }}" required="true" aria-required="true"/>
                      @if ($errors->has('angkatan'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('badan ahli') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('badan_ahli') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('badan_ahli') ? ' is-invalid' : '' }}" name="badan_ahli" id="input-badan_ahli" type="text" placeholder="{{ __('badan_ahli') }}" value="{{ old('badan_ahli', auth()->user()->badan_ahli) }}" required />
                      @if ($errors->has('badan_ahli'))
                        <span id="angakatan-error" class="error text-danger" for="input-badan_ahli">{{ $errors->first('badan_ahli') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('alamat') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" id="input-alamat" type="text" placeholder="{{ __('alamat') }}" value="{{ old('alamat', auth()->user()->alamat) }}" required />
                      @if ($errors->has('alamat'))
                        <span id="angakatan-error" class="error text-danger" for="input-alamat">{{ $errors->first('alamat') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('whatsapp') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('whatsapp') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('whatsapp') ? ' is-invalid' : '' }}" name="whatsapp" id="input-whatsapp" type="text" placeholder="{{ __('whatsapp') }}" value="{{ old('whatsapp', auth()->user()->whatsapp) }}" required />
                      @if ($errors->has('whatsapp'))
                        <span id="angakatan-error" class="error text-danger" for="input-whatsapp">{{ $errors->first('whatsapp') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Change password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_password'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                      @if ($errors->has('old_password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection