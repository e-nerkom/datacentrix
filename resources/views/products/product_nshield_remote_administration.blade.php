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
                <h1 class="breadcrumbs-title white-color mb-0">nShield Remote Administration</h1>
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
                        <h2 class="title title2 pb-25">Control your HSMs from anywhere</h2>
                        <p class="description text-justify pb-10">nShield HSMs often run in physically secure, lights-out data centers in locations far from the people who manage them. nShield Remote Administration lets you manage your HSMs – including adding applications, upgrading firmware, and checking status – wherever and whenever you choose. This means less travel to data centers, helping you cut costs and optimize your resources.</p>
                        <p class="description text-justify pb-30"></p>
                        <!-- <ul class="btn-part">
                            <li><a class="readon2 get-new" href="#">Download Datasheet</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="/assets/images/product_detail/img-promo-kit-800x600.png" alt="images">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- About Section End -->

    <div class="rs-services style19 pt-100 md-pt-70 md-pb-70">
        <div class="container">
            <h2 class="title title2 text-center pb-25">nShield Remote Administration Benefits</h2>
            <div class="row margin-0 hover-effect">
                <div class="col-lg-4 col-md-6 md-mb-30 padding-0">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="shape-part">
                                <img class="up-down-new" src="/assets/images/services/apps/1.png" alt="images">
                            </div>
                            <div class="icon-part">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="services-content">
                                <div class="services-title">
                                    <h3 class="title"><a href="#">Cost Reduction</a></h3>
                                </div>
                                <p class="services-txt">Eliminate visits to data centers for HSM management, saving time, money, and staff downtime.
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
                                    <h3 class="title"><a href="#">Greater Flexibility</a></h3>
                                </div>
                                <p class="services-txt">Administer your distantly located nShield HSMs from wherever you choose, 24/7.</p>
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
                                    <h3 class="title"><a href="#">More Control</a></h3>
                                </div>
                                <p class="services-txt">The remote presentation of nShield smart cards lets you upgrade firmware, check HSM status, run utilities, and more.</p>
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
                <p class="font-weight-bold text-left mb-1 mt-30">nShield Remote Administration Compatibility and Prerequisites</p>
                <ul class="productdescription text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>nShield Solo PCIe and Connect HSMs</li>
                    <li>nShield Solo+, Solo XC, Connect+ and Connect XC with Security World software v12.40 and higher</li>
                    <li>Remote Administration Client software is compatible with Microsoft Windows, Linux and OS X</li>
                    <li>nShield v12.00 and above software and 2.61.2 and above firmware.</li>
                    <li>Customer-supplied LAN or VPN and remote access solution.</li>
                </ul>

                <p class="font-weight-bold text-left mb-1">HSM Compatibility</p>
                <ul class="productdescription text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>nShield Edge, Solo, Solo+, Connect and Connect+ with Security World Software v11.72 and higher</li>
                    <li>nShield Solo XC and Connect XC with Security World Software v12.40 and higher</li>
                </ul>

                <p class="font-weight-bold text-left mb-1">Hypervisor Compatibility</p>
                <p class="text-justify mb-1">The OVA can be installed on the following virtual platforms:</p>
                <ul class="productdescription text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>vSphere ESXi 6.0, ESXi 6.5</li>
                    <li>VMware Workstation 12, 14</li>
                    <li>VMware Fusion 10</li>
                    <li>Oracle VirtualBox 6.0</li>
                </ul>

                <p class="font-weight-bold text-left mb-1">Hyper-V image can be installed on the following virtual platforms:</p>
                <ul class="productdescription text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>Microsoft Hyper-V, Azur</li>
                </ul>

                <p class="font-weight-bold text-left mb-1">Remote Administration Kits</p>
                <p class="text-justify mb-1">Remote Administration Kits contain the elements that enable Remote Administration on nShield HSMs. The kits contain one or more Trusted Verification Devices (TVDs) (secure USB-connected smart card readers), Remote Administration Cards (smart cards), and Remote Administration Client software and a license. Kits are sized and priced by tiers based on the number of HSMs in the estate.</p>
                <p class="text-left">
                <img src="/assets/images/product_detail/nshield-remote-administration-kits.jpg" alt="images">
                </p>
                

                <p class="font-weight-bold text-left mb-1">FIPS certifications</p>
                <p class="text-justify mb-1">Both the firmware supporting Remote Administration and the Remote Administration Cards are FIPS 140-2 Level 3 Certified.</p>

            </div>
        </div>
    </div>


</div>
<!-- Main content End -->
@endsection
