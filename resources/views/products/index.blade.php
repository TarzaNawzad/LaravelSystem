@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>بەشی کاڵا و بەرهەمەکان</b></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}">تۆمارکردنی کاڵای نوێ </a>
            </div>
            <br>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ژمارە</th>
            <th>ئایدی</th>
            <th>ناوی کاڵا</th>
            <th>گروپی سەرەکی</th>
            <th>گروپی لاوەکی</th>
            <th>بڕاندی کاڵا</th>
            <th> ناوی بڕاند</th>
            <th width="280px">چاککردن</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->subgroup }}</td>
                <td>{{ $product->producttype }}</td>
                <td>{{ $product->brand }}</td>
                <td>{{ $product->productname }}</td>
{{--                <td><img src="/image/{{ $product->image }}" width="100px"></td>--}}

                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
