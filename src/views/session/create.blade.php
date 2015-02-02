@extends('firecat::layouts.signin')

@section('content')
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<div class="content">
    <a href="javascript:history.back();">Go back</a>
    <div class="form-signin">
      {{ Form::open(array('url'  => '/login/store')) }}
        <div class="box">
            <div class="content-wrap">
                <h1>Login</h1>
                <div class="form-group @if($errors->has('email')) has-error has-feedback @endif">
                    {{ Form::label('email', 'Email Address') }}
                    {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'E-mail')) }}
                    @if($errors->has('email'))
                        <div class="alert alert-danger" role="alert">{{$errors->first('email')}}</div>
                    @endif
                </div>

                <div class="form-group @if($errors->has('password')) has-error has-feedback @endif">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                    @if($errors->has('password'))
                        <div class="alert alert-danger" role="alert">{{$errors->first('password')}}</div>
                    @endif
                </div>

                <div class="action">
                  {{ Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')) }}

                </div>
            </div>
        </div>
      {{ Form::close() }}
    </div>
</div>
@stop
