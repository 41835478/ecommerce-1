@extends('client.layouts.main')
@section('title', trans('general.server_spec'))
@section('content')


    {{--*/
    $canAction=canAccess('admin.server_spec.action');
    $canServerDetailAction=canAccess('admin.server_detail.action');
    /*--}}



        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.server_spec') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.server_spec') }}</a></li>
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
                <span class="panel-title">{{ trans('general.server_specInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_spec['name'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.hard_disk') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_spec['hard_disk'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.cpu') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_spec['cpu'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.port') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_spec['port'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.ram') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$server_spec['ram'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.raid') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                {{(array_key_exists($server_spec['raid'],config('array.server_spec_raid')))? config('array.server_spec_raid')[$server_spec['raid']]:'' }}
                            </label>
                        </div>
                    </div>

                    </div>



@if($canAction)
                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">


                            <a href="/client/server_spec/{{ $server_spec['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                        </div>
                        <div class=" col-xs-3">
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/client/server_spec',$server_spec['id']]]) !!}
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
                                            <h3 class="box-title m-b-0">{{ trans('general.server_detailTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.server_detailTableDescription') }}</p>



                                        </div>
                                        @if($canServerDetailAction)
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.server_detail.create')}}?server_company_spec_id={{ (isset($server_spec->server_company()->first()->id))?$server_spec->server_company()->first()->id:'' }}"class="btn btn-primary form-control">
                                                + {{trans('general.server_detailCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oServerDetailResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.name'), 'name', $oServerDetailResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! trans('general.server_company') !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('general.cost'), 'cost', $oServerDetailResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.unique_name'), 'unique_name', $oServerDetailResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('general.operating_system'), 'operating_system', $oServerDetailResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                    {!! th_sort(trans('general.control_panel'), 'control_panel', $oServerDetailResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">
                                                    {!! th_sort(trans('general.additional_cost'), 'additional_cost', $oServerDetailResults) !!}
                                                </th>

                                                @if($canServerDetailAction)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
@endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oServerDetailResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oServerDetailResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td> <a href="/client/server_detail/{{ $oResult->id }}" > {{ $oResult->name }}</a></td>

                                                        <td>
                                                            @if(isset($oResult->server_company_spec->id))

                                                                {{(isset($oResult->server_company_spec->server_company->name))? $oResult->server_company_spec->server_company->name:'' }}

                                                            @endif

                                                        </td>

                                                        <td>{{ $oResult->cost }}</td>

                                                        <td>{{ $oResult->unique_name }}</td>

                                                        <td>{{ (array_key_exists($oResult->operating_system,config('array.server_detail_systems')))? config('array.server_detail_systems')[$oResult->operating_system]:'' }}</td>
                                                        <td>{{ (array_key_exists($oResult->control_panel,config('array.server_detail_panel')))? config('array.server_detail_panel')[$oResult->control_panel]:'' }}</td>


                                                        <td>{{ $oResult->additional_cost }}</td>


                                                        @if($canServerDetailAction)
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>




                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/server_detail',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow " >
                                                                        <i class="fa fa-trash"></i>

                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/server_detail/{{ $oResult->id }}/edit"
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
                                        @if (count($oServerDetailResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oServerDetailResults->firstItem() }} {{trans('general.to')}} {{ $oServerDetailResults->lastItem() }} {{trans('general.of')}} {{ $oServerDetailResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oServerDetailResults->appends(Input::except('page_server_detail'))->appends($request->all())->render()) !!}
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