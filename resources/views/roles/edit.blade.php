@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>چاککردنی ڕۆلی کارمەند</b></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>چاککردنی ڕۆلی کارمەند</h2>
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


    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ناوی کارمەند:</strong>
                {!! Form::text('name', null, array('placeholder' => 'ناوی کارمەند','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ڕێگرپێدان:</strong>
                <br/>
                @foreach($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
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
