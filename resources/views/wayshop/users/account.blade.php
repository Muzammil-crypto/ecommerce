@extends('wayshop.layouts.master')
@section('content')

<!-- Start My Account  -->
<div class="my-account-box-main">
    <div class="container">
        <div class="my-account-page">
            <div class="row">

                <div class="col-lg-6 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"><i class="fa fa-lock"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Login &amp; security</h4>
                                <p>Edit login, name, and mobile number</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fa fa-location-arrow"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Your Addresses</h4>
                                <p>Edit addresses for orders and gifts</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bottom-box">
                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End My Account -->

@endsection