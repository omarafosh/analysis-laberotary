@extends('layouts.master')
@section('content')
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Settings</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="laboratory_name">Laboratory Name</label>
                        <input type="text" class="form-control" id="laboratory_name" placeholder="Enter Laboratory Name">
                    </div>
                    <div class="form-group">
                        <label for="laboratory_address">Laboratory Address</label>
                        <input type="text" class="form-control" id="laboratory_address" placeholder="Enter Laboratory Address">
                    </div>
                    <div class="form-group">
                        <label for="laboratory_phone">Laboratory Phone</label>
                        <input type="text" class="form-control" id="laboratory_phone" placeholder="Enter Laboratory Phone">
                    </div>
                    <div class="form-group">
                        <label for="laboratory_doctor">Laboratory Doctor</label>
                        <input type="text" class="form-control" id="laboratory_doctor" placeholder="Enter Laboratory Doctor">
                    </div>
                    <div class="form-group">
                        <label for="laboratory_logo">Laboratory Logo
                        </label>
                        <input type="file" id="laboratory_logo">
                        <p class="help-block">Enter Photo To Is Logo Report Analysis 150 × 150 </p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" checked> Is Active
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
