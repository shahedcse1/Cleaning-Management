<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="bnr-inr overlay-black-middle" style="background-image:url(<?= base_url() ?>assets/dlab-html/clean360/xhtml/images/banner/banner-gallery-charvik-academy.jpg);">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">Project Photo Gallery</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="section-full bg-white content-inner">
        <div class="container">
            <!-- Gallery -->
            <div class="site-filters clearfix center  m-b40">
                <ul class="filters" data-toggle="buttons">
                    <li data-filter="" class="btn active">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Show All</span></a> </li>
                    <li data-filter="cleaning" class="btn">
                        <input type="radio" >
                        <a href="#" class="site-button-secondry"><span>Cleaning</span></a> </li>
                    <li data-filter="resident" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry"><span>Residential Pest Control</span></a> </li>
                    <li data-filter="commercial" class="btn">
                        <input type="radio">
                        <a href="#" class="site-button-secondry "><span>Commercial Pest Control</span></a> </li>

                </ul>
            </div>
            <div class="clearfix">
                <ul id="masonry" class="row gallery-listing gallery-grid-4 mfp-gallery">
                    <?php
                    if (sizeof($cleaningall)):
                        foreach ($cleaningall as $value):
                            ?>
                            <li class="cleaning card-container col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="box gallery-box">
                                    <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="<?= base_url() ?>assets/project_file/<?= $value->image_path; ?>"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="<?= base_url() ?>assets/project_file/<?= $value->image_path; ?>" class="mfp-link" title="<?= $value->Project_name; ?>"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                        endforeach;
                    endif;
                    ?>

                    <?php
                    if (sizeof($residencall)):
                        foreach ($residencall as $value):
                            ?>
                            <li class="resident card-container col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="box gallery-box">
                                    <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="<?= base_url() ?>assets/project_file/<?= $value->image_path; ?>"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="<?= base_url() ?>assets/project_file/<?= $value->image_path; ?>" class="mfp-link" title="<?= $value->Project_name; ?>"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                        endforeach;
                    endif;
                    ?>


                    <?php
                    if (sizeof($commercialall)):
                        foreach ($commercialall as $value):
                            ?>
                            <li class="commercial card-container col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="box gallery-box">
                                    <div class="thum img-overlay1 img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="<?= base_url() ?>assets/project_file/<?= $value->image_path; ?>"  alt=""> </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="<?= base_url() ?>assets/project_file/<?= $value->image_path; ?>" class="mfp-link" title="<?= $value->Project_name; ?>"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
            <!-- Gallery END -->
            <!-- Pagination start -->
            <div class="pagination-bx m-b30">
                <ul class="pagination">
                    <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
            <!-- Pagination END -->
        </div>
    </div>

