@extends('common.layouts.main')
@section('title', trans('cms_menu_item.cms_menu_item'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.cms_menu_item.edit');
    $canDestroy=canAccess('admin.cms_menu_item.destroy');

    $canCmsMenuItemLanguageRelation=canAccess('admin.cms_menu_item_language.relation');
    $canCmsMenuItemLanguageEdit=canAccess('admin.cms_menu_item_language.edit');
    $canCmsMenuItemLanguageDestroy=canAccess('admin.cms_menu_item_language.destroy');
    $canCmsMenuItemLanguageCreate=canAccess('admin.cms_menu_item_language.create');
    $canCmsMenuItemLanguageShow=canAccess('admin.cms_menu_item_language.show');


    /*--}}





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
                            <li class="active">{{ trans('cms_menu_item.details') }}</li>
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
                <span class="panel-title">{{ trans('cms_menu_item.cms_menu_itemInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu_item.cms_menu_item_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu_item['cms_menu_item_id'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu_item.cms_language_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu_item['cms_language_id'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu_item.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu_item['name'] }}</label>
                        </div>
                    </div>



                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu_item.module_type') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                    @if(config('array.pageTypeIndex') == $cms_menu_item['module_type'])
                       {{trans('cms_menu_item.page')}}( {{isset($cms_menu_item->cms_page->first()->name)?$cms_menu_item->cms_page->first()->name:'' }} )
                    @elseif(config('array.articleTypeIndex') ==$cms_menu_item['module_type'])
                                    {{trans('cms_menu_item.article')}}(  {{isset($cms_menu_item->cms_article->name)?$cms_menu_item->cms_article->name:'' }} )
                    @elseif(config('array.formTypeIndex') == $cms_menu_item['module_type'])
                                    {{trans('cms_menu_item.form')}}( {{isset($oResult->cms_form->name)?$cms_menu_item->cms_form->name:'' }} )
                    @elseif(config('array.categoryTypeIndex') == $cms_menu_item['module_type'])
                                    {{trans('cms_menu_item.category')}}(  {{isset($oResult->cms_category->name)?$oResult->cms_category->name:'' }} )
                    @elseif(config('array.productTypeIndex') == $cms_menu_item['module_type'])
                                    {{trans('cms_menu_item.product')}}( {{isset($oResult->cms_product->name)?$oResult->cms_product->name:'' }})
                    @elseif(config('array.urlTypeIndex') == $cms_menu_item['module_type'])
                                    {{trans('cms_menu_item.url')}}(  {{ $oResult->module_id }} )
                    @endif
                            </label>
                        </div>
                    </div>




                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu_item.created_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu_item['created_at'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_menu_item.updated_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_menu_item['updated_at'] }}</label>
                        </div>
                    </div>

                    




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">

@if($canEdit)
                            <a href="/admin/cms_menu_item/{{ $cms_menu_item['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('cms_menu_item.edit')}}</a>
                        @endif
                        </div>
                        <div class=" col-xs-3">
                            @if($canDestroy)
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/admin/cms_menu_item',$cms_menu_item['id']]]) !!}
                            <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                <i class="fa fa-trash"></i>
                                {{trans('cms_menu_item.delete')}}
                            </button>
                            {!! Form::close() !!}
                                @endif
                        </div>

                    </div>


                </div>
                <!-- row -->
            </div>







                            @if( $canCmsMenuItemLanguageRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_menu_item_language.cms_menu_item_languageTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_menu_item_language.cms_menu_item_languageTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsMenuItemLanguageCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_menu_item_language.create')}}?cms_menu_item_id={{$cms_menu_item['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_menu_item_language.cms_menu_item_languageCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_menu_item_language.id'), 'id', $oCmsMenuItemLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_menu_item_language.cms_menu_item_id'), 'cms_menu_item_id', $oCmsMenuItemLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_menu_item_language.cms_language_id'), 'cms_language_id', $oCmsMenuItemLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_menu_item_language.name'), 'name', $oCmsMenuItemLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_menu_item_language.created_at'), 'created_at', $oCmsMenuItemLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_menu_item_language.updated_at'), 'updated_at', $oCmsMenuItemLanguageResults) !!}
                                                </th>

                                                @if($canCmsMenuItemLanguageShow
|| $canCmsMenuItemLanguageEdit
|| $canCmsMenuItemLanguageDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsMenuItemLanguageResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsMenuItemLanguageResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->cms_menu_item_id }}</td>

                                                                                                                <td>{{ $oResult->cms_language_id }}</td>

                                                                                                                <td>{{ $oResult->name }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsMenuItemLanguageDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_menu_item_language',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsMenuItemLanguageEdit)
                                                                    <a href="/admin/cms_menu_item_language/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsMenuItemLanguageShow )
                                                                    <a href="/admin/cms_menu_item_language/{{ $oResult->id }}"
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
                                        @if (count($oCmsMenuItemLanguageResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsMenuItemLanguageResults->firstItem() }} {{trans('general.to')}} {{ $oCmsMenuItemLanguageResults->lastItem() }} {{trans('general.of')}} {{ $oCmsMenuItemLanguageResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsMenuItemLanguageResults->appends(Input::except('page_cms_menu_item_language'))->appends($request->all())->render()) !!}
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