 <?php include 'inc/header.php' ?> 
<section class="section_sign-in_form  bg-blue-full mb-50 pt-4   section-box">
    <div class="container">
        <div class="banner-hero banner-homepage-3 ">
            <div class="row banner-inner">
                <div class="col-lg-6">
                   <h3 class="mb-30 ">Create New Account</h3>
                    <form class="sign-in-form-style " id="sign-form" action="#" method="post">
                        <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="col-lg-12 col-md-6 my-2">
                                <div class="input-sign-style mb-20">
                                    <input name="name" placeholder="First Name" type="text" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 my-2">
                                <div class="input-sign-style mb-20">
                                    <input name="email" placeholder="Your Email" type="email" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 my-2">
                                <div class="input-sign-style mb-20">
                                    <input name="telephone" class="tel-number" placeholder="Your Phone" type="tel" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 my-2 eye-pass-icon-1">
                                <div class="input-sign-style mb-20">
                                   
                                    <input name="password" placeholder="Password"  class="password-1" type="password" id="fi-rr-eye"  />
                                    <span class="eye-pass-icon">
                                        <i onclick="eyepass()"  class="fi-rr-eye" ></i>
                                    </span>
                                    
                                
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 my-2">
                                <input class="form-check-input  sign-up-check br-0 " type="checkbox" value="" id="flexCheckDefault2" name="flexCheckDefault2" required="" aria-required="true">
                                <label class="form-check-label pl-2" for="flexCheckDefault2"> I agree to the
                                   <a href="#" class="cl-blue a-hover"> Terms &amp; Conditions</a> 
                                </label>
                            </div>
                            <div class="col-lg-12 col-md-12  mt-4">
                                <button class="submit submit-auto-width" type="submit">REGISTER</button>
                            </div>
                            <div class="py-4 col-lg-12 col-12 text-center ">
                                <a class="account-regsiter" href="login.php">Already have an account? Login</a>
                             </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 offset-2">
                <div class="banner-imgs">
                    <img alt="jobhub" src="assets/imgs/page/sign-in/banner-main.png" class="img-responsive shape-1" />
                    <span class="banner-sm1"><img alt="jobhub" src="assets/imgs/page/sign-in/banner-sm1.png" class="img-responsive shape-3" /></span>
                    <span class="banner-sm2"><img alt="jobhub" src="assets/imgs/page/sign-in/banner-sm2.png" class="img-responsive shape-2" /></span>
                    <span class="banner-sm3"><img alt="jobhub" src="assets/imgs/page/sign-in/banner-sm3.png" class="img-responsive shape-2" /></span>
                </div>
                </div>
            
            
            </div>
        
        </div>
    </div>
</section> 

<style>

</style>

<?php include 'inc/footer.php' ?>
<!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script> -->



