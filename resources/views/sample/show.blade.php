@extends('common.main')
@section('title', 'student form')
@section('content')
<div class="container min-vh-100 d-flex justify-content-center align-items-center flex-grow-1 py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7 col-md-10 col-10 py-lg-5 px-lg-4 py-5 px-4 rounded-3 form-shadow needs-validation form-animation">
            <h1 class="mb-5">Your data</h1>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <label class="form-label" for="lname">Last Name</label>
                    <input class="form-control input-shadow" type="text" name="lname" id="lname" value="{{ $lname }}" disabled readonly />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <label class="form-label" for="fname">First Name</label>
                    <input class="form-control input-shadow" type="text" name="fname" id="fname" value="{{ $fname }}" disabled readonly />
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <label class="form-label" for="mname">Middle Name</label>
                    <input class="form-control input-shadow" type="text" name="mname" id="mname" value="{{ $mname }}" disabled readonly />
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label class="form-label" for="mail">Email Address</label>
                    <input class="form-control input-shadow" type="email" name="mail" id="mail" value="{{ $mail }}" disabled readonly />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label class="form-label" for="bday">Birthday</label>
                    <input class="form-control input-shadow" type="date" name="bday" id="bday" style="color: rgb(33, 37, 41)" value="{{ $bday }}" disabled readonly />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label class="form-label" for="age">Age</label>
                    <input class="form-control input-shadow" type="number" name="age" id="age" value="{{ $age }}" disabled readonly />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection