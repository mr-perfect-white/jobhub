<?php include 'inc/header.php' ?> 
<section class="section_bench-part box-head-single none-bg">
    <div class="container">
        <div class="row">
            <div class="add-bench-form-section p-5">
                <div class="col-12 my-4 text-center">
                    <h3 class="wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Bench Form</h3>
                </div>
                <form class="sign-in-form-style" id="sign-form" action="#" method="post">
                    <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="col-lg-6 col-md-6 my-2">
                            <div class="input-sign-style mb-20">
                                <label  class="label-title"  for="">Name <span class="label-star">*</span> </label>
                                <input name="name" placeholder="First Name *" type="text"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <div class="input-sign-style mb-20">
                                <label  class="label-title"  for="">Last Name <span class="label-star">*</span></label>
                                <input name="lname" placeholder="Last Name *" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <label  class="label-title"  for="">Gender <span class="label-star">*</span></label>
                            <select class="form-select input-sign-style mb-20" aria-label="Default select example">
                                <option disabled selected>select gender</option>
                                <option value="1">  Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <div class="input-sign-style mb-20">
                                <label  class="label-title"  for="">Designation <span class="label-star">*</span></label>
                                <input name="designation" placeholder="Enter Designation" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <div class="input-sign-style mb-20">
                                <label  class="label-title"  for="">Experience <span class="label-star">*</span></label>
                                <select class="form-select input-sign-style mb-20" aria-label="Default select example">
                                    <option disabled selected>Experience</option>
                                    <option value="1">1 years</option>
                                    <option value="2">2 years</option>
                                    <option value="3">3 years</option>
                                    <option value="4">4 years</option>
                                    <option value="5">5 years</option>
                                    <option value="6">6 years</option>
                                    <option value="7">7 years</option>
                                    <option value="8">8 years</option>
                                    <option value="9">9 years</option>
                                    <option value="more-than-five">above 10 years</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <div class="input-sign-style mb-20">
                                <label  class="label-title"  for="">City Name<span class="label-star">*</span></label>
                                <input name="cityname" placeholder="City Name" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 my-2">
                            <form onsubmit="return false;"> 
                                <label  class="label-title">Skills<span class="label-star">*</span></label>
                                <div class="input-sign-style mb-20">
                                    <input name="skill"  class="added-skils" placeholder=" Added skills" type="text" />
                                </div>
                             </form>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <label  class="label-title"  for="">Currency <span class="label-star">*</span></label>
                            <select class="form-select input-sign-style mb-20" aria-label="Default select example">
                                <option disabled selected>select currency</option>
                                <option value="1">INR</option>
                                <option value="2">dollar</option>
                                <option value="3">Rupee</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <label  class="label-title"  for="">Rate Type <span class="label-star">*</span></label>
                            <select class="form-select input-sign-style mb-20" aria-label="Default select example">
                                <option disabled selected>Rate Type</option>
                                <option value="1">Hourly</option>
                                <option value="2">weekly</option>
                                <option value="3">Monthly</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <div class="input-sign-style mb-20">
                                <label  class="label-title"  for="">Rate <span class="label-star">*</span> </label>
                                <input name="rate" placeholder="Rate" type="text" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <div class="input-sign-style mb-20">
                                <label  class="label-title"  for="">Upload Resume <span class="label-star">*</span> </label>
                                <input name="file" placeholder="No file chosen" type="file" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <div class="input-sign-style mb-20">
                                <label  class="label-title"  for="">Rating <span class="label-star">*</span></label>
                                <select class="form-select input-sign-style mb-20" aria-label="Default select example">
                                    <option disabled selected>Rating</option>
                                    <option value="1">1 </option>
                                    <option value="2">2 </option>
                                    <option value="3">3 </option>
                                    <option value="4">4 </option>
                                    <option value="5">5 </option>
                                    <option value="6">6 </option>
                                    <option value="7">7 </option>
                                    <option value="8">8 </option>
                                    <option value="9">9 </option>
                                    <option value="10">10 </option>
                                    
                               </select>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-lg-12 col-md-6 my-2">
                                <label  class="label-title"  for="">Description<span class="label-star">*</span> </label>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                        </div>   
                        
                        <div class="col-12 multi-field-wrapper">
                            <div class="col-12 bgs-grey p-3 my-4 ">
                                <h5 class="cl-white">Work Experiences</h5>
                            </div>
                                <div class="multi-fields">
                                    <div class="row multi-field pb-3">
                                        <div class="col-lg-6 col-md-6 my-2">
                                            <div class="input-sign-style mb-20">
                                                <label  class="proj-title"  for="">Project Title<span class="label-star">*</span> </label>
                                                <input name="pro-title"  type="text" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 my-2">
                                            <div class="input-sign-style mb-20">
                                                <label  class="dur-mon"  for="">Duration in month <span class="label-star">*</span> </label>
                                                <input name="dur-month"  type="text" />
                                            </div>
                                        </div>                                        
                                        <div class="col-lg-6 col-md-4 pt-3  form-content">
                                            <label  class="label-title"  for="">Project Description<span class="label-star">*</span> </label>
                                            <textarea name="" id="" cols="30" rows="10" ></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-4 pt-3 ">
                                            <label  class="role-respon"  for="">Role and Responsibilities <span class="label-star">*</span> </label>
                                            <textarea name="role-respon" id="" cols="30" rows="10" ></textarea>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 pt-3  form-content position_lit">
                                            <button type="button" class="btn bg-primary btn-contact w-100 add-field cl-white">Add</button>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 pt-3  form-content remove-field position_lit">
                                            <button type="button" class="btn bg-danger w-100 text-white">Delete</button>
                                        </div>
                                    </div>
                                </div>
                        </div>  
                        <div class="form-notes-btn my-5 text-center">
                            <input class="btn btn-default" type="submit"  value="Submit">
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div> 
</section>
<?php include 'inc/footer.php' ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css">
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
<script>
    $('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find(
            'input').val('');
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});
$(document).ready(function() {
    $('.added-skils,.padded-skils').tagsinput({
        trimValue: true,
        confirmKeys: [13, 44, 32],
        focusClass: 'my-focus-class'
    });
    $('.added-skils,.padded-skils').on('focus', function() {
        $(this).closest('.added-skils,.padded-skils').addClass('has-focus');
    }).on('blur', function() {
        $(this).closest('.added-skils,.padded-skils').removeClass('has-focus');
    });
});
</script>



