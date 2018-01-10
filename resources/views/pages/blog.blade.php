@extends('layouts.master')
    @section('content')

    <!-- Page Content -->
    <div class="container">

              <div class="row justify-content-center">
                
        <!-- Blog Entries Column -->
        <div class="col-md-8" style="line-height: 30px;">
          <!-- Categories Widget -->
                <ul class="list-unstyled">
                    @foreach($categories as $category)
                    <li style="display: inline-block;">
                      <a class="tag" href="{{ route('category.single',['id'=>$category->id]) }}">{{$category->name}}</a>
                    </li>
                    @endforeach
                    <br><br>
          <!-- Blog Post -->
          @foreach($posts as $post)
              @if($post)
                  <div class="card mb-4">
                    <img class="card-img-top" src="{{$post->image}}" alt="{{$post->title}}">
                      <div class="card-body">
                        <h2 class="card-title text-center"><a href="{{ route('post.single',['slug'=>$post->slug]) }}">{{$post->title}}</a></h2>
                        <p class="card-text">{!! str_limit(strip_tags($post->body), 200) !!}</p>
                        <a href="{{ route('post.single',['slug'=>$post->slug]) }}" class="btn btn-secondary">Pročitaj više &rarr;</a>
                      </div>
                    <div class="card-footer text-muted">
                      <i class="fa fa-tags" aria-hidden="true"></i>
                        <a href="{{ route('category.single',['id'=>$post->category->id]) }}">
                          {{$post->category->name}}
                        </a> 
                      <i class="fa fa-clock-o" aria-hidden="true"></i>
                        {{$post->created_at->toFormattedDateString()}} by
                      <i class="fa fa-user" aria-hidden="true"></i>
                        <a href="{{ route('post.single',['slug'=>$post->slug]) }}#about">
                          @foreach($users as $user)
                            @if($post->user_id == $user->id)
                               {{$user->name}}
                            @endif
                          @endforeach
                        </a>
                    </div>
                  </div>
              @endif
          @endforeach

          <!-- Pagination -->   
              <ul class="pagination justify-content-center"> 
                {{$posts->render("pagination::bootstrap-4")}}
              </ul>
              <br>
          <!-- Search Widget -->
              @include('inc.search')
          
        </div><!--col-md-8-->
      
      </div><!--/row-->  
         
    </div> <!-- /.container -->

    
     
    
    @endsection