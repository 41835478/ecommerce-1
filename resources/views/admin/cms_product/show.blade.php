@extends('common.layouts.main')
@section('title', trans('cms_product.cms_product'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.cms_product.edit');
    $canDestroy=canAccess('admin.cms_product.destroy');

    $canCmsProductDescriptionRelation=canAccess('admin.cms_product_description.relation');
    $canCmsProductDescriptionEdit=canAccess('admin.cms_product_description.edit');
    $canCmsProductDescriptionDestroy=canAccess('admin.cms_product_description.destroy');
    $canCmsProductDescriptionCreate=canAccess('admin.cms_product_description.create');
    $canCmsProductDescriptionShow=canAccess('admin.cms_product_description.show');

    $canCmsCartRelation=canAccess('admin.cms_cart.relation');
    $canCmsCartEdit=canAccess('admin.cms_cart.edit');
    $canCmsCartDestroy=canAccess('admin.cms_cart.destroy');
    $canCmsCartCreate=canAccess('admin.cms_cart.create');
    $canCmsCartShow=canAccess('admin.cms_cart.show');

    $canCmsWishlistRelation=canAccess('admin.cms_wishlist.relation');
    $canCmsWishlistEdit=canAccess('admin.cms_wishlist.edit');
    $canCmsWishlistDestroy=canAccess('admin.cms_wishlist.destroy');
    $canCmsWishlistCreate=canAccess('admin.cms_wishlist.create');
    $canCmsWishlistShow=canAccess('admin.cms_wishlist.show');

    $canCmsCompareListRelation=canAccess('admin.cms_compare_list.relation');
    $canCmsCompareListEdit=canAccess('admin.cms_compare_list.edit');
    $canCmsCompareListDestroy=canAccess('admin.cms_compare_list.destroy');
    $canCmsCompareListCreate=canAccess('admin.cms_compare_list.create');
    $canCmsCompareListShow=canAccess('admin.cms_compare_list.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('cms_product.cms_product') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('cms_product.cms_product') }}</a></li>
                            <li class="active">{{ trans('cms_product.details') }}</li>
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
                <span class="panel-title">{{ trans('cms_product.cms_productInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_product.users_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_product['users_id'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_product.cms_product_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_product['cms_product_id'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_product.created_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_product['created_at'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_product.updated_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_product['updated_at'] }}</label>
                        </div>
                    </div>

                    </div>




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">

@if($canEdit)
                            <a href="/admin/cms_product/{{ $cms_product['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('cms_product.edit')}}</a>
                        @endif
                        </div>
                        <div class=" col-xs-3">
                            @if($canDestroy)
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/admin/cms_product',$cms_product['id']]]) !!}
                            <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                <i class="fa fa-trash"></i>
                                {{trans('cms_product.delete')}}
                            </button>
                            {!! Form::close() !!}
                                @endif
                        </div>

                    </div>


                </div>
                <!-- row -->
            </div>







                            @if( $canCmsProductDescriptionRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_product_description.cms_product_descriptionTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_product_description.cms_product_descriptionTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsProductDescriptionCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_product_description.create')}}?cms_product_id={{$cms_product['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_product_description.cms_product_descriptionCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_product_description.id'), 'id', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_product_description.cms_product_id'), 'cms_product_id', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_product_description.cms_language_id'), 'cms_language_id', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_product_description.name'), 'name', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_product_description.description'), 'description', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_product_description.tag'), 'tag', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('cms_product_description.meta_title'), 'meta_title', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                    {!! th_sort(trans('cms_product_description.meta_description'), 'meta_description', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                    {!! th_sort(trans('cms_product_description.meta_keyword'), 'meta_keyword', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                                    {!! th_sort(trans('cms_product_description.created_at'), 'created_at', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                                    {!! th_sort(trans('cms_product_description.updated_at'), 'updated_at', $oCmsProductDescriptionResults) !!}
                                                </th>

                                                @if($canCmsProductDescriptionShow
|| $canCmsProductDescriptionEdit
|| $canCmsProductDescriptionDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsProductDescriptionResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsProductDescriptionResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->cms_product_id }}</td>

                                                                                                                <td>{{ $oResult->cms_language_id }}</td>

                                                                                                                <td>{{ $oResult->name }}</td>

                                                                                                                <td>{{ $oResult->description }}</td>

                                                                                                                <td>{{ $oResult->tag }}</td>

                                                                                                                <td>{{ $oResult->meta_title }}</td>

                                                                                                                <td>{{ $oResult->meta_description }}</td>

                                                                                                                <td>{{ $oResult->meta_keyword }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsProductDescriptionDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_product_description',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsProductDescriptionEdit)
                                                                    <a href="/admin/cms_product_description/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsProductDescriptionShow )
                                                                    <a href="/admin/cms_product_description/{{ $oResult->id }}"
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
                                        @if (count($oCmsProductDescriptionResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsProductDescriptionResults->firstItem() }} {{trans('general.to')}} {{ $oCmsProductDescriptionResults->lastItem() }} {{trans('general.of')}} {{ $oCmsProductDescriptionResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsProductDescriptionResults->appends(Input::except('page_cms_product_description'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            @if( $canCmsCartRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_cart.cms_cartTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_cart.cms_cartTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsCartCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_cart.create')}}?cms_product_id={{$cms_product['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_cart.cms_cartCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_cart.id'), 'id', $oCmsCartResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_cart.users_id'), 'users_id', $oCmsCartResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_cart.cms_product_id'), 'cms_product_id', $oCmsCartResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_cart.option'), 'option', $oCmsCartResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_cart.quantity'), 'quantity', $oCmsCartResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_cart.created_at'), 'created_at', $oCmsCartResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('cms_cart.updated_at'), 'updated_at', $oCmsCartResults) !!}
                                                </th>

                                                @if($canCmsCartShow
|| $canCmsCartEdit
|| $canCmsCartDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsCartResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsCartResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->users_id }}</td>

                                                                                                                <td>{{ $oResult->cms_product_id }}</td>

                                                                                                                <td>{{ $oResult->option }}</td>

                                                                                                                <td>{{ $oResult->quantity }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsCartDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_cart',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsCartEdit)
                                                                    <a href="/admin/cms_cart/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsCartShow )
                                                                    <a href="/admin/cms_cart/{{ $oResult->id }}"
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
                                        @if (count($oCmsCartResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsCartResults->firstItem() }} {{trans('general.to')}} {{ $oCmsCartResults->lastItem() }} {{trans('general.of')}} {{ $oCmsCartResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsCartResults->appends(Input::except('page_cms_cart'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            @if( $canCmsWishlistRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_wishlist.cms_wishlistTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_wishlist.cms_wishlistTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsWishlistCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_wishlist.create')}}?cms_product_id={{$cms_product['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_wishlist.cms_wishlistCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_wishlist.id'), 'id', $oCmsWishlistResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_wishlist.users_id'), 'users_id', $oCmsWishlistResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_wishlist.cms_product_id'), 'cms_product_id', $oCmsWishlistResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_wishlist.created_at'), 'created_at', $oCmsWishlistResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_wishlist.updated_at'), 'updated_at', $oCmsWishlistResults) !!}
                                                </th>

                                                @if($canCmsWishlistShow
|| $canCmsWishlistEdit
|| $canCmsWishlistDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsWishlistResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsWishlistResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->users_id }}</td>

                                                                                                                <td>{{ $oResult->cms_product_id }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsWishlistDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_wishlist',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsWishlistEdit)
                                                                    <a href="/admin/cms_wishlist/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsWishlistShow )
                                                                    <a href="/admin/cms_wishlist/{{ $oResult->id }}"
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
                                        @if (count($oCmsWishlistResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsWishlistResults->firstItem() }} {{trans('general.to')}} {{ $oCmsWishlistResults->lastItem() }} {{trans('general.of')}} {{ $oCmsWishlistResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsWishlistResults->appends(Input::except('page_cms_wishlist'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            @if( $canCmsCompareListRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_compare_list.cms_compare_listTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_compare_list.cms_compare_listTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsCompareListCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_compare_list.create')}}?cms_product_id={{$cms_product['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_compare_list.cms_compare_listCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_compare_list.id'), 'id', $oCmsCompareListResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('cms_compare_list.users_id'), 'users_id', $oCmsCompareListResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_compare_list.cms_product_id'), 'cms_product_id', $oCmsCompareListResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_compare_list.created_at'), 'created_at', $oCmsCompareListResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('cms_compare_list.updated_at'), 'updated_at', $oCmsCompareListResults) !!}
                                                </th>

                                                @if($canCmsCompareListShow
|| $canCmsCompareListEdit
|| $canCmsCompareListDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsCompareListResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsCompareListResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>

                                                                                                                <td>{{ $oResult->users_id }}</td>

                                                                                                                <td>{{ $oResult->cms_product_id }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsCompareListDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_compare_list',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsCompareListEdit)
                                                                    <a href="/admin/cms_compare_list/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsCompareListShow )
                                                                    <a href="/admin/cms_compare_list/{{ $oResult->id }}"
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
                                        @if (count($oCmsCompareListResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsCompareListResults->firstItem() }} {{trans('general.to')}} {{ $oCmsCompareListResults->lastItem() }} {{trans('general.of')}} {{ $oCmsCompareListResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsCompareListResults->appends(Input::except('page_cms_compare_list'))->appends($request->all())->render()) !!}
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