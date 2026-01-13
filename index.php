<?php
/* Template Name: Home Page */
get_header();
?>

<!-- Essential CSS Libraries -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


<style>

    
/* Hero Section */
.hero_section .item {
    height: 100vh;
    display: flex;
    align-items: center;
}
.hero_section .item h2 {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}
/* .hero_section .item strong {
    color: #1e417c;
} */
.hero_bg_h {
    align-items: center;
    min-height: 80vh;
}

/* Testimonial Styles */
.testimonial_sec .testimonial_card {
    background: #fff;
    margin: 0px 150px;
    padding: 25px;
    border-radius: 9px;
    font-style: italic;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}
.testimonialHeading img {
    width: 120px;
    height: auto;
}
.owl-nav {
    display: none;
}

/* Responsive */
@media (max-width:767px) {
    .testimonial_sec .testimonial_card {
        background: #fff;
        margin: 50px 10px;
        padding: 25px;
        border-radius: 9px;
    }
    .hero_section .item h2 {
        font-size: 2rem;
    }
}
.custom_blue { color: #1e417c; }
</style>


<!-- Hero Slider - First Carousel -->
<div class="slider-carousel owl-carousel owl-theme hero_section">

    <!-- 1) saas-concept-collage (3).jpg -->
    <div class="item it-banner text-light bg-cover"
                  style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/saas-concept-collage (3).jpg') center/cover no-repeat;">
        <div class="container h-100">
            <div class="row hero_bg_h">
                <div class="col-lg-7">
                    <h2>Delivering tailor-made <strong>Oracle Solutions</strong></h2>
                </div>
                <div class="col-lg-5 d-flex align-items-center"></div>
            </div>
        </div>
    </div>

    <!-- 2) aboutbgindustry2.avif -->
    <div class="item it-banner text-light bg-cover"
                  style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/aboutbgindustry2.avif') center/cover no-repeat;">
        <div class="container h-100">
            <div class="row hero_bg_h">
                <div class="col-lg-7">
                    <h2>Accelerate Your Career with <strong>Oracle Cloud</strong></h2>
                </div>
                <div class="col-lg-5 d-flex align-items-center"></div>
            </div>
        </div>
    </div>

    <!-- 3) close-up-hands-holding-paper-people.jpg -->
    <div class="item it-banner text-light bg-cover"
style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/close-up-hands-holding-paper-people.jpg') center/cover no-repeat;"
>
        <div class="container h-100">
            <div class="row hero_bg_h">
                <div class="col-lg-7">
                    <h2>Talent Acquisition <strong>Simplified</strong></h2>
                </div>
                <div class="col-lg-5 d-flex align-items-center"></div>
            </div>
        </div>
    </div>

</div>

