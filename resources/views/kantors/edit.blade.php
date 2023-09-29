@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('kantor-update',$ambil_id) }}">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="ambilnama" class="form-control"
                                value="{{$data->nama}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">NIP</label>
                                <input type="text" name="ambilnip" class="form-control"
                                value="{{$data->nip}}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Contoh </label>
                                <input type="text" name="contoh" class="form-control"
                                value="{{$datamigration->migration}}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Ambil ID</label>
                                <input type="text" name="ambil_id" class="form-control"
                                value="{{$ambil_id}}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">tambah</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
