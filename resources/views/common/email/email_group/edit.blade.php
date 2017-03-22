@extends('common.layouts.main')

@section('title', trans('general.email_group'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.email_group') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('general.email_group') }}</a></li>
                        <li class="active">{{ trans('general.editemail_group') }}</li>
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


    {!! Form::model($email_group, [
        'method' => 'PATCH',
        'url' => ['/common/email_group', $email_group->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('email_group.editemail_group') }}</span>
            </div>

            <div class="panel-body">






                <div class="row">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}  col-xs-12">
                        {!! Form::label('name', trans('email_group.name'), ['class' => 'col-sm-2']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                </div>


                <div class="row">

                    <div  class="col-lg-12 col-sm-12">
                        <h5 class="box-title">Users</h5>
                        <select class="form-control" name="users_id[]" id="public-methods" multiple>
                            @if(count($usersList))
                                @foreach($usersList as $id=>$name)
                            <option value="{{$id}}" @if(array_key_exists($id,$groupUsersList)) selected @endif>{{ $name}}</option>
                                @endforeach
  @endif
                        </select>

                        <div class="button-box m-t-20">
                            <a id="select-all" class="btn btn-danger btn-outline" href="#">select all</a>
                            <a id="deselect-all" class="btn btn-info btn-outline" href="#">deselect all</a>
                        </div>
                    </div>

                </div>
        <div class="row">
                


        <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>

            </div>
        </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
        {!! HTML::style('/assets/'.config('project.layoutAssetsFolder').'/plugins/bower_components/multiselect/css/multi-select.css')!!}

        @endsection
        @section('script')
            @parent


            {!! HTML::script('/assets/'.config('project.layoutAssetsFolder').'/plugins/bower_components/custom-select/custom-select.min.js') !!}

            {!! HTML::script('/assets/'.config('project.layoutAssetsFolder').'/plugins/bower_components/bootstrap-select/bootstrap-select.min.js') !!}
            {!! HTML::script('/assets/'.config('project.layoutAssetsFolder').'/plugins/bower_components/multiselect/js/jquery.multi-select.js') !!}
            <script>

                $('#public-methods').multiSelect();
                $('#select-all').click(function(){
                    $('#public-methods').multiSelect('select_all');
                    return false;
                });
                $('#deselect-all').click(function(){
                    $('#public-methods').multiSelect('deselect_all');
                    return false;
                });
            </script>
@stop