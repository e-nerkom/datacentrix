@extends('layout/template')
@section('content')

<style>

nav > .nav.nav-tabs{

border: none;
  color:#fff;
  background:#272e38;
  border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
border: none;
  padding: 18px 25px;
  color:#fff;
  background:#2d7a9e;
  border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
{
content: "";
position: relative;
bottom: -60px;
left: -10%;
border: 15px solid transparent;
border-top-color: #6ec1e6 ;
}
.tab-content{
background: #f5fbfd;
  line-height: 25px;
  border: 1px solid #ddd;
  border-top:5px solid #6ec1e6;
  border-bottom:none;
  padding:30px 25px 100px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
border: none;
  background: #6ec1e6;
  color:#fff;
  border-radius:0;
  transition:background 0.20s linear;
}
ul.productdescription{
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
                <h1 class="breadcrumbs-title white-color mb-0">nShield Connect HSMs</h1>
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
                        <h2 class="title title2 pb-25">nShield Connect HSMs</h2>
                        <p class="description text-justify pb-10">nShield Connect HSMs are certified hardware security appliances that deliver cryptographic services to a variety of applications across the network. nShield HSM appliances are hardened, tamper-resistant platforms that perform such functions as encryption, digital signing, and key generation and protection.</p>
                        <p class="description text-justify pb-30">With their comprehensive capabilities, these HSMs can support an extensive range of applications, including certificate authorities, code signing and more.</p>
                        <ul class="btn-part">
                            <li><a class="readon2 get-new" href="#">Download Datasheet</a></li>
                        </ul>
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

    <!-- Services Start -->
    <div class="rs-services style20 bg29 pt-100 pb-50 md-pt-70 md-pb-70" style="padding-bottom:100px">
        <div class="container">
            <div class="sec-title4 text-center mb-50">
                <!-- <span class="sub-title new pb-10">MANAGED IT SERVICES</span> -->
                <h2 class="title title3">Remote configuration eliminates costly trips to the data center</h2>
                <p class="text-justify mt-4">The latest nShield Connect XC models offer an optional serial port that allows enterprises to eliminate costly repeat trips to the data center. Remote Configuration capabilities include:</p>

                <ul class="listing-style text-left regular2 pl-10 sm-pl-0">
                    <li>Initiating and changing an HSM’s network settings, e.g. IP address</li>
                    <li>Supporting provider/tenant deployment models where the nShield HSM appliance can be easily configured by the provider before passing control of the HSM to a tenant. Separation of roles ensures the cryptographic key material is not exposed to the provider.</li>
                    <li>Purging key material and decommissioning the nShield HSM appliance at the end of a usage cycle in preparation for its next deployment.</li>
                </ul>                

                <p class="text-justify mt-4">Technicians simply need to rack and cable the nShield HSM appliance and connect a serial concentrator in the data center to prepare the nShield Connect XC for full remote configuration and administration. This reduces the need for trained resources in the data center and provides customers more efficiency and control over their HSMs.</p>
            </div>
        </div>
    </div>

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
                                <div class="services-title"><h3 class="title"><a href="services-single.html">Powerful Architecture</a></h3></div>
                                <p class="services-txt">Build and grow your HSM estate using Security World, Entrust's unified ecosystem that delivers scalability, seamless failover, and load balancing.
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
                                <div class="services-title"><h3 class="title"><a href="services-single.html">Faster Data Processing</a></h3></div>
                                <p class="services-txt">Get some of the highest cryptographic transaction rates in the industry. Ideal for environments where throughput is critical.</p>
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
                                <div class="services-title"><h3 class="title"><a href="services-single.html">Protection of sensitive business and application logic</a></h3></div>
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
                    <a class="nav-item nav-link active title" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tech Specs</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Options and Accessories</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Related Resources</a>
                </div>
            </nav>
        
            <div class="tab-content pb-100 px-3 px-sm-0" id="nav-tabContent">
            
                <div class="tab-pane fade show active container" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                    </p><p><strong>Certified Hardware Solutions</strong></p>
                    <p>Entrust has earned a broad set of certifications for nShield products. These certifications help our customers to demonstrate compliance while also giving them the assurance that their nShield HSMs meet stringent industry standards.</p>
                    <div style="margin-left: 20px;">
                    <p><strong>Security Compliance</strong></p>
                    <ul class="productdescription">
                    <li>FIPS 140-2 Level 2 and Level 3</li>
                    <li>USGv6 accreditation</li>
                    <li>eIDAS and Common Criteria EAL4 + AVA_VAN.5 and ALC_FLR.2 certification against EN 419 221-5 Protection Profile, under the Dutch NSCIB scheme
                    <ul class="productdescription">
                    <li>Can form the basis of an EN 419 241-2 certified remote signing system for eIDAS.</li>
                    <li>Compliant with BSI AIS 31 for true and deterministic random number generation</li>
                    </ul>
                    </li>
                    <li>Common Criteria EAL4+ (AVA_VAN.5) for nShield Connect+ models</li>
                    <li>Recognition of nShield Connect+ as a Qualified Signature Creation Device (QSCD)</li>
                    <li>ICP Brazil certification to NSC3 level</li>
                    </ul>
                    <p><strong>Safety and Environmental Standards Compliance</strong></p>
                    <ul class="productdescription">
                    <li>UL, CE, FCC, RCM, Canada ICES</li>
                    <li>RoHS2, WEEE</li>
                    </ul>
                    </div>
                    <p><strong>High Transaction Rates</strong></p>
                    <p>nShield HSMs boast high elliptic curve cryptography (ECC) and RSA transaction rates. ECC, one of the most efficient cryptographic algorithms, is particularly favored where low power consumption is crucial, such as applications running on small sensors or mobile devices.</p>
                    <div style="width: 100%; overflow-x: auto;">
                    <table>
                    <tbody>
                    <tr style="border: 1px solid;">
                    <th class="col-sm-3">nShield Connect Models</th>
                    <th class="col-sm-1">500+</th>
                    <th class="col-sm-1">XC Base</th>
                    <th class="col-sm-1">1500+</th>
                    <th class="col-sm-1">6000+</th>
                    <th class="col-sm-1">XC Mid</th>
                    <th class="col-sm-1">XC High</th>
                    </tr>
                    <tr>
                    <td colspan="7"><strong>RSA Signing Performance (tps) for NIST Recommended Key Lengths</strong></td>
                    </tr>
                    <tr>
                    <td class="col-sm-3">2048 bit</td>
                    <td class="col-sm-1">150</td>
                    <td class="col-sm-1">430</td>
                    <td class="col-sm-1">450</td>
                    <td class="col-sm-1">3000</td>
                    <td class="col-sm-1">3500</td>
                    <td class="col-sm-1">8600</td>
                    </tr>
                    <tr>
                    <td class="col-sm-3">4096 bit</td>
                    <td class="col-sm-1">80</td>
                    <td class="col-sm-1">100</td>
                    <td class="col-sm-1">190</td>
                    <td class="col-sm-1">500</td>
                    <td class="col-sm-1">850</td>
                    <td class="col-sm-1">2025</td>
                    </tr>
                    <tr>
                    <td colspan="7"><strong>ECC Prime Curve Signing Performance (tps) for NIST Recommended Key Lengths</strong></td>
                    </tr>
                    <tr>
                    <td class="col-sm-2">256 bit</td>
                    <td class="col-sm-1">540</td>
                    <td class="col-sm-1">680</td>
                    <td class="col-sm-1">1260</td>
                    <td class="col-sm-1">2400</td>
                    <td class="col-sm-1">7512<sup>1</sup></td>
                    <td class="col-sm-1">14400<sup>1</sup></td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                    <br>
                    <p><strong>Note 1: Performance indicated requires ECDSA fast RNG feature activation available free of charge on request from Entrust Support.</strong></p>
                    <p><strong>Wide Support for APIs, Cryptographic Algorithms and OSs</strong></p>
                    <div style="margin-left: 20px;">
                    <p><strong>Supported APIs</strong></p>
                    <ul class="productdescription">
                    <li>PKCS#11, OpenSSL, Java (JCE), Microsoft CAPI/ CNG and Web Services (requires Web Services Option Pack)</li>
                    </ul>
                    <p><strong>Supported Cryptographic Algorithms</strong></p>
                    <ul class="productdescription">
                    <li>Asymmetric public key algorithms: RSA, Diffie-Hellman, ECMQV, DSA, KCDSA, ECDSA, ECDH, Edwards (X25519, Ed25519ph)</li>
                    <li>Symmetric algorithms: AES, AES-GCM, ARIA, Camellia, CAST, RIPEMD160 HMAC, SEED, Triple DES</li>
                    <li>Hash/message digest: SHA-1, SHA-2 (224, 256, 384, 512 bit), HAS-160</li>
                    <li>Full Suite B implementation with fully licensed ECC including Brainpool and custom curves</li>
                    <li>Elliptic Curve Key Agreement (ECKA) available via Java API and nCore APIs</li>
                    <li>Elliptic Curve Integrated Encryption Scheme (ECIES) available via Java API, PKCS#11 and nCore APIs</li>
                    </ul>
                    <p>nShield HSMs offers support for the majority of these cryptographic algorithms as part of the standard feature set. For organizations wishing to use ECC or South Korean algorithms, optional activation licenses are needed.</p>
                    <p><strong>Supported Platforms</strong></p>
                    <p>Windows and Linux operating systems including distributions from RedHat, SUSE and major cloud service providers running as virtual machines or in containers.</p>
                    </div>
                    <p><strong>Reliability</strong></p>
                    <p>Calculated at 25°C operating temperature using Telcordia SR-332 “Reliability Prediction Procedure for Electronic Equipment" MTBF Standard</p>
                    <ul class="productdescription">
                    <li>Connect XC&nbsp;&nbsp;&nbsp;107,384 hours</li>
                    <li>Connect+&nbsp;&nbsp;&nbsp;99,284 hours</li>
                    </ul>
                    <p></p>
                    <div class="accordion-content-container">
                    <div></div>
                    </div>
                    </div>
                </div>
                <div class="tab-pane fade container" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="content-block">
                    <h3>
                    Options and Accessories
                    </h3>
                    <p>
                    </p><p><strong>Performance Ratings and Options</strong></p>
                    <p>To meet the performance needs of your application, Entrust provides a variety of nShield Connect models as shown in the Technical Specifications tab. You can select among the performance models shown, and can also purchase in-field upgrades on XC models from lower performance models to higher models.</p>
                    <p><strong>Client Licenses</strong></p>
                    <p>nShield Connect HSMs ship with three client licenses, each allowing a connection to an IP address. Additional licenses are available for purchase. The maximum number of client licenses supported varies by nShield Connect model as shown in the table below.</p>
                    <p>Max # client licenses per nShield Connect Model</p>
                    <p style="margin-left: 20px;">XC Base/500+&nbsp;&nbsp;&nbsp;10 licenses</p>
                    <p style="margin-left: 20px;">XC Mid/1500+&nbsp;&nbsp;&nbsp;20 licenses</p>
                    <p style="margin-left: 20px;">XC High/6000+&nbsp;&nbsp;&nbsp;Unlimited*</p>
                    <p style="margin-left: 20px;">Note* requires Enterprise Client License activation</p>
                    <br>
                    <p><strong>Software Options Pack</strong></p>
                    <p>Entrust offer a range of software option packs which can be used in conjunction with your nShield HSMs. </p>
                    <p><a href="/digital-security/hsm/products/nshield-software/software-option-packs">Learn More</a></p>
                    <p><strong>nShield Monitor</strong></p>
                    <p>nShield Monitor is a monitoring platform that provides 24x7 visibility into the status of nShield HSMs. With this solution, security teams can efficiently inspect HSMs and find out immediately if any potential security, configuration or utilization issue may compromise their mission-critical infrastructure.</p>
                    <p><strong>Remote Administration Kits</strong></p>
                    <p>nShield Remote Administration lets operators manage distributed nShield HSMs—including adding applications, upgrading firmware, checking status, re-booting and more—from their office locations, reducing travel and saving money. Remote Administration Kits contain the hardware and software needed to set up and use the tool. These kits are available for nShield Solo and nShield Connect HSMs.</p>
                    <p><strong>CodeSafe</strong></p>
                    <p>CodeSafe is a powerful, secure environment that lets you execute applications within the secure boundaries of nShield HSMs. Applications include cryptography and high value business logic associated with banking, smart metering, authentication agents, digital signature agents and custom encryption processes.&nbsp;CodeSafe is available with FIPS 140-2 Level 3 certified nShield Solo and nShield Connect HSMs.</p>
                    <p><strong>CipherTools</strong></p>
                    <p>The CipherTools is a set of tutorials, reference documentation, sample programs and additional libraries. With this toolkit, developers can take full advantage of the advanced integration capabilities of nShield HSMs. In addition to offering support for standard APIs, the toolkit enables you to run custom applications with nShield HSMs. CipherTools Developer Toolkit is included free of charge in the standard Security World software ISO/DVD.<span style="font-size: 13px;"></span></p>
                    <p><strong>nToken</strong></p>
                    <p>Security teams that want to strongly authenticate their nShield Connect HSMs clients can use nTokens PCIe cards to do hardware-based host identification and verification.</p>
                    <p><strong>Elliptic Curve Cryptography (ECC) Activation</strong></p>
                    <p>The ECC activation license enables EC-DH, EC-DSA and EC-MQV to be used on an nShield HSMs.</p>
                    <p><strong>KCDSA Activation</strong></p>
                    <p>With the KCDSA activation license, you can use the Korean Certificate-based Digital Signature Algorithm (KCSDA) as well as HAS-160, SEED and ARIA algorithms on an nShield HSMs.</p>
                    <p><strong>Slide Rails</strong></p>
                    <p>Entrust offers optional slide rails that let users mount nShield Connect in a 19" rack without a shelf. Entrust recommends that customers use these slide rails exclusively as parts from other manufacturers may not be compatible.</p>
                    <p><strong>Keyboard</strong></p>
                    <p>Many functions of nShield Connect HSMs can easily be executed using the touch wheel at the front of the unit. Entrust offers an optional USB keyboard for even greater ease of use.</p>
                    <p><strong>Field Replaceable Parts</strong></p>
                    nShield Connectfeatures parts that operators can replace in the field, with minimal downtime. These parts include dual, hot-swap power supplies and field-replaceable fan tray (requires nShield Connect to be put into standby).
                    <p></p>
                    <div class="accordion-content-container">
                    <div></div>
                    </div>
                    </div>
                </div>
                <div class="tab-pane fade container" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>            
            </div>            
        
        </div>
        
    </div>
    

    
</div> 
<!-- Main content End -->
@endsection