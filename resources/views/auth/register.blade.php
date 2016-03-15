@extends('layouts.land')

@section('content')
<div class="col-md-6 col-md-offset-3 loginForm">
{!! Form::open(array('url' => '/auth/register', 'class' => 'form')) !!}

<h1>注册账号</h1>


@if (count($errors) > 0)
	<div class="alert alert-danger">
		There were some problems with your input.<br />
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="form-group">
    {!! Form::label('name', '姓名') !!}
    {!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'姓名')) !!}
</div>
<div class="form-group">
    {!! Form::label('Email') !!}
    {!! Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) !!}
</div>
<div class="form-group">
    {!! Form::label('密码') !!}
    {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'密码')) !!}
</div>
<div class="form-group">
    {!! Form::label('重复密码') !!}
    {!! Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'重复密码')) !!}
</div>

<div class="form-group">
    {!! Form::submit('注册', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>
@endsection