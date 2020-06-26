@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-8 mx-auto">
      @foreach ($posts as $post)
      <div>
        <h4 class="card-title text-left title-st"  style="font-family: 'Open Sans', sans-serif;">{{ $post->title }}</h4>
      </div>
      <div class="card mb-4">
        <img class="card-img-top" src=" {!! !empty($post->image) ? '/storage/posts/' . $post->image :  'https://www.smartsheet.com/sites/default/files/IC-DevOps-Venn-Diagram.jpg' !!} " alt="Card image cap">
        <div class="card-body">
          <p class="card-text"> {{ str_limit($post->body, $limit = 280, $end = '...') }} </p>
          <a href="/posts/{{ $post->id }}" class="btn btn-primary read-more-btn">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted posted-by">
          Posted {{ $post->created_at->diffForHumans() }} by
          <a class="posted-by" href="#">{{ $post->user->name }} </a>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>
@endsection
