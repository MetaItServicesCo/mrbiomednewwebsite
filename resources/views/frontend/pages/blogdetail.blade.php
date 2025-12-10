@extends('frontend.layouts.frontend')

@section('title', 'Blog’s Details Page ')

@push('frontend-styles')
    <style>
        /* ============================================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           BLOG DETAILS PAGE – CSS Styling
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           Includes: Images, Lists, Sidebar, Related Articles, Responsive Fixes
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =============================================================== */

        .blog-main-img {
            width: 896px;
            height: 528px;
            object-fit: cover;
            border-radius: 8px;
        }

        .blog-sub-img {
            width: 820px;
            height: 534px;
            object-fit: cover;
            border-radius: 8px;
        }

        .blog-title,
        .blog-subtitle {
            font-family: Saira;
            font-weight: 600;
            font-size: 32px;
            line-height: 160%;
            letter-spacing: 0;
            color: #000000;
        }

        .blog-desc {
            font-family: Inter;
            font-weight: 600;
            font-size: 16px;
            line-height: 160%;
            letter-spacing: 0;
            max-width: 895px;
            color: #000000;
        }

        .blog-list li {
            font-family: Inter;
            font-weight: 600;
            font-size: 16px;
            line-height: 160%;
            /* letter-spacing: 0; */
            color: #000000;
            margin-top: 12px;


        }

        /* Sidebar */
        .sidebar-heading {
            font-family: Inter;
            font-weight: 700;
            font-size: 20px;
            line-height: 100%;
            color: #000000;

        }

        .categories-list {
            list-style: none;
            padding: 0;
        }

        .categories-list li {
            font-family: Inter;
            font-weight: 400;
            font-size: 20px;
            line-height: 100%;
            cursor: pointer;
            color: #000000;
            margin-top: 20px;
            transition: all 0.2s ease-in;
        }

        .categories-list li:hover {
            /* color: #036CA0; */
            color: #FE0000;

            transform: scale(1.03)
        }

        .categories-list li i {
            font-size: 16px;
            margin-right: 6px;
            color: #FE0000;
        }

        /* Related Articles */


        .related-img {
            width: 90px;
            height: 70px;
            border-radius: 6px;
            object-fit: cover;
            /* margin-bottom: 15px; */

        }

        .related-title {
            font-family: Inter, sans-serif;
            font-weight: 400;
            font-size: 17px;
            line-height: 100%;
            color: #000000;
            /* margin-bottom: 3px; */
        }

        .related-date {
            font-size: 13px;
            color: #777;
        }

        .sidebarr {
            border-radius: 23px;
            box-shadow: 0px 0px 4px #00000040;
            width: 100%;
            max-width: 308px;
            padding: 10px;
        }

        /* ================= Responsive ================= */

        @media (max-width: 992px) {

            .blog-main-img,
            .blog-sub-img {
                width: 100%;
                height: auto;
            }
        }

        @media (max-width: 576px) {
            .related-img {
                width: 70px;
                height: 55px;
            }

            .categories-list li {
                font-size: 14px;
            }
        }

        /* ================= COMMENT SECTION STYLING ================= */

        .comment-section {
            background: #006A9E1A;
        }

        .comment-heading {
            color: #0168A4;
            font-size: 36px;
            font-weight: 700;
            line-height: 100%;
            font-family: Inter;
        }

        /* Inputs */
        .comment-input {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 12px 14px;
            font-size: 24px;
            font-weight: 400;
            line-height: 140%;
            font-family: Inter;
            max-width: 567px;
            height: 71px;
            color: #8B8B8B;
        }

        .comment-textarea {
            border-radius: 15px;
            border: 1px solid #ccc;
            padding: 12px 14px;
            font-size: 24px;
            font-weight: 400;
            line-height: 140%;
            font-family: Inter;
            max-width: 567px;
            height: 118px;
            color: #8B8B8B;

        }

        .comment-input:focus,
        .comment-textarea:focus {
            border-color: #0168A4;
            box-shadow: 0px 0px 5px #0168A450;
        }

        /* Submit Button */
        .submitt-btn {
            background: #0168A4;
            color: #FFFFFF;
            width: 145px;
            height: 45px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 20px;
            line-height: 100%;
            transition: all 0.4s ease-in-out;
            margin-top: 20px;
        }

        .submitt-btn:hover {
            background: #004f7a;
            transform: scale(1.06);
            color: #FFFFFF;

        }


        /* ================= RIGHT SIDE COMMENTS BOX ================= */

        .comments-box {
            background: #F4F4F4;
            width: 567px;
            height: 318px;
            padding: 20px;
            border-radius: 10px;
            overflow-y: auto;
            overflow-x: hidden;
        }





        /* Single Comment Inside */
        .single-comment {
            background: #fff;
            width: 518px;
            height: 71px;
            border-left: 10px solid #0168A4;
            /* border-radius: 10px 0px 10px 10px; */
            padding: 2px 15px;
            margin-top: 10px;
        }

        .comment-name {
            font-size: 24px;
            font-weight: 600;
            line-height: 140%;
            font-family: Inter;
            margin-bottom: 4px;
            color: #000000;
        }

        .comment-by {
            font-size: 22px;
            font-weight: 600;
            line-height: 140%;
            font-family: Inter;
            margin-bottom: 4px;
            color: #00000099;
        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 992px) {
            .comments-box {
                width: 100%;
                height: auto;
            }

            .single-comment {
                width: 100%;
                height: auto;
            }
        }

        @media(max-width: 576px) {
            .submit-btn {
                width: 100%;
            }
        }
    </style>
