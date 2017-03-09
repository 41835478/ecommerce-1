@extends('client.layouts.main')
@section('title', trans('general.products'))

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.products') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.products') }}</a></li>
                        <li class="active">{{ trans('general.products') }}</li>
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

                        @include('client.partials.messages')


                        <div class=" col-xs-9">
                            <h3 class="box-title m-b-0">{{ trans('general.productsTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('general.productsTableDescription') }}</p>


                        </div>
                        <div class="col-xs-3">
                            <a  href="{{route('client.products.create')}}"class="btn btn-primary form-control">
                                + {{trans('general.productsCreate')}}
                            </a>
                        </div>
                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('general.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('general.products_list'), 'products_list_id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                        {!! th_sort(trans('general.name'), 'name', $oResults) !!}
                                    </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                    {{trans('general.versions')}}
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                    {{trans('general.publish_date')}}
                                </th>

                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                
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

                                                                                <td>{{ (isset($oResult->productsList->name))?$oResult->productsList->name:'' }}</td>

                                                                                <td><a href="/client/products/{{ $oResult->id }}" > {{ $oResult->name }}</a></td>

                                        <td>{!!  (isset($oResult->versions) && count($oResult->versions->first()) )? '<a href="/client/versions/'.$oResult->versions->first()->id.'">'.$oResult->versions->first()->version.'</a>':'' !!} </td>
                                        <td>{{  (isset($oResult->versions)&& count($oResult->versions->first()) )? $oResult->versions->first()->publish_date:'' }}</td>



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
                                               class="fa fa-edit">  </a>


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
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('general.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                </div>


                                <div class="col-xs-12 col-sm-6 ">
                                    {!! str_replace('/?', '?', $oResults->appends(Input::except('page'))->appends($aFilterParams->all())->render()) !!}
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

                {!! Form::open(['method'=>'get','id'=>'searchForm', 'class'=>'form-horizontal']) !!}




                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('id', $aFilterParams['id'], ['placeholder'=>trans('general.id'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('products_list_id', $aFilterParams['products_list_id'], ['placeholder'=>trans('general.products_list_id'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('name', $aFilterParams['name'], ['placeholder'=>trans('general.name'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('description', $aFilterParams['description'], ['placeholder'=>trans('general.description'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>

                




                <div class="form-group">
                    <label class="col-md-12"></label>
                    <div class="col-md-12">
                        {!! Form::submit(trans('general.search'), ['class'=>'btn btn-info btn-sm', 'name' => 'search']) !!}
                    </div>
                </div>

                {!! Form::hidden('sort', $aFilterParams['sort']) !!}
                {!! Form::hidden('order', $aFilterParams['order']) !!}
                {!! Form::close()!!}
            </div>
        </div>

        @stop
