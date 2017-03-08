@extends('client.layouts.main')

@section('title', trans('general.products'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.products') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.products') }}</a></li>
                        <li class="active">{{ trans('general.productsCreate') }}</li>
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

    {!! Form::model($request,['url' => '/client/products', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.addproducts') }}</span>
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


            <div class="form-group {{ $errors->has('products_list_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('products_list_id', trans('general.products_list'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('products_list_id',$productsListArray, null, ['class' => 'form-control']) !!}
                {!! $errors->first('products_list_id', '<p class="help-block">:message</p>') !!}
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
                </div>

                <div class="row">
                    <div class="form-group {{ $errors->has('article') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('article', trans('general.article'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('article',$articleList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('article', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('manual') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('manual', trans('general.manual'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('manual',$manualList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('manual', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="form-group {{ $errors->has('files_id') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('files_id', trans('general.files'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('files_id',$filesList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('files_id', '<p class="help-block">:message</p>') !!}
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