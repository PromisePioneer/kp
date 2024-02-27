@extends('template.template')
@section('judul', 'Edit Data Rekap Medis')
@section('halaman', 'Home')
@section('content')

    <div class="col-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Rekap Medis</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach ($data as $row)
                <form action="{{ route('updaterkpmds', [$row->id]) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
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
