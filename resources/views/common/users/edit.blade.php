@extends('common.layouts.main')

@section('title', trans('general.users'))
@section('content')


    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- .row -->
            <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('users.users') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">{{ trans('users.users') }}</a></li>
                        <li class="active">{{ trans('users.editusers') }}</li>
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


    {!! Form::model($users, [
        'method' => 'PATCH',
        'url' => ['/common/users', $users->id],
        'class' => 'form-horizontal'
    ]) !!}







        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('users.editusers') }}</span>
            </div>

            <div class="panel-body">





                <div class="form-group {{ $errors->has("email") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("email", trans("users.email"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("email", null, ["class" => "form-control","placeholder"=> trans("users.email")]) !!}
                        {!! $errors->first("email", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("password") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("password", trans("users.password"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("password", null, ["class" => "form-control","placeholder"=> trans("users.password")]) !!}
                        {!! $errors->first("password", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>







                <div class="form-group {{ $errors->has("first_name") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("first_name", trans("users.first_name"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("first_name", null, ["class" => "form-control","placeholder"=> trans("users.first_name")]) !!}
                        {!! $errors->first("first_name", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>



                <div class="form-group {{ $errors->has("last_name") ? "has-error" : ""}}  col-xs-6">
                    {!! Form::label("last_name", trans("users.last_name"), ["class" => "col-sm-4 control-label"]) !!}
                    <div class="col-sm-8">
                        {!! Form::text("last_name", null, ["class" => "form-control","placeholder"=> trans("users.last_name")]) !!}
                        {!! $errors->first("last_name", "<p class='help-block'>:message</p>") !!}
                    </div>
                </div>


                @foreach($rolesList as $role_id=>$role_name)
                    <div class="form-group {{ $errors->has("roles") ? "has-error" : ""}}  col-xs-6">

                        <div class="col-sm-4">
                            {!! Form::checkbox("roles[".$role_id."]", $role_id,(in_array($role_id,$userRolesList))? true:false, ["class" => "form-control",'id'=>"roles[".$role_id."]"]) !!}
                        </div>
                        <div class="col-sm-8">
                            {!! Form::label("roles[".$role_id."]", $role_name, ["class" => " control-label"]) !!}
                            {!! $errors->first("roles", "<p class='help-block'>:message</p>") !!}
                        </div>
                    </div>
                @endforeach




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
@endsection