<!-- Oracle Excellence Section -->
<div class="about-style-six-area overflow-hidden default-padding">
    <div class="container wow fadeInUp" data-wow-delay="500ms">
        <div class="row column_reverse_md">
            <div class="col-xl-7">
                <div class="about-six-thumb">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/saas-concept-collage (2).jpg"
     alt="SaaS Concept Collage">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/saas-concept-collage (2).jpg" alt="Image not found">
                    <ul class="about-list">
                        <li>
                            <div class="experience">
                                <img class="wow fadeInUp"
     data-wow-delay="500ms"
     src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/4.png"
     alt="Client Logo"
     style="width: 125px;">

                            </div>
                        </li>
                        <li>
                            <h4>Navigating Success with Oracle Precision</h4>
                            <p>Your Trusted Partner for E-Business Suite, Oracle ERP Cloud and Supply Chain Solutions.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-5 mt-30">
                <div class="site-heading text-md-start text-center mb-4">
                    <h4 class="title-sub wow fadeInUp mb-1" data-wow-delay="500ms">Oracle Excellence</h4>
                    <h2 class="title-regular">Where Industry Insight Meets Technical Mastery</h2>
                </div>
                <p>Arcturus Consulting Services has a demonstrated track record of delivering tailor-made solutions from start to finish. We leverage our deep industry insights and combine them with top-tier applications and technical know-how to create superior outcomes.</p>
                <a class="btn mt-10 circle btn-theme-effect btn-sm" href="<?php echo esc_url( home_url( '/about' ) ); ?>">Company Story</a>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div id="service" class="services-style-six-area bottom-less text-light"
     style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/48.png');">
    <div class="separate_bg default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="title-sub custom_blue">What we do</h4>
                        <h2 class="title-regular custom_blue">We believe that technology can change the world</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <!-- 1) saas_4784532.png -->
                <div class="col-xl-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="services-style-six">
                        <div class="info">
                            <div class="services-style-six-height">
                                <h4>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/saas_4784532.png"
                                         alt="Oracle Cloud & EBS" class="mb-0">
                                    <a href="<?php echo esc_url( home_url( '/oracle' ) ); ?>">
                                        Oracle Cloud & EBS Consulting Solutions (ERP, SCM, and HCM)
                                    </a>
                                </h4>
                                <p class="text-light">
                                    We specialize in Oracle ERP, SCM, and HCM solutions, dedicated to delivering
                                    transformative results for your enterprise in the modern digital landscape.
                                </p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/oracle' ) ); ?>">
                                Read More <i class="bi bi-arrow-up-right-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2) applicationicon.png -->
                <div class="col-xl-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="services-style-six">
                        <div class="info">
                            <div class="services-style-six-height">
                                <h4>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/applicationicon.png"
                                         alt="Application Managed Services" class="mb-0">
                                    <a href="<?php echo esc_url( home_url( '/applicationservice' ) ); ?>">
                                        Application Managed Services
                                    </a>
                                </h4>
                                <p class="text-light">
                                    Our Oracle Application Managed Services provide comprehensive support and optimization,
                                    ensuring your Oracle applications operate seamlessly and efficiently.
                                </p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/applicationservice' ) ); ?>">
                                Read More<i class="bi bi-arrow-up-right-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3) demo.png -->
                <div class="col-xl-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="services-style-six">
                        <div class="info">
                            <div class="services-style-six-height">
                                <h4>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/demo.png"
                                         alt="Demo as a Service" class="mb-0">
                                    <a href="<?php echo esc_url( home_url( '/demoservice' ) ); ?>">
                                        Demo as a Service
                                    </a>
                                </h4>
                                <p class="text-light">
                                    Our Demo as a Service (DaaS) transforms your Oracle Cloud experience with seamless
                                    integration and strategic decision-making.
                                </p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/demoservice' ) ); ?>">
                                Read More <i class="bi bi-arrow-up-right-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4) algorithm_7021282.png -->
                <div class="col-xl-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="services-style-six">
                        <div class="info">
                            <div class="services-style-six-height">
                                <h4>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/algorithm_7021282.png"
                                         alt="Testing as a Service" class="mb-0">
                                    <a href="<?php echo esc_url( home_url( '/testingservice' ) ); ?>">
                                        Testing as a Service
                                    </a>
                                </h4>
                                <p class="text-light">
                                    Our Testing as a Service (TaaS) ensures top-notch quality for Oracle Cloud applications,
                                    covering upgrades, custom reports, integrations, and roles.
                                </p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/testingservice' ) ); ?>">
                                Read More <i class="bi bi-arrow-up-right-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 5) career_1323201.png -->
                <div class="col-xl-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="services-style-six">
                        <div class="info">
                            <div class="services-style-six-height">
                                <h4>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/career_1323201.png"
                                         alt="Recruitment and Staff Augmentation" class="mb-0">
                                    <a href="<?php echo esc_url( home_url( '/recruitmentservice' ) ); ?>">
                                        Recruitment and Staff Augmentation
                                    </a>
                                </h4>
                                <p class="text-light">
                                    We provide the right talent at the right time, driving efficiency and fostering growth.
                                </p>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/recruitmentservice' ) ); ?>">
                                Read More <i class="bi bi-arrow-up-right-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 6) analysis.png -->
                

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .separate_bg -->
</div>

