@extends('main')

@section('title', '| 翻譯管理')

@section('content')
    <div class="row">
        <div class="col-md-3">
                
                    <div class="input-group">
                        {{Form::text('keyword', null, array('class' => 'form-control', 'maxlength' => '255', 'placeholder' => 'search 譯者'))}}
                        <span class="input-group-btn">
                            {{Form::submit('搜尋', array('class' => 'btn btn-default'))}}
                        </span>
                    </div>
                
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>日本Series ID</th>
                    <th>Series ID</th>
                    <th>Series書名</th>
                    <th>頁數</th>
                    <th>譯者</th>
                    <th>審論</th>
                    <th>負責文編</th>
                    <th>回稿日(譯者)</th>
                    <th>回稿日(審論)</th>
                    <th>回稿日(文編)</th>
                    <th>截稿日</th>
                </thead>
                <tr>
                    <td>0</td>
                    <td>78471</td>
                    <td>雞排公主(02)完</td>
                    <td>62</td>
                    <td>譯者A</td>
                    <td>審論A</td>
                    <td>文編A</td>
                    <td>2017/11/25</td>
                    <td>2017/12/25</td>
                    <td>2018/01/25</td>
                    <td>2018/03/09</td>
                </tr>
            </table> 
        </div>
    </div>
@endsection
