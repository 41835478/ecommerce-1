@extends('common.layouts.main')

@section('title', trans('general.cms_product'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_product.cms_product') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_product.cms_product') }}</a></li>
                        <li class="active">{{ trans('cms_product.cms_productCreate') }}</li>
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

                        {!! Form::model($request,['url' => '/admin/cms_product_description', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('cms_product.addcms_product') }}</span>
            </div>

            <div class="panel-body">





        <div class="form-group {{ $errors->has("cms_category_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("cms_category_id", trans("cms_product.cms_category_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("cms_category_id",$cmsCategoryList, null, ["class" => "form-control","placeholder"=> trans("cms_product.cms_category_id")]) !!}
    {!! $errors->first("cms_category_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name", trans("cms_product.name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("cms_product.name")]) !!}
    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("description") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("description", trans("cms_product.description"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("description", null, ["class" => "form-control","placeholder"=> trans("cms_product.description")]) !!}
    {!! $errors->first("description", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("location") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("location", trans("cms_product.location"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("location", null, ["class" => "form-control","placeholder"=> trans("cms_product.location")]) !!}
    {!! $errors->first("location", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("quantity") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("quantity", trans("cms_product.quantity"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("quantity", null, ["class" => "form-control","placeholder"=> trans("cms_product.quantity")]) !!}
    {!! $errors->first("quantity", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("image") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("image", trans("cms_product.image"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("image", null, ["class" => "form-control","placeholder"=> trans("cms_product.image")]) !!}
    {!! $errors->first("image", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("shipping") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("shipping", trans("cms_product.shipping"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("shipping",config('array.cms_product_shipping'), null, ["class" => "form-control","placeholder"=> trans("cms_product.shipping")]) !!}
    {!! $errors->first("shipping", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("price") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("price", trans("cms_product.price"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("price", null, ["class" => "form-control","placeholder"=> trans("cms_product.price")]) !!}
    {!! $errors->first("price", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("points") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("points", trans("cms_product.points"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("points", null, ["class" => "form-control","placeholder"=> trans("cms_product.points")]) !!}
    {!! $errors->first("points", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("date_available") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("date_available", trans("cms_product.date_available"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("date_available", null, ["class" => "form-control","placeholder"=> trans("cms_product.date_available")]) !!}
    {!! $errors->first("date_available", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("weight") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("weight", trans("cms_product.weight"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("weight", null, ["class" => "form-control","placeholder"=> trans("cms_product.weight")]) !!}
    {!! $errors->first("weight", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("length") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("length", trans("cms_product.length"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("length", null, ["class" => "form-control","placeholder"=> trans("cms_product.length")]) !!}
    {!! $errors->first("length", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("width") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("width", trans("cms_product.width"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("width", null, ["class" => "form-control","placeholder"=> trans("cms_product.width")]) !!}
    {!! $errors->first("width", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("height") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("height", trans("cms_product.height"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("height", null, ["class" => "form-control","placeholder"=> trans("cms_product.height")]) !!}
    {!! $errors->first("height", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("subtract") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("subtract", trans("cms_product.subtract"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("subtract", null, ["class" => "form-control","placeholder"=> trans("cms_product.subtract")]) !!}
    {!! $errors->first("subtract", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("minimum") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("minimum", trans("cms_product.minimum"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("minimum", null, ["class" => "form-control","placeholder"=> trans("cms_product.minimum")]) !!}
    {!! $errors->first("minimum", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("sort_order") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("sort_order", trans("cms_product.sort_order"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("sort_order", null, ["class" => "form-control","placeholder"=> trans("cms_product.sort_order")]) !!}
    {!! $errors->first("sort_order", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("status", trans("cms_product.status"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("status",config('array.cms_product_status'), null, ["class" => "form-control","placeholder"=> trans("cms_product.status")]) !!}
    {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("viewed") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("viewed", trans("cms_product.viewed"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("viewed", null, ["class" => "form-control","placeholder"=> trans("cms_product.viewed")]) !!}
    {!! $errors->first("viewed", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    


    

        <div class="form-group {{ $errors->has("model") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("model", trans("cms_product.model"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("model", null, ["class" => "form-control","placeholder"=> trans("cms_product.model")]) !!}
    {!! $errors->first("model", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("sku") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("sku", trans("cms_product.sku"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("sku", null, ["class" => "form-control","placeholder"=> trans("cms_product.sku")]) !!}
    {!! $errors->first("sku", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("upc") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("upc", trans("cms_product.upc"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("upc", null, ["class" => "form-control","placeholder"=> trans("cms_product.upc")]) !!}
    {!! $errors->first("upc", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("ean") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("ean", trans("cms_product.ean"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("ean", null, ["class" => "form-control","placeholder"=> trans("cms_product.ean")]) !!}
    {!! $errors->first("ean", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("jan") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("jan", trans("cms_product.jan"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("jan", null, ["class" => "form-control","placeholder"=> trans("cms_product.jan")]) !!}
    {!! $errors->first("jan", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("isbn") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("isbn", trans("cms_product.isbn"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("isbn", null, ["class" => "form-control","placeholder"=> trans("cms_product.isbn")]) !!}
    {!! $errors->first("isbn", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("mpn") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("mpn", trans("cms_product.mpn"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("mpn", null, ["class" => "form-control","placeholder"=> trans("cms_product.mpn")]) !!}
    {!! $errors->first("mpn", "<p class='help-block'>:message</p>") !!}
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