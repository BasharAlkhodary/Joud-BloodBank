
@extends('layouts.app')

@section('title', 'Joud Blood | الصفحة الرئيسية')

@section('content')
    
    <nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="#indexjoud">

            <h3 class="font-weight-bolder mb-0" style="font-family: cursive">JOOD BLOOD</h3>
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#indexjoud">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#history">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#donation">Donation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Request">Request</a>
                </li>
                <div class="ms-auto">
                <!-- صورة بروفايل تنقلك إلى صفحة البروفايل -->
                <a href="{{ route('donor.profile.edit') }}">
                    <img src="{{ asset('img/photo-1.jpg') }}" alt="User Avatar" class="navbar-avatar" />
                </a>
                </div>
                </div>

                
            </ul>
        </div>
    </div>
    
</nav>
	<div class="jumbotron d-flex align-items-center">
  <div class="container text-center">
    <h1 class="display-1 mb-4" style="font-family: cursive">Welcome<br> {{ auth()->user()->first_name }}</h1>
  </div>
  <div class="rectangle-1"></div>
  <div class="rectangle-2"></div>
  <div class="rectangle-transparent-1"></div>
  <div class="rectangle-transparent-2"></div>

  <div class="triangle triangle-1">
  	<img src="{{ asset ('img/obj_triangle.png') }}" alt="">
  </div>
  <div class="triangle triangle-2">
  	<img src="{{ asset ('img/obj_triangle.png') }}" alt="">
  </div>
  <div class="triangle triangle-3">
  	<img src="{{ asset ('img/obj_triangle.png') }}" alt="">
  </div>
  <div class="triangle triangle-4">
  	<img src="{{ asset ('img/obj_triangle.png') }}" alt="">
  </div>
</div>	<!-- Features Section-->
<section  id="history" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class="section-title" style="font-family: cursive">
                    Blood Donation Date
                </h2>
                <p class="section-sub-title">It is preferable to get 7-9 hours of sleep the night before donation.</p>
                <table class="table table-bordered text-center transparent-table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Bank Name</th>
                        <th>Date Donation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Al shefa</td>
                        <td>15/12/2024</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
            <!-- End of Section Title -->
            
        </div>
    </div>
</section>
<!-- End of Features Section-->	<section id="donation" class="featurettes overlay bg-fixed" style="background-image: url('{{ asset('img/bg.jpg') }}');">

    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center text-white">

                        <div class="col-md-4 offset-md-2 col-sm-6" data-aos="fade-right">
                            <h4 class="mb-4" >You can donate after the date<br><br> 15/1/2025</h4>
                        </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                        <div class="col-md-4 offset-md-right-2 col-sm-6" data-aos="flip-right">
                            <img class="my-5" src="{{ asset('img/photo-9.jpg')}}" alt="">
                        </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                    </div><!--/ .featurettes-item -->

                </div><!--/ .col-md-12 -->

            </div><!--/ .row -->
        </div>
    </div><!--/ .container -->

</section>	
<!-- Testimonial Section-->
<section id="testimonial" class="section-padding bg-fixed bg-white overlay" >
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="heading-section text-center">
                <h2 style="font-family: cursive">
                    Tips For Donating Blood
                </h2>
            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class=" testi-carousel owl-carousel">
                    <div class="testi-item text-center">
                        <i class="fa fa-heart text-danger fa-3x"></i>
                        <h4 class="testi-text"><b>Get Enough Sleep</b> <br> <br> Ensure you get enough rest and sleep the night before your donation, as this helps avoid feeling dizzy or fatigued during and after donation.</h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            
                        </div>
                        
                    </div>
                    <div class="testi-item text-center">
                        <i class="fa fa-heart text-danger fa-3x"></i>
                        <h4 class="testi-text"><b>Eat A Healthy Meal Before Donating</b> <br> <br> Eat a light, balanced meal before donating, focusing on iron-rich foods and avoiding fatty foods. </h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            
                        </div>
                    </div>
                        <div class="testi-item text-center">
                        <i class="fa fa-heart text-danger fa-3x"></i>
                        <h4 class="testi-text"><b> Plenty Of Fluids</b> <br> <br> Stay hydrated by drinking plenty of water before and after donating. </h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            
                        </div>
                    </div>
                    <div class="testi-item text-center">
                        <i class="fa fa-heart text-danger fa-3x"></i>
                        <h4 class="testi-text"><b>Consult A Doctor If You Experience Any Discomfort</b><br> <br> If you experience any dizziness or weakness after donating, consult a doctor or follow the instructions provided to you at the donation center. </h4>
                        <div class="testi-meta-inner d-flex justify-content-center align-items-center">
                            
                        </div>
                    </div>
                </div>
                <!-- End of Testimonial -->
            </div>
        </div>
    </div>

