@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>کارمەندان</b></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ڕێکخستنی کارمەندان</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> تۆمارکردن کارمەندی نوێ</a>
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
            <th>ناوی کارمەند</th>
            <th> ناوی باوک</th>
            <th>ژ.مۆبایل</th>
            <th>پیشە</th>
            <th>بارودۆخ</th>
            <th width="280px">چاککردن</th>
        </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->code }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->mobile }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td>@if($user->status==1) <span class="badge bg-success"><i class="fa fa-check nav-icon"></i></span>
                    @else <span class="badge bg-danger"><i class="fa fa-timesph nav-icon"></i></span> @endif</td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>


    {!! $data->render() !!}
@stop
