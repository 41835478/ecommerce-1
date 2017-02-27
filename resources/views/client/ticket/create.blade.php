@extends('client.layouts.main')

@section('title', trans('general.ticket'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.ticket') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.ticket') }}</a></li>
                        <li class="active">{{ trans('general.ticketCreate') }}</li>
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

    {!! Form::model($request,['url' => '/client/ticket', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.addticket') }}</span>
            </div>

            <div class="panel-body">




            
        <div class="row">

                
        
        <div class="form-group {{ $errors->has('contract_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('contract_id', trans('general.contract_id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('contract_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('contract_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('name', trans('general.name'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('type', trans('general.type'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('type',config('array.ticket_type'), null, ['class' => 'form-control']) !!}
                {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">
        <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('status', trans('general.status'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('status',config('array.ticket_status'), null, ['class' => 'form-control']) !!}
                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('description', trans('general.description'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">

                
        
        <div class="form-group {{ $errors->has('open_time') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('open_time', trans('general.open_time'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('open_time', null, ['class' => 'form-control mydatepicker']) !!}
                {!! $errors->first('open_time', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('close_time') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('close_time', trans('general.close_time'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('close_time', null, ['class' => 'form-control mydatepicker']) !!}
                {!! $errors->first('close_time', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                






        <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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