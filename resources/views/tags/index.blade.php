@extends('main')
@section('title', '| All Tags')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tag Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <th>{{$tag->id}}</th>
                        <td><a onclick="window.open('http://tw.myrenta.com/category/a/{{$tag->name}}', '_blank')">{{$tag->name}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <div class="well">
                {!!Form::open(['route' => 'tags.store', 'method' => 'POST'])!!}
                    <h2>新增 Tag</h2>
                    {{Form::label('name', 'Name:')}}
                    {{Form::text('name', null, ['class' => 'form-control'])}}

                    {{Form::submit('存檔', ['class' => 'btn btn-primary btn-block btn-h1-spacing'])}}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center">
        {{$tags->render()}}    
    </div> 
@endsection
