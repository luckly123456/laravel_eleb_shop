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
            <th>操作</th>
        </tr>
        @foreach($parts as $part)
            <tr>
                <td>{{ $part->id }}</td>
                <td>{{ $part->title }}</td>
                <td>{{ $part->content }}</td>
                <td>{{ date('Y-m-d',$part->signup_start) }}</td>
                <td>{{ date('Y-m-d',$part->signup_end) }}</td>
                <td>{{ $part->prize_date }}</td>
                <td>{{ $part->signup_num }}</td>
                <td>已报名</td>
            </tr>
        @endforeach
    </table>
@stop



