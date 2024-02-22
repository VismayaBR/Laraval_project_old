
 
 @extends('students')
 @section('viewstudy2')

    <!-- ======= Features Section ======= -->
    <br><br>
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <h2 align="center">View studymaterials</h2>
        <br><br>
        @foreach($study as $num)
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
       
          <div class="col-lg-3 col-md-4" >
              <h3><u>{{$num->subject}}</u></h3><br>
              <img src="{{asset('storage/image/'.$num->file)}}" class="img-fluid" alt="">
              
          </div><br><br>
          @endforeach
        </div>
      </div>
    </section><!-- End Features Section -->
@endsection
   

   

   

  
 

