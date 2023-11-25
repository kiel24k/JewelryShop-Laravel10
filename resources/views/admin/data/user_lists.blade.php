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
                    @foreach ($userList as $listid => $list)

                        <tr>
                            <td>{{ $listid + 1 }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->address }}</td>
                            <td class="text-center">
                                <button class="btn btn-info"><a href="{{route('user.update.display',$list->id)}}" class="nav-link text-white">Update</a></button>
                                <button class="btn btn-danger"><a href="{{route('user.delete',$list->id)}}" class="nav-link text-white">Delete</a></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </userlist>
@endsection
