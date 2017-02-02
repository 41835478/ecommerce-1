@extends('client.layouts.main')
@section('title', trans('general.company'))
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('fxweb.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('reports::reports.ClosedOrders') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('reports::reports.ModuleTitle') }}</a></li>
                        <li class="active">{{ trans('reports::reports.ClosedOrders') }}</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <form role="search" class="app-search hidden-xs pull-right">
                        <input type="text" placeholder=" {{ trans('reports::reports.search') }} ..." class="form-control">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">

                        <h3 class="box-title m-b-0">{{ trans('reports::reports.tableHead') }}</h3>
                        <p class="text-muted m-b-20">{{ trans('reports::reports.tableDescription') }}</p>
                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">{!! th_sort(trans('general.id'), 'id', $oResults) !!}</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if (count($oResults))
                                {{-- */$i=0;/* --}}
                                {{-- */$class='';/* --}}
                                @foreach($oResults as $oResult)
                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                    <tr class="tr {{ $class }}">

                                        <td>{{ $oResult->id }}</td>




                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        @if (count($oResults))
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 ">
                                    <span class="text-xs">{{trans('reports::reports.showing')}} {{ $oResults->firstItem() }} {{trans('reports::reports.to')}} {{ $oResults->lastItem() }} {{trans('reports::reports.of')}} {{ $oResults->total() }} {{trans('reports::reports.entries')}}</span>
                                </div>


                                <div class="col-xs-12 col-sm-6 ">
                                    {!! str_replace('/?', '?', $oResults->appends(Input::except('page'))->appends($aFilterParams)->render()) !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
        <!-- .right panel -->
        <div class="right-side-panel">
            <div class="scrollable-right container">
                <!-- .Theme settings -->
                <h3 class="title-heading">{{ trans('reports::reports.search') }}</h3>

                {!! Form::open(['method'=>'get','id'=>'searchForm', 'class'=>'form-horizontal']) !!}

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-success">
                            {!! Form::checkbox('exactLogin', 1, $aFilterParams['exactLogin'], ['class'=>'px','id'=>'exactLogin']) !!}
                            <label for="exactLogin">{{ trans('reports::reports.ExactLogin') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group" id="from_login_li">
                    <div class="col-md-12">
                        {!! Form::text('from_login', $aFilterParams['from_login'], ['placeholder'=>trans('reports::reports.FromLogin'),'class'=>'form-control input-sm']) !!}
                    </div>
                </div>

                <div class="form-group" id="to_login_li">
                    <div class="col-md-12">
                        {!! Form::text('to_login', $aFilterParams['to_login'], ['placeholder'=>trans('reports::reports.ToLogin'),'class'=>'form-control input-sm']) !!}
                    </div>
                </div>

                <div class="form-group" id="login_li">
                    <div class="col-md-12">
                        {!! Form::text('login', $aFilterParams['login'], ['placeholder'=>trans('reports::reports.Login'),'class'=>'form-control input-sm']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('server_id', $serverTypes, $aFilterParams['server_id'], ['class'=>'form-control  input-sm']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('from_date', $aFilterParams['from_date'], ['placeholder'=>trans('reports::reports.FromDate'),'class'=>'form-control input-sm mydatepicker']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('to_date', $aFilterParams['to_date'], ['placeholder'=>trans('reports::reports.ToDate'),'class'=>'form-control input-sm mydatepicker']) !!}
                        <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-success">
                            {!! Form::checkbox('all_symbols', 1, $aFilterParams['all_symbols'], ['class'=>'px','id'=>'all-symbols-chx']) !!}
                            <label for="all-symbols-chx">{{ trans('reports::reports.AllSymbols') }}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('symbol[]', $aSymbols,((!is_array($aFilterParams['symbol']))? explode(',',$aFilterParams['symbol']):$aFilterParams['symbol']), ['multiple'=>true,'class'=>'form-control input-sm','disabled'=>true,'id'=>'all-symbols-slc']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::select('type', $aTradeTypes, $aFilterParams['type'], ['class'=>'form-control  input-sm']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12"></label>
                    <div class="col-md-12">
                        {!! Form::submit(trans('reports::reports.search'), ['class'=>'btn btn-info btn-sm', 'name' => 'search']) !!}
                    </div>
                </div>

                {!! Form::hidden('sort', $aFilterParams['sort']) !!}
                {!! Form::hidden('order', $aFilterParams['order']) !!}
                {!! Form::close()!!}
            </div>
        </div>

        @stop
@section('hidden')

    {{ trans('general.company') }}
    /client/company/create {{ trans('general.addcompany') }}

    @include('client.partials.messages')






    <div class="padding">
        <div class="theme-default page-mail">
            <div class="mail-nav">
                <div class="navigation">
                    {!! Form::open(['method'=>'get', 'class'=>'form-bordered']) !!}
                    <ul class="sections">
                        <li class="active"><a href="#"> <i
                                        class="fa fa-search"></i> {{ trans('general.search') }} </a></li>




                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('id', $aFilterParams['id'], ['placeholder'=>trans('general.id'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('name', $aFilterParams['name'], ['placeholder'=>trans('general.name'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('email', $aFilterParams['email'], ['placeholder'=>trans('general.email'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('phone', $aFilterParams['phone'], ['placeholder'=>trans('general.phone'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('website', $aFilterParams['website'], ['placeholder'=>trans('general.website'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('address', $aFilterParams['address'], ['placeholder'=>trans('general.address'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('country', $aFilterParams['country'], ['placeholder'=>trans('general.country'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('city', $aFilterParams['city'], ['placeholder'=>trans('general.city'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('zipcode', $aFilterParams['zipcode'], ['placeholder'=>trans('general.zipcode'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('status', $aFilterParams['status'], ['placeholder'=>trans('general.status'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                        
                        <li>
                            <div class=" nav-input-div  ">
                                {!! Form::submit(trans('general.search'), ['class'=>'btn btn-info btn-sm', 'name' => 'search']) !!}
                            </div>
                        </li>
                        <li class="divider"></li>
                    </ul>


                    {!! Form::hidden('sort', $aFilterParams['sort']) !!}
                    {!! Form::hidden('order', $aFilterParams['order']) !!}


                </div>
            </div>

            <div class="mail-container ">
                <div class="mail-container-header">
                    {{ trans('general.company') }}
                </div>
                <div class="center_page_all_div">

                    <div class="table-light">
                        <div class="table-header">
                            <div class="table-caption">

                                <a href="/client/company/create" style="float:right;">
                                    <input name="" class="btn btn-primary btn-flat" type="button"
                                           value="{{ trans('general.addcompany') }}"> </a>

                            </div>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>


                                                          <th class="no-warp">{!! th_sort(trans('general.id'), 'id', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.name'), 'name', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.email'), 'email', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.phone'), 'phone', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.website'), 'website', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.address'), 'address', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.country'), 'country', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.city'), 'city', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.zipcode'), 'zipcode', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.status'), 'status', $oResults) !!}</th>

                                                          <th class="no-warp">

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
                                            <a href="/client/company/{{ $oResult->id }}"
                                               class="fa fa-file-text"></a>


                                            {!! Form::open(['method' => 'DELETE',
                                            'url' => ['/client/company',$oResult->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}

                                            <a href="/client/company/{{ $oResult->id }}/edit"
                                               class="fa fa-edit"></a>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <div class="table-footer">
                            @if (count($oResults))
                                {!! str_replace('/?', '?', $oResults->appends(Input::except('page'))->appends($aFilterParams->all())->render()) !!}
                                @if($oResults->total()>25)

                                    <div class="DT-lf-right change_page_all_div">


                                        {!! Form::text('page',$oResults->currentPage(), ['type'=>'number', 'placeholder'=>trans('accounts::accounts.page'),'class'=>'form-control input-sm']) !!}



                                        {!! Form::submit(trans('general.go'), ['class'=>'btn btn-info btn-sm', 'name' => 'search']) !!}


                                    </div>
                                @endif

                                <div class="col-sm-3">
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('general.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    <script>
        init.push(function () {


            $('.tooltip_number').tooltip();


            $('#all-groups-chx').change(function () {

                if ($('#all-groups-chx').prop('checked')) {
                    $('#all-groups-slc').attr('disabled', 'disabled');
                } else {
                    $('#all-groups-slc').removeAttr('disabled');
                }
            });
            if ($('#all-groups-chx').prop('checked')) {
                $('#all-groups-slc').attr('disabled', 'disabled');
            } else {
                $('#all-groups-slc').removeAttr('disabled');
            }


            $('#exactLogin').change(function () {
                if ($('#exactLogin').prop('checked')) {
                    $("#from_login_li,#to_login_li").hide();
                    $("#login_li").show();
                } else {
                    $("#from_login_li,#to_login_li").show();
                    $("#login_li").hide();
                }
            });

            if ($('#exactLogin').prop('checked')) {
                $("#from_login_li,#to_login_li").hide();
                $("#login_li").show();
            } else {
                $("#from_login_li,#to_login_li").show();
                $("#login_li").hide();
            }

        });

    </script>
@stop