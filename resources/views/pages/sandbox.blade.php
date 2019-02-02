@extends('main')

@section('title', '| Sandbox')



@section('content')
      <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
              <h1>Come out and play!</h1>
            </div>
        </div>
      </div>
    

    <div class="row">
      <div class="col-md-8" style="">
        Welcome to the Coding Sandbox!
      </div>
      <div>
        <div id="timer">Timer</div>
        <button id="start">Start</button>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script>
            function incTimer() {
                var color = "white";
                var currentMinutes = Math.floor(totalSecs / 60);
                var currentSeconds = totalSecs % 60;
                if( currentSeconds % 5) color = "red";
                if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
                if(currentMinutes <= 9) currentMinutes = "0" + currentMinutes;
                totalSecs++;
                $("#timer").text(currentMinutes + ":" + currentSeconds);
                $(".white").css("color", color);
                setTimeout('incTimer()', 1000);
            }

            totalSecs = 0;

            $(document).ready(function() {
                $("#start").click(function() {
                    incTimer();
                });
            });
        </script>
      </div>

        <p>
          @php
            //echo $left_or_right;
          @endphp
          @for ($i = 1; $i <= 12; $i++)
            @php
              $left_or_right = '';
              $offset = 30;
              if( $i <= 3 )
              {
                $offset += 10;
                if($i == 2)
                {
                  $offset += 10;
                }
                if($i == 3)
                {
                  $offset += 10;
                }
                //var_dump($offset);
                $left_or_right = 'right';
              }
              elseif( $i > 3 && $i <= 6 )
              {
                $offset -= 10;
                if($i == 5)
                {
                  $offset -= 10;
                }
                if($i == 6)
                {
                  $offset -= 10;
                }
                $left_or_right = 'left';
              }
              elseif( $i > 6 && $i <= 9 )
              {
                $offset += 10;
                $left_or_right = 'right';
              }
              elseif( $i > 9 && $i <= 12 )
              {
                $offset -= 10;
                $left_or_right = 'left';
              }
            @endphp
            @if( $i % 2 == 0 )
              
              <span class="white" style="width: 100px; color: red; padding-{{$left_or_right}}: {{$offset}}px;">#</span></br>
            
            @else
            
              <span style="width: 100px; color: yellow; padding-{{$left_or_right}}: {{$offset}}px;">@</span></br> 
            
            @endif
          @endfor


      </p>
    </div>

@endsection