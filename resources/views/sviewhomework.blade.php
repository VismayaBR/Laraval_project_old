
 
 @extends('students')
 @section('vhomework')

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <h2 align="center">View Homeworks</h2>
        <br><br>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($hwork as $num)
          <div class="col-lg-3 col-md-4">
              <h3><u>{{$num->subject}}</u></h3><br>
              <h5>TOPIC:<br>{{$num->topic}}</h5><br>
              <h5>LAST DATE:<br>{{$num->sub_date}}</h5>
          </div><br><br>
          @endforeach
        </div>
      </div>
    </section><!-- End Features Section -->
@endsection
   

   

   

  
 

