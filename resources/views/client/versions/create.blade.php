@extends('client.layouts.main')

@section('title', trans('general.versions'))
@section('content')

    <div id="content-wrapper">
    <h1>Create New Versions</h1>
    <hr/>

    {!! Form::open(['url' => '/client/versions', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.addversions') }}</span>
            </div>

            <div class="panel-body">




            
        <div class="row">
        <div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('id', trans('general.id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('products_id') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('products_id', trans('general.products_id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('products_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('products_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">
        <div class="form-group {{ $errors->has('version') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('version', trans('general.version'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('version', null, ['class' => 'form-control']) !!}
                {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
        
        <div class="form-group {{ $errors->has('manual') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('manual', trans('general.manual'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('manual', null, ['class' => 'form-control']) !!}
                {!! $errors->first('manual', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">
        <div class="form-group {{ $errors->has('articale') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('articale', trans('general.articale'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('articale', null, ['class' => 'form-control']) !!}
                {!! $errors->first('articale', '<p class="help-block">:message</p>') !!}
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
        <div class="form-group {{ $errors->has('release_notes') ? 'has-error' : ''}}  col-xs-6">
            {!! Form::label('release_notes', trans('general.release_notes'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('release_notes', null, ['class' => 'form-control']) !!}
                {!! $errors->first('release_notes', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                






        <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
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
@endsection