<?php include 'inc/header.php' ?> 

<section class="section_sign-in_form  bg-blue-full mb-50 pt-4   section-box">
    <div class="container">
        <div class="banner-hero banner-homepage-3 ">
            <div class="row banner-inner">
                <div class="col-lg-6">
                   <h3 class="mb-30 ">Login</h3>
                    <form class="sign-in-form-style " id="sign-form" action="#" method="post">
                        <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="col-lg-12 col-md-6 my-2">
                                <div class="input-sign-style mb-20">
                                    <input name="email" placeholder="Your Email" type="email" />
                                </div>
                            </div>
                           
                            <div class="col-lg-12 col-md-6 my-2 eye-pass-icon-1">
                                <div class="input-sign-style mb-20">
                                    <input name="password" placeholder="Password"  class="password-1" type="password" id="fi-rr-eye"  />
                                    <span class="eye-pass-icon">
                                        <i onclick="eyepass()"  class="fi-rr-eye" ></i>
                                    </span>
                                    <div class="text-end px-2">
                                       <a class="forget-password " href="forget-password.php">Forget password</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12  mt-4">
                                <button class="submit submit-auto-width" type="submit">Login</button>
                            </div>
                            <div class="py-4 col-lg-12 col-12 text-center ">
                                <a class="account-regsiter" href="sign-in.php">Don't have an account? Register</a>
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

<?php include 'inc/footer.php' ?>