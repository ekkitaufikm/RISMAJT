@extends( $admin )

@section('css-library')
@endsection

@section('css-custom')
    
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="card-title">{{ $page }}</h5>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ url('admin/pengurus_aktif') }}" class="btn btn-sm btn-primary float-end">Kembali</a>
                    </div>
                </div>
            </div>
            <form action="{{ url('admin/pengurus_aktif') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="text" id="i-nama" class="form-control" name="nama" placeholder="Nama" autofocus>
                    </div> 
                    <div class="form-group mb-3">
                        <label>Username</label>
                        <input type="text" id="i-nama" class="form-control" name="username" placeholder="Username" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="text" id="i-nama" class="form-control" name="password" placeholder="Password" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <label>No HP</label>
                        <input type="text" id="i-nama" class="form-control" name="no_hp" placeholder="No HP" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <label>Alamat</label>
                        <input type="text" id="i-nama" class="form-control" name="alamat" placeholder="Alamat" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <label>Angkatan</label>
                        <input type="text" id="i-nama" class="form-control" name="angkatan" placeholder="Angkatan" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <label>Jabatan</label>
                        <select class="form-select" name="idJabatan">
                            <option value="">Pilih Jabatan</option>
                            @foreach ($jabatan as $r) 
                                <option value="{{ $r->id }}">{{ $r->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Departemen</label>
                        <select class="form-select" name="idDepartemen">
                            <option value="">Pilih Departemen</option>
                            @foreach ($departemen as $r) 
                                <option value="{{ $r->id }}">{{ $r->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Role</label>
                        <select class="form-select" name="role">
                            <option value="">Pilih Role</option>
                            @foreach ($role as $r) 
                                <option value="{{ $r->id }}">{{ $r->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Foto</label>
                        <input class="form-control" type="file" name="photo" required>
                        <span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js-library')
@endsection

@section('js-custom')
<script>
    $(function() {
        
    });
</script>
@endsection