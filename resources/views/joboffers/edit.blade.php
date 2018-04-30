@extends('main')

@section('title', '| Edit Job Offer')

@section('content')
	<div class="row">

		{!! Form::model($joboffer, ['route' => ['joboffers.update', $joboffer->id], 'method' => 'PUT']) !!}

		<div class="col-md-8">
			{{ Form::label('name', 'Name:')}}
			{{ Form::text('name', null, ["class" => 'form-control'])}}

			
			{{Form::label('status', 'Status:')}}	

    			<select class="form-control" name="status">
    				
    					<option value='in progress'>{{ 'in progress' }}</option>
                        <option value='finalist'>{{ 'finalist' }}</option>
                        <option value='selected'>{{ 'selected' }}</option>
                        <option value='discarded'>{{ 'discarded' }}</option>
    				
    			</select>	

    		

			{{ Form::label('experience_requiered', 'Experience Required:', ["class" => 'form-spacing-top'])}}
			{{ Form::textarea('experience_requiered', null, ["class" => 'form-control form-spacing-bottom'])}}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl horizontal">
					<dt>Created At:</dt>
					<dd> {{ date('M j, Y h:ia', strtotime($joboffer->created_at)) }} </dd>
				</dl>

				<dl class="dl horizontal">
					<dt>Last updated:</dt>
					<dd> {{ date('M j, Y h:ia', strtotime($joboffer->updated_at)) }} </dd>
				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('joboffers.show', 'Cancel', array($joboffer->id), array('class' => 'btn btn-danger btn-block')) !!}
						
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
						
					</div>
				</div>

			</div>
		</div>

		{!! Form::close() !!}
	</div>

@endsection