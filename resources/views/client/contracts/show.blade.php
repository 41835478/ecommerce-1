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
                <span class="panel-title">{{ trans('general.contractsInfo') }}</span>
            </div>

            <div class="panel-body">

                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$contracts['name'] }}</label>
                        </div>
                    </div>


                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.price') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{  $contracts->price}}</label>
                        </div>
                    </div>

                </div>


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.purchasing_date') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$contracts['purchasing_date'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.company') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{(isset($contracts->company->name))? $contracts->company->name:''  }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.type') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">

                                        @if( $contracts->type == config('array.productsTypeIndex'))
                                            {{trans('general.products')}} ( {{(isset($contracts->products->name))? $contracts->products->name:'' }} )
                                        @elseif( $contracts->type == config('array.domainsTypeIndex'))
                                            {{trans('general.domains')}} ( {{(isset($contracts->domains->name))? $contracts->domains->name:'' }} )

                                        @elseif( $contracts->type == config('array.webHostingPlansTypeIndex'))
                                            {{trans('general.web_hosting_plans')}} ( {{(isset($contracts->webHostingPlans->name))? $contracts->webHostingPlans->name:'' }} )

                                        @elseif( $contracts->type == config('array.serverTypeIndex'))
                                            {{trans('general.server_detail')}} ( {{(isset($contracts->server_detail->name))? $contracts->server_detail->name:'' }} )

                                        @elseif( $contracts->type == config('array.supportTypeIndex'))
                                            {{trans('general.support')}} ( {{(isset($contracts->support->name))? $contracts->support->name:'' }} )

                                        @endif

                            </label>
                        </div>
                    </div>

                    


                    </div>

@if(count($oContractsRenewalResults))


                <div class="row">
                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.from_date') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ $oContractsRenewalResults->first()->from_date  }}</label>
                        </div>
                    </div>


                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.to_date') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ $oContractsRenewalResults->first()->to_date  }}</label>
                        </div>
                    </div>

                </div>
   @endif
<div class="row">

    <div class="">
        <div class="form-group no-margin-hr">
            <label class="control-label">{{ trans('general.description') }}  </label>
        </div>
    </div>

    <div class="col-sm-12 text-left longHtmlContainer">
        <div class="form-group no-margin-hr">
            {!!  $contracts['description'] !!}
        </div>
    </div>

</div>
                <div class="row">

                    <div class="col-xs-offset-6 col-xs-3">


                        <a href="/client/contracts/{{ $contracts['id'] }}/edit"
                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                    </div>
                    <div class=" col-xs-3">
                        {!! Form::open(['method' => 'DELETE',
                'url' => ['/client/contracts',$contracts['id']]]) !!}
                        <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                            <i class="fa fa-trash"></i>
                            {{trans('general.delete')}}
                        </button>
                        {!! Form::close() !!}
                    </div>

                </div>


            </div>
                <!-- row -->
            </div>






                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('general.contracts_renewalTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.contracts_renewalTableDescription') }}</p>


                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.contracts_renewal.create').'?contracts_id='.$contracts['id'] }}"class="btn btn-primary form-control">
                                                + {{trans('general.contracts_renewalCreate')}}
                                            </a>
                                        </div>

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oContractsRenewalResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.price'), 'price', $oContractsRenewalResults) !!}
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.from_date'), 'from_date', $oContractsRenewalResults) !!}
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.to_date'), 'to_date', $oContractsRenewalResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.description'), 'description', $oContractsRenewalResults) !!}
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oContractsRenewalResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oContractsRenewalResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{ $oResult->price }}</td>

                                                        <td>{{ $oResult->from_date }}</td>
                                                        <td>{{ $oResult->to_date }}</td>

                                                        <td>{{ $oResult->description }}</td>

                                                        <td>


                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

                                                                    <a href="/client/contracts_renewal/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"> {{trans('general.details')}}</a>


                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/contracts_renewal',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                        {{trans('general.delete')}}
                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/contracts_renewal/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"> {{trans('general.edit')}}</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oContractsRenewalResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oContractsRenewalResults->firstItem() }} {{trans('general.to')}} {{ $oContractsRenewalResults->lastItem() }} {{trans('general.of')}} {{ $oContractsRenewalResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oContractsRenewalResults->appends(Input::except('page_renewal'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>










                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        <div class=" col-xs-8">
                                            <h3 class="box-title m-b-0">{{ trans('general.contracts_documentsTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.contracts_documentsTableDescription') }}</p>


                                        </div>
                                        <div class="col-xs-4">
                                            <a  href="{{route('client.contracts_documents.create').'?contracts_id='.$contracts['id'] }}"class="btn btn-primary form-control">
                                                + {{trans('general.contracts_documentsCreate')}}
                                            </a>
                                        </div>


                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oContractsDocumentsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('general.contracts'), 'contracts_id', $oContractsDocumentsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.products'), 'products_id', $oContractsDocumentsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.name'), 'name', $oContractsDocumentsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('general.links'), 'links', $oContractsDocumentsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.description'), 'description', $oContractsDocumentsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('general.type'), 'type', $oContractsDocumentsResults) !!}
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oContractsDocumentsResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oContractsDocumentsResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{ $oResult->contracts_id }}</td>

                                                        <td>{{ $oResult->products_id }}</td>

                                                        <td>{{ $oResult->name }}</td>

                                                        <td>{{ $oResult->links }}</td>

                                                        <td>{{ $oResult->description }}</td>

                                                        <td>{{ $oResult->type }}</td>


                                                        <td>


                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

                                                                    <a href="/client/contracts_documents/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"> {{trans('general.details')}}</a>


                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/contracts_documents',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                        {{trans('general.delete')}}
                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/contracts_documents/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"> {{trans('general.edit')}}</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if(count($oContractsDocumentsResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oContractsDocumentsResults->firstItem() }} {{trans('general.to')}} {{ $oContractsDocumentsResults->lastItem() }} {{trans('general.of')}} {{ $oContractsDocumentsResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oContractsDocumentsResults->appends(Input::except('page_documents'))->appends($request->all())->render()) !!}
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