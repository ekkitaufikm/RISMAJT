@extends('layouts.app', ['activePage' => 'pengumuman', 'titlePage' => __('Pengumuman')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Data Pengumuman </h4>
              {{-- <p class="card-category"> Data Pengumuman</p> --}}
            </div>           
            <div class="card-body">
                <div id="judul" class="mb-3">
                    <label class="col-form-label pt-0" for="exampleInputEmail1">Judul Pengumuman</label>
                    <input name="judul" class="form-control @error('jmlMagotayakan') is-invalid @enderror" type="text" placeholder="Judul Pengumuman" >
                </div>
                <div id="author" class="mb-3">
                    <label class="col-form-label pt-0" for="exampleInputEmail1">Author</label>
                    <input name="author" class="form-control @error('jmlMagotayakan') is-invalid @enderror" type="text" placeholder="Author" >
                </div>
                <div id="tanggal" class="mb-3">
                    <label class="col-form-label pt-0" for="exampleInputEmail1">Tanggal</label>
                    <input name="tanggal" class="form-control @error('jmlMagotayakan') is-invalid @enderror" type="text" placeholder="Tanggal" >
                </div>
                <div id="content" class="mb-3">
                    <label class="col-form-label pt-0" for="exampleInputEmail1">Content</label>
                    <input name="content" class="form-control @error('jmlMagotayakan') is-invalid @enderror" type="text" placeholder="Content" >
                </div>
                <div id="gambar" class="mb-3">
                    <label class="col-form-label pt-0" for="exampleInputEmail1">Gambar</label>
                    <div class="col-md-2">
                        <a href="{{ url('pengumuman') }}" class="btn btn-primary btn-block"> Input File </a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{ url('pengumuman') }}" class="btn btn-primary btn-block"> Kembali </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection