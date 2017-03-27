@extends('common.layouts.main')

@section('title', trans('general.cms_content'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_content.cms_content') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_content.cms_content') }}</a></li>
                        <li class="active">{{ trans('cms_content.editcms_content') }}</li>
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


    {!! Form::model($cms_content, [
        'method' => 'PATCH',
        'url' => ['/admin/cms_content', $cms_content->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('cms_content.editcms_content') }}</span>
            </div>

            <div class="panel-body">




                

        <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name", trans("cms_content.name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("cms_content.name")]) !!}
    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("body") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("body", trans("cms_content.body"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("body", null, ["class" => "form-control","placeholder"=> trans("cms_content.body")]) !!}
    {!! $errors->first("body", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("created_at") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("created_at", trans("cms_content.created_at"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("created_at", null, ["class" => "form-control","placeholder"=> trans("cms_content.created_at")]) !!}
    {!! $errors->first("created_at", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("updated_at") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("updated_at", trans("cms_content.updated_at"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("updated_at", null, ["class" => "form-control","placeholder"=> trans("cms_content.updated_at")]) !!}
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