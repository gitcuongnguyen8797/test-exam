@extends('template.master')
@section('css')
<link rel="stylesheet" href="{{asset('register/form.css')}}">
@endsection

@section('body')
<div class="d-flex justify-content-center align-items-center">
    <form class="form register-form">
       <div class="container p-4">
            <!-- Account Section -->
            <section>
                <h6 class="pb-2">Account</h6>
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
                        <h6>Date of Birth</h6>
                        <div class="row">
                            <input type="number" class="col-4" placeholder="DD" aria-label="DD" aria-describedby="basic-addon1" min="1" max="31" >
                            <input type="number" class="col-4" placeholder="MM" aria-label="MM" aria-describedby="basic-addon1" min="1" max="12">
                            <input type="number" class="col-4" placeholder="YYYY" aria-label="YYYY" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-6">
                        <h6>Gender</h6>
                        <select name="" id="">
                            <option value="1"></option>
                            <option value="1"></option>
                        </select>
                    </div>
                </div>
            </section>

            <!-- Payment Details Section-->
            <section>

            </section>

            <!-- Term and Conditions Section-->
            <section>

            </section>

       </div>
    </form>
</div>
@endsection