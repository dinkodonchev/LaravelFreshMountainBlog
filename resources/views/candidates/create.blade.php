@extends('main')

@section('title', '| Add A Candidate')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Add a Candidate:</h1>
			<hr>

			{!! Form::open(['route' => 'candidates.store', 'files' => true, 'method' => 'POST']) !!}

				{{ csrf_field() }}

    			{{Form::label('name', 'Name:')}}
    			{{Form::text('name', null, array('class'=>'form-control'))}}


    			{{Form::label('status', 'Status:')}}	

    			<select class="form-control" name="status">
    				
    					<option value='in progress'>{{ 'in progress' }}</option>
                        <option value='finalist'>{{ 'finalist' }}</option>
                        <option value='selected'>{{ 'selected' }}</option>
                        <option value='discarded'>{{ 'discarded' }}</option>
    				
    			</select>


                {{Form::label('experience', 'Experience:')}}
                {{Form::text('experience', null, array('class'=>'form-control'))}}
                
                </br>
    			

    			{{Form::submit('Add Candidate', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 20px;'))}}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

