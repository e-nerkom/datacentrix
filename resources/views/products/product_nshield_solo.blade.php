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
                <h1 class="breadcrumbs-title white-color mb-0">nShield Solo</h1>
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
                        <h2 class="title title2 pb-25">nShield Solo</h2>
                        <p class="description text-justify pb-10">nShield Solo HSMs are hardened, tamper-resistant FIPS 140-2 certified PCIe cards which perform encryption, digital signing and key generation on behalf of an extensive range of commercial and custom-built applications, including certificate authorities, code signing and more.</p>
                        <!-- <ul class="btn-part">
                            <li><a class="readon2 get-new" href="#">Download Datasheet</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="/assets/images/product_detail/img-promo-nshield-solo-800x600.png" alt="images">
                    </div>
                </div>
            </div>

            <div class="row y-middle">
                <div class="col-lg-6 pl-50 md-pl-15">
                    <div class="sec-title3">
                        <!-- <span class="sub-title">~ <span class="title-upper">About Us</span> ~</span> -->
                        <h2 class="title title2 pb-25">nShield Solo Models</h2>
                        <p class="description text-justify pb-10">The nShield Solo series includes the new high-performance nShield Solo XC High, which offers superior asymmetric and symmetric performance and best-in-class elliptic curve cryptography (ECC) transaction rates.</p>
                        <!-- <ul class="btn-part">
                            <li><a class="readon2 get-new" href="#">Download Datasheet</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="/assets/images/product_detail/img-promo-2solos-800x600.png" alt="images">
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- About Section End -->


    <div class="rs-services style19 pt-100 md-pt-70 md-pb-70">
        <div class="container">
            <h2 class="title title2 text-center pb-25">nShield Solo Benefits</h2>
            <div class="row margin-0 hover-effect">
                <div class="col-lg-4 col-md-6 md-mb-30 padding-0">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="shape-part">
                                <img class="up-down-new" src="/assets/images/services/apps/1.png" alt="images">
                            </div>
                            <div class="icon-part">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Powerful Architecture</a></h3>
                                </div>
                                <p class="services-txt">Our Security World architecture integrates nShield HSMs into a unified ecosystem, delivering scalability, load balancing, and more.
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
                                <i class="fa fa-bolt"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Faster Data Processing</a></h3>
                                </div>
                                <p class="services-txt">nShield Solo HSMs are ideal for enterprise retail, IoT, and other environments where throughput is critical.</p>
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
                                <i class="fa fa-shield"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Protection of sensitive business and application logic</a></h3>
                                </div>
                                <p class="services-txt">Execute code within nShield boundaries, protecting your applications and the data they process.</p>
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
                        <p class="mb-20">Entrust has earned a broad set of certifications for nShield products. These certifications help our customers to demonstrate compliance while also giving them the assurance that their nShield HSMs meet stringent industry standards.</p>

                        <p class="mb-10"><strong>Safety and Environmental Standards Compliance</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>UL, CE, FCC, RCM, Canada ICES</li>
                                <li>RoHS2, WEEE</li>
                            </ul>                            
                        </div>
                        <p class="mb-10"><strong>Security Compliance</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>eIDAS and Common Criteria EAL4 + AVA_VAN.5 and ALC_FLR.2 certification against EN 419 221-5 Protection Profile, under the Dutch NSCIB scheme</li>
                                <li>Can form the basis of an EN 419 241-2 certified remote signing system for eIDAS.</li>
                                <li>Compliant with BSI AIS 31 for true and deterministic random number generation</li>
                                <li>ICP Brazil certification to NSC3 level</li>
                            </ul>                            
                        </div>

                        <p class="mb-10"><strong>Supported APIs</strong></p>
                        <div class="ml-2 mb-20">
                            <ul class="productdescription">
                                <li>PKCS#11, OpenSSL, Java (JCE), Microsoft CAPI and CNG</li>
                            </ul>                            
                        </div>

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
                        <p class="mb-20">nShield HSMs offers the majority of these cryptographic algorithms as part of the standard feature set. For organizations wishing to use ECC or South Korean algorithms, optional activation licenses are needed.</p>

                        <p class="mb-10"><strong>Supported Platforms</strong></p>
                        <p class="mb-20">Windows and Linux operating systems including distributions from RedHat, SUSE and major cloud service providers running as virtual machines or in containers.</p>
                        <p class="mb-20">Solo XC virtual environments supported including VMware ESX, Microsoft Hyper-V, Linux  KVM & Citrix XenServer</p>

                        <p class="mb-10"><strong>High Transaction Rates</strong></p>
                        <p class="mb-20">nShield HSMs boast high elliptic curve cryptography (ECC) and RSA transaction rates. ECC, one of the most efficient cryptographic algorithms, is particularly favored where low power consumption is crucial, such as applications running on small sensors or mobile devices.</p>

                        <img src="/assets/images/product_detail/nshield-solo-models-performance.jpeg">
                        
                    </div>
                </div>
                <div class="tab-pane fade container" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="content-block">
                        <h3>
                            Options and Accessories
                        </h3>

                        <p class="mb-10"><strong>Performance Ratings and Options</strong></p>
                        <p class="mb-20">We have a variety of nShield Solo models to meet your performance needs. You can select among the performance models shown in the Tech Specs tab and can also purchase in-field upgrades from lower XC performance models to higher XC models.</p>

                        <p class="mb-10"><strong>Software Options packs</strong></p>
                        <p class="mb-20">Entrust offer a range of software option packs which can be used in conjunction with your nShield HSMs. </p>

                        <p class="mb-10"><strong>nShield Monitor</strong></p>
                        <p class="mb-20">nShield Monitor is a monitoring platform that provides 24x7 visibility into the status of payShield and nShield HSMs. With this solution, security teams can efficiently inspect HSMs and find out immediately if any potential security, configuration or utilization issue may compromise their mission-critical infrastructure.</p>

                        <p class="mb-10"><strong>Remote Administration Kits</strong></p>
                        <p class="mb-20">nShield Remote Administration lets operators manage distributed nShield HSMs – including adding applications, upgrading firmware, checking status, re-booting and more – from their office locations, reducing travel and saving money. Remote Administration Kits contain the hardware and software needed to set up and use the tool. These kits are available for nShield Solo and nShield Connect HSMs.</p>

                        <p class="mb-10"><strong>CodeSafe</strong></p>
                        <p class="mb-20">CodeSafe is a powerful, secure environment that lets you execute applications within the secure boundaries of nShield HSMs. Sample applications include digital meters, authentication agents, digital signature agents and custom encryption processes. CodeSafe is available with FIPS 140-2 Level 3 certified nShield Solo and nShield Connect HSMs.</p>

                        <p class="mb-10"><strong>CipherTools</strong></p>
                        <p class="mb-20">CipherTools is a set of tutorials, reference documentation, sample programs and additional libraries. With this toolkit, developers can take full advantage of the advanced integration capabilities of nShield HSMs. In addition to offering support for standard APIs, the toolkit enables you to run custom applications with nShield HSMs. CipherTools is included free of charge in the standard Security World software ISO/DVD.</p>

                        <p class="mb-10"><strong>Elliptic Curve Cryptography (ECC) Activation</strong></p>
                        <p class="mb-20">The ECC activation license enables EC-DH, EC-DSA and EC-MQV to be used on an nShield HSMs.</p>

                        <p class="mb-10"><strong>KCDSA Activation</strong></p>
                        <p class="mb-20">With the KCDSA activation license, you can use the Korean Certificate-based Digital Signature Algorithm (KCSDA) as well as HAS-160, SEED and ARIA algorithms on an nShield HSMs.</p>

                        <p class="mb-10"><strong>Smart Card Reader Rackmount</strong></p>
                        <p class="mb-20">For organizations deploying one or more nShield Solo modules in a 19" rack, the optional nShield smart card reader rackmount provides a practical and clean solution for attaching card readers in the data center. The rackmount is 1U in height and can be equipped with up to four smart card readers, which come standard with nShield Solo cards. Each unit is packaged with three blanking plates to cover any unused slots.</p>

                        
                    </div>
                </div>
                <div class="tab-pane fade container" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="col-md-6">
                        <ul class="page-nav-vertical mb-50">
                            <li><a href="/assets/pdf/entrust-nshield-remote-administration-ds.pdf" target="_BLANK">nShield Remote Administration</a></li>
                            <li><a href="/assets/pdf/nshield-hsm-fips-common-criteria-certification-reference-rg.pdf" target="_BLANK">Entrust nShield HSM FIPS 140-2 and Common Criteria Security Certifications</a></li>
                            <li><a href="/assets/pdf/entrust-codesafe-ds.pdf" target="_BLANK">CodeSafe Datasheet</a></li>
                            <li><a href="/assets/pdf/entrust-nshield-monitor-ds.pdf" target="_BLANK">nShield Monitor Datasheet</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>



</div>
<!-- Main content End -->
@endsection
