@extends('client.layouts.main')
@section('title', trans('general.server_ip'))
@section('content')



    {{--*/
    $canAction=canAccess('admin.server_ip.action');
    $canServerAccessAction=canAccess('admin.server_access.action');
    /*--}}


        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.server_ip') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.server_ip') }}</a></li>
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
                <span class="panel-title">{{ trans('general.server_ipInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.server_detail') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                {{(isset( $server_ip->server_detail()->first()->name))? $server_ip->server_detail()->first()->name:'' }}

                            </label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.ip') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_ip['ip'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.default_getway') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_ip['default_getway'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.mask') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_ip['mask'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name_server_1') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_ip['name_server_1'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name_server_2') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_ip['name_server_2'] }}</label>
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
                                {{ (array_key_exists($server_ip['type'] ,config('array.server_ip_type')))? config('array.server_ip_type')[$server_ip['type'] ]:'' }}
                            </label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.display') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                {{ (array_key_exists($server_ip['display'] ,config('array.server_ip_display')))? config('array.server_ip_display')[$server_ip['display'] ]:'' }}
                            </label>
                        </div>
                    </div>

                    </div>



@if($canAction)
                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">


                            <a href="/client/server_ip/{{ $server_ip['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                        </div>
                        <div class=" col-xs-3">
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/client/server_ip',$server_ip['id']]]) !!}
                            <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                <i class="fa fa-trash"></i>
                                {{trans('general.delete')}}
                            </button>
                            {!! Form::close() !!}
                        </div>

                    </div>
@endif

                </div>
                <!-- row -->
            </div>




                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('client.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('general.server_accessTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.server_accessTableDescription') }}</p>



                                        </div>
                                        @if($canServerAccessAction)
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.server_access.create')}}?server_ip_id={{$server_ip['id']}}"class="btn btn-primary form-control">
                                                + {{trans('general.server_accessCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oServerAccessResults) !!}
                                                </th>



                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.type'), 'type', $oServerAccessResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.user_name'), 'user_name', $oServerAccessResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('general.password'), 'password', $oServerAccessResults) !!}
                                                </th>
@if($canServerAccessAction)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
@endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oServerAccessResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oServerAccessResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>


                                                        <td>{{(array_key_exists($oResult->type,config('array.server_access_type')))? config('array.server_access_type')[$oResult->type]: '' }}</td>

                                                        <td> <a href="/client/server_access/{{ $oResult->id }}" > {{ $oResult->user_name }}</a></td>

                                                        <td>{{ $oResult->password }}</td>


                                                        @if($canServerAccessAction)
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>




                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/server_access',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow " >
                                                                        <i class="fa fa-trash"></i>

                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/server_access/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                            @endif
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oServerAccessResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oServerAccessResults->firstItem() }} {{trans('general.to')}} {{ $oServerAccessResults->lastItem() }} {{trans('general.of')}} {{ $oServerAccessResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oServerAccessResults->appends(Input::except('page_server_access'))->appends($request->all())->render()) !!}
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