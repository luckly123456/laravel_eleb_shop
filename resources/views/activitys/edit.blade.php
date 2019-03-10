@extends('layout.app')

@section('contents')
    @include('vendor.ueditor.assets')
    <h1>活动修改</h1>
    @include('layout._errors')
    <form method="post" action="{{route('activitys.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{method_field('patch')}}
        <div class="form-group">
            <label for="exampleInputEmail1">标题</label>
            <input type="text" class="form-control" name="title" value="{{$activity->title}}" >
        </div>

        <script type="text/javascript">
            var ue = UE.getEditor('container');
            ue.ready(function() {
                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
            });
        </script>
        <script id="container" name="content" type="text/plain"></script>

        <div class="form-group">
            <label for="exampleInputEmail1">开始时间</label>
            <input type="date" class="form-control" name="start_time" value="{{$activity->start_time}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">结束时间</label>
            <input type="date" class="form-control" name="end_time" value="{{$activity->end_time}}">
        </div>
        <button type="submit" class="btn btn-primary">修改</button>
    </form>

@stop



