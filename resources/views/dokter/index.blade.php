@extends('template.template')
@section('judul', 'Data Dokter')
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
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->spesialis }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->telepon }}</td>
                                <td><a class="btn btn-info btn-sm" href="{{ route('editdokter', [$row->id]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('deletedokter', [$row->id]) }}">
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
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
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
                    <h4 class="modal-title">Form Tambah Dokter</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/tdokter') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Dokter</label>
                            <input type="name" name="ndokter" class="form-control" placeholder="Masukkan Nama Dokter">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Spesialis</label>
                            <input type="name" name="nspesialis" class="form-control" placeholder="Masukkan Spesialis">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="name" name="nalamat" class="form-control" placeholder="Masukkan Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kontak</label>
                            <input type="name" name="nkontak" class="form-control" placeholder="Masukkan Kontak">
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
