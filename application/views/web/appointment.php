<div class="section-full bg-white content-inner-2">
    <div class="container">
        <center>
            <h2 class="h2">Make An <span class="text-primary">Appointment</span></h2><br>
            <h6>Please fill Up the form and send us a request,our support team will contact with you as soon as possible.</h6>
            <div class="separator text-primary style-icon border-dark"><img src="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/images/Capture.PNG" alt=""/></div>
        </center>
        <div class="row">

            <div class="col-lg-12 col-md-12 m-b30">
                <div class="p-lr60 p-t50 p-b40 bg-white clearfix m-t40 mack-an-appointment">
                    <?php
                    if ($this->session->userdata('add')):
                        echo '<div class="alert alert-success"> <strong>Success!</strong>  ' . $this->session->userdata('add') . '</div>' . '<br>';
                        $this->session->unset_userdata('add');

                    elseif ($this->session->userdata('notadd')):
                        echo '<div class="alert alert-success"> <strong>Failed!</strong> ' . $this->session->userdata('notadd') . '</div>' . '<br>';
                        $this->session->unset_userdata('notadd');
                    endif;
                    ?>
                    <form  action="<?= base_url('Appointment/request_save'); ?>" method="post">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input name="name" required="" class="form-control" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input name="phone" required="" class="form-control" placeholder="Phone No." type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input name="email" required="" class="form-control" placeholder="Email" type="text">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="bs-select-hidden" name="service" required="">
                                        <option value="">--Select Service--</option>
                                        <option value="1">Cockroach Control Service</option>
                                        <option value="2">Rodent Control Service</option>
                                        <option value="3">Bed bug Control Service</option>
                                        <option value="4">Ants Control Service</option>
                                        <option value="5">Mosquito Control Service</option>
                                        <option value="6">Termite Control Service</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <textarea class="form-control" name="details" placeholder="Message" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <button  type="submit" class="site-button m-r15">Send request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br>

