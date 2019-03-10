@extends('layout.app')

@section('contents')
    <h1>我的信息表</h1>
        <h3>名称: {{ $user->name }}</h3>
        <h3>邮箱: {{ $user->email }}</h3>
        <h3>状态: {{ $user->status==1?'启用':'禁用' }}</h3>
        <a href="#" class="btn btn-warning">编辑</a>

@stop



