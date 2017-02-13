@extends('client.layouts.main')

@section('title', trans('general.contracts_renewal'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.contracts_renewal') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.contracts_renewal') }}</a></li>
                        <li class="active">{{ trans('general.contracts_renewalCreate') }}</li>
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

    {!! Form::model($request,['url' => '/client/contracts_renewal', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.addcontracts_renewal') }}</span>
            </div>

            <div class="panel-body">




            
        <div class="row">



            <div class="form-group {{ $errors->has('contracts_id') ? 'has-error' : ''}}  col-xs-6" style="display:none;">
                {!! Form::label('contracts_id', trans('general.contracts_id'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('contracts_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contracts_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group {{ $errors->has('from_date') ? 'has-error' : ''}}  col-xs-6" >
                {!! Form::label('from_date', trans('general.from_date'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('from_date', null, ['class' => 'form-control mydatepicker']) !!}
                    {!! $errors->first('from_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group {{ $errors->has('to_date') ? 'has-error' : ''}}  col-xs-6">
                {!! Form::label('to_date', trans('general.to_date'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('to_date', null, ['class' => 'form-control mydatepicker']) !!}
                    {!! $errors->first('to_date', '<p class="help-block">:message</p>') !!}
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
                
        
        <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('price', trans('general.price'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
                {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
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