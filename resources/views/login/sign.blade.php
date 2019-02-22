@extends('layout.app')

@section('contents')
    <form method="post" action="">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">请输入用户名：</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="password">请输入密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password1') }}">
        </div>
        <div class="form-group">
            <label for="password">请确认密码：</label>
            <input type="password" name="password_confirmation " class="form-control" value="{{ old('password2') }}">
        </div>
        <div class="form-group">
            <label for="password">请输入邮箱：</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <button type="submit" class="btn btn-primary">登录</button>
    </form>

    <hr>

    <p>已有账户 <a href="{{ route('login') }}">现在去登陆！</a></p>

@stop



