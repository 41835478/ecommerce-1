@extends('client.layouts.main')
@section('title', trans('general.ticket'))
@section('content')





        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.ticket') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.ticket') }}</a></li>
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
                <span class="panel-title">{{ trans('general.ticketInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.contact_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{(isset($ticket->contact->name))? $ticket->contact->name:''}}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.contract_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$ticket['contract_id'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$ticket['name'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.type') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{(array_key_exists($ticket['type'],config('array.ticket_type')))? config('array.ticket_type')[$ticket['type']]:'' }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.status') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{(array_key_exists($ticket['status'],config('array.ticket_status')))? config('array.ticket_status')[$ticket['status']]:'' }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.description') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$ticket['description'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.create_time') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$ticket['create_time'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.open_time') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$ticket['open_time'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.close_time') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$ticket['close_time'] }}</label>
                        </div>
                    </div>

                    




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">


                            <a href="/client/ticket/{{ $ticket['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                        </div>
                        <div class=" col-xs-3">
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/client/ticket',$ticket['id']]]) !!}
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




                                        <div class="white-box">
                                            <h3 class="box-title">Recent Comments</h3>
                                            <div class="comment-center">


                                                @if (count($oTicketReplyResults))
                                                    {{-- */$i=0;/* --}}
                                                    {{-- */$class='';/* --}}
                                                    @foreach($oTicketReplyResults as $oResult)
                                                        {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}

                                                <div class="comment-body" style="width: 100%;">
                                                    <div class="user-img"> </div>
                                                    <div class="mail-contnet">
                                                        <h5>{{ isset($oResult->contact->name)? $oResult->contact->name:'' }}</h5>
                                                        <span class="mail-desc">{{ $oResult->description }}</span>
                                                        {{--<span class="label label-rounded label-info">PENDING</span>--}}
                                                        {{--<a href="javacript:void(0)" class=""><i class="ti-close text-danger"></i></a>--}}

<div style="float:left;" class="action">
                                                        {!! Form::open(['method' => 'DELETE',
                                                        'url' => ['/client/ticket_reply',$oResult->id]]) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger ']) !!}
                                                        {!! Form::close() !!}
</div>
                                                        <a href="/client/ticket_reply/{{ $oResult->id }}/edit" class="action"><i class="fa fa-edit text-success" style="font-size: 34px"></i></a>

                                                        <span class="time pull-right">{{ $oResult->create_time }}</span></div>
                                                </div>

                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>






                                        @include('client.partials.messages')


                                        {!! Form::model($request,['url' => '/client/ticket_reply', 'class' => 'form-horizontal']) !!}





                                        <div class="panel">
                                            <div class="panel-heading">
                                                <span class="panel-title">{{ trans('general.addticket_reply') }}</span>
                                            </div>

                                            <div class="panel-body">






                                                    <div class="form-group {{ $errors->has('ticket_id') ? 'has-error' : ''}}  col-xs-6" style="display: none;">
                                                        {!! Form::label('ticket_id', trans('general.ticket_id'), ['class' => 'col-sm-4 control-label']) !!}
                                                        <div class="col-sm-8">
                                                            {!! Form::text('ticket_id', null, ['class' => 'form-control']) !!}
                                                            {!! $errors->first('ticket_id', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>



                                                <div class="row">
                                                    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}  col-xs-12">
                                                        {!! Form::label('description', trans('general.description'), ['class' => 'col-sm-1 control-label']) !!}
                                                        <div class="col-sm-11">
                                                            {!! Form::text('description', null, ['class' => 'form-control']) !!}
                                                            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                                                        </div>
                                                    </div>


                                                </div>






                                                <div class="form-group">
                                                    <div class="col-sm-offset-9 col-sm-3">
                                                        {!! Form::submit(trans('general.addticket_reply'), ['class' => 'btn btn-primary form-control']) !!}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        {!! Form::close() !!}







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