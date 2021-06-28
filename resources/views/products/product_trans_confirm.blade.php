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
    <div id="rs-about" class="rs-about style8 pt-100 pb-100 md-pt-70 md-pb-40">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-12 pl-50 md-pl-15 order-last">
                    <div class="sec-title3">
                        <!-- <span class="sub-title">~ <span class="title-upper">About Us</span> ~</span> -->
                        <h2 class="title pb-25">MOBILE TRANSACTION AUTHENTICATION SIGNATURE (MTAS) DALAM SMARTPHONE ANDA</h2>
                        <p class="description text-justify pb-10">PayConfirm merupakan platform perangkat lunak yang menjalankan mobile transaction authentication signature (mTAS) yang bertujuan untuk mengotentikasi atau mengonfirmasi semua jenis operasi, termasuk transaksi atau e-dokumen, pada smartphone Anda.</p>
                        <p class="description text-justify pb-10">Kami memberikan solusi kepada pelanggan dengan memberikan tingkat keamanan yang tinggi dengan cara yang mudah, untuk melindungi transaksi mereka, melalui berbagai macam saluran digital, seperti Internet banking, mobile banking, CNP operations dan private banking.</p>
                        <p class="description text-justify pb-10">Tidak lagi menggunakan kartu, USB-tokens, OTP atau hardware lainnya. Tidak perlu bergantung pada operator selular atau SMS yang biasanya lambat terkirim.</p>
                        <p class="description text-justify pb-10">Tidak seperti OTP, mTAS yang dibuat melalui PayConfirm terikat pada detail pembayaran dan smartphone pengguna. Solusi ini menawarkan perlindungan dari ancaman keamanan paling umum di digital perbankan seperti penipuan pertukaran SIM, phishing, penggantian detail rekening bank dan ancaman keamanan lainnya. Teknologi kami sudah berhasil diadopsi dan digunakan oleh lebih dari 60 bank di seluruh dunia.</p>
                    </div>
                </div>
            </div>

            <!-- <div class="row y-middle pt-50">
                <div class="col-lg-6 pl-50 md-pl-15 order-last">
                    <div class="sec-title3">
                        <h2 class="title title2 pb-25">MOBILE TRANSACTION AUTHENTICATION SIGNATURE (MTAS) DALAM SMARTPHONE ANDA</h2>
                        <p class="description text-justify pb-10">PayConfirm merupakan platform perangkat lunak yang menjalankan mobile transaction authentication signature (mTAS) yang bertujuan untuk mengotentikasi atau mengonfirmasi semua jenis operasi, termasuk transaksi atau e-dokumen, pada smartphone Anda.</p>
                        <p class="description text-justify pb-10">Kami memberikan solusi kepada pelanggan dengan memberikan tingkat keamanan yang tinggi dengan cara yang mudah, untuk melindungi transaksi mereka, melalui berbagai macam saluran digital, seperti Internet banking, mobile banking, CNP operations dan private banking.</p>
                        <p class="description text-justify pb-10">Tidak lagi menggunakan kartu, USB-tokens, OTP atau hardware lainnya. Tidak perlu bergantung pada operator selular atau SMS yang biasanya lambat terkirim.</p>
                        <p class="description text-justify pb-10">Tidak seperti OTP, mTAS yang dibuat melalui PayConfirm terikat pada detail pembayaran dan smartphone pengguna. Solusi ini menawarkan perlindungan dari ancaman keamanan paling umum di digital perbankan seperti penipuan pertukaran SIM, phishing, penggantian detail rekening bank dan ancaman keamanan lainnya. Teknologi kami sudah berhasil diadopsi dan digunakan oleh lebih dari 60 bank di seluruh dunia.</p>
                    </div>
                </div>
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="/assets/images/product_detail/payconfirm.png" alt="images">
                    </div>
                </div>
            </div> -->

            

        </div>

    </div>
    <!-- About Section End -->

    <div class="rs-about style10 gray-bg5 pt-130 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title4 mb-30">
                        <!-- <span class="sub-title new pb-10">Mitra Solusi TI Pilihan Utama Anda</span> -->
                        <h2 class="title pb-20 lh-1">Secure Payment</h2>
                        <p class="margin-0 text-justify">mTAS dibuat berdasarkan empat acuan komponen: detail transaksi, waktu saat di-generate, fingerprint perangkat dan kunci pengguna</p>
                        <p class="mt-3 text-justify">Dua saluran komunikasi independen digunakan untuk mengaktifkan aplikasi PayConfirm di smartphone pengguna</p>
                        <p class="mt-3 text-justify">Kunci keamanan ada di perangkat pengguna dan disimpan dengan aman dalam bentuk ter-enkripsi.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="images-part">
                            <img src="/assets/images/product_detail/payconfirm.png" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="rs-about style10 pt-130 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="images-part">
                            <img src="/assets/images/product_detail/payconfirm.png" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title4 mb-30">
                        <!-- <span class="sub-title new pb-10">Mitra Solusi TI Pilihan Utama Anda</span> -->
                        <h2 class="title pb-20 lh-1">Transactions Without Rejection</h2>
                        <p class="margin-0 text-justify">Pengguna tidak hanya mengkonfirmasi rincian pembayaran, tetapi menandatanganinya secara digital dan akan diberitahu tentang status transaksi setelahnya</p>
                        <p class="mt-3 text-justify">TransConfirm menggunakan algoritma kriptografi asimetris, sehingga hanya pengguna yang dapat melakukan tanda tangan digital.</p>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>

    <div class="rs-about style10 gray-bg5 pt-130 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title4 mb-30">
                        <!-- <span class="sub-title new pb-10">Mitra Solusi TI Pilihan Utama Anda</span> -->
                        <h2 class="title pb-20 lh-1">Confirming All Types of Operation</h2>
                        <p class="margin-0 text-justify">No more OTP code and Push Notification.</p>
                        <p class="mt-3 text-justify">Trusted solution based on cryptography</p>
                        <p class="mt-3 text-justify">Quickly and Realtime notification in Smartphone.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="images-part">
                            <img src="/assets/images/product_detail/payconfirm.png" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="rs-about style10 gray-bg5 pt-130 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="images-part">
                            <img src="/assets/images/product_detail/payconfirm.png" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title4 mb-30">
                        <!-- <span class="sub-title new pb-10">Mitra Solusi TI Pilihan Utama Anda</span> -->
                        <h2 class="title pb-20 lh-1">Security and Fraud Protection.</h2>
                        <p class="margin-0 text-justify">Proteksi dari phishing atau pencurian akun, rekayasa, perpindahan data</p>
                        <p class="mt-3 text-justify">Menggunakan Teknik Device Scoring dan deteksi anomali</p>
                        <p class="mt-3 text-justify">Perlindungan dari intersepsi SMS dan SIM swap attack.</p>
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
