@extends('template.template')
@section('judul', 'Poli')
@section('title', 'Poli')
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
                        <th>Poli</th>
                        <th width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->poli }}</td>
                        <td><a class="btn btn-info btn-sm" href="{{ route('editpoli', [$row->id]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{ route('deletepoli', [$row->id]) }}">
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
                        <th>Poli</th>
                        <th width="20%">Action</th>
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
                <h4 class="modal-title">Form Tambah Poli</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/tpoli') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputPoli">Poli</label>
                        <input type="text" class="form-control" name="poli" placeholder="Masukkan Poli" />
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
