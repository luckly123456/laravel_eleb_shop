@extends('layout.app')

@section('contents')
    <script src="https://cdn.bootcss.com/echarts/4.1.0-release/echarts.min.js"></script>

    <h1>菜品销量</h1><a href="{{route('orders.menustatisticsm')}}">最近三个月销量</a>

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

    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="width: 600px;height:400px;"></div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '菜品销量统计图'
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data:['邮件营销','联盟广告','视频广告','直接访问','搜索引擎']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['周一','周二','周三','周四','周五','周六','周日']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {{--0,--}}
                {
                    name:'联盟广告',
                    type:'line',
                    stack: '总量',
                    data:[220, 182, 191, 234, 290, 330, 310]
                },
                {
                    name:'视频广告',
                    type:'line',
                    stack: '总量',
                    data:[150, 232, 201, 154, 190, 330, 410]
                },
                {
                    name:'直接访问',
                    type:'line',
                    stack: '总量',
                    data:[320, 332, 301, 334, 390, 330, 320]
                },
                {
                    name:'搜索引擎',
                    type:'line',
                    stack: '总量',
                    data:[820, 932, 901, 934, 1290, 1330, 1320]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
@stop



