@extends('layouts.master')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Role</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form action={{ route('roles.update',$role->id) }} method="post">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter User Name" value="{{$role->name}}">
                    </div>
                    <div class="form-group">
                        <select class="form-control" multiple name="permission[]" id="permission[]">
                            @foreach ($role->permissions as $key => $value)
                                <option value="{{ $key }}" {{$value["name"]}}>{{ $value["name"] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
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
