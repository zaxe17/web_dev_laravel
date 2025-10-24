@extends('common.main')
@section('title', 'student form')
@section('content')
<div class="container min-vh-100 d-flex justify-content-center align-items-center flex-grow-1 py-5">
    <div class="row d-flex justify-content-center">
        <form action="{{ route('sample.submit') }}" method="POST" class="col-lg-7 col-md-10 col-10 py-lg-5 px-lg-4 py-5 px-4 rounded-3 form-shadow needs-validation form-animation" novalidate>
            @csrf
            <h1 class="mb-5">Student Registration</h1>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <label class="form-label" for="lname">Last Name</label>
                    <input class="form-control input-shadow" type="text" name="lname" id="lname" placeholder="Last Name" required />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please enter your last name.</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <label class="form-label" for="fname">First Name</label>
                    <input class="form-control input-shadow" type="text" name="fname" id="fname" placeholder="First Name" required />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please enter your first name.</div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <label class="form-label" for="mname">Middle Name</label>
                    <input class="form-control input-shadow" type="text" name="mname" id="mname" placeholder="Middle Name" />
                    <div class="valid-feedback">(Optional)</div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label class="form-label" for="mail">Email Address</label>
                    <input class="form-control input-shadow" type="email" name="mail" id="mail" placeholder="example@gmail.com" required />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label class="form-label" for="bday">Birthday</label>
                    <input class="form-control input-shadow" type="date" name="bday" id="bday" style="color: rgb(33, 37, 41)" required />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please select your birthday.</div>
                </div>
            </div>

            <button class="col-lg-3 btn btn-primary px-4 mt-4 button-shadow d-flex align-items-center justify-content-center" type="submit">
                <span class="icons me-2" style="--svg: url('https://api.iconify.design/lucide/save.svg')"></span>
                Save
            </button>
        </form>
    </div>
</div>
@endsection