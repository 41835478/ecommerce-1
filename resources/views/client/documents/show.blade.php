@extends('client.layouts.main')
@section('title', trans('general.documents'))
@section('content')


    {{--*/
    $canAction=canAccess('admin.documents.action');
    /*--}}



        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.documents') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.documents') }}</a></li>
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
                <span class="panel-title">{{ trans('general.documentsInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$documents['name'] }}</label>
                        </div>
                    </div>


                                    <div class="col-sm-2 text-right">
                                        <div class="form-group no-margin-hr">
                                            <label class="control-label">{{ trans('general.type') }}  </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 text-left">
                                        <div class="form-group no-margin-hr">
                                            <label class="control-label">{{ (array_key_exists($documents['type'],config('array.documents_type')))?config('array.documents_type')[$documents['type']]:'' }}</label>
                                        </div>
                                    </div>


                                </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.version') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$documents['version'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.parent') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{(isset($documents->parentDocument()->first()->name))? $documents->parentDocument()->first()->name:'' }}</label>
                        </div>
                    </div>

                    </div>

                <div class="row">

                    <div class="">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.body') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-12 text-left longHtmlContainer">
                        <div class="form-group no-margin-hr">
                            {!!  $documents['body'] !!}
                        </div>
                    </div>

                </div>
                    



@if($canAction)
                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">


                            <a href="/client/documents/{{ $documents['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                        </div>
                        <div class=" col-xs-3">
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/client/documents',$documents['id']]]) !!}
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
                                            <h3 class="box-title m-b-0">{{ trans('general.documentsTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.documentsTableDescription') }}</p>



                                        </div>
                                        @if($canAction)
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.documents.create')}}?parent={{$documents['id']}}"class="btn btn-primary form-control">
                                                + {{trans('general.documentsCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $childrenDocuments) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('general.name'), 'name', $childrenDocuments) !!}
                                                </th>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.version'), 'version', $childrenDocuments) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('general.parent'), 'parent', $childrenDocuments) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.type'), 'type', $childrenDocuments) !!}
                                                </th>


                                                @if($canAction)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
@endif



                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($childrenDocuments))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($childrenDocuments as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td> <a href="/client/documents/{{ $oResult->id }}" >{{ $oResult->name }}</a></td>

                                                        <td>{{ $oResult->version }}</td>

                                                        <td>{{ isset($oResult->parentDocument->name)? $oResult->parentDocument->name:'' }}</td>

                                                        <td>{{ (array_key_exists($oResult->type,config('array.documents_type')))?config('array.documents_type')[$oResult->type]:'' }}</td>




                                                        @if($canAction)

                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>




                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/documents',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/documents/{{ $oResult->id }}/edit"
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