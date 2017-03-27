@extends('common.layouts.main')
@section('title', trans('cms_page_content.cms_page_content'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.cms_page_content.edit');
    $canDestroy=canAccess('admin.cms_page_content.destroy');

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
                        <h4 class="page-title">{{ trans('cms_page_content.cms_page_content') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('cms_page_content.cms_page_content') }}</a></li>
                            <li class="active">{{ trans('cms_page_content.details') }}</li>
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
                <span class="panel-title">{{ trans('cms_page_content.cms_page_contentInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_page_content.cms_page_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_page_content['cms_page_id'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_page_content.cms_page_content_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_page_content['cms_page_content_id'] }}</label>
                        </div>
                    </div>

                    </div>




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">

@if($canEdit)
                            <a href="/admin/cms_page_content/{{ $cms_page_content['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('cms_page_content.edit')}}</a>
                        @endif
                        </div>
                        <div class=" col-xs-3">
                            @if($canDestroy)
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/admin/cms_page_content',$cms_page_content['id']]]) !!}
                            <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                <i class="fa fa-trash"></i>
                                {{trans('cms_page_content.delete')}}
                            </button>
                            {!! Form::close() !!}
                                @endif
                        </div>

                    </div>


                </div>
                <!-- row -->
            </div>







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
                                            <a  href="{{route('admin.cms_page_content_page.create')}}?cms_page_content_id={{$cms_page_content['id']}}"class="btn btn-primary form-control">
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