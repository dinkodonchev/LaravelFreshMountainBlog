@extends('main')

@section('title', '| Homepage')



@section('content')
      <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
              <h1>Welcome to the blog!</h1>
                <p class="lead"></p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
              
            </div>
        </div>
      </div>
    

    <div class="row">
      <div class="col-md-8" style="">
        @foreach($posts as $post)

        <div class="post">
              <h3>{{$post->title}}</h3>
            <p>{{substr($post->body, 0, 300)}}{{ strlen($post->body) > 300 ? "..." : "" }}</p> 
            <a  href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read more</a>

        </div>
        <hr>

        @endforeach
      
      </div>


      <div class="col-md-3 col-md-offset-1" style="">
        <h2>Sidebar</h2>
        <p>Lorem ipsum dolor sit amet, tempor non inceptos, erat architecto accumsan, augue amet interdum esse lacus risus. Commodo eros felis parturient ac, mauris elementum posuere quis sit eros lacinia. Ut in in urna etiam, mauris nec amet, quisque pede et tincidunt, mattis donec dui, montes libero habitasse ac in dictum. Sollicitudin non enim feugiat velit a, lobortis senectus aliquam sed volutpat malesuada. Tortor vivamus cras, curabitur suspendisse, malesuada interdum lacus maecenas, lacinia sit, adipiscing suspendisse torquent in.</p>

      </div>
    </div>

@endsection