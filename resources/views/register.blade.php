@extends('template.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/register/form.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
@endsection

@section('script')
<script src="{{asset('js/register/custom-select.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
@endsection

@section('body')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="register-form shadow-sm rounded ">
            <form method="POST" action="./register-user" id="form-register">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Account section -->
                <section class="row">
                    <h6 class="green-color fw-bold pb-2">Account</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text custom-input-icon" id="basic-addon1"><i class="fa fa-user"
                                    style="color:grey"></i></span>
                        </div>
                        <input type="text" name="full_name" class="form-control custom-input" placeholder="Username"
                            aria-label="Username" aria-describedby="basic-addon1" value="{{old('full_name')}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text custom-input-icon" id="basic-addon1"><i class="fa fa-envelope"
                                    style="color:grey"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control custom-input" placeholder="Email" aria-label="Email"
                            aria-describedby="basic-addon1" value="{{old('email')}}">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text custom-input-icon" id="basic-addon1"><i class="fa fa-key"
                                    style="color:grey"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control custom-input" placeholder="Password"
                            aria-label="Password" aria-describedby="basic-addon1">
                    </div>

                </section>
                <!-- Date of Birth and Gender section -->
                <section class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6 class="green-color fw-bold pb-2">Date of Birth</h6>
                        <div class="row">
                            <div class="col-4 custom-padding"><input class="form-control custom-input" type="text"
                                    placeholder="DD" value="{{old('dob_date')}}" name="dob_date" maxlength="2">
                            </div>
                            <div class="col-4 custom-padding"><input class="form-control custom-input" type="text"
                                    placeholder="MM" value="{{old('dob_month')}}" name="dob_month" maxlength="2">
                            </div>
                            <div class="col-4 custom-padding"><input class="form-control custom-input" type="text"
                                    placeholder="YYYY" value="{{old('dob_year')}}" name="dob_year" maxlength="4"></div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6 ">
                        <input type="text" name="gender" value="old('gender')" hidden>
                        <h6 class="green-color fw-bold pb-2">Gender</h6>
                        <div class="row">
                            <div class="col-6 btn custom-select gender selected" data-value="0" >Male</div>
                            <div class="col-6 btn custom-select gender" data-value="1">Female</div>
                        </div>
                        
                    </div>
                </section>
                <!-- Payment Details section -->
                <br>
                <section class="row">
                    <input type="text" name="payment_method" value="{{old('payment_method')}}" hidden>
                    <h6 class="green-color fw-bold pb-2">Payment Details</h6>
                    <div class="row mb-3">
                        <div class="col-6 btn custom-select payment selected "><i class="fa fa-cc-visa"></i> &nbsp; Credit Card</div>
                        <div class="col-6 btn custom-select payment "><i class="fa fa-cc-paypal"></i> &nbsp; Paypal</div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text custom-input-icon" id="basic-addon1"><i class="fa fa-credit-card"
                                    style="color:grey"></i></span>
                        </div>
                        <input type="text" name="card_number" class="form-control custom-input" placeholder="Card Number" value="{{old('card_number')}}"
                            aria-label="Card Number" aria-describedby="basic-addon1" maxlength="16" >
                    </div>

                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text custom-input-icon" id="basic-addon1"><i class="fa fa-user"
                                        style="color:grey"></i></span>
                            </div>
                            <input type="text" name="cvc" class="form-control custom-input" placeholder="Card CVC"
                                aria-label="Card CVC" aria-describedby="basic-addon1" value="{{old('cvc')}}" maxlength="3">
                        </div>
                    </div>
                    <div class="col-6">
                        <input type="text" hidden name="expired_date">
                        <div class="row">
                            <input type="text" class="col-6 rounded custom-input text-center" placeholder="1 Jan"  name="expired_month" style="border: 1px solid #ced4da;" autocomplete="false" value="{{old('expired_month')}}">
                            <input class="col-6 rounded custom-input text-center" placeholder="2015" name="expired_year" style="border: 1px solid #ced4da;" autocomplete="false" value="{{old('expired_year')}}">
                        </div>
                    </div>
                </section>
                <!-- Terms and Conditions section -->
                <section class="row">
                    <h6 class="green-color fw-bold pb-2">Terms and Conditions</h6>
                    <div class="input-group mb-3">
                        <label class="container-checkbox text-muted">I accept the terms and conditions for signing up to this service, and herey confirm I have read the privacy policy
                            <input type="checkbox" name="term_accepted" value="1">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </section>
                <!-- Submit button -->
                <section class="row">
                    <button class="btn form-control green-bg-color text-white" type="submit" id="btn-submit">REGISTER</button>
                </section>
            </form>
        </div>
    </div>
@endsection
