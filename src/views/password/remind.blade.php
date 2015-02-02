@extends('firecat::layouts.master')

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
    <div class="form-signin">
		@if (Session::has('error'))
		  {{ trans(Session::get('reason')) }}
		@elseif (Session::has('success'))
		  An email with the password reset has been sent.
		@endif
 
		<div class="box">
	   		<div class="content-wrap">
	   			<h1>Reset Password</h1>
				{{ Form::open(array('route' => 'password.request')) }}
				 
				 <div class="form-group">
				  {{ Form::label('email', 'Email') }}
				  {{ Form::email('email', null, array('class' => 'form-control')) }}
				</div>
				 
				 <div class="action">
				 	{{ Form::submit('Submit', array('class' => 'btn btn-lg btn-primary btn-block')) }}
				 </div>
				 
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@stop