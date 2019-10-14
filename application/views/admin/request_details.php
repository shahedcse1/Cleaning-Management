<div class="row m-b30">
    <div class="col-lg-4 col-sm-4 m-b30" style="padding: 80px;"> <a href="#"><img src="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/images/gallery/manuloo.png" alt=""></a> </div>
    <div class="col-lg-8 col-sm-8">
        <div class="post-title ">
            <h3 class="post-title"><a href="#">Cleaning Team Is post</a></h3>
        </div>
        <h2 class="m-tb10">Request ID : <?= $details_request->id ?> </h2>
        <div class="post-text">
            <p class="m-b10">Request Details:</p>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Requested Date</td>
                    <td><?= $details_request->date ?></td>
                </tr>
                <tr>
                    <td>Requested By</td>
                    <td><?= $details_request->request_by ?></td>
                </tr>
                <tr>
                    <td>Phone No</td>
                    <td><?= $details_request->phone ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $details_request->email ?></td>
                </tr>
                <tr>
                    <td>Service Name</td>
                    <td><?= $details_request->sname ?></td>
                </tr>
                <tr>
                    <td>Details</td>
                    <td><?= $details_request->details ?></td>
                </tr>
            </tbody></table>
        <?php if ($details_request->final_status != 1): ?>
            <button class="btn btn-primary site-button pull-left" onclick="request_received('<?= $details_request->id ?>');" type="button"> Request Received</button>&nbsp;&nbsp;
        <?php endif; ?>
        <a href="<?= base_url('Dashboard'); ?>">
            <button class="btn btn-success"> Back</button>
        </a><br>
        <div  id="success" style="display:none">
            <div class="alert alert-success"> <strong>Success!</strong> Request Received Successfully. </div>
        </div>


    </div>
</div>
<script>
    function request_received(request_id) {
        var id = request_id;
        var status = '1';
        $.ajax({
            type: "GET",
            url: "<?= base_url('Dashboard/request_received'); ?>",
            data: {
                id: id,
                status: status
            }
        });
        $("#success").show();

    }
</script>
