@extends('admin.index')
@section('data')
    admin.data.admins
    <admin-data>
        <div class="container">
            <table class="table table-bordered table-dark">
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
                    <td>{{ $data->admin_id }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <button class="btn btn-info">Update</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
                </tbody>


            </table>
        </div>
    </admin-data>
@endsection
