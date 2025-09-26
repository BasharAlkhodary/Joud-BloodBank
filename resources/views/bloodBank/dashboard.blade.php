@extends('layouts.app')

@section('title', 'الصفحة الرئيسية لبنك الدم ')

@section('content')
	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="indexbank.html">

            <h3 class="font-weight-bolder mb-0" style="font-family: cursive">JOUD BLOOD</h3>
                     
             
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#indexbank">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#donors-list">Donors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blood">Request</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link" href="#warehouse">Warehouse</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bloodBank.messages') }}">Complaints and suggestions</a>
                </li>              
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link d-flex align-items-center text-white">
                            <i class="bi bi-box-arrow-right mr-2"></i> Logout
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
        <p>
            <p>ID Bank :</p>
			<span class="fs-16 primary-color">95864SH</span>
		</p>
		<p>
            <p>Bank Name :</p>
			Al shefa
		</p>
        <p>
            <p>Address :</p>
			<span class="fs-16 primary-color">Al Remal</span>
		</p>
		<p>
            <p>Phone :</p>
			<span class="fs-16 primary-color">+970567269933</span>
		</p>
		<p>
            <p>Email :</p>
            mabudawaba@gmail.com</p>

        {{-- logout button --}}
        <form method="POST" action="{{ route('logout') }}" style="width: 100%;">
            @csrf
            <button type="submit" class="btn btn-danger w-100 text-center">تسجيل الخروج</button>
        </form>

</div>
</div><div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		{{-- <form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<span class="lnr lnr-magnifier"></span>
			    </button>
			  </div>
			</div>

		</form> --}}
	</div>
	
</div>	<div class="jumbotron d-flex align-items-center">
  <div class="container text-center my-5">
    <!-- اسم بنك الدم -->
    <h1 style="
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        font-size: 4rem;
        color: #ffffff; /* أحمر داكن وراقي */
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    ">
        {{ auth()->user()->first_name }}
    </h1>

    <!-- خط صغير أسفل العنوان لإضافة لمسة احترافية -->
    <div style="
        width: 100px;
        height: 4px;
        background-color: #b71c1c;
        margin: 0 auto 1rem auto;
        border-radius: 2px;
    "></div>

    <!-- وصف احترافي -->
    <p style="
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        font-size: 1.2rem;
        color: #ffffff;
        letter-spacing: 1px;
    ">
        Trusted Blood Services & Real-Time Stock Overview
    </p>
</div>

    <div class="rectangle-1"></div>
  <div class="rectangle-2"></div>
  <div class="rectangle-transparent-1"></div>
  <div class="rectangle-transparent-2"></div>
<div class="triangle triangle-1">
  	<img src="{{ asset('img/obj_triangle.png')}}" alt="">
  </div>
  <div class="triangle triangle-2">
  	<img src="{{ asset('img/obj_triangle.png')}}" alt="">
  </div>
  <div class="triangle triangle-3">
  	<img src="{{ asset('img/obj_triangle.png')}}" alt="">
  </div>
  <div class="triangle triangle-4">
  	<img src="{{ asset('img/obj_triangle.png')}}" alt="">
    </div>
    <div class="triangle triangle-5">
  	<img src="{{ asset('img/obj_triangle.png')}}" alt="">
  </div>
  <div class="triangle triangle-6">
  	<img src="{{ asset('img/obj_triangle.png')}}" alt="">
  </div>
