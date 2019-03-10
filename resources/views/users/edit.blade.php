@extends('layout.app')

@section('contents')
    <h1>修改密码</h1>
    @include('layout._errors')
    <form method="post" action="{{route('users.update',[$user])}}">
        {{ csrf_field() }}
        {{method_field('patch')}}
        <div class="form-group">
            <label for="exampleInputEmail1">原密码</label>
            <input type="password" class="form-control" name="old_password">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">请输入密码</label>
            <input type="password" class="form-control" name="new_password">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">请确认密码</label>
            <input type="password" class="form-control" name="new_password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
    </form>

@stop



