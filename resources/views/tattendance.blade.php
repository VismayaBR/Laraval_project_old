@extends('teachers')
  @section('att3')
  <br><br>
    <h2 align="center">Attendance for third standard</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <form action="{{('tsaveatt')}}" method="post">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Attendance</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $num)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$num->name}}</td>
      <td><a class="btn btn-primary" href="{{route('tsavepresent',$num->id)}}">Present</a></td>
      <td><a class="btn btn-primary" href="{{route('tsaveabsent',$num->id)}}">Absent</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
<div><button class="btn btn-primary " >Submit</button></div>  
</form>
        </div>

      </div>
@endsection