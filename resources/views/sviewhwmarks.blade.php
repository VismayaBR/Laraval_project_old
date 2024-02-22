@extends('students')
  @section('hwmarks')
  <br><br>
    <h2 align="center">My Homework marks</h2>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          
            @csrf
          <table class="table">
  <thead>
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Date</th>
      <th scope="col">Subject</th>
      <th scope="col">Marks</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $num)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$num->created_at}}</td>
      <td>{{$num->hw_id}}</td>
      <td>{{$num->marks}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

        </div>

      </div>
@endsection