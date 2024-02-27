@extends('template.template')
@section('judul', 'Data Obat')
@section('halaman', 'Home')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><a class="btn btn-primary" href="#" data-toggle="modal"
                        data-target="#modal-default"><i class="fas fa-plus"></i> Tambah Data</a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Sediaan</th>
                            <th>Dosis</th>
                            <th>satuan</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->sediaan }}</td>
                                <td>{{ $row->dosis }}</td>
                                <td>{{ $row->satuan }}</td>
                                <td>{{ $row->stok }}</td>
                                <td>{{ $row->harga }}</td>
                                <td><a class="btn btn-info btn-sm" href="{{ route('editobat', [$row->id]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('deleteobat', [$row->id]) }}">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Sediaan</th>
                            <th>Dosis</th>
                            <th>satuan</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card-body -->
    </div>
    </div>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form Tambah Obat</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/tobat') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Obat</label>
                            <input type="name" name="nobat" class="form-control" placeholder="Masukkan Nama Dokter">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sediaan</label>
                            <input type="name" name="nsediaan" class="form-control" placeholder="Masukkan Sediaan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dosis</label>
                            <input type="number" name="ndosis" class="form-control" placeholder="Masukkan Dosis">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Satuan</label>
                            <input type="name" name="nsatuan" class="form-control" placeholder="Masukkan Satuan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stok</label>
                            <input type="number" name="nstok" class="form-control" placeholder="Masukkan Satuan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="number" name="nharga" class="form-control" placeholder="Masukkan Harga">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
