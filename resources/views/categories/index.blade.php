@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

      <h1 class="my-4"> 美好
        <small> 源于生活</small>
      </h1>

    @foreach ($posts as $post)
      <!-- Blog Post -->
      <div class="card mb-4">
          <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
        <div class="card-body">
          <h2 class="card-title">{{ $post->title }}</h2>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="{{ route('posts.show',$post->category_id)}}" class="btn btn-primary">查看全文 &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            {{ $post->created_at->diffForHumans() }}
          <a href="/"> 崔邓红 </a>
        </div>
      </div>
    @endforeach

    {{ $posts->links() }}
    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">搜索</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">分类</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">Web Design</a>
                </li>
                <li>
                  <a href="#">HTML</a>
                </li>
                <li>
                  <a href="#">Freebies</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">JavaScript</a>
                </li>
                <li>
                  <a href="#">CSS</a>
                </li>
                <li>
                  <a href="#">Tutorials</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
          You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
@endsection
