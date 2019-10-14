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
                        <h2 class="text-uppercase m-b30">All Our Project Work Images</h2>
                    </center>
                    <a href="<?= base_url('Gallery/add_images'); ?>">
                        <button class="btn btn-primary site-button pull-left"  type="button"> Add Images </button>
                    </a>
                    <br> <br>
                    <table id="stafflist" class="display table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Id</th>
                                <th style="text-align: center;">Project Name</th> 
                                <th style="text-align: center;">Image Category</th>
                                <th style="text-align: center;">Image </th>
                                <th style="text-align: center;">Option </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (sizeof($allimages)):
                                foreach ($allimages as $value):
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?= $value->id ?></td>
                                        <td style="text-align: center;"><?= $value->Project_name ?></td>
                                        <td style="text-align: center;">
                                            <?php
                                            if ($value->image_type == 1):
                                                echo 'Cleanning Project';
                                            elseif ($value->image_type == 2):
                                                echo 'Residential Pest Control';
                                            elseif ($value->image_type == 3):
                                                echo 'Commercial Pest Control';
                                            endif;
                                            ?>
                                        </td> 
                                        <td style="text-align: center;"><?= $value->image_path ?></td>
                                        <td style="text-align: center;">
                                            <button  onclick="imagedelete('<?= $value->id ?>');"class="btn btn-danger radius-xl  m-r15" type="button">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <form action="<?= base_url('Gallery/delete_image'); ?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <input type="hidden" id="imageid" name="imageid" value="">
                <div class="modal-body">
                    <h3>Are you sure,want to delete this image? </h3>
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
    function imagedelete(imageid) {
        var id = imageid;
        $('#imageid').val(id);
        $('#myModal').modal('show');
    }

</script>

