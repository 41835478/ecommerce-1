@extends('client.layouts.main')

@section('title', trans('general.contracts'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.contracts') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.contracts') }}</a></li>
                        <li class="active">{{ trans('general.editcontracts') }}</li>
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


    {!! Form::model($contracts, [
        'method' => 'PATCH',
        'url' => ['/client/contracts', $contracts->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editcontracts') }}</span>
            </div>

            <div class="panel-body">





                <div class="row">



                    <div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('company_id', trans('general.company'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('company_id',$companiesList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('purchasing_date') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('purchasing_date', trans('general.purchasing_date'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('purchasing_date', null, ['class' => 'form-control mydatepicker']) !!}
                            {!! $errors->first('purchasing_date', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>



                </div>
                <div class="row">


                    <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('type', trans('general.type'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('type',config('array.contracts_type'), null, ['class' => 'form-control','onChange'=>'changeSelectedView("contract_type","productsType_");','id'=>'contract_type']) !!}
                            {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('products_id') ? 'has-error' : ''}}  col-xs-6 productsType_" id="productsType_{{config('array.productsTypeIndex')}}"@if(config('array.productsTypeIndex')!=$contracts['type'] ||$contracts['type'] !='') style="display: none" @endif>
                        {!! Form::label('products_id', trans('general.products'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">

                            {!! Form::select(((config('array.productsTypeIndex')==$contracts['type'] ||$contracts['type'] =='')? '"products_id"':'""'),$productsList, null, ['class' => 'form-control']) !!}

                            {!! $errors->first('products_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('products_id') ? 'has-error' : ''}}  col-xs-6 productsType_" id="productsType_{{config('array.domainsTypeIndex')}}" @if(config('array.domainsTypeIndex')!=$contracts['type']) style="display: none" @endif>
                        {!! Form::label('products_id', trans('general.domains'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select(((config('array.domainsTypeIndex')==$contracts['type'])? '"products_id"':'""'),$domainsList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('products_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('products_id') ? 'has-error' : ''}}  col-xs-6 productsType_" id="productsType_{{config('array.webHostingPlansTypeIndex')}}" @if(config('array.webHostingPlansTypeIndex')!=$contracts['type']) style="display: none" @endif>
                        {!! Form::label('products_id', trans('general.web_hosting_plans'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select(((config('array.webHostingPlansTypeIndex')==$contracts['type'])? '"products_id"':'""'),$webHostingPlansList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('products_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has('products_id') ? 'has-error' : ''}}  col-xs-6 productsType_" id="productsType_{{config('array.serverTypeIndex')}}" @if(config('array.serverTypeIndex')!=$contracts['type']) style="display: none" @endif>
                        {!! Form::label('products_id', trans('general.server_detail'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select(((config('array.serverTypeIndex')==$contracts['type'])? '"products_id"':'""'),$serverList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('products_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has('products_id') ? 'has-error' : ''}}  col-xs-6 productsType_" id="productsType_{{config('array.supportTypeIndex')}}" @if(config('array.supportTypeIndex')!=$contracts['type']) style="display: none" @endif>
                        {!! Form::label('products_id', trans('general.support'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select(((config('array.supportTypeIndex')==$contracts['type'])? '"products_id"':'""'),$supportList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('products_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>




                </div>
                <div class="row">
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}  col-xs-12">
                        {!! Form::label('description', trans('general.description'), ['class' => ' control-label']) !!}
                        <div class="col-sm-12">
                            {!! Form::textarea('description', null, ['class' => 'form-control','id'=>'editor1']) !!}
                            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
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
