@extends('layouts.master')

@section('content')
<h2>Login</h2>
@if(count($errors))
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
<ul>
</div>
@endif
{!! Form::open(array('route' => 'handlelogin')) !!}
<div class="form-group">
{!! Form::label('email') !!}
{!! Form::text('email', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
{!! Form::label('password') !!}
{!! Form::password('password', array('class' => 'form-control')) !!}
</div>

<div class="form-group">
<div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
</div>


{!! Form::token() !!}
{!! Form::submit(null, array('class' => 'btn btn-default')) !!}
<ul class="nav nav-pills">
<li>
<li>
  {{ link_to_route('users.create', 'New User? Register')}}
  </li>
</li>
</ul>
{!! Form::close() !!}
@endsection