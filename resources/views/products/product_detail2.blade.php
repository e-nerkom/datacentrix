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
                <h1 class="breadcrumbs-title white-color mb-0">nShield Software</h1>
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
                        <span class="sub-title primary"><span class="title-upper">CodeSafe</span></span>
                        <h2 class="title title2 pb-25">Maximize application security</h2>
                        <p class="description text-justify pb-10">The CodeSafe software developer toolkit provides the capability to create and execute sensitive applications within the protected perimeter of a FIPS 140-2 Level 3 certified nShield hardware security module (HSM).</p>
                        <p class="description text-justify pb-30"></p>
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
                                    <h3 class="title"><a href="#">Security-sensitive Apps Protection</a></h3>
                                </div>
                                <p class="services-txt">CodeSafe can be used to execute any type of application within the tamper-resistant nShield HSM.
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
                                    <h3 class="title"><a href="#">Attack and Malware Defense</a></h3>
                                </div>
                                <p class="services-txt">Because sensitive applications execute within the HSM’s secure boundary, they are safeguarded from internal and external threats.</p>
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
                                    <h3 class="title"><a href="#">Strong Access Control</a></h3>
                                </div>
                                <p class="services-txt">CodeSafe creates a strong binding between cryptographic processes and the keys they use.</p>
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

    

    <!-- <div class="rs-shop single-product shop-rp pt-100 md-pt-80 md-pb-30">
        <div class="col-xs-12">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active title" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                        role="tab" aria-controls="nav-home" aria-selected="true">Tech Specs</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Options and Accessories</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                        aria-controls="nav-contact" aria-selected="false">Related Resources</a>
                </div>
            </nav>

            <div class="tab-content pb-100 px-3 px-sm-0" id="nav-tabContent">

                <div class="tab-pane fade show active container" id="nav-home" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <div class="background-section__content">
                        <div class="promo-full">
                        <h2 class="promo-full__headline">Tech Specs</h2>
                        <div class="promo-full__description">
                        <div style="text-align: left;">
                        <p>CodeSafe encompasses two components: a developer toolkit to compile applications and prepare them to be imported into the HSMs, and a run time environment that protects the application when in use. CodeSafe not only carves out a segregated and protected space for security-sensitive applications to be executed, but it also creates a strong binding between the cryptographic processes and the keys they use.</p>
                        <p><strong>nShield HSM Compatibility</strong></p>
                        <p>CodeSafe is available with all FIPS 140-2 Level 3 certified nShield Solo PCIe and network-attached nShield Connect HSMs.</p>
                        <p><strong>Operating System Support</strong></p>
                        <p>CodeSafe development supported on Windows and RHEL Operating Systems</p>
                        <ul class=productdescription>
                        <li>Deployment also supported on AIX, HP-UX, and Solaris platforms</li>
                        </ul>
                        <p><strong>HSM Development Environment</strong></p>
                        <p>CodeSafe is compatible with the following programming applications:</p>
                        <ul class=productdescription>
                        <li>C and C++ programming languages for embedded applications</li>
                        <li>C, C++ and Java on host-server</li>
                        </ul>
                        </div>
                        </div>
                        </div>
                        </div>
                </div>
                <div class="tab-pane fade container" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat
                    veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim.
                    Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim
                    non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor
                    ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore.
                    Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
                <div class="tab-pane fade container" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat
                    veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim.
                    Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim
                    non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor
                    ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore.
                    Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
            </div>

        </div>

    </div> -->



</div>
<!-- Main content End -->
@endsection
