<div class="row m-b30">
    <div class="col-lg-4 col-sm-4 m-b30" style="padding: 120px;"> <a href="#"><img src="<?= base_url(); ?>assets/dlab-html/clean360/xhtml/images/gallery/images.png" alt=""></a> </div>
    <div class="col-lg-8 col-sm-8">
        <div class="post-title ">
            <h3 class="post-title"><a href="#">Cleaning Team Is post</a></h3>
        </div>
        <h2 class="m-tb10">Message Details :</h2>

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Message Date</td>
                    <td><?= $message_details->date ?></td>
                </tr>
                <tr>
                    <td>Message From</td>
                    <td><?= $message_details->name ?></td>
                </tr>
                <tr>
                    <td>Phone No.</td>
                    <td><?= $message_details->phone ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $message_details->email ?></td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td><?= $message_details->subject ?></td>
                </tr>
                <tr>
                    <td>Messages</td>
                    <td><?= $message_details->message ?></td>
                </tr>
            </tbody></table>

        <a href="<?= base_url('Dashboard'); ?>">
            <button class="btn btn-success"> Back</button>
        </a><br>
    </div>
</div>


