@extends('teachers')
  @section('vhw4')
  <br><br>
    <h2 align="center">View fourth standard Homeworks Details</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">subject</th>
      <th scope="col">topic</th>
    </tr>
  </thead>
  <tbody>
@foreach($student as $num)
<tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$num->subject}}</td>
      <td>{{$num->topic}}</td>
    <td> <a class="btn btn-primary" href="{{route('fhwmarks',$num->id)}}">Marks</a></td>
    </tr>
    @endforeach
  </tbody>
</table>   
        </div>
      </div>
@endsection