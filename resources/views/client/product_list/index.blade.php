@extends('client.layouts.main')
@section('title', trans('product_list'))
@section('content')

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
                                {!! Form::text('name', $aFilterParams['name'], ['placeholder'=>trans('general.name'),'class'=>'form-control input-sm']) !!}
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
                    {{ trans('general.product_list') }}
                </div>
                <div class="center_page_all_div">
                    @include('client.partials.messages')

                    <div class="table-light">
                        <div class="table-header">
                            <div class="table-caption">
                                {{ trans('general.product_list') }}

                                <a href="/client/product_list/create" style="float:right;">
                                    <input name="new_menu_submit" class="btn btn-primary btn-flat" type="button"
                                           value="{{ trans('accounts::accounts.addAccount') }}"> </a>

                            </div>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="no-warp">{!! th_sort(trans('general.id'), 'id', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.name'), 'name', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.deleted'), 'deleted', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.description'), 'description', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.created_at'), 'created_at', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.modified_at'), 'modified_at', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.created_by_id'), 'created_by_id', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.modified_by_id'), 'modified_by_id', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.assigned_user_id'), 'assigned_user_id', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.product_id'), 'product_id', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.type'), 'type', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.version_id'), 'version_id', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.version'), 'version', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.download_id'), 'download_id', $oResults) !!}</th>
                                <th class="no-warp">{!! th_sort(trans('general.knowledge_base_article_id'), 'knowledge_base_article_id', $oResults) !!}</th>
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
                                        <td>{{ $oResult->deleted }}</td>
                                        <td>{{ $oResult->description }}</td>
                                        <td>{{ $oResult->created_at }}</td>
                                        <td>{{ $oResult->modified_at }}</td>
                                        <td>{{ $oResult->created_by_id }}</td>
                                        <td>{{ $oResult->modified_by_id }}</td>
                                        <td>{{ $oResult->assigned_user_id }}</td>
                                        <td>{{ $oResult->product_id }}</td>
                                        <td>{{ $oResult->type }}</td>
                                        <td>{{ $oResult->version_id }}</td>
                                        <td>{{ $oResult->version }}</td>
                                        <td>{{ $oResult->download_id }}</td>
                                        <td>{{ $oResult->knowledge_base_article_id }}</td>

                                        <td>
                                            <a href="/client/product_list/{{ $oResult->id }}"
                                               class="fa fa-file-text"></a>


                                            {!! Form::open(['method' => 'DELETE',
                                            'url' => ['/client/product_list',$oResult->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}

                                            <a href="/client/product_list/{{ $oResult->id }}/edit"
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