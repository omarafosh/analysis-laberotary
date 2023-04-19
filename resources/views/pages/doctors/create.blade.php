@extends('layouts.master')

@section('title',"Create Doctor")
@section('link')
<li><a href="{{route('doctors.index')}}"></a> Doctors</li>
<li >Create</li>
@endsection
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Create New Doctor</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form action={{ route('users.store') }} method="post" role="form">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter User Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Enter User Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Password Confirm</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                            placeholder="Enter Password Confirm">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="roles[]" id="roles[]" multiple>
                            @foreach ($roles as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        @error('name')
                            name
                        @enderror
                        @error('email')
                            name
                        @enderror
                        @error('roles')
                            name
                        @enderror
                        @error('password')
                            name
                        @enderror
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="isActive" name="isActive"  checked> Is Active
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
