@extends('layout.app')

@section('contents')
    <h1>订单表</h1>
    <h3></h3>

    <table class="table table-bordered">
        <tr>
            <th>序号</th>
            <th>用户名</th>
            <th>订单编号</th>
            <th>详细地址</th>
            <th>收货人</th>
            <th>收货人电话</th>
            <th>价格</th>
            <th>状态</th>
            <th>第三方交易号</th>
            <th>操作</th>
        </tr>
        <tr>
            @foreach($orders as $order)
            <td>{{ $order->id }}</td>
            <td>{{ $order->shop_id }}</td>
            <td>{{ $order->sn }}</td>
            <td>{{ $order->province.$order->city.$order->county.$order->address }}</td><td>{{ $order->sn }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->tel }}</td>
            <td>@if($order->status == 0){{'待支付'}}@elseif($order->status == 1){{'待发货'}}@elseif($order->status == 2){{'待确认'}}@elseif($order->status == -1){{'已取消'}}@elseif($order->status == 3){{'完成'}}@endif</td>
            <td>{{ $order->total }}</td>

            <td>
                <a href="" class="btn btn-warning">查看订单</a>
                <a href="{{route('orders.cancel',[$order])}}" class="btn btn-warning">取消订单</a>
                <a href="{{route('orders.deliver',[$order])}}" class="btn btn-warning">发货</a>
                <form style="display: inline" method="post" action="{{route('orders.destroy',[$order])}}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger">删除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$orders->links()}}
@stop



