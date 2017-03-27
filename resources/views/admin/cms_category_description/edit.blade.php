@extends('common.layouts.main')

@section('title', trans('general.cms_category_description'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_category_description.cms_category_description') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_category_description.cms_category_description') }}</a></li>
                        <li class="active">{{ trans('cms_category_description.editcms_category_description') }}</li>
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


    {!! Form::model($cms_category_description, [
        'method' => 'PATCH',
        'url' => ['/admin/cms_category_description', $cms_category_description->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('cms_category_description.editcms_category_description') }}</span>
            </div>

            <div class="panel-body">




                

        <div class="form-group {{ $errors->has("cms_category_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("cms_category_id", trans("cms_category_description.cms_category_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("cms_category_id", null, ["class" => "form-control","placeholder"=> trans("cms_category_description.cms_category_id")]) !!}
    {!! $errors->first("cms_category_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("cms_language_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("cms_language_id", trans("cms_category_description.cms_language_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("cms_language_id", null, ["class" => "form-control","placeholder"=> trans("cms_category_description.cms_language_id")]) !!}
    {!! $errors->first("cms_language_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name", trans("cms_category_description.name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("cms_category_description.name")]) !!}
    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("description") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("description", trans("cms_category_description.description"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("description", null, ["class" => "form-control","placeholder"=> trans("cms_category_description.description")]) !!}
    {!! $errors->first("description", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("meta_title") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("meta_title", trans("cms_category_description.meta_title"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("meta_title", null, ["class" => "form-control","placeholder"=> trans("cms_category_description.meta_title")]) !!}
    {!! $errors->first("meta_title", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("meta_description") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("meta_description", trans("cms_category_description.meta_description"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("meta_description", null, ["class" => "form-control","placeholder"=> trans("cms_category_description.meta_description")]) !!}
    {!! $errors->first("meta_description", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("meta_keyword") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("meta_keyword", trans("cms_category_description.meta_keyword"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("meta_keyword", null, ["class" => "form-control","placeholder"=> trans("cms_category_description.meta_keyword")]) !!}
    {!! $errors->first("meta_keyword", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("created_at") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("created_at", trans("cms_category_description.created_at"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("created_at", null, ["class" => "form-control","placeholder"=> trans("cms_category_description.created_at")]) !!}
    {!! $errors->first("created_at", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("updated_at") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("updated_at", trans("cms_category_description.updated_at"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("updated_at", null, ["class" => "form-control","placeholder"=> trans("cms_category_description.updated_at")]) !!}
    {!! $errors->first("updated_at", "<p class='help-block'>:message</p>") !!}
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