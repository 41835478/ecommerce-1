@extends('client.layouts.main')

@section('title', trans('general.server_ip'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.server_ip') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.server_ip') }}</a></li>
                        <li class="active">{{ trans('general.editserver_ip') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">


    {!! Form::model($server_ip, [
        'method' => 'PATCH',
        'url' => ['/client/server_ip', $server_ip->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editserver_ip') }}</span>
            </div>

            <div class="panel-body">





            
        <div class="row">        <div class="form-group {{ $errors->has('server_detail_id') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('server_detail_id', trans('server_detail_id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('server_detail_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('server_detail_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('ip') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('ip', trans('ip'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('ip', null, ['class' => 'form-control']) !!}
                {!! $errors->first('ip', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('default_getway') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('default_getway', trans('default_getway'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('default_getway', null, ['class' => 'form-control']) !!}
                {!! $errors->first('default_getway', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('mask') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('mask', trans('mask'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('mask', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mask', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('name_server_1') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('name_server_1', trans('name_server_1'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('name_server_1', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name_server_1', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('name_server_2') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('name_server_2', trans('name_server_2'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('name_server_2', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name_server_2', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('type', trans('type'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('type', null, ['class' => 'form-control']) !!}
                {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('display') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('display', trans('display'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('display', null, ['class' => 'form-control']) !!}
                {!! $errors->first('display', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        


        <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>

            </div>
        </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection