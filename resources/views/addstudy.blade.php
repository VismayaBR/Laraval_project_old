
@extends('teachers')
 @section('addstudy')
  <br><br>
    <h2 align="center">Add Studymaterials</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">
         
            <form action="{{route('savestudy')}}" method="post" enctype="multipart/form-data" >
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="subject" class="form-control" id="name" placeholder="Subject" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <div class="col-md-12 form-group">
                  <input type="text" name="std" class="form-control" id="name" placeholder="standard" required>
                </div>
                </div>
              </div><br>
               <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" name="image" class="form-control" id="name" >
                </div>
                </div>
              <br>
              <div class="text-center"><button class="btn btn-primary">SUBMIT</button></div>
            </form>

          </div>

        </div>

      </div>
@endsection  
  

 