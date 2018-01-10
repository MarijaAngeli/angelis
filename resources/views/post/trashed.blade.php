@extends('layouts.app')
@section('content')
    

   <div class="panel panel-default">
        <div class="panel-heading">
            Postovi u kanti
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>
                        Slika
                    </th>
                    <th>
                        Naslov
                    </th>
                    <th>
                        Vrati
                    </th>
                    <th>
                        Uništi
                    </th>
                </thead>
            <tbody>
                @if($posts->count() > 0)
                @foreach($posts as $post)
                    <tr>
                        <td>
                            <img src="{{ $post->image }}" alt="{{ $post->title}}" width="90px" height="50px">
                        </td>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            <a href="{{ route('post.restore',['id'=>$post->id]) }}" class="btn btn-xs btn-success" style="display: inline;" onclick="return confirm('Are you sure you want to restore it?')">
                                Vrati tekst</a>
                        </td>
                        <td>
                            <a href="{{ route('post.kill',['id'=>$post->id]) }}" class="btn btn-xs btn-danger" style="display: inline;" onclick="return confirm('Are you sure you want to delete it?')" >
                                Obriši zauvek</a>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">Nema tekstova u kanti</th>
                    </tr>
                @endif
            </tbody>
            </table>        
        </div>
  

        <div class="text-center">
            {{ $posts->links() }}
        </div>
    </div>

@endsection
