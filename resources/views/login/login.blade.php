@extends('layout.app')

@section('contents')
    <form method="post" action="">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">用户名：</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="rememberMe" value="1">记住我哦
            </label>
        </div>

        <button type="submit" class="btn btn-primary">登录</button>
    </form>

    <hr>

    <p>还没账号？<a href="{{ route('sign') }}">现在注册！</a></p>

@stop


