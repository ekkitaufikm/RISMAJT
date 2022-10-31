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
                        <a href="{{ url('admin/role') }}" class="btn btn-sm btn-primary float-end">Kembali</a>
                    </div>
                </div>
            </div>
            <form action="{{ url('admin/role') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="i-nama" class="form-control" name="nama" placeholder="Nama Role" autofocus>
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