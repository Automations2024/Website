<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<!-- Page-specific CSS/JS (only what is not already in header/footer) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<div class="breadcrumb-area shadow dark bg-cover text-center text-light" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/aboutbg.jpeg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Area -->
<div id="contact" class="contact-area default-padding">
    <div class="container">
        <div class="contact-content">
            <div class="shape">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/contact.png" alt="contact">
            </div>
            <div class="row mx-md-50">
                <!-- Contact info -->
                <div class="col-lg-5 info">
                    <div class="content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="bi bi-envelope-at"></i>
                                </div>
                                <div class="info">
                                    <h5>Our Email</h5>
                                    <a href="mailto:sales@arctrs.com">sales@arctrs.com</a>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="bi bi-geo-fill"></i>
                                </div>
                                <div class="info">
                                    <h5>Address</h5>
                                    <p>
                                        <span style="display:inline-flex;align-items:center;gap:6px;">
                                            <img
                                                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/top/h/assets/img/canada.png"
                                                alt="Arcturus Canada"
                                                style="width:20px;height:auto;margin-right:4px;">
                                            <strong>CANADA</strong>:
                                        </span><br>
                                        Arcturus Consulting Services Inc.<br>
                                        • 55 Village Centre Place, Suite 200, Mississauga, ON L4Z1V9.<br><br>

                                        <span style="display:inline-flex;align-items:center;gap:6px;">
                                            <img
                                                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/top/h/assets/img/flag.png"
                                                alt="Arcturus USA"
                                                style="width:20px;height:auto;margin-right:4px;">
                                            <strong>USA</strong>:
                                        </span><br>
                                        Arcturus Consulting Services LLC<br>
                                        • 30 N Gould St Ste R, Sheridan, WY 82801.<br><br>

                                        <span style="display:inline-flex;align-items:center;gap:6px;">
                                            <img
                                                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/top/h/assets/img/flag (1).png"
                                                alt="Arcturus India"
                                                style="width:20px;height:auto;margin-right:4px;">
                                            <strong>INDIA</strong>:
                                        </span><br>
                                        Arcturus Consulting Service Pvt Ltd.<br>
                                        • 155 A, First Floor, Mangal City Mall, Vijay Nagar, Indore – 452010
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Contact form -->
                <div class="col-lg-7 contact-form-box">
                    <div class="form-box ms-0">
                        <h2>Let's talk?</h2>
                        <p> We're delighted to assist you! Have any questions or feedback? Please don't hesitate to reach out or get in touch with us directly. We look forward to connecting with you! </p>
                        <form id="ContactForm" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="form_type" value="contact_us">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <select class="form-select" id="product_or_service_name" name="product_or_service_name">
                                        <option value="1" selected>Choose An Inquiry</option>
                                        <option value="Oracle Cloud &amp; EBS Consulting Solutions">Oracle Cloud &amp; EBS Consulting Solutions</option>
                                        <option value="Application Managed Services">Application Managed Services</option>
                                        <option value="Demo as a Service">Demo as a Service</option>
                                        <option value="Testing as a Service">Testing as a Service</option>
                                        <option value="Recruitment and Staff Augmentation">Recruitment and Staff Augmentation</option>
                                        <option value="Training as a Service">Training as a Service</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="mobile" name="mobile" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="company" name="company" placeholder="Company" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="display:flex; justify-content:center;">
                                    <button type="button" class="submit_btn" onclick="submitContactForm(event)">Send Message</button>
                                </div>
                            </div>
                            <div class="col-lg-12 alert-notification">
                                <div id="message_box" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End form column -->
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Company Locations Map Section -->
<div id="company-locations" class="company-locations-map default-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2>Our Global Locations</h2>
                <p>Find our offices across Canada, USA, and India</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="map" style="height: 500px; width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <iframe 
                        width="100%" 
                        height="100%" 
                        style="border:0; border-radius: 10px;" 
                        loading="lazy" 
                        allowfullscreen 
                        referrerpolicy="no-referrer-when-downgrade" 
                        src="https://www.google.com/maps/d/embed?mid=1pPMc_8r-XrSCPwWHcTcLMM2pqpuPuCA&ehbc=2E312F">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Company Locations Map -->

<!-- Page-specific JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
function submitContactForm(event) {
    event.preventDefault();

    var form = document.getElementById('ContactForm');

    // Build a single message with combined fields
    var company = form.company.value;
    var subject = form.subject.value;
    var msgBody = form.message.value;
    var fullMessage = "Company Name: " + company + "\n" +
                      "Subject: " + subject + "\n" +
                      msgBody;

    // Data to send to Google Apps Script
    var dataToSend = {
        name: form.name.value,
        product_or_service_name: form.product_or_service_name.value,
        email: form.email.value,
        mobile: form.mobile.value,
        company: company,
        subject: subject,
        message: fullMessage
    };

    jQuery.ajax({
        url: 'https://script.google.com/macros/s/AKfycbxR64Y-JGAU-beA6CZu0hSv3_J4s73LpxeD07DFBsF_ZwehOps3YSZlcaRXYEhaC9IK/exec',
        method: 'POST',
        dataType: 'json',
        data: dataToSend,
        success: function(response) {
            console.log('Google Sheets call successful:', response);
            sessionStorage.setItem(
                'careerFormSuccessMessage',
                'Thank you for reaching out to us. Your inquiry has been received. We aim to respond promptly.'
            );
            location.reload();
        },
        error: function(xhr, status, error) {
            var msg = error;
            try {
                var res = JSON.parse(xhr.responseText);
                if (res.message) msg = res.message;
            } catch (e) {}
            sessionStorage.setItem('careerFormErrorMessage', 'Error submitting form: ' + msg);
            console.error('Google Sheets call error:', msg);
            location.reload();
        }
    });
}

jQuery(document).ready(function() {
    var successMessage = sessionStorage.getItem('careerFormSuccessMessage');
    var errorMessage = sessionStorage.getItem('careerFormErrorMessage');
    
    if (successMessage) {
        toastr.success(successMessage);
        sessionStorage.removeItem('careerFormSuccessMessage');
    }
    if (errorMessage) {
        toastr.error(errorMessage);
        sessionStorage.removeItem('careerFormErrorMessage');
    }
});
</script>

<?php get_footer(); ?>
