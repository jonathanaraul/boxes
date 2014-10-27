@extends('site.layouts.users')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<form class="login-form" method="POST" action="{{ URL::to('user/login') }}" method="post" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <h3 class="form-title">Login to your account</h3>

    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>

        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off"
                   placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" name="email" tabindex="1"
                   id="email" value="{{ Input::old('email') }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>

        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                   placeholder="{{ Lang::get('confide::confide.password') }}" name="password" id="password"
                   tabindex="2">
        </div>
    </div>
    <div class="form-actions">
        <label class="checkbox">
            <input type="hidden" name="remember" value="0">
            <input type="checkbox" name="remember" id="remember" value="1"/> {{
            Lang::get('confide::confide.login.remember') }} </label>

        <button type="submit" class="btn blue pull-right">
            {{ Lang::get('confide::confide.login.submit') }} <i class="m-icon-swapright m-icon-white"></i>
        </button>
    </div>
    @if ( Session::get('error') )
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif

    @if ( Session::get('notice') )
    <div class="alert">{{ Session::get('notice') }}</div>
    @endif
    <div class="forget-password">
        <h4>Forgot your password ?</h4>

        <p>
            no worries, click <a href="javascript:;" id="forget-password">
                here </a>
            to reset your password.
        </p>
    </div>
    <div class="create-account">
        <p>
            Don't have an account yet ?&nbsp; <a href="{{{ URL::to('user/create') }}}" id="register-btn">
                Create an account </a>
        </p>
    </div>
</form>

@stop
