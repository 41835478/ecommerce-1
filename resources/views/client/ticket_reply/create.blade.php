@extends('client.layouts.main')

@section('title', trans('general.ticket_reply'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.ticket_reply') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.ticket_reply') }}</a></li>
                        <li class="active">{{ trans('general.ticket_replyCreate') }}</li>
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

    {!! Form::model($request,['url' => '/client/ticket_reply', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.addticket_reply') }}</span>
            </div>

            <div class="panel-body">




            
        <div class="row">
        <div class="form-group {{ $errors->has('ticket_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('ticket_id', trans('general.ticket_id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('ticket_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('ticket_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('contact_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('contact_id', trans('general.contact_id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('contact_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('contact_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('description', trans('general.description'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('create_time') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('create_time', trans('general.create_time'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('create_time', null, ['class' => 'form-control']) !!}
                {!! $errors->first('create_time', '<p class="help-block">:message</p>') !!}
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