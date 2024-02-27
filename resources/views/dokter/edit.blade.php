@extends('template.template')
@section('judul', 'Edit Data Dokter')
@section('halaman', 'Home')
@section('content')

    <div class="col-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Dokter</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($data as $row)
                <form action="{{ route('updatedokter', [$row->id]) }}" method="POST">
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
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            @endforeach
        </div>

    </div>

@endsection
