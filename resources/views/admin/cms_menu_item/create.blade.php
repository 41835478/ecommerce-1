@extends('common.layouts.main')

@section('title', trans('general.cms_menu_item'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_menu_item.cms_menu_item') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_menu_item.cms_menu_item') }}</a></li>
                        <li class="active">{{ trans('cms_menu_item.cms_menu_itemCreate') }}</li>
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

    {!! Form::model($request,['url' => '/admin/cms_menu_item', 'class' => 'form-horizontal']) !!}





        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('cms_menu_item.addcms_menu_item') }}</span>
            </div>

            <div class="panel-body">







                <div class="row">


                    <div class="form-group {{ $errors->has('module_type') ? 'has-error' : ''}}  col-xs-6">
                        {!! Form::label('module_type', trans('cms_menu_item.module_type'), ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('module_type',config('array.cms_menu_item_module_type'), null, ['class' => 'form-control','onChange'=>'changeSelectedView("module_type","moduleId_","module_id");','id'=>'module_type']) !!}
                            {!! $errors->first('module_type', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>



                    <div class="form-group {{ $errors->has("module_id") ? "has-error" : ""}}  col-xs-6 moduleId_"  id="moduleId_{{config('array.pageTypeIndex')}}"@if( isset($request->module_type) && config('array.pageTypeIndex')!=$request->module_type ) style="display: none" @endif>
                        {!! Form::label("module_id", trans("cms_menu_item.page"), ["class" => "col-sm-4 control-label"]) !!}
                        <div class="col-sm-8">
                            {!! Form::select(((config('array.pageTypeIndex')==$request->module_type || $request->module_type =='')? 'module_id':''),$cmsPageList, null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.module_id")]) !!}
                            {!! $errors->first("module_id", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>



                    <div class="form-group {{ $errors->has("module_id") ? "has-error" : ""}}  col-xs-6 moduleId_"  id="moduleId_{{config('array.articleTypeIndex')}}"@if( config('array.articleTypeIndex')!=$request->module_type ) style="display: none" @endif>
                        {!! Form::label("module_id", trans("cms_menu_item.article"), ["class" => "col-sm-4 control-label"]) !!}
                        <div class="col-sm-8">
                            {!! Form::select(((config('array.articleTypeIndex')==$request->module_type )? 'module_id':''),$cmsArticleList, null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.module_id")]) !!}
                            {!! $errors->first("module_id", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>



                    <div class="form-group {{ $errors->has("module_id") ? "has-error" : ""}}  col-xs-6 moduleId_"  id="moduleId_{{config('array.formTypeIndex')}}"@if( config('array.formTypeIndex')!=$request->module_type ) style="display: none" @endif>
                        {!! Form::label("module_id", trans("cms_menu_item.form"), ["class" => "col-sm-4 control-label"]) !!}
                        <div class="col-sm-8">
                            {!! Form::select(((config('array.formTypeIndex')==$request->module_type )? 'module_id':''),$cmsFormList, null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.module_id")]) !!}
                            {!! $errors->first("module_id", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has("module_id") ? "has-error" : ""}}  col-xs-6 moduleId_"  id="moduleId_{{config('array.categoryTypeIndex')}}"@if( config('array.categoryTypeIndex')!=$request->module_type ) style="display: none" @endif>
                        {!! Form::label("module_id", trans("cms_menu_item.category"), ["class" => "col-sm-4 control-label"]) !!}
                        <div class="col-sm-8">
                            {!! Form::select(((config('array.categoryTypeIndex')==$request->module_type )? 'module_id':''),$cmsCategoryList, null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.module_id")]) !!}
                            {!! $errors->first("module_id", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has("module_id") ? "has-error" : ""}}  col-xs-6 moduleId_"  id="moduleId_{{config('array.productTypeIndex')}}"@if( config('array.productTypeIndex')!=$request->module_type ) style="display: none" @endif>
                        {!! Form::label("module_id", trans("cms_menu_item.product"), ["class" => "col-sm-4 control-label"]) !!}
                        <div class="col-sm-8">
                            {!! Form::select(((config('array.productTypeIndex')==$request->module_type )? 'module_id':''),$cmsProductList, null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.module_id")]) !!}
                            {!! $errors->first("module_id", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has("module_id") ? "has-error" : ""}}  col-xs-6 moduleId_"  id="moduleId_{{config('array.urlTypeIndex')}}"@if( config('array.urlTypeIndex')!=$request->module_type ) style="display: none" @endif>
                        {!! Form::label("module_id", trans("cms_menu_item.url"), ["class" => "col-sm-4 control-label"]) !!}
                        <div class="col-sm-8">
                            {!! Form::text(((config('array.urlTypeIndex')==$request->module_type )? 'module_id':''), '', ["class" => "form-control","placeholder"=> trans("cms_menu_item.module_id")]) !!}
                            {!! $errors->first("module_id", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>



                </div>














                <div class="form-group {{ $errors->has("name") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("name", trans("cms_menu_item.name"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("name", null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.name")]) !!}
                        {!! $errors->first("name", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>




                <div class="form-group {{ $errors->has("cms_menu_id") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("cms_menu_id", trans("cms_menu.cms_menu"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::select("cms_menu_id",$cmsMenuList, null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.cms_menu_id")]) !!}
                        {!! $errors->first("cms_menu_id", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>






        <div class="form-group {{ $errors->has("parent_item_id") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("parent_item_id", trans("cms_menu_item.parent_item_id"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("parent_item_id",[0=>trans('general.selectOne')]+$cmsMenuItemList->all(), null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.parent_item_id")]) !!}
    {!! $errors->first("parent_item_id", "<p class='help-block'>:message</p>") !!}
</div>
</div>





                <div class="form-group {{ $errors->has("order") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("order", trans("cms_menu_item.order"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("order", null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.order")]) !!}
                        {!! $errors->first("order", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>
    

        <div class="form-group {{ $errors->has("disable") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("disable", trans("cms_menu_item.disable"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("disable",config('array.cms_menu_item_disable'), null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.disable")]) !!}
    {!! $errors->first("disable", "<p class='help-block'>:message</p>") !!}
</div>
</div>

    

        <div class="form-group {{ $errors->has("hide") ? "has-error" : ""}}  col-xs-6">
{!! Form::label("hide", trans("cms_menu_item.hide"), ["class" => "col-sm-4 control-label"]) !!}
<div class="col-sm-8">
    {!! Form::select("hide",config('array.cms_menu_item_hide'), null, ["class" => "form-control","placeholder"=> trans("cms_menu_item.hide")]) !!}
    {!! $errors->first("hide", "<p class='help-block'>:message</p>") !!}
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