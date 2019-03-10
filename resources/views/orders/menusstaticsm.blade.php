@extends('layout.app')

@section('contents')
    <h1>菜品销量</h1>
    <a href="{{route('orders.menustatisticsd')}}">最近七天销量</a>
    <table class="table table-bordered">
        <tr>
            <th>菜品名称</th>
            @foreach($times as $time)
                <th>{{$time}}</th>
            @endforeach
        </tr>
        @foreach($menus as $menu=>$num)
            <tr>
                <th>{{$menu}}</th>
                @foreach($num as $k=>$v)
                    <th>{{$v}}</th>
                @endforeach
            </tr>
        @endforeach
    </table>
@stop



