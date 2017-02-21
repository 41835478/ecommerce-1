@extends('client.layouts.main')
@section('title', trans('general.server_company'))
@section('content')





        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.server_company') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.server_company') }}</a></li>
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
                <span class="panel-title">{{ trans('general.server_companyInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_company['name'] }}</label>
                        </div>
                    </div>

                    




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">


                            <a href="/client/server_company/{{ $server_company['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                        </div>
                        <div class=" col-xs-3">
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/client/server_company',$server_company['id']]]) !!}
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



                                        @include('client.partials.messages')

                                        <div class=" col-xs-6">
                                            <h3 class="box-title m-b-0">{{ trans('general.server_locationsTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.server_locationsTableDescription') }}</p>



                                        </div>
                                        <div class="col-xs-6">







                                                        {!! Form::model($request,['url' => '/client/server_locations', 'class' => 'form-horizontal']) !!}

                                                                <div class="row">
                                                                    <div class="form-group {{ $errors->has('server_company_id') ? 'has-error' : ''}}  col-xs-6" style="display: none;">
                                                                        {!! Form::label('server_company_id', trans('general.server_company_id'), ['class' => 'col-sm-4 control-label']) !!}
                                                                        <div class="col-sm-8">
                                                                            {!! Form::text('server_company_id',  $server_company['id'], ['class' => 'form-control']) !!}
                                                                            {!! $errors->first('server_company_id', '<p class="help-block">:message</p>') !!}
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group {{ $errors->has('location_id') ? 'has-error' : ''}}  col-xs-9">
                                                                         <div class="col-sm-12">
                                                                            {!! Form::select('location_id',config('array.server_locations'), null, ['class' => 'form-control']) !!}
                                                                            {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
                                                                        </div>
                                                                    </div>







                                                                <div class="form-group  col-sm-3">

                                                                        {!! Form::submit('Add', ['class' => 'btn btn-primary form-control']) !!}

                                                                </div>

                                                    </div>
                                                        {!! Form::close() !!}








                                        </div>

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oServerLocationResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('general.server_company'), 'server_company_id', $oServerLocationResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.location_id'), 'location_id', $oServerLocationResults) !!}
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oServerLocationResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oServerLocationResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{(isset($oResult->server_company->name))? $oResult->server_company->name:'' }}</td>

                                                        <td>{{ (array_key_exists($oResult->location_id,config('array.server_locations')))? config('array.server_locations')[$oResult->location_id]:'' }}</td>


                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

                                                                    <a href="/client/server_locations/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"></a>


                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/server_locations',$oResult->id]]) !!}
                                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/server_locations/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oServerLocationResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oServerLocationResults->firstItem() }} {{trans('general.to')}} {{ $oServerLocationResults->lastItem() }} {{trans('general.of')}} {{ $oServerLocationResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oServerLocationResults->appends(Input::except('page_server_location'))->appends($request->all())->render()) !!}
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
                                            <h3 class="box-title m-b-0">{{ trans('general.server_specTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.server_specTableDescription') }}</p>



                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.server_company_server_spec.create')}}?server_company_id={{$server_company['id']}}"class="btn btn-primary form-control">
                                                + {{trans('general.server_specCreate')}}
                                            </a>
                                        </div>

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oServerSpecResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('general.name'), 'name', $oServerSpecResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.hard_disk'), 'hard_disk', $oServerSpecResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.cpu'), 'cpu', $oServerSpecResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.ram'), 'ram', $oServerSpecResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!!trans('general.cost') !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! trans('general.period')!!}
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oServerSpecResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oServerSpecResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{ $oResult->name }}</td>

                                                        <td>{{ $oResult->hard_disk }}</td>

                                                        <td>{{ $oResult->cpu }}</td>

                                                        <td>{{ $oResult->ram }}</td>

                                                        <td>{{  $oResult->server_company->first()->cost }}</td>

                                                        <td>
                                                            {{  $oResult->server_company->first()->period }}</td>


                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

                                                                    <a href="/client/server_spec/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"></a>


                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/server_spec',$oResult->id]]) !!}
                                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/server_spec/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oServerSpecResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oServerSpecResults->firstItem() }} {{trans('general.to')}} {{ $oServerSpecResults->lastItem() }} {{trans('general.of')}} {{ $oServerSpecResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oServerSpecResults->appends(Input::except('page_server_spec'))->appends($request->all())->render()) !!}
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