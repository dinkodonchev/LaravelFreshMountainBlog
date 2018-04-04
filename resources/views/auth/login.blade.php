@extends('main')

@section('title', '| Login')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open() !!}

			{{ csrf_field() }}
			
			{{ Form::label('email', 'Email:')  }}
			{{ Form::email('email', null, ['class' => 'form-control'] ) }}
			<br/>

			{{ Form::label('password', 'Password:')  }}
			<br/>
			{{ Form::password('password', null, ['class' => 'form-control'] ) }}
			<br/>
			{{ Form::checkbox('remember') }}{{Form::label('remember', 'Remember Me')}}
			<br/>
			{{ Form::submit('Login', ['class' => 'btn btn-rimary btn block']) }}


			{!! Form::close() !!}
		</div>
	</div>

@endsection