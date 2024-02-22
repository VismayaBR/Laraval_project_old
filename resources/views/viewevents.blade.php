
 
 @extends('students')
 @section('viewevent')
 
 <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Events</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($event as $num)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('storage/image/'.$num->image)}}" class="img-fluid" alt="">
              <div class="member-content">
              <h3><u>{{$num->title}}</u></h3><br>
              <h5>SUBJECT:{{$num->event}}</h5><br>
              </div>
            </div>
          </div>
@endforeach
          

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

@endsection        
              
                
   

   

  
 

