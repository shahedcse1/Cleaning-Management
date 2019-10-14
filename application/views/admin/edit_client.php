<div class="page-content bg-white">
    <div class="section-full bg-white content-inner">
        <!-- who we are -->
        <div class="container">
            <div class="row">
                <!-- Side Bar -->
                <div class="col-lg-12 col-md-12 ">
                    <center>
                        <h2 class="text-uppercase m-b30">Edit Client Information.</h2>
                    </center>
                    <div class="p-a30 bg-gray clearfix m-b30 " style="border: 1px solid black">
                        <div class="dzFormMsg"></div>
                        <form method="post"  enctype="multipart/form-data" action="<?= base_url('Client/update_clientdata') ?>">
                            <div class="row">
                                <input  type="hidden" name="id" class="form-control" value="<?= $clientdetails->id; ?>">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="name" type="text" required="" value="<?= $clientdetails->name; ?>" class="form-control" placeholder="Client Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <input name="phone" type="text" value="<?= $clientdetails->phone; ?>" onkeypress='return isNumberKey(event)' maxlength="11" class="form-control" required="" placeholder="Phone No.">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="address" type="text" value="<?= $clientdetails->address; ?>"  class="form-control" placeholder="Address">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="link" type="text" value="<?= $clientdetails->link; ?>" required="" class="form-control" placeholder="Web / FB link">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        (Upload Company Logo)
                                        <div class="input-group">
                                            <input  type="file"  name="fileToUpload" class="form-control" >
                                            <img  height="50px;" width="45px;"src="<?= base_url(); ?>assets/clientfile/<?= $clientdetails->image_path; ?>">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <button  type="submit" value="Submit" class="btn btn-primary site-button pull-right"> <span>Update</span> </button>
                                    <a href="<?= base_url('Client') ?>">  
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
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>


