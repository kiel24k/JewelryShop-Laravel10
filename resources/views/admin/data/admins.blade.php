@extends('admin.index')
@section('data')
    admin.data.admins
    <admin-data>
        <div class="container">
            <button class="btn btn-outline-primary mb-3"><a href="{{route('add.admin')}}" class="nav-link">Add admin</a></button>
            <table class="table table-bordered table-dark table-responsive">
                <thead>
                    <tr>
                        <th>OFFICIAL ID</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adminDataList as $data)
                    <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <button class="btn btn-info"><a href="{{route('admin.update.display',$data->id)}}" class="nav-link">Update</a></button>
                        <button class="btn btn-danger"><a href="{{route('admin.delete',$data->id)}}" class="nav-link">Delete</a></button>
                    </td>
                </tr>
                @endforeach
                </tbody>


            </table>
        </div>
    </admin-data>
@endsection
