<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Events - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->

  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div>End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <!-- <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Introduction to webdesign</a></h5>
                <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Marketing Strategies</a></h5>
                <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
              </div>
            </div>

          </div>
        </div> -->

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   
  <div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

<div class="card mb-3">

<div class="card-body bg-secondary">

<div class="pt-4 pb-2">
<h5 class="card-title text-center pb-0 fs-4">Login</h5>
</div>

<form class="row g-3 needs-validation" method="POST" action="{{route('log')}}" novalidate>
@csrf
 <div class="col-12">
<label for="yourUsername" class="form-label text-white">Username</label>
<div class="input-group has-validation">
  <span class="input-group-text" id="inputGroupPrepend">@</span>
  <input type="text" name="username" class="form-control" id="yourusername" onkeyup="clearerror('username')">
  <br><div><span id="username" style="color:red"></span></div>
  <div class="invalid-feedback">Please enter your username.</div>
</div>
</div> 

<div class="col-12">
<label for="yourPassword" class="form-label text-white">Password</label>
<input type="password" name="password" class="form-control" id="yourpassword" onkeyup="clearerror('password')">
<span id="password" style="color:red"></span>
<div class="invalid-feedback">Please enter your password!</div>
</div> 


<div class="col-12">
<button class="btn btn-primary w-100" type="submit" name="login"  onclick="return validate()">Login</button></div>
<div class="col-12">

</div>
<p class="small mb-0 text-white">Don't have account?

    <a href="{{route('studentreg')}}">create an account</a></p>
 <!-- <div class="col-12">
<p class="small mb-0 text-white">Don't have account? <a href="pages-register.html">Create an account</a></p>
</div> -->
</form><br>
<button class="btn btn-primary w-100"  id="loginfb">Login with Google</button>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
        
  <!-- End Footer  -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 <script type="module">
   // Import the functions you need from the SDKs you need
   import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-analytics.js";
  import { getAuth,GoogleAuthProvider,signInWithRedirect,getRedirectResult,signInWithPopup } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyA8tYKRAReYbELmTKRQMM6OA8l2bHHuX4E",
    authDomain: "school-66c0e.firebaseapp.com",
    projectId: "school-66c0e",
    storageBucket: "school-66c0e.appspot.com",
    messagingSenderId: "611555513594",
    appId: "1:611555513594:web:114cb009e229ab93fe2543",
    measurementId: "G-JHQ7PH7WMW"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const provider = new GoogleAuthProvider();
  const auth = getAuth(app);
   loginfb.addEventListener('click',(e)=>{
     signInWithPopup(auth,provider).then(()=>{window.location.href='{{route('student')}}'});
  });
 </script>
 
 <script >
        function validate(){
            var usnme=document.getElementById("yourusername").value;
            var pswd=document.getElementById("yourpassword").value;
            if(usnme==""){
                document.getElementById("username").innerHTML="*enter your username";
                return false;
            }
        
        if (pswd.match(/[a-z]/g) && pswd.match(
                    /[A-Z]/g) && pswd.match(
                    /[0-9]/g) && pswd.length >= 8){
                        // return false;
                    }
                    else{
                        document.getElementById("password").innerHTML="*password must contain atleast 8 with uppercase,lowercase and numbers";
                        return false;

                        // alert('mismatch password');
                    }
    }
        function clearerror(e){
            document.getElementById(e).innerHTML="";
        }
    </script>
</body>
</html>