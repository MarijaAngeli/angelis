@extends('layouts.master')
@section('content')

	<!-- Page Content -->
    <div class="container">
        
      <div class="row justify-content-center">
        <ul class="list-unstyled">
          @foreach($categories as $category)
                    <li style="display: inline-block;">
                      <a class="tag" href="{{ route('category.single',['id'=>$category->id]) }}">{{$category->name}}</a>
                    </li>
                    @endforeach
        </ul>
        <!-- Post Content Column -->
        <div class="col-lg-8" style="line-height: 30px;">

          <!-- Title -->
          <h1 class="mt-4 text-center" style="color: #737373; font-family: 'Trocchi', serif; font-size: 45px; font-weight: normal; line-height: 48px; padding: 20px 0px; margin: 0 0 20 0; border-radius: 50%; " >{{$post->title}}</h1>

          <!-- Author -->
              <p class="lead">
                by
                <a href="#about">
                  @foreach($users as $user)
                      @if($post->user_id == $user->id)
                           {{$user->name}}
                      @endif
                  @endforeach
                </a>
              </p>

          <hr>

          <!-- Date/Time -->
          <div class="card-footer text-muted">
              <i class="fa fa-clock-o" aria-hidden="true"></i>
                  {{$post->created_at->toFormattedDateString()}} 
          
              <i class="fa fa-tags" aria-hidden="true"></i>
                <a href="{{ route('category.single',['id'=>$post->category->id]) }}">
                  {{$post->category->name}}
                </a> 
          </div>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="{{$post->image}}" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead">{!! $post->body !!}</p>
          <br>

          <!-- Share this post -->
          <div class="row col-md-10">
                <div class="col-md-4 col-md-offset-1">
                  <h5>Share this post:</h5>
                </div>
              <div class="col-md-8">
                  <div class="socials text-center">
                      <div class="addthis_inline_share_toolbox"></div>
                  </div>
              </div>
          </div>

          <hr>
          <!-- Pagination -->
                        <ul class="pagination justify-content-center">
                          @if($next)
                              <li class="page-item">
                                 <a class="page-link" href="{{ route('post.single',['slug'=>$next->slug]) }}">Predhodna</a>
                              </li>
                          @endif
                          @if($prev)
                              <li class="page-item">
                                 <a class="page-link" href="{{ route('post.single',['slug'=>$prev->slug])}}" tabindex="-1">Sledeća</a>
                              </li>
                          @endif
                        </ul>

                <div class="blog-details-author" id="about">

                    <div class="blog-details-author-thumb">
                        <img src="/uploads/avatars/1514381217.jpg" alt="{{$user->name}}" style="width:100px; height:100px; border-radius: 100%;">
                    </div>

                    <div class="blog-details-author-content">
                        <div class="author-info">
                            <h5 class="author-name">{{$post->user->name}}</h5>
                        </div>
                        <p class="lead">{!!$post->user->about!!}</p>
                        
                    </div>
                </div>
               
          <hr>
          <br>
          <!-- Comments Form -->

            @include('inc.disqus')
            <br>
             <!-- Tags -->
                    <ul class="tags">
                        @foreach($post->tags as $tag)
                            <li style="display: inline-block;">
                                  <a href="{{ route('tag.single',['id'=>$tag->id]) }}" class="tag">{{$tag->tag}}</a>
                            </li> 
                        @endforeach
                    </ul>

        </div>

        <!-- Sidebar Widgets Column -->
       
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection
<script id="dsq-count-scr" src="//agencija-dev.disqus.com/count.js" async></script>




