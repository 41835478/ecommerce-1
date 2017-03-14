@extends('client.layouts.main')
@section('title', trans('general.products_list'))
@section('content')

    {{--*/
    $canAction=canAccess('admin.products_list.action');
    $canProductsAction=canAccess('admin.products.action');
    /*--}}



        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.products_list') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.products_list') }}</a></li>
                            <li class="active">{{ trans('general.details') }}</li>
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
                <span class="panel-title">{{ trans('general.products_listInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$products_list['name'] }}</label>
                        </div>
                    </div>


                                    <div class="col-sm-2 text-right">
                                        <div class="form-group no-margin-hr">
                                            <label class="control-label">{{ trans('general.type') }}  </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 text-left">
                                        <div class="form-group no-margin-hr">
                                            <label class="control-label">
                                                {{ (array_key_exists($products_list['type']  ,config('array.products_list_type')))? config('array.products_list_type')[$products_list['type'] ]:'' }}
                                               </label>
                                        </div>
                                    </div>


                                </div>
                <div class="row">
                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.description') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$products_list['description'] }}</label>
                        </div>
                    </div>

                    </div>


@if($canAction)
                <div class="row">

                    <div class="col-xs-offset-6 col-xs-3">


                        <a href="/client/products_list/{{ $products_list['id'] }}/edit"
                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                    </div>
                    <div class=" col-xs-3">
                        {!! Form::open(['method' => 'DELETE',
                'url' => ['/client/products_list',$products_list['id']]]) !!}
                        <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                            <i class="fa fa-trash"></i>
                            {{trans('general.delete')}}
                        </button>
                        {!! Form::close() !!}
                    </div>

                </div>
@endif
                </div>
                <!-- row -->
            </div>




                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        <div class=" col-xs-9">

                                            <h3 class="box-title m-b-0">{{ trans('general.productsTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.productsTableDescription') }}</p>
                                        </div>

                                        @if($canProductsAction)
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.products.create').'?products_list_id='.$products_list['id']}}"class="btn btn-primary form-control">
                                                + {{trans('general.productsCreate')}}
                                            </a>
                                        </div>
                                        @endif



                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oProductsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.name'), 'name', $oProductsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.description'), 'description', $oProductsResults) !!}
                                                </th>
                                                @if($canProductsAction)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
@endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oProductsResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oProductsResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td> <a href="/client/products/{{ $oResult->id }}" > {{ $oResult->name }}</a></td>

                                                        <td>{{ $oResult->description }}</td>


                                                        @if($canProductsAction)
                                                        <td>


                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>



                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/products',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/products/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"> </a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                            @endif
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oProductsResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oProductsResults->firstItem() }} {{trans('general.to')}} {{ $oProductsResults->lastItem() }} {{trans('general.of')}} {{ $oProductsResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oProductsResults->appends(Input::except('page_products'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>




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