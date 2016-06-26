@extends('client.layouts.login', array('class' => 'page-signin'))
@section('title', Lang::get('user.PageTitleSignIn'))
@section('content')
    <div class="signin-container">


        <div class="signin-form">

            <a href="" class="logo">

                {!! HTML::image('assets/'.config('mycp.layoutAssetsFolder').'/img/logo.png', '', ['style' => 'margin-top: -5px;width:90px;height:28px;']) !!}
                &nbsp;
            </a>



            {!! Form::open(['id'=>'signin-form_id']) !!}
            <div class="signin-text">
                <span>{{ Lang::get('user.SignInText') }}</span>
            </div>
            @include('client.partials.messages')
            <div class="form-group w-icon">
                {!! Form::text('email', '', ['class'=>'form-control input-lg','placeholder'=>Lang::get('user.email')]) !!}
                <span class="fa fa-user signin-form-icon"></span>
            </div>
            <div class="form-group w-icon">
                {!! Form::password('password', ['class'=>'form-control input-lg','placeholder'=>Lang::get('user.password')]) !!}
                <span class="fa fa-lock signin-form-icon"></span>
            </div>
            <div class="form-actions">

                {!! Form::submit(Lang::get('user.SignIn'), ['class'=>'signin-btn bg-primary']) !!}
                <a href="{{ route('client.auth.recover') }}"
                   class="forgot-password">{{ Lang::get('user.ForgotYourPassword') }}</a>


            </div>
            {!! Form::close() !!}

            <div class="signin-with">


                <div class="text-center">
                    <div class="clearfix"></div>
                    {{ Lang::get('user.not_a_member') }}
                    <a href="{{ route('client.auth.register') }}">{{ Lang::get('user.sign_up_now') }}</a>

                    <div class="clearfix"></div>
                </div>
            </div>

        </div>

    </div>



@stop