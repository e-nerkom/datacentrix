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
                <h1 class="breadcrumbs-title white-color mb-0">TransConfirm</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- About Section Start -->
    <div class="rs-about style10 pt-130 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title4 mb-30">
                        <!-- <span class="sub-title new pb-10">About Us</span> -->
                        <h5 class="mb-20">MOBILE TRANSACTION AUTHENTICATION SIGNATURE (MTAS)<br> IN A SMARTPHONE</h5>
                        <p class="text-justify mb-10">TransConfirm is a software platform that performs mobile transaction authentication signature (mTAS) to authenticate or confirm any type of operations, including transactions or e-documents, on a mobile device.</p>
                        <p class="text-justify mb-10">Our solution provides clients with a high level of security and an easy way to protect their payments, generated via any digital channels, such as Internet banking, mobile banking, CNP operations, private banking.</p>
                        <p class="text-justify  mb-10">No more scratch-cards, USB-tokens, OTP-generators or any other hardware solutions are needed. There is no dependency on mobile operator service and SMS delivery time.</p>
                    </div>
                    
                </div>
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="images-part">
                            <img src="/assets/images/product_detail/payconfirm2.png" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- About Section End -->

    <div class="rs-about style10 gray-bg5 pt-130 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
            <div   div class="col-lg-5">
                    <div class="about-content">
                        <div class="images-part">
                            <img src="/assets/images/product_detail/payconfirm3.png" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title4 mb-30">
                        <!-- <span class="sub-title new pb-10">About Us</span> -->
                        <!-- <h5 class="mb-20">MOBILE TRANSACTION AUTHENTICATION SIGNATURE (MTAS)<br> IN A SMARTPHONE</h5> -->
                        
                        <p class="text-justify mb-10">Unlike OTP, mTAS created with PayConfirm is bound to the payment’s details and user’s smartphone. This solution offers protection from the most common security threats in digital banking such as SIM swap fraud, phishing, bank account details replacement and other security threats.</p>
                    </div>
                    <div id="accordion" class="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">CONFIRM ANY TYPES OF OPERATIONS</a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-10">
                                    No more codes retyping from SMS, PUSH notifications and OTP generators.
                                    </p>
                                    <p class="mb-10">
                                    Trusted solution based on cryptography.
                                    </p>
                                    <p class="mb-10">
                                    Real-time notification right in a smartphone.
                                    </p>                                    
                                </div>                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">SECURITY AND FRAUD PROTECTION</a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-10">
                                    Protection from phishing, social engineering, data switching.
                                    </p>
                                    <p class="mb-10">
                                    Device scoring and anomalies detection.
                                    </p>
                                    <p class="mb-10">
                                    SMS interception and SIM swap attack protection.
                                    </p>  
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">SECURE TRANSACTIONS</a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-10">
                                    mTAS is generated on the basis of four components: transaction details, generation time, device fingerprint and user’s key.
                                    </p>
                                    <p class="mb-10">
                                    Two independent communication channels are used to activate PayConfirm app in a user’s smartphone.
                                    </p>
                                    <p class="mb-10">
                                    The security key is generated in the user’s smartphone and stored safely in the encrypted form.
                                    </p>  
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">TRANSACTIONS NON-REPUDIATION</a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-10">
                                    User not just confirms payment details, but signs them digitally and will be informed about transaction status afterwards
                                    </p>
                                    <p class="mb-10">
                                    TransConfirm uses asymmetric cryptographic algorithms, thus, there is only the user who can generate a digital signature.
                                    </p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>

    


    <!-- <div class="rs-services style19 pt-100 md-pt-70 md-pb-70">
        <div class="container">
            <h2 class="title title2 text-center pb-25">nShield as a Service Benefits</h2>
            <div class="row margin-0 hover-effect">
                <div class="col-lg-4 col-md-6 md-mb-30 padding-0">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="shape-part">
                                <img class="up-down-new" src="/assets/images/services/apps/1.png" alt="images">
                            </div>
                            <div class="icon-part">
                                <i class="fa fa-cloud"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Crypto Security + Cloud Stratregy</a></h3>
                                </div>
                                <p class="services-txt">Advance your cloud-centric strategies with FIPS 140-2 Level 3 protection for your business-critical apps and data.
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
                                <i class="fa fa-arrows"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Flexible and Scalable</a></h3>
                                </div>
                                <p class="services-txt">Our Security World architecture lets you scale HSM operations and access secure crypto functionality from anywhere.</p>
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
                                <i class="fa fa-lock"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Secure Code Execution</a></h3>
                                </div>
                                <p class="services-txt">The CodeSafe secure execution capability provides on-demand access to your organization's secure, sensitive code protected inside the HSM.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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
                        <p class="mb-10"><strong>Connectivity</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>IPsec tunnel w/ pre-shared keys</li>
                                <li>Between customer Cloud IP space(s) and dedicated, managed nShield HSM environment</li>
                                <li>Transparent to client hosts</li>
                                <li>Takes entire path out of control scope</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Certified Hardware Solutions</strong></p>
                        <p class="mb-20">nShield as a Service is built with nShield Connect XC HSMs, which help our customers to demonstrate compliance while also giving them the assurance that their HSMs meet stringent industry standards.</p>

                        <p class="mb-10"><strong>nShield Features</strong></p>
                        <p class="mb-20">nShield as a Service delivers the same features as on-premises nShield HSMs, including CodeSafe, Web Services Option Pack, and Database Option Pack.</p>

                        
                        <p class="mb-10"><strong>Security Compliance</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>FIPS 140-2 Level 3</li>
                                <li>Common Criteria Certification against EN 419 221-5 Cryptographic Module for Trust Services</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Safety and Environmental Standards Compliance:</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>UL, CE, FCC, RCM, Canada ICES</li>
                                <li>RoHS2, WEEE</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Data Center Certifications</strong></p>
                        <p class="mb-20">Cloud Security Alliance (CSA) Security Trust Assurance and Risk (STAR) - Level 1</p>

                        <img src="/assets/images/product_detail/images-hsm_data-center-certifications.jpeg">

                        <p class="mb-10"><strong>High Transaction Rates</strong></p>
                        <p class="mb-20">nShield as a Service features high elliptic curve cryptography (ECC) and RSA transaction rates. ECC, one of the most efficient cryptographic algorithms, is particularly favored where high speed and lower processing power are important.</p>
                        <p class="mb-10">RSA Signing Performance for NIST Recommended Key Lengths</p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>2048</li>
                                <ul class="productdescription pl-3">
                                    <li>8600 tps</li>
                                </ul>                                
                                <li>4096</li>
                                <ul class="productdescription pl-3">
                                    <li>2025 tps</li>
                                </ul>
                            </ul>                            
                        </div>

                        <p class="mb-10">ECC Prime Curve Signing Performance for NIST Recommended Key Lengths</p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>256 bit</li>
                                <ul class="productdescription pl-3">
                                    <li>Up to 14,400 tps</li>
                                </ul>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Wide Support for APIs, Cryptographic Algorithms and Platforms</strong></p>
                        <p class="mb-10 ml-3"><strong>Supported APIs</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>PKCS#11, OpenSSL, Java (JCE), Microsoft CAPI/CNG and Web Services</li>
                            </ul>                            
                        </div>

                        <p class="mb-10 ml-3"><strong>Supported Cryptographic Algorithms</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>Asymmetric public key algorithms: RSA, Diffie-Hellman, ECMQV, DSA, KCDSA, ECDSA, ECDH, Edwards (X25519, Ed25519ph), Secp256k1,</li>
                                <li>Symmetric algorithms: AES, AES-GCM, ARIA, Camellia, CAST, RIPEMD160 HMAC, SEED, Triple DES</li>
                                <li>Hash/message digest: SHA-1, SHA-2 (224, 256, 384, 512 bit), HAS-160</li>
                                <li>Full Suite B implementation with fully licensed ECC including Brainpool and custom curves</li>
                            </ul>                            
                        </div>

                        <p class="mb-20">nShield HSMs offers support for the majority of these cryptographic algorithms as part of the standard feature set. For organizations wishing to use ECC or South Korean algorithms, optional activation licenses are needed.</p>

                        <p class="mb-10"><strong>Supported Platforms</strong></p>
                        <p class="mb-20">Microsoft Windows and Linux operating systems including distributions from RedHat, SUSE, and major cloud service providers running as virtual machines or in containers.</p>
                        
                    </div>
                </div>
                <div class="tab-pane fade container" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="content-block">
                        <h3>
                            Options and Accessories
                        </h3>

                        <p class="mb-20">nShield as a Service is available as either a self-managed or fully-managed service.</p>

                        <p class="mb-10"><strong>Self-Managed and Fully-Managed Features</strong></p>
                        <p class="mb-20">Customer has access to dedicated nShield Connect hardware hosted in secure data centers</p>
                        <p class="mb-20">The nShield Remote Administration kit lets you securely connect to and interact with your cloud-based nShield HSM(s)</p>
                        <p class="mb-20">Maintenance & Support</p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>Service monitoring</li>
                                <li>Pre-tested upgrades/patches applied during annual or emergency maintenance windows</li>
                                <li>24/7 support</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Features Exclusive to Fully-Managed Service</strong></p>
                        <p class="mb-20">Full Management of installation</p>
                        <p class="mb-20">Security Officer role fulfilled by trusted Entrust personnel</p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>Security World creation</li>
                                <li>HSM enrollment</li>
                                <li>Signing ceremonies</li>
                            </ul>                            
                        </div>

                        <p class="mb-20">nPolicy and process development</p>
                        <p class="mb-20">Under ISO 27001 compliant policies & procedures</p>
                        <p class="mb-20">All operational staff BS7858 cleared (UK data centres only)</p>
                        <p class="mb-20">Firmware upgrades, completed with customer consent</p>
                        
                    </div>
                </div>
                <div class="tab-pane fade container" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="col-md-6">
                        <ul class="page-nav-vertical mb-50">
                            <li><a href="/assets/pdf/entrust-nshield-as-a-service-ds.pdf" target="_BLANK">nShield as a Service Datasheet</a></li>
                            <li><a href="/assets/pdf/entrust-nshield-connect-ds.pdf" target="_BLANK">nShield Connect Datasheet</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div> -->



</div>
<!-- Main content End -->
@endsection
