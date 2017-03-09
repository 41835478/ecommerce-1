@extends('client.layouts.main')
@section('title', trans('general.server_detail'))
@section('content')





        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.server_detail') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.server_detail') }}</a></li>
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
                <span class="panel-title">{{ trans('general.server_detailInfo') }}</span>
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
                            <label class="control-label">{{$server_detail['name'] }}</label>
                        </div>
                    </div>



                                    <div class="col-sm-2 text-right">
                                        <div class="form-group no-margin-hr">
                                            <label class="control-label">{{ trans('general.server_spec') }}  </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 text-left">
                                        <div class="form-group no-margin-hr">
                                            <label class="control-label">

                                                    {{(isset($server_detail->server_spec()->first()->name))? $server_detail->server_spec()->first()->name:'' }}




                                            </label>
                                        </div>
                                    </div>



                    </div>

                <div class="row">


                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.company') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                {{ (array_key_exists($server_detail['company_id'],config('array.server_detail_company')))? config('array.server_detail_company')[$server_detail['company_id']]:'' }}
                            </label>
                        </div>
                    </div>


                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.location') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                {{ (array_key_exists($server_detail['location'],config('array.server_detail_location')))? config('array.server_detail_location')[$server_detail['location']]:'' }}
                            </label>
                        </div>
                    </div>


                </div>


                <div class="row">

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.unique_name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_detail['unique_name'] }}</label>
                        </div>
                    </div>


                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.cost') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_detail['cost'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.operating_system') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                {{ (array_key_exists($server_detail['operating_system'],config('array.server_detail_systems')))? config('array.server_detail_systems')[$server_detail['operating_system']]:'' }}
                                </label>
                        </div>
                    </div>


                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.control_panel') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                {{ (array_key_exists($server_detail['control_panel'],config('array.server_detail_panel')))? config('array.server_detail_panel')[$server_detail['control_panel']]:'' }}
                            </label>
                        </div>
                    </div>


                    </div>


                <div class="row">


                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.period') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                {{ (array_key_exists($server_detail['period'],config('array.server_detail_period')))? config('array.server_detail_period')[$server_detail['period']]:'' }}
                            </label>
                        </div>
                    </div>




                </div>




                <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">


                            <a href="/client/server_detail/{{ $server_detail['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                        </div>
                        <div class=" col-xs-3">
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/client/server_detail',$server_detail['id']]]) !!}
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

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('general.server_ipTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.server_ipTableDescription') }}</p>



                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.server_ip.create')}}?server_detail_id={{$server_detail['id']}}"class="btn btn-primary form-control">
                                                + {{trans('general.server_ipCreate')}}
                                            </a>
                                        </div>

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oServerIpResults) !!}
                                                </th>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.ip'), 'ip', $oServerIpResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.default_getway'), 'default_getway', $oServerIpResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('general.mask'), 'mask', $oServerIpResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.name_server_1'), 'name_server_1', $oServerIpResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('general.name_server_2'), 'name_server_2', $oServerIpResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                    {!! th_sort(trans('general.type'), 'type', $oServerIpResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                    {!! th_sort(trans('general.display'), 'display', $oServerIpResults) !!}
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oServerIpResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oServerIpResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{ $oResult->ip }}</td>

                                                        <td>{{ $oResult->default_getway }}</td>

                                                        <td>{{ $oResult->mask }}</td>

                                                        <td>{{ $oResult->name_server_1 }}</td>

                                                        <td>{{ $oResult->name_server_2 }}</td>


                                                        <td>{{ (array_key_exists($oResult->type,config('array.server_ip_type')))? config('array.server_ip_type')[$oResult->type]:'' }}</td>
                                                        <td>{{ (array_key_exists($oResult->display,config('array.server_ip_display')))? config('array.server_ip_display')[$oResult->display]:'' }}</td>



                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

                                                                    <a href="/client/server_ip/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"></a>


                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/server_ip',$oResult->id]]) !!}
                                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/server_ip/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oServerIpResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oServerIpResults->firstItem() }} {{trans('general.to')}} {{ $oServerIpResults->lastItem() }} {{trans('general.of')}} {{ $oServerIpResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oServerIpResults->appends(Input::except('page_server_ip'))->appends($request->all())->render()) !!}
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