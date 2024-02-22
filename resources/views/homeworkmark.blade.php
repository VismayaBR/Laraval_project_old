
@extends('teachers')
 @section('hwmarks')
 <br><br>
    <h2 align="center">Add Homeworks marks</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <form action="{{route('addhwmarks')}}" method="post">
            @csrf
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">Student name</th>
      <th scope="col">Marks</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
 
  </tr>

@foreach($student as $num)
<tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$num->name}}</td>
      <td><input type="hidden" name="idd" value="{{$id}}"></td>
      <td><input type="hidden" name="id" value="{{$num->id}}"></td>
      <td><input type="text" name="mark"></td>
    <td><button class="btn btn-primary">Add Marks</button></td>
    </tr>
    @endforeach
  </tbody>
</table>   
</form>
        </div>
      </div>
    
@endsection  
  

 