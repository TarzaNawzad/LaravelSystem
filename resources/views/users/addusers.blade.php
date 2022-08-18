

@extends('adminlte::page')

@section('content')


    @include('users.headrer')


<div class="card card-info" style=";padding-bottom: 40px;margin-bottom: 0px !important;">
    <div class="card-body"
         style="overflow-x:scroll; border: 1px solid #cccccc;border-radius: 3px;height: 569px;">

        <form id="userform" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token">
            <div class="row">
                <div class="col-lg-6">
                    <label class="mt-2">name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="nav-icon fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="name"
                               placeholder="name">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <label class="mt-2">last name</label>
                    <div class="input-group" id="city1">
                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="nav-icon fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="family"
                               placeholder="last name">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <label class="mt-2">Mobile</label>
                    <div class="input-group" id="town1">
                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="nav-icon fa fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" name="mobile"
                               placeholder="Mobile No.">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <label class="mt-2">User Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="nav-icon fa fa-user-circle"></i></span>
                        </div>
                        <input type="text" class="form-control" name="user"
                               placeholder="User Name">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <label class="mt-2"> password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="nav-icon fa fa-lock"></i></span>
                        </div>
                        <input type="text" class="form-control" name="password"
                               placeholder="password">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <label class="mt-2">repeat password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="nav-icon fa fa-lock"></i></span>
                        </div>
                        <input type="text" class="form-control"
                               placeholder="repeat password">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <label class="mt-2">user role</label>
                    <div class="input-group">
                        <select class="form-control select2" name="typeu"
                                style="width: 100%;">
                            <option value="0">choose user role</option>
                        </select>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <label class="mt-2">picture</label>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-btn">
                            <span class="fileUpload btn btn-success">
                            <span class="upl" id="upload" style="cursor: pointer;">choose a file</span>
                            <input type="file" name="file" class="upload up" accept="image/jpeg"/>
                            </span><!-- btn-orange -->
                            </div><!-- btn -->
                            <input type="text" class="form-control bg-white" readonly>
                        </div><!-- group -->
                    </div><!-- form-group -->
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->

            </div>
            <!-- /.row -->

            <div class="col-lg-6 mt-2">
                <div class="input-group">
                    <label>
                        <input type="checkbox" value="1" name="active"> user role
                    </label>
                </div>
                <!-- /input-group -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="row float-left">
                <div class="mr-2">
                    <div class="input-group">
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success btn-block">
                                send/add
                            </button>
                        </div>
                    </div>
                    <!-- /input-group -->
                </div>
                <div class="mr-2">
                    <div class="input-group">
                        <a href="">
                            <div class="form-group mt-2">
                                <div type="cancel" class="btn btn-danger btn-block"
                                     onclick="">cancle
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </div>

        </form>
        <!-- /.col-lg-6 -->
    </div>
</div>
@endsection
