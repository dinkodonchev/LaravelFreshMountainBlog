@include('partials._head')

  <body>
    @include('partials._nav')
    <!-- BOOTSTRAP NAVBAR -->

    

    <h1 class="text-center">The Road goes ever on and on...</h1>
    @include('partials._messages')
    <img style="margin-bottom: 30px; width: 100%" src="{{ asset('images/Kalinite.jpg')}}" >

    <div class="container">

      

      @yield('content')

      @include('partials._footer')

      </div>
    <!-- End of container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    @yield('javascripts')

  </body>
</html>