@extends('layouts.master')
@section('content')
<div class="col-xs-12">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>#</th>
                        <th>Labarotry Name</th>
                        <th>Labarotry Phone</th>
                        <th>Labarotry Address</th>
                        <th>Labarotry Logo</th>
                        <th>Labarotry Doctor</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <td>1</td>
                        <td style="vertical-align:middle">Al kousor</td>
                        <td style="vertical-align:middle">0295656</td>
                        <td style="vertical-align:middle"> deir ezzor - al arfi</td>
                        <td style="vertical-align:middle"><img src={{ asset('assets/img/avatar04.png') }} height="75px"
                                alt=""></td>
                        <td style="vertical-align:middle">Mohamad hussien</td>
                        <td style="vertical-align:middle">
                            <button type="button" class="btn btn-sm btn-success">Edit</button>
                            <button type="button" class="btn btn-sm btn-danger">Del</button>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>1</td>
                        <td style="vertical-align:middle">Al kousor</td>
                        <td style="vertical-align:middle">0295656</td>
                        <td style="vertical-align:middle"> deir ezzor - al arfi</td>
                        <td style="vertical-align:middle"><img src={{ asset('assets/img/avatar04.png') }} height="75px"
                                alt=""></td>
                        <td style="vertical-align:middle">Mohamad hussien</td>
                        <td style="vertical-align:middle">
                            <button type="button" class="btn btn-sm btn-success">Edit</button>
                            <button type="button" class="btn btn-sm btn-danger">Del</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(function() {
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true
        });
    });
</script>
@endsection
