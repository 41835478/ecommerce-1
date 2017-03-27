@extends('common.layouts.main')

@section('title', trans('general.cms_page_content'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_page_content.cms_page_content') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_page_content.cms_page_content') }}</a></li>
                        <li class="active">{{ trans('cms_page_content.cms_page_contentCreate') }}</li>
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

    {!! Form::model($request,['url' => '/admin/cms_page_content', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('cms_page_content.addcms_page_content') }}</span>
            </div>

            <div class="panel-body">





        <div class="form-group {{ $errors->has("module_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("module_id", trans("cms_page_content.module_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("module_id", null, ["class" => "form-control","placeholder"=> trans("cms_page_content.module_id")]) !!}
    {!! $errors->first("module_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("type") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("type", trans("cms_page_content.type"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("type", null, ["class" => "form-control","placeholder"=> trans("cms_page_content.type")]) !!}
    {!! $errors->first("type", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("cms_page_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("cms_page_id", trans("cms_page_content.cms_page_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("cms_page_id", null, ["class" => "form-control","placeholder"=> trans("cms_page_content.cms_page_id")]) !!}
    {!! $errors->first("cms_page_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("module_name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("module_name", trans("cms_page_content.module_name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("module_name", null, ["class" => "form-control","placeholder"=> trans("cms_page_content.module_name")]) !!}
    {!! $errors->first("module_name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("order") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("order", trans("cms_page_content.order"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("order", null, ["class" => "form-control","placeholder"=> trans("cms_page_content.order")]) !!}
    {!! $errors->first("order", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("float") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("float", trans("cms_page_content.float"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("float",config('array.cms_page_content_float'), null, ["class" => "form-control","placeholder"=> trans("cms_page_content.float")]) !!}
    {!! $errors->first("float", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("display") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("display", trans("cms_page_content.display"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("display",config('array.cms_page_content_display'), null, ["class" => "form-control","placeholder"=> trans("cms_page_content.display")]) !!}
    {!! $errors->first("display", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("position") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("position", trans("cms_page_content.position"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("position", null, ["class" => "form-control","placeholder"=> trans("cms_page_content.position")]) !!}
    {!! $errors->first("position", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("all_pages") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("all_pages", trans("cms_page_content.all_pages"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("all_pages", null, ["class" => "form-control","placeholder"=> trans("cms_page_content.all_pages")]) !!}
    {!! $errors->first("all_pages", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("created_at") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("created_at", trans("cms_page_content.created_at"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("created_at", null, ["class" => "form-control","placeholder"=> trans("cms_page_content.created_at")]) !!}
    {!! $errors->first("created_at", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("updated_at") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("updated_at", trans("cms_page_content.updated_at"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("updated_at", null, ["class" => "form-control","placeholder"=> trans("cms_page_content.updated_at")]) !!}
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