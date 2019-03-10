<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">饿了吧</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">商家 <span class="sr-only">(current)</span></a></li>
                {{--<li><a href="#">Link</a></li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">商家信息管理 <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">添加学生</a></li>--}}
                        {{--<li><a href="#">学生列表</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">菜品管理 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('menucategories.index')}}">菜品分类</a></li>
                        <li><a href="{{route('menus.index')}}">菜品</a></li>
                        <li><a href="{{route('activitys.index')}}">活动</a></li>
                        <li><a href="{{route('orders.index')}}">订单</a></li>
                        <li><a href="{{route('orders.statistics')}}">订单统计</a></li>
                        <li><a href="{{route('orders.menustatisticsd')}}">菜品销量</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">活动 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('events.index')}}">参加活动</a></li>
                        <li><a href="{{route('events.part')}}">我参加的活动</a></li>
                        <li><a href="{{route('events.prize')}}">中奖</a></li>

                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{ route('login') }}">登录</a></li>
                @endguest
                @auth
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span>
                         <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('users.index')}}">个人中心</a></li>
                        <li><a href="{{route('users.edit')}}">修改密码</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('logout')}}">退出登录</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>