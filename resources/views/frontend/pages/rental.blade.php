@extends('frontend.layouts.frontend')

@section('title', 'Rental')

@push('frontend-styles')
    <style>
        .equipment-section {
            padding: 60px 0;
            font-family: 'Inter', sans-serif;
            z-index: 2;
        }

        /* LEFT COLUMN */
        .rental-main-heading {
            font-size: 32px;
            font-weight: 600;
            color: #000;
            margin-bottom: 15px;
            width: 100%;
            max-width: 570px;
            /* height: 90px; */
            line-height: 140%;
        }

        .rental-main-heading span {
            color: #016B9F;
        }

        .rental-main-desc {
            font-size: 16px;
            color: #444;
            line-height: 1.6;
            margin-bottom: 25px;
            width: 100%;
            max-width: 408px;
            /* height: 79px; */
            margin-bottom: 20px;
        }

        .rental-sub-heading {

            margin-top: 122px;
            font-size: 24px;
            font-weight: 600;
            color: #0168A4;
            line-height: 100%;
            font-family: Inter, sans-serif;
        }

        .equip-list {
            margin-top: 30px;

        }

        .equip-list li {
            /* padding-left: 18px; */
            color: #000000;
            font-family: Arial;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            /* margin-top: 20px; */
            margin-bottom: 15px;
        }

        /* RIGHT COLUMN */
        .img-box {
            width: 508px;
            height: 301px;
            background: #0970A2;
            border-radius: 34px;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .img-box img {
            width: 508px;
            height: 280px;
            border-radius: 15px;
            object-fit: cover;
            border: 3px solid #0970A2;
        }

        .why-heading {
            margin-top: 30px;
            font-size: 24px;
            font-weight: 600;
            color: #0168A4;
            line-height: 100%;
            font-family: Inter, sans-serif;
        }

        .why-list {
            /* padding-left: 18px; */
            margin-top: 20px;

            width: 100%;
            max-width: 350px;
        }

        .why-list li {
            color: #000000;
            font-family: Arial;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            margin-bottom: 15px;
        }

        .mmx-left {
            margin-left: 18%;

        }

        /* RESPONSIVE */
        @media(max-width: 991px) {
            .img-box {
                width: 100%;
                height: auto;
            }

            .img-box img {
                width: 100%;
                height: auto;
            }
        }

        @media(max-width:767px) {
            .mmx-left {
                margin-left: 0%;
            }

            .rental-products-section {
                padding-top: 0px !important;
            }
        }


        /* =============== rental product css ================== */
        .rental-products-section {
            z-index: 2;
        }

        /* MAIN TITLE */
        .main-title {
            font-size: 48px;
            font-weight: 700;
            font-family: Arial, sans-serif;
            line-height: 140%;
        }

        .main-title span {
            color: #0071A8;
        }

        /* PRODUCT NAME */
        .product-name {
            font-size: 40px;
            font-weight: 600;
            font-family: Inter, sans-serif;
            line-height: 140%;
        }

        .product-name span {
            color: #0071A8;

        }

        /* DESCRIPTION */
        .product-desc {
            font-size: 20px;
            line-height: 1.6;
            color: #000000;
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            max-width: 693px;
            /* height: 79px; */
            font-weight: 400;
            line-height: 160%;
            margin-left: 0;
        }

        /* BUTTON – GET SERVICE */
        .btn-wrraper {
            margin-top: 50px
        }

        .btn-service {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 25px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            overflow: hidden;
            z-index: 0;

            background: #0168A4;
            color: #FFFFFF;
            box-shadow: 0px 4px 10px #00000040;
            font-weight: 700;
            font-family: Inter, sans-serif;
            font-size: 20px;
            line-height: 1;
            transition: color 0.8s ease-in-out;
        }

        .btn-service>* {
            position: relative;
            z-index: 3;
        }

        .btn-service .bi {
            font-size: 18px;
            transition: color 0.8s ease, transform 0.8s ease;
        }

        .btn-service::after {
            content: "";
            position: absolute;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100%;
            background: #FFFFFF;

            z-index: 2;
            transition: right 0.8s cubic-bezier(.2, .9, .2, 1);
            pointer-events: none;
        }

        .btn-service:hover::after {
            right: 0;
        }

        .btn-service:hover {
            color: #000000;
        }

        .btn-service:hover .bi {
            color: #000000;
            transform: translateX(-2px);
        }

        .btn-service .btn-label {
            transition: color 0.8s ease-in-out;
        }

        .btn-service:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(1, 104, 164, 0.3);
        }



        .btn-call {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 15px;

            width: 100%;
            max-width: 152px;
            height: 43px;

            padding-left: 32px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            overflow: hidden;

            background: #0168A4;
            color: #FFFFFF;
            box-shadow: 0px 4px 4px #00000040;
            font-weight: 700;
            font-family: Inter, sans-serif;
            font-size: 20px;
            line-height: 1;
            transition: color 0.8s ease-in-out;
        }

        .btn-call>* {
            position: relative;
            z-index: 3;
        }

        .btn-call .bi {
            font-size: 18px;
            transition: color 0.4s ease, transform 0.25s ease-in-out;
        }

        .btn-call::after {
            content: "";
            position: absolute;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100%;
            background: #FFFFFF;
            z-index: 2;
            transition: right 0.7s cubic-bezier(.2, .9, .2, 1);
            pointer-events: none;
        }

        /* HOVER: slide overlay */
        .btn-call:hover::after {
            right: 0;
        }

        /* TEXT + ICON changes to black */
        .btn-call:hover {
            color: #000000;
        }

        .btn-call:hover .bi {
            color: #000000;
            transform: translateX(-2px);
        }

        /* Text transition */
        .btn-call .btn-label {
            transition: color 0.4s ease-in-out;
        }


        /* RIGHT SIDE IMAGE */
        .img-wrapper {
            width: 100%;
            max-width: 450px;
            margin: auto;
        }

        .rental-img {
            width: 407px;
            height: 535px;
            border-radius: 15px;
            border: 5px solid #0071A8;
            box-shadow: 0px 0px 20px #0071A8;
            object-fit: cover;
            display: block;
            margin: 10px;
        }

        /* OVERLAY BUTTON ON IMAGE */
        .btn-overlay {
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            background: #E8141480;
            color: #fff;
            border: 1px solid #0071A8;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

            font-size: 36px;
            font-weight: 700;
            font-family: Inter, sans-serif;
            width: 297px;
            height: 51px;
            line-height: 160%;
            /* box-shadow: 0px 0px 20px #0071A8; */
            transition: all 0.4s ease;
        }

        .btn-overlay:hover {
            background: #41040480;

        }

        /* ============= pagination =================== */

        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 70px;
            /* margin-right: 130px; */
        }

        .page-link {
            color: #A2A6B0;
            display: flex;
            /* text center */
            align-items: center;
            /* vertical center */
            justify-content: center;
            /* horizontal center */
            height: 46px;
            width: 46px;
            padding: 0;
            text-decoration: none;
            transition: background-color 0.3s;
            border: 2px solid #A2A6B0;
            margin: 0 4px;
            border-radius: 50%;
        }


        .page-link.active {
            background-color: #B7E9FF;
            color: #333;
            border: 1px solid #B7E9FF;
        }

        .page-link:hover:not(.active) {
            background-color: #0071A8;
            color: #FFFFFF;
        }

        .page-link:first-child,
        .page-link:last-child {
            font-weight: bold;
        }

        .ellipsis {
            color: #555;
            padding: 8px 16px;
            margin: 0 4px;
            align-self: center;
        }

        /* =============== four-column-section ======================= */

        /*
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     * Background Color Calculation:
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     * #D9D9D938 is an RGBA value. The '38' is the alpha (opacity) channel in hex.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     * This translates to a light grey color with low opacity.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     */
        .four-column-section {
            background-color: #D9D9D938;
            padding: 40px 20px;
            /* height: 100%; */
            /* height: 358px; */
        }



        .icon-wrapper {
            margin-bottom: 15px;
            text-align: center;
        }

        .icon-wrapper i {
            color: #046DA0;
            font-size: 50px;
            display: block;
            margin: 0 auto;
            text-align: center;

        }

        .title {
            font-size: 22px;
            font-weight: 700;
            color: #000000;
            margin-top: 0;
            margin-bottom: 10px;
            line-height: 100%;
            font-family: Inter, sans-serif;
            text-align: center;

        }

        .description {
            font-size: 14px;
            color: #000000;
            line-height: 100%;
            font-weight: 400;
            font-family: Inter, sans-serif;
            text-align: center;
            margin-top: 20px;
            width: 100%;
            max-width: 263px;
        }

        .four-column-desc {
            font-size: 48px;
            font-weight: 700;
            color: #0D0D0D;
            margin-top: 0;
            margin-bottom: 30px;
            line-height: 140%;
            font-family: Inter, sans-serif;
            text-align: center;

        }

        .four-column-desc span {
            color: #046DA0;
        }


        .img-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 50px;
        }

        .img-dots .dot {
            width: 12px;
            height: 12px;
            background: #ccc;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            transition: 0.3s;
        }

        .img-dots .dot.active {
            background: #046DA0;
            transform: scale(1.2);
        }
    </style>
@endpush

@section('frontend-content')


    <section class="hero-detail-section">
        <div class="container py-5 text-center text-white">

            <h1 class="hero-title mb-3 fade-right">Rental <span>Services Detail page</span> </h1>
            <p class="hero-description mx-auto mb-4 fade-left">
                Discover the comprehensive range of specialized biomedical services we offer, designed to support your
                operational needs and technological advancement.
            </p>

            <div class="container py-5 text-center text-white">
                <div class="simple-breadcrumb-container text-start mx-auto">
                    <div class="simple-breadcrumb">

                        <a href="/" class="breadcrumb-link">Home</a>

                        <span class="breadcrumb-separator">|</span>

                        <span class="breadcrumb-active"> Rental Services Detail Page</span>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="hero-circles-section position-relative overflow-hidden">

        <div class="circle-one"></div>
        <div class="circle-two"></div>


        <section class="equipment-section">
            <div class="container">
                <div class="row ">

                    <!-- LEFT COLUMN -->
                    <div class="col-lg-6 left-col">

                        <h2 class="rental-main-heading">
                            MEDICAL EQUIPMENT AND FURNITURE, <span>SINCE 2002</span>
                        </h2>

                        <p class="rental-main-desc">
                            We have been providing high-quality medical equipment and furniture for hospitals,
                            clinics, and home healthcare for over two decades. Our products are trusted, durable,
                            and certified for safe usage in medical environments.
                        </p>

                        <h3 class="rental-sub-heading">Available Equipment For Rent</h3>

                        <ul class="equip-list">
                            <li>Hospital Beds</li>
                            <li>Ventilators</li>
                            <li>Wheelchairs</li>
                            <li>Suction Machines</li>
                            <li>Oxygen Concentrators</li>
                            <li>Cardiac Monitors</li>
                            <li>Infusion Pumps</li>
                            <li>Patient Stretchers</li>
                        </ul>

                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6 right-col">

                        <!-- Image Outer Box -->
                        <div class="img-box">
                            <img src="{{ asset('frontend/images/rental/rental-img.jpg') }}" alt="Medical Equipment 1"
                                class="img-fluid  ">
                        </div>

                        <div class="d-flex flex-column justify-content-center mmx-left">
                            <h3 class="why-heading">Why Rent From Shine Care ?</h3>

                            <ul class="why-list">
                                <li>Mr. Biomed rents various types of medical equipment to both medical facilities and home
                                    healthcare.</li>
                                <li>We provide certified and well-maintained devices meeting all safety standards.</li>
                                <li>24/7 customer support for all rental equipment and emergency needs.</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </section>



        <section class="rental-products-section py-5">
            <div class="container">
                <h2 class="main-title text-center mb-5 fade-left">RENTAL <span>PRODUCTS</span></h2>

                <div class="row justify-content-center g-5">
                    <div class="col-lg-6 mb-4">

                        <h3 class="product-name">Product <span>Name Here</span> </h3>

                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse
                            potenti. Integer euismod libero at magna finibus, a pretium
                            ligula iaculis. Aenean faucibus varius velit in commodo. Sed
                            elementum vehicula erat, in feugiat mauris. Duis nec lorem sed
                            sapien aliquam molestie non nec ipsum. Phasellus eu faucibus
                            justo, vitae tincidunt sem.
                        </p>
                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse vestibulum quam velit a orci.a
                            orci.



                        </p>
                        <!-- BUTTONS -->
                        <div class="d-flex gap-3  btn-wrraper">
                            <button class="btn-service">
                                <i class="bi bi-gear"></i>
                                <span class="btn-label">Get Service</span>
                            </button>


                            <button class="btn-call">
                                <i class="bi bi-telephone"></i>
                                <span class="btn-label">Call Us</span>

                            </button>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <div class="product-section">

                            <div class="img-wrapper position-relative">
                                <img src="{{ asset('frontend/images/rental/product-img.jpg') }}"
                                    class="img-fluid rental-img mainProductImg">

                                <button class="btn-overlay">Get For Rent</button>
                            </div>

                            <div class="img-dots mt-3 text-center">
                                <span class="dot active"
                                    data-img="{{ asset('frontend/images/rental/rental-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <h3 class="product-name">Product <span>Name Here</span> </h3>

                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse
                            potenti. Integer euismod libero at magna finibus, a pretium
                            ligula iaculis. Aenean faucibus varius velit in commodo. Sed
                            elementum vehicula erat, in feugiat mauris. Duis nec lorem sed
                            sapien aliquam molestie non nec ipsum. Phasellus eu faucibus
                            justo, vitae tincidunt sem.
                        </p>
                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse vestibulum quam velit a orci.a
                            orci.



                        </p>
                        <!-- BUTTONS -->
                        <div class="d-flex gap-3  btn-wrraper">
                            <button class="btn-service">
                                <i class="bi bi-gear"></i>
                                <span class="btn-label">Get Service</span>
                            </button>


                            <button class="btn-call">
                                <i class="bi bi-telephone"></i>
                                <span class="btn-label">Call Us</span>

                            </button>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <div class="product-section">

                            <div class="img-wrapper position-relative">
                                <img src="{{ asset('frontend/images/rental/product-img.jpg') }}"
                                    class="img-fluid rental-img mainProductImg">

                                <button class="btn-overlay">Get For Rent</button>
                            </div>

                            <div class="img-dots mt-3 text-center">
                                <span class="dot active"
                                    data-img="{{ asset('frontend/images/rental/rental-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-4">

                        <h3 class="product-name">Product <span>Name Here</span> </h3>

                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse
                            potenti. Integer euismod libero at magna finibus, a pretium
                            ligula iaculis. Aenean faucibus varius velit in commodo. Sed
                            elementum vehicula erat, in feugiat mauris. Duis nec lorem sed
                            sapien aliquam molestie non nec ipsum. Phasellus eu faucibus
                            justo, vitae tincidunt sem.
                        </p>
                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse vestibulum quam velit a orci.a
                            orci.



                        </p>
                        <!-- BUTTONS -->
                        <div class="d-flex gap-3  btn-wrraper">
                            <button class="btn-service">
                                <i class="bi bi-gear"></i>
                                <span class="btn-label">Get Service</span>
                            </button>


                            <button class="btn-call">
                                <i class="bi bi-telephone"></i>
                                <span class="btn-label">Call Us</span>

                            </button>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <div class="product-section">

                            <div class="img-wrapper position-relative">
                                <img src="{{ asset('frontend/images/rental/product-img.jpg') }}"
                                    class="img-fluid rental-img mainProductImg">

                                <button class="btn-overlay">Get For Rent</button>
                            </div>

                            <div class="img-dots mt-3 text-center">
                                <span class="dot active"
                                    data-img="{{ asset('frontend/images/rental/rental-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <h3 class="product-name">Product <span>Name Here</span> </h3>

                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse
                            potenti. Integer euismod libero at magna finibus, a pretium
                            ligula iaculis. Aenean faucibus varius velit in commodo. Sed
                            elementum vehicula erat, in feugiat mauris. Duis nec lorem sed
                            sapien aliquam molestie non nec ipsum. Phasellus eu faucibus
                            justo, vitae tincidunt sem.
                        </p>
                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse vestibulum quam velit a orci.a
                            orci.



                        </p>
                        <!-- BUTTONS -->
                        <div class="d-flex gap-3  btn-wrraper">
                            <button class="btn-service">
                                <i class="bi bi-gear"></i>
                                <span class="btn-label">Get Service</span>
                            </button>


                            <button class="btn-call">
                                <i class="bi bi-telephone"></i>
                                <span class="btn-label">Call Us</span>

                            </button>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <div class="product-section">

                            <div class="img-wrapper position-relative">
                                <img src="{{ asset('frontend/images/rental/product-img.jpg') }}"
                                    class="img-fluid rental-img mainProductImg">

                                <button class="btn-overlay">Get For Rent</button>
                            </div>

                            <div class="img-dots mt-3 text-center">
                                <span class="dot active"
                                    data-img="{{ asset('frontend/images/rental/rental-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-4">

                        <h3 class="product-name">Product <span>Name Here</span> </h3>

                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse
                            potenti. Integer euismod libero at magna finibus, a pretium
                            ligula iaculis. Aenean faucibus varius velit in commodo. Sed
                            elementum vehicula erat, in feugiat mauris. Duis nec lorem sed
                            sapien aliquam molestie non nec ipsum. Phasellus eu faucibus
                            justo, vitae tincidunt sem.
                        </p>
                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse vestibulum quam velit a orci.a
                            orci.



                        </p>
                        <!-- BUTTONS -->
                        <div class="d-flex gap-3  btn-wrraper">
                            <button class="btn-service">
                                <i class="bi bi-gear"></i>
                                <span class="btn-label">Get Service</span>
                            </button>


                            <button class="btn-call">
                                <i class="bi bi-telephone"></i>
                                <span class="btn-label">Call Us</span>

                            </button>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <div class="product-section">

                            <div class="img-wrapper position-relative">
                                <img src="{{ asset('frontend/images/rental/product-img.jpg') }}"
                                    class="img-fluid rental-img mainProductImg">

                                <button class="btn-overlay">Get For Rent</button>
                            </div>

                            <div class="img-dots mt-3 text-center">
                                <span class="dot active"
                                    data-img="{{ asset('frontend/images/rental/rental-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-4">

                        <h3 class="product-name">Product <span>Name Here</span> </h3>

                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse
                            potenti. Integer euismod libero at magna finibus, a pretium
                            ligula iaculis. Aenean faucibus varius velit in commodo. Sed
                            elementum vehicula erat, in feugiat mauris. Duis nec lorem sed
                            sapien aliquam molestie non nec ipsum. Phasellus eu faucibus
                            justo, vitae tincidunt sem.
                        </p>
                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse vestibulum quam velit a orci.a
                            orci.



                        </p>
                        <!-- BUTTONS -->
                        <div class="d-flex gap-3  btn-wrraper">
                            <button class="btn-service">
                                <i class="bi bi-gear"></i>
                                <span class="btn-label">Get Service</span>
                            </button>


                            <button class="btn-call">
                                <i class="bi bi-telephone"></i>
                                <span class="btn-label">Call Us</span>

                            </button>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <div class="product-section">

                            <div class="img-wrapper position-relative">
                                <img src="{{ asset('frontend/images/rental/product-img.jpg') }}"
                                    class="img-fluid rental-img mainProductImg">

                                <button class="btn-overlay">Get For Rent</button>
                            </div>

                            <div class="img-dots mt-3 text-center">
                                <span class="dot active"
                                    data-img="{{ asset('frontend/images/rental/rental-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-4">

                        <h3 class="product-name">Product <span>Name Here</span> </h3>

                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse
                            potenti. Integer euismod libero at magna finibus, a pretium
                            ligula iaculis. Aenean faucibus varius velit in commodo. Sed
                            elementum vehicula erat, in feugiat mauris. Duis nec lorem sed
                            sapien aliquam molestie non nec ipsum. Phasellus eu faucibus
                            justo, vitae tincidunt sem.
                        </p>
                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse vestibulum quam velit a orci.a
                            orci.



                        </p>
                        <!-- BUTTONS -->
                        <div class="d-flex gap-3  btn-wrraper">
                            <button class="btn-service">
                                <i class="bi bi-gear"></i>
                                <span class="btn-label">Get Service</span>
                            </button>


                            <button class="btn-call">
                                <i class="bi bi-telephone"></i>
                                <span class="btn-label">Call Us</span>

                            </button>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <div class="product-section">

                            <div class="img-wrapper position-relative">
                                <img src="{{ asset('frontend/images/rental/product-img.jpg') }}"
                                    class="img-fluid rental-img mainProductImg">

                                <button class="btn-overlay">Get For Rent</button>
                            </div>

                            <div class="img-dots mt-3 text-center">
                                <span class="dot active"
                                    data-img="{{ asset('frontend/images/rental/rental-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 mb-4">

                        <h3 class="product-name">Product <span>Name Here</span> </h3>

                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse
                            potenti. Integer euismod libero at magna finibus, a pretium
                            ligula iaculis. Aenean faucibus varius velit in commodo. Sed
                            elementum vehicula erat, in feugiat mauris. Duis nec lorem sed
                            sapien aliquam molestie non nec ipsum. Phasellus eu faucibus
                            justo, vitae tincidunt sem.
                        </p>
                        <p class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas bibendum, eros in scelerisque suscipit, justo neque
                            rhoncus turpis, eget vestibulum quam velit a orci. Suspendisse vestibulum quam velit a orci.a
                            orci.



                        </p>
                        <!-- BUTTONS -->
                        <div class="d-flex gap-3  btn-wrraper">
                            <button class="btn-service">
                                <i class="bi bi-gear"></i>
                                <span class="btn-label">Get Service</span>
                            </button>


                            <button class="btn-call">
                                <i class="bi bi-telephone"></i>
                                <span class="btn-label">Call Us</span>

                            </button>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <div class="product-section">

                            <div class="img-wrapper position-relative">
                                <img src="{{ asset('frontend/images/rental/product-img.jpg') }}"
                                    class="img-fluid rental-img mainProductImg">

                                <button class="btn-overlay">Get For Rent</button>
                            </div>

                            <div class="img-dots mt-3 text-center">
                                <span class="dot active"
                                    data-img="{{ asset('frontend/images/rental/rental-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
                                <span class="dot"
                                    data-img="{{ asset('frontend/images/rental/product-img.jpg') }}"></span>
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
            </div>
        </section>


    </section>





    <section class="four-column-section">
        <div class="container">
            <div class="row">
                <h1 class="four-column-desc">Rental <span>Process</span> </h1>
                <div class="col-lg-3 col-md-6">
                    <div class="icon-wrapper">
                        <i class="fas fa-phone-alt contact-icon"></i>
                    </div>
                    <h3 class="title">Contact</h3>
                    <p class="description">
                        **Contact us according to your specific needs and requirements.** Our dedicated support team is

                    </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="icon-wrapper">
                        <i class="fas fa-handshake confirmation-icon skewed-icon"></i>
                    </div>
                    <h3 class="title">Confirmation</h3>
                    <p class="description">
                        **Your order or service request will be officially confirmed via email or SMS immediately.** This
                        confirmation process verifies

                    </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="icon-wrapper">
                        <i class="fas fa-dollar-sign payment-icon"></i>
                    </div>
                    <h3 class="title">Payment</h3>
                    <p class="description">
                        **Complete your payment securely and conveniently using your preferred method.** We offer multiple
                        safe
                        payment

                    </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="icon-wrapper">
                        <i class="fas fa-truck delivery-icon"></i>
                    </div>
                    <h3 class="title">Delivery</h3>
                    <p class="description">
                        **Your purchased goods will be processed and delivered promptly to your specified address.** We
                        utilize

                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-contact-section">
        <div class="container ">

            <div class="row">
                <div class="col-lg-8">
                    <h2 class="cta-contact-heading">
                        Have a question? we’d love to hear from you.
                    </h2>
                    <div class="d-flex flex-wra gap-5">

                        <div class="cta-contact-box">
                            {{-- <img src="left-icon.png" alt="left icon" class="contact-icon"> --}}
                            <span class="cta-contact-sp">|</span>

                            <span class="cta-contact-text">
                                Get In Touch With Mr-Biomed Tech Today!
                            </span>

                            <div class="cta-img-wraper">
                                <img src="/frontend/images/rental/contact-img2.png" alt="right icon"
                                    class="cta-contact-icon">
                                <img src="/frontend/images/rental/contact-img4.png" alt="" class="cta-phone">
                                <span class="cta-line">|</span>
                            </div>
                        </div>
                        <img src="/frontend/images/rental/contact-img1.png" alt=""
                            class="img-fluid cta-contact-img1">
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{ asset('frontend/images/rental/contact-img3.png') }}" alt="cta img"
                        class="cta-image img-fluid">
                </div>
            </div>

        </div>
    </section>

    <section class="py-5">
        <div class="container">

            <!-- Section Title -->
            <h2 class="choose-title">Why Chose <span>Mr Biomed Tech</span> </h2>

            <div class="row g-4 justify-content-center mt-4">

                <!-- CARD 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="choose-card">
                        <div class="choose-top">
                            <i class="bi bi-check choose-icon"></i>

                            <!-- <div class="choose-icon">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div> -->
                            <h4 class="choose-heading">20 Years Experience</h4>
                        </div>
                        <p class="choose-desc">
                            With two decades of industry expertise, we provide reliable medical equipment solutions.
                        </p>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="choose-card">
                        <div class="choose-top">
                            <i class="bi bi-check choose-icon"></i>

                            <h4 class="choose-heading">100% Availability</h4>
                        </div>
                        <p class="choose-desc">
                            Our equipment and support services are always available when you need them the most.
                        </p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="choose-card">
                        <div class="choose-top">
                            <i class="bi bi-check choose-icon"></i>

                            <h4 class="choose-heading">Up-to-date Catalogue</h4>
                        </div>
                        <p class="choose-desc">
                            We keep our product catalog updated with the latest medical equipment and technologies.
                        </p>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="choose-card">
                        <div class="choose-top">
                            <i class="bi bi-check choose-icon"></i>

                            <h4 class="choose-heading">Regular Checks</h4>
                        </div>
                        <p class="choose-desc">
                            All rental and purchased devices are regularly inspected for performance & safety.
                        </p>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="choose-card">
                        <div class="choose-top">
                            <i class="bi bi-check choose-icon"></i>

                            <h4 class="choose-heading">ISO Certification</h4>
                        </div>
                        <p class="choose-desc">
                            We follow ISO standards to ensure top-quality products and safe biomedical practices.
                        </p>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="choose-card">
                        <div class="choose-top">
                            <i class="bi bi-check choose-icon"></i>

                            <h4 class="choose-heading">24/7 Support</h4>
                        </div>
                        <p class="choose-desc">
                            Our dedicated support team is available around the clock for assistance & troubleshooting.
                        </p>
                    </div>
                </div>

                <!-- CARD 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="choose-card">
                        <div class="choose-top">
                            <i class="bi bi-check choose-icon"></i>

                            <h4 class="choose-heading">Annual Inspection</h4>
                        </div>
                        <p class="choose-desc">
                            We provide yearly inspections to maintain equipment performance and extend lifespan.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="medical-equipment-section py-5">
        <div class="container">

            <!-- Heading -->

            <div class="row">
                <div class="col-8 mx-auto">
                    <h2 class="equipment-heading text-center mb-">
                        Our Wide Selection of <span>Medical Equipment Includes</span>
                    </h2>
                </div>
            </div>
            <!-- 3 Columns -->
            <div class="row justify-content-center">

                <!-- Column 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <ul class="equipment-list">
                        <li><i class="bi bi-check yes-icon"></i> Wheelchairs</li>
                        <li><i class="bi bi-check yes-icon"></i> Hospital Beds</li>
                        <li><i class="bi bi-check yes-icon"></i> Oxygen Cylinders</li>
                        <li><i class="bi bi-check yes-icon"></i> Ventilators</li>
                        <li><i class="bi bi-check yes-icon"></i> Nebulizers</li>
                        <li><i class="bi bi-check yes-icon"></i> Suction Machines</li>
                        <li><i class="bi bi-check yes-icon"></i> IV Stands</li>
                        <li><i class="bi bi-check yes-icon"></i> ECG Machines</li>
                    </ul>
                </div>

                <!-- Column 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <ul class="equipment-list">
                        <li><i class="bi bi-check yes-icon"></i> Pulse Oximeters</li>
                        <li><i class="bi bi-check yes-icon"></i> BP Monitors</li>
                        <li><i class="bi bi-check yes-icon"></i> Glucometers</li>
                        <li><i class="bi bi-check yes-icon"></i> Wheel Walkers</li>
                        <li><i class="bi bi-check yes-icon"></i> Air Mattresses</li>
                        <li><i class="bi bi-check yes-icon"></i> CPAP Machines</li>
                        <li><i class="bi bi-check yes-icon"></i> Oxygen Concentrators</li>
                        <li><i class="bi bi-check yes-icon"></i> Defibrillators</li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <ul class="equipment-list">
                        <li><i class="bi bi-check yes-icon"></i> Patient Monitors</li>
                        <li><i class="bi bi-check yes-icon"></i> Syringe Pumps</li>
                        <li><i class="bi bi-check yes-icon"></i> Infusion Pumps</li>
                        <li><i class="bi bi-check yes-icon"></i> Folding Stretchers</li>
                        <li><i class="bi bi-check yes-icon"></i> Examination Lights</li>
                        <li><i class="bi bi-check yes-icon"></i> Surgical Instruments</li>
                        <li><i class="bi bi-check yes-icon"></i> Thermometers</li>
                        <li><i class="bi bi-check yes-icon"></i> CPAP Masks</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    {{-- ================faqs section ================ --}}

    <section class="faqs-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column: FAQs -->
                <div class="col-lg-6">
                    <h2 class="faqs-heading">Frequently Asked Questions</h2>
                    <div class="mt-4">
                        <h5 class="faqs-subheading">About Our Profile?</h5>
                        <p class="faq-para">
                            We provide sales, rental, and repair services for medical equipment with ISO certified
                        </p>
                    </div>

                    <div class="faqs-list">
                        <!-- Sample FAQs -->
                        <div class="faq-item">
                            <div class="faq-title">
                                What services does Mr Biomed Tech offer?
                                <i class="bi bi-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-content">
                                We provide sales, rental, and repair services for medical equipment with ISO certified
                                products and 24/7 support.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-title">
                                How can I request a service?
                                <i class="bi bi-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-content">
                                You can contact us via our website form, email, or call our support team to request any
                                service.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-title">
                                Are your products guaranteed?
                                <i class="bi bi-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-content">
                                Yes, all our equipment comes with manufacturer warranty and quality assurance for
                                reliability.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-title">
                                What is the delivery time?
                                <i class="bi bi-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-content">
                                Delivery depends on product availability, usually 3-7 business days.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-title">
                                Can I return a product?
                                <i class="bi bi-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-content">
                                Yes, returns are possible within 14 days under our return policy.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-title">
                                Do you offer installation services?
                                <i class="bi bi-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-content">
                                Yes, our team provides installation and training for all equipment.
                            </div>
                        </div>
                    </div>

                    <button class="btn-see-more">See More</button>
                </div>

                <!-- Right Column: Image -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('frontend/images/hero-main-img.png') }}" alt="FAQ Image"
                        class="faq-img img-fluid">
                </div>
            </div>
        </div>
    </section>


    {{-- ================= pruduct sectiion ============= --}}
    <section class="products-series-section py-5">


        <div class="container-fluid py-5 product-series-bg">
            <div class="container text-center">
                <p class="text-center  product-series-para  mb-3">New From Mr Biomed Tech</p>
                <h2 class="text-center mb-5  product-section-heading">Our <span>Latest Products</span> </h2>

                <div class="product-filter-tabs mb-5 d-flex justify-content-center flex-wrap gap-">

                    <button class="filter-btn active" data-filter="featured">Featured</button>

                    <button class="filter-btn" data-filter="equipment">Medical Equipment</button>
                    <button class="filter-btn" data-filter="supplies">Supplies</button>
                    <button class="filter-btn" data-filter="parts">Parts</button>
                </div>
            </div>

            <div class="container mt-4">
                <div class="row g-4">

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="custom-card shadow-sm position-relative">
                            <span class="discount-badge">10% OFF</span>

                            <div class="card-image-box">
                                <img src="{{ asset('frontend/images/ourproduct-img.jpg') }}" alt="PRODUCT img"
                                    class=" img-fluid">
                            </div>


                            <div class="card-content-box p-3 pt-2">
                                <div class="rating-stars p- pt-2 pb-0">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h5 class="product-title fw-bold">Defibrillator X1</h5>
                                <p class="card-text small mb-3">High-performance device for cardiac care and monitoring.
                                </p>

                                <div class="price-action-row d-flex justify-content-between align-items-center">

                                    <span class="old-price text-decoration-line-through text-muted small">$12,000</span>
                                    <span class="new-price fw-bolder fs-5 text-primary">$10,800</span>

                                    <a href="#" class="btn buy-now-btn btn-sm">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="custom-card shadow-sm position-relative">
                            <span class="discount-badge">10% OFF</span>
                            <div class="card-image-box">
                                <img src="{{ asset('frontend/images/ourproduct-img.jpg') }}" alt="PRODUCT img"
                                    class=" img-fluid">
                            </div>

                            <div class="card-content-box p-3 pt-2">
                                <div class="rating-stars p- pt-2 pb-0">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h5 class="product-title fw-bold">Patient Monitor P5</h5>
                                <p class="card-text small mb-3">Multi-parameter monitoring solution with touch interface.
                                </p>
                                <div class="price-action-row d-flex justify-content-between align-items-center">

                                    <span class="old-price text-decoration-line-through text-muted small">$5,500</span>
                                    <span class="new-price fw-bolder fs-5 text-primary">$4,950</span>

                                    <a href="#" class="btn buy-now-btn btn-sm">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="custom-card shadow-sm position-relative">
                            <span class="discount-badge">10% OFF</span>
                            <div class="card-image-box">
                                <img src="{{ asset('frontend/images/ourproduct-img.jpg') }}" alt="PRODUCT img"
                                    class=" img-fluid">
                            </div>

                            <div class="card-content-box p-3 pt-2">
                                <div class="rating-stars p- pt-2 pb-0">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h5 class="product-title fw-bold">Infusion Pump D3</h5>
                                <p class="card-text small mb-3">Precision fluid delivery system with safety alarms.</p>
                                <div class="price-action-row d-flex justify-content-between align-items-center">

                                    <span class="old-price text-decoration-line-through text-muted small">$1,500</span>
                                    <span class="new-price fw-bolder fs-5 text-primary">$1,350</span>

                                    <a href="#" class="btn buy-now-btn btn-sm">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="custom-card shadow-sm position-relative">
                            <span class="discount-badge">10% OFF</span>
                            <div class="card-image-box">
                                <img src="{{ asset('frontend/images/ourproduct-img.jpg') }}" alt="PRODUCT img"
                                    class=" img-fluid">
                            </div>

                            <div class="card-content-box p-3 pt-2">
                                <div class="rating-stars p- pt-2 pb-0">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <h5 class="product-title fw-bold">ECG Machine M12</h5>
                                <p class="card-text small mb-3">Compact and reliable 12-lead Electrocardiogram device.</p>
                                <div class="price-action-row d-flex justify-content-between align-items-center">

                                    <span class="old-price text-decoration-line-through text-muted small">$3,200</span>
                                    <span class="new-price fw-bolder fs-5 text-primary">$2,880</span>

                                    <a href="#" class="btn buy-now-btn btn-sm">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ============= reveiw sectiion ================== --}}

    <section>
        <h2 class="review-heading">Our Users Are <span>Happy And Healthy</span> </h2>
        <section class="review-slider-section">
            <div class="review-slider-wrapper">
                <div class="review-slider" id="reviewSlider">

                    <div class="tooltip-slide">
                        <img src="{{ asset('frontend/images/hero-img-1.jpg') }}" alt="Hero 1">
                        <div class="tooltip-box">
                            <div class="stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <p>Pharmacy Store is my go-to.</p>
                        </div>
                    </div>

                    <div class="tooltip-slide">
                        <img src="{{ asset('frontend/images/hero-img-4.jpg') }}" alt="Hero 1">
                        <div class="tooltip-box">
                            <div class="stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <p>Great service.</p>
                        </div>
                    </div>

                    <div class="tooltip-slide">
                        <img src="{{ asset('frontend/images/hero-img-3.jpg') }}" alt="Hero 1">
                        <div class="tooltip-box">
                            <div class="stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <p>Good products.</p>
                        </div>
                    </div>

                    <div class="tooltip-slide">
                        <img src="{{ asset('frontend/images/hero-img-2.jpg') }}" alt="Hero 1">
                        <div class="tooltip-box">
                            <div class="stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <p>Reliable quality.</p>
                        </div>
                    </div>

                    <div class="tooltip-slide">
                        <img src="{{ asset('frontend/images/hero-img-1.jpg') }}" alt="Hero 1">
                        <div class="tooltip-box">
                            <div class="stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <p>Affordable prices.</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <div>


    </section>

    {{-- ============recent news section ============ --}}



    <section class="recent-news-section py- mb-5">
        <div class="container text-center">
            <h2 class="section-title text-white mb-3">Recent News</h2>
            <p class="section-desc  mb-5">
                Stay updated with the latest trends and insights in biomedical technology and services.
            </p>
        </div>

        <div class="container">
            <div class="row g-4">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="news-card bg-white   ">
                        <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid w-100"
                            alt="News Image">
                        <div class="p-3">
                            <h5 class="news-title fw-bold mt-2 mb-2">The Future of Technology Solutions: Innovations
                                Driving Business Success</h5>
                            <p class="news-desc small text-muted mb-3">
                                Understand the critical importance of robust cybersecurity measures in modern healthcare.
                                Understand the critical importance of robust cybersecurity measures in modern healthcare.
                            </p>
                            <a href="#"
                                class="read-more-link d-flex align-items-center justify-content-start text-decoration-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="news-card bg-white   ">
                        <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid w-100"
                            alt="News Image">
                        <div class="p-3">
                            <h5 class="news-title fw-bold mt-2 mb-2">Advancements in Biomedical Devices: A Game Changer for
                                Healthcare</h5>
                            <p class="news-desc small text-muted mb-3">
                                Understand the critical importance of robust cybersecurity measures in modern healthcare.
                                Understand the critical importance of robust cybersecurity measures in modern healthcare.
                            </p>
                            <a href="#"
                                class="read-more-link d-flex align-items-center justify-content-start text-decoration-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="news-card bg-white   ">
                        <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid w-100"
                            alt="News Image">
                        <div class="p-3">
                            <h5 class="news-title fw-bold mt-2 mb-2">Enhancing Efficiency: The Role of AI in Medical
                                Equipment Maintenance</h5>
                            <p class="news-desc small text-muted mb-3">
                                Understand the critical importance of robust cybersecurity measures in modern healthcare.
                                Understand the critical importance of robust cybersecurity measures in modern healthcare.
                            </p>
                            <a href="#"
                                class="read-more-link d-flex align-items-center justify-content-start text-decoration-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="news-card bg-white   ">
                        <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid w-100"
                            alt="News Image">
                        <div class="p-3">
                            <h5 class="news-title fw-bold mt-2 mb-2">Cybersecurity in Healthcare: Protecting Patient Data
                                in a Digital Age</h5>
                            <p class="news-desc small text-muted mb-3">
                                Understand the critical importance of robust cybersecurity measures in modern healthcare.
                                Understand the critical importance of robust cybersecurity measures in modern healthcare.

                            </p>
                            <a href="#"
                                class="read-more-link d-flex align-items-center justify-content-start text-decoration-none">
                                Read More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('frontend-scripts')
    <script>
        document.querySelectorAll(".product-section").forEach(section => {

            const mainImg = section.querySelector(".mainProductImg");
            const dots = section.querySelectorAll(".dot");

            dots.forEach(dot => {
                dot.addEventListener("click", () => {

                    // Update image
                    mainImg.src = dot.dataset.img;

                    // Active dot switch
                    dots.forEach(d => d.classList.remove("active"));
                    dot.classList.add("active");
                });
            });

        });
    </script>
@endpush
