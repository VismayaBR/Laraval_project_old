@extends('welcome')
  @section('vtt4')
  <br><br>
    <h2 align="center">View timetable for fourth standard</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Days</th>
      <th></th>
      <th scope="col">1</th>
      <th scope="col">2</th>
      <th scope="col">3</th>
      <th scope="col">4</th>
    </tr>
  </thead>
  <tbody>
    @foreach($timetable as $num)
    <tr>
      <td rowspan="2">{{$num->day}}</td> 
      <th>Subjects</th>
      <td>{{$num->fp}}</td>
      <td>{{$num->sp}}</td>
      <td>{{$num->tp}}</td>
      <td>{{$num->fthp}}</td>
      <td> <a class="btn btn-primary" href="{{route('edittimetable',($num->id))}}">Edit</a></td>
      <td>  <a class="btn btn-primary" href="{{route('deletett',($num->id))}}">Delete</a> </td>
    </tr>
    <tr>
      <th scope="row">Teachers</th>
      <td>{{$num->t_name}}-{{$num->t1}}</td>
      <td>{{$num->t_name}}-{{$num->t2}}</td>
      <td>{{$num->t_name}}-{{$num->t3}}</td>
      <td>{{$num->t_name}}-{{$num->t4}}</td>
    </tr>
    
    @endforeach
  </tbody>
</table>   
        </div>

      </div>
@endsection