</div>
<!-- Features Section-->
<div id="donors-list" class="container mt-5 p-5" 
     style="
        background: linear-gradient(180deg, #fffafa 0%, #ffe5e5 100%);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
     ">
    <h2 class="text-center mb-4" 
        style="
            font-family: 'Montserrat', sans-serif; 
            font-weight: 700; 
            font-size: 2.5rem; 
            color: #b71c1c;
            letter-spacing: 2px;
            border-bottom: 3px solid #b71c1c;
            display: inline-block;
            padding-bottom: 8px;
        ">
        Donors Information
    </h2>

        <div class="col-md-10">
            {{-- هنا نعرض partial كامل يحوي الجدول + روابط التصفح --}}
            @include('partials.donors_table', ['donors' => $donors])

            <div class="d-flex justify-content-center mt-3" id="pagination-links">
                {!! $donors->links() !!}
            </div>
        </div>
    </div>
</div>

<br><br>

<!-- End of Features Section-->	<section id="section-featurettes" class="featurettes overlay bg-fixed" >

    <div id="blood" class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center text-white">

                        <div class="col-md-4 offset-md-2 col-sm-6" data-aos="fade-right">
                            <h3 class="mb-4" id="blood" style="font-family: cursive">Blood Donation Request</h3>
                            <form action="{{ route('donation-requests.store') }}" method="POST">
                                @csrf
                                <label> Select the required blood type :</label>
                                <select name="blood_type" required>
                                    <option value="">اختر فصيلة الدم</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>

                                <button type="submit">إرسال إشعار</button>
                            </form>
                        </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                        

                    </div><!--/ .featurettes-item -->

                </div><!--/ .col-md-12 -->

            </div><!--/ .row -->
        </div>
    </div><!--/ .container -->

<!-- End of Portfolio Section -->	<!-- Client Section -->
{{-- <section id="client" class="overlay bg-fixed">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row ">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="title-wrap mb-5">
                        <h2 style="font-family: cursive">Joud Blood loves you</h2>
                    </div>
                    <!-- End of Section Title -->
                </div>
                <!-- Client Holder -->
                <div class="col-md-12 client-holder">
                    <div class="client-slider owl-carousel">
                        <div class="client-item">
                            <img class="img-responsive" src="{{asset ('img/photo-1.jpg')}}" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="{{asset ('img/logo.png')}}" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="{{asset ('img/photo-1.jpg')}}" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="{{asset ('img/logo.png')}}" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="{{asset ('img/photo-1.jpg')}}" alt=" ">
                        </div>
                        <div class="client-item">
                            <img class="img-responsive" src="{{asset ('img/logo.png')}}" alt=" ">
                        </div>
                    </div>
                    <!-- End of Client Holder -->
                </div>
            </div>
        </div>
</section> --}}

<!-- End of Client Section -->	<!-- Reservation Section -->
<!-- End of Features Section--></div>

<section id="warehouse" class="overlay bg-fixed py-5" style="background-image: url('{{ asset('img/bg.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <!-- Section Title -->
        <div class="title-wrap text-center mb-5" style="position: relative; z-index: 1;">
    <h2 class="fw-bold display-3" 
        style="font-family: 'Cursive', sans-serif; 
               background: linear-gradient(90deg, #ff4d4d, #ffcc00); 
               -webkit-background-clip: text; 
               -webkit-text-fill-color: transparent; 
               text-shadow: 3px 3px 10px rgba(0,0,0,0.0); 
               letter-spacing: 1px;">
        Blood Bank Warehouse
    </h2>
    <p class="text-light fs-4 fw-semibold" 
       style="text-shadow: 2px 2px 8px rgba(0,0,0,0.7); 
              letter-spacing: 0.5px;">
        Check Available Blood Types & Current Stock Levels
    </p>
</div>

        <!-- Blood Type Cards -->
        <div class="row g-4 justify-content-center">
            @php
                $bloodTypes = [
                    'A-' => ['count' => 135, 'color' => 'danger'],
                    'A+' => ['count' => 122, 'color' => 'danger'],
                    'B-' => ['count' => 158, 'color' => 'primary'],
                    'B+' => ['count' => 104, 'color' => 'primary'],
                    'AB-' => ['count' => 78, 'color' => 'info'],
                    'AB+' => ['count' => 125, 'color' => 'info'],
                    'O-' => ['count' => 36, 'color' => 'dark'],
                    'O+' => ['count' => 140, 'color' => 'dark'],
                ];
            @endphp

            @foreach($bloodTypes as $type => $data)
                <div class="col-sm-6 col-md-3">
                    <div class="card text-center shadow-sm border-0 rounded-4 p-4 blood-card" style="background: rgba(255, 255, 255, 0.9); transition: transform 0.3s, box-shadow 0.3s;">
                        <h3 class="fw-bold text-{{ $data['color'] }}">{{ $type }}</h3>
                        <p class="fs-4 text-dark mb-0">{{ $data['count'] }} Units</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .blood-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.25);
    }
</style>



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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('.blood-type-select').on('change', function () {
            let donorId = $(this).data('donor-id');
            let bloodType = $(this).val();
            let messageBox = $('.message-' + donorId);
            let row = $(this).closest('tr'); // نحصل على صف الجدول

            $.ajax({
                url: '/donors/update-blood-type/' + donorId,
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    blood_type: bloodType
                },
                success: function (response) {
                    if (response.success) {
                        messageBox.text(response.message);

                        // ✅ إزالة اللون الأصفر
                        row.removeClass('table-danger');

                        // ✅ إضافة اللون الأخضر المؤقت
                        row.addClass('table-success');
                        setTimeout(() => {
                            row.removeClass('table-success');
                        }, 1000); // يختفي بعد ثانية

                        // ✅ إخفاء الرسالة بعد 3 ثواني
                        setTimeout(() => messageBox.text(''), 3000);
                    }
                },
                error: function () {
                    messageBox.text('حدث خطأ أثناء التحديث').css('color', 'red');
                }
            });
        });
    });
</script>

<script>
function loadDonors(page = 1) {
    fetch(`/donors?page=${page}`)
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');

            // نجيب محتوى قائمة المتبرعين من الـ partial
            const newDonorsList = doc.querySelector('#donors-list');

            if (newDonorsList) {
                document.querySelector('#donors-list').innerHTML = newDonorsList.innerHTML;
            }

            // نعيد تفعيل روابط الـ pagination
            attachPaginationLinks();

            // نعمل scroll أوتوماتيك لنفس القسم
            document.querySelector('#donors-list').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        })
        .catch(error => console.error('Error loading donors:', error));
}

// إعادة ربط روابط الـ pagination كل مرة
function attachPaginationLinks() {
    document.querySelectorAll('#pagination-links a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const url = new URL(this.href);
            const page = url.searchParams.get('page');
            loadDonors(page);
        });
    });
}

// أول تحميل
document.addEventListener('DOMContentLoaded', function() {
    attachPaginationLinks();
});
</script>


<script>
    $(document).ready(function(){
        $('.client-slider').owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            margin: 30,
            responsive:{
                0:{ items:1 },
                600:{ items:2 },
                1000:{ items:3 }
            }
        });
    });
</script>

$('#side-nav').addClass('active');


@endsection
