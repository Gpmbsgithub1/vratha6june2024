<?php include('header.php');?>


    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5 wow fadeIn" style="background:linear-gradient(rgba(254, 3, 106, .4), rgba(254, 3, 106, .4)), url(<?php echo base_url('img/enquiryslider.jpg') ?>) center center no-repeat;"data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-light mb-4 animated slideInDown">Enquiry</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('Vratha_Controller/index');?>" style="color:white;">Home</a></li>
                    
                    <li class="breadcrumb-item text-light" aria-current="page">Enquiry</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Enquiry</p>
                <h6 class="display-6" style="font-size:32px;">If You Have Any Query, Please Contact Us</h6>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-envelope fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">sales@vratha.co.in</p>
                    
                </div>
                <div class="col-md-3 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-phone fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">989 5800 370</p>
                   
                </div>
                <div class="col-md-5 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">Vratha Agencies, Palakkad, Pattambi, Post Code: 679536, Kerala, India.</p>
                    <p class="mb-0"></p>
                </div>
            </div>
            <div class="row g-5">

                <h6 style="color:green;text-align:center;"> <?php
                                        echo $this->session->flashdata('email_sent_enquiry');
                                        
                                        
                                        
                            ?></h6>
                             <h6 style="color:red;text-align:center;"> <?php
                                        
                                        echo $this->session->flashdata('error');
                                        echo validation_errors(); 
                                        
                                        
                            ?></h6>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Enquiry Now</h3>
                    
                    <form action="<?php echo base_url('Vratha_Controller/send_enquiry_email/');?>" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="your_name" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="your_email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="your_mobile" class="form-control" id="mobile" placeholder="Mobile Number">
                                    <label for="mobile">Mobile Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="your_message" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <iframe class="w-100 rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250856.07378631626!2d76.07597605289209!3d10.763268288328796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7c108711c2bcd%3A0x7b586ce66128604!2sVRATHA%20Agencies%20LLP!5e0!3m2!1sen!2sin!4v1709807064484!5m2!1sen!2sin"
                        frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php include('footer.php');?>