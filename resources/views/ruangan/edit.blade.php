@extends('template.template')
@section('judul', 'Edit Data Ruangan')
@section('halaman', 'Home')
@section('content')

    <div class="col-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Ruangan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($data as $row)
                <form action="{{ route('updateruangan', [$row->id]) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ruangan</label>
                            <input type="name" name="nruang" class="form-control" value="{{ $row->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan</label>
                            <input type="name" name="keterangan" class="form-control" value="{{ $row->keterangan }}">
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
