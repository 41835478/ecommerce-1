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
                <span class="panel-title">{{ trans('general.productsInfo') }}</span>
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
                                            <label class="control-label">{{$products['name'] }}</label>
                                        </div>
                                    </div>
                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.products_list') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{(isset($products->productsList()->first()->name))? $products->productsList()->first()->name:'' }}</label>
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
                            <label class="control-label">{{$products['description'] }}</label>
                        </div>
                    </div>

                    </div>


                <div class="row">

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.article') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                @if(isset($products->article()->first()->name))
                                    <a href="/client/documents/{{$products['article']}}">{{$products->article()->first()->name }}</a>
                                @endif
                            </label>
                        </div>
                    </div>




                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.manual') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                @if(isset($products->manual()->first()->name))
                               <a href="/client/documents/{{$products['manual']}}">{{$products->manual()->first()->name}}</a>
                            @endif
                            </label>
                        </div>
                    </div>

                </div>






                <div class="row">

                    <div class="col-xs-offset-6 col-xs-3">


                        <a href="/client/products/{{ $products['id'] }}/edit"
                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                    </div>
                    <div class=" col-xs-3">
                        {!! Form::open(['method' => 'DELETE',
                'url' => ['/client/products',$products['id']]]) !!}
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
                                            <h3 class="box-title m-b-0">{{ trans('general.versionsTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.versionsTableDescription') }}</p>
                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.versions.create').'?products_id='.$products['id']}}"class="btn btn-primary form-control">
                                               + {{trans('general.versionsCreate')}}
                                            </a>
                                        </div>


                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oVersionsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.version'), 'version', $oVersionsResults) !!}
                                                </th>




                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.links'), 'links', $oVersionsResults) !!}
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.publish_date'), 'publish_date', $oVersionsResults) !!}
                                                </th>


                                                <th  >
                                                   </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oVersionsResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oVersionsResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>


                                                        <td>{{ $oResult->version }}</td>


                                                        <td>{{ $oResult->links }}</td>

                                                        <td>{{ $oResult->publish_date }}</td>



                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

                                                                    <a href="/client/versions/{{ $oResult->id }}"
                                                                       class="fa fa-file-text">  {{trans('general.details')}}</a>


                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/versions',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                        {{trans('general.delete')}}
                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/versions/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit">{{trans('general.edit')}}</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oVersionsResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oVersionsResults->firstItem() }} {{trans('general.to')}} {{ $oVersionsResults->lastItem() }} {{trans('general.of')}} {{ $oVersionsResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oVersionsResults->appends(Input::except('page_versions'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">




                                        <div class=" col-xs-9">

                                            <h3 class="box-title m-b-0">{{ trans('general.contractsTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.contractsTableDescription') }}</p>
                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.contracts.create').'?products_id='.$products['id']}}"class="btn btn-primary form-control">
                                                + {{trans('general.contractsCreate')}}
                                            </a>
                                        </div>


                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oContractsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('general.company'), 'company_id', $oContractsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.products'), 'products_id', $oContractsResults) !!}
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oContractsResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oContractsResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{(isset($oResult->company->name))? $oResult->company->name:'' }}</td>

                                                        <td>{{(isset($oResult->products->name))? $oResult->products->name:'' }}</td>



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
                                        @if (count($oContractsResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oContractsResults->firstItem() }} {{trans('general.to')}} {{ $oContractsResults->lastItem() }} {{trans('general.of')}} {{ $oContractsResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oContractsResults->appends(Input::except('page_contracts'))->appends($request->all())->render()) !!}
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