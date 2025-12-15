@extends('frontend.layouts.frontend')

@section('title', 'Faqs page')

@push('frontend-styles')
    <style>
        /* SECTION */
        .faq-section {
            position: relative;
            /* padding: 80px 20px; */
            overflow: hidden;
            /* height: 100vh; */
        }

        /* 🖼️ BACKGROUND IMAGE */
        .faq-section::before {
            content: "";
            position: absolute;
            top: 44%;
            left: 50%;
            width: 90%;
            /* 👈 image width control */
            height: 85%;
            /* 👈 image height control */
            background: url('/frontend/images/faqs-logo.png') no-repeat;
            background-size: contain;
            transform: translate(-50%, -50%);
            filter: blur(3px);
            z-index: -5;
        }



        /* 🎨 OVERLAY LAYER */
        .faq-section::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.5);
            /* zyada white */
            /* 👈 #fff overlay */
            z-index: -2;
        }

        /* 📄 CONTENT */
        .faq-section>* {
            position: relative;
            z-index: 3;
        }

        .faq-section .container {
            z-index: 9999;

        }

        /* 🔼 CONTENT LAYER */
        .faq-content {
            position: relative;
            z-index: 9999;
            background-color: #C9E0EB;
            border-radius: 6px;
            max-width: 697px;
            max-height: 67px;
            padding: 10px !important;
        }

        .faq-item {
            border-bottom: none !important;
            cursor: pointer;

        }

        /* GRID */

        .faq-title {
            max-width: 697px;
        }

        .faq-icon {
            color: #000000 !important;
            font-size: 25px !important;
            font-weight: 700;
        }


        /* RIGHT CARD */
        .contactt-card {
            background: #0A70A238;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0px 0px 10px #00000040;
            color: #fff;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 15px;
            color: #000000;
            line-height: 100%;
            font-weight: 600;
            font-family: Inter;
        }

        .divider {
            border-bottom: 1px solid #FFFFFF;
            margin: 20px 0;
        }



        .cardd-desc {
            font-size: 14px;
            /* opacity: 0.9; */
            margin-bottom: 15px;
            color: #00000080;
            line-height: 160%;
            font-weight: 700;
            font-family: Arial;
        }

        .card-time {
            font-size: 14px;
            /* opacity: 0.9; */
            margin-bottom: 15px;
            color: #00000080;
            line-height: 160%;
            font-weight: 900;
            font-family: Arial;
        }

        /* BUTTONS */
        .btn-email,
        .btn-call {
            display: flex;
            align-items: center;
            justify-content: center;

            background: #fff;
            border-radius: 9px;
            text-decoration: none;
            font-size: 18px;
            color: #000000;
            width: 220px;
            height: 37px;
            line-height: 100%;
            font-weight: 600;
            font-family: Inter;
            clip-path: polygon(0% 0%,
                    100% 0%,
                    100% 100%,
                    0% 100%);
            transition: all 0.3s ease-in-out;
        }

        .btn-email:hover,
        .btn-call:hover {

            background: #0168A4;
            color: #FFFFFF;
            clip-path: polygon(12% 0%,
                    100% 0%,
                    88% 100%,
                    0% 100%);

        }

        .btn-email i {
            margin-right: 5px;
            font-size: 24px;
            color: #000000;
        }

        .btn-call i {
            margin-right: 5px;
            font-size: 24px;
            color: #000000;
            transform: rotate(270deg);
            /* left ki taraf */

        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .faq-grid {
                grid-template-columns: 1fr;
            }
        }

        .contact-sectionn {
            background: #C9E0EB4D;
            padding: 60px 20px;
            z-index: 3;
            position: relative;

        }



        /* FORM */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1000px;
            /* form ka maximum width */
            margin: 0 auto;
            /* horizontally center */
            z-index: 4;
            position: relative;

        }

        .contact-title {
            font-family: Saira;
            font-weight: 600;
            font-size: 40px;
            line-height: 120%;
            color: #000000;

            position: relative;
            /* 👈 REQUIRED */
            z-index: 5;
            /* 👈 ab kaam karega */
            margin-bottom: 40px;
        }

        .contact-desc {
            font-family: Inter;
            font-weight: 6500;
            font-size: 20px;
            line-height: 100%;
            color: #000000B5;

            position: relative;
            /* 👈 REQUIRED */
            z-index: 5;
            margin-bottom: 40px;

        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            max-width: 1039px;

        }

        .form-roww {
            display: inline-flex;
            flex-wrap: wrap;
            /* gap: 50px; */
            /* justify-content: center; */
            /* max-width: 1039px; */

        }

        .input-field {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #000000B2;
            font-size: 16px;
            box-sizing: border-box;
            height: 57px;
            background-color: #EFF6F94D;
            /* 👈 input bg */
        }

        .input-field:focus {
            outline: none;
            border: 2px solid #000000B2;
            /* background-color: #EFF6F9; */
            background-color: #EFF6F94D;

        }


        .form-group label {
            font-size: 20px;
            margin-bottom: 8px;
            color: #000000;
            line-height: 100%;
            font-weight: 700;
            font-family: Inter;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        /* Specific widths */
        .half-width {
            width: 429px;
        }

        .full-width {
            width: 1039px;
        }

        .message-field {
            height: 189px;
        }

        .btn-send {
            background: #0168A4;
            color: #FFFFFF;
            border: none;
            padding: 0px 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 132px;
            height: 43px;
            box-shadow: 0px 4px 4px #00000040;
            font-size: 20px;
            /* color: #000000; */
            line-height: 100%;
            font-weight: 600;
            font-family: Inter;
            clip-path: polygon(0% 0%,
                    100% 0%,
                    100% 100%,
                    0% 100%);
            transition: all 0.6s ease-in-out;
        }

        .btn-send:hover {
            background: #014F7A;

            width: 332px;

        }

        /* RESPONSIVE */
        @media (max-width: 1200px) {

            .half-width,
            .full-width {
                width: 100%;
            }
        }
    </style>
@endpush



@section('frontend-content')

    <section class="hero-detail-section">
        <div class="container py-5 text-center text-white">

            <h1 class="hero-title mb-3 fade-left">Ask Any<span class="fade-right"> Question </span></h1>

            <p class="hero-description mx-auto mb-4 fade-right">
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
    <section class="faq-section py-5">
        <div class="container">
            <div class="row g-4">

                <!-- LEFT COLUMN -->
                <div class="col-lg-8 col-md-7">
                    <h2 class="faqs-heading">Frequently Asked Questions</h2>
                    {{-- <div class="mt-4">
                        <h5 class="faqs-subheading">About Our Profile?</h5>
                        <p class="faq-para">
                            We provide sales, rental, and repair services for medical equipment with ISO certified
                        </p>
                    </div> --}}

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

                <!-- RIGHT COLUMN -->
                <div class="col-lg-4 col-md-5">
                    <div class="contactt-card">

                        <h4 class="card-title">
                            Do you have any other unanswered question?
                        </h4>

                        <div class="divider"></div>

                        <!-- EMAIL -->
                        <h5 class="card-title">Email Us</h5>
                        <p class="cardd-desc">
                            Libero diam auctor tristique hendrerit in eu vel id. Nec leo amet suscipit nulla. Nullam vitae
                            sit tempus diam.Libero diam auctor tristique hendrerit in eu vel id. Nec leo amet suscipit
                            nulla. Nullam vitae sit tempus diam. eu vel id
                        </p>

                        <div class="d-flex justify-content-center">
                            <a href="mailto:support@example.com" class="btn-email">
                                <i class="fa-solid fa-envelope"></i>
                                Email Us
                            </a>
                        </div>


                        <div class="divider"></div>

                        <!-- CALL -->
                        <h5 class="card-title">Call Us</h5>
                        <p class="cardd-desc">Our Sales team is here to help</p>
                        <p class="card-time">Monday – Friday 9am to 5pm GMT</p>
                        <div class="d-flex justify-content-center">
                            <a href="tel:12345678" class="btn-call">
                                <i class="fa-solid fa-phone icon"></i> 12345678
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <section class="contact-sectionn my-5">
            <div class="container mb-5">
                <h2 class="contact-title text-center">Still Looking For answers?</h2>
                <p class="contact-desc text-center">We are here to help you with any questions you may have. Fill out the
                    form below and
                    our
                    team will get back to you.</p>

                <form class="contact-form">

                    <!-- Row 1: Name & Email -->
                    <div class="form-row">
                        <div class="form-group half-width">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="input-field">
                        </div>
                        <div class="form-group half-width">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="input-field">
                        </div>
                    </div>

                    <!-- Row 2: Organization, Phone, Select -->
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="organization">Organization</label>
                            <input type="text" id="organization" name="organization" class="input-field">
                        </div>
                        <div class="form-group full-width">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="input-field">
                        </div>
                        <div class="form-group full-width">
                            <label for="help">How can we help?</label>
                            <select id="help" name="help" class="input-field">
                                <option value="">Select</option>
                                <option value="support">Support</option>
                                <option value="sales">Sales</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 3: Message -->
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="input-field message-field"></textarea>
                        </div>
                    </div>

                    <!-- Row 4: Send Button -->
                    <div class="form-row">
                        <button type="submit" class="btn-send">Send</button>
                    </div>

                </form>

            </div>
        </section>
    </section>
    <section class="cta-contact-section">
        <div class="container ">

            <div class="row">
                <div class="col-lg-8">
                    <h2 class="cta-contact-heading">
                        Have a question? we’d love to hear from you.
                    </h2>
                    <div class="d-flex gap-5">

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

    <section class="products-series-section py-5">


        <div class="container-fluid py-5 product-series-bg">
            <div class="container text-center">
                <h2 class="text-center mb-5  product-section-heading">Our <span>Latest Products</span> </h2>


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


@endsection


@push('frontend-scripts')
@endpush
