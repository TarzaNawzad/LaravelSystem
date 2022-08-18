
@extends('adminlte::page')

@section('content')


    @include('users.headrer')

    <div class="row">
        <div class="col-12">


            <input type="hidden" name="_token" >
            <div class="row" id="filterbox">
                <div class="col-lg-6">
                    <label class="mt-2">user role</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i
                        class="nav-icon fa fa-user"></i></span>
                        </div>
                        <input id="type" type="text" class="form-control" name="typet"
                               placeholder="user role">
                    </div>
                    <!-- /input-group -->
                </div>
            </div>

            <div class="col-lg-12" style="padding: 0 !important">
                <label class="mt-2">show user role list</label>
                <div class="input-group mb-12">
                    <div class="input-group-prepend md-3" style="margin-left: 5px;">


                    </div>


                </div>
                <div style="overflow-x:scroll;overflow-y:scroll;border: 1px solid #cccccc;border-radius: 3px; height: 500px;">
                    <table id="example2" class="table table-striped">

                        <thead>

                        <tr>
                            <th class="radif">row</th>
                            <th style="min-width: 100px;">role</th>
                            <th width="85" style="min-width: 85px;max-width: 85px;">position</th>
                        </tr>
                        </thead>
                        <tbody>
                        <span style="display: none;"></span>

                        </tbody>
                    </table>
                </div>

            </div>

            <!-- /.row -->
            <div class="col-lg-12 mt-3 mb-3 text-left">
                <button class="btn btn-success" onclick="infoedit()">
                    dyary krdni roly user
                </button>
            </div>
            <!-- /.col-lg-6 -->


            <!-- /.form-group -->

            <!-- /.col -->





            <input type="hidden" name="_token" value="g5qTKBnJz60ud1v5HqM0YkhomEgkNwbvIONBw4pK">
            <div class="card card-info tablepadding">
                <div class="card-header" style="text-align: center">
                    <h3 class="card-title">user role list</h3>
                </div>
                <div class="card-body"
                     style="overflow-x:scroll;padding: 0; border: 1px solid #cccccc;border-radius: 3px;height: 500px">
                    <table id="example1"
                           class="table table-striped table-bordered table-head-fixed table-hover"
                           style="text-align: center;">

                        <thead>

                        <tr>
                            <th>row</th>
                            <th>user role</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>



                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>


@endsection
