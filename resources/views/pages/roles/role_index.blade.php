@extends('layouts.master')
@section('content')
<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3><br><br>
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key=>$item)
                    <tr align="center">
                        <td>{{$key+1}}</td>
                        <td style="vertical-align:middle">{{$item->name}}</td>
                        <td style="vertical-align:middle">
                            <a class="btn btn-sm btn-warning" href="{{ route('roles.show',$item->id)    }}">Show</a>
                            <a class="btn btn-sm btn-primary" href="{{ route('roles.edit',$item->id)    }}">Edit</a>
                            <a class="btn btn-sm btn-danger"  href="{{ route('roles.destroy',$item->id) }}">Del</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>

@endsection
