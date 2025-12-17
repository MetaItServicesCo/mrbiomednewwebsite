@extends('frontend.layouts.frontend')

{{-- @section('title', 'Blog’s Main Page ') --}}
@section('meta_title', $data->meta_title ?? 'Blogs')
@section('meta_keywords', $data->meta_keywords ?? '')
@section('meta_description', $data->meta_description ?? '')

@push('frontend-styles')
    <style>
        .category-slider-wrapper {
            position: relative;
            display: flex;
            justify-content: center;
            /* slider center */
            align-items: center;
            gap: 15px;
            width: 100%;
            /* full width */
        }

        .latest-blog-heading {
            font-size: 48px;
            font-weight: 700;
            font-family: Arial;
            line-height: 48px;

        }

        .latest-blog-heading span {
            color: #036CA0;
        }

        .category-slider {
            display: flex;
            gap: 10px;
            overflow: hidden;
            width: 100%;
            max-width: 800px;
            /* 6 categories visible (125px each approx) */
        }

        .cat-item {
            background: #DEE9FF;
            padding: 5px 20px;
            font-weight: 500;
            font-size: 16px;
            font-family: Inter;
            color: #A2A6B0;
            border-radius: 21px;
            white-space: nowrap;
            flex: 0 0 auto;
            line-height: 160%;
            min-width: 100px;

        }

        @media (max-width: 575px) {
            .cat-item {
                min-width: 90px;
            }

            .latest-blog-heading {
                font-size: 40px !important;

            }
        }


        /* Prev / Next Buttons */
        .cat-btn {
            background: #0071A8;
            color: #fff;
            border: none;
            font-size: 16px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cat-btn:hover {
            background: #005f87;
        }

        .boddy {
            background: #E5F0F5;
        }

        .category-slider.active {
            cursor: grabbing;
            cursor: -webkit-grabbing;
        }

        .category-slider {
            cursor: grab;
        }




        .news-card {
            border: 1px solid #0071A8 !important;
            /* padding-left: 10px; */
        }

        .news-title {
            padding-left: 10px;

        }
    </style>
@endpush



@section('frontend-content')

    <section class="hero-detail-section">
        <div class="container py-5 text-center text-white">

            <h1 class="hero-title mb-3">{!! highlightBracketText($data->heading ?? '', ['#000000']) !!}</h1>

            <p class="hero-description mx-auto mb-4">
                {{ $data->short_description ?? '' }}
            </p>

            <div class="container py-5 text-center text-white">
                <div class="simple-breadcrumb-container text-start mx-auto">
                    <div class="simple-breadcrumb">

                        <a href="/" class="breadcrumb-link">Home</a>

                        <span class="breadcrumb-separator">|</span>

                        <span class="breadcrumb-active">Blog’s Main Page</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <x-latest-blogs-section />

    {{-- <section class="latest-updates py-5">
        <div class="container">

            <h2 class="text-center latest-blog-heading mb-4">
                Latest <span> Updates</span>
            </h2>

            <div class="category-slider-wrapper mt-5">

                <!-- Prev Button -->
                <button class="cat-btn prev-btn">&#10094;</button>

                <!-- Category Slider -->
                <div class="category-slider">

                    <!-- Add 12–15 categories here -->
                    <div class="cat-item">All Blogs</div>
                    <div class="cat-item">Hospital Bed</div>
                    <div class="cat-item">Surgical</div>
                    <div class="cat-item">Operation Table</div>
                    <div class="cat-item">ICU Equipment</div>
                    <div class="cat-item">Patient Monitor</div>
                    <div class="cat-item">Ventilator</div>
                    <div class="cat-item">Stretcher</div>
                    <div class="cat-item">Dental Chair</div>
                    <div class="cat-item">OT Lights</div>
                    <div class="cat-item">Emergency</div>
                    <div class="cat-item">Diagnostics</div>

                </div>

                <!-- Next Button -->
                <button class="cat-btn next-btn">&#10095;</button>

            </div>
        </div>

        <div class="container mt-5">
            <div class="row g-4">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="news-card bg-white   ">
                        <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid w-100"
                            alt="News Image">
                        <div class="p-3 boddy">
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
                        <div class="p-3 boddy">
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
                        <div class="p-3 boddy">
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
                        <div class="p-3 boddy">
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
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="news-card bg-white   ">
                        <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid w-100"
                            alt="News Image">
                        <div class="p-3 boddy">
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
                        <div class="p-3 boddy">
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
                        <div class="p-3 boddy">
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
                        <div class="p-3 boddy">
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
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="news-card bg-white   ">
                        <img src="{{ asset('frontend/images/recent-news-img.png') }}" class="img-fluid w-100"
                            alt="News Image">
                        <div class="p-3 boddy">
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
                        <div class="p-3 boddy">
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
                        <div class="p-3 boddy">
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
                        <div class="p-3 boddy">
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
        <div class="pagination">
            <a href="#" class="page-link">&laquo;</a>
            <a href="#" class="page-link">1</a>
            <a href="#" class="page-link active">2</a>
            <a href="#" class="page-link">3</a>

            <span class="ellipsis">---</span>

            <a href="#" class="page-link">15</a>
            <a href="#" class="page-link">&raquo;</a>
        </div>
    </section> --}}



    {{-- =============== feature section ===================== --}}
    <x-featured-blogs-section :limit="4" />

    {{-- @if ($featuredBlogs->count())
        <section class="featured-section container my-2">

            <h2 class="latest-blog-heading mb-4 text-center">Featured <span>Updates</span> </h2>

            <div class="row g-4 mt-4">

                <!-- Card -->
                @foreach ($featuredBlogs as $featuredBlog)
                    <div class="col-lg-6">
                        <div class="featured-card d-flex">

                            <!-- Image -->
                            <img src="{{ $featuredBlog->image ? asset('storage/blog/images/' . $featuredBlog->image) : '' }}"
                                class="featured-img" alt="{{ $featuredBlog->image_alt_text ?? $featuredBlog->title }}">

                            <!-- Content -->
                            <div class="featured-content">

                                <!-- Categories -->
                                <div class="mb-2">
                                    <button class="cate-btn">{{ $featuredBlog->category?->name ?? '' }}</button>
                                </div>

                                <!-- Title -->
                                <h4 class="featured-title">{{ $featuredBlog->title ?? '' }}</h4>

                                <!-- Description -->
                                <p class="featured-desc">
                                    {{ $featuredBlog->short_description ?? '' }}
                                </p>

                                <!-- Read time -->
                                <span class="read-time">{{ $featuredBlog->read_time ?? '' }}</span>

                                <hr>

                                <!-- Footer Row -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <span
                                        class="post-date">{{ $featuredBlog->updated_at ? $featuredBlog->updated_at->format('d.M.Y') : '' }}</span>

                                    <div class="social-icons">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-linkedin-in"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    @endif --}}

    @if ($bioMedicalBlogs->count())
        <section class="featured-section container my-5">

            <h2 class="latest-blog-heading mb-4 text-center">Mr biomed Tech <span>Medical Blogs</span> </h2>
            <div class="container">
                <div class="row g-4">
                    @foreach ($bioMedicalBlogs as $bioMedicalBlog)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="news-card bg-white">

                                <h5 class="news-title fw-bold mt-2 mb-2">{{ $bioMedicalBlog->title ?? '' }}</h5>
                                <div class="p-3 boddy">

                                    <p class="news-desc small text-muted mb-3">
                                        {{ $bioMedicalBlog->short_description ?? '' }}</p>

                                    <a href="{{ route('blog.detail', $bioMedicalBlog->slug) }}"
                                        class="read-more-link d-flex align-items-center justify-content-start text-decoration-none">
                                        Read More <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- ================faqs section ================ --}}

    <x-faq-section :faqs="$faqs" heading="Frequently Asked Questions" subheading="About Our Profile?"
        subtext="We provide sales, rental, and repair services for medical equipment with ISO certified"
        image="frontend/images/hero-main-img.png" :visible="4" />

@endsection

@push('frontend-scripts')
    <script>
        const slider = document.querySelector(".category-slider");

        document.querySelector(".next-btn").addEventListener("click", () => {
            slider.scrollBy({
                left: 250,
                behavior: "smooth"
            });
        });

        document.querySelector(".prev-btn").addEventListener("click", () => {
            slider.scrollBy({
                left: -250,
                behavior: "smooth"
            });
        });

        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener("mousedown", (e) => {
            isDown = true;
            slider.classList.add("active");
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener("mouseleave", () => {
            isDown = false;
            slider.classList.remove("active");
        });

        slider.addEventListener("mouseup", () => {
            isDown = false;
            slider.classList.remove("active");
        });

        slider.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 1.5;
            slider.scrollLeft = scrollLeft - walk;
        });
    </script>
@endpush
