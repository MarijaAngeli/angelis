@extends('layouts.app')
@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			Kreiraj Novu Oznaku
		</div>
		<div class="panel-body">
			<form action="{{ route('tag.store') }}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="tag">Ime oznake</label>
					<input type="text" name="tag" class="form-control">
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Sačuvaj oznaku</button>
					</div>
				</div>

				</div>
			</form>
			
		</div>
	</div>
@stop