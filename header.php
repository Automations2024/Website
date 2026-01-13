<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title('|', true, 'right'); ?></title>

  <meta name="keywords" content="Arcturus Consulting Services, Arcturus Consulting Services Inc., Oracle Cloud Consulting,
          Oracle Cloud Services,
          Oracle Cloud Migration,
          Oracle Cloud Implementation,
          Oracle Cloud Solutions,
          Oracle Cloud Experts
          Cloud Integration,
          Cloud Strategy,
          Oracle Cloud Support,
          Oracle ERP Cloud, Oracle Finance Cloud, Oracle SCM Cloud, Oracle HCM Cloud, Oracle Cloud Trainings, Oracle Finance Cloud Training, Oracle SCM Cloud Training, Oracle HCM Cloud Training">
  <meta name="description" content="Boost your business with Arcturus Consulting Services, your trusted partner for Oracle ERP, SCM, and HCM. Tailored solutions, industry expertise, and top-tier applications for unparalleled success.">
  <meta name="google-site-verification" content="google-site-verification: googlefac803b54bb5c8d4.html">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/fav.png">

  <!-- Stylesheets -->
   <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/elegant-icons.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/flaticon-set.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/validnavs.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/helper.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/shop.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/custom.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/css/responsive.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/top/unpkg.com/aos@2.3.1/dist/aos.css">

  <?php wp_head(); ?>

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f8f9fa;
        color: #333;
        line-height: 1.6;
    }
    a { text-decoration: none; }

    /* HEADER WRAPPER */
    .header-wrapper {
        background: #ffffff;
        position: sticky;
        top: 0;
        z-index: 1000;
        border-bottom: 1px solid #eee;
    }
    .header {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 70px;
    }
    .logo img { height: 50px; max-height: 52px;padding-top: 10px; }

    /* NAV MENU */
.nav-menu { 
    display: flex; 
    list-style: none; 
    align-items: center;
    position: relative;
    left: -200px; /* Shifts menu 1 inch left */
}

    .nav-menu li a {
        color: #1e417c;
        font-size: 16px;
        font-weight: 500;
        padding: 14px 15px;
        display: block;
        transition: 0.3s;
        white-space: nowrap;
    }
    .nav-menu li a:hover {
        background-color: #f5f5f5;
        color: #1e417c;
        border-radius: 4px;
    }

    /* DROPDOWN */
    .dropdown { position: relative; }
    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: #ffffff;
        padding: 0;
        min-width: 220px;
        border-radius: 5px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        list-style: none;
        border: 1px solid #e5e5e5;
        z-index: 999;
    }
    .dropdown-menu li {
        padding: 0;
        position: relative;
    }
    .dropdown-menu li a {
        color: #333;
        font-size: 0.95rem;
        padding: 10px 20px;
        white-space: nowrap;
    }
    .dropdown-menu li a:hover {
        background-color: #f5f5f5;
        color: #1e417c;
    }

    /* NESTED DROPDOWN */
    .dropdown-menu li.dropdown > a::after {
        content: "►";
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.75rem;
        color: #666;
    }
    .dropdown-menu .dropdown-menu {
        top: 0;
        left: 100%;
        border-radius: 5px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        min-width: 220px;
    }

    /* Desktop hover */
    @media (min-width: 992px) {
        .dropdown:hover > .dropdown-menu {
            display: block;
        }
        .dropdown-menu li.dropdown:hover > .dropdown-menu {
            display: block;
        }
    }

    /* MOBILE TOGGLE */
    .mobile-menu-toggle {
        display: none;
        font-size: 24px;
        background: none;
        border: none;
        cursor: pointer;
        color: #1e417c;
    }

    /* MOBILE STYLES */
    @media (max-width: 991px) {
        .header {
            padding: 10px 20px;
            height: auto;
        }
        .mobile-menu-toggle {
            display: block;
        }
        .nav-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            flex-direction: column;
            background: #fff;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
            left: -200px; 
        }
        .nav-menu.active {
            display: flex;
        }
        .nav-menu li {
            width: 100%;
            text-align: left;
        }
        .nav-menu li a {
            padding: 12px 20px;
            border-radius: 0;
        }

        .dropdown-menu {
            position: static;
            box-shadow: none;
            border: none;
            border-radius: 0;
            background: #fafafa;
            padding-left: 10px;
        }
        .dropdown-menu li.dropdown > a::after {
            position: static;
            float: right;
            transform: none;
        }
        .dropdown.active > .dropdown-menu {
            display: block;
        }
    }
  </style>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">

  <!-- Header -->
  <header class="header-wrapper">
    <div class="header">
      <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/top/h/assets/img/logo1.png" class="mb-4" alt="Logo">
      </a>

      <button class="mobile-menu-toggle" aria-label="Toggle navigation">☰</button>

      <ul class="nav-menu">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a></li>

        <li class="dropdown">
          <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services ▾</a>
          <ul class="dropdown-menu">
            <li class="dropdown">
              <a href="#">Oracle Consulting</a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo esc_url( home_url( '/oracle' ) ); ?>">Oracle Cloud &amp; EBS Consulting Solutions</a></li>
                <li><a href="<?php echo esc_url( home_url( '/applicationservice' ) ); ?>">Application Managed Services</a></li>
                <li><a href="<?php echo esc_url( home_url( '/demoservice' ) ); ?>">Demo as a Service</a></li>
                <li><a href="<?php echo esc_url( home_url( '/testingservice' ) ); ?>">Testing as a Service</a></li>
              </ul>
            </li>
            <li><a href="<?php echo esc_url( home_url( '/recruitmentservice' ) ); ?>">Recruitment and Staff Augmentation</a></li>
          </ul>
        </li>

        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blogs</a></li>
        <li><a href="<?php echo esc_url( home_url( '/career' ) ); ?>">Careers</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a></li>
        
