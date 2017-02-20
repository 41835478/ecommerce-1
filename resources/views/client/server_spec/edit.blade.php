@extends('client.layouts.main')

@section('title', trans('general.server_spec'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.server_spec') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.server_spec') }}</a></li>
                        <li class="active">{{ trans('general.editserver_spec') }}</li>
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


    {!! Form::model($server_spec, [
        'method' => 'PATCH',
        'url' => ['/client/server_spec', $server_spec->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editserver_spec') }}</span>
            </div>

            <div class="panel-body">





            
        <div class="row">        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('name', trans('name'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('hard_disk') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('hard_disk', trans('hard_disk'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('hard_disk', null, ['class' => 'form-control']) !!}
                {!! $errors->first('hard_disk', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('cpu') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('cpu', trans('cpu'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('cpu', null, ['class' => 'form-control']) !!}
                {!! $errors->first('cpu', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('port') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('port', trans('port'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('port', null, ['class' => 'form-control']) !!}
                {!! $errors->first('port', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('ram') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('ram', trans('ram'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('ram', null, ['class' => 'form-control']) !!}
                {!! $errors->first('ram', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('raid') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('raid', trans('raid'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('raid',config('array.server_spec_raid'),null, ['class' => 'form-control']) !!}
                {!! $errors->first('raid', '<p class="help-block">:message</p>') !!}
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