@extends('client.layouts.main')

@section('title', trans('general.contacts'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.contacts') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.contacts') }}</a></li>
                        <li class="active">{{ trans('general.contactsCreate') }}</li>
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

    {!! Form::model($request,['url' => '/client/contacts', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.addcontacts') }}</span>
            </div>

            <div class="panel-body">




            
        <div class="row">

        
        <div class="form-group {{ $errors->has('company_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('company_id', trans('general.company'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('company_id',$companiesList, null, ['class' => 'form-control']) !!}
                {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>


            <div class="form-group {{ $errors->has('users_id') ? 'has-error' : ''}}  col-xs-6">
                {!! Form::label('users_id', trans('general.users_id'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('users_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('users_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

        </div>        
        <div class="row">

        <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('phone', trans('general.phone'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

            <div class="form-group {{ $errors->has('permissions') ? 'has-error' : ''}}  col-xs-6">
                {!! Form::label('permissions', trans('general.permissions'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('permissions', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('permissions', '<p class="help-block">:message</p>') !!}
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
                
        
        <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('status', trans('general.status'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">
                






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