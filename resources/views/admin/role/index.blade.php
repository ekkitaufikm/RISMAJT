@extends( $admin )

@section('css-library')
<link rel="stylesheet" type="text/css" href="{{ url('') }}/assets/css/vendors/datatables.css">
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
                        <a href="{{ url('admin/role') }}/create" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table id="datatable" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Nama</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($role as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url("$url/" . $p->id, []) }}/edit" class="btn btn-success" title="Ubah Data">Edit</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-library')
<script src="{{ url('') }}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('') }}/assets/js/datatable/datatables/datatable.custom.js"></script>
@endsection

@section('js-custom')
<script>
    $(function() {
        // DataTable
        $('#datatable').DataTable();
    });
</script>
@endsection