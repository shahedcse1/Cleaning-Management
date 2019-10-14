<div class="page-content bg-white">
    <div class="section-full bg-white content-inner">
        <!-- who we are -->
        <div class="container">
            <div class="row">
                <!-- Side Bar -->
                <div class="col-lg-12 col-md-12 ">
                    <center>
                        <h2 class="text-uppercase m-b30">Add New Project Images.</h2>
                    </center>
                    <div class="p-a30 bg-gray clearfix m-b30 " style="border: 1px solid black">
                        <div class="dzFormMsg"></div>
                        <form method="post"  enctype="multipart/form-data" action="<?= base_url('Gallery/insert_images') ?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="Project_name" type="text" required="" class="form-control" placeholder="Project Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <select name="image_type"  type="text" class="form-control" required="">
                                                <option value="">--Select--</option>
                                                <option value="1">Cleaning Project</option>
                                                <option value="2">Residential Pest Control</option>
                                                <option value="3">Commercial Pest Control</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input  type="file" multiple="" name="fileToUpload[]" id="filesToUpload" class="form-control" >
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <button  type="submit" value="Submit" class="btn btn-primary site-button pull-left"> <span>Submit</span> </button>&nbsp;&nbsp;
                                    <a href="<?= base_url('Gallery') ?>">  
                                        <button class="site-button blue radius-xl  m-r15" type="button">Back</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div><br>


