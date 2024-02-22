
@extends('teachers')
 @section('addhomework')
  <br><br>
    <h2 align="center">Add homeworks</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">
         
            <form action="{{route('savehomework')}}" method="post" >
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
                <div class="col-md-6 form-group">
                 <textarea name="topic" id="" cols="93" rows="5">
                  Topic
                 </textarea>
                </div>
              </div><br>
               <div class="row">
                <div class="col-md-12 form-group">
                  <input type="date" name="subdate" class="form-control" id="name" placeholder="Submission date">
                </div>
                </div>
              <br>
              <div class="text-center"><button class="btn btn-primary" type="submit" >SUBMIT</button></div>
            </form>

          </div>

        </div>

      </div>
@endsection  
  

 