@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <div class="row">
        <div class="col-md-5">
            <h3>Kreiraj</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="{{ route('posts.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Nazad</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Fotografija</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Izaberite kategoriju</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <label for="tags">Izaberite oznaku</label>
                <div class="form-group">
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->tag }}</label>
                        </div>
                    @endforeach         
                </div>
                <div class="form-group">
                    <label for="body">Sadržaj</label>
                    <textarea class="form-control" name="body" id="body" cols="10" rows="10"></textarea>
                </div>
                    
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Sačuvaj Tekst</button>
                    </div>
                </div>

                </div>
            </form>
        </div>
    </div>
@endsection

<!-- include summernote css/js-->
@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
@stop
@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#body').summernote();
        });
    </script>
@stop