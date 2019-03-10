@extends('layout.app')

@section('contents')
    <h1>奖品</h1>

    <table class="table table-bordered">
        <tr>
            <th>序号</th>
            <th>奖品</th>
            <th>详情</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        @foreach($prizes as $prize)
            <tr>
                <td>{{ $prize->id }}</td>
                <td>{{ $prize->name }}</td>
                <td>{{ $event->description }}</td>
                <td>已获得</td>
                <td>
                    <a href="#">领取</a>
                </td>
            </tr>
        @endforeach
    </table>
@stop



