@extends('welcome')
  @section('addsubject')
  <br><br>
    <h2 align="center">Add subjects</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('addsubject')}}" method="post" >
                @csrf
              <div class="row">
                <div class="col-md-6 form-group"  >
                <input type="text" name="subject" class="form-control"  placeholder="Subjects" >
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select name="teacher" id="teacher" class="form-control">
                @foreach($teacher as $num)
                      <option value="{{$num->id}}">{{$num->t_name}}</option>
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