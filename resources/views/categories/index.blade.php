@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $categories_count }} {{ str_plural('Category', $categories->count()) }} </h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_posts')
                <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Kreiraj kategoriju</a>
            @endcan
        </div>
    </div>

	<div class="panel panel-default">
		<div class="panel-heading">
			Kategorije
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<th>
						Kategorije
					</th>
					@can('edit_categories', 'delete_categories')
					<th>
						Izmeni
					</th>
					@endcan
					@can('edit_categories', 'delete_categories')
					<th>
						Obriši
					</th>
					@endcan
				</thead>
			<tbody>
				@if($categories->count() > 0)
					@foreach($categories as $category)
					<tr>
						<td>
							{{$category->name}}
						</td>
						<td>
							<a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-xs btn-info">
								Izmeni</a>
						</td>
						<td>
							<a href="{{ route('category.delete',['id'=>$category->id]) }}" class="btn btn-xs btn-danger">
								Obriši</a>
						</td>
					</tr>
				    @endforeach
				@else
					<tr>
						<th colspan="5" class="text-center">Još nema kategorija</th>
					</tr>
				@endif    
			</tbody>
		    </table>		
		</div>
	</div>
@endsection