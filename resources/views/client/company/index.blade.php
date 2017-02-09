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
                        <li class="active">{{ trans('general.company') }}</li>
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



                        <div class=" col-xs-9">
                            <h3 class="box-title m-b-0">{{ trans('general.companyTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('general.companyTableDescription') }}</p>


                        </div>
                        <div class="col-xs-3">
                            <a  href="{{route('client.company.create')}}"class="btn btn-primary form-control">
                                + {{trans('general.companyCreate')}}
                            </a>
                        </div>

                        @include('client.partials.messages')
                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                        {!! th_sort(trans('general.id'), 'id', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                        {!! th_sort(trans('general.name'), 'name', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                        {!! th_sort(trans('general.email'), 'email', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                        {!! th_sort(trans('general.phone'), 'phone', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                        {!! th_sort(trans('general.website'), 'website', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                        {!! th_sort(trans('general.address'), 'address', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                        {!! th_sort(trans('general.country'), 'country', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                        {!! th_sort(trans('general.city'), 'city', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                        {!! th_sort(trans('general.zipcode'), 'zipcode', $oResults) !!}
                                    </th>

                                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                        {!! th_sort(trans('general.status'), 'status', $oResults) !!}
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

                                                                                <td>{{ $oResult->email }}</td>

                                                                                <td>{{ $oResult->phone }}</td>

                                                                                <td>{{ $oResult->website }}</td>

                                                                                <td>{{ $oResult->address }}</td>

                                                                                <td>{{ $oResult->country }}</td>

                                                                                <td>{{ $oResult->city }}</td>

                                                                                <td>{{ $oResult->zipcode }}</td>

                                                                                <td>{{ $oResult->status }}</td>


                                        <td>
                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                            <a href="/client/company/{{ $oResult->id }}"
                                               class="fa fa-file-text"> {{trans('general.details')}}</a>


                                            {!! Form::open(['method' => 'DELETE',
                                            'url' => ['/client/company',$oResult->id]]) !!}
                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                        <i class="fa fa-trash"></i>
                                                        {{trans('general.delete')}}
                                                    </button>
                                            {!! Form::close() !!}

                                            <a href="/client/company/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"> {{trans('general.edit')}}</a>

                                            <a href="{{ route('client.contacts.index') }}?company_id={{ $oResult->id }}"
                                               class="fa fa-edit">contacts</a>


                                            <a href="{{ route('client.contacts.create') }}?company_id={{ $oResult->id }}"
                                               class="fa fa-edit">add contacts</a>

                                            <a href="{{ route('client.licenses.index') }}?company_id={{ $oResult->id }}"
                                               class="fa fa-edit">license</a>


                                            <a href="{{ route('client.licenses.create') }}?company_id={{ $oResult->id }}"
                                               class="fa fa-edit">add license</a>

                                            <a href="{{ route('client.contracts.index') }}?company_id={{ $oResult->id }}"
                                               class="fa fa-edit">contracts</a>


                                            <a href="{{ route('client.contracts.create') }}?company_id={{ $oResult->id }}"
                                               class="fa fa-edit">add contracts</a>

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
                        {!! Form::text('name', $aFilterParams['name'], ['placeholder'=>trans('general.name'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('email', $aFilterParams['email'], ['placeholder'=>trans('general.email'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('phone', $aFilterParams['phone'], ['placeholder'=>trans('general.phone'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('website', $aFilterParams['website'], ['placeholder'=>trans('general.website'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('address', $aFilterParams['address'], ['placeholder'=>trans('general.address'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('country', $aFilterParams['country'], ['placeholder'=>trans('general.country'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('city', $aFilterParams['city'], ['placeholder'=>trans('general.city'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('zipcode', $aFilterParams['zipcode'], ['placeholder'=>trans('general.zipcode'),'class'=>'form-control input-sm ']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('status', $aFilterParams['status'], ['placeholder'=>trans('general.status'),'class'=>'form-control input-sm ']) !!}
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
