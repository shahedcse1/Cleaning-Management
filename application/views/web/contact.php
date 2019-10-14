<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="bnr-inr overlay-black-middle" style="background-image:url(<?= base_url(); ?>assets/dlab-html/clean360/xhtml/images/banner/contactbanner.jpg);">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">Contact Us </h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Contact us </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="row">
                <!-- right part start -->
                <div class="col-lg-4 col-md-6 d-lg-flex d-md-flex">
                    <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                        <h2 class="m-b10">Quick Contact</h2>
                        <p>If you have any questions simply use the following contact details.</p>
                        <ul class="no-margin">
                            <li class="icon-bx-wraper left m-b30">
                                <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
                                    <p>House 40,Road-05,Shekertek,Adabor,<br>
                                        Mohammodpur,Dhaka 1207</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left  m-b30">
                                <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-email"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                    <p>info@cleanaidbd.com</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper left">
                                <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                <div class="icon-content">
                                    <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                    <p>+88-01686305087</p>
                                </div>
                            </li>
                        </ul>
                        <div class="m-t20">
                            <ul class="social-icon dez-border social-icon-lg">
                                <li><a href="javascript:void(0);" class="fa fa-facebook bg-primary"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter bg-primary"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin bg-primary"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-pinterest-p bg-primary"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-google-plus bg-primary"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- right part END -->
                <!-- Left part start -->
                <div class="col-lg-4 col-md-6">
                    <div class="p-a30 bg-gray clearfix m-b30 ">
                        <div  id="success" style="display:none">
                            <div class="alert alert-success"> <strong>Success!</strong> message send Successfully. </div>
                        </div>

                        <div  id="failed" style="display:none">
                            <div class="alert alert-danger"> <strong>Alert!</strong> Please fill Up all fields. </div>
                        </div>
                        <h2>Send Message Us</h2>
                        <div class="dzFormMsg"></div>
                        <form method="post" class="dzForm" action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="name" id="name" type="text" required class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <input name="email" id="email" type="email" class="form-control" required  placeholder="Your Email Id" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="phone" id="phone" type="text"maxlength="11" onkeypress='return isNumberKey(event)' required class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea name="message" id="message" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button name="submit" onclick="send_message();" type="button" value="Submit" class="site-button "> <span>Submit</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Left part END -->
                <div class="col-lg-4 col-md-12 d-lg-flex m-b30">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=shekhertek%2Croad%205&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href=""></a></div><style>.mapouter{text-align:right;height:500px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:700px;width:500px;}</style></div>
                </div>

            </div>
        </div>
    </div>
    <!-- contact area  END -->
</div>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function send_message() {
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var subject = $("#subject").val();
        var message = $("#message").val();

        if (name == '' || email == '' || phone == '' || message == '') {
            $("#failed").show();
            $("#success").hide();
        }
        else {
            $.ajax({
                type: "GET",
                url: "<?= base_url('Contact/send_message'); ?>",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    subject: subject,
                    message: message
                }
            });
            $("#name").val("");
            $("#email").val("");
            $("#phone").val("");
            $("#subject").val("");
            $("#message").val("");
            $("#failed").hide();
            $("#success").show();
        }
    }
</script>

