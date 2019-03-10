@extends('layout.app')

@section('contents')
    <h1>订单详情</h1>



         <h3>序号:{{$ordersh->id}}</h3>
            <h3>用户名:{{$ordersh->user_id}}</h3>
            <h3>商家id:{{$ordersh->shop_id}}</h3>
            <h3>订单编号:{{$ordersh->sn}}</h3>
            <h3>省:{{$ordersh->province}}</h3>
            <h3>市:{{$ordersh->city}}</h3>
            <h3>区:{{$ordersh->county}}</h3>
            <h3>详细地址:{{$ordersh->address}}</h3>
            <h3>收货人电话:{{$ordersh->tel}}</h3>
            <h3>收货人姓名:{{$ordersh->name}}</h3>
            <h3>价格:{{$ordersh->total}}</h3>
            <h3>状态:{{$ordersh->status}}</h3>
            <h3>时间:{{$ordersh->created_at}}</h3>
            <h3>第三方交易号:{{$ordersh->out_trade_no}}</h3>


    <a href="{{route('orders.index')}}">返回</a>

@stop



