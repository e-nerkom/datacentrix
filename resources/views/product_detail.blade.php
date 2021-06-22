@extends('layout/template')
@section('content')

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

    <!-- Shop Single Page Start Here -->
    <div class="rs-shop single-product shop-rp pt-100 pb-100 md-pt-80 md-pb-30">
        <div class="container">

            <div class="tab-area">
                <ul class="nav nav-tabs">
                    <li><a class="active" href="#one" data-toggle="tab">Tech Specs</a></li>
                    <li><a href="#two" data-toggle="tab">Options and Accessories</a></li>
                    <li><a href="#three" data-toggle="tab">Related Resources</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="one">
                        <p class="dsc-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,</p>
                    </div><!-- #one -->

                    <div class="tab-pane" id="two">
                        <h4 class="tab-title">Additional information</h4>
                        <table>
                            <tbody class="table-box">
                                <tr>
                                    <th>color</th>
                                    <td>red, blue</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- #two -->

                    <div class="tab-pane" id="three">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="reviews-grid">
                                    <div class="top-area">
                                        <p>There are no reviews yet.</p>
                                        <h4 class="mb-0">Be the first to review “Air Freshener Electric”</h4>
                                    </div>

                                    <form class="comment-form" id="commentform">
                                        <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>

                                        <div class="placeholder-cntrl">
                                            <label>Name *</label>
                                            <input type="text" name="name" size="30" required>
                                        </div>
                                        <div class="placeholder-cntrl">
                                            <label>Email *</label>
                                            <input type="Email" name="email" size="30" required>
                                        </div>
                                        <div class="ratings mt-30">Your rating
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="placeholder-cntrl">
                                            <label>Your review *</label>
                                            <textarea required></textarea>
                                        </div>
                                        <button class="readon" type="submit">submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- #three -->
                </div>
            </div><!-- .tab-area -->

            
        </div>
    </div>

    
</div> 
<!-- Main content End -->
@endsection