@extends('layouts.master')
@section('content')
<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3><br><br>
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Rols</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key=>$item)
                    <tr align="center">
                        <td>{{$key+1}}</td>
                        <td style="vertical-align:middle">{{$item->name}}</td>
                        <td style="vertical-align:middle">{{$item->email}}</td>
                        <td style="vertical-align:middle">
                            @if(!empty($item->getRoleNames()))
                            @foreach($item->getRoleNames() as $role)
                               <label class="badge badge-success">{{ $role }}</label>
                            @endforeach
                          @endif
                        </td>
                        <td style="vertical-align:middle">
                            <a class="btn btn-sm btn-warning" href="{{ route('users.show',$item->id) }}">Show</a>
                            <a class="btn btn-sm btn-primary" href="{{ route('users.edit',$item->id) }}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{ route('users.destroy',$item->id) }}">Del</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>

@endsection
