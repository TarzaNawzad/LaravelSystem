@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2>دەستکاریکردنی زانیاریەکانی کاڵا</h2>
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

    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ناوی کاڵا:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="ناوی کاڵا">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>گروپی سەرەکی:</strong>
                    <input type="text" name="subgroup" value="{{ $product->subgroup }}" class="form-control" placeholder="گروپی سەرەکی">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>گروپی لاوەکی:</strong>
                    <input type="text" name="producttype" value="{{ $product->producttype }}" class="form-control" placeholder="گروپی لاوەکی">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>بڕاندی کاڵا:</strong>
                    <input type="text" name="brand" value="{{ $product->brand }}" class="form-control" placeholder="بڕاندی کاڵا">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ناوی بڕاند:</strong>
                    <input type="text" name="productname" value="{{ $product->productname }}" class="form-control" placeholder="ناوی بڕاند ">
                </div>
            </div>


{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>Image:</strong>--}}
{{--                    <input type="file" name="image" class="form-control" placeholder="image">--}}
{{--                    <img src="/image/{{ $product->image }}" width="300px">--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">تۆمارکردن</button>
            </div>
        </div>

    </form>
@endsection
