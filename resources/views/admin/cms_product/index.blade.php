@extends('common.layouts.main')
@section('title', trans('general.cms_product'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.cms_product.show');
    $canEdit=canAccess('admin.cms_product.edit');
    $canDestroy=canAccess('admin.cms_product.destroy');
    $canCreate=canAccess('admin.cms_product.create');


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
                        <li class="active">{{ trans('cms_product.cms_product') }}</li>
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



                        @include('common.partials.messages')

                        <div class=" col-xs-9">
                            <h3 class="box-title m-b-0">{{ trans('cms_product.cms_productTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('cms_product.cms_productTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                        <div class="col-xs-3">
                            <a  href="{{route('admin.cms_product.create')}}"class="btn btn-primary form-control">
                                + {{trans('cms_product.cms_productCreate')}}
                            </a>
                        </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('cms_product.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('cms_product.cms_category_id'), 'cms_category_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                        {!! th_sort(trans('cms_product.name'), 'name', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('cms_product.description'), 'description', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                        {!! th_sort(trans('cms_product.location'), 'location', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                        {!! th_sort(trans('cms_product.quantity'), 'quantity', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                        {!! th_sort(trans('cms_product.image'), 'image', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                        {!! th_sort(trans('cms_product.shipping'), 'shipping', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                        {!! th_sort(trans('cms_product.price'), 'price', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                        {!! th_sort(trans('cms_product.points'), 'points', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                        {!! th_sort(trans('cms_product.date_available'), 'date_available', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">
                                        {!! th_sort(trans('cms_product.weight'), 'weight', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">
                                        {!! th_sort(trans('cms_product.length'), 'length', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">
                                        {!! th_sort(trans('cms_product.width'), 'width', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">
                                        {!! th_sort(trans('cms_product.height'), 'height', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">
                                        {!! th_sort(trans('cms_product.subtract'), 'subtract', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="17">
                                        {!! th_sort(trans('cms_product.minimum'), 'minimum', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="18">
                                        {!! th_sort(trans('cms_product.sort_order'), 'sort_order', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="19">
                                        {!! th_sort(trans('cms_product.status'), 'status', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="20">
                                        {!! th_sort(trans('cms_product.viewed'), 'viewed', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="21">
                                        {!! th_sort(trans('cms_product.created_at'), 'created_at', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="22">
                                        {!! th_sort(trans('cms_product.updated_at'), 'updated_at', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="23">
                                        {!! th_sort(trans('cms_product.model'), 'model', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="24">
                                        {!! th_sort(trans('cms_product.sku'), 'sku', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="25">
                                        {!! th_sort(trans('cms_product.upc'), 'upc', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="26">
                                        {!! th_sort(trans('cms_product.ean'), 'ean', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="27">
                                        {!! th_sort(trans('cms_product.jan'), 'jan', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="28">
                                        {!! th_sort(trans('cms_product.isbn'), 'isbn', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="29">
                                        {!! th_sort(trans('cms_product.mpn'), 'mpn', $oResults) !!}
                                    </th>

                                
                                    @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                        @endif
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($oResults))
                                {{-- */$i=0;/* --}}
                                {{-- */$class='';/* --}}
                                @foreach($oResults as $oResult)
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

                                                    @if( $canDestroy)
                                                    {!! Form::open(['method' => 'DELETE',
                                                    'url' => ['/admin/cms_product',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
@endif
                                                        @if($canEdit )
                                            <a href="/admin/cms_product/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>
@endif
                                                            @if($canShow)
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
                        @if (count($oResults))
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 ">
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('cms_product.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                </div>


                                <div class="col-xs-12 col-sm-6 ">
                                    {!! str_replace('/?', '?', $oResults->appends(Input::except('page'))->appends($request->all())->render()) !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> {{trans('general.CopyRights')}} </footer>
        </div>
        <!-- /#page-wrapper -->
        <!-- .right panel -->
        <div class="right-side-panel">
            <div class="scrollable-right container">
                <!-- .Theme settings -->
                <h3 class="title-heading">{{ trans('general.search') }}</h3>

                {!! Form::model($request,['method'=>'get','id'=>'searchForm', 'class'=>'form-horizontal']) !!}




                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('id', null, ['placeholder'=>trans('cms_product.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('cms_category_id', null, ['placeholder'=>trans('cms_product.cms_category_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('name', null, ['placeholder'=>trans('cms_product.name'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('description', null, ['placeholder'=>trans('cms_product.description'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('location', null, ['placeholder'=>trans('cms_product.location'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('quantity', null, ['placeholder'=>trans('cms_product.quantity'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('image', null, ['placeholder'=>trans('cms_product.image'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('shipping', null, ['placeholder'=>trans('cms_product.shipping'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('price', null, ['placeholder'=>trans('cms_product.price'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('points', null, ['placeholder'=>trans('cms_product.points'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('date_available', null, ['placeholder'=>trans('cms_product.date_available'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('weight', null, ['placeholder'=>trans('cms_product.weight'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('length', null, ['placeholder'=>trans('cms_product.length'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('width', null, ['placeholder'=>trans('cms_product.width'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('height', null, ['placeholder'=>trans('cms_product.height'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('subtract', null, ['placeholder'=>trans('cms_product.subtract'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('minimum', null, ['placeholder'=>trans('cms_product.minimum'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('sort_order', null, ['placeholder'=>trans('cms_product.sort_order'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('status', null, ['placeholder'=>trans('cms_product.status'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('viewed', null, ['placeholder'=>trans('cms_product.viewed'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('created_at', null, ['placeholder'=>trans('cms_product.created_at'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('updated_at', null, ['placeholder'=>trans('cms_product.updated_at'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('model', null, ['placeholder'=>trans('cms_product.model'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('sku', null, ['placeholder'=>trans('cms_product.sku'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('upc', null, ['placeholder'=>trans('cms_product.upc'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('ean', null, ['placeholder'=>trans('cms_product.ean'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('jan', null, ['placeholder'=>trans('cms_product.jan'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('isbn', null, ['placeholder'=>trans('cms_product.isbn'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('mpn', null, ['placeholder'=>trans('cms_product.mpn'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>

                




                <div class="form-group">
                    <label class="col-md-12"></label>
                    <div class="col-md-12">
                        {!! Form::submit(trans('general.search'), ['class'=>'btn btn-info btn-sm', 'name' => 'search']) !!}
                    </div>
                </div>

                {!! Form::hidden('sort', null) !!}
                {!! Form::hidden('order', null) !!}
                {!! Form::close()!!}
            </div>
        </div>

        @stop
