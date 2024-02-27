@extends('template.template')
@section('judul', 'Data Pasien')
@section('halaman', 'Home')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modal-lg"><i
                        class="fas fa-plus"></i> Tambah Data</a>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Tanggal Lahir</th>
                        <th>Nomor BPJS</th>
                        <th>Alergi</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->telepon }}</td>
                        <td>{{ $row->tgl_lahir }}</td>
                        <td>{{ $row->nobpjs }}</td>
                        <td>{{ $row->alergi }}</td>
                        <td>{{ $row->jkelamin }}</td>
                        <td>
                            {{-- <a class="btn btn-info btn-sm" href="{{ route('showpasien', [$row->id]) }}">
                                <i class="fas fa-eye-alt">
                                </i>
                                Lihat
                            </a> --}}
                            <a class="btn btn-info btn-sm" href="{{ route('editpasien', [$row->id]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ route('deletepasien', [$row->id]) }}">
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
                        <th>Nama Pasien</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Tanggal Lahir</th>
                        <th>Nomor BPJS</th>
                        <th>Alergi</th>
                        <th>Jenis Kelamin</th>
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
<div class="modal fade" id="modal-lg" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Pasien</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/tpasien') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pasien</label>
                                <input type="name" name="npasien" class="form-control"
                                    placeholder="Masukkan Nama Pasien">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="name" name="nalamat" class="form-control" placeholder="Masukkan Alamat">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kontak</label>
                                <input type="name" name="ntelepon" class="form-control" placeholder="Masukkan Kontak">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="ntglhir" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group date">
                                <label for="exampleInputEmail1">Pendidikan</label>
                                <input type="name" name="npendidikan" class="form-control"
                                    placeholder="Masukkan Pendidikan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pekerjaan</label>
                                <input type="name" name="npekerjaan" class="form-control"
                                    placeholder="Masukkan Pekerjaan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alergi</label>
                                <input type="name" name="nalergi" class="form-control" placeholder="Masukkan Alergi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <input type="name" name="njklmin" class="form-control"
                                    placeholder="Masukkan Jenis Kelamin">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor BPJS</label>
                                <input type="name" name="nbpjs" class="form-control" placeholder="Masukkan Nomor BPJS">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="poli">Poli</label>
                            <select name="poli" id="poli" class="form-control">
                                @foreach ($poli as $item)
                                <option value="{{ $item->id }}">{{ $item->poli }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan Pasien</label>
                        <textarea name="keluhan" id="keluhan" cols="30" rows="10" class="form-control"
                            placeholder="Apa keluhan anda?"></textarea>
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