</section>
<!-- End of Testimonial Section-->	<!-- Portfolio Section -->
<section  id="Request" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class="section-title" style="font-family: cursive">
                    Blood Bank Donation Requests 
                </h2>
                <br>
                <table class="table table-bordered text-center transparent-table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Bank Name</th>
                        <th>Address</th>
                        <th>Blood Type</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>مستشفى الشفاء</td>
                        <td>الرمال الجنوبي</td>
                        <td>AB+</td>
                        </tr>

                        <tr>
                        <td>2</td>
                        <td>مستشفى الحلو الدولي</td>
                        <td>غرب مخبز اليازجي</td>
                        <td>O-</td>
                        </tr>

                    </tbody>
                    </table>
            </div>
            <!-- End of Section Title -->
            
        </div>
    </div>
</section>
<!-- End of Portfolio Section -->	<!-- Client Section -->

<!-- End of Client Section -->	<!-- Reservation Section -->
{{-- <section id="contact" class="bg-white section-content" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-1 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <h2 class="mb-4" >
                            Contact Us
                        </h2>
                    </div>
                    <form method="POST" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="{{ old('name') }}">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror      
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="05XXXXXXXX" 
                                    pattern="05[0-9]{8}" maxlength="10" minlength="10"required
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                    @error('phoneNumber') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..." required>{{ old('message') }}</textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1" data-aos="fade-left">
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>
                            <i class="fa fa-heart text-danger fa-3x"></i>

            </div>
        </div>
        
    </div>
</section> --}}
<!-- End of Reservation Section -->	<!-- Features Section-->

<!-- End of Features Section--></div>
 <section id="client" class="overlay bg-fixed" >
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row ">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="title-wrap mb-5">
                        <h2>You are the<b style="font-family: 'Cairo'"> hero </b> who saved someone else's life.</h2>
                    </div>
                    <!-- End of Section Title -->
                </div>
                <!-- Client Holder -->
                {{-- <div class="col-md-12 client-holder">
                    <div class="client-slider owl-carousel">
                        <div class="client-item">
                        <i class="fa fa-heart text-warning fa-3x"></i>
                        </div>
                        <div class="client-item">
                        <i class="fa fa-heart text-success fa-3x"></i>
                        </div>
                        <div class="client-item">
                        <i class="fa fa-heart text-primary fa-3x"></i>
                        </div>
                        <div class="client-item">
                        <i class="fa fa-heart text-warning fa-3x"></i>
                        </div>
                        <div class="client-item">
                        <i class="fa fa-heart text-success fa-3x"></i>
                        </div>
                        <div class="client-item">
                        <i class="fa fa-heart text-primary fa-3x"></i>
                        </div>
                    </div>
                    <!-- End of Client Holder -->
                </div> --}}
            </div>
        </div>
</section>
<footer class="mastfoot my-3">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		
         	</div>
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">&copy; 2025 JOUD BLOOD </a>.</p>
         	</div>
           
            <div class="col-lg-4 col-md-12">
            	<nav class="nav nav-mastfoot justify-content-center">
	                <a class="nav-link" href="#">
	                	<i class="fab fa-facebook-f"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-twitter"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-instagram"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-linkedin"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-youtube"></i>
	                </a>
	            </nav>
            </div>
            
        </div>
    </div>
</footer>

<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection

