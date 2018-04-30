@extends('main')

@section('title', '| Create New Post')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post:</h1>
			<hr>

			{!! Form::open(['route' => 'posts.store', 'files' => true, 'method' => 'POST']) !!}

				{{ csrf_field() }}

    			{{Form::label('title', 'Title:')}}
    			{{Form::text('title', null, array('class'=>'form-control'))}}

    			{{Form::label('slug', 'Slug:')}}
    			{{Form::text('slug', null, array('class'=>'form-control'))}}

    			{{Form::label('category', 'Category:')}}

				

    			<select class="form-control" name="category">
    				@foreach($categories as $category)
    					<option value='{{ $category->id }}'>{{ $category->name }}</option>
    				@endforeach
    			</select>

                </br>

                {{Form::label('featured_image', 'Upload Image:')}}
                {{Form::file('featured_image')}}

                </br>
    			{{Form::label('body', 'Post content:')}}
    			{{Form::textarea('body', null, array('class'=>'form-control'))}}

    			{{Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top: 20px;'))}}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

