@extends('template.master')
@section('css')
<link rel="stylesheet" href="{{asset('register/form.css')}}">
@endsection

@section('body')
<div class="d-flex justify-content-center align-items-center" style="height: 99vh;">
    <form class="form register-form">
       <div class="container">
            <!-- Account Section -->
            <section>
                <h6 class="text-green fw-bold pb-2">Account</h6>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text custom-input" id="basic-addon1"><i class="fa fa-user" style="color: grey"></i></span>
                        <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text custom-input" id="basic-addon1"><i class="fa fa-envelope" style="color: grey"></i></span>
                        <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text custom-input" id="basic-addon1"><i class="fa fa-key" style="color: grey"></i></span>
                        <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                </div>
            </section>

            <!-- Date of Birth and Gender Section -->
            <section>
                <div class="row">
                    <div class="col-6">
                        <h6 class="text-green fw-bold pb-2">Date of Birth</h6>
                        <div class="row">
                            <div class="col-4"><input type="text" placeholder="DD" class="form-control"></div>
                            <div class="col-4"><input type="text" placeholder="MM" class="form-control"></div>
                            <div class="col-4"><input type="text" placeholder="YYYY" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="text-green fw-bold pb-2">Gender</h6>
                        <div class="row">
                            <input hidden name="" />
                            <div class="col-6 btn btn-primary">Male</div>
                            <div class="col-6 btn btn-muted">Female</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Payment Details Section-->
            <section>
                <h6 class="text-green fw-bold pb-2">Payment Details</h6>
                
            </section>

            <!-- Term and Conditions Section-->
            <section >
                <h6 class="text-green fw-bold">Terms and Conditions</h6>
                <input type="checkbox"> I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy
            </section>

       </div>
    </form>
</div>
@endsection