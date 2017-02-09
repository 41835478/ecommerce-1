@extends('client.layouts.main')
@section('title', trans('general.company'))
@section('content')





        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.company') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.company') }}</a></li>
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
                <span class="panel-title">{{ trans('general.companyInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['id'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['name'] }}</label>
                        </div>
                    </div>

                    </div>


                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.email') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['email'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.phone') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['phone'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.website') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['website'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.address') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['address'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.country') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['country'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.city') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['city'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.zipcode') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['zipcode'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.status') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$company['status'] }}</label>
                        </div>
                    </div>

                    </div>

                <div class="row">

                    <div class="col-xs-offset-6 col-xs-3">


                        <a href="/client/company/{{ $company['id'] }}/edit"
                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                    </div>
                    <div class=" col-xs-3">
                        {!! Form::open(['method' => 'DELETE',
                'url' => ['/client/company',$company['id']]]) !!}
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
                                            <h3 class="box-title m-b-0">{{ trans('general.contactsTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.contactsTableDescription') }}</p>


                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.contacts.create').'?company_id='.$company['id'] }}"class="btn btn-primary form-control">
                                                + {{trans('general.contactsCreate')}}
                                            </a>
                                        </div>

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oContactsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('general.company'), 'company_id', $oContactsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.users'), 'users_id', $oContactsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.phone'), 'phone', $oContactsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('general.description'), 'description', $oContactsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.status'), 'status', $oContactsResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('general.permissions'), 'permissions', $oContactsResults) !!}
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oContactsResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oContactsResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{ $oResult->company_id }}</td>

                                                        <td>{{ $oResult->users_id }}</td>

                                                        <td>{{ $oResult->phone }}</td>

                                                        <td>{{ $oResult->description }}</td>

                                                        <td>{{ $oResult->status }}</td>

                                                        <td>{{ $oResult->permissions }}</td>


                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

                                                                    <a href="/admin/contacts/{{ $oResult->id }}"
                                                               class="fa fa-file-text"></a>


                                                            {!! Form::open(['method' => 'DELETE',
                                                            'url' => ['/admin/contacts',$oResult->id]]) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}

                                                            <a href="/admin/contacts/{{ $oResult->id }}/edit"
                                                               class="fa fa-edit"></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oContactsResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oContactsResults->firstItem() }} {{trans('general.to')}} {{ $oContactsResults->lastItem() }} {{trans('general.of')}} {{ $oContactsResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oContactsResults->appends(Input::except('page_contacts'))->appends($request->all())->render()) !!}
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
                                            <a  href="{{route('client.contracts.create').'?company_id='.$company['id'] }}"class="btn btn-primary form-control">
                                                + {{trans('general.contractsCreate')}}
                                            </a>
                                        </div>
                                        @include('client.partials.messages')
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

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.description'), 'description', $oContractsResults) !!}
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

                                                        <td>{{ $oResult->description }}</td>


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







                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">




                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('general.licensesTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.licensesTableDescription') }}</p>


                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.licenses.create').'?company_id='.$company['id'] }}"class="btn btn-primary form-control">
                                                + {{trans('general.licensesCreate')}}
                                            </a>
                                        </div>



                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oLicensesResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('general.company'), 'company_id', $oLicensesResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.license'), 'license', $oLicensesResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.type'), 'type', $oLicensesResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('general.status'), 'status', $oLicensesResults) !!}
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oLicensesResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oLicensesResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{(isset($oResult->company->name))? $oResult->company->name:'' }}</td>

                                                        <td>{{ $oResult->license }}</td>

                                                        <td>{{ $oResult->type }}</td>

                                                        <td>{{ $oResult->status }}</td>


                                                        <td>


                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>


                                                                    <a href="/client/licenses/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"> {{trans('general.details')}}</a>


                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/licenses',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                        {{trans('general.delete')}}
                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/licenses/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"> {{trans('general.edit')}}</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oLicensesResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oLicensesResults->firstItem() }} {{trans('general.to')}} {{ $oLicensesResults->lastItem() }} {{trans('general.of')}} {{ $oLicensesResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oLicensesResults->appends(Input::except('page_licenses'))->appends($request->all())->render()) !!}
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