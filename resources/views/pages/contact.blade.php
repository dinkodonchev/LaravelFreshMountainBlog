@extends('main')

@section('title', '| Contact changed')

@section('content')
      <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
              <h1>Contact us</h1>
                <hr>
                <form>
                    <div class="form-group">
                      <label name="email" >Email:</label>
                      <input id="email" name="email" class="form-control">
                    </div>

                     <div class="form-group">
                      <label name="subject" >Subject:</label>
                      <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                      <label name="message" >Message:</label>
                      <textarea id="message" name="message" class="form-control">Type your message...</textarea>
                    </div>

                    <input type="submit" value="Send message" class="btn btn-success">
                </form>
                
              
            </div>
        </div>
      </div>
    

@endsection
    