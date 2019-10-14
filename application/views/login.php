<div class="section-full bg-white content-inner-2" style="margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 text-center d-lg-block d-sm-none d-md-none">
                <div class="worker"> <img src="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/images/gallery/login_img.gif" alt=""/> </div>
            </div>
            <div class="col-lg-7 col-md-12 m-b30" style="border: 1px solid black;">
                <div class="login-form">
                    <?php if ($this->session->userdata('login_error')): ?>
                        <div class="alert alert-danger">
                            <button class="close" data-close="alert"></button>
                            <span> <?=
                                $this->session->userdata('login_error');
                                $this->session->unset_userdata('login_error');
                                ?>
                            </span>
                        </div>
                    <?php endif; ?>
                    <div class="tab-content nav">
                        <div id="login" class="tab-pane active text-center">
                            <form class="p-a30 form"  action="<?= base_url('Auth/user_login'); ?>" method="post">
                                <h3 class="form-title m-t0">Sign In</h3>
                                <div class="separator-outer m-b5">
                                    <div class="separator bg-primary style-liner"></div>
                                </div>
                                <p>Enter your User Name and password. </p>
                                <div class="form-group">
                                    <input name="userpin" required="" class="form-control" placeholder="User Pin" type="text"/>
                                </div>
                                <div class="form-group">
                                    <input name="password" required="" class="form-control " placeholder="Type Password" type="password"/>
                                </div>
                                <div class="form-group text-left">
                                    <button  type="submit"class="site-button m-r5 dz-xs-flex">login</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>