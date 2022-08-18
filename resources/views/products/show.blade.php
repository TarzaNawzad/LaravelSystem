@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2> پیشاندانی کاڵاکان</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> گەڕانەوە</a>
            </div>
            <br>
        </div>
    </div>

{{--    <th>ژمارە</th>--}}
    {{--            <th>ئایدی</th>--}}
    {{--            <th>ناوی کاڵا</th>--}}
    {{--            <th>گروپی سەرەکی</th>--}}
    {{--            <th>گروپی لاوەکی</th>--}}
    {{--            <th>بڕاندی کاڵا</th>--}}
    {{--            <th> ناوی بڕاند</th>--}}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ناوی کاڵا:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>گروپی سەرەکی:</strong>
                {{ $product->subgroup }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>گروپی لاوەکی:</strong>
                {{ $product->producttype }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>بڕاندی کاڵا:</strong>
                {{ $product->brand }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ناوی بڕاند:</strong>
                {{ $product->productname }}
            </div>
        </div>

{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--            <div class="form-group">--}}
{{--                <strong>Image:</strong>--}}
{{--                <img src="/image/{{ $product->image }}" width="500px">--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
