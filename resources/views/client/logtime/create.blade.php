@extends('client.layouts.main')

@section('title', trans('general.logtime'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.logtime') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.logtime') }}</a></li>
                        <li class="active">{{ trans('general.logtimeCreate') }}</li>
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

    {!! Form::model($request,['url' => '/client/logtime', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.addlogtime') }}</span>
            </div>

            <div class="panel-body">




            
        <div class="row">
        <div class="form-group {{ $errors->has('support_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('support_id', trans('general.support_id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('support_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('support_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('ticket_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('ticket_id', trans('general.ticket_id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('ticket_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('ticket_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">
        <div class="form-group {{ $errors->has('hours') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('hours', trans('general.hours'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8 input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                {!! Form::text('hours', null, ['class' => 'form-control']) !!}
                {!! $errors->first('hours', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('summary') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('summary', trans('general.summary'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('summary', null, ['class' => 'form-control']) !!}
                {!! $errors->first('summary', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">
        <div class="form-group {{ $errors->has('expenses') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('expenses', trans('general.expenses'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('expenses', null, ['class' => 'form-control']) !!}
                {!! $errors->first('expenses', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('create_date') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('create_date', trans('general.create_date'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('create_date', null, ['class' => 'form-control mydatepicker']) !!}
                {!! $errors->first('create_date', '<p class="help-block">:message</p>') !!}
            </div>
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