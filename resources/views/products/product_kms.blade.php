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
                <h1 class="breadcrumbs-title white-color mb-0">Key Management Software</h1>
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
                        <h2 class="mb-20">Key Management Software</h2>
                        <p class="text-justify mb-10">Key Management Software offers the industry leading enterprise key management solution enabling organizations to centrally manage encryption keys, provide granular access control and configure security policies. Key Management Software is the central management point for the Key Management Data Security Platform. It manages key lifecycle tasks including generation, rotation, destruction, import and export, provides role-based access control to keys and policies, supports robust auditing and reporting, and offers developer friendly REST API.</p>
                        <p class="text-justify mb-10">Key Management Software is available in both virtual and physical appliances that are FIPS 140-2 compliant for securely storing keys with a highest root of trust. These appliances can be deployed on-premises in physical or virtualized infrastructures and in public cloud environments to eciently address compliance requirements, regulatory mandates and industry best practices for data security. With a unified management console, it makes it easy to set policies, discover and classify data, and protect sensitive data wherever it resides using the Key Management Data Security Platform products.</p>
                        <p class="text-justify  mb-10"></p>
                    </div>
                    
                </div>
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="images-part">
                            <img src="/assets/images/product_detail/kms.png" alt="Images">
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
                            <img src="/assets/images/product_detail/kms.png" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title4 mb-30">
                        <!-- <span class="sub-title new pb-10">About Us</span> -->
                        <h2 class="mb-20">Benefits</h2>
                        <h5 class="mb-10">Simplified Management</h5>
                        <p class="text-justify mb-10">Key Management Software provides a unified management console that enables you to discover and classify sensitive data, and protect data using integrated set of nChiper Data Protection connectors across on-premises data stores and multi-cloud deployments. It offers advanced self-service licensing for improved visibility and control of licenses.</p>
                        <h5 class="mb-10">Cloud Friendly Deployment</h5>
                        <p class="text-justify mb-10">It offers users with additional hosting options, and can run as a native virtual machine on AWS, Microsoft Azure, Google Cloud, VMware, Microsoft HyperV, and more. Additionally, native support of Key Management Cloud Key Manager on Key Management Software streamlines key management across multiple cloud infrastructures and SaaS applications.</p>
                        <h5 class="mb-10">Flexible Form Factors</h5>
                        <p class="text-justify mb-10">It is available in both virtual and physical form factors and FIPS 140-2 levels. Flexible deployment options can easily scale to rovide key management at remote facilities or in cloud infrastructures.</p>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div>

    <div class="rs-about style10 pt-130 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pr-70 md-pr-15 md-mb-50">
                    <div class="sec-title4 mb-30">
                        <!-- <span class="sub-title new pb-10">About Us</span> -->
                        <h2 class="mb-20">Features</h2>
                        <h5 class="mb-10">Centralized Key Lifecycle Management</h5>
                        <p class="text-justify mb-10">Key Management Software provides a unified management console that enables you to discover and classify sensitive data, and protect data using integrated set of nChiper Data Protection connectors across on-premises data stores and multi-cloud deployments. It offers advanced self-service licensing for improved visibility and control of licenses.</p>
                        <h5 class="mb-10">Unified Management Console</h5>
                        <p class="text-justify mb-10">It offrs users with additional hosting options, and an run as a native virtual machine. Additionally, native support of Key Management Cloud Key Manager on Key Management Manager streamlines key management across multiple cloud infrastructures and SaaS applications.</p>
                        <h5 class="mb-10">Developer Friendly REST APIs</h5>
                        <p class="text-justify mb-10">Offers new REST interfaces in addition to KMIP and NAE-XML APIs, for developers to simplify deployment of applications integrated with key management capabilities and automate testing and development of administrative operations.</p>
                    </div>
                    
                </div>
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="images-part">
                            <img src="/assets/images/product_detail/kms.png" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- <div class="rs-about style10 gray-bg5 pt-130 pb-100 md-pt-70 md-pb-70">
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
                        <span class="sub-title new pb-10">About Us</span>
                        <h5 class="mb-20">MOBILE TRANSACTION AUTHENTICATION SIGNATURE (MTAS)<br> IN A SMARTPHONE</h5>
                        
                        <p class="text-justify mb-10">Unlike OTP, mTAS created with PayConfirm is bound to the payment’s details and user’s smartphone. This solution offers protection from the most common security threats in digital banking such as SIM swap fraud, phishing, bank account details replacement and other security threats.</p>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div> -->

    


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

    <div class="rs-shop single-product shop-rp pt-100 md-pt-80 md-pb-30">
        <div class="col-xs-12">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active title" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                        role="tab" aria-controls="nav-home" aria-selected="true">KMS Our Minimum Recommendations</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Our Minimum Hardware Recommendations</a>
                </div>
            </nav>

            <div class="tab-content pb-100 px-3 px-sm-0" id="nav-tabContent">

                <div class="tab-pane fade show active container" id="nav-home" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <div class="content-block">
                        <h3>
                        Key Management Software Our Minimum Recommendations Physical Appliance
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
                                    padding: 20px 0px 20px 0px;
                                    vertical-align: bottom;
                                }

                            </style>
                        </p>
                        <div style="width: 100%; overflow-x: auto;">
                            <table>
                                <tbody>
                                    <tr style="border: 1px solid;">
                                        <th class="col-sm-1">Specifications</th>
                                        <th class="col-sm-2">Detail</th>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="7"><strong>RSA Signing Performance (tps) for NIST Recommended Key
                                                Lengths</strong></td>
                                    </tr> -->
                                    <tr>
                                        <td class="col-sm-1">Max Keys</td>
                                        <td class="col-sm-2">1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Max Concurrent Sessions</td>
                                        <td class="col-sm-2">1000</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Redundant hot-swap HDs and Power</td>
                                        <td class="col-sm-2">No</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">FIPS 140-2 Certification</td>
                                        <td class="col-sm-2">Integrates with nCipher Shield</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">HSM Management</td>
                                        <td class="col-sm-2">Yes</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Authentication</td>
                                        <td class="col-sm-2">Local User, LDAP and Active Directory</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Auditing and Logging</td>
                                        <td class="col-sm-2">- Signed secure logs/syslogs <br>
                                        - Automatic log rotation <br>
                                        - Secured encryption and integrity checks <br>
                                        - Backup and restore <br>
                                        - Extensive Statistics on key management and Connectors</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Network Management</td>
                                        <td class="col-sm-2">- SNMP v1, v2c and v3 <br>
                                        - NTP, URL health check</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">API's Supported</td>
                                        <td class="col-sm-2">- REST <br>
                                        - KMIP 1.1 <br>
                                        - PKCS#11 <br>
                                        - JCE, .NET, MS-CAPI, MS CNG, NAE-XML</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade container" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="content-block">
                        <h3>
                        Our Minimum Hardware Recommendations Physical Appliance
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
                                    padding: 20px 0px 20px 0px;
                                    vertical-align: bottom;
                                }

                            </style>
                        </p>
                        <div style="width: 100%; overflow-x: auto;">
                            <table>
                                <tbody>
                                    <tr style="border: 1px solid;">
                                        <th class="col-sm-1">Specifications</th>
                                        <th class="col-sm-2">Detail</th>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="7"><strong>RSA Signing Performance (tps) for NIST Recommended Key
                                                Lengths</strong></td>
                                    </tr> -->
                                    <tr>
                                        <td class="col-sm-1">Dimensions</td>
                                        <td class="col-sm-2">19.0"(W) x 21"(D) x 1.75"(H)</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Weight</td>
                                        <td class="col-sm-2">12.7 Kgs. (28 lbs.)</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Processor</td>
                                        <td class="col-sm-2">Intel Xeon E3-1275v5</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Network Interface Card (NIC) Options</td>
                                        <td class="col-sm-2">4x1GB interfaces <br>
                                        2x1GB / 2x10GB optional NICs <br>
                                        NIC bonding support</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Hard Drive</td>
                                        <td class="col-sm-2">1 X 2TB SATA SE (spinning Disk)</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Motherboard</td>
                                        <td class="col-sm-2">AIC AntliaAIC Antlia</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Average Power</td>
                                        <td class="col-sm-2">0.7A @ 120V 84W</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Maximum Power</td>
                                        <td class="col-sm-2">100W</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Voltage</td>
                                        <td class="col-sm-2">100 – 240V 50-60 Hz</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">Operating Ambient Temperature</td>
                                        <td class="col-sm-2">0 to 35 degree C (32 to 95 degree F)</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-1">System Requirements</td>
                                        <td class="col-sm-2">- HD: 100GB <br>
                                        - RAM: 4-8 GB <br>
                                        - NICs: 1 -2 <br>
                                        - CPUs: 2 or more</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>



</div>
<!-- Main content End -->
@endsection
