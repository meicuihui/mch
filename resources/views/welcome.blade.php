@extends('model.model')
@section('title1')haha
@endsection
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('content')
    <div class="jumbotron text-center" style="margin-bottom:0">
        {{--<h1 class="text-primary">meicuihui.cn</h1>--}}

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#">首页</a></li>
                    <li ><a href="#">关于</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2>标题</h2>
                <div class="fakeimg"><a href="http://www.qq.com"><img src="./img/1.jpg"/></a></div>
                <p>一些文本..</p>
                <p>
            </div>
            <div class="col-sm-7">
                <h2>标题</h2>
                <div class="fakeimg"><img src="./img/1.jpg"></div>
                <p>一些文本..</p>
            </div>

        </div>
    </div>

@endsection
@section('js')
    <script>
    </script>
@endsection