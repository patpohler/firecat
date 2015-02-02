@extends('firecat::layouts.master')

@section('content')
<div class="content">
    <div class="login-wrapper">
      @if (!Auth::check())
      {{ Form::open(array('url'  => '/signup/store')) }}
        <div class="box">
            <div class="content-wrap">
                <h1>Sign Up</h1>
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

                <div class="form-group @if($errors->has('password_confirmation')) has-error has-feedback @endif">
                    {{ Form::label('password_confirmation', 'Confirm Passwword') }}
                    {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
                    @if($errors->has('password_confirmation'))
                        <div class="alert alert-danger" role="alert">{{$errors->first('password_confirmation')}}</div>
                    @endif
                </div>

                <div class="action">
                  {{ Form::submit('Sign up', array('class' => 'btn btn-primary')) }}
                </div>
            </div>
        </div>
      {{ Form::close() }}
        <div class="already">
            <p>Already have an account?</p>
            <a href="{{ url('login') }}">Sign in</a>
        </div>
        @else
        <div class="center col-md-12">
          <p><strong>You're already logged in!</strong></p>
        </div>
        @endif
    </div>
</div>
@stop
