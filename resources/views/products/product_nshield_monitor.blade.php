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
                <h1 class="breadcrumbs-title white-color mb-0">Management and Monitoring</h1>
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
                        <h2 class="title title2 pb-25">Great HSM oversight with one window</h2>
                        <p class="description text-justify pb-10">nShield Monitor is a comprehensive HSM monitoring platform that enables operations teams to gain 24x7 visibility into the status of all their nShield HSMs, including those residing across distributed data centers. With this solution, security teams can efficiently inspect HSMs and find out immediately if any potential security, configuration or utilization issue may compromise their mission-critical infrastructure.</p>
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
            <h2 class="title title2 text-center pb-25">nShield Monitor Benefits</h2>
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
                                    <h3 class="title"><a href="#">Operation Costs Reduction</a></h3>
                                </div>
                                <p class="services-txt">Eliminate the costs associated with physically accessing HSMs to retrieve important data.
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
                                    <h3 class="title"><a href="#">Utilization Optimization</a></h3>
                                </div>
                                <p class="services-txt">Find trends in HSM performance and capacity to assist in optimizing deployment architecture.</p>
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
                                    <h3 class="title"><a href="#">Increased Responsiveness</a></h3>
                                </div>
                                <p class="services-txt">Equip administrators with the timely, targeted insights they need to proactively take corrective actions.</p>
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
                <p class="font-weight-bold text-left mb-1 mt-30">Central Monitoring Capabilities</p>
                <p class="text-justify">nShield Monitor refreshes utilization statistics for all HSMs every minute. The solution generates alerts based on thresholds you define. Choose from email, SNMP, syslog, or web interface as the delivery channel for any alerts. You define specific time periods for in-depth analysis, including last hour, 24 hours, 7 days, 30 days, or custom intervals. nShield Monitor reports on a range of attributes including:</p>
                <ul class="productdescription text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>Operational status</li>
                    <li>Physical security and any tamper attempts</li>
                    <li>Alarms and alerts</li>
                    <li>Utilization and capacity</li>
                    <li>Configuration changes with user tracking</li>
                </ul>

                <p class="font-weight-bold text-left mb-1">HSM Compatibility</p>
                <ul class="productdescription text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>nShield Edge, Solo, Solo+, Connect and Connect+ with Security World Software v11.72 and higher</li>
                    <li>nShield Solo XC and Connect XC with Security World Software v12.40 and higher</li>
                </ul>

                <p class="font-weight-bold text-left mb-1">Role-based Access Control</p>
                <p class="text-justify mb-1">nShield supports three distinct user roles to enhance security and establish clear separation of configuration and administration duties. These three roles are:</p>
                <ul class="productdescription text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>Administrator, manages deployment</li>
                    <li>Group Manager, controls monitoring of HSMs and groups of HSMs</li>
                    <li>Auditor, views data and reports</li>
                </ul>

                <p class="font-weight-bold text-left mb-1">Virtual Appliance Minimum Specification</p>
                <ul class="productdescription text-left regular2 pl-10 sm-pl-0 mb-4">
                    <li>2 CPUs with 2 cores each</li>
                    <li>8 GB RAM</li>
                    <li>Thin provisioned hard drives</li>
                    <li>Compatible with ESXi 5.1 and later (VM Version 9)</li>
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
                    <div class="container">
                        <div class="headline-section__header headline">
                        <h2>Tech Specs</h2>
                        </div>
                        <div class="headline-section__description">
                        <div style="text-align: left;">
                        <p><strong>Central Monitoring Capabilities</strong></p>
                        <p>nShield Monitor refreshes utilization statistics for all HSMs every minute. The solution generates alerts based on thresholds you define. Choose from email, SNMP, syslog, or web interface as the delivery channel for any alerts. You define specific time periods for in-depth analysis, including last hour, 24 hours, 7 days, 30 days, or custom intervals. nShield Monitor reports on a range of attributes including:</p>
                        <ul class=productdescription>
                        <li>Operational status</li>
                        <li>Physical security and any tamper attempts</li>
                        <li>Alarms and alerts</li>
                        <li>Utilization and capacity</li>
                        <li>Configuration changes with user tracking</li>
                        </ul>
                        <p><strong>HSM Compatibility</strong></p>
                        <ul style="text-align: left;" class=productdescription>
                        <li>nShield Edge, Solo, Solo+, Connect and Connect+ with Security World Software v11.72 and higher</li>
                        <li>nShield Solo XC and Connect XC with Security World Software v12.40 and higher</li>
                        </ul>
                        <p><strong>Role-based Access Control</strong></p>
                        <p>nShield supports three distinct user roles to enhance security and establish clear separation of configuration and administration duties. These three roles are:</p>
                        <ul class=productdescription>
                        <li>Administrator, manages deployment</li>
                        <li>Group Manager, controls monitoring of HSMs and groups of HSMs</li>
                        <li>Auditor, views data and reports</li>
                        </ul>
                        <p><strong>Virtual Appliance Minimum Specification</strong></p>
                        <ul class=productdescription>
                        <li>2 CPUs with 2 cores each</li>
                        <li>8 GB RAM</li>
                        <li>Thin provisioned hard drives</li>
                        <li>Compatible with ESXi 5.1 and later (VM Version 9)</li>
                        </ul>
                        </div>
                        </div>
                        <div class="background-section__content">
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
