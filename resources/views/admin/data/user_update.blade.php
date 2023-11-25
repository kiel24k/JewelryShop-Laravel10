@extends('admin.index')
@section('data')
    admin.data.user_update
    <user-update>
        <div class="user_update">
            <div class="container">
                <form action="{{ route('update.data') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $userList->id }}">
                    <div class="email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="text" name="email" placeholder="Email" class="form-control"
                            value="{{ $userList->email }}">
                    </div>
                    <div class="address">
                        @error('address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input type="text" name="address" placeholder="Password" class="form-control"
                            value="{{ $userList->address }}">
                    </div>
                    <div class="submit">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </user-update>
@endsection
