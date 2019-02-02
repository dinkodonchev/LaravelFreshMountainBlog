@extends('main')

@section('title', '| Edit Candidate')

@section('content')
	<div class="row">

		{!! Form::model($candidate, ['route' => ['candidates.update', $candidate->id], 'method' => 'PUT']) !!}

		<div class="col-md-8">
			{{ Form::label('name', 'Name:')}}
			{{ Form::text('name', null, ["class" => 'form-control'])}}

			

    		{{Form::label('joboffer', 'Job offers:')}}
    		
                <select class="form-control select2-multi" name="joboffer[]" multiple="multiple">
                    @foreach($joboffers as $joboffer)
                        <option value='{{ $joboffer->id }}'>{{ $joboffer->name }}</option>
                    @endforeach  
                    
                </select>

                {{Form::label('status_per_job', 'Status per Job:')}}
    		
                
                    @foreach($joboffers as $joboffer)
                        <div>{{ $joboffer->name }}</div>
	                        <select class="form-control" name="status_per_job">
	    				
		    					<option value='in progress'>{{ 'in progress' }}</option>
		                        <option value='finalist' {!! (!$finalistallowed) ? 'disabed' : '' !!}>{{ 'finalist' }}</option>
		                        <option value='selected' {!! ($selected) ? 'disabed' : '' !!}>{{ 'selected' }}</option>
		                        <option value='discarded'>{{ 'discarded' }}</option>
		    				
	    					</select>
                    @endforeach  
                    
                

			{{ Form::label('experience', 'Experience:', ["class" => 'form-spacing-top'])}}
			{{ Form::textarea('experience', null, ["class" => 'form-control form-spacing-bottom'])}}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl horizontal">
					<dt>Created At:</dt>
					<dd> {{ date('M j, Y h:ia', strtotime($candidate->created_at)) }} </dd>
				</dl>

				<dl class="dl horizontal">
					<dt>Last updated:</dt>
					<dd> {{ date('M j, Y h:ia', strtotime($candidate->updated_at)) }} </dd>
				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('candidates.show', 'Cancel', array($candidate->id), array('class' => 'btn btn-danger btn-block')) !!}
						
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