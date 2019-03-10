@extends('layout.app')

@section('contents')
    <h1>按日统计七天</h1>
    <script src="https://cdn.bootcss.com/echarts/4.1.0-release/echarts.min.js"></script>

    <table class="table table-bordered">
        <tr>
            @foreach($statistics as $day=>$num)
                <th>{{$day}}</th>
                @endforeach
        </tr>
        <tr>
            @foreach($statistics as $day=>$num)
                <th>{{$num}}</th>
            @endforeach
        </tr>
        </table>



    <a href="{{route('orders.index')}}">返回</a>
    <a href="{{route('orders.statisticsm')}}">按月统计</a>


    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '最近一周订单量统计'
            },
            tooltip: {},
            legend: {
                data:['订单量']
            },
            xAxis: {
//                data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
                data: {!!json_encode(array_keys($statistics))  !!}
            },
            yAxis: {},
            series: [{
                name: '订单量',
                type: 'bar',
//                data: [5, 20, 36, 10, 10, 20]
                data: {!!json_encode(array_values($statistics))  !!}
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
@stop



