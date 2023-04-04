@extends('layout_admin.template')
@section('heading', 'Details Kerjasama')

@section('page')
    <li class="breadcrumb-item active"><a href="{{ route('kerjasama.index') }}">Kerjasama</a></li>
    <li class="breadcrumb-item active">Details Kerjasama</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('kerjasama.index') }}" class="btn btn-default btn-sm"><i
                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
            </div>
            <div class="card-body">
                <div class="row no-gutters ml-2 mb-2 mr-2">
                    <div class="col-md-4">
                        <img src="{{ asset($kerjasama->gambar) }}" class="card-img img-details" alt="...">
                    </div>
                    <div class="col-md-1 mb-4"></div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Nama Kerjasama : </th>
                                    <td>{{ $kerjasama->nama_kerjasama }}</td>
                                </tr>
                                <tr>
                                    <th>Isi :</th>
                                    <td>{{ $kerjasama->isi }}</td>
                                </tr>
                                <tr>
                                    <th>Author :</th>
                                    <td>{{ $kerjasama->user_id }}</td>
                                </tr>
                                <tr>
                                    <th>Publish :</th>
                                    <td>{{ $kerjasama->publish }}</td>
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
        $("#kerjasama").addClass("active");

    </script>
@endsection
