    <a href="//api.whatsapp.com/send?phone=+989800370&text=Hi" class="wppBtn"></a>

    <script>
        
                $(document).scroll(function() {
                            var i = $(this).scrollTop();
                                         if (i > 100) {
                                         $('.wppBtn').fadeIn();
                                         } else {
                                        $('.wppBtn').fadeOut();
                                  }
                });
                
                
            
    </script>
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
            	 <div class="col-lg-4 col-md-6">
                    <a href="<?php echo base_url('Vratha_Controller/index');?>"><h1 class="text-primary mb-4">VRATHA</h1></a>
                    
                    
                    <p class="mb-1 text-light">Idols,Gifts,Toys & Mementos Manufacturers and Suppliers.</p>
                     <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-primary mb-4">Our Office</h4>
                   <p class="mb-2 text-light"><i class="fa fa-map-marker-alt text-primary me-3"></i>Vratha Agencies, Palakkad, Pattambi, Post Code: 679536, Kerala, India.</p>
                    <p class="mb-2 text-light"><i class="fa fa-phone-alt text-primary me-3"></i>+91 989 5800 370</p>
                    <p class="mb-2 text-light"><i class="fa fa-envelope text-primary me-3"></i>sales@vratha.co.in</p>
                   
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Quick Links</h4>
                    <a class="btn btn-link text-light" href="<?php echo base_url('Vratha_Controller/aboutus');?>">About Us</a>
                    <a class="btn btn-link text-light" href="<?php echo base_url('Vratha_Controller/products');?>">Our Products</a>
                    <a class="btn btn-link text-light" href="<?php echo base_url('Vratha_Controller/enquiry');?>">Enquiry</a>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-light text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium" href="https://www.vratha.co.in/">Vratha Agencies</a>, All Rights.
                </div>
                <div class="col-md-6 text-center text-light text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Powered By <a class="fw-medium" href="https://gpmbs.com/">GPMBS</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url();?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url();?>js/main.js"></script>
</body>

</html>