<!-- WhatsApp -->
<a href="https://chat.whatsapp.com/H9z0cdXklCLDfT88pjTsmo" target="_blank" 
   style="
     position:fixed;
     width:45px;
     height:45px;
     bottom:140px;
     right:18px;
     background-color:#25d366;
     color:#fff;
     border-radius:50%;
     text-align:center;
     font-size:22px;
     box-shadow:0 2px 5px rgba(0,0,0,0.3);
     z-index:999;
     display:flex;
     align-items:center;
     justify-content:center;
   ">
  <i class="bi bi-whatsapp"></i>
</a>

<!-- LinkedIn -->
<a href="https://www.linkedin.com" target="_blank"
   style="
    position:fixed;
    width:45px;
    height:45px;
    bottom:80px;
    right:18px;
    background-color:#0a66c2;
    color:#fff;
    border-radius:50%;
    text-align:center;
    font-size:22px;
    box-shadow:0 2px 5px rgba(0,0,0,0.3);
    z-index:999;
    display:flex;
    align-items:center;
    justify-content:center;
   ">
   <i class="bi bi-linkedin"></i>
</a>

<!-- Google Form -->
<a href="https://forms.gle/Upa3bAsvSSKxscHa6" target="_blank"
   style="
     position:fixed;
     width:45px;
     height:45px;
     bottom:20px;
     right:18px;
     background-color:#0d6efd;
     color:#fff;
     border-radius:50%;
     text-align:center;
     font-size:20px;
     box-shadow:0 2px 5px rgba(0,0,0,0.3);
     z-index:999;
     display:flex;
     align-items:center;
     justify-content:center;
     text-decoration:none;
   ">
  <i class="bi bi-ui-checks-grid"></i>
</a>

      </a></li>
       
      </ul>
    </div>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.querySelector('.mobile-menu-toggle');
        const nav    = document.querySelector('.nav-menu');

        if (toggle && nav) {
            toggle.addEventListener('click', function () {
                nav.classList.toggle('active');
            });
        }

        document.querySelectorAll('.dropdown > a').forEach(function (link) {
            link.addEventListener('click', function (e) {
                if (window.innerWidth <= 991) {
                    e.preventDefault();
                    this.parentElement.classList.toggle('active');
                }
            });
        });
    });
  </script>
