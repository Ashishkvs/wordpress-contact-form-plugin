<section class="w3l-contact-1 pb-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <h4 class="title-small">Get in touch</h4>
                    <h3 class="title-big mb-4">Feel free to contact us</h3>
                    <p class="mb-sm-5 mb-4">Start working with Us, We guarantee that you’ll be able to have any issue resolved within 24 hours.</p>

                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Our head office address</h6>
                            <p class="pr-lg-5">Address here, 208 Trainer Avenue street, Illinois, UK - 62617.</p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call for help </h6>
                            <p><a href="tel:+(21) 255 999 8888">+(21) 255 999 8888</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Contact with our support</h6>
                            <p><a href="mailto:coursing@mail.com" class="mail">coursing@mail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9">
                    <h5 class="mb-sm-4 mb-3">Write to us</h5>
                    <form  method="post">
                        <div class="twice-two">
                            <input type="text" class="form-control" name="username" placeholder="Name"
                                required="">
                            <input type="email" class="form-control" name="email"  placeholder="Email"
                                required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="subject" 
                                placeholder="Subject" required="">
                        </div>
                        <textarea name="message" class="form-control" id="w3lMessage" placeholder="Message"
                            required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-style mt-4" name="contact_form_user">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //CONTACT FORM SUBMIT SAVED TO DB -->
<?php 
    if(isset($_POST['contact_form_user'])){
        if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<script> alert('Not a valid email address')</script>";
            echo "<script> location.href='contact-us'; </script>";
            return;
          }
        
       $data = array(
           'name' => $_POST['username'],
           'message'=> $_POST['message'],
           'email'=> $_POST['email'],
           'subject'=> $_POST['subject'],
       );
        $result = save_contact_form_data($data);
        if($result == true) {
            echo "<script> alert('message sent successfully')</script>";
            echo "<script> location.href='contact-us'; </script>";
        } else {
            echo "<script> alert('Error Insertion')</script>";
        }
    }

?>