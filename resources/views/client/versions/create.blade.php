@extends('client.layouts.main')

@section('title', trans('general.versions'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.versions') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.versions') }}</a></li>
                        <li class="active">{{ trans('general.versionsCreate') }}</li>
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
                <span class="panel-title">{{ trans('general.addversions') }}</span>
            </div>

            <div class="panel-body">




            
        <div class="row">

            {!! Form::model($request,['method'=>'get', 'class' => 'form-horizontal','id'=>'productsChangeForm']) !!}


            <div class="form-group {{ $errors->has('products_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('products_id', trans('general.products'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('products_id',$productsList, null, ['class' => 'form-control','onchange'=>"$('#productsChangeForm').submit();"]) !!}
                {!! $errors->first('products_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
            {!! Form::close() !!}
            {!! Form::model($request,['url' => '/client/versions', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('version') ? 'has-error' : ''}}  col-xs-6">
                {!! Form::label('version', trans('general.version'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('version', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

        </div>        
        <div class="row">





            <div class="form-group {{ $errors->has('links') ? 'has-error' : ''}}  col-xs-6">
                {!! Form::label('links', trans('general.links'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('links',$filesList, null, ['class' => 'form-control']) !!}
                    {!! $errors->first('links', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group {{ $errors->has('publish_date') ? 'has-error' : ''}}  col-xs-6">
                {!! Form::label('articale', trans('general.publish_date'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('publish_date', null, ['class' => 'form-control mydatepicker']) !!}
                    {!! $errors->first('publish_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


        </div>



                <div class="row">
                    <div class="form-group {{ $errors->has('release_notes') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('release_notes', trans('general.release_notes'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('release_notes',$releaseNotesList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('release_notes', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('article') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('article', trans('general.article'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('article',$articleList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('article', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="form-group {{ $errors->has('manual') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('manual', trans('general.manual'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('manual',$manualList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('manual', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>



                <div class="row">
                






        <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">
            {!! Form::hidden('products_id', null) !!}
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