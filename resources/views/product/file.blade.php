@extends('main') 
@section('title', '| 產生上架檔案') 

@section('stylesheets')
    {!! Html::style('css/create.css') !!}
@endsection


@section('content')
<div class="row">
<div class="container-fluid">
	<form>
		<div class="col-md-6">
			<div class="well-block">
				<div class="well-title">
					<h4>檔案處理</h4>
				</div>

				<div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <p align="right"><stong>上傳截圖</stong></p>
                        </div>
                        <div class="col-md-9">
                            <input type="file" name="pic" accept="image/*">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3">
                            <p align="right"><stong>內容檔案 (pdf)</stong></p>
                        </div>
                        <div class="col-md-3">
                            <input type="file" name="file">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3">
                            <p align="right"><stong>連帶生成版權頁</stong></p>
                        </div>
                        <div class="col-md-9">
							<div class="col-md-3">
								{{Form::radio('check', '0', true)}} 
								{{Form::label('yes', '是')}}
							</div>
							<div class="col-md-3">
								{{Form::radio('check', '1')}} 
								{{Form::label('no', '否')}}
							</div>
						</div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3">
                            <p align="right"><stong>小說試閱檔案 (epub)</stong></p>
                        </div>
                        <div class="col-md-9">
                            <input type="file" name="file">
                        </div>
                    </div>

                    <div class="col-md-12">
					    {{Form::button('開始轉檔',['class' => 'btn btn-success btn-block'])}}
				    </div>
				</div>
			</div>
		</div>
        <div class="col-md-6">
			<div class="well-block">
				<div class="well-title">
					<h4>輸出檔</h4>
				</div>

				<div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <p align="right"><stong><a>copyright.log</a></stong></p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3">
                            <p align="right"><stong><a>images.log</a></stong></p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3">
                            <p align="right"><stong><a>epub.log</a></stong></p>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</form>
</div>
</div>
@endsection