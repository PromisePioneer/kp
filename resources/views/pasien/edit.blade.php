@extends('template.template')
@section('judul', 'Edit Data Pasien')
@section('halaman', 'Home')
@section('content')

    <div class="col-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Pasien</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($data as $row)
                <form action="{{ route('updatepasien', [$row->id]) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pasien</label>
                            <input type="name" name="npasien" class="form-control"value="{{ $row->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="name" name="nalamat" class="form-control" value="{{ $row->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kontak</label>
                            <input type="name" name="ntelepon" class="form-control" value="{{ $row->telepon }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="ntglhir" class="form-control" value="{{ $row->tgl_lahir }}">
                        </div>
                        <div class="form-group date">
                            <label for="exampleInputEmail1">Pendidikan</label>
                            <input type="name" name="npendidikan" class="form-control" value="{{ $row->pendidikan }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan</label>
                            <input type="name" name="npekerjaan" class="form-control" value="{{ $row->pekerjaan }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor BPJS</label>
                            <input type="name" name="nbpjs" class="form-control" value="{{ $row->nobpjs }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alergi</label>
                            <input type="name" name="nalergi" class="form-control" value="{{ $row->alergi }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <input type="name" name="njklmin" class="form-control" value="{{ $row->jkelamin }}">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            @endforeach
        </div>

    </div>

@endsection
