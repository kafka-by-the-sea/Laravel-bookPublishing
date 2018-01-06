@extends('main')

@section('title', '| 編輯單筆資料')

@section('content')
    <div class="row">
        {!!Form::model($data, ['route' => ['novel.update', $data->id], 'method' => 'PUT'])!!}
        <div class="col-md-8">
            <h3>批次修改</h3>
            {{Form::hidden('series_id', null, ['class' => 'form-control'])}}

            {{Form::label('series_name', 'Series 書名:', ['class' => 'form-spacing-top'])}}
            {{Form::text('series_name', null, ['class' => 'form-control'])}}

            {{Form::label('series_author', 'Series 作者:', ['class' => 'form-spacing-top'])}}
            {{Form::text('series_author', null, ['class' => 'form-control'])}}

            {{Form::label('series_vol', '總冊數:', ['class' => 'form-spacing-top'])}}
            {{Form::text('series_vol', null, ['class' => 'form-control'])}}
            <hr>
            <h3>單筆修改</h3>
            {{Form::label('title_id', "Title ID:")}}
            {{Form::text('title_id', null, ['class' => 'form-control'])}}
            
            {{Form::label('title_name', "Title書名:", ['class' => 'form-spacing-top'])}}
            {{Form::text('title_name', null, ['class' => 'form-control'])}}

            {{Form::label('title_vol_no', "冊數:", ['class' => 'form-spacing-top'])}}
            {{Form::text('title_vol_no', null, ['class' => 'form-control'])}}

            {{Form::label('title_start', "上架日期:", ['class' => 'form-spacing-top'])}}
            {{Form::text('title_start', null, ['class' => 'form-control', 'id'=>'datetimepicker']) }}

            {{Form::label('title_end', "下架日期:", ['class' => 'form-spacing-top'])}}
            {{Form::text('title_end', null, ['class' => 'form-control', 'id'=>'datetimepicker']) }}

            {{Form::label('title_price_48h', "48h:", ['class' => 'form-spacing-top'])}}
            {{Form::text('title_price_48h', null, ['class' => 'form-control'])}}

            {{Form::label('title_price_buy', "無期限:", ['class' => 'form-spacing-top'])}}
            {{Form::text('title_price_buy', null, ['class' => 'form-control'])}}
        </div>

        <div class="col-md-4">
            <div class="well" style="margin-top: 20px;">
                <dl class="dl-horizontal">
                    <dt>Create At:</dt>
                    <dd>{{date('Y-m-d  h:i:s',strtotime($data->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('Y-m-d  h:i:s',strtotime($data->updated_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>建立者:</dt>
                    <dd>亂丸君</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {!!Html::linkRoute('novel.index', '取消', array($data->id), array('class' => 'btn btn-danger btn-block'))!!}
                    </div>
                    <div class="col-sm-6">
                        {{Form::submit('儲存',['class' => 'btn btn-success btn-block'])}}
                    </div>
                </div>

            </div>
        </div>
        {!!Form::close()!!}
    </div>
@endsection