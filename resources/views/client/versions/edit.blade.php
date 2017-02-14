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
                        <li class="active">{{ trans('general.editversions') }}</li>
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


    {!! Form::model($versions, [
        'method' => 'PATCH',
        'url' => ['/client/versions', $versions->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editversions') }}</span>
            </div>

            <div class="panel-body">







                <div class="row">



                    <div class="form-group {{ $errors->has('products_id') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('products_id', trans('general.products'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('products_id',$productsList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('products_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('version') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('version', trans('general.version'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('version', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                </div>
                <div class="row">


                    <div class="form-group {{ $errors->has('release_notes') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('release_notes', trans('general.release_notes'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('release_notes', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('release_notes', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>



                    <div class="form-group {{ $errors->has('links') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('links', trans('general.links'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('links', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('links', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group {{ $errors->has('publish_date') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('articale', trans('general.publish_date'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('publish_date', null, ['class' => 'form-control mydatepicker']) !!}
                            {!! $errors->first('publish_date', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="form-group {{ $errors->has('articale') ? 'has-error' : ''}}  col-xs-12">
                        {!! Form::label('article', trans('general.article'), ['class' => ' control-label']) !!}
                        <div class="col-sm-12">
                            {!! Form::textarea('articale', null, ['class' => 'form-control','id'=>'editor1']) !!}
                            {!! $errors->first('articale', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="form-group {{ $errors->has('manual') ? 'has-error' : ''}}  col-xs-12">
                        {!! Form::label('manual', trans('general.manual'), ['class' => ' control-label']) !!}
                        <div class="col-sm-12">
                            {!! Form::textarea('manual', null, ['class' => 'form-control','id'=>'editor2']) !!}
                            {!! $errors->first('manual', '<p class="help-block">:message</p>') !!}
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