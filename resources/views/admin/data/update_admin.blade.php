@extends('admin.index')
@section('data')
    admin.data.update_admin
    <update-admin>
        <div class="update-admin">
            <div class="container">
                <form action="{{ route('admin.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $adminData->id }}">
                    <div class="username">
                        @error('username')
                            <b class="text-danger">{{ $message }}</b>
                        @enderror
                        <input type="text" name="username" placeholder="Username" value="{{ $adminData->username }}"
                            class="form-control">
                    </div>
                    <div class="email">
                        @error('email')
                        <b class="text-danger">{{ $message }}</b>
                    @enderror
                        <input type="text" name="email" placeholder="email" value="{{ $adminData->email }}"
                            class="form-control">
                    </div>
                    <div class="password">
                        @error('password')
                        <b class="text-danger">{{ $message }}</b>
                    @enderror
                        <input type="text" name="password" placeholder="password" value="{{ $adminData->password }}"
                            class="form-control">
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </update-admin>
@endsection
