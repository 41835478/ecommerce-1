@extends('client.layouts.main')

@section('title', trans('general.server_company_server_spec'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.server_company_server_spec') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.server_company_server_spec') }}</a></li>
                        <li class="active">{{ trans('general.editserver_company_server_spec') }}</li>
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


    {!! Form::model($server_company_server_spec, [
        'method' => 'PATCH',
        'url' => ['/client/server_company_server_spec', $server_company_server_spec->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editserver_company_server_spec') }}</span>
            </div>

            <div class="panel-body">





            
        <div class="row">        <div class="form-group {{ $errors->has('server_company_id') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('server_company_id', trans('server_company'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('server_company_id',$serverCompanyArray, null, ['class' => 'form-control']) !!}
                {!! $errors->first('server_company_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('server_spec_id') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('server_spec_id', trans('server_spec'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('server_spec_id',$serverSpecArray, null, ['class' => 'form-control']) !!}
                {!! $errors->first('server_spec_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('cost', trans('cost'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('cost', null, ['class' => 'form-control']) !!}
                {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('period') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('period', trans('period'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('period', null, ['class' => 'form-control']) !!}
                {!! $errors->first('period', '<p class="help-block">:message</p>') !!}
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