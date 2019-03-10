@extends('layout.app')

@section('contents')
    <h1>活动</h1>

    <table class="table table-bordered">
        <tr>
            <th>序号</th>
            <th>名称</th>
            <th>详情</th>
            <th>报名开始时间</th>
            <th>报名结束时间</th>
            <th>开奖日期</th>
            <th>报名人数限制</th>
            <th>已报名人数</th>
            <th>操作</th>
        </tr>
        @foreach($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->title }}</td>
                <td>{{ $event->content }}</td>
                <td>{{ date('Y-m-d',$event->signup_start) }}</td>
                <td>{{ date('Y-m-d',$event->signup_end) }}</td>
                <td>{{ $event->prize_date }}</td>
                <td>{{ $event->signup_num }}</td>
                <td>{{ $event->signup_num }}</td>
                <td>@if(!$eventmember)
                    <a href="{{ route('events.apply',[$event]) }}" class="btn btn-warning">报名</a>
                        @else
                            已报名
                        @endif
                </td>
            </tr>
        @endforeach
    </table>
    {{$events->links()}}
@stop



