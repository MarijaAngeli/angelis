@extends('layouts.app')
 
@section('content')

        
        <div class="col-md-10 ">
            <div id="page-wrapper">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profil</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                {{csrf_field()}}

                
                    <label>Izmeni profilnu sliku</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <br><br></br>
               <div class="form-group">
                    <label for="name">Izmeni ime</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="about">O Vama</label>
                    <textarea class="form-control" id="about" name="about" rows="6" cols="6">{!!$user->about!!}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Sačuvaj izmene</button>
                    </div>
                </div>
            </form>
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
            $('#about').summernote();
        });
    </script>
@stop