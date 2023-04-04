@extends('layout_admin.template')
@section('heading', 'Details Prestasi')

@section('page')
    <li class="breadcrumb-item active"><a href="{{ route('prestasi.index') }}">Prestasi</a></li>
    <li class="breadcrumb-item active">Details Prestasi</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('prestasi.index') }}" class="btn btn-default btn-sm"><i
                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
            </div>
            <div class="card-body">
                <div class="row no-gutters ml-2 mb-2 mr-2">
                    <div class="col-md-4">
                        <img src="{{ asset($prestasi->gambar) }}" class="card-img img-details" alt="...">
                    </div>
                    <div class="col-md-1 mb-4"></div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Nama Prestasi : </th>
                                    <td>{{ $prestasi->nama_prestasi }}</td>
                                </tr>
                                <tr>
                                    <th>Isi :</th>
                                    <td>{{ $prestasi->isi }}</td>
                                </tr>
                                <tr>
                                    <th>Author :</th>
                                    <td>{{ $prestasi->user_id }}</td>
                                </tr>
                                <tr>
                                    <th>Publish :</th>
                                    <td>{{ $prestasi->publish }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#prestasi").addClass("active");

    </script>
@endsection
