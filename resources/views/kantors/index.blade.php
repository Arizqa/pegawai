@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Kantor</div>
                <div class="panel-body">
                    <a href="{{ url('kantors/create') }}" class="btn btn-primary">Tambah Data Kantor</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered mt-1">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kantors as $kantor) //di foreach karna pake get karna hasil get adalah array
                                <tr>
                                    <td>{{ $kantor->nama }}</td>
                                    <td>{{ $kantor->nip }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('kantor/'.$kantor->id.'/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('kantor/'.$kantor->id.'/delete') }}">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="4">Data post tidak tersedia</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
