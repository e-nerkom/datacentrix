@extends('layout/template')
@section('content')

<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-4">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">Product</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Services Start -->
    <div class="rs-services style20 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title4 text-center mb-50">
                <span class="sub-title new pb-10">MANAGED IT SERVICES</span>
                <h2 class="title title3">More than 30+ years we provide IT & Software Solution</h2>
                <p class="text-justify mt-4">Sektor layanan Arthatel memanfaatkan teknologi untuk meningkatkan sistem dan proses internal dalam bisnis Anda. Dengan menambahkan kemajuan teknologi seperti konektivitas khusus, cloud computing, data hosting dan banyak lagi, Arthatel membantu dalam menyatukan proses, sumber daya manusia, sistem dan faktor lainnya yang dapat mempengaruhi operasional bisnis Anda.</p>
                <p class="text-justify mt-4">Kami membantu Anda dalam mendesain ulang apapun yang tidak efisien, menciptakan model jaringan  baru dan memudahkan Anda untuk fokus pada bisnis utama sehingga usaha Anda dapat selalu relevan dengan pasar saat ini yang terus berkembang dan sangat kompetitif.</p>
                <p class="text-justify mt-4">Untuk semua kebutuhan TIK bisnis Anda, kami memiliki tim yang berpengalaman yang akan memastikan ekosistem TIK Anda berjalan seoptimal dan seefisien mungkin sesuai kebutuhan bisnis Anda.</p>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 md-mb-30">
                    <div class="services-item">
                        <div class="iconbox-area">
                            <div class="icon-part">
                                <a href="#"><img class="dance_hover" src="/assets/images/content/icon/1.png" alt="Images"></a>
                            </div>
                            <div class="services-content">
                                <h3 class="title"> <a href="services-single.html">nShield HSMs</a></h3>
                                <p class="services-txt"> We always provide people a
                                    complete solution focused of any business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 md-mb-30">
                    <div class="services-item">
                        <div class="iconbox-area">
                            <div class="icon-part">
                                <a href="#"><img class="dance_hover" src="/assets/images/content/icon/2.png" alt="Images"></a>
                            </div>
                            <div class="services-content">
                                <h3 class="title"> <a href="services-single.html">nShield Software</a></h3>
                                <p class="services-txt"> We always provide people a
                                    complete solution focused of any business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-30">
                    <div class="services-item">
                        <div class="iconbox-area">
                            <div class="icon-part">
                                <a href="#"><img class="dance_hover" src="/assets/images/content/icon/3.png" alt="Images"></a>
                            </div>
                            <div class="services-content">
                                <h3 class="title"> <a href="services-single.html">Management and Monitoring</a></h3>
                                <p class="services-txt"> We always provide people a
                                    complete solution focused of any business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Free Quote Section Start -->
    <div id="rs-freequote" class="rs-freequote style1 modify pt-80 pb-106 md-pt-72 md-pb-78">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 pl-65 md-pl-15">
                    <div id="form-messages" class="white-color"></div>
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
                            <div class="col-md-12">
                                <input type="text" name="subject" placeholder="Subject" required="">
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