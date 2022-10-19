@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
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
                  <th>
                    No
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Angkatan
                  </th>
                  <th>
                    Id Anggota
                  </th>
                  <th>
                    Badan Ahli
                  </th>
                  <th>
                    E-mail
                  </th>
                  <th>
                    Alamat
                  </th>
                  <th>
                    Wa Aktif
                  </th>
                  <th>
                    Create at
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
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
      <div class="col-md-4">
        <a href="register"><button class="btn btn-primary btn-block" {{-- onclick="md.showNotification('top','right')" --}}>Tambahkan Anggota</button></a>
      </div>
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Data Anggota</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>
                    No
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Angkatan
                  </th>
                  <th>
                    Id Anggota
                  </th>
                  <th>
                    Badan Ahli
                  </th>
                  <th>
                    E-mail
                  </th>
                  <th>
                    Alamat
                  </th>
                  <th>
                    Wa Aktif
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      {{ old('created_at', auth()->user()->created_at) }}
                    </td>
                    <td>
                      2021
                    </td>
                    <td>
                      A11.2021.13833
                    </td>
                    <td class="text-primary">
                      Humas
                    </td>
                    <td>
                      faiq.fhr03@gmai.com
                    </td>
                    <td>
                      Semarang
                    </td>
                    <td>
                      081999967373
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection