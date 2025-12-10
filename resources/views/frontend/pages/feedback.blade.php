@extends('frontend.layouts.frontend')

@section('title', 'Feedback')

@push('frontend-styles')
    <style>
        /* ================= BIOMED REVIEW SECTION ================= */

        .biomed-review-section {
            background: #006A9E1A;
            border-bottom: 30px solid #006A9E1A;
            box-shadow: 0px 0px 20px #00000040;
            margin-top: 40px;

        }

        .review-heading {
            font-size: 50px;
            font-family: Arial;
            font-weight: 700;
            color: #000000;
            line-height: 140%;
            text-align: start;
        }

        .review-desc {
            font-family: Arial;
            font-weight: 400;
            color: #000000;
            line-height: 160%;
            font-size: 20px;
        }

        /* Buttons */


        /* Primary Button */
        .btn-primary-custom,
        .btn-outline-custom {
            display: flex;
            justify-content: center;
            align-items: center;
            /* text vertically center */
            border-radius: 10px;
            font-weight: 400;
            text-decoration: none;
            font-size: 20px;
            height: 43px;
            line-height: 100%;
        }

        /* Primary Button */
        .btn-primary-custom {
            max-width: 288px;
            width: 100%;
            background: #0168A4;
            color: #fff;
            box-shadow: 0px 0px 4px #00000040;
            transition: all 0.4s ease-in-out;

        }

        /* Outline Button */
        .btn-outline-custom {
            max-width: 160px;
            width: 100%;
            background: #0168A4;
            color: #fff;
            box-shadow: 0px 0px 4px #00000040;
            transition: all 0.4s ease-in-out;


        }

        .btn-outline-custom:hover,
        .btn-primary-custom:hover {
            background: #015789;
            color: #fff;
            transform: scale(1.04)
        }


        /* Right Image */
        .review-img {
            width: 532px;
            height: 425.5999px;
            object-fit: cover;
            border-radius: 10px;
        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 992px) {
            .review-heading {
                font-size: 28px;
            }

            .review-img {
                width: 100%;
                height: auto;
            }
        }

        @media(max-width: 576px) {
            .review-btn {
                width: 100%;
                text-align: center;
            }
        }

        .bio-section {
            width: 100%;
        }

        /* Logo Image */
        .bio-img {
            width: 226px;
            height: 184px;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            object-fit: cover;
        }

        /* Blue Box */
        .bio-box {
            background: #0071A8;
            max-width: 1112px;
            height: 184px;
            padding: 25px;
            color: white;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            position: relative;
        }

        .bio-heading {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .bio-desc {
            font-size: 15px;
            line-height: 1.4;
            max-width: 90%;
        }

        /* Button */
        .bio-btn {
            position: absolute;
            right: 20px;
            bottom: 20px;
            background: #ffffff;
            color: #0071A8;
            padding: 10px 22px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0px 3px 6px #00000020;
            transition: 0.2s ease-in-out;
        }

        /* ============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   📱 Responsive Breakpoints
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ============================ */

        /* Tablet (md) */
        @media (max-width: 992px) {
            .bio-box {
                max-width: 100%;
                height: auto;
                padding: 20px;
            }

            .bio-img {
                height: 170px;
            }
        }

        /* Mobile (sm) */
        @media (max-width: 768px) {
            .bio-wrapper {
                text-align: center;
            }

            .bio-img {
                width: 100%;
                height: auto;
                border-radius: 20px 20px 0 0;
            }

            .bio-box {
                border-radius: 0 0 20px 20px;
                height: auto;
                text-align: left;
            }

            .bio-btn {
                position: static;
                margin-top: 15px;
                display: inline-block;
            }
        }

        /* Extra Small (xs) */
        @media (max-width: 480px) {
            .bio-heading {
                font-size: 20px;
            }

            .bio-desc {
                font-size: 14px;
            }

            .bio-btn {
                padding: 8px 18px;
            }
        }


        .bio-btn:hover {
            transform: scale(1.05);
        }


        /* Section Heading */
        .customer-heading {
            font-size: 50px;
            font-weight: 700;
            color: #000000;
            font-family: Arial;
            line-height: 120%;
        }

        .customer-heading span {
            color: #0071A8;
        }

        .customer-desc {
            font-size: 20px;
            font-weight: 400;
            max-width: 950px;
            font-family: Arial;
            line-height: 160%;
            margin: auto;
            color: #00000080;
        }

        .category-btn-wrapper {
            max-width: 1196px;
            /* same as cards row width */
            margin: 0 auto;
            /* center container */
        }

        /* Buttons */
        .cust-btn {
            /* border: 1px solid #0071A8; */
            background: transparent;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            border: none;
            max-width: 200px;
            height: 54px;
            font-size: 20px;
            font-family: Inter;
            line-height: 100%;
            color: #000000;
        }

        .active-btn {
            background: #E5F0F5;
            box-shadow: 0px 4px 4px #00000040;
            border: none;
            color: #0071A8;
            max-width: 200px;
            height: 54px;
            padding: 0px 22px;
            border-radius: 10px;


        }

        /* Review Cards */
        .review-card {
            width: 315px;
            height: 374px;
            background: #006A9E1A;
            /* border-radius: 12px; */
            padding: 20px;
            /* overflow-y: auto; */
            box-shadow: 0px 0px 20px #00000040;
        }

        .review-scroll {
            max-height: 256px;
            /* 👈 scrollbar ki height center me fix */
            overflow-y: auto;
            margin: 20px 0;
            /* padding: 5px; */
        }

        /* -------- Scrollbar Styling -------- */
        .review-scroll::-webkit-scrollbar {
            width: 16px;
        }

        .review-scroll::-webkit-scrollbar-thumb {
            background-color: #0071A8;
            border-radius: 6px;
        }

        .review-scroll::-webkit-scrollbar-thumb:hover {
            background-color: #005f87;
        }

        .review-scroll::-webkit-scrollbar-track {
            background: transparent;
        }

        .review-scroll {
            scrollbar-color: #0071A8 transparent;
        }






        .comments-box {
            max-height: 254px;
            overflow-y: auto;
            margin: 20px 0;
        }

        /* -------- Scrollbar Styling -------- */
        .comments-box::-webkit-scrollbar {
            width: 16px;
        }

        .comments-box::-webkit-scrollbar-thumb {
            background-color: #0071A8;
            border-radius: 6px;
        }

        .comments-box::-webkit-scrollbar-thumb:hover {
            background-color: #005f87;
        }

        .comments-box::-webkit-scrollbar-track {
            background: transparent;
        }

        .comments-box {
            scrollbar-color: #0071A8 transparent;
        }








        /* Stars */
        .stars i {
            color: #FFC107;
            font-size: 20px;
            margin-right: 3px;
        }

        .end {
            color: #CACDD8 !important;
        }

        /* Text */
        .review-text {
            font-size: 20px;
            font-weight: 400;
            font-family: Arial;
            line-height: 160%;
            color: #00000080;
        }

        .client-name {
            font-size: 16px;
            font-weight: 700;
            line-height: 160%;

            margin-top: 20px;
            color: #202020;
        }

        /* Responsive Fix */
        @media (max-width: 768px) {
            .customer-heading {
                font-size: 26px;
            }

            .review-card {
                width: 100%;
                max-width: 330px;
                height: auto;
                /* padding: 18px; */
            }
        }


        .rate-box {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .rate-title {
            font-size: 24px;
            font-weight: 700;
            font-family: Inter;
            line-height: 140%;
            margin: 0;
            color: #403F3F;
        }

        .rate-stars i {
            color: #CACDD8;
            font-size: 40px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }


        /* =========================== */
        .reviewSwiper {
            width: 1100px;
            padding: 200px 0 80px;
        }

        .tooltip-slide {
            width: 106px !important;
            height: 96px;
            border-radius: 34px;
            position: relative;
        }

        .tooltip-slide img {
            width: 100%;
            height: 100%;
            border-radius: 34px;
            object-fit: cover;
            filter: brightness(40%);
            transition: .3s;
        }

        .swiper-slide-active img {
            transform: scale(1.1);
            filter: brightness(100%);
        }

        /* Tooltip */
        .tooltip-box {
            position: absolute;
            bottom: 150%;
            left: 50%;
            transform: translateX(-50%);
            width: 420px;
            padding: 14px;
            background: #000;
            color: #fff;
            opacity: 0;
            visibility: hidden;
            transition: .3s;
            border-radius: 12px;
        }

        .tooltip-box::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
            border-top: 12px solid #000;
        }

        /* Tooltip only show on center slide */
        .swiper-slide-active .tooltip-box {
            opacity: 1;
            visibility: visible;
            bottom: 120%;
        }
    </style>
@endpush



@section('frontend-content')


    <section class="hero-detail-section">
        <div class="container py-5 text-center text-white">

            <h1 class="hero-title mb-3"><span>Title For </span> Reviews Page </h1>

            <p class="hero-description mx-auto mb-4">
                Discover the comprehensive range of specialized biomedical services we offer, designed to support your
                operational needs and technological advancement.
            </p>
            {{-- 
            <div class="container py-5 text-center text-white">
                <div class="simple-breadcrumb-container text-start mx-auto">
                    <div class="simple-breadcrumb">

                        <a href="/" class="breadcrumb-link">Home</a>

                        <span class="breadcrumb-separator">|</span>

                        <span class="breadcrumb-active">Blog’s Main Page</span>
                    </div>
                </div>

            </div> --}}

        </div>
    </section>


    <section class="biomed-review-section py-5">
        <div class="container">
            <div class="row  g-4">

                <!-- LEFT COLUMN -->
                <div class="col-lg-6">

                    <h2 class="review-heading mb-3">
                        Mr Biomed Tech Reviews.
                        What It’s Like To Work With Us
                    </h2>

                    <p class="review-desc mb-4">
                        We take pride in delivering high-quality medical equipment and technical
                        services to hospitals, clinics, and healthcare professionals. Our mission is to
                        provide reliable, innovative, and long-lasting solutions that help improve
                        patient care and hospital performance.
                    </p>

                    <div class="d-flex gap-4 mt-5 ">
                        <a href="#" class=" btn-primary-custom">Request a Quote Today!</a>
                        <a href="#" class=" btn-outline-custom">Reviews</a>
                    </div>

                </div>

                <!-- RIGHT COLUMN -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('frontend/images/feedback/feedback-img.png') }}" class="review-img"
                        alt="Biomed Review Image">

                </div>

            </div>
        </div>
    </section>
    <section class="bio-section container my-5">
        <div class="container">
            <div class="d-flex  justify-content-center align-items-center">

                <!-- Left Image -->
                <img src="{{ asset('frontend/images/feedback/feedback-logo.png') }}" alt="Bio Image" class="bio-img">

                <!-- Blue Box -->
                <div class="bio-box position-relative">
                    <h3 class="bio-heading">Expert Biomedical Care for Your Equipment</h3>

                    <p class="bio-desc">
                        We provide high-quality biomedical services to ensure your medical equipment
                        remains reliable and fully operational at all times.
                    </p>

                    <!-- Button bottom-right -->
                    <a href="#" class="bio-btn">Get My Free Proposal</a>
                </div>

            </div>
        </div>
    </section>

    <section class="customer-section  my-5">



        <!-- Heading -->
        <h2 class="customer-heading text-center">
            Hear From 1,100 <span>Happy Customers</span>
        </h2>

        <!-- Description -->
        <p class="customer-desc text-center">
            Our customers share their experience of working with our professional Biomedical services. Our customers share
            their experience of working with our

        </p>

        <!-- Category Buttons -->


        <!-- Review Cards -->
        <div class="container">

            <div class="d-flex justify-content-between flex-wrap mt-4 w-100 category-btn-wrapper">
                <button class="cust-btn active-btn">Customer Service</button>
                <button class="cust-btn">Customer Service</button>
                <button class="cust-btn">Customer Service</button>
                <button class="cust-btn">Customer Service</button>
                <button class="cust-btn">Customer Service</button>
                <button class="cust-btn">Customer Service</button>
                <button class="cust-btn">Customer Service</button>


            </div>
            <div class="row justify-content-center mt-5 g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>

                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>
                </div>
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>

                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>
                </div>
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>

                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>
                </div>
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>

                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="review-card">

                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star end"></i>
                        </div>

                        <!-- Scrollable Middle Area -->
                        <div class="review-scroll">
                            <p class="review-text">
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                Amazing customer experience! Their quick support and technical knowledge
                                made our workflow smoother.
                                .
                            </p>
                        </div>

                        <h5 class="client-name"> John Anderson</h5>

                    </div>
                </div>

            </div>
            <div class="pagination">
                <a href="#" class="page-link">&laquo;</a>
                <a href="#" class="page-link">1</a>
                <a href="#" class="page-link active">2</a>
                <a href="#" class="page-link">3</a>

                <span class="ellipsis">---</span>

                <a href="#" class="page-link">15</a>
                <a href="#" class="page-link">&raquo;</a>
            </div>
        </div>
    </section>

    {{-- ===================== feedback section ======================== --}}

    <section class="comment-section py-5">
        <div class="container">
            <div class="row g-4">

                <!-- ================= LEFT COLUMN ================= -->
                <div class="col-lg-6 col-md-6">

                    <h3 class="comment-heading mb-4">Leave a Feedback</h3>

                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control comment-input" placeholder="Enter Name">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control comment-input" placeholder="Enter Email">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control comment-textarea" rows="5" placeholder="Write your comment"></textarea>
                        </div>
                        <div class="rate-box">
                            <h4 class="rate-title">Give The Rate!</h4>

                            <div class="rate-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>

                        <button class="btn submitt-btn mt-4">Submit</button>
                    </form>

                </div>

                <!-- ================= RIGHT COLUMN ================= -->
                <div class="col-lg-6 col-md-6">

                    <h3 class="comment-heading mb-3">Feedbacks [1]</h3>

                    <!-- Outer Box -->
                    <div class="comments-box">

                        <!-- Inner Comment -->
                        <div class="single-comment">
                            <h5 class="comment-name">Danial</h5>
                            <p class="comment-by">By test</p>
                        </div>
                        <div class="single-comment">
                            <h5 class="comment-name">Danial</h5>
                            <p class="comment-by">By test</p>
                        </div>
                        <div class="single-comment">
                            <h5 class="comment-name">Danial</h5>
                            <p class="comment-by">By test</p>
                        </div>
                        <div class="single-comment">
                            <h5 class="comment-name">Danial</h5>
                            <p class="comment-by">By test</p>
                        </div>
                        <div class="single-comment">
                            <h5 class="comment-name">Danial</h5>
                            <p class="comment-by">By test</p>
                        </div>
                        <div class="single-comment">
                            <h5 class="comment-name">Danial</h5>
                            <p class="comment-by">By test</p>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>



    {{-- ===== about banner ======== --}}

    <section class="brand-s">
        <div class="brand-slider containe">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo1.png') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo2.png') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo3.png') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo4.png') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo5.jpg') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo6.jpg') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo7.png') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo8.png') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo9.png') }}"></div>
                    <div class="swiper-slide"><img src="{{ asset('frontend/images/rental/brand-logo10.png') }}"></div>

                </div>
            </div>
        </div>
    </section>


    <section>
        <h2 class="review-heading">Our Users Are <span>Happy And Healthy</span></h2>

        <div class="swiper reviewSwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide tooltip-slide">
                    <img src="{{ asset('frontend/images/hero-img-1.jpg') }}" alt="">
                    <div class="tooltip-box">
                        <div class="stars">
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                        </div>
                        <p>Pharmacy Store is my go-to.</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide tooltip-slide">
                    <img src="{{ asset('frontend/images/hero-img-4.jpg') }}">
                    <div class="tooltip-box">
                        <div class="stars">
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                        </div>
                        <p>Great service.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide tooltip-slide">
                    <img src="{{ asset('frontend/images/hero-img-3.jpg') }}">
                    <div class="tooltip-box">
                        <div class="stars">
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                        </div>
                        <p>Good products.</p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide tooltip-slide">
                    <img src="{{ asset('frontend/images/hero-img-2.jpg') }}">
                    <div class="tooltip-box">
                        <div class="stars">
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                        </div>
                        <p>Reliable quality.</p>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide tooltip-slide">
                    <img src="{{ asset('frontend/images/hero-img-1.jpg') }}">
                    <div class="tooltip-box">
                        <div class="stars">
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                        </div>
                        <p>Affordable prices.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@push('frontend-scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".reviewSwiper", {
            slidesPerView: 6,
            spaceBetween: 40,
            centeredSlides: true,
            loop: true,
            speed: 1500,

            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
                reverseDirection: true, // Always right → left
            },

            on: {
                click(swiper, event) {
                    swiper.slideTo(swiper.clickedIndex);
                }
            }
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 6,
            spaceBetween: 50,
            loop: true,
            speed: 3000, // continuous smooth speed
            autoplay: {
                delay: 0, // no pause
                disableOnInteraction: false
            },
            allowTouchMove: true,

            breakpoints: {
                320: {
                    slidesPerView: 2
                },
                480: {
                    slidesPerView: 3
                },
                768: {
                    slidesPerView: 4
                },
                1024: {
                    slidesPerView: 6
                }
            }
        });

        // Hover Pause
        const swiperEl = document.querySelector(".mySwiper");
        swiperEl.addEventListener("mouseenter", () => swiper.autoplay.stop());
        swiperEl.addEventListener("mouseleave", () => swiper.autoplay.start());
    </script>
@endpush
