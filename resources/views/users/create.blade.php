@extends('layouts.master');
@section('content')
<h2>Register</h2>
@if(count($errors))
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
<ul>
</div>
@endif
{!! Form::open(array('route' => 'users.store')) !!}

<div class="form-group">
{!! Form::label('name', 'Username') !!}
{!! Form::text('name', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
{!! Form::label('email') !!}
{!! Form::text('email', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
{!! Form::label('password') !!}
{!! Form::password('password', array('class' => 'form-control')) !!}
</div>

<div class="form-group">
{!! Form::label(' password_confirmation', 'Password confirmation') !!}
{!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
</div>

 <div class="form-group"> 
<!-- <div class="dropdown-menu"> -->
{!! Form::label('role') !!}
{!! Form::select('role', array('0' => 'Faculty', '1' => 'HOD', '2' => 'Store Officer', '3' => 'Vice Chancellor'), null, array('class'=>'form-control','style'=>'')) !!}
<!-- {!! Form::select('role', array('0' => 'Faculty', '1' => 'HOD', '2' => 'Store Officer', '3' => 'Vice Chancellor')) !!} -->
</div>

<div class="form-group"> 
{!! Form::label('department') !!}
{!! Form::select('department', array('0' => 'IT', '1' => 'CSE', '2' => 'ECE', '3' => 'Mechanical', '4' => 'Architecture','5' => 'Other'), null, array('class'=>'form-control','style'=>'')) !!}
</div>

{!! Form::token() !!}
{!! Form::submit(null, array('class' => 'btn btn-default')) !!}
{!! Form::close() !!}
@endsection