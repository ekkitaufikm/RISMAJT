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
                        <a href="{{ url('admin/pengurus_aktif') }}/create" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table id="datatable" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Jabatan</th>
                            <th>Departemen</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->no_hp ?? 'Data Belum Diisi' }}</td>
                                <td>{{ $p->jabatan->nama ?? 'Jabatan Belum di set' }}</td>
                                <td>{{ $p->departemen->nama ?? 'Departemen Belum di set' }}</td>
                                <td>
                                    @if ($p->status == 1)
                                        <span class="badge badge-light-info me-auto">Super Admin</span>    
                                    @elseif ($p->status == 2)
                                    <span class="badge badge-light-primary me-auto">Humas</span>
                                    @elseif ($p->status == 3)
                                    <span class="badge badge-light-warning me-auto">Pers</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($p->status == 1)
                                        <span class="badge badge-light-success me-auto">Aktif</span>    
                                    @elseif ($p->status == 2)
                                    <span class="badge badge-light-danger me-auto">Tidak Aktif</span>
                                    @elseif ($p->status == 3)
                                    <span class="badge badge-light-info me-auto">Alumni</span>
                                    @endif
                                </td>
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