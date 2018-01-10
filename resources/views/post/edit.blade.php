@extends('layouts.app')

@section('title', 'Edit Post ')

@section('content')

    <div class="row">
        <div class="col-md-5">
            <h3>Izmeni</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="{{ route('posts.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Nazad</a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        
                        <form method = "POST" action = "{{ route('posts.update', ['id' => $post->id]) }}" enctype = "multipart/form-data">

                        <input name="_method" type="hidden" value="PUT">
                        <input name="_token" type="hidden" value="somelongrandom string">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Naslov</label>
                                <input type="text" value="{{$post->title}}" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Fotografija</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="category">Izaberite kategoriju</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            @if($post->category_id == $category->id)
                                                selected
                                            @endif
                                        >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="tags">Izaberite oznaku</label>
                            <div class="form-group">
                                @foreach($tags as $tag)
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                            @foreach ($post->tags as $t)
                                                @if ($tag->id == $t->id)
                                                    checked 
                                                @endif
                                            @endforeach

                                        >{{ $tag->tag }}</label>
                                    </div>
                                @endforeach         
                            </div>
                            <div class="form-group">
                                <label for="body">Sadržaj</label>
                                <textarea class="form-control" name="body" id="body" cols="10" rows="10">{!! $post->body !!}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">Sačuvaj tekst</button>
                                </div>
                            </div>

                            </div>
                            
                        </form>

                     </div>
                </div>
            </div>
        </div>
    </div>

@endsection 
@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
@stop
@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
   
    
    <script>
        $(document).ready(function() {
            $('#body').summernote({
                height: "500px"
    });
        });
    </script>
@stop
