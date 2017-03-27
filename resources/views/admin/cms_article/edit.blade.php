@extends('common.layouts.main')

@section('title', trans('general.cms_article'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_article.cms_article') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_article.cms_article') }}</a></li>
                        <li class="active">{{ trans('cms_article.editcms_article') }}</li>
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
                <span class="panel-title">{{ trans('cms_article.editcms_article') }}</span>
            </div>

            <div class="panel-body">


                {!! Form::model($request, ['method'=>'get','class' => 'form-horizontal','id'=>'chaneLanguageForm' ]) !!}

                <div class="form-group {{ $errors->has("cms_language_id") ? "has-error" : ""}}  col-xs-4">
                    {!! Form::label("cms_language_id", trans("cms_article.cms_language"), ["class" => "col-sm-4 "]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("cms_language_id",config('app.language'), null, ["onchange"=>"$('#chaneLanguageForm').submit();","class" => "form-control","placeholder"=> trans("cms_article.name")]) !!}
                        {!! $errors->first("cms_language_id", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>

                {!! Form::close() !!}




                {!! Form::model($cms_article, [
                    'url' => ['/admin/cms_article_language'],
                    'class' => 'form-horizontal'
                ]) !!}



                <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-4">
                    {!! Form::label("name", trans("cms_article.name"), ["class" => "col-sm-4 "]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("cms_article.name")]) !!}
                        {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("cms_page_id") ? "has-error" : ""}}  col-xs-4">
                    {!! Form::label("cms_page_id", trans("cms_article.cms_page_id"), ["class" => "col-sm-4 "]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("cms_page_id",$cmsPageList, null, ["class" => "form-control","placeholder"=> trans("cms_article.cms_page_id")]) !!}
                        {!! $errors->first("cms_page_id", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("body") ? "has-error" : ""}}  col-xs-12">
                    {!! Form::label("body", trans("cms_article.body"), ["class" => "col-sm-12"]) !!}
                    <div class="col-sm-12">
                        {!! Form::textarea("body", null, ["class" => "form-control","placeholder"=> trans("cms_article.body")]) !!}
                        {!! $errors->first("body", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>




    

        <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">
            {!! Form::hidden("cms_language_id", (isset($request->cms_language_id))? $request->cms_language_id:config('app.default_language')) !!}
            {!! Form::hidden("cms_article_id", $cms_article->id) !!}

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