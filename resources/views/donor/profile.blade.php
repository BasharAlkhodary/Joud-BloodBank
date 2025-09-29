
@extends('layouts.app')

@section('title', 'الملف الشخصي')

@section('content')

 <nav id="header-navbar" class="navbar navbar-expand-lg custom-navbar">
    <div class="container" >
        <a class="navbar-brand d-flex align-items-center text-white" href="indexjoud.html">

            <h3 class="font-weight-bolder mb-0">JOOD BLOOD</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('donor.home')}}">Home</a>
                </li>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

                {{-- <div class="ms-auto">
                    <img src="{{ asset('images/logo.png') }}" alt="صورة المستخدم" class="navbar-avatar dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" />
                </div>
                 --}}
            </ul>
        </div>
    </div>
    
</nav>


</div>
	<!-- Contact Form Section -->
  <div class="profile-card">
    <div class="text-center mb-4">
      <img src="{{ asset('img/logo.png')}}" alt="صورة المستخدم" class="profile-img mb-2">
      <h5 class="mb-0"> <small class="text-muted" style="font-family: cursive">{{ $donor->user->full_name }}</small></h5>
      <small class="text-muted" style="font-family: cursive">ID Number : {{ $donor->identity_number }}</small>
    </div>

    <form method="POST" action="{{ route('donor.profile.update') }}">
        @csrf
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label" style="font-family: cursive"><b>Address</b></label>
                <input type="text" name="address" class="form-control" value="{{ old('address', $donor->address) }}">
        </div>
        <div class="col-md-6">
          <label class="form-label" style="font-family: cursive"><b>Email</b></label>
          <input type="email" class="form-control" value="{{ $donor->user->email }}" readonly>
        </div>

        <div class="col-md-6">
          <label class="form-label" style="font-family: cursive"><b>Phone Number</b></label>
        <input type="tel" name="phone_number" pattern="05[0-9]{8}" maxlength="10" class="form-control" value="{{ old('phone_number', $donor->phone_number) }}">
        </div>

        <div class="col-md-6">
          <label class="form-label" style="font-family: cursive"><b>Birth Date</b></label>
          <input type="date" class="form-control"value="{{ $donor->birth_date }}" readonly>
        </div>

        <div class="col-md-6">
            <label class="form-label" style="font-family: cursive"><b>Gender</b></label>
            <input type="text" class="form-control" value="{{ $donor->gender }}" readonly>
        </div>

        <div class="col-md-6">
          <label class="form-label" style="font-family: cursive"><b> Blood Type</b></label>
          <input type="text" class="form-control text-danger fw-bold" value="{{ $donor->blood_type }}" readonly>
          <small class="text-danger" >Blood type cannot be changed - added by the blood bank *</small>
        </div>
      </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary w-100" style="font-family: cursive">Save Changes</button>
        </div>
            </form>
<hr>    
        {{-- logout button --}}
        <form method="POST" action="{{ route('logout') }}" style="width: 100%;">
    @csrf
    <button type="submit" class="btn btn-danger w-100 text-center" style="font-family: cursive">Logout</button>
</form>


  </div>
<!-- End of Features Section--></div>
<footer class="mastfoot my-3">
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
</footer>	<!-- External JS -->
	{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function enableEdit() {
      const inputs = document.querySelectorAll('input:not([value="O+"]), select:not([disabled])');
      inputs.forEach(input => {
        if (input.type !== 'text' || input.value !== 'O+') {
          input.removeAttribute('readonly');
          input.removeAttribute('disabled');
        }
      });
    }
  </script>
	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>
</body>
</html> --}}

@endsection