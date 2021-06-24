@extends('layout/template')
@section('content')

<style>
    nav>.nav.nav-tabs {
        border: none;
        color: #fff;
        background: #272e38;
        border-radius: 0;
    }

    nav>div a.nav-item.nav-link,
    nav>div a.nav-item.nav-link.active {
        border: none;
        padding: 18px 25px;
        color: #fff;
        background: #2d7a9e;
        border-radius: 0;
        font-size: 24px;
        line-height: 34px;
        font-weight: 600;
        font-family: Poppins;
    }

    nav>div a.nav-item.nav-link.active:after {
        content: "";
        position: relative;
        bottom: -70px;
        left: -20%;
        border: 15px solid transparent;
        border-top-color: #6ec1e6;
    }

    .tab-content {
        background: #f5fbfd;
        line-height: 25px;
        border: 1px solid #ddd;
        border-top: 5px solid #6ec1e6;
        border-bottom: none;
        padding: 50px 25px 100px;
    }

    nav>div a.nav-item.nav-link:hover,
    nav>div a.nav-item.nav-link:focus {
        border: none;
        background: #6ec1e6;
        color: #fff;
        border-radius: 0;
        transition: background 0.20s linear;
    }

    ul.productdescription {
        list-style: disc;
        padding-left: 40px;
    }

</style>

<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-4">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">Software Option Packs</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style8 pt-100 pb-100 md-pt-70 md-pb-40">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 pl-50 md-pl-15 order-last">
                    <div class="sec-title3">
                        <h2 class="title title2 pb-25">Software that extends the capability of your HSMs to fit your needs.</h2>
                        <p class="description text-justify pb-10">Entrust nShield Software Option Packs are easy to set up and deploy, delivering everything you need to integrate high assurance nShield HSMs into your preferred environment. Our software option packs include:</p>
                        <ul class="listing-style text-left regular2 pl-10 sm-pl-0 mb-4">
                            <li>Web Services</li>
                            <li>nShield Container</li>
                            <li>Time Stamping</li>
                            <li>Cloud Integration</li>
                            <li>Database Sercurity</li>
                        </ul>
                        <!-- <ul class="btn-part">
                            <li><a class="readon2 get-new" href="#">Download Datasheet</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="/assets/images/product_detail/img-promo-nshield-connect-800x600.png" alt="images">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- About Section End -->

    <div class="rs-services style19 pt-100 md-pt-70 md-pb-70">
        <div class="container">
            <h2 class="title title2 text-center pb-25">Available Software</h2>
            <div class="row margin-0 hover-effect">
                <div class="col-lg-4 col-md-6 md-mb-30 padding-0">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="shape-part">
                                <img class="up-down-new" src="/assets/images/services/apps/1.png" alt="images">
                            </div>
                            <div class="icon-part">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Web Services Option Packs</a></h3>
                                </div>
                                <p class="services-txt">Access nShield services through web service calls via a REST-like API.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 md-mb-30 padding-0">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="shape-part">
                                <img class="up-down-new" src="/assets/images/services/apps/2.png" alt="images">
                            </div>
                            <div class="icon-part purple-bg">
                                <i class="fa fa-clone"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">nShield Container Option Pack</a></h3>
                                </div>
                                <p class="services-txt">Build HSM support into containerized deployments with a proven template deployment model.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="shape-part">
                                <img class="up-down-new" src="/assets/images/services/apps/3.png" alt="images">
                            </div>
                            <div class="icon-part blue-bg">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Time Stamping Option Pack</a></h3>
                                </div>
                                <p class="services-txt">Automate requests for time stamps backed by FIPS-certified nShield HSMs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="shape-part">
                                <img class="up-down-new" src="/assets/images/services/apps/3.png" alt="images">
                            </div>
                            <div class="icon-part blue-bg">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Cloud Integration Option Pack</a></h3>
                                </div>
                                <p class="services-txt">Export your own HSM-derived keys to Google Cloud Platform and/or Amazon Web Services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="shape-part">
                                <img class="up-down-new" src="/assets/images/services/apps/3.png" alt="images">
                            </div>
                            <div class="icon-part blue-bg">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Database Sercurity Option Pack</a></h3>
                                </div>
                                <p class="services-txt">Protect Microsoft SQL Server environments with high assurance nShield HSMs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Start -->
    <div class="rs-services style20 bg29 pt-100 pb-50 md-pt-70 md-pb-70" style="padding-bottom:100px">
        <div class="container">
            <div class="sec-title4 text-center mb-50">
                <!-- <span class="sub-title new pb-10">MANAGED IT SERVICES</span> -->
                <h2 class="title text-left">Tech Specs</h2>
                <p class="text-justify mt-4">CodeSafe encompasses two components: a developer toolkit to compile applications and prepare them to be imported into the HSMs, and a run time environment that protects the application when in use. CodeSafe not only carves out a segregated and protected space for security-sensitive applications to be executed, but it also creates a strong binding between the cryptographic processes and the keys they use.</p>

                <p class="font-weight-bold text-left mb-1">nShield HSM Compatibility</p>
                <p class="text-justify mb-4">CodeSafe is available with all FIPS 140-2 Level 3 certified nShield Solo PCIe and network-attached nShield Connect HSMs.</p>

                <p class="font-weight-bold text-left mb-1">Operating System Support</p>
                <p class="text-justify mb-1">CodeSafe development supported on Windows and RHEL Operating Systems</p>
                <ul class="listing-style text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>Deployment also supported on AIX, HP-UX, and Solaris platforms.</li>
                </ul>

                <p class="font-weight-bold text-left mb-1">HSM Development Environment</p>
                <p class="text-justify mb-1">CodeSafe is compatible with the following programming applications:</p>
                <ul class="listing-style text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>C and C++ programming languages for embedded applications</li>
                    <li>C, C++ and Java on host-server</li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- Main content End -->
@endsection
