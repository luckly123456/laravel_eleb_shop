@extends('layout.app')

@section('contents')
    <h1>总计:{{$statistics}}个</h1>
    <a href="{{route('orders.index')}}">返回</a>
    <a href="{{route('orders.statisticsd')}}">按日统计</a>
    <a href="{{route('orders.statisticsm')}}">按月统计</a>

@stop



