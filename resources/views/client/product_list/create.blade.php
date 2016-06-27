@extends('client.layouts.main')

@section('content')
<div class="container">

    <div id="content-wrapper">
    <h1>Create New Career Center</h1>
    <hr/>

    {!! Form::open(['url' => '/client/product_list', 'class' => 'form-horizontal']) !!}


                <div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
                {!! Form::label('id', trans('id'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            {!! Form::label('name', trans('name'), ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
            <div class="form-group {{ $errors->has('deleted') ? 'has-error' : ''}}">
                {!! Form::label('deleted', trans('deleted'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('deleted', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('deleted', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', trans('description'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
                {!! Form::label('created_at', trans('created_at'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('created_at', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('modified_at') ? 'has-error' : ''}}">
                {!! Form::label('modified_at', trans('modified_at'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('modified_at', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('modified_at', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('created_by_id') ? 'has-error' : ''}}">
                {!! Form::label('created_by_id', trans('created_by_id'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('created_by_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('created_by_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('modified_by_id') ? 'has-error' : ''}}">
                {!! Form::label('modified_by_id', trans('modified_by_id'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('modified_by_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('modified_by_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('assigned_user_id') ? 'has-error' : ''}}">
                {!! Form::label('assigned_user_id', trans('assigned_user_id'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('assigned_user_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('assigned_user_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
                {!! Form::label('product_id', trans('product_id'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('product_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

        <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
            {!! Form::label('type', trans('type'), ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('type', null, ['class' => 'form-control']) !!}
                {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('version_id') ? 'has-error' : ''}}">
            {!! Form::label('version_id', trans('version_id'), ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('version_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('version_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('version') ? 'has-error' : ''}}">
            {!! Form::label('version', trans('version'), ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('version', null, ['class' => 'form-control']) !!}
                {!! $errors->first('version', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('download_id') ? 'has-error' : ''}}">
            {!! Form::label('download_id', trans('download_id'), ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('download_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('download_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('knowledge_base_article_id') ? 'has-error' : ''}}">
            {!! Form::label('knowledge_base_article_id', trans('knowledge_base_article_id'), ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('knowledge_base_article_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('knowledge_base_article_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>



        <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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
@endsection