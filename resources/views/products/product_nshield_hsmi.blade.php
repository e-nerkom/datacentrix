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
        padding: 30px 25px 100px;
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
                <h1 class="breadcrumbs-title white-color mb-0">nShield ISSUANCE</h1>
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
                        <!-- <span class="sub-title">~ <span class="title-upper">About Us</span> ~</span> -->
                        <h2 class="title title2 pb-25">Integral for integrated issuance</h2>
                        <p class="description text-justify pb-10">The nShield Hardware Security Module (HSMi) is FIPS 140-2 Level 3-certified hardware that delivers cryptographic services for Entrust’s secure issuance software. This tamper-resistant HSMi performs vital functions for financial and identification issuance, including EMV data preparation, key generation, and data protection.</p>
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
            <h2 class="title title2 text-center pb-25">nShield HSMi Benefits</h2>
            <div class="row margin-0 hover-effect">
                <div class="col-lg-4 col-md-6 md-mb-30 padding-0">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="shape-part">
                                <img class="up-down-new" src="/assets/images/services/apps/1.png" alt="images">
                            </div>
                            <div class="icon-part">
                                <i class="fa fa-cog"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Seamless Integration</a></h3>
                                </div>
                                <p class="services-txt">Our Security World architecture integrates our HSMi with issuance software, ensuring seamless failover and maximum availability.
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
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">High Transaction Rates</a></h3>
                                </div>
                                <p class="services-txt">Its support for high transaction rates makes it ideal for instant issuance and central issuance.</p>
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
                                <i class="fa fa-window-restore"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Remote Administration</a></h3>
                                </div>
                                <p class="services-txt">TThe Remote Administration kit facilitates remote smart card presentation for firmware updates and more.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rs-shop single-product shop-rp pt-100 md-pt-80 md-pb-30">
        <div class="col-xs-12">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active title" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                        role="tab" aria-controls="nav-home" aria-selected="true">Tech Specs</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                        aria-controls="nav-contact" aria-selected="false">Related Resources</a>
                </div>
            </nav>

            <div class="tab-content pb-100 px-3 px-sm-0" id="nav-tabContent">

                <div class="tab-pane fade show active container" id="nav-home" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <div class="content-block">
                        <h3>
                            Tech Specs
                        </h3>
                        <p>
                            <style>
                                td {
                                    padding: 20px 0px 20px 12px;
                                    line-height: normal;
                                    border: 1px solid;
                                }

                                th {
                                    background-color: #a2b4dc;
                                    padding: 20px 0px 2px 0px;
                                    vertical-align: bottom;
                                }

                            </style>
                        </p>
                        <p class="mb-10"><strong>Supported Cryptographic Algorithms</strong></p>
                        <p class="mb-20">Asymmetric algorithms: RSA, Diffie-Hellman, ECMQV, DSA, El-Gamal, KCDSA, ECDSA (including NIST, Brainpool & secp256k1 curves), ECDH, Edwards (Ed25519, Ed25519ph)</p>
                        <p class="mb-20">Symmetric algorithms: AES, Arcfour, ARIA, Camellia, CAST, DES, MD5 HMAC, RIPEMD160 HMAC, SEED, SHA-1 HMAC, SHA-224, HMAC, SHA-256 HMAC, SHA384 HMAC, SHA-512 HMAC, Tiger HMAC, Triple DES</p>
                        <p class="mb-20">Hash/message digest: MD5, SHA-1, SHA-2 (224, 256, 384, 512 bit), HAS-160, RIPEMD160</p>

                        <p class="mb-10"><strong>Supported Issuer EMV Certificates</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>American Express</li>
                                <li>Discover</li>
                                <li>Elo</li>
                                <li>Interac</li>
                                <li>Japan Credit Bureau (JCB)</li>
                                <li>Jetco</li>
                                <li>MasterCard</li>
                                <li>NSICCS Indonesia</li>
                                <li>Visa</li>
                                <li>VCCS Vietnam</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Security Compliance</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>FIPS 140-2 Level 2 and Level 3 certified</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Host Connectivity</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>Dual Gigabit Ethernet ports (two network segments)</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Safety and Environmental Standards Compliance</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>UL, CE, FCC, C-TICK, Canada ICES RoHS2, WEEE</li>
                            </ul>                            
                        </div>

                        
                        <p class="mb-10"><strong>High Availability</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>Field-serviceable fan tray components</li>
                                <li>Dual hot-swap power supply</li>
                                <li>HSM load balancing / Failover with Adaptive Issuance Key Manager</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Management and Monitoring</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>nShield Remote Administration — includes nShield Trusted Verification</li>
                                <li>Device and remote administration smart cards</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Physical Characteristics</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>Standard 1U 19in. rack mount dimensions: 43.4 x 430 x 705mm (1.7 x 16.9 x 27.8in)</li>
                                <li>Weight: 11.5kg (25.4lb)</li>
                                <li>Input voltage: 100-240V AC auto switching 50-60Hz</li>
                                <li>Power consumption: up to 2.0A at 110V AC, 60Hz | 1.0A at 220V AC, 50Hz</li>
                                <li>Heat dissipation: 327.6 to 362.0 BTU/hr. (full load)</li>
                            </ul>                            
                        </div>

                        
                    </div>
                </div>
                
                <div class="tab-pane fade container" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="col-md-6">
                        <ul class="page-nav-vertical mb-50">
                            <li><a href="/assets/pdf/in12-6141_cr500_ds_lac_lr_es.pdf" target="_BLANK">nShield Issuance HSM Datasheet</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>



</div>
<!-- Main content End -->
@endsection
