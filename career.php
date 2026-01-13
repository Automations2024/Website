<?php
/*
Template Name: Career Page
*/
get_header(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<!-- Start Breadcrumb -->
<div class="breadcrumb-area shadow dark bg-cover text-center text-light" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/top/h/assets/img/aboutbg.jpeg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1><?php the_title(); ?></h1>
                <ul class="breadcrumb">
                    <li>Join Arcturus Consulting Services</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Start Contact Area -->
<div id="contact" class="contact-area pt-50">
    <div class="container">
        <div class="contact-content">
            <div class="row mx-md-50">
                <div class="col-lg-12 contact-form-box">
                    <div class="form-box">
                        <h2>Join Us</h2>
                        <p>Arcturus Consulting Services is inviting driven individuals to join our team and embark on a rewarding journey of professional development and impactful consultancy. Let's shape the future together.</p>

                        <form id="careerForm" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="form_type" value="career">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
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
                                        <input class="form-control" id="message" name="message" placeholder="Subject" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group d-md-flex">
                                        <label for="resume">Upload Resume Here </label>
                                        <div class="ms-md-3">
                                            <input type="file" name="file" id="file">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-bottom:20px;">
                                    <div class="col-lg-12" style="display: flex;justify-content: center;">
                                        <button type="button" class="submit_btn" onclick="submitCareerForm(event)">Send</button>
                                    </div>
                                </div>

                                <div class="col-lg-12 alert-notification">
                                    <div id="message_box" class="alert-msg"></div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
function submitCareerForm(event) {
    event.preventDefault();

    var form = document.getElementById('careerForm');

    // Data to send to Google Apps Script
    var dataToSend = {
        name: form.name.value,
        email: form.email.value,
        mobile: form.mobile.value,
        message: form.message.value,
        fileName: form.file.files[0] ? form.file.files[0].name : ''
    };

    jQuery.ajax({
        url: 'https://script.google.com/macros/s/AKfycbwUPndRCD1GgVl2MMetNnuMX09HZ02gf4zWBiNy5DPwpS9YCefzQBPa4U_hUfe3JBn5/exec',
        method: 'POST',
        dataType: 'json',
        data: dataToSend,
        success: function(response) {
            console.log('Google Sheets call successful:', response);
            sessionStorage.setItem(
                'careerFormSuccessMessage',
                'Thank you for submitting your resume to Arcturus Consulting Services Inc. Your application has been received.'
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

    jQuery('#careerForm').on('submit', submitCareerForm);
});
</script>

<?php get_footer(); ?>
