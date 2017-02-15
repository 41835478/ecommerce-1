@extends('client.layouts.main')

@section('title', trans('general.domains'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.domains') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.domains') }}</a></li>
                        <li class="active">{{ trans('general.domainsCreate') }}</li>
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

    {!! Form::model($request,['url' => '/client/domains', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.adddomains') }}</span>
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


            <div class="form-group {{ $errors->has('provider') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('provider', trans('general.provider'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('provider',config('array.domains_providers'), null, ['class' => 'form-control']) !!}
                {!! $errors->first('provider', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>


                <div class="row">


                    <div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('cost', trans('general.cost'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('cost', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
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