<div class="page-content bg-white">
    <div class="section-full bg-white content-inner">
        <!-- who we are -->
        <div class="container">
            <div class="row">
                <!-- Side Bar -->
                <div class="col-lg-12 col-md-12 ">
                    <center>
                        <h2 class="text-uppercase m-b30">Add New Client Information.</h2>
                    </center>
                    <div class="p-a30 bg-gray clearfix m-b30 " style="border: 1px solid black">
                        <div class="dzFormMsg"></div>
                        <form method="post"  enctype="multipart/form-data" action="<?= base_url('Client/insert_clientdata') ?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="name" type="text" required="" class="form-control" placeholder="Client Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <input name="phone" type="text" onkeypress='return isNumberKey(event)' maxlength="11" class="form-control" required="" placeholder="Phone No.">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="address" type="text"  class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="link" type="text" required="" class="form-control" placeholder="Web / FB link">
                                        </div>
                                    </div>
                                </div>
                            

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        (Upload Company Logo)
                                        <div class="input-group">
                                            <input  type="file" required="" name="fileToUpload" class="form-control" >
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <button  type="submit" value="Submit" class="btn btn-primary site-button pull-right"> <span>Submit</span> </button>&nbsp;&nbsp;
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

