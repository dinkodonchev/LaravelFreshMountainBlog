@extends('main')

@section('title', '| Add A Job Offer')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Add a Job Offer:</h1>
			<hr>

			{!! Form::open(['route' => 'joboffers.store', 'files' => true, 'method' => 'POST']) !!}

				{{ csrf_field() }}

    			{{Form::label('name', 'Name:')}}
    			{{Form::text('name', null, array('class'=>'form-control'))}}


                {{Form::label('experience_requiered', 'Experience required:')}}
                {{Form::text('experience_requiered', null, array('class'=>'form-control'))}}

                {{Form::label('candidates', 'Candidates:')}}
                <select class="form-control select2-multi" name="candidates[]" multiple="multiple">
                    @foreach($candidates as $candidate)
                        <option value='{{ $candidate->id }}'>{{ $candidate->name }}</option>
                    @endforeach  
                    
                </select>

            
                
                </br>
    			

    			{{Form::submit('Add Job Offer', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 20px;'))}}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

