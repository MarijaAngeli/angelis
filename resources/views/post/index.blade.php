@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $result->total() }} {{ str_plural('Post', $result->count()) }} </h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_posts')
                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Kreiraj</a>
            @endcan
        </div>
    </div>

    <div class="result-set">
        <table class="table table-bordered table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Slika</th>
                <th>Naslov</th>
                <th>Kategorija</th>
                <th>Status</th>
                <th>Autor</th>
                <th>Datum</th>
                @can('edit_posts', 'delete_posts')
                    <th class="text-center">Akcije</th>
                @endcan
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="{{$item->image}}" alt="{{ $item->title}}" width="90px" height="50px"></td>
                    <td>{{str_limit(strip_tags($item->title), 35)}} </td>
                    <td>
                        @foreach($categories as $category)
                            @if($category->id == $item->category_id)
                                {{$category->name}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{$item->status == 0 ? "Neobjavljeno" : "Objavljeno"}}

               <form method = "POST" action = "{{ route('posts.publish', ['id' => $item->id]) }}">
                {{ csrf_field() }}
                 
                    {{Form::select("status",['0' => 'U radu', '1' => 'Objavi' ],null,['class'=> 'btn btn-default btn-xs'])}}
                    {{Form::submit("Potvrdi",['class'=>'btn btn-success btn-xs'])}}
                    
                </form>



                    </td>
                    <td>{{ $item->user['name'] }}</td>
                    <td>{{ $item->created_at->toFormattedDateString() }}</td>
                    @can('edit_posts', 'delete_posts')
                    <td class="text-center">
                        @include('shared._actions', [
                            'entity' => 'posts',
                            'id' => $item->id
                        ])
                    </td>
                    @endcan
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-center">
            {{ $result->links() }}
        </div>
    </div>

@endsection
