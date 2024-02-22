
 
      
     @extends('welcome')        
  @section('viewteachers')        

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Our Teachers</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($teacher as $num)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{asset('storage/image/'.$num->image)}}" class="img-fluid" alt="">
              <div class="member-content">
                <h2>{{$num->t_name}}</h2>
                <h4>{{$num->qualification}}</h4>
                <h4>{{$num->t_mobile}}</h4>
                <h4>{{$num->email}}</h4>
                <h4>{{$num->t_place}}</h4>
                 
                
                <div>
                 <a class="btn btn-primary" href="{{route('deleteteachers',encrypt($num->id))}}">DELETE</a>
                 @if(($num->block)=='0')
                 <a class="btn btn-primary" href="{{route('blocktchr',encrypt($num->id))}}">BLOCK</a>
                 @elseif(($num->block)=='1')
                 <a class="btn btn-primary" href="{{route('unblocktchr',encrypt($num->id))}}">UNBLOCK</a>
                 @else
                 <a class="btn btn-primary" href="">BLOCK</a>
                 @endif
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