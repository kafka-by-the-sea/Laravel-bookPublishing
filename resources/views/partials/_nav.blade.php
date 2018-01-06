<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">上架系統</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="{{Request::is('product/create') ? "active" : ""}}"><a href="{{route('product.create')}}">建檔</a></li>
            <li class="{{Request::is('/') ? "active" : ""}}"><a href="{{route('comic.index')}}">漫畫</a></li>
            <li class="{{Request::is('novel') ? "active" : ""}}"><a href="{{route('novel.index')}}">小說</a></li>
            <li class="{{Request::is('book') ? "active" : ""}}"><a href="{{route('book.index')}}">書刊</a></li>
            <li class="{{Request::is('') ? "active" : ""}}"><a href="#">條漫</a></li>
            <li class="{{Request::is('tags/index') ? "active" : ""}}"><a href="{{route('tags.index')}}">標籤</a></li>
        </ul>
    </div>
  </div>
</nav>
