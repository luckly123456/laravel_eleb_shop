@extends('layout.app')

@section('contents')
    <h1>商家注册</h1>
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
            <input type="password" name="password2" class="form-control" value="{{ old('password2') }}">
        </div>
        <div class="form-group">
            <label for="password">请输入邮箱：</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label>所属商家</label>
            <select name="shop_id" class="form-control" style="width: 200px">
                @foreach($shops as $shop)
                    <option value="{{ $shop->id }}"
                            @if(old('$shop_id')==$shop->id) selected @endif
                    >{{ $shop->shop_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>验证码</label>
            <input type="text" name="captcha" class="form-control" style="width: 200px">
            <img class="thumbnail captcha" src="{{ captcha_src('default') }}" onclick="this.src='/captcha/default?'+Math.random()" title="点击图片重新获取验证码">
        </div>
        <button type="submit" class="btn btn-primary">登录</button>
    </form>

    <hr>

    <p>已有账户 <a href="{{ route('login') }}">现在去登陆！</a></p>

@stop



