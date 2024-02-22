
@extends('teachers')
 @section('addmarks')
  <br><br>
    <h2 align="center">Add Marks & Upload Marklist</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">
         
          <form action="{{route('addmark')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <!-- <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="std" class="form-control" id="name" placeholder="standard" >
                </div>
              </div><br> -->
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="hidden" value="{{$id}}" name="id">
                  <input type="text" name="s1" class="form-control" id="name" placeholder="Subject" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <div class="col-md-12 form-group">
                  <input type="text" name="m1" class="form-control" id="name" placeholder="Marks" required>
                </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="s2" class="form-control" id="name" placeholder="Subject" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <div class="col-md-12 form-group">
                  <input type="text" name="m2" class="form-control" id="name" placeholder="Marks" required>
                </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="s3" class="form-control" id="name" placeholder="Subject" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <div class="col-md-12 form-group">
                  <input type="text" name="m3" class="form-control" id="name" placeholder="Marks" required>
                </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="s4" class="form-control" id="name" placeholder="Subject" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <div class="col-md-12 form-group">
                  <input type="text" name="m4" class="form-control" id="name" placeholder="Marks" required>
                </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" name="marklist" class="form-control" id="name" placeholder="marklist" required>
                </div>
            </div><br>
              <div class="text-center"><button class="btn btn-primary" type="submit" >SUBMIT</button></div>
            </form>

          </div>

        </div>

      </div>
@endsection  
  

 