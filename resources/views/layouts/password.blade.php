@extends('layouts.land')


@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="col-md-6 col-md-offset-3 loginForm">
            <form method="POST" action="/password/email">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div>
            <button type="submit" class="btn btn-default">
                发送重置密码邮件
            </button>
        </div>
</form>
@endsection