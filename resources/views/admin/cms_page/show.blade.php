@extends('common.layouts.main')
@section('title', trans('cms_page.cms_page'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.cms_page.edit');
    $canDestroy=canAccess('admin.cms_page.destroy');

    $canCmsArticleRelation=canAccess('admin.cms_article.relation');
    $canCmsArticleEdit=canAccess('admin.cms_article.edit');
    $canCmsArticleDestroy=canAccess('admin.cms_article.destroy');
    $canCmsArticleCreate=canAccess('admin.cms_article.create');
    $canCmsArticleShow=canAccess('admin.cms_article.show');

    $canCmsFormRelation=canAccess('admin.cms_form.relation');
    $canCmsFormEdit=canAccess('admin.cms_form.edit');
    $canCmsFormDestroy=canAccess('admin.cms_form.destroy');
    $canCmsFormCreate=canAccess('admin.cms_form.create');
    $canCmsFormShow=canAccess('admin.cms_form.show');

    $canCmsPageContentRelation=canAccess('admin.cms_page_content.relation');
    $canCmsPageContentEdit=canAccess('admin.cms_page_content.edit');
    $canCmsPageContentDestroy=canAccess('admin.cms_page_content.destroy');
    $canCmsPageContentCreate=canAccess('admin.cms_page_content.create');
    $canCmsPageContentShow=canAccess('admin.cms_page_content.show');

    $canCmsPageContentPageRelation=canAccess('admin.cms_page_content_page.relation');
    $canCmsPageContentPageEdit=canAccess('admin.cms_page_content_page.edit');
    $canCmsPageContentPageDestroy=canAccess('admin.cms_page_content_page.destroy');
    $canCmsPageContentPageCreate=canAccess('admin.cms_page_content_page.create');
    $canCmsPageContentPageShow=canAccess('admin.cms_page_content_page.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('cms_page.cms_page') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('cms_page.cms_page') }}</a></li>
                            <li class="active">{{ trans('cms_page.details') }}</li>
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
                <span class="panel-title">{{ trans('cms_page.cms_pageInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_page.cms_page_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_page['cms_page_id'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_page.cms_page_content_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_page['cms_page_content_id'] }}</label>
                        </div>
                    </div>

                    </div>




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">

@if($canEdit)
                            <a href="/admin/cms_page/{{ $cms_page['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('cms_page.edit')}}</a>
                        @endif
                        </div>
                        <div class=" col-xs-3">
                            @if($canDestroy)
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/admin/cms_page',$cms_page['id']]]) !!}
                            <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                <i class="fa fa-trash"></i>
                                {{trans('cms_page.delete')}}
                            </button>
                            {!! Form::close() !!}
                                @endif
                        </div>

                    </div>


                </div>
                <!-- row -->
            </div>







                            @if( $canCmsArticleRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_article.cms_articleTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_article.cms_articleTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsArticleCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_article.create')}}?cms_page_id={{$cms_page['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_article.cms_articleCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_article.id'), 'id', $oCmsArticleResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_article.name'), 'name', $oCmsArticleResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_article.body'), 'body', $oCmsArticleResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_article.cms_page_id'), 'cms_page_id', $oCmsArticleResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_article.created_at'), 'created_at', $oCmsArticleResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_article.updated_at'), 'updated_at', $oCmsArticleResults) !!}
                                                </th>

                                                @if($canCmsArticleShow
|| $canCmsArticleEdit
|| $canCmsArticleDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsArticleResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsArticleResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->name }}</td>

                                                                                                                <td>{{ $oResult->body }}</td>

                                                                                                                <td>{{ $oResult->cms_page_id }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsArticleDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_article',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsArticleEdit)
                                                                    <a href="/admin/cms_article/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsArticleShow )
                                                                    <a href="/admin/cms_article/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"></a>

@endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oCmsArticleResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsArticleResults->firstItem() }} {{trans('general.to')}} {{ $oCmsArticleResults->lastItem() }} {{trans('general.of')}} {{ $oCmsArticleResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsArticleResults->appends(Input::except('page_cms_article'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            @if( $canCmsFormRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_form.cms_formTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_form.cms_formTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsFormCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_form.create')}}?cms_page_id={{$cms_page['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_form.cms_formCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_form.id'), 'id', $oCmsFormResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_form.cms_page_id'), 'cms_page_id', $oCmsFormResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_form.name'), 'name', $oCmsFormResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_form.alias'), 'alias', $oCmsFormResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_form.created_at'), 'created_at', $oCmsFormResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_form.updated_at'), 'updated_at', $oCmsFormResults) !!}
                                                </th>

                                                @if($canCmsFormShow
|| $canCmsFormEdit
|| $canCmsFormDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsFormResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsFormResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->cms_page_id }}</td>

                                                                                                                <td>{{ $oResult->name }}</td>

                                                                                                                <td>{{ $oResult->alias }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsFormDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_form',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsFormEdit)
                                                                    <a href="/admin/cms_form/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsFormShow )
                                                                    <a href="/admin/cms_form/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"></a>

@endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oCmsFormResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsFormResults->firstItem() }} {{trans('general.to')}} {{ $oCmsFormResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsFormResults->appends(Input::except('page_cms_form'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            @if( $canCmsPageContentRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_page_content.cms_page_contentTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_page_content.cms_page_contentTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsPageContentCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_page_content.create')}}?cms_page_id={{$cms_page['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_page_content.cms_page_contentCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_page_content.id'), 'id', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_page_content.module_id'), 'module_id', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_page_content.type'), 'type', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_page_content.cms_page_id'), 'cms_page_id', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_page_content.module_name'), 'module_name', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_page_content.order'), 'order', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('cms_page_content.float'), 'float', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                    {!! th_sort(trans('cms_page_content.display'), 'display', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                    {!! th_sort(trans('cms_page_content.position'), 'position', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                    {!! th_sort(trans('cms_page_content.all_pages'), 'all_pages', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                    {!! th_sort(trans('cms_page_content.created_at'), 'created_at', $oCmsPageContentResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                    {!! th_sort(trans('cms_page_content.updated_at'), 'updated_at', $oCmsPageContentResults) !!}
                                                </th>

                                                @if($canCmsPageContentShow
|| $canCmsPageContentEdit
|| $canCmsPageContentDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsPageContentResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsPageContentResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->module_id }}</td>

                                                                                                                <td>{{ $oResult->type }}</td>

                                                                                                                <td>{{ $oResult->cms_page_id }}</td>

                                                                                                                <td>{{ $oResult->module_name }}</td>

                                                                                                                <td>{{ $oResult->order }}</td>

                                                                                                                <td>{{ $oResult->float }}</td>

                                                                                                                <td>{{ $oResult->display }}</td>

                                                                                                                <td>{{ $oResult->position }}</td>

                                                                                                                <td>{{ $oResult->all_pages }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsPageContentDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_page_content',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsPageContentEdit)
                                                                    <a href="/admin/cms_page_content/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsPageContentShow )
                                                                    <a href="/admin/cms_page_content/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"></a>

@endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oCmsPageContentResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsPageContentResults->firstItem() }} {{trans('general.to')}} {{ $oCmsPageContentResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsPageContentResults->appends(Input::except('page_cms_page_content'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            @if( $canCmsPageContentPageRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_page_content_page.cms_page_content_pageTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_page_content_page.cms_page_content_pageTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsPageContentPageCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_page_content_page.create')}}?cms_page_id={{$cms_page['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_page_content_page.cms_page_content_pageCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_page_content_page.id'), 'id', $oCmsPageContentPageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_page_content_page.cms_page_id'), 'cms_page_id', $oCmsPageContentPageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_page_content_page.cms_page_content_id'), 'cms_page_content_id', $oCmsPageContentPageResults) !!}
                                                </th>

                                                @if($canCmsPageContentPageShow
|| $canCmsPageContentPageEdit
|| $canCmsPageContentPageDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsPageContentPageResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsPageContentPageResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->cms_page_id }}</td>

                                                                                                                <td>{{ $oResult->cms_page_content_id }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsPageContentPageDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_page_content_page',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsPageContentPageEdit)
                                                                    <a href="/admin/cms_page_content_page/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsPageContentPageShow )
                                                                    <a href="/admin/cms_page_content_page/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"></a>

@endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oCmsPageContentPageResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsPageContentPageResults->firstItem() }} {{trans('general.to')}} {{ $oCmsPageContentPageResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsPageContentPageResults->appends(Input::except('page_cms_page_content_page'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            






            <div class="panel-footer text-right">
                {{--<a href="{{ route('/client/product_list') }}">--}}
                    {{--<button type="submit" class="btn btn-primary"--}}
                            {{--name="edit_id">{{ trans('accounts::accounts.edit') }}</button>--}}
                {{--</a>--}}
            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



@stop