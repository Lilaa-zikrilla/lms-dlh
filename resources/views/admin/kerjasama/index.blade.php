@extends('layout_admin.template')
@section('heading', 'Kerjasama')

@section('page')
    <li class="breadcrumb-item active">Kerjasama Mitra</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('kerjasama.create') }}" class="btn btn-primary btn-sm">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Kerjasama Mitra
                                </a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th width="60%">nama_kerjasama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kerjasama as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <img src="{{ Storage::url($data->gambar) }}" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $data->nama_kerjasama }}</td>
                                            </td>
                                            <td>
                                                <form action="{{ route('kerjasama.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="mr-2 nav-icon fas fa-trash-alt"></i>Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
    <script type="text/javascript">
        $("#kerjasama").addClass("active");

    </script>

@endsection