<!-- our expertise start -->
<!-- OUR EXPERTISE START -->
<div class="choose-us-style-two-area default-padding">
    <div class="container">
        <div class="row align-center">

            <!-- LEFT SIDE -->
            <div class="col-lg-6">
                <div class="choose-us-thumb">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/img4.jpg"
                        alt="Digital Transformation Expertise">

                    <div class="fun-fact">
                        <div class="counter">
                            <div class="timer" data-to="5" data-speed="2000">0</div>
                        </div>
                        <span class="medium">Complete Projects</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-5 offset-lg-1">

                <div class="site-heading mb-3">
                    <h4 class="title-sub custom_blue">Our Expertise</h4>
                    <h3 class="title-regular custom_blue">
                        Embark on a journey of digital transformation with Arcturus
                    </h3>
                </div>

                <p>
                    We specialize in Oracle ERP, SCM, and HCM modules, providing end-to-end
                    consulting services tailored to meet your organization’s needs.
                </p>

                <!-- SIMPLE EXPERTISE LIST -->
                <div class="expertise-list">

                    <!-- ITEM 1 -->
                    <div class="expertise-item active">
                        <div class="icon-line">
                            <span class="check">✓</span>
                            <span class="line"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">Research & Discovery</h4>
                            <p class="desc">
                                Laying the foundation for a strategic and well-informed approach to driving innovation and growth within your organization.
                            </p>
                        </div>
                    </div>

                    <!-- ITEM 2 -->
                    <div class="expertise-item">
                        <div class="icon-line">
                            <span class="check">✓</span>
                            <span class="line"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">Industry Expertise</h4>
                            <p class="desc">
                                Deep understanding and experience within your industry to tailor digital transformation solutions that are specifically aligned with your sector's unique challenges and opportunities.
                            </p>
                        </div>
                    </div>

                    <!-- ITEM 3 -->
                    <div class="expertise-item">
                        <div class="icon-line">
                            <span class="check">✓</span>
                            <span class="line"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">Quality Assurance</h4>
                            <p class="desc">
                               Leverage comprehensive quality assurance frameworks and methodologies to identify and mitigate risks, defects, and discrepancies in your digital transformation initiatives.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- END LIST -->

            </div>
        </div>
    </div>
</div>
<!-- OUR EXPERTISE END -->

<!-- ================= CSS ================= -->
<style>
.expertise-list {
    max-width: 520px;
    margin-top: 20px;
}

.expertise-item {
    display: flex;
    gap: 16px;
    margin-bottom: 26px;
    cursor: pointer;
}

.icon-line {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.check {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: #4f6df5;
    color: #fff;
    font-size: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.line {
    width: 2px;
    height: 100%;
    background: #4f6df5;
    margin-top: 6px;
}

.title {
    font-size: 18px;
    font-weight: 600;
    margin: 0;
}

.desc {
    display: none;
    margin-top: 8px;
    font-size: 15px;
    color: #555;
}

.expertise-item.active .desc {
    display: block;
}
</style>

<!-- ================= JAVASCRIPT ================= -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    /* COUNTER */
    document.querySelectorAll(".timer").forEach(counter => {
        const target = +counter.dataset.to;
        const speed = +counter.dataset.speed;
        let count = 0;
        const increment = target / (speed / 50);

        function update() {
            if (count < target) {
                count += increment;
                counter.innerText = Math.ceil(count);
                setTimeout(update, 50);
            } else {
                counter.innerText = target;
            }
        }
        update();
    });

    /* SIMPLE ACCORDION */
    document.querySelectorAll(".expertise-item").forEach(item => {
        item.addEventListener("click", () => {
            document.querySelectorAll(".expertise-item").forEach(i => {
                if (i !== item) i.classList.remove("active");
            });
            item.classList.toggle("active");
        });
    });

});
</script>


<!-- our expertise end -->

