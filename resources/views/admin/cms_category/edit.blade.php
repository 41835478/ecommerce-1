@extends('common.layouts.main')

@section('title', trans('general.cms_category'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_category.cms_category') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_category.cms_category') }}</a></li>
                        <li class="active">{{ trans('cms_category.editcms_category') }}</li>
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







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('cms_category.editcms_category') }}</span>
            </div>

            <div class="panel-body">




                {!! Form::model($request, ['method'=>'get','class' => 'form-horizontal','id'=>'chaneLanguageForm' ]) !!}

                <div class="form-group {{ $errors->has("cms_language_id") ? "has-error" : ""}}  col-xs-4">
                    {!! Form::label("cms_language_id", trans("cms_category.cms_language"), ["class" => "col-sm-4 "]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("cms_language_id",config('app.language'), null, ["onchange"=>"$('#chaneLanguageForm').submit();","class" => "form-control","placeholder"=> trans("cms_article.name")]) !!}
                        {!! $errors->first("cms_language_id", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>

                {!! Form::close() !!}

                {!! Form::model($cms_category,['url' => '/admin/cms_category_description', 'class' => 'form-horizontal']) !!}





                <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("name", trans("cms_category.name"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("cms_category.name")]) !!}
                        {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>




                <div class="form-group {{ $errors->has("parent_id") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("parent_id", trans("cms_category.parent"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("parent_id",[0=>trans('general.selectOne')]+$categoryList, null, ["class" => "form-control","placeholder"=> trans("cms_category.parent")]) !!}
                        {!! $errors->first("parent_id", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("status") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("status", trans("cms_category.status"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("status",config('array.cms_category_status'), null, ["class" => "form-control","placeholder"=> trans("cms_category.status")]) !!}
                        {!! $errors->first("status", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("sort_order") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("sort_order", trans("cms_category.sort_order"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("sort_order", null, ["class" => "form-control","placeholder"=> trans("cms_category.sort_order")]) !!}
                        {!! $errors->first("sort_order", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("column") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("column", trans("cms_category.column"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("column", null, ["class" => "form-control","placeholder"=> trans("cms_category.column")]) !!}
                        {!! $errors->first("column", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("place") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("place", trans("cms_category.place"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("place",config('array.cms_category_place'), null, ["class" => "form-control","placeholder"=> trans("cms_category.place")]) !!}
                        {!! $errors->first("place", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("image") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("image", trans("cms_category.image"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("image", null, ["class" => "form-control","placeholder"=> trans("cms_category.image")]) !!}
                        {!! $errors->first("image", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>




                <div class="form-group {{ $errors->has("description") ? "has-error" : ""}}  col-xs-12">
                    {!! Form::label("description", trans("cms_category.description"), ["class" => "col-sm-12"]) !!}
                    <div class="col-sm-12">
                        {!! Form::textarea("description", null, ["class" => "form-control","id"=>'editor1',"placeholder"=> trans("cms_category.description")]) !!}
                        {!! $errors->first("description", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>




                <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">

            {!! Form::hidden("cms_language_id", (isset($request->cms_language_id))? $request->cms_language_id:config('app.default_language')) !!}
            {!! Form::hidden("cms_category_id", $cms_category->id) !!}

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