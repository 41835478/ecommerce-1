@extends('client.layouts.main')

@section('title', trans('general.web_hosting_plans'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.web_hosting_plans') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.web_hosting_plans') }}</a></li>
                        <li class="active">{{ trans('general.web_hosting_plansCreate') }}</li>
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

    {!! Form::model($request,['url' => '/client/web_hosting_plans', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.addweb_hosting_plans') }}</span>
            </div>

            <div class="panel-body">




            
        <div class="row">

            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}  col-xs-6">
                {!! Form::label('name', trans('general.name'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('web_space') ? 'has-error' : ''}}  col-xs-6">
                {!! Form::label('web_space', trans('general.web_space'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('web_space', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('web_space', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

        </div>






                <div class="row">

                    <div class="form-group {{ $errors->has('domains_number') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('domains_number', trans('general.domains_number'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('domains_number', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('domains_number', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('emails') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('emails', trans('general.emails'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('emails', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('emails', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                </div>



                <div class="row">

                    <div class="form-group {{ $errors->has('traffic') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('traffic', trans('general.traffic'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('traffic', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('traffic', '<p class="help-block">:message</p>') !!}
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