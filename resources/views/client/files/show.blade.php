@extends('client.layouts.main')
@section('title', trans('general.files'))
@section('content')





        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.files') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.files') }}</a></li>
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
                <span class="panel-title">{{ trans('general.filesInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$files['name'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.link') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$files['link'] }}</label>
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
                            <label class="control-label">{{$files['version'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.parent') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{(isset($files->parentFile()->first()->name))? $files->parentFile()->first()->name:'' }}</label>
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
                            <label class="control-label">{{ (array_key_exists($files['type'],config('array.files_type')))?config('array.files_type')[$files['type']]:'' }}</label>
                        </div>
                    </div>



                    </div>
                <div class="row">

                    




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">


                            <a href="/client/files/{{ $files['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                        </div>
                        <div class=" col-xs-3">
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/client/files',$files['id']]]) !!}
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
                                            <h3 class="box-title m-b-0">{{ trans('general.filesTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.filesTableDescription') }}</p>



                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.files.create')}}"class="btn btn-primary form-control">
                                                + {{trans('general.filesCreate')}}
                                            </a>
                                        </div>

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $childrenFiles) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                                    {!! th_sort(trans('general.name'), 'name', $childrenFiles) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.link'), 'link', $childrenFiles) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.version'), 'version', $childrenFiles) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('general.parent'), 'parent', $childrenFiles) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.type'), 'type', $childrenFiles) !!}
                                                </th>




                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($childrenFiles))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($childrenFiles as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{ $oResult->name }}</td>

                                                        <td>{{ $oResult->link }}</td>

                                                        <td>{{ $oResult->version }}</td>

                                                        <td>{{ isset($oResult->parentFile->name)? $oResult->parentFile->name:'' }}</td>


                                                        <td>{{ (array_key_exists($oResult->type,config('array.files_type')))?config('array.files_type')[$oResult->type]:'' }}</td>




                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

                                                                    <a href="/client/files/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"></a>


                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/files',$oResult->id]]) !!}
                                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/files/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
                                                                </div>
                                                            </div>
                                                        </td>
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