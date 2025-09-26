@extends('layouts.app')

@section('title', 'إنشاء حساب متبرع')

@section('content')
{{-- <pre>{{ dd($banks) }}</pre> --}}

{{-- <link rel="stylesheet" href="{{ asset('css/login.css') }}"> --}}

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <form method="POST" action="{{ route('donor.register') }}">
        @csrf
<div class="login-background">
    <div class="auth-container">
        <div class="auth-header">
            <img src="{{ asset('images/logo.png') }}" alt="Joud Blood Logo" class="logo">
            <h2 style="font-family: cursive"><b>Create New Account</b></h2>

            {{-- <div id="formAlert" class="alert alert-success d-none mt-3" role="alert">
                تم التسجيل بنجاح!
            </div> --}}
        </div>
    
        <!-- الاسم الأول + اسم الأب -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi-person"></i></span>
                    <input type="text" class="form-control" id="firstName" name="first_name" required placeholder="First Name" value="{{ old('first_name') }}" autofocus>
                @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>  

            </div>
            <div class="col-md-6">
                <label for="father_name" class="form-label">Father Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi-person"></i></span>
                    <input type="text" class="form-control" id="father_name" name="father_name" required placeholder="Father Name" value="{{ old('father_name') }}">
                @error('father_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>  
            </div>
        </div>

        <!-- اسم الجد + اسم العائلة -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="grandfatherName" class="form-label">GrandFather Name</label>
                <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="grandfatherName" name="grandfather_name" required placeholder="GrandFather Name" value="{{ old('grandfather_name') }}">
                @error('grandfather_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                    </div>
            </div>
            <div class="col-md-6">
                <label for="familyName" class="form-label">Family Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-people"></i></span>
                    <input type="text" class="form-control" id="familyName" name="family_name" required placeholder="Family Name" value="{{ old('family_name') }}">
                @error('family_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>            
            </div>
        </div>

        <!-- الايميل-->
        <div class="col-md-12">
            <label for="email" class="form-label"> Email</label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-envelope-at"></i></span>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Email" value="{{ old('email') }}">
            @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
            
        <div class="row mb-3">
        <!-- رقم الهوية -->
        <div class="col-md-6">
            <label for="identityNumber" class="form-label">Identity Number</label>
            <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-credit-card-2-front"></i></span>
            <input type="number" class="form-control" id="identityNumber" name="identity_number" required placeholder="Identity Number" value="{{ old('identity_number') }}">
            @error('identity_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        </div>

        <!-- رقم الجوال -->
        <div class="col-md-6">
            <label for="phoneNumber" class="form-label">Mobile Number</label>
            <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-phone"></i></span>
            <input type="tel" class="form-control" id="phoneNumber" name="phone_number" required placeholder="Mobile Number" value="{{ old('phone_number') }}">
            @error('phone_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        </div>


                <!-- الجنس-->
        <label for="gender" class="form-label">Gender</label>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
            <select id="gender" name="gender" class="form-select" required >
                <option value="" disabled selected>{{ __('Select Gender') }}</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
            @error('gender')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        {{-- <!-- زمرة الدم -->
        <label for="bloodUnit" class="form-label">زمرة الدم</label>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-droplet-half"></i></span>
            <select class="form-select" id="bloodUnit" name="blood_unit" required>
                <option value="" disabled selected>اختر زمرة الدم</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div> --}}
        

    <!-- أقرب بنك دم -->
                {{-- @php
    dd($bloodBanks);
@endphp --}}

<div class="mb-3">
    <label for="bloodBank" class="form-label">Nearest Blood Bank</label>

    <select name="blood_bank_id" id="bloodBank" class="form-select">
        <option value="" disabled selected>-- Select Nearest Blood Bank --</option>
        @foreach($bloodBanks as $bank)
            <option value="{{ $bank->id }}">
                {{ $bank->first_name }} 
            </option>
        @endforeach
    </select>
    @error('blood_bank_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>


        <!-- العنوان -->
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi-house"></i></span>
            <input type="text" class="form-control" id="address" name="address" required placeholder="Address" value="{{ old('address') }}">
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div> 
        </div>

        <!-- تاريخ الميلاد -->
        <div class="mb-3">
            <label for="birth_date" class="form-label">Birth Date</label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi-calendar-event"></i></span>
                <input type="date" class="form-control" id="birth_date" name="birth_date" required value="{{ old('birth_date') }}">
                @error('birth_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- كلمة المرور -->
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
        </div>
    </div>

    <!-- تأكيد كلمة المرور -->
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="password_confirmation">
        </div>
    </div>


        <!-- زر الإرسال -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary" style="font-family: cursive">Submit</button>
        </div>

        <p style="font-family: cursive">Have a Account?<a href="{{ route('login') }}">Sign in</a></p>
    </div>
</div>
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/toast.js') }}"></script>
    </form>

@endsection
