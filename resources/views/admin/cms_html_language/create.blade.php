@extends('common.layouts.main')

@section('title', trans('general.cms_html_language'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_html_language.cms_html_language') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_html_language.cms_html_language') }}</a></li>
                        <li class="active">{{ trans('cms_html_language.cms_html_languageCreate') }}</li>
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

    {!! Form::model($request,['url' => '/admin/cms_html_language', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('cms_html_language.addcms_html_language') }}</span>
            </div>

            <div class="panel-body">





        <div class="form-group {{ $errors->has("cms_html_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("cms_html_id", trans("cms_html_language.cms_html_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("cms_html_id", null, ["class" => "form-control","placeholder"=> trans("cms_html_language.cms_html_id")]) !!}
    {!! $errors->first("cms_html_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>




                <div class="form-group {{ $errors->has("cms_language_id") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("cms_language_id", trans("general.language"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("cms_language_id",config('app.language'), null, ["class" => "form-control","placeholder"=> trans("general.language")]) !!}
                        {!! $errors->first("cms_language_id", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>


    

        <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("name", trans("cms_html_language.name"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("cms_html_language.name")]) !!}
    {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("body") ? "has-error" : ""}}  col-xs-12">
{!! Form::label("body", trans("cms_html_language.body"), ["class" => "col-sm-12"]) !!}
<div class="col-sm-12">
    {!! Form::textarea("body", null, ["class" => "form-control","placeholder"=> trans("cms_html_language.body")]) !!}
    {!! $errors->first("body", "<p class='help-block'>:message</p>") !!}
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