@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b> چاککردنی زانیاری کارمەندان</b></h1>
@stop

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>چاککردنی زانیاری کارمەندی نوێ</h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> گەڕانەوە</a>
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


{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ئایدی:</strong>
            {!! Form::text('code', null, array('placeholder' => 'ئایدی','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ناوی کارمەند:</strong>
            {!! Form::text('name', null, array('placeholder' => 'ناوی کارمەند','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ناوی باوک:</strong>
            {!! Form::text('last_name', null, array('placeholder' => 'ناوی باوک','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ژ.مۆبایل:</strong>
            {!! Form::text('mobile', null, array('placeholder' => 'ژ.مۆبایل','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>دۆخی کارمەند:</strong>
            <select name="status" class="form-control">
                <option value="">دۆخێک هەڵبژێرە</option>
                <option value="1" @if($user->status == 1) selected @endif>چالاک</option>
                <option value="0" @if($user->status == 0) selected @endif>ناچالاک</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ئیمەیڵ:</strong>
            {!! Form::text('email', null, array('placeholder' => 'ئیمەیڵ','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ووشەی تێپەڕبوون:</strong>
            {!! Form::password('password', array('placeholder' => 'ووشەی تێپەڕبوون','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>دڵنیابوونەوە لەووشەی تێپەڕبوون :</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'دڵنیابوونەوە لەووشەی تێپەڕبوون','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>دۆخی کارمەند:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">ناردن</button>
    </div>
</div>
{!! Form::close() !!}

@stop
