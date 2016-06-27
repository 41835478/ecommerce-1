@extends('client.layouts.main')
@section('title', trans('accounts::accounts.addAccount'))
@section('content')
    <div id="content-wrapper">

        <div class="page-header">
            <h1>{{ trans('accounts::accounts.details') }}</h1>
        </div>


        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('accounts::accounts.details') }}</span>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.name') }}  </label>
                        </div>
                    </div>
                    <!-- ol-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['id'] }}</label>
                        </div>
                    </div>
                    <!--ol-sm-6 -->

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.nickname') }}  </label>
                        </div>
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['name'] }}</label>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.email') }}  </label>
                        </div>
                    </div>
                    <!-- ol-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['deleted'] }}</label>
                        </div>
                    </div>
                    <!--ol-sm-6 -->



                    <!-- ol-sm-6 -->

                    <!-- row -->
                </div>

                <div class="row">
                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.address :') }}  </label>
                        </div>
                    </div>
                    <!-- ol-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['description'] }}</label>
                        </div>
                    </div>
                    <!--ol-sm-6 -->

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.birthday') }}  </label>
                        </div>
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['created_at'] }}</label>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.phone') }}  </label>
                        </div>
                    </div>
                    <!-- ol-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['modified_at'] }}</label>
                        </div>
                    </div>
                    <!--ol-sm-6 -->

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.country') }}  </label>
                        </div>
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['created_by_id'] }}</label>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.city') }}  </label>
                        </div>
                    </div>
                    <!-- ol-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['modified_by_id'] }}</label>
                        </div>
                    </div>
                    <!--ol-sm-6 -->

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.zip_code') }} </label>
                        </div>
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['assigned_user_id'] }}</label>
                        </div>
                    </div>


                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.lastLogin') }}: </label>
                        </div>
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['product_id'] }}</label>
                        </div>
                    </div>


                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('accounts::accounts.registrationDate') }}: </label>
                        </div>
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$product_list['type'] }}</label>
                        </div>
                    </div>


                </div>
                <!-- row -->
            </div>
            <div class="panel-footer text-right">
                {{--<a href="{{ route('/client/product_list') }}">--}}
                    {{--<button type="submit" class="btn btn-primary"--}}
                            {{--name="edit_id">{{ trans('accounts::accounts.edit') }}</button>--}}
                {{--</a>--}}
            </div>

        </div>
    </div>


@stop