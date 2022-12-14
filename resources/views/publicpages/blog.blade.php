@extends('layouts.public')

@php $page_title = "Blog" @endphp
@section('content')
     <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h2>Blog Grid</h2>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="500ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="cats">
                                            <a href="#">Technology</a>
                                        </div>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 05 Dec, 2020</li>
                                                <li>By <a href="#">Park Lee</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Lasting out end article demands own charmed</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="{{route('blog_detail', ['slug'])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="600ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="cats">
                                            <a href="#">Security</a>
                                        </div>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 26 Sep, 2020</li>
                                                <li>By <a href="#">Park Lee</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Surprise steepest wandered amounted of.</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="{{route('blog_detail', ['slug'])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="700ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="cats">
                                            <a href="#">Firewall</a>
                                        </div>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 18 Nov, 2020</li>
                                                <li>By <a href="#">Park Lee</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Old insipidity motionless continuing law partiality.</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="{{route('blog_detail', ['slug'])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="600ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="cats">
                                            <a href="#">Security</a>
                                        </div>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 30 Dec, 2020</li>
                                                <li>By <a href="#">John</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Inquietude simplicity compliment remarkably</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="{{route('blog_detail', ['slug'])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="700ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="cats">
                                            <a href="#">Firewall</a>
                                        </div>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 18 Nov, 2020</li>
                                                <li>By <a href="#">Park Lee</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Old insipidity motionless continuing law partiality.</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="{{route('blog_detail', ['slug'])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="800ms">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x600.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="cats">
                                            <a href="#">Security</a>
                                        </div>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> 30 Dec, 2020</li>
                                                <li>By <a href="#">John</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">Simplicity terminated compliment remarkably</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness.
                                        </p>
                                        <a class="btn circle btn-theme effect btn-md" href="{{route('blog_detail', ['slug'])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

@endsection