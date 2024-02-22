
@extends('welcome')
 @section('forthstd')
  <br><br>
    <h2 align="center">Time Table for fourth standard</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">
         
            <form action="{{route('frthstdsave')}}" method="post" >
                @csrf
                <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="day" class="form-control" id="name" placeholder="day" >
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fp" class="form-control" id="name" placeholder="1st period" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                 <select name="ft" id="ft" class="form-control">
                 @foreach($teacher as $num)
                      <option value="{{$num->id}}">{{$num->id}}-{{$num->t_name}}</option>
                  @endforeach    
                 </select>
                </div>
                
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="sp" class="form-control" id="name" placeholder="2nd period" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <select name="st" id="teacher" class="form-control">
                 @foreach($teacher as $num)
                      <option value="{{$num->id}}">{{$num->id}}-{{$num->t_name}}</option>
                  @endforeach    
                 </select>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="tp" class="form-control" id="name" placeholder="3rd period" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <select name="tt" id="teacher" class="form-control">
                 @foreach($teacher as $num)
                      <option value="{{$num->id}}">{{$num->id}}-{{$num->t_name}}</option>
                  @endforeach    
                 </select>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="fthp" class="form-control" id="name" placeholder="4th period" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <select name="ftht" id="teacher" class="form-control">
                 @foreach($teacher as $num)
                      <option value="{{$num->id}}">{{$num->id}}-{{$num->t_name}}</option>
                  @endforeach    
                 </select>
                </div>
              </div><br>
              <div class="text-center"><button class="btn btn-primary" type="submit" >SUBMIT</button></div>
            </form>

          </div>

        </div>

      </div>
@endsection  
  

 