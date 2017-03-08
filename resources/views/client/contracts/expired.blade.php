@extends('client.layouts.main')
@section('title', trans('general.contracts'))

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.contracts') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.contracts') }}</a></li>
                        <li class="active">{{ trans('general.contracts') }}</li>
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
                    @include('client.partials.messages')
                    <div class="white-box">


                        <div class=" col-xs-9">
                            <h3 class="box-title m-b-0">{{ trans('general.contractsTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('general.contractsTableDescription') }}</p>


                        </div>
                        <div class="col-xs-3">
                            <a  href="{{route('client.contracts.create')}}"class="btn btn-primary form-control">
                                + {{trans('general.contractsCreate')}}
                            </a>
                        </div>


                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('general.id'), 'id', $oResults) !!}
                                    </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('general.name'), 'name', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('general.price'), 'price', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('general.company'), 'company_id', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                    {!! th_sort(trans('general.type'), 'type', $oResults) !!}
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                    {!! th_sort(trans('general.purchasing_date'), 'purchasing_date', $oResults) !!}
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                    {!! th_sort(trans('general.status'), 'status', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                    {{ trans('general.expiredDate')}}
                                </th>
                                <th >

                                </th>

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

                                        <td>{{ $oResult->name }}</td>

                                        <td>{{ $oResult->price }}</td>

                                                                                <td>{{(isset($oResult->company->name))? $oResult->company->name:'' }}</td>

                                        <td>
                                            @if( $oResult->type == config('array.productsTypeIndex'))
                                                {{trans('general.products')}} ( {{(isset($oResult->products->name))? $oResult->products->name:'' }} )
                                            @elseif( $oResult->type == config('array.domainsTypeIndex'))
                                                {{trans('general.domains')}} ( {{(isset($oResult->domains->name))? $oResult->domains->name:'' }} )

                                            @elseif( $oResult->type == config('array.webHostingPlansTypeIndex'))
                                                {{trans('general.web_hosting_plans')}} ( {{(isset($oResult->webHostingPlans->name))? $oResult->webHostingPlans->name:'' }} )

                                            @elseif( $oResult->type == config('array.serverTypeIndex'))
                                                {{trans('general.server_detail')}} ( {{(isset($oResult->server_detail->name))? $oResult->server_detail->name:'' }} )

                                            @elseif( $oResult->type == config('array.supportTypeIndex'))
                                                {{trans('general.support')}} ( {{(isset($oResult->support->name))? $oResult->support->name:'' }} )

                                            @endif
                                        </td>
                                        <td>{{ $oResult->purchasing_date }}</td>
                                        <td>{{ (array_key_exists($oResult->status,config('array.contracts_status')))?config('array.contracts_status')[$oResult->status]:'' }}</td>
                                        <td>{{ $oResult->expired_date }}</td>

                                        
                                        <td>


                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>


                                            <a href="/client/contracts/{{ $oResult->id }}"
                                               class="fa fa-file-text"> {{trans('general.details')}}</a>


                                            {!! Form::open(['method' => 'DELETE',
                                            'url' => ['/client/contracts',$oResult->id]]) !!}
                                            <button type="submit" name="Delete" class="deleteRow" >
                                                <i class="fa fa-trash"></i>
                                                {{trans('general.delete')}}
                                            </button>
                                            {!! Form::close() !!}

                                            <a href="/client/contracts/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"> {{trans('general.edit')}}</a>



                                                    <a href="{{ route('client.contracts_renewal.index') }}?contracts_id={{ $oResult->id }}"
                                                       class="fa fa-edit">renewal list</a>


                                                    <a href="{{ route('client.contracts_renewal.create') }}?contracts_id={{ $oResult->id }}"
                                                       class="fa fa-edit">add renewal</a>


                                                    <a href="{{ route('client.contracts_documents.index') }}?contracts_id={{ $oResult->id }}"
                                                       class="fa fa-edit">documents list</a>


                                                    <a href="{{ route('client.contracts_documents.create') }}?contracts_id={{ $oResult->id }}"
                                                       class="fa fa-edit">add document</a>
</div>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        @if (false)
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
                        {!! Form::text('daysExpireStart', (isset($aFilterParams['daysExpireStart'])? $aFilterParams['daysExpireStart']:7), ['placeholder'=>trans('general.daysExpireStart'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('daysToExpire', (isset($aFilterParams['daysToExpire'])? $aFilterParams['daysToExpire']:30) , ['placeholder'=>trans('general.daysToExpire'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>






                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('company_id', $aFilterParams['company_id'], ['placeholder'=>trans('general.company_id'),'class'=>'form-control input-sm ']) !!}
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
                        {!! Form::text('price', $aFilterParams['price'], ['placeholder'=>trans('general.price'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('products_id', $aFilterParams['products_id'], ['placeholder'=>trans('general.products_id'),'class'=>'form-control input-sm ']) !!}
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
