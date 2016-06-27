@extends('client.layouts.main')
@section('title', trans('accounts::accounts.addAccount'))
@section('content')
    <div id="content-wrapper">
        <div class="page-header">
            <h1>{{ trans('accounts::accounts.addAccount') }}</h1>
        </div>
        {!! Form::open(['class'=>'panel form-horizontal']) !!}
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group no-margin-hr">
                        <label class="control-label">{{ trans('accounts::accounts.first_name') }}</label>
                        {!! Form::text('first_name',$product_list['name'],['class'=>'form-control']) !!}
                    </div>
                </div>
                <!-- col-sm-6 -->
                <div class="col-sm-6">
                    <div class="form-group no-margin-hr">
                        <label class="control-label">{{ trans('accounts::accounts.last_name') }}</label>
                        {!! Form::text('last_name',$product_list['deleted'],['class'=>'form-control']) !!}
                    </div>
                </div>
                <!-- col-sm-6 -->
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group no-margin-hr">
                        <label class="control-label">{{ trans('accounts::accounts.Email') }}</label>
                        {!! Form::text('email',$product_list['description'],['class'=>'form-control']) !!}
                    </div>
                </div>
                <!-- col-sm-6 -->
                <!-- col-sm-6 -->
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group no-margin-hr">
                        <label class="control-label">{{ trans('accounts::accounts.Nickname') }}</label>
                        {!! Form::text('nickname',$product_list['created_at'],['class'=>'form-control']) !!}
                    </div>
                </div>
                <!-- col-sm-6 -->
                <div class="col-sm-6">
                    <div class="form-group no-margin-hr">
                        <label class="control-label">{{ trans('accounts::accounts.address') }}</label>
                        {!! Form::text('address',$product_list['modified_at'],['class'=>'form-control']) !!}

                    </div>
                </div>
                <!-- col-sm-6 -->
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group no-margin-hr">
                        <label class="control-label">{{ trans('accounts::accounts.Birthday') }}</label>
                        {!! Form::text('birthday',$product_list['created_by_id'],['class'=>'form-control']) !!}
                    </div>
                </div>
                <!-- col-sm-6 -->
                <div class="col-sm-6">
                    <div class="form-group no-margin-hr">
                        <label class="control-label">{{ trans('accounts::accounts.Phone') }}</label>
                        {!! Form::text('phone',$product_list['modified_by_id'],['class'=>'form-control']) !!}

                    </div>
                </div>
                <!-- col-sm-6 -->
            </div>
            <!-- row -->

            <div class="row">

                <!-- col-sm-6 -->
                <div class="col-sm-6">
                    <div class="form-group no-margin-hr">
                        <label class="control-label">{{ trans('accounts::accounts.City') }}</label>
                        {!! Form::text('city',$product_list['assigned_user_id'],['class'=>'form-control']) !!}
                    </div>

                </div>
                <!-- col-sm-6 -->

                <div class="col-sm-6">
                    <div class="form-group no-margin-hr">
                        <label class="control-label">{{ trans('accounts::accounts.ZipCode') }}</label>
                        {!! Form::text('zip_code',$product_list['product_id'],['class'=>'form-control']) !!}
                    </div>
                </div>
                <!-- col-sm-6 -->
            </div>
            <!-- row -->
        </div>
        {!!   View('admin/partials/messages')->with('errors',$errors) !!}
        <div class="panel-footer text-right">
            <button type="submit" class="btn btn-primary" name="edit_id"
                    value="{{ $product_list['id']  or 0 }}">{{ trans('accounts::accounts.save') }}</button>
        </div>

        {!! Form::close() !!}
    </div>
@stop
@section("script")
    @parent
@stop