<!-- COUNTER SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".timer");

    counters.forEach(counter => {
        const target = +counter.getAttribute("data-to");
        const speed = +counter.getAttribute("data-speed");
        let count = 0;

        const increment = target / (speed / 50);

        const updateCount = () => {
            if (count < target) {
                count += increment;
                counter.innerText = Math.ceil(count);
                setTimeout(updateCount, 50);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
});
</script>

<!-- our expertise end -->

<!-- Clients Logo Carousel -->
<div class="testimonial-style-two-area bg-gradient text-light default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4 class="title-sub">Clients</h4>
                    <h2 class="title-regular">
                        Beyond Expectations <br>Serving Clients with Distinction.
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="Clientlogo">
            <div class="row" style="background: aliceblue; border-radius: 70px; box-shadow: inset 3px 3px 44px -24px rgba(0,0,0,0.75);">
                <div class="col-lg-10 offset-lg-1 wow fadeInUp" data-wow-delay="500ms">
                    <div class="testimonial-style-two-carousel owl-carousel owl-theme">

                        <!-- Existing logos (if any) -->
                        <!--
                        <div class="item">
                            <div class="text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/sciex.png" alt="Sciex">
                            </div>
                        </div>
                        -->

                        <!-- New client logos -->
                        <div class="item">
                            <div class="text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/Client ALKU Logo.PNG" alt="ALKU">
                            </div>
                        </div>

                        <div class="item">
                            <div class="text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/Client Connorsgroup Logo.PNG" alt="Connors Group">
                            </div>
                        </div>

                        <div class="item">
                            <div class="text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/Client Ferguson Logo.PNG" alt="Ferguson">
                            </div>
                        </div>

                        <div class="item">
                            <div class="text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/Client TEKsystems Logo.PNG" alt="TEKsystems">
                            </div>
                        </div>

                        <div class="item">
                            <div class="text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/Client Warby Parker Logo (1).png" alt="Warby Parker">
                            </div>
                        </div>

                        <div class="item">
                            <div class="text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/Mastek_logo.png" alt="Mastek">
                            </div>
                        </div>

                        <div class="item">
                            <div class="text-center">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/Capgemini_logo_PNG5.png" alt="Capgemini">
                            </div>
                        </div>
                        <!-- End new client logos -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="testimonial_sec default-padding">
    <div class="container">
        <div class="site-heading text-center">
            <h4 class="title-sub">Testimonial</h4>
            <h2 class="title-regular">What Our Clients Say</h2>
        </div>
        <div class="WhatOurClientSay owl-carousel owl-theme">
            <div class="items">
                <div class="testimonial_card boxshadow">
                    <div class="testimonialHeading mb-4">
                        <div class="gap-4 d-md-flex align-items-center">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/sciex.png"
     alt="sciex"
     class="mb-3 mb-md-0"
     style="width: 60px; height: 60px; border-radius: 50%; object-fit: contain; background-color: #fff;">

                            <div>
                                <p class="mb-0">Trupti Kshatriya</p>
                                <p class="mb-0 custom_blue fw-bold">Sr. Manager, Enterprise Applications</p>
                            </div>
                        </div>
                    </div>
                    <p>"I am pleased to provide this testimony for Arcturus , who was member of our Oracle team in the role of Order Management Business Analyst. Throughout their time with us, Arcturus demonstrated exceptional communication skills and expertise in subject matter which greatly facilitated collaboration across departments. They have ability to convey ideas clearly and effectively, ensuring that all stakeholders are aligned and informed. In addition to thier strong communication abilities, Arcturus is hardworking and dedicated. They consistently went above and beyond to meet project deadlines and ensure that tasks are completed to the highest standard. Their commitment to delivering quality work has been a significant asset to our team. Overall, I recommend Arcturus for any opportunity where effective communication and a strong work ethic are valued."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Essential JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
jQuery(document).ready(function($) {
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true
    });

    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

    // Hero Slider
    $('.hero_section').owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        nav: false,
        dots: true,
        smartSpeed: 1000
    });

    // Clients Logo Carousel
    $('.testimonial-style-two-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 3000,
        nav: true,
        dots: false,
        responsive: {
            0: { items: 2 },
            600: { items: 3 },
            1000: { items: 5 }
        }
    });

    // Testimonials Carousel
    $('.WhatOurClientSay').owlCarousel({
        loop: true,
        items: 1,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        nav: false,
        dots: false
    });

    // Email subscription form
    $('#email_popup_id').modal('show');

    function Sendemail(event) {
        event.preventDefault();
        var formData = new FormData($('#subscribe-form')[0]);
        var email = $('#email_id').val();

        function isValidEmail(email) {
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

        $('#email-valid').hide();
        if (!isValidEmail(email)) {
            $('#email-valid').show();
            return;
        }

        $.ajax({
            url: 'https://www.arctrs.com/Subscribe',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                if (response.status == 400) {
                    toastr.success(response.message);
                    $('#email_popup_id').modal('hide');
                } else if (response.status == 201) {
                    toastr.success('Thank you for subscribing to our newsletter! You are now connected to the latest updates.');
                    $('#email_popup_id').modal('hide');
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                toastr.error('Failed to subscribe. Please try again later.');
            }
        });
    }

    $('#subscribe-form').submit(Sendemail);
});
</script>

<?php get_footer(); ?>


