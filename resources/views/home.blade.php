@extends('layout/template')
@section('content')

<style>
    ul.list-slider li:before {
        content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
        color: #ffffff; /* Change the color */
        font-weight: bold; /* If you want it to be bold */
        display: inline-block; /* Needed to add space between the bullet and the text */
        width: 1em;
    }
    ul.list-slider li span {
        color: #ffffff;
    }
</style>
    
<!-- Main content Start -->
<div class="main-content">

    <!-- Slider Start -->
    <div id="rs-slider" class="rs-slider slider13">
        <div 
            class="rs-carousel owl-carousel" 
            data-loop="true" 
            data-items="1" 
            data-margin="30" 
            data-autoplay="true" 
            data-hoverpause="true" 
            data-autoplay-timeout="5000" 
            data-smart-speed="800" 
            data-dots="false" 
            data-nav="true" 
            data-nav-speed="false" 
            data-center-mode="false" 
            data-mobile-device="1" 
            data-mobile-device-nav="true" 
            data-mobile-device-dots="false" 
            data-ipad-device="1" 
            data-ipad-device-nav="true" 
            data-ipad-device-dots="false" 
            data-ipad-device2="1" 
            data-ipad-device-nav2="true" 
            data-ipad-device-dots2="false" 
            data-md-device="1" 
            data-lg-device="1" 
            data-md-device-nav="true" 
            data-md-device-dots="false"
        >
            <!-- Slide 1 -->
            <div class="slider">
                <div class="container">
                    <div class="slider-content">
                        <h1 class="sl-title wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="2000ms">Hardware Security Module</h1>
                            <div class="wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <span class="sl-sub-title2">A Leader in the<br> Cyber Security Field.</span>
                            </div> 
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 slide-quote touch" href="/product/nshield-hsm/nshield-connect">Learn More</a>
                            </div> 
                    </div>
                    <div class="image-part">
                        <img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms" src="/assets/images/content/1st.png" alt="Images">
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slider">
                <div class="container">
                    <div class="slider-content">
                        <h1 class="sl-title wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="2000ms">Key Management Software</h1>
                            <div class="wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <span class="sl-sub-title2">Next Generation<br> Enterprise Key Management.</span>
                            </div> 
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 slide-quote touch" href="/product/kms/key-management-software">Learn More</a>
                            </div> 
                    </div>
                    <div class="image-part">
                        <img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms" src="/assets/images/content/4th.png" alt="Images">
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slider">
                <div class="container">
                    <div class="slider-content">
                        <!-- <div class="sl-sub-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Airome</div> -->
                        <h1 class="sl-title wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="2000ms">TRANSCONFIRM</h1>
                            <div class="sl-bwow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <span class="sl-sub-title2" style="margin-bottom:10px">MOBILE TRANSACTION <br>AUTHENTICATION SIGNATURE</span>
                                <ul class="list-slider mb-20">
                                    <li><span>Replacing SMS, OTP and push codes for online and mobile banking.</span></li>
                                    <li><span>Easy integration into mobile banking applications.</span></li>
                                </ul>
                            </div> 
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 slide-quote touch" href="/product/payment/transconfirm">Learn More</a>
                            </div> 
                    </div>
                    <div class="image-part">
                        <img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms" src="/assets/images/content/transconfirm.png" alt="Images">
                    </div>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="slider">
                <div class="container">
                    <div class="slider-content">
                        <h1 class="sl-title wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="2000ms">CODESAFE</h1>
                            <div class="sl-bwow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <span class="sl-sub-title2">Maximize application security</span>
                            </div> 
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                            <a class="readon2 slide-quote touch" href="/product/nshield-software/code-safe">Learn More</a>
                            </div> 
                    </div>
                    <div class="image-part">
                        <img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms" src="/assets/images/content/3rd.png" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- Services Start -->
    <div class="rs-services style20 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title4 text-center mb-50">
                <span class="sub-title new pb-10">MANAGED IT SERVICES</span>
                <h2 class="title title3">More than 10+ years we provide IT & Software Solution</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 md-mb-30">
                    <div class="services-item">
                        <div class="iconbox-area">
                            <div class="icon-part">
                                <a href="#"><img class="dance_hover" src="/assets/images/content/icon/1.png" alt="Images"></a>
                            </div>
                            <div class="services-content">
                                <h3 class="title"> <a href="#">General Purpose HSMS</a></h3>
                                <p class="services-txt"> nShield HSMs provide a secure solution for generating encryption and signing keys, creating digital signatures, encrypting data and more.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 md-mb-30">
                    <div class="services-item">
                        <div class="iconbox-area">
                            <div class="icon-part">
                                <a href="#"><img class="dance_hover" src="/assets/images/content/icon/2.png" alt="Images"></a>
                            </div>
                            <div class="services-content">
                                <h3 class="title"> <a href="#">HSM Software Developer Toolkit</a></h3>
                                <p class="services-txt">Develop and execute sensitive code within a FIPS 140-2 Level 3 certified nShield hardware security module (HSM).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-30">
                    <div class="services-item">
                        <div class="iconbox-area">
                            <div class="icon-part">
                                <a href="#"><img class="dance_hover" src="/assets/images/content/icon/3.png" alt="Images"></a>
                            </div>
                            <div class="services-content">
                                <h3 class="title"> <a href="#">Management and Monitoring</a></h3>
                                <p class="services-txt"> Cut operational costs, increase uptime, and improve efficiency by managing and overseeing your nShield HSMs from one location</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 ">
                    <div class="services-item">
                        <div class="iconbox-area">
                            <div class="icon-part">
                                <a href="#"><img class="dance_hover" src="/assets/images/services/style14/iconbox/4.png" alt="Images"></a>
                            </div>
                            <div class="services-content">
                                <h3 class="title"> <a href="services-single.html">Data Center</a></h3>
                                <p class="services-txt"> We always provide people a
                                    complete solution focused of any business.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
                <!-- <div class="bottom-link text-center mt-43 sm-mt-23">
                    Increase your business success with technology.<a href="services.html">Let’s get started</a>
                </div> -->
        </div>
    </div>
    <!-- Services End -->
    
    <!-- About Section Start -->
    <div class="rs-about style10 gray-bg5 pt-130 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title4 mb-30">
                        <!-- <span class="sub-title new pb-10">Mitra Solusi TI Pilihan Utama Anda</span> -->
                        <h2 class="title pb-20 lh-1">Energizing global commerce through trust</h2>
                        <p class="margin-0 text-justify">In a world of uncertainty, we’ve always been driven to do one thing. For more than 50 years, every innovation, every milestone has built our vision of trust. Trust empowers us to say yes, to take risks, to move forward with confidence in our environment.</p>
                        <p class="mt-3 text-justify">We now support 6,000+ customers in more than 150 countries worldwide and manage billions of transactions annually, but we come to work every day with the same core belief—with technology built on trust, we can change the world.</p>
                    </div>
                    <!-- <div id="accordion" class="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">Responsive & Pixel Perfect Design</a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo data communication.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Elementor Page Builder Used</a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo data center and analytics.</div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="images-part">
                            <img src="assets/images/content/1.jpg" alt="Images">
                        </div>
                        <div class="rs-animations">
                            <div class="spinner dot">
                                <img class="scale" src="assets/images/about/solutions/2.png" alt="Images">
                            </div>
                            <div class="spinner ball">
                                <img class="dance2" src="assets/images/about/solutions/3.png" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Section Start -->
        <!-- <div class="rs-partner modify2 pt-100 md-pt-40">
            <div class="container">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5"  data-lg-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/1.png" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/2.png" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/3.png" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/4.png" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/5.png" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/1.png" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/2.png" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/3.png" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/4.png" alt=""></a>
                    </div>
                    <div class="partner-item">
                        <a href="https://rstheme.com"><img src="assets/images/content/partner/5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Partner Section End -->
    </div>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <!-- <div class="rs-services style14 it-solutions pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title4 text-center mb-50">
                <span class="sub-title new pb-10">DIGITAL SECURITY</span>
                <h2 class="title">Protect your organization from evolving security threats with high-assurance digital security solutions for any environment – cloud, on-premises, or IoT.</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-25">
                    <div class="flip-box-inner">
                        <div class="flip-box-wrap">
                            <div class="front-part">
                                <div class="front-content-part">
                                    <div class="front-icon-part">
                                        <div class="icon-part">
                                            <img src="assets/images/services/style15/1.png" alt=""> 
                                        </div>
                                    </div>
                                    <div class="front-title-part">
                                        <h3 class="title"><a href="#">Identity and Access Management</a></h3>
                                    </div>
                                    <div class="front-desc-part">
                                        <p>
                                        Streamline authentication with added security, including multifactor (MFA) and passwordless.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="back-front">
                                <div class="back-front-content">
                                    <div class="back-title-part">
                                        <h3 class="back-title"><a href="#">Identity and Access Management</a></h3>
                                    </div>
                                    <div class="back-desc-part">
                                        <p class="back-desc">Streamline authentication with added security, including multifactor (MFA) and passwordless.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-6 mb-25">
                    <div class="flip-box-inner">
                        <div class="flip-box-wrap">
                            <div class="front-part">
                                <div class="front-content-part">
                                    <div class="front-icon-part">
                                        <div class="icon-part">
                                            <img src="assets/images/services/style15/2.png" alt=""> 
                                        </div>
                                    </div>
                                    <div class="front-title-part">
                                        <h3 class="title"><a href="#">Hardware Security Modules (HSMs)</a></h3>
                                    </div>
                                    <div class="front-desc-part">
                                        <p>
                                        Keep data, applications, and cryptographic keys safe with the world’s leading HSMs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="back-front">
                                <div class="back-front-content">
                                    <div class="back-title-part">
                                        <h3 class="back-title"><a href="#">Hardware Security Modules (HSMs)</a></h3>
                                    </div>
                                    <div class="back-desc-part">
                                        <p class="back-desc">Keep data, applications, and cryptographic keys safe with the world’s leading HSMs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-6 mb-25">
                    <div class="flip-box-inner">
                        <div class="flip-box-wrap">
                            <div class="front-part">
                                <div class="front-content-part">
                                    <div class="front-icon-part">
                                        <div class="icon-part">
                                            <img src="assets/images/services/style15/3.png" alt=""> 
                                        </div>
                                    </div>
                                    <div class="front-title-part">
                                        <h3 class="title"><a href="#">Digital Certificate Solutions</a></h3>
                                    </div>
                                    <div class="front-desc-part">
                                        <p>
                                        Deliver high assurance with PKI and digital signing, TLS/SSL, and qualified certificates.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="back-front">
                                <div class="back-front-content">
                                    <div class="back-title-part">
                                        <h3 class="back-title"><a href="#">Digital Certificate Solutions</a></h3>
                                    </div>
                                    <div class="back-desc-part">
                                        <p class="back-desc">Deliver high assurance with PKI and digital signing, TLS/SSL, and qualified certificates.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-6 md-mb-25">
                    <div class="flip-box-inner">
                        <div class="flip-box-wrap">
                            <div class="front-part">
                                <div class="front-content-part">
                                    <div class="front-icon-part">
                                        <div class="icon-part">
                                            <img src="assets/images/services/style15/4.png" alt=""> 
                                        </div>
                                    </div>
                                    <div class="front-title-part">
                                        <h3 class="title"><a href="#">ID Issuance</a></h3>
                                    </div>
                                    <div class="front-desc-part">
                                        <p>
                                        Generate government IDs, citizen IDs, badges, and more with enhanced, secure printing solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="back-front">
                                <div class="back-front-content">
                                    <div class="back-title-part">
                                        <h3 class="back-title"><a href="#">ID Issuance</a></h3>
                                    </div>
                                    <div class="back-desc-part">
                                        <p class="back-desc">Generate government IDs, citizen IDs, badges, and more with enhanced, secure printing solutions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-25">
                    <div class="flip-box-inner">
                        <div class="flip-box-wrap">
                            <div class="front-part">
                                <div class="front-content-part">
                                    <div class="front-icon-part">
                                        <div class="icon-part">
                                            <img src="assets/images/services/style15/5.png" alt=""> 
                                        </div>
                                    </div>
                                    <div class="front-title-part">
                                        <h3 class="title"><a href="#">Financial Card Issuance</a></h3>
                                    </div>
                                    <div class="front-desc-part">
                                        <p>
                                        Deploy innovative, high-volume printing and instant issuance technology for financial cards.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="back-front">
                                <div class="back-front-content">
                                    <div class="back-title-part">
                                        <h3 class="back-title"><a href="#">Financial Card Issuance</a></h3>
                                    </div>
                                    <div class="back-desc-part">
                                        <p class="back-desc">Deploy innovative, high-volume printing and instant issuance technology for financial cards.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="flip-box-inner">
                        <div class="flip-box-wrap">
                            <div class="front-part">
                                <div class="front-content-part">
                                    <div class="front-icon-part">
                                        <div class="icon-part">
                                            <img src="assets/images/services/style15/6.png" alt=""> 
                                        </div>
                                    </div>
                                    <div class="front-title-part">
                                        <h3 class="title"><a href="">Passport Issuance</a></h3>
                                    </div>
                                    <div class="front-desc-part">
                                        <p>
                                            Issue secure passports, e-passports, and visas with our trusted printing solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="back-front">
                                <div class="back-front-content">
                                    <div class="back-title-part">
                                        <h3 class="back-title"><a href="">Passport Issuance</a></h3>
                                    </div>
                                    <div class="back-desc-part">
                                        <p class="back-desc">Issue secure passports, e-passports, and visas with our trusted printing solutions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div> -->
    <!-- Services Section End -->

    <!-- Testimonial Section Start -->
    <!-- <div class="rs-testimonial style10 modify1 bg43  pt-100 pb-140 md-pt-70">
        <div class="container">
            <div class="sec-title5 text-center">
                <span class="sub-title white-color pb-10">Testimonials</span>
                <h2 class="title pb-20 white-color">Customers Reviews</h2>
            </div>
            <div class="slick-part single-product-slider">
                <div class="slider slider-for">
                    <div class="images-slide-single">
                        <div class="single-testimonial">
                            <div class="content-part">
                                <img class="quote" src="assets/images/testimonial/quote-h16.png" alt="Image">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                    </div>
                    <div class="images-slide-single">
                        <div class="single-testimonial">
                            <div class="content-part">
                                <img class="quote" src="assets/images/testimonial/quote-h16.png" alt="Image">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                    </div>
                    <div class="images-slide-single">
                        <div class="single-testimonial">
                            <div class="content-part">
                                <img class="quote" src="assets/images/testimonial/quote-h16.png" alt="Image">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                    </div>
                    <div class="images-slide-single">
                        <div class="single-testimonial">
                            <div class="content-part">
                                <img class="quote" src="assets/images/testimonial/quote-h16.png" alt="Image">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                    </div>
                    <div class="images-slide-single">
                        <div class="single-testimonial">
                            <div class="content-part">
                                <img class="quote" src="assets/images/testimonial/quote-h16.png" alt="Image">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider slider-nav">
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/1.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Monty Moni</div>
                            <span class="testi-title">CEO, Brick Consulting</span>
                        </div>
                    </div>
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/2.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Monir Khan</div>
                            <span class="testi-title">CEO, Brick Consulting</span>
                        </div>
                    </div>
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/3.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Mala Akter</div>
                            <span class="testi-title">Digital Marketer</span>
                        </div>
                    </div>
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/4.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Maria Akter</div>
                            <span class="testi-title">Youtuber</span>
                        </div>
                    </div>
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/5.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Masud Rana</div>
                            <span class="testi-title">Web Developer</span>
                        </div>
                    </div>  
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/1.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Monty Moni</div>
                            <span class="testi-title">CEO, Brick Consulting</span>
                        </div>
                    </div>
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/2.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Monir Khan</div>
                            <span class="testi-title">CEO, Brick Consulting</span>
                        </div>
                    </div>
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/3.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Mala Akter</div>
                            <span class="testi-title">Digital Marketer</span>
                        </div>
                    </div>
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/4.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Maria Akter</div>
                            <span class="testi-title">Youtuber</span>
                        </div>
                    </div>
                    <div class="images-single">
                        <img src="assets/images/testimonial/avatar/5.jpg" alt="Single Product">
                        <div class="testi-content">
                            <div class="testi-name">Masud Rana</div>
                            <span class="testi-title">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial Section End -->

    <!-- Team Section Start -->
    <!-- <div class="rs-team style2 modify1 pt-100 pb-100 md-pt-70 md-pb-70"> 
        <div class="container">
            <div class="sec-title5 text-center mb-50 md-mb-35">
                <span class="sub-title new-title pb-7">Expert People</span>
                <h2 class="title title2 pb-12">Our Team Members</h2>
                <p class="description solutions">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    data tempor incididunt ut labore et dolore magna.
                </p>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true" data-lg-device="3">
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="team-single.html"><img src="assets/images/team/seo/1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="team-single.html">Makhaia Antitni</a></h4>
                        <span class="designation">President & CEO</span>
                        <ul class="team-social">
                            <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="single-team.html"><img src="assets/images/team/seo/2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="team-single.html">Corey Anderson</a></h4>
                        <span class="designation">CEO & Founder</span>
                        <ul class="team-social">
                            <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="team-single.html"><img src="assets/images/team/seo/3.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="team-single.html">Masud Rana</a></h4>
                        <span class="designation">Web Developer</span>
                        <ul class="team-social">
                            <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="team-single.html"><img src="assets/images/team/seo/4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="team-single.html">Najmul Huda</a></h4>
                        <span class="designation">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="team-single.html"><img src="assets/images/team/seo/1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="team-single.html">Makhaia Antitni</a></h4>
                        <span class="designation">President & CEO</span>
                        <ul class="team-social">
                            <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="team-single.html"><img src="assets/images/team/seo/2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Corey Anderson</a></h4>
                        <span class="designation">CEO & Founder</span>
                        <ul class="team-social">
                            <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="single-team.html"><img src="assets/images/team/seo/3.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="team-single.html">Masud Rana</a></h4>
                        <span class="designation">Web Developer</span>
                        <ul class="team-social">
                            <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="team-single.html"><img src="assets/images/team/seo/4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Najmul Huda</a></h4>
                        <span class="designation">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a href="team-single.html"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="team-single.html"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </div> -->
    <!-- Team Section End -->

</div> 
<!-- Main content End -->

@endsection