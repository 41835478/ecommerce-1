@extends('client.layouts.main')
@section('title', trans('general.domains'))
@section('content')





        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.domains') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.domains') }}</a></li>
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
                <span class="panel-title">{{ trans('general.domainsInfo') }}</span>
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
                                            <label class="control-label">{{$webHostingPlans['name'] }}</label>
                                        </div>
                                    </div>


                                    <div class="col-sm-2 text-right">
                                        <div class="form-group no-margin-hr">
                                            <label class="control-label">{{ trans('general.web_space') }}  </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 text-left">
                                        <div class="form-group no-margin-hr">
                                            <label class="control-label">{{$webHostingPlans['web_space'] }}</label>
                                        </div>
                                    </div>




                                </div>
                <div class="row">

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.domains_number') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$webHostingPlans['domains_number'] }}</label>
                        </div>
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.emails') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$webHostingPlans['emails'] }}</label>
                        </div>
                    </div>
                </div>



                <div class="row">

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.traffic') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$webHostingPlans['traffic'] }}</label>
                        </div>
                    </div>

                </div>





                <div class="row">

                    <div class="col-xs-offset-6 col-xs-3">


                        <a href="/client/domains/{{ $webHostingPlans['id'] }}/edit"
                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                    </div>
                    <div class=" col-xs-3">
                        {!! Form::open(['method' => 'DELETE',
                'url' => ['/client/domains',$webHostingPlans['id']]]) !!}
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

                                            <h3 class="box-title m-b-0">{{ trans('general.contractsTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.contractsTableDescription') }}</p>
                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.contracts.create').'?type='.config('array.webHostingPlansTypeIndex').'&products_id='.$webHostingPlans['id']}}"class="btn btn-primary form-control">
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
                                                    {!! th_sort(trans('general.web_hosting_plans'), 'products_id', $oContractsResults) !!}
                                                </th>

                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>

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

                                                        <td> <a href="/client/contracts/{{ $oResult->id }}" > {{(isset($oResult->company->name))? $oResult->company->name:'' }}</a></td>

                                                        <td>{{(isset($oResult->webHostingPlans()->first()->name))? $oResult->webHostingPlans()->first()->name:'' }}</td>



                                                        <td>


                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>





                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/contracts',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/contracts/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"> </a>


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

            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



@stop