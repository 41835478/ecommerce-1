@extends('client.layouts.main')

@section('title', trans('general.server_detail'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.server_detail') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.server_detail') }}</a></li>
                        <li class="active">{{ trans('general.editserver_detail') }}</li>
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


    {!! Form::model($server_detail, [
        'method' => 'PATCH',
        'url' => ['/client/server_detail', $server_detail->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('general.editserver_detail') }}</span>
            </div>

            <div class="panel-body">






                <div class="row">

                    <div class="form-group {{ $errors->has('server_company_spec_id') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('server_company_spec_id', trans('general.server_company_spec_id'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('server_spec_id',$serverSpecList, null, ['class' => 'form-control']) !!}
                            {!! $errors->first('server_company_spec_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('name', trans('general.name'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="row">



                    <div class="form-group {{ $errors->has('company_id') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('company_id', trans('general.company'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('company_id',config('array.server_detail_company'), null, ['class' => 'form-control']) !!}
                            {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('location', trans('general.location'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('location',config('array.server_detail_location'), null, ['class' => 'form-control']) !!}
                            {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                </div>


                <div class="row">

                    <div class="form-group {{ $errors->has('unique_name') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('unique_name', trans('general.unique_name'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('unique_name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('unique_name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('cost', trans('general.cost'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('cost', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <div class="row">



                    <div class="form-group {{ $errors->has('operating_system') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('operating_system', trans('general.operating_system'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('operating_system',config('array.server_detail_systems'), null, ['class' => 'form-control']) !!}
                            {!! $errors->first('operating_system', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('control_panel') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('control_panel', trans('general.control_panel'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('control_panel',config('array.server_detail_panel'), null, ['class' => 'form-control']) !!}
                            {!! $errors->first('control_panel', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                </div>




                <div class="row">



                    <div class="form-group {{ $errors->has('period') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('period', trans('general.period'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('period',config('array.server_detail_period'), null, ['class' => 'form-control']) !!}
                            {!! $errors->first('period', '<p class="help-block">:message</p>') !!}
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