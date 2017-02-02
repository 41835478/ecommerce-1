@extends('admin.layouts.main')

@section('title', trans('general.emails'))
@section('content')

    <div id="content-wrapper">
    <h1>Edit Emails</h1>
    <hr/>

    {!! Form::model($emails, [
        'method' => 'PATCH',
        'url' => ['/admin/emails', $emails->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editemails') }}</span>
            </div>

            <div class="panel-body">





            
        <div class="row">        <div class="form-group {{ $errors->has('id') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('id', trans('id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('contacts_id') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('contacts_id', trans('contacts_id'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('contacts_id', null, ['class' => 'form-control']) !!}
                {!! $errors->first('contacts_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('email', trans('email'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('module') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('module', trans('module'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('module', null, ['class' => 'form-control']) !!}
                {!! $errors->first('module', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('status', trans('status'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('optout') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('optout', trans('optout'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('optout', null, ['class' => 'form-control']) !!}
                {!! $errors->first('optout', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        


        <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
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
@endsection