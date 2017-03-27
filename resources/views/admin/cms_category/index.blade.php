@extends('common.layouts.main')
@section('title', trans('general.cms_category'))

@section('content')



    {{--*/

    $canShow=canAccess('admin.cms_category.show');
    $canEdit=canAccess('admin.cms_category.edit');
    $canDestroy=canAccess('admin.cms_category.destroy');
    $canCreate=canAccess('admin.cms_category.create');


    /*--}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('cms_category.cms_category') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('cms_category.cms_category') }}</a></li>
                        <li class="active">{{ trans('cms_category.cms_category') }}</li>
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



                        @include('common.partials.messages')

                        <div class=" col-xs-9">
                            <h3 class="box-title m-b-0">{{ trans('cms_category.cms_categoryTableHead') }}</h3>
                            <p class="text-muted m-b-20">{{ trans('cms_category.cms_categoryTableDescription') }}</p>



                        </div>
                        @if($canCreate)
                            <div class="col-xs-3">
                                <a  href="{{route('admin.cms_category.create')}}"class="btn btn-primary form-control">
                                    + {{trans('cms_category.cms_categoryCreate')}}
                                </a>
                            </div>
                        @endif

                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                            <thead>
                            <tr>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                    {!! th_sort(trans('cms_category.id'), 'id', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">
                                    {!! th_sort(trans('cms_category.name'), 'name', $oResults) !!}
                                </th>


                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                    {!! th_sort(trans('cms_category.parent'), 'parent_id', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                    {!! th_sort(trans('cms_category.status'), 'status', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                    {!! th_sort(trans('cms_category.sort_order'), 'sort_order', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                    {!! th_sort(trans('cms_category.column'), 'column', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                    {!! th_sort(trans('cms_category.place'), 'place', $oResults) !!}
                                </th>
                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">
                                    {!! th_sort(trans('cms_category.created_at'), 'created_at', $oResults) !!}
                                </th>

                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">
                                    {!! th_sort(trans('cms_category.updated_at'), 'updated_at', $oResults) !!}
                                </th>


                                @if($canEdit ||$canShow || $canDestroy)
                                    <th class="actionHeader"><i class="fa fa-cog"></i> </th>
                                @endif
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

                                        <td>{{ isset($oResult->parent->name)?$oResult->parent->name :''}}</td>

                                        <td>{{ array_key_exists($oResult->status,config('array.cms_category_status'))?config('array.cms_category_status')[$oResult->status]:'' }}</td>

                                        <td>{{ $oResult->sort_order }}</td>

                                        <td>{{ $oResult->column }}</td>

                                        <td>{{ array_key_exists($oResult->place,config('array.cms_category_place'))?config('array.cms_category_place')[$oResult->place]:'' }}</td>

                                        <td>{{ $oResult->created_at }}</td>

                                        <td>{{ $oResult->updated_at }}</td>


                                        <td>

                                            <div class="tableActionsMenuDiv">
                                                <div class="innerContainer">
                                                    <i class="fa fa-list menuIconList"></i>

                                                    @if( $canDestroy)
                                                        {!! Form::open(['method' => 'DELETE',
                                                        'url' => ['/admin/cms_category',$oResult->id]]) !!}
                                                        <button type="submit" name="Delete" class="deleteRow" >
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                        {!! Form::close() !!}
                                                    @endif
                                                    @if($canEdit )
                                                        <a href="/admin/cms_category/{{ $oResult->id }}/edit"
                                                           class="fa fa-edit"></a>
                                                    @endif
                                                    @if($canShow)
                                                        <a href="/admin/cms_category/{{ $oResult->id }}"
                                                           class="fa fa-file-text"></a>
                                                    @endif

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        @if (count($oResults))
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 ">
                                    <span class="text-xs">{{trans('general.showing')}} {{ $oResults->firstItem() }} {{trans('cms_category.to')}} {{ $oResults->lastItem() }} {{trans('general.of')}} {{ $oResults->total() }} {{trans('general.entries')}}</span>
                                </div>


                                <div class="col-xs-12 col-sm-6 ">
                                    {!! str_replace('/?', '?', $oResults->appends(Input::except('page'))->appends($request->all())->render()) !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> {{trans('general.CopyRights')}} </footer>
        </div>
        <!-- /#page-wrapper -->
        <!-- .right panel -->
        <div class="right-side-panel">
            <div class="scrollable-right container">
                <!-- .Theme settings -->
                <h3 class="title-heading">{{ trans('general.search') }}</h3>

                {!! Form::model($request,['method'=>'get','id'=>'searchForm', 'class'=>'form-horizontal']) !!}






                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('id', null, ['placeholder'=>trans('cms_category.id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('name', null, ['placeholder'=>trans('cms_category.name'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('description', null, ['placeholder'=>trans('cms_category.description'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('parent_id', null, ['placeholder'=>trans('cms_category.parent_id'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('status', null, ['placeholder'=>trans('cms_category.status'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('sort_order', null, ['placeholder'=>trans('cms_category.sort_order'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('column', null, ['placeholder'=>trans('cms_category.column'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('place', null, ['placeholder'=>trans('cms_category.place'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('image', null, ['placeholder'=>trans('cms_category.image'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('created_at', null, ['placeholder'=>trans('cms_category.created_at'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>



                <div class="form-group">
                    <div class="col-md-12">
                        {!! Form::text('updated_at', null, ['placeholder'=>trans('cms_category.updated_at'),'class'=>'form-control input-sm ']) !!}

                    </div>
                </div>






                <div class="form-group">
                    <label class="col-md-12"></label>
                    <div class="col-md-12">
                        {!! Form::submit(trans('general.search'), ['class'=>'btn btn-info btn-sm', 'name' => 'search']) !!}
                    </div>
                </div>

                {!! Form::hidden('sort', null) !!}
                {!! Form::hidden('order', null) !!}
                {!! Form::close()!!}
            </div>
        </div>

@stop
