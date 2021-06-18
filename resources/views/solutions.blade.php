@extends('layout/template')
@section('content')

<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-2">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">Solusi</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services style1 modify2 pt-100 pb-84 md-pt-80 md-pb-64">
        <div class="container">
            <div class="sec-title4 text-center mb-50">
                <span class="sub-title new pb-10">Solusi IT yang aman untuk peningkatan operasional</span>
                <h3 class="title4" style="line-height:40px">Tingkatkan usaha Anda dan perkenankan kami mengelola ekosistem Teknologi Informasi (TI) Anda</h3>
                <p class="text-justify mt-4">Data Centrix dan mitra bekerjasama untuk menghadirkan teknologi paling terbaru dan mutakhir kepada pelanggan kami. Kami menyediakan solusi yang ramah pengguna, aman dan komprehensif yang akan menyederhanakan aktifitas operasional sehari-hari dan meningkatkan produktivitas Anda. Kami ingin Anda fokus pada bisnis utama sementara kami mengelola jaringan, layanan TI dan memastikan keamanan terbaik.</p>
                <p class="text-justify mt-4">Data Centrix menawarkan solusi TI yang spesifik untuk beragam industri dan layanan terkelola tambahan sesuai dengan kebutuhan spesifik yang diperlukan pelanggan. Bersama dengan Thales eSecurity dan Entrust kami mampu memberikan teknologi Perlindungan Data dan Infrastruktur Keamanan Terpadu yang paling canggih saat ini untuk pelanggan kami yang bergerak dalam bisnis keuangan, ecommerce, dan perbankan. Bagi penyedia jasa ritel dan perhotelan, kami dapat merancang, menjalankan, dan mendukung infrastuktur Teknologi Informasi dan Komunikasi (TIK) terpadu yang akan membantu Anda meningkatkan efisiensi serta mengembangkan bisnis Anda. </p>
                <p class="text-justify mt-4">Bermitralah dengan Data Centrix hari ini untuk memastikan bisnis Anda memiliki efisiensi dan nilai yang maksimal melalui solusil TI yang optimal dan aman.</p>

            </div>
            <div class="row gutter-16">
                <div class="col-lg-4 col-sm-6 mb-16">
                    <div class="service-wrap">
                        <div class="icon-part">
                            <img src="assets/images/services/icons/modify/1.png" alt="">
                        </div>
                        <div class="content-part">
                            <h5 class="title"><a href="services-single.html">Jaringan</a></h5>
                            <div class="desc">We always provide people a complete solution focused of any business.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-16">
                    <div class="service-wrap">
                        <div class="icon-part">
                            <img src="assets/images/services/icons/modify/2.png" alt="">
                        </div>
                        <div class="content-part">
                            <h5 class="title"><a href="services-single.html">Managed Services</a></h5>
                            <div class="desc">We always provide people a complete solution focused of any business.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-16">
                    <div class="service-wrap">
                        <div class="icon-part">
                            <img src="assets/images/services/icons/modify/3.png" alt="">
                        </div>
                        <div class="content-part">
                            <h5 class="title"><a href="services-single.html">Internet</a></h5>
                            <div class="desc">We always provide people a complete solution focused of any business.</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Cta Section Start -->
    <div class="rs-cta bg21 pt-90 pb-100 md-pt-68 md-pb-80">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title modify white">Any plan to start a project</div>
                <h2 class="title3 white-color">Our Experts always ready to work <br> with you.</h2>
                <div class="btn-part">
                    <a class="readon banner-style" href="contact.html">Get started</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Section End -->

    <!-- Free Quote Section Start -->
    <div id="rs-freequote" class="rs-freequote style3 pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row md-col-padding">
                <div class="col-lg-5 custom1 pr-0">
                    <div class="img-part"></div>
                </div>
                <div class="col-lg-7 custom2 pl-0">
                    <div id="form-messages"></div>
                    <form id="contact-form" class="quote-form" method="post" action="mailer.php">
                        <div class="sec-title mb-53">
                            <div class="sub-title white-color">Let's Talk</div>
                            <h2 class="title white-color mb-0">Request a Free Quote</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Name" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="E-mail" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="Phone Number" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="website" placeholder="Your Website" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="readon modify">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Free Quote Section End -->
</div> 
<!-- Main content End -->
    
@endsection