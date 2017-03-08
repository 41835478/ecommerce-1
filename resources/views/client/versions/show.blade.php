@extends('client.layouts.main')
@section('title', trans('general.versions'))
@section('content')





        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.versions') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.versions') }}</a></li>
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
                <span class="panel-title">{{ trans('general.versionsInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.publish_date') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$versions['publish_date'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.products') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{(isset($versions->products()->first()->name))? $versions->products()->first()->name:'' }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">

                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.version') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$versions['version'] }}</label>
                        </div>
                    </div>




                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.links') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                @if(isset($versions->files()->first()->name))
                                    <a href="/client/files/{{$versions['links']}}">{{$versions->files->name}}</a>
                                @endif
                               </label>
                        </div>
                    </div>

                    </div>

                <div class="row">



                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.release_notes') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                @if(isset($versions->release_notes()->first()->name))
                                    <a href="/client/documents/{{$versions['release_notes']}}">{{$versions->release_notes()->first()->name}}</a>
                                @endif
                            </label>
                        </div>
                    </div>




                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.article') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                @if(isset($versions->article()->first()->name))
                                    <a href="/client/documents/{{$versions['article']}}">{{$versions->article()->first()->name }}</a>
                                @endif
                            </label>
                        </div>
                    </div>



                </div>

                <div class="row">






                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('general.manual') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">
                                @if(isset($versions->manual()->first()->name))
                                    <a href="/client/documents/{{$versions['manual']}}">{{$versions->manual()->first()->name}}</a>
                                @endif
                            </label>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-xs-offset-6 col-xs-3">


                        <a href="/client/versions/{{ $versions['id'] }}/edit"
                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                    </div>
                    <div class=" col-xs-3">
                        {!! Form::open(['method' => 'DELETE',
                'url' => ['/client/versions',$versions['id']]]) !!}
                        <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                            <i class="fa fa-trash"></i>
                            {{trans('general.delete')}}
                        </button>
                        {!! Form::close() !!}
                    </div>

                </div>
                <!-- row -->
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