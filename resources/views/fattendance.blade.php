@extends('teachers')
  @section('att1')
  <br><br>
    <h2 align="center">Attendance for first standard</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <form method="post">
            @csrf
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
      
      <td><a class="btn btn-primary" href="{{route('savepresent',$num->id)}}">Present</a></td>
      <td><a class="btn btn-primary" href="{{route('saveabsent',$num->id)}}">Absent</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</form>
        </div>

      </div>
@endsection