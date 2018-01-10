@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $tags_count }} {{ str_plural('Tag', $tags->count()) }} </h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_posts')
                <a href="{{ route('tag.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Kreiraj Novu Oznaku</a>
            @endcan
        </div>
    </div>

	<div class="panel panel-default">
		<div class="panel-heading">
			Oznake
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<th>
						Oznake
					</th>
					@can('edit_tags', 'delete_tags')
					<th>
						Izmeni
					</th>
					@endcan
					@can('edit_tags', 'delete_tags')
					<th>
						Obriši
					</th>
					@endcan
				</thead>
			<tbody>
				@if($tags->count() > 0)
					@foreach($tags as $tag)
					<tr>
						<td>
							{{$tag->tag}}
						</td>
						<td>
							<a href="{{ route('tag.edit',['id'=>$tag->id]) }}" class="btn btn-xs btn-info">
								Izmeni</a>
						</td>
						<td>
							<a href="{{ route('tag.delete',['id'=>$tag->id]) }}" class="btn btn-xs btn-danger">
								Obriši</a>
						</td>
					</tr>
				    @endforeach
				@else
					<tr>
						<th colspan="5" class="text-center">Još nema oznaka</th>
					</tr>
				@endif    
			</tbody>
		    </table>		
		</div>
	</div>
@endsection