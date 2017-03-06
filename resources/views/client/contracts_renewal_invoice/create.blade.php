@extends('client.layouts.main')

@section('title', trans('general.contracts_renewal_invoice'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.contracts_renewal_invoice') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.contracts_renewal_invoice') }}</a></li>
                        <li class="active">{{ trans('general.contracts_renewal_invoiceCreate') }}</li>
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







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.addcontracts_renewal_invoice') }}</span>
            </div>

            <div class="panel-body">




            
        <div class="row">
            {!! Form::model($request,['method'=>'get','id'=>'changeContractForm', 'class' => 'form-horizontal']) !!}
        <div class="form-group {{ $errors->has('contracts_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('contracts_id', trans('general.contracts'), ['class' => 'col-sm-4 control-label','style'=>'text-align:left;']) !!}
            <div class="col-sm-8">
                {!! Form::select('contracts_id',$contractsList, null, ['class' => 'form-control','onChange'=>"$('#changeContractForm').submit();"]) !!}
                {!! $errors->first('contracts_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

            {!! Form::hidden('company_id', null) !!}
{!!  Form::close()!!}
            {!! Form::model($request,['url' => '/client/contracts_renewal_invoice', 'class' => 'form-horizontal']) !!}
        <div class="form-group {{ $errors->has('contracts_renewal_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('contracts_renewal_id', trans('general.contracts_renewal'), ['class' => 'col-sm-4 control-label','style'=>'text-align:left;']) !!}
            <div class="col-sm-8">
                {!! Form::select('contracts_renewal_id',$contractsRenewalList, null, ['class' => 'form-control']) !!}
                {!! $errors->first('contracts_renewal_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">
        <div class="form-group {{ $errors->has('invoice_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('invoice_id', trans('general.invoice'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('invoice_id',$invoiceList, null, ['class' => 'form-control']) !!}
                {!! $errors->first('invoice_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('description', trans('general.description'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        






        <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">

            {!! Form::hidden('contracts_id', null) !!}
            {!! Form::hidden('company_id', null) !!}
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