@extends('layouts.master')
@section('content')

	<!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h1 class="mt-4 text-center" style="background: #f7f7f7; color: #7c795d; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 30px; padding: 20px 20px; margin: 0;  " >{{$tag->tag}}</h1>
          <br>
          <hr>
            @foreach($tag->posts as $post)
            <div class="row" style="display: inline-block;">
              <div class="col-md-4 text-center">
                <div class="card" style="width: 33rem;">
                  <img src="{{asset($post->image)}}" alt="{{$post->title}}" style="width: 33rem; height: 15rem; ">
                  <div class="card-block">
                    <h4 class="card-title"><a style="color: red;" href="{{ route('post.single',['slug'=>$post->slug]) }}">{{str_limit(strip_tags($post->title), 25)}}</a></h4>
                    <p class="card-text" style="line-height: 30px;">{!! str_limit(strip_tags($post->body), 100) !!}</p>
                    <a href="{{ route('post.single',['slug'=>$post->slug]) }}" class="btn btn-primary">Pročitaj više</a>
                  </div>
                </div>
              </div>
              <br>
            </div>
            @endforeach
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
