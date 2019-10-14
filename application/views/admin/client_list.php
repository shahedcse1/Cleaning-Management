<div class="page-content bg-white"  style="overflow-x: scroll;">
    <div class="section-full bg-white content-inner">
        <!-- who we are -->
        <div class="container">
            <?php
            if ($this->session->userdata('add')):
                echo '<div class="alert alert-success"> <strong>Success!</strong>  ' . $this->session->userdata('add') . '</div>' . '<br>';
                $this->session->unset_userdata('add');

            elseif ($this->session->userdata('notadd')):
                echo '<div class="alert alert-success"> <strong>Failed!</strong> ' . $this->session->userdata('notadd') . '</div>' . '<br>';
                $this->session->unset_userdata('notadd');
            endif;
            ?>
            <div class="row">

                <!-- Side Bar -->
                <div class="col-lg-12 col-md-12 ">
                    <center>
                        <h2 class="text-uppercase m-b30">All Our Client List</h2>
                    </center>
                    <a href="<?= base_url('Client/add_client'); ?>">
                        <button class="btn btn-primary site-button pull-left"  type="button"> Add Client </button>
                    </a>
                    <br><br>
                    <table id="stafflist" class="display table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Id</th>
                                <th style="text-align: center;">Name</th> 
                                <th style="text-align: center;">Phone</th>
                                <th style="text-align: center;">Logo/Image</th>
                                <th style="text-align: center;">Address</th>
                                <th style="text-align: center;">Option</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (sizeof($allclient)):
                                foreach ($allclient as $value):
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?= $value->id ?></td>
                                        <td style="text-align: center;"><?= $value->name ?></td>
                                        <td style="text-align: center;"><?= $value->phone ?></td> 
                                        <td style="text-align: center;">
                                            <a target="_blank" href="<?= base_url(); ?>assets/clientfile/<?= $value->image_path; ?>">
                                                <img  height="35px;" width="25px;"src="<?= base_url(); ?>assets/clientfile/<?= $value->image_path; ?>">
                                            </a>
                                        </td>
                                        <td style="text-align: center;"><?= $value->address ?></td>

                                        <td style="text-align: center;">
                                            <a href="<?= base_url('Client/client_details?id=' . $value->id); ?>">  
                                                <button class="site-button blue radius-xl  m-r15" type="button">Edit</button>
                                            </a>
                                            <button  onclick="clientdelete('<?= $value->id ?>');"class="btn btn-danger radius-xl  m-r15" type="button">Delete</button>
                                        </td>

                                    </tr>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table><br><br>
                </div>
            </div>
        </div>
    </div>
</div><br>

<div class=" modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <form action="<?= base_url('Client/delete_client'); ?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <input type="hidden" id="clientid" name="clientid" value="">
                <div class="modal-body">
                    <h3>Are you sure,want to delete this client? </h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary" >Yes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function clientdelete(clientid) {
        var id = clientid;
        $('#clientid').val(id);
        $('#myModal').modal('show');
    }

</script>
