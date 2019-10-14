<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="bnr-inr overlay-black-middle" style="background-image:url(<?= base_url() ?>assets/dlab-html/clean360/xhtml/images/banner/our-team-banner-2.png);">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">About Our Team</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li>About Our Team</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="section-full bg-white content-inner">
        <!-- who we are -->
        <div class="container">
            <div class="p-a30 bg-white m-b30">
                <div class="section-content text-center ">
                    <div class="row">
                        <?php
                        if (sizeof($allstaff)):
                            foreach ($allstaff as $value):
                                ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="box m-b30">
                                        <div class="media media-right img-overlay2 img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="<?= base_url(); ?>assets/stafffile/<?= $value->image_path; ?>" alt=""> </a>
                                            <div class="info-has ">
                                                <ul class="social-icon social-icon-lg dez-border">
                                                    <li><a target="_blank" href="<?= $value->fb; ?>" class="fa fa-facebook fb-btn"></a></li>
                                                    <li><a target="_blank" href="<?= $value->twitter; ?>" class="fa fa-twitter tw-btn"></a></li>
                                                    <li><a target="_blank" href="<?= $value->linkedin; ?>" class="fa fa-linkedin link-btn"></a></li>
                                                    <li><a target="_blank" href="<?= $value->google; ?>" class="fa fa-pinterest-p pin-btn"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="p-a10">
                                            <h4 class="title text-uppercase m-b5"><a href="javascript:;">Name:<?= $value->name; ?></a></h4>
                                            <span class="member-position"><?= $value->position; ?></span> </div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <!-- who we are END -->
        </div>
        <!-- contact area  END -->
    </div><br><br>

