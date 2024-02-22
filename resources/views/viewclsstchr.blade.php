
 
      
     @extends('welcome')        
  @section('viewclsstchr')        

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Class Teachers</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($class as $num)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h2>{{$num->standard}}</h2>
                <h4>{{$num->teacher}}</h4>
                <div>
                 <a class="btn btn-primary" href="{{route('editclsstchr',encrypt($num->id))}}">Edit</a>
                 <a class="btn btn-primary" href="{{route('deleteclsstchr',encrypt($num->id))}}">Delete</a>
                 
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