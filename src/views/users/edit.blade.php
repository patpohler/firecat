@extends('firecat::layouts.admin')

@section('content')

<h1 class="page-header">Users</h1>

{{ Form::model($user, array('route'  => array('admin.users.update', $user->id), 'method' => 'PUT' )) }}
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
          <div class="form-group @if($errors->has('display_name')) has-error has-feedback @endif">
              {{ Form::label('display_name', 'Display Name') }}
              {{ Form::text('display_name', null, array('class' => 'form-control', 'placeholder' => 'Display Name')) }}
              @if($errors->has('display_name'))
                  <div class="alert alert-danger" role="alert">{{$errors->first('display_name')}}</div>
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

@stop
