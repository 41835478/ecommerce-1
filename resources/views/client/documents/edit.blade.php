@extends('client.layouts.main')

@section('title', trans('general.documents'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.documents') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.documents') }}</a></li>
                        <li class="active">{{ trans('general.editdocuments') }}</li>
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


    {!! Form::model($documents, [
        'method' => 'PATCH',
        'url' => ['/client/documents', $documents->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editdocuments') }}</span>
            </div>

            <div class="panel-body">





            
        <div class="row">        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('name', trans('name'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

            <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}} col-xs-6">
                {!! Form::label('type', trans('type'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('type',config('array.documents_type'), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('version') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('version', trans('version'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('version', null, ['class' => 'form-control']) !!}
                {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('parent') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('parent', trans('parent'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::select('parent',$documentsList, null, ['class' => 'form-control']) !!}
                {!! $errors->first('parent', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        

                <div class="row">


                    <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}  col-xs-12">
                        {!! Form::label('body', trans('general.body'), ['class' => 'col-sm-12 control-label ' ,'style'=>'text-align:left;']) !!}
                        <div class="col-sm-12">
                            {!! Form::textarea('body', null, ['class' => 'form-control','id'=>'editor1']) !!}
                            {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
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