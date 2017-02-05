@extends('client.layouts.main')

@section('title', trans('general.company'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.company') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.company') }}</a></li>
                        <li class="active">{{ trans('general.editcompany') }}</li>
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


    {!! Form::model($company, [
        'method' => 'PATCH',
        'url' => ['/client/company', $company->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editcompany') }}</span>
            </div>

            <div class="panel-body">





            
        <div class="row">
                
                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('name', trans('name'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} col-xs-6">
                {!! Form::label('email', trans('email'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>        
        <div class="row">
                
                <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('phone', trans('phone'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
            </div>
        </div>


            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}} col-xs-6">
                {!! Form::label('status', trans('status'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('website') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('website', trans('website'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('website', null, ['class' => 'form-control']) !!}
                {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('address', trans('address'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('country') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('country', trans('country'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('country', null, ['class' => 'form-control']) !!}
                {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
                
                <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('city', trans('city'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('city', null, ['class' => 'form-control']) !!}
                {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </div>        
        <div class="row">        <div class="form-group {{ $errors->has('zipcode') ? 'has-error' : ''}} col-xs-6">
            {!! Form::label('zipcode', trans('zipcode'), ['class' => 'col-sm-4 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
                {!! $errors->first('zipcode', '<p class="help-block">:message</p>') !!}
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
                </div>
            </div>
        </div>
    </div>
@endsection