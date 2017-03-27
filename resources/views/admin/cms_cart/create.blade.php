@extends('common.layouts.main')

@section('title', trans('general.cms_cart'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_cart.cms_cart') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_cart.cms_cart') }}</a></li>
                        <li class="active">{{ trans('cms_cart.cms_cartCreate') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" method="get" action="" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">

    {!! Form::model($request,['url' => '/admin/cms_cart', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('cms_cart.addcms_cart') }}</span>
            </div>

            <div class="panel-body">





        <div class="form-group {{ $errors->has("users_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("users_id", trans("cms_cart.users_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("users_id", null, ["class" => "form-control","placeholder"=> trans("cms_cart.users_id")]) !!}
    {!! $errors->first("users_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("cms_product_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("cms_product_id", trans("cms_cart.cms_product_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("cms_product_id", null, ["class" => "form-control","placeholder"=> trans("cms_cart.cms_product_id")]) !!}
    {!! $errors->first("cms_product_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("option") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("option", trans("cms_cart.option"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("option", null, ["class" => "form-control","placeholder"=> trans("cms_cart.option")]) !!}
    {!! $errors->first("option", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("quantity") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("quantity", trans("cms_cart.quantity"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("quantity", null, ["class" => "form-control","placeholder"=> trans("cms_cart.quantity")]) !!}
    {!! $errors->first("quantity", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("created_at") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("created_at", trans("cms_cart.created_at"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("created_at", null, ["class" => "form-control","placeholder"=> trans("cms_cart.created_at")]) !!}
    {!! $errors->first("created_at", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("updated_at") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("updated_at", trans("cms_cart.updated_at"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("updated_at", null, ["class" => "form-control","placeholder"=> trans("cms_cart.updated_at")]) !!}
    {!! $errors->first("updated_at", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    





        <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">
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