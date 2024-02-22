
@extends('welcome')
 @section('addnotifi')
  <br><br>
    <h2 align="center">Add Notifications</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">
         
            <form action="{{route('savenotifi')}}" method="post" >
                @csrf
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="title" class="form-control" id="name" placeholder="Title" required>
                </div><br><br>
                <div class="row">
                <div class="col-md-12 form-group">
                  <textarea name="content" id="" cols="85" rows="5">content</textarea>
                </div><br><br>
                
              </div><br>
              <div class="text-center"><button class="btn btn-primary" type="submit" >SUBMIT</button></div>
            </form>

          </div>

        </div>

      </div>
@endsection  
  

 