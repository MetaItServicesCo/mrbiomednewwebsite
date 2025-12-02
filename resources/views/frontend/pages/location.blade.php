@extends('frontend.layouts.frontend')

@section('title', 'Location Page')

@push('frontend-styles')
    <style>
        .areas-section {
            padding: 70px 0;
            background: #ffffff;
            /* Light clean background */
        }

        .areas-section .areas-title {
            font-size: 48px;
            font-weight: 700;
            color: #000000;
            margin-bottom: 18px;
            font-family: Arial;
            line-height: 100%;

        }

        .areas-section .areas-title span {
            color: #066EA1;
        }

        .areas-desc {
            font-size: 16px;
            color: #00000080;
            max-width: 831px;
            margin: 0 auto;
            font-family: Arial;
            line-height: 160%;
            font-weight: 700;

        }

        /* main cities section */

        /* Full-width heading bar */
        .cities-heading-bar {
            background: #066EA1;
            text-align: center;
            width: 100%;
            height: 93px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cities-heading {
            color: #ffffff;
            font-size: 48px;
            font-weight: 700;
            font-family: Arial;
            line-height: 100%;
            margin: 0;
        }

        /* Image styling */
        .city-img {
            width: 256px;
            height: 214px;
            object-fit: cover;
            border: 2px solid #066EA1;
            border-radius: 6px;
            box-shadow: 0px 0px 20px #026B9F;
        }

        /* Title styling */
        .city-title {
            font-size: 25px;
            font-weight: 700;
            color: #026B9F;
            text-align: start;
            padding-left: 78px;
            font-family: Arial, ;
            line-height: 100%;
        }


        /*======================= form section css =======================*/

        /* Section Background */
        .contact-section {
            background: #ffffff;
        }

        /* Left Column */
        .contact-heading {
            font-size: 32px;
            font-weight: 700;
            color: #0071A8;
            font-family: Saira;
            line-height: 137%;

        }

        .contact-desc {
            font-size: 16px;
            color: #00000080;
            font-weight: 700;
            font-family: Arial;
            line-height: 160%;

        }

        .contact-info {
            display: flex;
            align-items: center;
        }

        .contact-icon {
            font-size: 20px;
            color: #FE0000;
            /* red icon color */
            margin-right: 10px;
        }

        .contact-text {
            font-size: 22px;
            font-weight: 300;
            font-family: Inter;
            line-height: 100%;
            color: #000000B2;
        }

        .contact-textt {
            font-size: 20px;
            font-weight: 400;
            font-family: Arial;
            line-height: 100%;
            color: #026B9F;
        }

        .tech-heading {
            font-weight: 700;
            color: #0071A8;
            font-size: 20px;
            line-height: 160%;
            font-family: Arial;
        }

        /* Form Column */
        .form-wrapper {
            background: #006A9E1A;
            /* light blue transparent */
            border-radius: 10px;
            width: 100%;

            max-width: 538px;
            /* height: 660px; */
            padding-bottom: 20px;

        }

        .form-heading {
            font-size: 32px;
            font-weight: 700;
            color: #0071A8;
            font-family: Saira;
            line-height: 137%;
        }

        .form-desc {
            font-size: 16px;
            color: #00000080;
            font-weight: 400;
            font-family: Poppins;
            line-height: 30px;

        }

        .submit-btn {
            background: #066EA1;
            color: #fff;
            font-weight: 700;
            border-radius: 10px;
            width: 100%;

            max-width: 427px !important;
            height: 32px;
            font-size: 20px;
            line-height: 137%;
            font-family: 'Saira';
            margin-top: 40px;

            transition: all 0.4s ease-in-out;
        }

        .submit-btn:hover {
            background: #015077;
            color: #fff;

        }

        .formm-input {
            width: 100%;

            max-width: 427px;
            height: 28px;
            border-radius: 10px;
            font-size: 14px;
            color: #8B8B8B;
            line-height: 137%;
            font-weight: 400;
            font-family: Inter;

        }

        .formm-select {
            width: 100%;

            max-width: 205px;
            height: 28px;
            border-radius: 10px;
            font-size: 14px;
            color: #8B8B8B;
            line-height: 137%;
            font-weight: 400;
            font-family: Inter;

        }

        .formm-select::placeholder {
            color: #8B8B8B;
        }

        .formmm-select {
            width: 100%;
            max-width: 152px;

            height: 28px;
            border-radius: 10px;
            font-size: 14px;
            color: #8B8B8B;
            line-height: 137%;
            font-weight: 400;
            font-family: Inter;
        }

        .formm-text {
            width: 100%;
            max-width: 427px;

            height: 84px;
            color: #8B8B8B;
            line-height: 137%;
            font-weight: 400;
            font-family: Inter;
        }

        .form-control:focus,
        .form-select:focus,
        textarea.form-control:focus {
            box-shadow: none !important;
            outline: none !important;
            border: 2px solid #026B9F !important;
            color: #8B8B8B;

        }

        /* Mobile Responsive Fix */
        @media (max-width: 767px) {

            .contact-section .row {
                display: block !important;
                /* FORCE stacking */
            }

            .col-lg-6 {
                width: 100% !important;
                /* left + right column full width */
                max-width: 100% !important;
                margin-bottom: 20px;
            }

            .form-wrapper {
                max-width: 100% !important;
                width: 100% !important;
                height: auto !important;
            }

            .d-flex.gap-3 {
                flex-direction: column !important;
                /* City & State column-wise */
                gap: 12px !important;
            }

            /* All form elements full width */
            .formm-input,
            .formm-select,
            .formmm-select,
            .formm-text,
            .submit-btn {
                max-width: 100% !important;
                width: 100% !important;
            }
        }
    </style>
@endpush

@section('frontend-content')
    <section class="hero-detail-section">
        <div class="container py-5 text-center text-white">

            <h1 class="hero-title mb-3 fade-right"> <span>Title main</span> location page </h1>
            <p class="hero-description mx-auto mb-4 fade-left">
                Discover the comprehensive range of specialized biomedical services we offer, designed to support your
                operational needs and technological advancement.
            </p>

            <div class="container py-5 text-center text-white">
                <div class="simple-breadcrumb-container text-start mx-auto">
                    <div class="simple-breadcrumb">

                        <a href="/" class="breadcrumb-link">Home</a>

                        <span class="breadcrumb-separator">|</span>

                        <span class="breadcrumb-active">location Main page</span>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- ============ areas section ================ --}}
    <section class="areas-section">
        <div class="container text-center">

            <h2 class="areas-title">Areas We Serve In <span> Texas, US</span></h2>

            <p class="areas-desc">
                We proudly serve multiple regions across Texas, delivering reliable,
                fast, and professional imaging & biomedical services right to your facility. fast, and professional imaging
                & biomedical services right to your facility.

            </p>

        </div>
    </section>
    {{-- ============ city section ==================== --}}
    <section class="major-cities-section">

        <!-- Full Width Heading -->
        <div class="cities-heading-bar">
            <h2 class="cities-heading">Major Cities And Metro Areas</h2>
        </div>

        <div class="container py-5">
            <div class="row justify-content-center">

                <!-- Column 1 -->
                <div class="col-lg-4 col-md-6 text-center mb-4">
                    <img src="{{ asset('frontend/images/location/6.png') }}" class="city-img" alt="City 3">
                    <h4 class="city-title mt-3">Dallas, TX</h4>
                </div>

                <!-- Column 2 -->
                <div class="col-lg-4 col-md-6 text-center mb-4">
                    <img src="{{ asset('frontend/images/location/5.png') }}" class="city-img" alt="City 3">
                    <h4 class="city-title mt-3">Houston, TX</h4>
                </div>

                <!-- Column 3 -->
                <div class="col-lg-4 col-md-6 text-center mb-4">
                    <img src="{{ asset('frontend/images/location/4.png') }}" class="city-img" alt="City 3">
                    <h4 class="city-title mt-3">Austin, TX</h4>
                </div>

                <div class="col-lg-4 col-md-6 text-center mb-4">
                    <img src="{{ asset('frontend/images/location/3.png') }}" class="city-img" alt="City 3">
                    <h4 class="city-title mt-3">Dallas, TX</h4>
                </div>

                <!-- Column 2 -->
                <div class="col-lg-4 col-md-6 text-center mb-4">
                    <img src="{{ asset('frontend/images/location/2.png') }}" class="city-img" alt="City 3">
                    <h4 class="city-title mt-3">Houston, TX</h4>
                </div>

                <!-- Column 3 -->
                <div class="col-lg-4 col-md-6 text-center mb-4">
                    <img src="{{ asset('frontend/images/location/1.png') }}" class="city-img" alt="City 3">
                    <h4 class="city-title mt-3">Austin, TX</h4>
                </div>

            </div>
        </div>

    </section>

    <section class="austin">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12  mx-auto">
                    <h2 class="austin-heading">
                        How We serve in <span>Austin</span>
                    </h2>
                    <p class="austin-desc">
                        nec Praesent libero, placerat nec non dignissim, viverra Lorem tempor vitae elit. viverra turpis
                        faucibus non. sit fringilla risus Nam ex nisl. fringilla Donec sit nisi nec Quisque Vestibulum
                        maximus Nunc ex non. volutpat vitae at, tempor</p>

                    <p class="austin-desc"> ac amet, viverra tincidunt facilisis Sed orci luctus Nam odio tincidunt urna.
                        tincidunt
                        sollicitudin. vel at orci elit tincidunt varius Donec orci dui in at, sapien orci tincidunt Morbi
                        eget eu non. facilisis odio luctus Nullam Morbi non</p>
                    <p class="austin-desc">
                        faucibus viverra ipsum viverra facilisis ex ipsum sapien elit porta ex faucibus odio orci diam
                        Quisque turpis felis, placerat viverra Donec sollicitudin. facilisis elit vitae maximus non urna
                        varius amet, eget quis ipsum eu enim. sit elit
                        Nunc lacus, urna. faucibus vitae lacus dui. dui. eget lacus In faucibus non lobortis, odio sit
                        efficitur. malesuada ex vitae eu placerat. faucibus quam massa sodales. viverra lobortis,
                    </p>


                </div>
            </div>
        </div>
    </section>
    {{-- ============= form section  ===================== --}}
    <section class="contact-section py-5">
        <div class="container">
            <div class="row g-2">

                <!-- Left Column -->
                <div class="col-lg-6">
                    <h2 class="contact-heading mb-3">Contact Us</h2>
                    <p class="contact-desc mb-4">
                        Have questions or need support? Our team is ready to assist you with expert imaging services,
                        maintenance, and repairs across Texas.
                    </p>

                    <div class="contact-info mb-3">
                        <i class="bi bi-telephone-fill contact-icon"></i>
                        <span class="contact-text">+1 234 567 8900</span>
                    </div>

                    <div class="contact-info mb-3">
                        <i class="bi bi-envelope-fill contact-icon"></i>
                        <span class="contact-text">support@example.com</span>
                    </div>

                    <div class="contact-info mb-4">
                        <i class="bi bi-geo-alt-fill contact-icon"></i>
                        <span class="contact-text">Dallas, Texas, USA</span>
                    </div>

                    <h5 class="tech-heading mb-3">Technicians dispatched from throughout Texas</h5>

                    <div class="contact-info">
                        <i class="bi bi-people-fill contact-icon"></i>
                        <span class="contact-textt">Technicians dispatched from throughout Texas</span>
                    </div>
                </div>

                <!-- Right Column: Form -->
                <div class="col-lg-6">
                    <div class="form-wrapper p-4">
                        <h3 class="form-heading mb-3">Do You Want Quick Chat?</h3>
                        <p class="form-desc mb-4">
                            Fill out the form below and our team will get back to you shortly.
                            Fill out the form below and our team will get back to you shortly.

                        </p>

                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control formm-input" placeholder="Enter Name">
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control formm-input" placeholder="Enter Email">
                            </div>

                            <!-- City & State in same row -->
                            <div class="d-flex gap-3">
                                <div class=" mb-3">
                                    <select class="form-select formm-select">
                                        <option selected>Select City</option>
                                        <option>Dallas</option>
                                        <option>Houston</option>
                                        <option>Austin</option>
                                    </select>
                                </div>

                                <div class=" mb-3">
                                    <select class="form-select formm-select">
                                        <option selected>Select State</option>
                                        <option>Texas</option>
                                        <option>New York</option>
                                        <option>California</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <select class="form-select formmm-select">
                                    <option selected>Select Services</option>
                                    <option>X-Ray Machine Repair</option>
                                    <option>Imaging Maintenance</option>
                                    <option>Biomedical Services</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control formm-text" rows="4" placeholder="Enter Message"></textarea>
                            </div>

                            <button type="submit" class="btn submit-btn ">Request Submit</button>
                        </form>

                    </div>
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
@endpush
