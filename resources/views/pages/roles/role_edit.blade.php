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
                    <div class="form-group col-xs-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter User Name" value="{{$role->name}}">
                    </div>
                    <div class="form-group col-xs-12">
                            @foreach ($permission as $key => $value)
                            <label> <input  type="checkbox" id="permission[]" name="permission[]" value="{{$value->id}}" {{in_array($value->id, $rolePermissions) ? 'checked' : ''}}>
                                {{ $value->name }}
                            </label>
                            <br>
                        @endforeach
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
