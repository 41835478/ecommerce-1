@extends('common.layouts.main')

@section('title', trans('general.email_template'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.email_template') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.email_template') }}</a></li>
                        <li class="active">{{ trans('general.editemail_template') }}</li>
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


    {!! Form::model($email_template, [
        'method' => 'PATCH',
        'url' => ['/common/email_template', $email_template->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('email_template.editemail_template') }}</span>
            </div>

            <div class="panel-body">







                <div class="row">


                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('name', trans('email_template.name'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('name',$templateNameList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group {{ $errors->has('subject') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('subject', trans('email_template.subject'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('body', trans('email_template.body'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('body', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('type', trans('email_template.type'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::status('type',config('mail.email_template_type'), null, ['class' => 'form-control']) !!}
                            {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has('to_field') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('to_field', trans('email_template.to_field'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('to_field', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('to_field', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group {{ $errors->has('to_email') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('to_email', trans('email_template.to_email'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('to_email', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('to_email', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has('language') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('language', trans('email_template.language'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('language',config('mail.email_template_language'), null, ['class' => 'form-control']) !!}
                            {!! $errors->first('language', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('status', trans('email_template.status'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('status',$templateStatusList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                </div>
                <div class="row">
                


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