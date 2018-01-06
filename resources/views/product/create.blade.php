@extends('main') 
@section('title', '| 新增書籍') 

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    {!! Html::style('css/create.css') !!}
@endsection

@section('content')
<div class="row">
<div class="container-fluid">
	{!!Form::open(['route' => 'product.store', 'method' => 'POST'])!!}
		<div class="col-md-6">
			<div class="well-block">
				<div class="well-title">
					<h4>書籍基本資料</h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							{{Form::label('country', '▪ 哪一種series id')}}
						</div>
						<div class="col-md-6">
							<div class="col-md-3">
								{{Form::radio('country', '1', true)}} 
								{{Form::label('jp', '日本')}}
							</div>

							<div class="col-md-3">
								{{Form::radio('country', '2')}} 
								{{Form::label('tw', '台灣')}}
							</div>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="input-group">
							{{Form::text('series_id', null, array('class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'Series ID'))}}
							<span class="input-group-btn">
                            {{Form::submit('帶入資料', array('class' => 'btn btn-default'))}}
                        </span>
						</div>
					</div>

					<div class="col-md-6">
						{{Form::label('series_name', '▪ Series 書名')}} {{Form::text('series_name', null, array('class' => 'form-control', 'maxlength'
						=> '255', 'placeholder' => '哈利波特', 'required' => ''))}}
					</div>
					<div class="col-md-6">
						{{Form::label('series_author', '▪ 作者')}} {{Form::text('series_author', null, array('class' => 'form-control', 'maxlength'
						=> '255', 'placeholder' => '格式請填：作者名|英文名', 'required' => ''))}}
					</div>

					<div class="col-md-6">
						{{Form::label('title_name', '▪ Title 中文書名')}} {{Form::text('title_name', null, array('class' => 'form-control', 'maxlength'
						=> '255', 'placeholder' => '哈利波特—阿茲卡班的逃犯', 'required' => ''))}}
					</div>
					<div class="col-md-6">
						{{Form::label('title_name_jp', 'Title 日文書名')}} {{Form::text('title_name_jp', null, array('class' => 'form-control', 'maxlength'
						=> '255', 'placeholder' => '填日文'))}}
					</div>

					<div class="col-md-6">
						{{Form::label('title_name_en', 'Title 英文書名')}} {{Form::text('title_name_en', null, array('class' => 'form-control', 'maxlength'
						=> '255', 'placeholder' => '填英文'))}}
					</div>
					<div class="col-md-6">
						{{Form::label('series_topic', '出版社系列')}} {{Form::text('series_topic', null, array('class' => 'form-control', 'maxlength'
						=> '255', 'placeholder' => 'HQ漫畫系列'))}}
					</div>

					<div class="col-md-6">
						{{Form::label('title_vol_no', '▪ 冊數')}} {{Form::text('title_vol_no', null, array('class' => 'form-control', 'maxlength' =>
						'255', 'placeholder' => '1', 'required' => ''))}}
					</div>
					<div class="col-md-6">
						{{Form::label('series_vol', '總冊數')}} {{Form::text('series_vol', null, array('class' => 'form-control', 'maxlength' => '255',
						'placeholder' => '3'))}}
					</div>

					<div class="col-md-6">
						{{Form::label('brand_id', '▪ 發行')}}
						<select class="form-control select2-multi" name="brand_id" required>
                        <option value="">請選擇</option>
                        <option value="1">SB creative</option>
                        <option value="2">G2Comix</option>
                        <option value="3">KINTON JAPAN</option>
                        <option value="4">COMIC CYUTT</option>
                        <option value="5">Moby-Dick Digital</option>
                        <option value="6">渡部製作所，Moby-Dick Digital</option>
                        <option value="7">狗屋出版社</option>
                        <option value="8">未來數位</option>
                        <option value="9">禾馬文化</option>
                        <option value="10">桑尤姆的部屋</option>
                        <option value="11">LEED</option>
                        <option value="12">明日工作室</option>
                        <option value="13">PAD</option>
                        <option value="14">WPOP</option>
                        <option value="15">Mag-GardenPOP</option>
                        <option value="16">秋水社POP</option>
                        <option value="17">Mobydick（g2comix）</option>
                        <option value="18">龍馬文化</option>
                        <option value="19">シュークリームPOP</option>

                        <option value="20">亂搭！MyRenta！</option>
                        <option value="21">モバイルメディアリサーチ</option>
                        <option value="22">激ちゅぱっ</option>
                        <option value="23">Bevy</option>
                        <option value="24">大翼文化</option>
                        <option value="25">松文館</option>
                        <option value="26">グループ·ゼロ</option>
                        <option value="27">スクリーモ</option>
                        <option value="28">Creators Guild/Moby-Dick</option>
                        <option value="29">果樹出版社</option>
                        <option value="30">新書館POP</option>
                        <option value="31">LEED/Moby-Dick</option>
                        <option value="32">笠倉出版社</option>
                        <option value="33">グループ・ゼロ</option>
                        <option value="34">LEED / Moby-Dick</option>
                        <option value="35">オトメチカPOP</option>
                        <option value="36">OrangeVox</option>
                        <option value="37">長鴻出版</option>
                        <option value="38">アイプロダクション</option>

                        <option value="39">銘顯文化</option>
                        <option value="40">長鴻出版社</option>
                        <option value="41">丹陽文化</option>
                        <option value="42">COMIC維新</option>
                        <option value="43">モバイルメディアリサーチPOP</option>
                        <option value="44">綠川明</option>
                        <option value="45">遙心</option>
                        <option value="46">大洋図書</option>
                        <option value="47">新書館</option>
                        <option value="48">玖錚</option>
                        <option value="49">玖琤</option>
                        <option value="50">マッグガーデンPOP</option>
                        <option value="51">東京漫画社POP</option>
                        <option value="52">100</option>
                        <option value="53">飛燕文創</option>
                        <option value="54">双葉社</option>
                        <option value="55">少年画報社</option>
                        <option value="56">長鴻出版社&双葉社</option>
                        <option value="57">長鴻出版社&少年画報社</option>

                        <option value="58">耕林出版社</option>
                        <option value="59">長鴻小說</option>
                        <option value="60">大誠社</option>
                        <option value="61">シガリロ</option>
                        <option value="62">恋愛ショコラ</option>
                        <option value="63">ラブスイーツ</option>
                        <option value="64">KATTS</option>
                        <option value="65">Bコミ</option>
                        <option value="66">qap</option>
                        <option value="67">日本文芸社</option>
                        <option value="68">希代多媒體書版</option>
                        <option value="69">DeNIMO</option>
                        <option value="70">OrangeVoxPOP</option>
                        <option value="71">長鴻出版社&講談社</option>
                        <option value="72">WコミックスZR</option>
                        <option value="73">宙出版</option>
                        <option value="74">尖端出版社</option>
                        <option value="75">長鴻出版社&集英社</option>
                    </select>
					</div>
					<div class="col-md-6">
						{{Form::label('tags', '▪ Tags')}}
						<select class="form-control select2-multi" name="tags[]" multiple="multiple" required>
                        @foreach ($tags as $tag)
                        	<option value="{{$tag->id}}">{{$tag->name}}</option>
                   		@endforeach
                    </select>
					</div>
					<div class="col-md-12">
						{{Form::label('title_detail', 'Title簡介 (如果是第一集就把title簡介也放到series簡介)')}}
						{{Form::textarea('title_detail',null,['class'=>'form-control', 'rows' => 2, 'cols' => 40])}}
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="well-block">
				<div class="well-title">
					<h4>上架設定</h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-3">
							{{Form::label('series_category_id', '▪ 類型')}}
						</div>
						<div class="col-md-9">
							<div class="col-md-3">
								{{Form::radio('series_category_id', '1', true)}} 
								{{Form::label('comic', '漫畫')}}
							</div>

							<div class="col-md-3">
								{{Form::radio('series_category_id', '2')}} 
								{{Form::label('novel', '小說')}}
							</div>

							<div class="col-md-3">
								{{Form::radio('series_category_id', '3')}} 
								{{Form::label('book', '書刊')}}
							</div>

							<div class="col-md-3">
								{{Form::radio('series_category_id', '4')}} 
								{{Form::label('scroll', '條漫')}}
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-3">
							{{Form::label('series_brand_id', '▪ 網站分類')}}
						</div>
						<div class="col-md-9">
							<select name="series_category_id" id="series_category_id" class="dropselectsec" required style="width: 100%;">
								<option value="">請選擇</option>
								<option value = "1">愛情羅曼史漫畫</option>
								<option value = "80">青年漫畫</option>
								<option value = "84">輕熟女漫畫</option>
								<option value = "95">女優寫真</option>
								<option value = "96">少女漫畫</option>
								<option value = "117">經典小說</option>
								<option value = "133">少年漫畫</option>
								<option value = "140">言情小說</option>
								<option value = "143">恐怖漫畫</option>
								<option value = "149">武俠小說</option>
								<option value = "152">恐怖小說</option>
								<option value = "154">趣味寫真</option>
								<option value = "162">耽美BL漫畫</option>
								<option value = "163">耽美小說</option>
								<option value = "193">輕小說</option>
								<option value = "290">原創小說</option>
							</select>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-3">
							{{Form::label('title_start', '▪ 上架日期')}}
						</div>
						<div class="col-md-9">
							<input id="title_start" type="date" required style="width: 100%;">
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-3">
							{{Form::label('title_end', '▪ 下架日期')}}
						</div>
						<div class="col-md-9">
							<input id="title_end" type="date" required style="width: 100%;">
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-3">
							{{Form::label('title_price_48h', '▪ 租閱價格(48h)')}}
						</div>
						<div class="col-md-9">
							<select name="title_price_48h" id="title_price_48h" class="dropselectsec" required style="width: 100%;">
								<option value=""> 請選擇</option>
								<option value="0">0</option>
								<option value="100">100</option>
								<option value="200">200</option>
								<option value="300">300</option>
								<option value="400">400</option>
								<option value="500">500</option>
								<option value="-1">-1</option>
							</select>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-3">
							{{Form::label('title_price_buy', '▪ 永久價格')}}
						</div>
						<div class="col-md-9">
							<select name="title_price_buy" id="title_price_buy" class="dropselectsec" required style="width: 100%;">
								<option value=""> 請選擇</option>
								<option value="0">0</option>
								<option value="100">100</option>
								<option value="200">200</option>
								<option value="300">300</option>
								<option value="400">400</option>
								<option value="500">500</option>
								<option value="600">600</option>
								<option value="700">700</option>
								<option value="-1">-1</option>
							</select>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-3">
							{{Form::label('try_page', '▪ 試閱內容')}}
						</div>
						<div class="col-md-9">
							{{Form::text('try_page', null, array('class' => 'form-control', 'maxlength' => '255', 'placeholder' => '1,2,3,6,8', 'required'
							=> ''))}}
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-3">
							{{Form::label('series_is_adult', '▪ 是否成人')}}
						</div>
						<div class="col-md-9">
							<div class="col-md-6">
								{{Form::radio('series_is_adult', '1', true)}} 
								{{Form::label('yes', '是')}}
							</div>

							<div class="col-md-6">
								{{Form::radio('series_is_adult', '0')}} 
								{{Form::label('no', '否')}}
							</div>
						</div>
					</div>
					{{Form::submit('存檔',['class' => 'btn btn-success btn-block'])}}
				</div>
			</div>
		</div>
	{!!Form::close()!!}
</div>
</div>
@endsection 

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}
   
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script type="text/javascript">
        $('.select2-multi').select2();

        tinymce.init({
            selector: 'textarea',
            plugins: 'code link'
        });
    </script>
@endsection