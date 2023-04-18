@extends('layouts.master')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form action={{ route('users.update',$user->id) }} method="post" role="form">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter User Name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Enter User Email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter Password" value="{{$user->password}}">
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Password Confirm</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm"
                            placeholder="Enter Password Confirm" value="{{$user->password}}">
                    </div>

                    <div class="form-group">
                        <select class="form-control" multiple name="roles[]" id="roles">
                            @foreach ($user->roles as $key => $value)
                                <option value="{{ $key }}">{{ $value["name"] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="isActive" name="isActive" {{ $user->status ? 'checked' : '' }}> Is Active
                        </label>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
    <!--/.col (left) -->
@endsection

{{-- <select class="form-control" multiple name="roles[]" id="roles">
    @foreach ($roles as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select> --}}
