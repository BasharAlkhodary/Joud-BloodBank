<!DOCTYPE html>
<html lang="en">

<head>
    <!--
     - Roxy: Bootstrap template by GettTemplates.com
     - https://gettemplates.co/roxy
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Joud Blood</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page">
		<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <h3 class="font-weight-bolder mb-0">JOUD BLOOD</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('donor.register.form') }}">Register</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>


</div>		<div class="jumbotron jumbotron-single d-flex align-items-center" >
  <div class="container text-center">
    <h1 class="display-2 mb-4">Contact technical support</h1>
  </div>
</div>		<!-- Contact Form Section -->
<section id="contact-form" class="bg-white">
    <div class="container">
        <div class="section-content">


<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 9999">
    <div id="toastSuccess" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                ✅ Thank you for your trust in us. We will review your message as soon as possible.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
        </div>

<!-- Section Title -->
<div class="title-wrap text-center" data-aos="fade-up">
    <h2 class="section-title" style="font-family: 'Cursive', sans-serif; color: #d32f2f; font-weight: bold;">
        Contact Us
    </h2>
    <p class="section-sub-title" style="color: #555; font-size: 16px; max-width: 600px; margin: 0 auto;">
        If you face any issue with a blood bank, the website, or have a complaint, feel free to contact us. We are here to help.
    </p>
</div>
<!-- End of Section Title -->

<div class="row justify-content-center ">
    <!-- Contact Form Holder -->
    <div class="col-12 col-md-8 contact-form-holder mt-4" data-aos="fade-up">
        <form method="POST" id="contactForm" class="p-4 shadow-sm rounded" style="background: #ffffff;">
            @csrf
            <div class="row">
                <div class="col-md-12 form-group mb-3">
                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Full Name" required value="{{ old('name') }}">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 form-group mb-3">
                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 form-group mb-3">
                    <input type="tel" class="form-control form-control-lg" id="phoneNumber" name="phoneNumber" placeholder="05XXXXXXXX" 
                    pattern="05[0-9]{8}" maxlength="10" minlength="10" required
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                    @error('phoneNumber') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12 form-group mb-3">
                    <textarea class="form-control form-control-lg" id="message" name="message" rows="6" placeholder="Your Message ..." required>{{ old('message') }}</textarea>
                    @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12 text-center">
                    <button class="btn btn-danger btn-lg shadow-sm hover-btn" type="submit" name="submit">
                        Send Message
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- End of Contact Form Holder -->
</div>

<!-- CSS مخصص للتحسينات -->
<style>
    /* الظلال والحواف المستديرة */
    .contact-form-holder {
        transition: all 0.3s ease-in-out;
    }

    /* تأثير Hover على الزر */
    .hover-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        transition: all 0.3s ease-in-out;
    }

    /* تحسين حجم الحقول على الهواتف */
    @media (max-width: 576px) {
        .form-control-lg {
            font-size: 14px;
            padding: 0.75rem 1rem;
        }
    }
</style>

<br>
        
        <div class="section-content pt-5 pb-5" style="background: #f8f9fa;">
    <div class="title-wrap text-center mb-5" data-aos="fade-up">
        <h2 class="section-title" style="font-family: 'Cursive', sans-serif; color: #d32f2f; font-weight: bold;">
            Contact & Working Hours
        </h2>
        <p style="color: #555; font-size: 16px;">Reach out to us anytime – we are here to save lives</p>
    </div>

    <div class="row text-center justify-content-center">
        <!-- Working Time -->
        <div class="col-12 col-sm-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box p-4 shadow-sm rounded hover-effect">
                <span class="lnr lnr-clock fs-40 py-3 d-block" style="color: #d32f2f;"></span>
                <h5 class="mt-3 mb-2" style="color: #333; font-weight: 600;">Working Hours</h5>
                <p class="text-muted mb-0">24 Hours / 7 Days</p>
            </div>
        </div>
            <!-- Call Us -->
        <div class="col-12 col-sm-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="400">
            <a href="https://wa.me/972569817304" target="_blank" class="text-decoration-none">
                <div class="info-box p-4 shadow-sm rounded hover-effect text-center">
                    <span class="lnr lnr-phone fs-40 py-3 d-block" style="color: #d32f2f;"></span>
                    <h5 class="mt-3 mb-2" style="color: #333; font-weight: 600;">Call Us</h5>
                    <p class="text-muted mb-0">+972 56-981-7304</p>
                </div>
            </a>
        </div>


                <!-- Email -->
        <div class="col-12 col-sm-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="600">
            <a href="mailto:basharalkhodary230@gmail.com" class="text-decoration-none">
                <div class="info-box p-4 shadow-sm rounded hover-effect text-center">
                    <span class="lnr lnr-envelope fs-40 py-3 d-block" style="color: #d32f2f;"></span>
                    <h5 class="mt-3 mb-2" style="color: #333; font-weight: 600;">Email</h5>
                    <p class="text-muted mb-0">basharalkhodary230@gmail.com</p>
                </div>
            </a>
        </div>



<!-- CSS مخصص للـ Hover والتأثير -->
<style>
    .info-box {
        transition: all 0.3s ease-in-out;
        background: #ffffff;
    }
    .info-box.hover-effect:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        cursor: pointer;
    }

    /* تحسين حجم الأيقونات على الأجهزة الصغيرة */
    @media (max-width: 576px) {
        .info-box span {
            font-size: 35px !important;
        }
    }
</style>

</section>
<!-- End of Contact Form Section -->		<!-- Features Section-->

<!-- End of Features Section-->		<footer class="mastfoot my-3">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		
         	</div>
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">&copy; 2025 JOUD BLOOD</p>
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
</footer>	</div>
	
</div>
	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>



	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById('contactForm');
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // منع تحديث الصفحة

            const formData = new FormData(form);

            fetch("{{ route('contact.submit') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: formData,
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('حدث خطأ أثناء الإرسال');
                }
                return response.json();
            })
            .then(data => {
                // إظهار Toast
                const toastEl = document.getElementById('toastSuccess');
                const toast = new bootstrap.Toast(toastEl);
                toast.show();

                // إعادة تعيين الفورم
                form.reset();
            })
            .catch(error => {
                alert(error.message);
            });
        });
    });
</script>

</body>
</html>