@endpush



@section('frontend-content')

    <section class="hero-detail-section">
        <div class="container py-5 text-center text-white">

            <h1 class="hero-title mb-3">Title for This Post <span> /Blog Title for This </span></h1>

            <p class="hero-description mx-auto mb-4">
                Discover the comprehensive range of specialized biomedical services we offer, designed to support your
                operational needs and technological advancement.
            </p>

            <div class="container py-5 text-center text-white">
                <div class="simple-breadcrumb-container text-start mx-auto">
                    <div class="simple-breadcrumb">

                        <a href="/" class="breadcrumb-link">Home</a>

                        <span class="breadcrumb-separator">|</span>

                        <span class="breadcrumb-active">Blog</span>
                        <span class="breadcrumb-separator">|</span>
                        <span class="breadcrumb-active">Blog Title</span>


                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ============================================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       BLOG DETAILS SECTION (Responsive)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       Created for: Detailed Blog Page Layout
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       Columns: Left Content (8), Right Sidebar (4)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       Includes: Images, Headings, Description, Lists, Categories, Related Articles
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    =============================================================== -->

    <section class="blog-details-section py-5">
        <div class="container">
            <div class="row g-4">

                <!-- ================== LEFT CONTENT ================== -->
                <div class="col-lg-9">

                    <!-- Main Image -->
                    <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid blog-main-img mb-4"
                        alt="News Image">

                    <!-- Heading -->
                    <h2 class="blog-title mb-3">
                        The Future of Technology Solutions: Innovations Driving Business Success
                    </h2>

                    <!-- Description -->
                    <p class="blog-desc mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis magnam,
                        temporibus asperiores, deleniti tempora possimus dolores incidunt ratione
                        consectetur culpa veniam impedit illum voluptatum fuga laboriosam nam minus,
                        blanditiis voluptas. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolores, incidunt quos nobis modi perspiciatis consequuntur?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                    </p>

                    <!-- Second Image -->
                    <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid blog-sub-img mb-4"
                        alt="News Image">
                    <!-- Sub Heading -->
                    <h3 class="blog-subtitle mb-3">Top Key Highlights of Future Technologies</h3>

                    <!-- Desc -->
                    <p class="blog-desc mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
                        officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                    </p>

                    <!-- List Section -->
                    <ul class="blog-list mb-4">
                        <li>Artificial Intelligence and Machine Learning Improvements</li>
                        <li>Cloud Transformation for Enterprise Infrastructure</li>
                        <li>5G Networks Enabling Ultra-Fast Communications</li>
                        <li>Robotics and Automation in Business Operations</li>
                        <li>Cybersecurity Enhancements to Protect Data</li>
                        <li>IoT Devices Improving Industrial Performance</li>
                        <li>Blockchain Use in Financial and Supply-Chain Systems</li>
                        <li>Data Analytics for Smarter Decision Making</li>
                        <li>AR/VR for Training and Virtual Simulations</li>
                        <li>Quantum Computing Advancements</li>
                        <li>Green Technology for Sustainable Growth</li>
                        <li>Digital Workspaces for Remote Teams</li>
                        <li>Innovations in Medical Tech and Healthcare</li>
                        <li>Smart Cities Powered by Integrated Systems</li>
                        <li>Automation Tools to Reduce Manual Load</li>
                    </ul>

                    <!-- Last Heading -->
                    <h3 class="blog-subtitle mb-4">Conclusion</h3>
                    <p class="blog-desc mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                    </p>

                    <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid blog-sub-img mb-4"
                        alt="News Image">
                    <!-- Sub Heading -->
                    <h3 class="blog-subtitle mb-3">Top Key Highlights of Future Technologies</h3>

                    <!-- Desc -->
                    <p class="blog-desc mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                    </p>
                    <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid blog-sub-img mb-4"
                        alt="News Image">
                    <!-- Sub Heading -->
                    <h3 class="blog-subtitle mb-3">Top Key Highlights of Future Technologies</h3>

                    <!-- Desc -->
                    <p class="blog-desc mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis
                        saepe molestias asperiores dolor fuga, repellendus commodi praesentium eveniet
                        voluptatibus porro corporis.
                    </p>

                </div>

                <!-- ================== RIGHT SIDEBAR ================== -->
                <div class="col-lg-3">


                    <div class="sidebarr ">
                        <!-- Categories -->
                        <h4 class="sidebar-heading mb-3">Categories</h4>

                        <ul class="categories-list mb-4">
                            <li><i class="bi bi-chevron-right"></i> Hospital Bed</li>
                            <li><i class="bi bi-chevron-right"></i> Surgical</li>
                            <li><i class="bi bi-chevron-right"></i> ICU Equipment</li>
                            <li><i class="bi bi-chevron-right"></i> Ventilator</li>
                            <li><i class="bi bi-chevron-right"></i> OT Lights</li>
                            <li><i class="bi bi-chevron-right"></i> Diagnostics</li>
                            <li><i class="bi bi-chevron-right"></i> Operation Table</li>
                            <li><i class="bi bi-chevron-right"></i> Medical Tools</li>
                            <li><i class="bi bi-chevron-right"></i> Emergency</li>
                            <li><i class="bi bi-chevron-right"></i> Healthcare</li>
                            <li><i class="bi bi-chevron-right"></i> Dental Chair</li>
                            <li><i class="bi bi-chevron-right"></i> Stretcher</li>
                        </ul>

                        <!-- Related Articles -->
                        <h4 class="sidebar-heading mb-3">Related Articles</h4>

                        <div class="row d-flex mb-3 g-3">
                            <div class="col-lg-4">
                                <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="related-img me-3"
                                    alt="">

                            </div>
                            <div class="col-lg-8">
                                <h6 class="related-title">Smart ICU Equipment Innovations</h6>
                                {{-- <p class="related-date">06 Nov 2025</p> --}}
                            </div>

                            <div class="col-lg-4">
                                <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="related-img me-3"
                                    alt="">

                            </div>
                            <div class="col-lg-8">
                                <h6 class="related-title">Smart ICU Equipment Innovations</h6>
                                {{-- <p class="related-date">06 Nov 2025</p> --}}
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="related-img me-3"
                                    alt="">

                            </div>
                            <div class="col-lg-8">
                                <h6 class="related-title">Smart ICU Equipment Innovations</h6>
                                {{-- <p class="related-date">06 Nov 2025</p> --}}
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="related-img me-3"
                                    alt="">

                            </div>
                            <div class="col-lg-8">
                                <h6 class="related-title">Smart ICU Equipment Innovations</h6>
                                {{-- <p class="related-date">06 Nov 2025</p> --}}
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
                                                                                                                                                                                                                                                                                                               LEAVE A COMMENT + COMMENTS SECTION
                                                                                                                                                                                                                                                                                                               Background: #006A9E1A
                                                                                                                                                                                                                                                                                                               Left: Comment Form
                                                                                                                                                                                                                                                                                                               Right: Comments Box
                                                                                                                                                                                                                                                                                                            =============================================================== -->

    <section class="comment-section py-5">
        <div class="container">
            <div class="row g-4">

                <!-- ================= LEFT COLUMN ================= -->
                <div class="col-lg-6 col-md-6">

                    <h3 class="comment-heading mb-4">Leave a Comment</h3>

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

                        <button class="btn submitt-btn">Submit</button>
                    </form>

                </div>

                <!-- ================= RIGHT COLUMN ================= -->
                <div class="col-lg-6 col-md-6">

                    <h3 class="comment-heading mb-3">Comments [1]</h3>

                    <!-- Outer Box -->
                    <div class="comments-box">

                        <!-- Inner Comment -->
                        <div class="single-comment">
                            <h5 class="comment-name">Danial</h5>
                            <p class="comment-by">By test</p>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- =============== feature section ===================== --}}

    <section class="featured-section container my-5">

        <h2 class="latest-blog-heading mb-4 text-center">Featured <span>Updates</span> </h2>

        <div class="row g-4 mt-4">

            <!-- Card 1 -->
            <div class="col-lg-6">
                <div class="featured-card d-flex">

                    <!-- Image -->
                    <img src="/frontend/images/recent-news-img.png" class="featured-img" alt="image">

                    <!-- Content -->
                    <div class="featured-content">

                        <!-- Categories -->
                        <div class="mb-2">
                            <button class="cate-btn">Category 1</button>
                            <button class="cate-btn">Category 2</button>
                        </div>

                        <!-- Title -->
                        <h4 class="featured-title">Suscipit dolor eveni</h4>

                        <!-- Description -->
                        <p class="featured-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolor esse amet ratione dignissimos.
                        </p>

                        <!-- Read time -->
                        <span class="read-time">1 Min Read</span>

                        <hr>

                        <!-- Footer Row -->
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="post-date">06.Nov.2025</span>

                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Card 2 (Duplicate Structure) -->
            <div class="col-lg-6">
                <div class="featured-card d-flex">

                    <img src="/frontend/images/recent-news-img.png" class="featured-img" alt="image">

                    <div class="featured-content">

                        <div class="mb-2">
                            <button class="cate-btn">Category 1</button>
                            <button class="cate-btn">Category 2</button>
                        </div>

                        <h4 class="featured-title">Suscipit dolor eveni</h4>

                        <p class="featured-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolor esse amet ratione dignissimos.
                        </p>

                        <span class="read-time">1 Min Read</span>

                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="post-date">06.Nov.2025</span>

                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="featured-card d-flex">

                    <!-- Image -->
                    <img src="/frontend/images/recent-news-img.png" class="featured-img" alt="image">

                    <!-- Content -->
                    <div class="featured-content">

                        <!-- Categories -->
                        <div class="mb-2">
                            <button class="cate-btn">Category 1</button>
                            <button class="cate-btn">Category 2</button>
                        </div>

                        <!-- Title -->
                        <h4 class="featured-title">Suscipit dolor eveni</h4>

                        <!-- Description -->
                        <p class="featured-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolor esse amet ratione dignissimos.
                        </p>

                        <!-- Read time -->
                        <span class="read-time">1 Min Read</span>

                        <hr>

                        <!-- Footer Row -->
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="post-date">06.Nov.2025</span>

                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Card 2 (Duplicate Structure) -->
            <div class="col-lg-6">
                <div class="featured-card d-flex">

                    <img src="/frontend/images/recent-news-img.png" class="featured-img" alt="image">

                    <div class="featured-content">

                        <div class="mb-2">
                            <button class="cate-btn">Category 1</button>
                            <button class="cate-btn">Category 2</button>
                        </div>

                        <h4 class="featured-title">Suscipit dolor eveni</h4>

                        <p class="featured-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolor esse amet ratione dignissimos.
                        </p>

                        <span class="read-time">1 Min Read</span>

                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="post-date">06.Nov.2025</span>

                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="featured-card d-flex">

                    <!-- Image -->
                    <img src="/frontend/images/recent-news-img.png" class="featured-img" alt="image">

                    <!-- Content -->
                    <div class="featured-content">

                        <!-- Categories -->
                        <div class="mb-2">
                            <button class="cate-btn">Category 1</button>
                            <button class="cate-btn">Category 2</button>
                        </div>

                        <!-- Title -->
                        <h4 class="featured-title">Suscipit dolor eveni</h4>

                        <!-- Description -->
                        <p class="featured-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolor esse amet ratione dignissimos.
                        </p>

                        <!-- Read time -->
                        <span class="read-time">1 Min Read</span>

                        <hr>

                        <!-- Footer Row -->
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="post-date">06.Nov.2025</span>

                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Card 2 (Duplicate Structure) -->
            <div class="col-lg-6">
                <div class="featured-card d-flex">

                    <img src="/frontend/images/recent-news-img.png" class="featured-img" alt="image">

                    <div class="featured-content">

                        <div class="mb-2">
                            <button class="cate-btn">Category 1</button>
                            <button class="cate-btn">Category 2</button>
                        </div>

                        <h4 class="featured-title">Suscipit dolor eveni</h4>

                        <p class="featured-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolor esse amet ratione dignissimos.
                        </p>

                        <span class="read-time">1 Min Read</span>

                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="post-date">06.Nov.2025</span>

                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
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
