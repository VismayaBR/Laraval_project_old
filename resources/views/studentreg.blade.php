@extends('students')
@section('addstudent')
<br>
<h2 align="center">Student Registration</h2>
      <div class="container" data-aos="fade-up" >
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('studentadd')}}" method="post"  >
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of birth" required>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="place" class="form-control"  placeholder="Your Place" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="mobile"  placeholder="Your Mobile" required>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="std" class="form-control" id="std" placeholder="standard" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="pname" class="form-control" id="pname" placeholder="Parent name" required>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="uname" class="form-control" id="uname" placeholder="username" >
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="password" class="form-control" id="password" placeholder="Password" >
                </div>
              </div><br>
              <div class="text-center"><button class="btn btn-primary" type="submit" >Add</button></div>
            </form>

          </div>

        </div>

      </div>
@endsection



   