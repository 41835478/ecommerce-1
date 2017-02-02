@extends('client.layouts.main')
@section('title', trans('general.versions'))
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
                                {!! Form::text('id', $aFilterParams['id'], ['placeholder'=>trans('general.id'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('products_id', $aFilterParams['products_id'], ['placeholder'=>trans('general.products_id'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('version', $aFilterParams['version'], ['placeholder'=>trans('general.version'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('manual', $aFilterParams['manual'], ['placeholder'=>trans('general.manual'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('articale', $aFilterParams['articale'], ['placeholder'=>trans('general.articale'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('links', $aFilterParams['links'], ['placeholder'=>trans('general.links'),'class'=>'form-control input-sm']) !!}
                            </div>
                        </li>

                                                <li>
                            <div class=" nav-input-div  ">
                                {!! Form::text('release_notes', $aFilterParams['release_notes'], ['placeholder'=>trans('general.release_notes'),'class'=>'form-control input-sm']) !!}
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
                    {{ trans('general.versions') }}
                </div>
                <div class="center_page_all_div">
                    @include('client.partials.messages')

                    <div class="table-light">
                        <div class="table-header">
                            <div class="table-caption">
                                {{ trans('general.versions') }}

                                <a href="/client/versions/create" style="float:right;">
                                    <input name="" class="btn btn-primary btn-flat" type="button"
                                           value="{{ trans('general.addversions') }}"> </a>

                            </div>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>


                                                          <th class="no-warp">{!! th_sort(trans('general.id'), 'id', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.products_id'), 'products_id', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.version'), 'version', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.manual'), 'manual', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.articale'), 'articale', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.links'), 'links', $oResults) !!}</th>

                                                      <th class="no-warp">{!! th_sort(trans('general.release_notes'), 'release_notes', $oResults) !!}</th>

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

                                                                                    <td>{{ $oResult->products_id }}</td>

                                                                                    <td>{{ $oResult->version }}</td>

                                                                                    <td>{{ $oResult->manual }}</td>

                                                                                    <td>{{ $oResult->articale }}</td>

                                                                                    <td>{{ $oResult->links }}</td>

                                                                                    <td>{{ $oResult->release_notes }}</td>

                                            
                                        <td>
                                            <a href="/client/versions/{{ $oResult->id }}"
                                               class="fa fa-file-text"></a>


                                            {!! Form::open(['method' => 'DELETE',
                                            'url' => ['/client/versions',$oResult->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}

                                            <a href="/client/versions/{{ $oResult->id }}/edit"
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