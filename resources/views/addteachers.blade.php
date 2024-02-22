
 @extends('welcome')
  @section('addteacher')
  <br><br>
    <h2 align="center">Add Teachers</h2>
      <div class="container" data-aos="fade-up" >
        <div class="row mt-5">
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('add')}}" method="post" enctype="multipart/form-data" >
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" name="image" class="form-control" id="image" placeholder="image" required>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="place" class="form-control"  placeholder="Your Place" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="mobile"  placeholder="Your Mobile" id="mobile" onkeyup="clearerror('urmobile')">
                  <br><div><span id="urmobile" style="color:red"></span></div>
                </div>
              </div>
              <div class="form-group mt-3">
                  <input type="text" class="form-control" name="qualification"  placeholder="Your qualifications" required>
                </div><br>
                <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="uname" class="form-control" id="uname" placeholder="username" >
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="password" class="form-control" id="password" placeholder="Password" >
                </div>
              </div><br>
              <div class="text-center"><button class="btn btn-primary" type="submit" onclick="return validate()" >Add</button></div>
            </form>

          </div>

        </div>

      </div>

      <script >
        function validate(){
            var mble=document.getElementById("mobile").value;
            // var pswd=document.getElementById("password").value;
            if(mble.match(/^\d{10}$/)){
                document.getElementById("urmobile").innerHTML="*mobile number should be 10";
                return false;
            }
            
        // if (pswd.match(/[a-z]/g) && pswd.match(
        //             /[A-Z]/g) && pswd.match(
        //             /[0-9]/g) && pswd.length >= 8){
        //                 // return false;
        //             }
        //             else{
        //                 document.getElementById("password").innerHTML="*password must contain atleast 8 with uppercase,lowercase and numbers";
        //                 return false;

        //                 // alert('mismatch password');
        //             }
    }
        function clearerror(e){
            document.getElementById(e).innerHTML="";
        }
    </script>
@endsection
  
  

 