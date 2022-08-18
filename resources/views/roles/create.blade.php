@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>تۆمارکردنی کارمەندی نوێ</b></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>تۆمارکردنی کارمەندی نوێ</h2>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> گەڕانەوە</a>
            </div>
            <br>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ناوی کارمەند:</strong>
                {!! Form::text('name', null, array('placeholder' => 'ناوی کارمەند','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ڕێگەپێدان:</strong>
                <br/>
                @foreach($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                    <br/>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">تۆمارکردن</button>
        </div>
    </div>
    {!! Form::close() !!}

@stop
