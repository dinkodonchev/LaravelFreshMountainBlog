@extends('main')

@section('title', '| View Job Offer')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>{{ $joboffer->name}}</h1>
		<p class="lead">{{ $joboffer->experience_requiered }}</p>


		<p class="lead">{{ $joboffer->name }}</p>
	</div>

	<div class="col-md-4">
		<div class="well">

			
			<hr>

			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('joboffers.edit', 'Edit', array($joboffer->id), array('class' => 'btn btn-primary btn-block')) !!}
					
				</div>
				<div class="col-sm-6">
					{!! Form::open(['route' => ['joboffers.destroy', $joboffer->id], 'method' => 'DELETE']) !!}

					

					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

					{!! Form::close() !!}
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					{!! Html::linkRoute('joboffers.index', '<< See All Job Offers', [], array('class' => 'btn btn-default btn-block btn-h1-spacing')) !!}
				</div>
			</div>

		</div>
	</div>
</div>



@endsection