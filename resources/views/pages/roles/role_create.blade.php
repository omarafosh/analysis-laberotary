@extends('layouts.master')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Create New Role</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form action={{ route('roles.store') }} method="post" role="form">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter User Name">
                    </div>
                    <div class="form-group">
                        @foreach ($permission as $value)
                            <label> <input type="checkbox" id="permission[]" name="permission[]" value="{{$value->id}}">
                                {{ $value->name }}
                            </label>
                            <br>
                        @endforeach
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
