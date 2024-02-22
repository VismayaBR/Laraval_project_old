
@extends('welcome')
 @section('edittt')
  <br><br>
    <h2 align="center">Time Table for first standard</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">
         
            <form action="{{route('tteditsave')}}" method="post" >
                @csrf
              <div class="row">
              <input type="hidden" name="id" class="form-control"  value="{{$timetable->id}}" >
                <div class="col-md-6 form-group">
                  <input type="text" name="std" class="form-control" id="name" value="{{$timetable->standard}}" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="day" class="form-control" id="name" value="{{$timetable->day}}" required>
                </div>
                </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fp" class="form-control" id="name" value="{{$timetable->fp}}" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                 <select name="ft" id="ft" class="form-control">
                 
                      <option value="{{$timetable->t1}}">{{$timetable->t1}}</option>   
                  
                 </select>
                </div>
                
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="sp" class="form-control" id="name" value="{{$timetable->sp}}" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <select name="st" id="teacher" class="form-control">
                      <option value="{{$timetable->t2}}">{{$timetable->t2}}</option>    
                 </select>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="tp" class="form-control" id="name" value="{{$timetable->tp}}" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <select name="tt" id="teacher" class="form-control">
                      <option value="{{$timetable->t3}}">{{$timetable->t3}}</option>   
                 </select>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fthp" class="form-control" id="name" value="{{$timetable->fthp}}" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <select name="ftht" id="teacher" class="form-control">
                
                      <option value="{{$timetable->t4}}">{{$timetable->t4}}</option>
                   
                 </select>
                </div>
              </div><br>
              <div class="text-center"><button class="btn btn-primary" type="submit" >SUBMIT</button></div>
            </form>

          </div>

        </div>

      </div>
@endsection  
  

 