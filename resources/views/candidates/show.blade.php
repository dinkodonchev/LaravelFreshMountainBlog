@extends('main')

@section('title', '| View Candidate')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>{{ $candidate->name}}</h1>
		<p class="lead">{{ $candidate->experience }}</p>
		<p class="lead">{{ $candidate->status }}</p>
	</div>

	<div class="col-md-4">
		<div class="well">

			
			<hr>

			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('candidates.edit', 'Edit', array($candidate->id), array('class' => 'btn btn-primary btn-block')) !!}
					
				</div>
				<div class="col-sm-6">
					{!! Form::open(['route' => ['candidates.destroy', $candidate->id], 'method' => 'DELETE']) !!}

					

					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

					{!! Form::close() !!}
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					{!! Html::linkRoute('candidates.index', '<< See All Candidates', [], array('class' => 'btn btn-default btn-block btn-h1-spacing')) !!}
				</div>
			</div>

		</div>
	</div>
</div>



@endsection