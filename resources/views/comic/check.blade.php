@extends('main')

@section('title', '| 建檔管理')

@section('content')
    <div class="row">
        <div class="col-md-offset-6 col-md-3">
            <a href="#" class="btn btn-sm btn-block btn-danger btn-h3-spacing">發佈到check主機</a>
        </div>
        <div class="col-md-3">
                {!!Form::open(['route' => 'comic.search', 'method' => 'POST'])!!}
                    <div class="input-group">
                        {{Form::text('keyword', null, array('class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'search series_id'))}}
                        <span class="input-group-btn">
                            {{Form::submit('搜尋', array('class' => 'btn btn-default'))}}
                        </span>
                    </div>
                {!!Form::close()!!}
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>全選</th>
                    <th>日本Series ID</th>
                    <th>Title ID</th>
                    <th>Series ID</th>
                    <th>Series書名</th>
                    <th>Title書名</th>
                    <th>冊數</th>
                    <th>封面</th>
                    <th>作者</th>
                    <th>發行</th>
                    <th>網站分類</th>
                    <th>上架日期</th>
                    <th>下架日期</th>
                    <th>狀態</th>
                    <th>48h</th>
                    <th>無期限</th>
                    <th>成人</th>
                    <th>執行動作</th>
                    <th>閱讀器預覽</th>
                </thead>
                @inject('ProductPresenter', 'App\Presenters\ProductPresenter')
                @foreach($data as $item)
                    <tr>
                        <td id={{$item->id}}>
                            <input type="checkbox" name="chbox" value={{$item->id}}>
                        </td>

                        <td width="120px">
                            0
                        </td>

                        <td>
                            {{$item->title_id}}
                        </td>

                        <td>
                            <a onclick="window.open('http://check.tw.myrenta.com/item/{{$item->series_id}}', '_blank')">{{$item->series_id}}</a>
                        </td>

                        <td width="250px">
                            {{$item->series_name}}
                        </td>

                        <td width="250px">
                            {{$item->title_name}}
                        </td>

                        <td>
                            {{$item->title_vol_no}}
                        </td>

                        <td>
                            <img src='http://static.papy.com.tw/sc/item/cover/9-{{$item->title_id}}-c132.jpg'>
                        </td>

                        <td width="150px">
                            {{$item->series_author}}
                        </td>

                        <td>
                            {{$ProductPresenter->seriesBrand($item->series_brand_id)}}
                        </td>

                        <td>
                            {{$ProductPresenter->seriesCategory($item->series_category_id)}}
                        </td>

                        <td>
                            {{$item->title_start}}
                        </td>

                        <td>
                            {{$item->title_end}}
                        </td>

                        <td>
                            {{$item->title_status_id}}
                        </td>

                        <td>
                            {{$item->title_price_48h}}
                        </td>

                        <td>
                            {{$item->title_price_buy}}
                        </td>

                        <td>
                            {{$ProductPresenter->isAdult($item->series_is_adult)}}
                        </td>

                        <td>
                            <a href="{{route('comic.edit', $item->id)}}" class="btn btn-sm btn-block btn-default btn-h3-spacing">修改文字</a>
                            <a href="{{route('product.file')}}" class="btn btn-sm btn-block btn-default btn-h3-spacing">重傳檔案</a>
                        </td>

                        <td>
                            <a href="#" class="btn btn-sm btn-block btn-default btn-h3-spacing">試讀</a>
                            <a href="#" class="btn btn-sm btn-block btn-default btn-h3-spacing">完整</a>
                            <a href="#" class="btn btn-sm btn-block btn-default btn-h3-spacing">圖片</a>
                        </td>
                    </tr>
                @endforeach
            </table> 
        </div>

        <div class="col-md-12 text-center">
            {{$data->render()}}    
        </div> 
    </div>
@endsection
