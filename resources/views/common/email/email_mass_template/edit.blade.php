@extends('client.layouts.main')

@section('title', trans('general.email_mass_template'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.email_mass_template') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.email_mass_template') }}</a></li>
                        <li class="active">{{ trans('general.editemail_mass_template') }}</li>
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


    {!! Form::model($email_mass_template, [
        'method' => 'PATCH',
        'url' => ['/client/email_mass_template', $email_mass_template->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editemail_mass_template') }}</span>
            </div>

            <div class="panel-body">





            
        <div class="row">        <div class="form-group {{ $errors->has('email_group_id') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('email_group_id', trans('email_group_id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('email_group_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('email_group_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('name', trans('name'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('subject') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('subject', trans('subject'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('body', trans('body'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('body', null, ['class' => 'form-control']) !!}
                {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('language') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('language', trans('language'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('language', null, ['class' => 'form-control']) !!}
                {!! $errors->first('language', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('created_at', trans('created_at'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('created_at', null, ['class' => 'form-control']) !!}
                {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('updated_at') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('updated_at', trans('updated_at'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('updated_at', null, ['class' => 'form-control']) !!}
                {!! $errors->first('updated_at', '<p class="help-block">:message</p>') !!}
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