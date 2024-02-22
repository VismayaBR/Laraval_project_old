
 
      
     @extends('teachers')        
  @section('view3std')        

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Third standard Students</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($student as $num)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h2>{{$num->name}}</h2>
                <h4>{{$num->date_of_birth}}</h4>
                <h4>{{$num->mobile}}</h4>
                <h4>{{$num->place}}</h4>
                <h4>{{$num->parent_name}}</h4>
                <h4>{{$num->standard}}</h4>
                <div>
                 <a class="btn btn-primary" href="">Add MArks</a>
                 <a class="btn btn-primary" href="">Add Attendence</a>
                </div>
              </div>
            </div>
          </div>
@endforeach
          

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

@endsection