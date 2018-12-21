@extends('model.model')
@section('title1')haha
@endsection
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('content')
    <section class="content">
        <section class="content-header">
        </section>
        <div class="box box-primary post-form">
            <form role="form" method="post" action=""
                  enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label class="required">标题</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"
                               placeholder="标题">
                        @if($errors->first('name'))
                            <span class="help-block">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">提交</button>
                    <a href="{{route('index')}}" class="btn btn-default cancle-btn">
                        取消
                    </a>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script>
    </script>
@endsection