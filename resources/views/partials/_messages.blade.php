@if (Session::has('success'))

<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>

@endif

@if(count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
	</div>
@endif

@if (Auth::check())
    <div class="alert alert-success">
        {{ "You are logged in as " }}{{{ isset(Auth::user()->name) ? Auth::user()->name : "" }}}{{"."}}
    </div>
@endif