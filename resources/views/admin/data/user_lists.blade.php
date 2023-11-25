@extends('admin.index')
@section('data')
    admin.data.user_lists

    <userlist>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center ">
                        <th>ID</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userList as $list)
                        <tr>
                            <td>{{ $list->user_id }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->address }}</td>
                            <td class="text-center">
                                <button class="btn btn-info">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </userlist>
@endsection
