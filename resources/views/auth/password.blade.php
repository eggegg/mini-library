@extends('layouts.land')


@section('content')
<div class="col-md-6 col-md-offset-3 loginForm">
            <form method="POST" action="/password/email">
        <input type="hidden" name="_token" value="14f7RVCFhY6rdTkfaPavzZXESuqQgQDtXbddC4uN">
        
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div>
            <button type="submit" class="btn btn-default">
                发送重置密码邮件
            </button>
        </div>
</form>
@endsection