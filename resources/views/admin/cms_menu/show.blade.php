@extends('common.layouts.main')
@section('title', trans('cms_menu.cms_menu'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.cms_menu.edit');
    $canDestroy=canAccess('admin.cms_menu.destroy');

    $canCmsMenuLanguageRelation=canAccess('admin.cms_menu_language.relation');
    $canCmsMenuLanguageEdit=canAccess('admin.cms_menu_language.edit');
    $canCmsMenuLanguageDestroy=canAccess('admin.cms_menu_language.destroy');
    $canCmsMenuLanguageCreate=canAccess('admin.cms_menu_language.create');
    $canCmsMenuLanguageShow=canAccess('admin.cms_menu_language.show');

    $canCmsMenuItemRelation=canAccess('admin.cms_menu_item.relation');
    $canCmsMenuItemEdit=canAccess('admin.cms_menu_item.edit');
    $canCmsMenuItemDestroy=canAccess('admin.cms_menu_item.destroy');
    $canCmsMenuItemCreate=canAccess('admin.cms_menu_item.create');
    $canCmsMenuItemShow=canAccess('admin.cms_menu_item.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('cms_menu.cms_menu') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('cms_menu.cms_menu') }}</a></li>
                            <li class="active">{{ trans('cms_menu.details') }}</li>
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
                <span class="panel-title">{{ trans('cms_menu.cms_menuInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.parent_item_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['parent_item_id'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.cms_menu_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['cms_menu_id'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['name'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.disable') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['disable'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.hide') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['hide'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.module_type') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['module_type'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.module_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['module_id'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.order') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['order'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.created_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['created_at'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu.updated_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu['updated_at'] }}</label>
                        </div>
                    </div>

                    </div>




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">

@if($canEdit)
                            <a href="/admin/cms_menu/{{ $cms_menu['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('cms_menu.edit')}}</a>
                        @endif
                        </div>
                        <div class=" col-xs-3">
                            @if($canDestroy)
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/admin/cms_menu',$cms_menu['id']]]) !!}
                            <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                <i class="fa fa-trash"></i>
                                {{trans('cms_menu.delete')}}
                            </button>
                            {!! Form::close() !!}
                                @endif
                        </div>

                    </div>


                </div>
                <!-- row -->
            </div>







                            @if( $canCmsMenuLanguageRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_menu_language.cms_menu_languageTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_menu_language.cms_menu_languageTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsMenuLanguageCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_menu_language.create')}}?cms_menu_id={{$cms_menu['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_menu_language.cms_menu_languageCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_menu_language.id'), 'id', $oCmsMenuLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_menu_language.cms_menu_id'), 'cms_menu_id', $oCmsMenuLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_menu_language.cms_language_id'), 'cms_language_id', $oCmsMenuLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_menu_language.name'), 'name', $oCmsMenuLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_menu_language.created_at'), 'created_at', $oCmsMenuLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_menu_language.updated_at'), 'updated_at', $oCmsMenuLanguageResults) !!}
                                                </th>

                                                @if($canCmsMenuLanguageShow
|| $canCmsMenuLanguageEdit
|| $canCmsMenuLanguageDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsMenuLanguageResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsMenuLanguageResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->cms_menu_id }}</td>

                                                                                                                <td>{{ $oResult->cms_language_id }}</td>

                                                                                                                <td>{{ $oResult->name }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsMenuLanguageDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_menu_language',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsMenuLanguageEdit)
                                                                    <a href="/admin/cms_menu_language/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsMenuLanguageShow )
                                                                    <a href="/admin/cms_menu_language/{{ $oResult->id }}"
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
                                        @if (count($oCmsMenuLanguageResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsMenuLanguageResults->firstItem() }} {{trans('general.to')}} {{ $oCmsMenuLanguageResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsMenuLanguageResults->appends(Input::except('page_cms_menu_language'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            @if( $canCmsMenuItemRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_menu_item.cms_menu_itemTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_menu_item.cms_menu_itemTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsMenuItemCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_menu_item.create')}}?cms_menu_id={{$cms_menu['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_menu_item.cms_menu_itemCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_menu_item.id'), 'id', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_menu_item.parent_item_id'), 'parent_item_id', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_menu_item.cms_menu_id'), 'cms_menu_id', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_menu_item.name'), 'name', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_menu_item.disable'), 'disable', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_menu_item.hide'), 'hide', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('cms_menu_item.module_type'), 'module_type', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                    {!! th_sort(trans('cms_menu_item.module_id'), 'module_id', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                    {!! th_sort(trans('cms_menu_item.order'), 'order', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                    {!! th_sort(trans('cms_menu_item.created_at'), 'created_at', $oCmsMenuItemResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                    {!! th_sort(trans('cms_menu_item.updated_at'), 'updated_at', $oCmsMenuItemResults) !!}
                                                </th>

                                                @if($canCmsMenuItemShow
|| $canCmsMenuItemEdit
|| $canCmsMenuItemDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsMenuItemResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsMenuItemResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->parent_item_id }}</td>

                                                                                                                <td>{{ $oResult->cms_menu_id }}</td>

                                                                                                                <td>{{ $oResult->name }}</td>

                                                                                                                <td>{{ $oResult->disable }}</td>

                                                                                                                <td>{{ $oResult->hide }}</td>

                                                                                                                <td>{{ $oResult->module_type }}</td>

                                                                                                                <td>{{ $oResult->module_id }}</td>

                                                                                                                <td>{{ $oResult->order }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsMenuItemDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_menu_item',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsMenuItemEdit)
                                                                    <a href="/admin/cms_menu_item/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsMenuItemShow )
                                                                    <a href="/admin/cms_menu_item/{{ $oResult->id }}"
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
                                        @if (count($oCmsMenuItemResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsMenuItemResults->firstItem() }} {{trans('general.to')}} {{ $oCmsMenuItemResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsMenuItemResults->appends(Input::except('page_cms_menu_item'))->appends($request->all())->render()) !!}
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