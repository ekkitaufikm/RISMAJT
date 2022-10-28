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
                        <a href="{{ url('admin/departemen') }}" class="btn btn-sm btn-primary float-end">Kembali</a>
                    </div>
                </div>
            </div>
            <form action="{{ url("$url/update")}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <input type="hidden" id="i-nama" class="form-control" name="id" value="{{ $departemen->id }}">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="i-nama" class="form-control" name="nama" placeholder="Nama Departemen" value="{{ $departemen->nama }}">
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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