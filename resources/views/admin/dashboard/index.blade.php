@extends( $admin )

@section('css-library')
@endsection

@section('css-custom')
    
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <p>
                    Selamat datang <b>{{ session()->get('nama') }}</b>, Anda login sebagai Super Admin!
                </p>
            </div>
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