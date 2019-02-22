
@extends('default')

@section('contents')
    <table class="table table-bordered table-responsive">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>操作</th>
        </tr>
        @foreach($article as $art)
            <tr>
                <td>{{$art->id}}</td>
                <td>{{$art->title}}</td>
                <td>
                    <a href="{{route('articles.show',['article'=>$art])}}">查看</a>
                </td>
            </tr>

        @endforeach
    </table>
    {{$article->links() }}

@endsection
