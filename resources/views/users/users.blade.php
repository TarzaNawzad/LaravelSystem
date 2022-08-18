@extends('adminlte::page')

@section('content')

    @include('users.headrer')


{{--    **************************************--}}

    <label class="mt-2"> گەڕان :</label>

    <div class="row" id="filterbox">
        <div class="input-group col-md-6 mb-2 mt-1">
{{--            <div class="input-group" >--}}
{{--                <label class="mt-2">ID</label>--}}
{{--                <select class="form-control select2 idp1" name="idp1" onchange=""--}}
{{--                        style="width: 100%">--}}
{{--                    <option value="0">ID</option>--}}

{{--                </select>--}}
            </div>
        </div>
        <div class="input-group col-md-6 mb-2 mt-1">
            <div class="input-group" >
                <label class="mt-2">name </label>
                <select class="form-control select2 name1" name="name1" onchange=""
                        style="width: 100%">
                    <option value="0">name</option>
                </select>
            </div>
        </div>

        <div class="col-12 text-left">
            <button class="btn btn-danger" onclick="cancelsearch()">پەشیمان بوونەوە</button>
            <button class="btn btn-info"  onclick="rsearch()">هەڵبژاردن</button>
        </div>
    </div>

    <br>


    <input type="hidden" name="_token" value="">
    <div class="card card-info tablepadding" style="margin-bottom: 0px !important;">
        <div class="card-header" style="text-align: center">
            <h3 class="card-title">خشتەی کارمەندان  </h3>
        </div>

        <div class="card-body" style="overflow-x:scroll;padding: 0; border: 1px solid #cccccc;border-radius: 3px;height: 569px;">

            <table id="example1"
                   class="table table-striped table-bordered table-head-fixed table-hover"
                   style="text-align: center;">

                <thead>
                <tr>
                    <th>ئایدی</th>
                    <th>وێنە</th>
                    <th>ناوی بەکارهێنەر</th>
                    <th>ناوی باوک</th>
                    <th>ژ.مۆبایل</th>
                    <th>پیشەی کارمەند</th>
                    <th>ئاستی کارمەند</th>
                    <th>چاککردن</th>
                </tr>
                </thead>
                <tbody>

{{--                @foreach($users as $user)--}}

{{--                @endforeach--}}



                </tbody>
            </table>

        </div>
    </div>


@endsection
