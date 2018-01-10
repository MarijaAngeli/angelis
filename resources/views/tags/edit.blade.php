@extends('layouts.app')
@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			Izmeni oznaku: {{$tag->name}}
		</div>
		<div class="panel-body">
			<form action="{{ route('tag.update',['id'=>$tag->id]) }}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="tag">Ime oznake</label>
					<input type="text" value="{{$tag->tag}}" name="tag" class="form-control">
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