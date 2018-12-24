@extends('model.model')
@section('title1')haha
@endsection
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
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
                                <div class="form-group">
                                    <label class="required">描述</label>
                                    <input type="text" name="desc" class="form-control" value="{{old('desc')}}"
                                           placeholder="描述">
                                    @if($errors->first('desc'))
                                        <span class="help-block">{{$errors->first('desc')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="required">图片</label>
                                    <input type="file" name="img" class="form-control" value="{{old('img')}}"
                                          >
                                    @if($errors->first('img'))
                                        <span class="help-block">{{$errors->first('img')}}</span>
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
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
    </script>
@endsection