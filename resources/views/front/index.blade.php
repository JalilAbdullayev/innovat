@extends('front.master')
@section('title', 'Ana Səhifə')
@section('content')
    <!-- rts banner top-area -->
    <div class="rts-banner-top-area pt--100 pt_sm--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- banner-top-five start -->
                    <div class="banner-top-five">
                        <div class="left-area">
                            <h1 class="title rts_hero__title">
                                {{ $settings->title }}
                            </h1>
                        </div>
                        <div class="right-area">
                            <a href="product-details-4.html" class="rts-read-more-circle-btn">
                                <i class="fa-solid fa-arrow-up-right"></i>
                                Learn More
                            </a>
                        </div>
                    </div>
                    <!-- banner-top-five end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner top-area end -->

    <!-- about area start -->
    <div class="about-area-one rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="thumbnail-about-five">
                        <img src="front/images/about/07.png" alt="about">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-right-inner-five rts-slide-up">
                        <div class="title-area-style-five-left">
                            <span class="pre">
                                Company story
                            </span>
                            <h2 class="title">Our Company Journey</h2>
                        </div>
                        <p class="disc-1">
                            Our values form the foundation of our work. Integrity, creativity, and attention to detail
                            drive everything we do. We approach each project with dedication, embracing challenges as
                            opportunities for innovation and excellence.
                        </p>
                        <p class="disc">
                            With years of experience in the industry, our team brings a diverse range of expertise to
                            the table. From residential to commercial, from urban planning to interior design
                        </p>
                        <div class="short-service-small">
                            <!-- single service area -->
                            <div class="single-service-small-check">
                                <i class="fa-light fa-plus"></i>
                                Architecture Design
                            </div>
                            <!-- single service area end -->
                            <!-- single service area -->
                            <div class="single-service-small-check">
                                <i class="fa-light fa-plus"></i>
                                Interior Design
                            </div>
                            <!-- single service area end -->
                            <!-- single service area -->
                            <div class="single-service-small-check">
                                <i class="fa-light fa-plus"></i>
                                Commercial Building
                            </div>
                            <!-- single service area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- servce area start -->
    <div class="service-area-start rts-service-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 rts-slide-up">
                    <div class="service-full-top-wrapper">
                        <!-- title-left -->
                        <div class="title-area-style-five-left">
                            <span class="pre">
                                Company story
                            </span>
                            <h2 class="title">Our Services</h2>
                        </div>
                        <a href="service-1.html" class="rts-read-more-circle-btn under-line">
                            <i class="fa-solid fa-arrow-up-right"></i>
                            <p>View All Services</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt--20 mt_sm--0 g-5 rts-slide-up">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single-service staert -->
                    <div class="single-service-style-five">
                        <div class="icon-area">
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47"
                                 fill="none">
                                <path
                                    d="M46.3116 39.6565C46.4289 39.6565 46.5442 39.6265 46.6467 39.5694C46.7492 39.5123 46.8354 39.4299 46.8971 39.3302C46.9588 39.2304 46.994 39.1165 46.9993 38.9993C47.0046 38.8821 46.9799 38.7655 46.9275 38.6605L45.5992 36.003C45.3906 35.5828 45.0685 35.2294 44.6694 34.9828C44.2703 34.7362 43.8101 34.6062 43.341 34.6077H39.1844C38.7153 34.6062 38.2551 34.7362 37.856 34.9828C37.4569 35.2294 37.1348 35.5828 36.9262 36.003L35.7879 38.2796H11.2121L10.0738 36.003C9.86535 35.5826 9.5433 35.2291 9.14416 34.9825C8.74502 34.7359 8.28476 34.606 7.81557 34.6077H3.659C3.18987 34.6062 2.72969 34.7362 2.33059 34.9828C1.93149 35.2294 1.6094 35.5828 1.4008 36.003L0.0724965 38.6605C0.0200945 38.7655 -0.00461605 38.8821 0.000709933 38.9993C0.00603592 39.1165 0.0412217 39.2304 0.102928 39.3302C0.164635 39.4299 0.250815 39.5123 0.35329 39.5694C0.455765 39.6265 0.571136 39.6565 0.688454 39.6565H6.25502L6.82875 40.804L6.25502 41.9514H0.688454C0.571136 41.9514 0.455765 41.9814 0.35329 42.0385C0.250815 42.0957 0.164635 42.178 0.102928 42.2778C0.0412217 42.3776 0.00603592 42.4915 0.000709933 42.6087C-0.00461605 42.7259 0.0200945 42.8425 0.0724965 42.9474L1.4008 45.605C1.6094 46.0252 1.93149 46.3786 2.33059 46.6252C2.72969 46.8718 3.18987 47.0017 3.659 47.0003H7.81557C8.28476 47.0019 8.74502 46.8721 9.14416 46.6255C9.5433 46.3788 9.86535 46.0253 10.0738 45.605L11.2121 43.3284H35.7879L36.9262 45.605C37.1347 46.0253 37.4567 46.3788 37.8559 46.6255C38.255 46.8721 38.7153 47.0019 39.1844 47.0003H43.341C43.8102 47.0019 44.2705 46.8721 44.6696 46.6255C45.0687 46.3788 45.3908 46.0253 45.5992 45.605L46.9275 42.9474C46.9799 42.8425 47.0046 42.7259 46.9993 42.6087C46.994 42.4915 46.9588 42.3776 46.8971 42.2778C46.8354 42.178 46.7492 42.0957 46.6467 42.0385C46.5442 41.9814 46.4289 41.9514 46.3116 41.9514H40.745L40.1713 40.804L40.745 39.6565H46.3116ZM39.7022 38.6605L38.7842 40.4965C38.7367 40.592 38.7119 40.6973 38.7119 40.804C38.7119 40.9107 38.7367 41.016 38.7842 41.1115L39.7022 42.9474C39.7592 43.062 39.8471 43.1583 39.9559 43.2256C40.0647 43.2929 40.1902 43.3285 40.3181 43.3284H45.1962L44.3701 44.989C44.2751 45.1804 44.1283 45.3414 43.9463 45.4535C43.7644 45.5656 43.5547 45.6245 43.341 45.6233H39.1844C38.9712 45.624 38.7621 45.5649 38.5807 45.4528C38.3993 45.3407 38.2529 45.18 38.1581 44.989L36.8298 42.3324C36.7728 42.2179 36.6849 42.1215 36.5761 42.0542C36.4673 41.9869 36.3418 41.9513 36.2139 41.9514H10.7861C10.6582 41.9513 10.5327 41.9869 10.4239 42.0542C10.3151 42.1215 10.2272 42.2179 10.1702 42.3324L8.84186 44.989C8.74708 45.18 8.60071 45.3407 8.41933 45.4528C8.23795 45.5649 8.0288 45.624 7.81557 45.6233H3.659C3.44578 45.624 3.23663 45.5649 3.05525 45.4528C2.87387 45.3407 2.7275 45.18 2.63271 44.989L1.80654 43.3284H6.68096C6.80891 43.3285 6.93435 43.2929 7.04317 43.2256C7.15198 43.1583 7.23986 43.062 7.29692 42.9474L8.21489 41.1115C8.26243 41.016 8.28717 40.9107 8.28717 40.804C8.28717 40.6973 8.26243 40.592 8.21489 40.4965L7.29692 38.6605C7.23986 38.546 7.15198 38.4497 7.04317 38.3824C6.93435 38.3151 6.80891 38.2795 6.68096 38.2796H1.80287L2.62904 36.619C2.7241 36.4274 2.87105 36.2664 3.05314 36.1542C3.23523 36.0421 3.44515 35.9833 3.659 35.9846H7.81557C8.0288 35.984 8.23795 36.0431 8.41933 36.1552C8.60071 36.2673 8.74708 36.428 8.84186 36.619L10.1702 39.2756C10.2272 39.3901 10.3151 39.4864 10.4239 39.5537C10.5327 39.621 10.6582 39.6566 10.7861 39.6565H36.2139C36.3418 39.6566 36.4673 39.621 36.5761 39.5537C36.6849 39.4864 36.7728 39.3901 36.8298 39.2756L38.1581 36.619C38.2529 36.428 38.3993 36.2673 38.5807 36.1552C38.7621 36.0431 38.9712 35.984 39.1844 35.9846H43.341C43.5542 35.984 43.7634 36.0431 43.9448 36.1552C44.1261 36.2673 44.2725 36.428 44.3673 36.619L45.1935 38.2796H40.319C40.1911 38.2795 40.0657 38.3151 39.9568 38.3824C39.848 38.4497 39.7601 38.546 39.7031 38.6605H39.7022Z"
                                    fill="#30373E"/>
                                <path
                                    d="M46.3116 3.67191H29.6614L23.8608 0.101929C23.7523 0.0352809 23.6274 0 23.5 0C23.3727 0 23.2478 0.0352809 23.1393 0.101929L17.3386 3.67191H6.88477V0.688512C6.88477 0.505916 6.81224 0.330799 6.68312 0.201685C6.55401 0.0725702 6.37889 3.44249e-05 6.1963 3.44249e-05H3.44239C2.52971 0.0010064 1.65469 0.363998 1.00933 1.00936C0.363963 1.65472 0.000971971 2.52974 0 3.44242V29.1456C0.000971971 30.0583 0.363963 30.9333 1.00933 31.5786C1.65469 32.224 2.52971 32.587 3.44239 32.588H46.3116C46.4942 32.588 46.6693 32.5154 46.7984 32.3863C46.9275 32.2572 47.0001 32.0821 47.0001 31.8995V4.36039C47.0001 4.1778 46.9275 4.00268 46.7984 3.87356C46.6693 3.74445 46.4942 3.67191 46.3116 3.67191ZM23.5 1.49724L34.7452 8.4169V10.4722L23.8608 3.77105C23.7523 3.70441 23.6274 3.66913 23.5 3.66913C23.3727 3.66913 23.2478 3.70441 23.1393 3.77105L12.2549 10.4722V8.4169L23.5 1.49724ZM34.7452 22.3526V23.7296H12.2549V22.3526H34.7452ZM14.0908 20.9756V10.9588L23.5 5.16912L32.9092 10.9588V20.9756H14.0908ZM1.37695 3.44242C1.37744 2.89478 1.5952 2.36972 1.98244 1.98248C2.36968 1.59524 2.89475 1.37748 3.44239 1.37699H5.50782V25.7032H3.44239C2.69713 25.7024 1.97196 25.9448 1.37695 26.3935V3.44242ZM45.6231 31.211H3.44239C2.8946 31.211 2.36925 30.9934 1.98191 30.6061C1.59456 30.2187 1.37695 29.6934 1.37695 29.1456C1.37695 28.5978 1.59456 28.0724 1.98191 27.6851C2.36925 27.2978 2.8946 27.0801 3.44239 27.0801H6.1963C6.37889 27.0801 6.55401 27.0076 6.68312 26.8785C6.81224 26.7494 6.88477 26.5743 6.88477 26.3917V5.04887H15.1006L11.2057 7.44569C11.1055 7.50739 11.0229 7.59368 10.9655 7.69635C10.9081 7.79902 10.878 7.91466 10.8779 8.03227V11.7042C10.8779 11.8267 10.9106 11.9469 10.9725 12.0526C11.0345 12.1583 11.1235 12.2455 11.2305 12.3053C11.3374 12.3651 11.4583 12.3952 11.5808 12.3927C11.7033 12.3901 11.8228 12.3549 11.9272 12.2907L12.7139 11.806V20.9756H11.5664C11.3838 20.9756 11.2087 21.0482 11.0796 21.1773C10.9505 21.3064 10.8779 21.4815 10.8779 21.6641V24.418C10.8779 24.6006 10.9505 24.7757 11.0796 24.9049C11.2087 25.034 11.3838 25.1065 11.5664 25.1065H35.4336C35.6162 25.1065 35.7914 25.034 35.9205 24.9049C36.0496 24.7757 36.1221 24.6006 36.1221 24.418V21.6641C36.1221 21.4815 36.0496 21.3064 35.9205 21.1773C35.7914 21.0482 35.6162 20.9756 35.4336 20.9756H34.2862V11.806L35.0729 12.2907C35.1772 12.3549 35.2968 12.3901 35.4193 12.3927C35.5417 12.3952 35.6627 12.3651 35.7696 12.3053C35.8765 12.2455 35.9656 12.1583 36.0275 12.0526C36.0895 11.9469 36.1222 11.8267 36.1221 11.7042V8.03227C36.1221 7.91466 36.0919 7.79902 36.0346 7.69635C35.9772 7.59368 35.8945 7.50739 35.7944 7.44569L31.8995 5.04887H45.6231V31.211Z"
                                    fill="#30373E"/>
                                <path
                                    d="M27.1719 10.488H19.8281C19.6455 10.488 19.4704 10.5606 19.3413 10.6897C19.2122 10.8188 19.1396 10.9939 19.1396 11.1765V18.5203C19.1396 18.7029 19.2122 18.878 19.3413 19.0071C19.4704 19.1362 19.6455 19.2088 19.8281 19.2088H27.1719C27.3545 19.2088 27.5296 19.1362 27.6587 19.0071C27.7878 18.878 27.8604 18.7029 27.8604 18.5203V11.1765C27.8604 10.9939 27.7878 10.8188 27.6587 10.6897C27.5296 10.5606 27.3545 10.488 27.1719 10.488ZM26.4834 14.1599H24.1885V11.865H26.4834V14.1599ZM22.8115 11.865V14.1599H20.5166V11.865H22.8115ZM20.5166 15.5369H22.8115V17.8318H20.5166V15.5369ZM24.1885 17.8318V15.5369H26.4834V17.8318H24.1885Z"
                                    fill="#30373E"/>
                            </svg>
                        </div>
                        <div class="body">
                            <a href="service-details.html">
                                <h6 class="title">Architectural Design</h6>
                            </a>
                            <p class="disc">
                                Space planning is a fundamental aspect off interior design.
                            </p>
                            <a href="service-details.html">Read More <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- single-service end -->
                </div>
            </div>
        </div>
    </div>
    <!-- servce area end -->

    <!-- our latest projects area start -->
    <div class="our-latest-project-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- title-left -->
                    <div class="title-area-style-five-center">
                        <span class="pre">
                            Feature Project
                        </span>
                        <h2 class="title">Our Latest Project</h2>
                    </div>
                    <!-- title mid text -->
                </div>
            </div>
        </div>
        <div class="container-full mt--50">
            <div class="row">
                <div class="col-gl-12">
                    <div class="project-area-swiper-five-wrapper">
                        <div class="swiper mySwiper-project-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- sigle projects area start -->
                                    <div class="signle-project-area-five">
                                        <a href="product-details-1.html" class="thumbnail">
                                            <img src="front/images/product/53.jpg" alt="product-area">
                                        </a>
                                        <div class="inner-content">
                                            <span class="tag">Architecture </span>
                                            <a href="product-details-1.html">
                                                <h3 class="title">Architecture & Imagination</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- sigle projects area end -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our latest projects area end -->

    <!-- our woring process area start -->
    <div class="our-working-process rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-process-stock-text">
                        <h2 class="stock-text-1 end">
                            OUR WORK PROCESS
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30 separetor-process-top">
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 pt--50 pt_sm--0 pt_sm--0">
                    <!-- single working process start -->
                    <div class="single-working-prcess-one active">
                        <div class="inner">
                            <span>01</span>
                            <h4 class="title">
                                Planning and Concept
                                Development
                            </h4>
                            <p class="disc">
                                This initial phase is crucial for setting the foundation of the design project.
                            </p>
                        </div>
                    </div>
                    <!-- single working process end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 pt--50 pt_sm--0 pt_sm--0">
                    <!-- single working process start -->
                    <div class="single-working-prcess-one two">
                        <div class="inner">
                            <span>02</span>
                            <h4 class="title">
                                Planning and Concept
                                Development
                            </h4>
                            <p class="disc">
                                This initial phase is crucial for setting the foundation of the design project.
                            </p>
                        </div>
                    </div>
                    <!-- single working process end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 pt--50 pt_sm--0 pt_sm--0">
                    <!-- single working process start -->
                    <div class="single-working-prcess-one three">
                        <div class="inner">
                            <span>03</span>
                            <h4 class="title">
                                Planning and Concept
                                Development
                            </h4>
                            <p class="disc">
                                This initial phase is crucial for setting the foundation of the design project.
                            </p>
                        </div>
                    </div>
                    <!-- single working process end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 pt--50 pt_sm--0 pt_sm--0">
                    <!-- single working process start -->
                    <div class="single-working-prcess-one four">
                        <div class="inner">
                            <span>04</span>
                            <h4 class="title">
                                Planning and Concept
                                Development
                            </h4>
                            <p class="disc">
                                This initial phase is crucial for setting the foundation of the design project.
                            </p>
                        </div>
                    </div>
                    <!-- single working process end -->
                </div>
            </div>
        </div>
    </div>
    <!-- our woring process area end -->
    <!-- rts cta area stat -->
    <div class="rts-cta-main-wrapper rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-center cta-wrapper-two">
                        <div class="pre-title-area">
                            <img src="front/images/about/02.png" alt="about">
                            <span class="pre-title">Work With Us</span>
                        </div>
                        <h2 class="title quote"><span>We are</span> excited to learn <br>
                            more about <span>your project</span></h2>

                        <a href="contact.html" class="rts-btn btn-border">Get A Quote <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cta area end -->
@endsection
