@extends('common.layouts.main')
@section('title', trans('cms_category.cms_category'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.cms_category.edit');
    $canDestroy=canAccess('admin.cms_category.destroy');

    $canCmsCategoryDescriptionRelation=canAccess('admin.cms_category_description.relation');
    $canCmsCategoryDescriptionEdit=canAccess('admin.cms_category_description.edit');
    $canCmsCategoryDescriptionDestroy=canAccess('admin.cms_category_description.destroy');
    $canCmsCategoryDescriptionCreate=canAccess('admin.cms_category_description.create');
    $canCmsCategoryDescriptionShow=canAccess('admin.cms_category_description.show');

    $canCmsProductRelation=canAccess('admin.cms_product.relation');
    $canCmsProductEdit=canAccess('admin.cms_product.edit');
    $canCmsProductDestroy=canAccess('admin.cms_product.destroy');
    $canCmsProductCreate=canAccess('admin.cms_product.create');
    $canCmsProductShow=canAccess('admin.cms_product.show');


    /*--}}





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
                            <li class="active">{{ trans('cms_category.details') }}</li>
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
                <span class="panel-title">{{ trans('cms_category.cms_categoryInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.cms_category_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['cms_category_id'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['name'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.description') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['description'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.location') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['location'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.quantity') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['quantity'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.image') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['image'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.shipping') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['shipping'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.price') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['price'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.points') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['points'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.date_available') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['date_available'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.weight') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['weight'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.length') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['length'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.width') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['width'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.height') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['height'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.subtract') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['subtract'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.minimum') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['minimum'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.sort_order') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['sort_order'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.status') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['status'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.viewed') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['viewed'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.created_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['created_at'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.updated_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['updated_at'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.model') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['model'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.sku') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['sku'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.upc') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['upc'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.ean') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['ean'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.jan') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['jan'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.isbn') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['isbn'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_category.mpn') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_category['mpn'] }}</label>
                        </div>
                    </div>

                    </div>




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">

@if($canEdit)
                            <a href="/admin/cms_category/{{ $cms_category['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('cms_category.edit')}}</a>
                        @endif
                        </div>
                        <div class=" col-xs-3">
                            @if($canDestroy)
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/admin/cms_category',$cms_category['id']]]) !!}
                            <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                <i class="fa fa-trash"></i>
                                {{trans('cms_category.delete')}}
                            </button>
                            {!! Form::close() !!}
                                @endif
                        </div>

                    </div>


                </div>
                <!-- row -->
            </div>







                            @if( $canCmsCategoryDescriptionRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_category_description.cms_category_descriptionTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_category_description.cms_category_descriptionTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsCategoryDescriptionCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_category_description.create')}}?cms_category_id={{$cms_category['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_category_description.cms_category_descriptionCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_category_description.id'), 'id', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_category_description.cms_category_id'), 'cms_category_id', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_category_description.cms_language_id'), 'cms_language_id', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_category_description.name'), 'name', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_category_description.description'), 'description', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_category_description.meta_title'), 'meta_title', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('cms_category_description.meta_description'), 'meta_description', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                    {!! th_sort(trans('cms_category_description.meta_keyword'), 'meta_keyword', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                    {!! th_sort(trans('cms_category_description.created_at'), 'created_at', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                    {!! th_sort(trans('cms_category_description.updated_at'), 'updated_at', $oCmsCategoryDescriptionResults) !!}
                                                </th>

                                                @if($canCmsCategoryDescriptionShow
|| $canCmsCategoryDescriptionEdit
|| $canCmsCategoryDescriptionDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsCategoryDescriptionResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsCategoryDescriptionResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->cms_category_id }}</td>

                                                                                                                <td>{{ $oResult->cms_language_id }}</td>

                                                                                                                <td>{{ $oResult->name }}</td>

                                                                                                                <td>{{ $oResult->description }}</td>

                                                                                                                <td>{{ $oResult->meta_title }}</td>

                                                                                                                <td>{{ $oResult->meta_description }}</td>

                                                                                                                <td>{{ $oResult->meta_keyword }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsCategoryDescriptionDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_category_description',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsCategoryDescriptionEdit)
                                                                    <a href="/admin/cms_category_description/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsCategoryDescriptionShow )
                                                                    <a href="/admin/cms_category_description/{{ $oResult->id }}"
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
                                        @if (count($oCmsCategoryDescriptionResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsCategoryDescriptionResults->firstItem() }} {{trans('general.to')}} {{ $oCmsCategoryDescriptionResults->lastItem() }} {{trans('general.of')}} {{ $oCmsCategoryDescriptionResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsCategoryDescriptionResults->appends(Input::except('page_cms_category_description'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            @if( $canCmsProductRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_product.cms_productTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_product.cms_productTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsProductCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_product.create')}}?cms_category_id={{$cms_category['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_product.cms_productCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_product.id'), 'id', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_product.cms_category_id'), 'cms_category_id', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_product.name'), 'name', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_product.description'), 'description', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_product.location'), 'location', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_product.quantity'), 'quantity', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('cms_product.image'), 'image', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                    {!! th_sort(trans('cms_product.shipping'), 'shipping', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                    {!! th_sort(trans('cms_product.price'), 'price', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                    {!! th_sort(trans('cms_product.points'), 'points', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                    {!! th_sort(trans('cms_product.date_available'), 'date_available', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                                    {!! th_sort(trans('cms_product.weight'), 'weight', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                                    {!! th_sort(trans('cms_product.length'), 'length', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">
                                                    {!! th_sort(trans('cms_product.width'), 'width', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">
                                                    {!! th_sort(trans('cms_product.height'), 'height', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">
                                                    {!! th_sort(trans('cms_product.subtract'), 'subtract', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="17">
                                                    {!! th_sort(trans('cms_product.minimum'), 'minimum', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                                    {!! th_sort(trans('cms_product.sort_order'), 'sort_order', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="19">
                                                    {!! th_sort(trans('cms_product.status'), 'status', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="20">
                                                    {!! th_sort(trans('cms_product.viewed'), 'viewed', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="21">
                                                    {!! th_sort(trans('cms_product.created_at'), 'created_at', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="22">
                                                    {!! th_sort(trans('cms_product.updated_at'), 'updated_at', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="23">
                                                    {!! th_sort(trans('cms_product.model'), 'model', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="24">
                                                    {!! th_sort(trans('cms_product.sku'), 'sku', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="25">
                                                    {!! th_sort(trans('cms_product.upc'), 'upc', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="26">
                                                    {!! th_sort(trans('cms_product.ean'), 'ean', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="27">
                                                    {!! th_sort(trans('cms_product.jan'), 'jan', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="28">
                                                    {!! th_sort(trans('cms_product.isbn'), 'isbn', $oCmsProductResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="29">
                                                    {!! th_sort(trans('cms_product.mpn'), 'mpn', $oCmsProductResults) !!}
                                                </th>

                                                @if($canCmsProductShow
|| $canCmsProductEdit
|| $canCmsProductDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsProductResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsProductResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->cms_category_id }}</td>

                                                                                                                <td>{{ $oResult->name }}</td>

                                                                                                                <td>{{ $oResult->description }}</td>

                                                                                                                <td>{{ $oResult->location }}</td>

                                                                                                                <td>{{ $oResult->quantity }}</td>

                                                                                                                <td>{{ $oResult->image }}</td>

                                                                                                                <td>{{ $oResult->shipping }}</td>

                                                                                                                <td>{{ $oResult->price }}</td>

                                                                                                                <td>{{ $oResult->points }}</td>

                                                                                                                <td>{{ $oResult->date_available }}</td>

                                                                                                                <td>{{ $oResult->weight }}</td>

                                                                                                                <td>{{ $oResult->length }}</td>

                                                                                                                <td>{{ $oResult->width }}</td>

                                                                                                                <td>{{ $oResult->height }}</td>

                                                                                                                <td>{{ $oResult->subtract }}</td>

                                                                                                                <td>{{ $oResult->minimum }}</td>

                                                                                                                <td>{{ $oResult->sort_order }}</td>

                                                                                                                <td>{{ $oResult->status }}</td>

                                                                                                                <td>{{ $oResult->viewed }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                                                                                <td>{{ $oResult->model }}</td>

                                                                                                                <td>{{ $oResult->sku }}</td>

                                                                                                                <td>{{ $oResult->upc }}</td>

                                                                                                                <td>{{ $oResult->ean }}</td>

                                                                                                                <td>{{ $oResult->jan }}</td>

                                                                                                                <td>{{ $oResult->isbn }}</td>

                                                                                                                <td>{{ $oResult->mpn }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsProductDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_product',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsProductEdit)
                                                                    <a href="/admin/cms_product/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsProductShow )
                                                                    <a href="/admin/cms_product/{{ $oResult->id }}"
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
                                        @if (count($oCmsProductResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsProductResults->firstItem() }} {{trans('general.to')}} {{ $oCmsProductResults->lastItem() }} {{trans('general.of')}} {{ $oCmsProductResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsProductResults->appends(Input::except('page_cms_product'))->appends($request->all())->render()) !!}
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