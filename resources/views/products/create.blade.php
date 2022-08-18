@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h1> تۆمارکردن کاڵای نوێ</h1>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> گەڕانەوە</a>
            </div>
            <br>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{--    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">--}}
{{--        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}--}}
{{--        @csrf--}}

{{--        <th>ژمارە</th>--}}
{{--            <th>ئایدی</th>--}}
{{--            <th>ناوی کاڵا</th>--}}
{{--            <th>گروپی سەرەکی</th>--}}
{{--            <th>گروپی لاوەکی</th>--}}
{{--            <th>بڕاندی کاڵا</th>--}}
{{--            <th> ناوی بڕاند</th>--}}


{{--        <div class="row">--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>ناوی کاڵا:</strong>--}}
{{--                    <input type="text"name="name" class="form-control" placeholder="ناوی کاڵا">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>گروپی سەرەکی:</strong>--}}
{{--                    <input type="text" name="name" class="form-control" placeholder="گروپی سەرەکی">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>گروپی لاوەکی:</strong>--}}
{{--                    <input type="text" name="name" class="form-control" placeholder="گروپی لاوەکی">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>بڕاندی کاڵا:</strong>--}}
{{--                    <input type="text" name="name" class="form-control" placeholder="بڕاندی کاڵا">--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>ناوی بڕاند:</strong>--}}
{{--                    <input type="text" name="name" class="form-control" placeholder="ناوی بڕاند">--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>Detail:</strong>--}}
{{--                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>Image:</strong>--}}
{{--                    <input type="file" name="image" class="form-control" placeholder="image">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--                <button type="submit" class="btn btn-primary">تۆمارکردن</button>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </form>--}}

    {!! Form::open(array('route' => 'products.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ئایدی:</strong>
                {!! Form::text('code', null, array('placeholder' => 'ئایدی','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ناوی کاڵا:</strong>
                {!! Form::text('name', null, array('placeholder' => 'ناوی کالا','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>subgroup:</strong>
                {!! Form::text('subgroup', null, array('placeholder' => 'subgroup','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>producttype:</strong>
                {!! Form::text('producttype', null, array('placeholder' => 'producttype','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>brand:</strong>
                {!! Form::text('brand', null, array('placeholder' => 'brand','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>productname:</strong>
                {!! Form::text('productname', null, array('placeholder' => 'productname','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">تۆمارکردن</button>
        </div>
        <br>
    </div>
    {!! Form::close() !!}
@endsection
