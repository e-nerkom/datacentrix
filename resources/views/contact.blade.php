@extends('layout/template')
@section('content')

<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-3">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">About</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->
    
    <!-- Contact Section Start -->
    <div id="rs-contact" class="rs-contact style1 inner">
        
        <div class="gray-bg pt-100 pb-100 md-pt-80 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 form-part white-bg">
                        <div class="sec-title mb-45">
                            <!-- <div class="sub-title primary">HUBUNGI KAMI</div> -->
                            <h2 class="title mb-0">Hubungi Kami</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" class="contact-form" method="post" action="mailer.php">
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <input type="text" name="name" placeholder="Nama" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <input type="text" name="website" placeholder="Your Website" required="">
                                    </div>
                                </div> -->
                                <div class="col-md-12 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-btn form-group mb-0">
                                        <button type="submit" class="readon">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 pl-0 md-pr-0 md-order-first">
                        <div class="contact-info">
                            <h3 class="title">Kantor Pusat</h3>
                            <div class="info-wrap mb-20">
                                <div class="icon-part">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="content-part">
                                    <h4>Main Office</h4>
                                    127 Double Street, Dublin, United Kingdom.
                                </div>
                            </div>
                            <div class="info-wrap mb-20">
                                <div class="icon-part">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="content-part">
                                    <h4>Telepon</h4>
                                    <p>P: <a href="tel:+1235558888">(+123) 555 8888</a></p>
                                    <p>P: <a href="tel:+1235558899">(+123) 555 8899</a></p>
                                </div>
                            </div>
                            <div class="info-wrap mb-20">
                                <div class="icon-part">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="content-part">
                                    <h4>Email</h4>
                                    <p>E: <a href="mailto:support@rstheme.com">support@rstheme.com</a></p>
                                    <p>E: <a href="mailto:info@codesless.com">info@codesless.com</a></p>
                                </div>
                            </div>
                            <!-- <div class="info-wrap">
                                <div class="icon-part">
                                    <i class="flaticon-clock"></i>
                                </div>
                                <div class="content-part">
                                    <h4>Opening Hours</h4>
                                    <p>Mon-Fri: 10:00-18:00</p>
                                    <p>Sat-Sun: 10:00-14:00</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
</div> 
<!-- Main content End -->
    
@endsection