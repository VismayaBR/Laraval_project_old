
@extends('teachers')
@section('viewnotifi')
 
 <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Notifications</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($notifi as $num)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('storage/image/'.$num->image)}}" class="img-fluid" alt="">
              <div class="member-content">
              <h4><u>{{$num->title}}</u></h4>
                    <h6>TIME:{{$num->created_at}}</h6>
                    <p>SUBJECT:{{$num->content}}</p>
              </div>
            </div>
          </div>
@endforeach
          

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

@endsection        
              
                