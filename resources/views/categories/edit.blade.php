@extends('layouts.app')
@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			Izmeni kategoriju: {{$category->name}}
		</div>
		<div class="panel-body">
			<form action="{{ route('category.update',['id'=>$category->id]) }}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="name">Ime kategorije</label>
					<input type="text" value="{{$category->name}}" name="name" class="form-control">
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Sačuvaj izmene</button>
					</div>
				</div>

				</div>
			</form>
			
		</div>
	</div>
@stop