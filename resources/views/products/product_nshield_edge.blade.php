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
                <h1 class="breadcrumbs-title white-color mb-0">nShield Edge</h1>
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
                        <h2 class="title title2 pb-25">Powerful, portable cryptographic services</h2>
                        <p class="description text-justify pb-10">The nShield Edge hardware security module (HSM) is a full-featured, portable USB HSM designed for low-volume transaction environments. It’s capable of encryption and key protection and is ideally suited for off-line key generation for certificate authorities (CAs) as well as development and Bring Your Own Key (BYOK) environments.</p>
                        <!-- <ul class="btn-part">
                            <li><a class="readon2 get-new" href="#">Download Datasheet</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="/assets/images/product_detail/img-promo-nshield-edge-800x600.png" alt="images">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- About Section End -->

    <!-- <div class="rs-services style20 bg29 pt-100 pb-50 md-pt-70 md-pb-70" style="padding-bottom:100px">
        <div class="container">
            <div class="sec-title4 text-center mb-50">
                <h2 class="title title3">Remote configuration eliminates costly trips to the data center</h2>
                <p class="text-justify mt-4">The latest nShield Connect XC models offer an optional serial port that
                    allows enterprises to eliminate costly repeat trips to the data center. Remote Configuration
                    capabilities include:</p>

                <ul class="listing-style text-left regular2 pl-10 sm-pl-0">
                    <li>Initiating and changing an HSM’s network settings, e.g. IP address</li>
                    <li>Supporting provider/tenant deployment models where the nShield HSM appliance can be easily
                        configured by the provider before passing control of the HSM to a tenant. Separation of roles
                        ensures the cryptographic key material is not exposed to the provider.</li>
                    <li>Purging key material and decommissioning the nShield HSM appliance at the end of a usage cycle
                        in preparation for its next deployment.</li>
                </ul>

                <p class="text-justify mt-4">Technicians simply need to rack and cable the nShield HSM appliance and
                    connect a serial concentrator in the data center to prepare the nShield Connect XC for full remote
                    configuration and administration. This reduces the need for trained resources in the data center and
                    provides customers more efficiency and control over their HSMs.</p>
            </div>
        </div>
    </div> -->

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
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Powerful for a Purpose</a></h3>
                                </div>
                                <p class="services-txt">Perfect for offline key generation and development / Bring Your Own Key (BYOK) environments, with complete algorithm and API support.
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
                                <i class="fa fa-suitcase"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Highly Portable</a></h3>
                                </div>
                                <p class="services-txt">Small, lightweight design and convenient USB interface supports a variety of host platforms, including portable devices.</p>
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
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Cost Effective</a></h3>
                                </div>
                                <p class="services-txt">Your entry-point into HSMs, this economical device lets you scale your environment with other nShield models.</p>
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
                        <p class="mb-10"><strong>Certifications</strong></p>
                        <p class="mb-20">nShield Edge USB HSMs are certified to FIPS 140-2 Level 2 and Level 3.</p>
                        <p class="mb-10"><strong>Safety and Environmental Standards Compliance</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>UL, CE, FCC, RCM, Canada ICES</li>
                                <li>RoHS2, WEEE</li>
                            </ul>                            
                        </div>
                        <p class="mb-10"><strong>Supported APIs</strong></p>
                        <p class="mb-20">nShield HSMs boast high elliptic curve cryptography (ECC) and RSA transaction rates. ECC, one
                            of the most efficient cryptographic algorithms, is particularly favored where low power
                            consumption is crucial, such as applications running on small sensors or mobile devices.</p>
                        <p class="mb-10"><strong>Supported Cryptographic Algorithms</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>Asymmetric public key algorithms: RSA, Diffie-Hellman, ECMQV, DSA, KCDSA, ECDSA, ECDH, Edwards (X25519, Ed25519ph)</li>
                                <li>Symmetric algorithms: AES, AES-GCM, ARIA, Camellia, CAST, RIPEMD160 HMAC, SEED, Triple DES</li>
                                <li>Hash/message digest: SHA-1, SHA-2 (224, 256, 384, 512 bit), HAS-160</li>
                                <li>Full Suite B implementation with fully licensed ECC, including Brainpool and custom curves</li>
                                <li>Elliptic Curve Key Agreement (ECKA) available via Java API and nCore APIs</li>
                                <li>Elliptic Curve Integrated Encryption Scheme (ECIES) available via Java API, PKCS#11 and nCore APIs</li>
                            </ul>                            
                        </div>
                        <p class="mb-20">nShield HSMs offers the majority of these cryptographic algorithms as part of the standard feature set. For organizations wishing to use ECC or South Korean algorithms, optional activation licenses are needed.
                        </p>

                        <p class="mb-10"><strong>Operating Systems</strong></p>
                        <p class="mb-20">Windows and Linux operating systems including distributions from RedHat and SUSE.</p>
                        
                    </div>
                </div>
                <div class="tab-pane fade container" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="content-block">
                        <h3>
                            Options and Accessories
                        </h3>

                        <p class="mb-10"><strong>CipherTools Developer Toolkit</strong></p>
                        <p class="mb-20">The CipherTools Developer Toolkit is a set of tutorials, reference documentation, sample programs and additional libraries. With this toolkit which is included with our standard nShield Security World Software, developers can take full advantage of the advanced integration capabilities of nShield HSMs. In addition to offering support for standard APIs, the toolkit enables you to run custom applications with nShield HSMs.</p>

                        <p class="mb-10"><strong>Elliptic Curve Cryptography (ECC) Activation</strong></p>
                        <p class="mb-20">The ECC activation license enables EC-DH, EC-DSA and EC-MQV to be used on an nShield HSMs.</p>

                        <p class="mb-10"><strong>KCDSA Activation</strong></p>
                        <p class="mb-20">With the KCDSA activation license, you can use the Korean Certificate-based Digital Signature Algorithm (KCSDA) as well as HAS-160, SEED and ARIA algorithms on an nShield HSMs.</p>

                        <p class="mb-10"><strong>FIPS Certification Options</strong></p>
                        <p class="mb-20">The nShield Edge is available in FIPS 140-2 Level 2 and Level 3 variants. A non-FIPS developer edition is also offered.</p>

                        
                    </div>
                </div>
                <div class="tab-pane fade container" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    
                </div>
            </div>

        </div>

    </div>



</div>
<!-- Main content End -->
@endsection
