<style>
.form4 {
    background-image: url("<?php echo base_url();?>main/images/contact-us-page.jpg");
    background-size: cover;
    opacity:0.9;
}

.top {
    padding-top: 100px;
    padding-bottom: 100px
}

.form-bg {
    /* background: rgba(68, 68, 65, 0.77); */
    padding: 20px
}

.form {
    background-color: white !important;
    padding: 20px;
    border:2px solid skyblue;
}

.form-group {
    margin-bottom: 20px
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0
}

.form-control {
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    border-bottom: 1px solid #61615e;
    background: transparent;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s
}

button.btn {
    display: block;
    padding: 11px 32px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    margin: 30px 0px
}

.btn-blue {
    background-color: #4285f4;
    color: #fff;
    border: 1px solid #4285f4
}
</style>
<div class="image-about-banner" style="margin-top:100px">
<div class="form4 top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-bg">
                    <h3 class="text-white">GET IN TOUCH WITH US</h3>
                    <form class="form">
                        <div class="form-group"> <label class="sr-only">Name</label>
                         <input type="text" class="form-control" required="" id="nameNine" placeholder="Your Name"> </div>
                        <div class="form-group"> <label class="sr-only">Email</label>
                         <input type="email" class="form-control" required="" id="emailNine" placeholder="Email Address"> </div>
                        <div class="form-group"> <label class="sr-only">Message</label> 
                        <textarea class="form-control" required="" rows="7" id="messageNine" placeholder="Write message"></textarea> </div>
                        <button type="submit" name="contact_button" class="btn text-center btn-blue">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2"> 
                <div class="contact-widget wow fadeInDown mt-4" data-wow-delay="0.2s">
                    <h3 class="text-white" >CONTACT US</h3>
                    <p><i class="fas fa-map-marked"></i>&nbsp;B-9, Udaigiri – II, Sector – 34,Noida, G.B. Nagar, Uttar Pradesh, India – 201307</p>
                    <p><i class="fas fa-phone-alt"></i>&nbsp; +91-9871587820</p>
                    <p><i class="fas fa-phone-alt"></i>&nbsp; +91-9911445549</p>
                    <p>
                        <i class="fas fa-globe-americas"></i>
                        <a href="#" class="social-linking">&nbsp; www.kanvan.in</a>
                    </p>
                    <p>
                        <i class="fas fa-envelope-open-text"></i>
                        <a href="#" class="social-linking">&nbsp; info@kanvan.in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
