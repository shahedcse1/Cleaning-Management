
<div class="page-content bg-white"  style="overflow-x: scroll;">
    <div class="section-full bg-white content-inner">
        <!-- who we are -->
        <div class="container">
            <div class="row">
                <!-- Side Bar -->
                <div class="col-lg-12 col-md-12 ">
                    <center>
                        <h2 class="text-uppercase m-b30">Welcome To Clean Aid Admin Panel</h2>
                    </center>
                    <div class="tabs bg-tabs vertical  border">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#dashboard">
                                    <i class="ti-world"></i> <span class="title-head">Dashboard</span></a></li>
                            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#allrequest">
                                    <i class="ti-image"></i>  <span class="title-head">All Request</span></a></li>
                            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#allmessages">
                                    <i class="ti-settings"></i>  <span class="title-head">All messages</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="dashboard" class="tab-pane active">
                                <p class="m-b0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="dex-box text-primary border-2 counter-box m-b30">
                                                <h1 class="text-uppercase m-a0 p-a15 "><i class="fa fa-building-o m-r20"></i> <span class="counter"><?= $request_no; ?></span></h1>
                                                <h5 class="tilte  text-uppercase m-a0"><span class="tilte-inner skew-title bg-primary p-lr15 p-tb10">Total No. Request</span></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="dex-box text-primary border-2 counter-box m-b30">
                                                <h1 class="text-uppercase m-a0 p-a15 "><i class="fa fa-building-o m-r20"></i> <span class="counter"><?= $request_no_month; ?></span></h1>
                                                <h5 class="tilte  text-uppercase m-a0"><span class="tilte-inner skew-title bg-primary p-lr15 p-tb10">Month request</span></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="dex-box text-primary border-2 counter-box m-b30">
                                                <h1 class="text-uppercase m-a0 p-a15 "><i class="fa fa-group m-r20"></i> <span class="counter"><?= $request_no_received; ?></span></h1>
                                                <h5 class="tilte  text-uppercase m-a0"><span class="tilte-inner skew-title bg-primary p-lr15 p-tb10">Total Service Provide</span></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="dex-box text-primary border-2 counter-box m-b30">
                                                <h1 class="text-uppercase m-a0 p-a15 "><i class="fa fa-envelope m-r20"></i> <span class="counter"><?= $message_no; ?></span></h1>
                                                <h5 class="tilte  text-uppercase m-a0"><span class="tilte-inner skew-title bg-primary p-lr15 p-tb10">All message</span></h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12" style="border: 1px solid black" >
                                    <div id="container" style=" min-width:310px; height:350px; max-width:600px; margin: 0 auto"></div>
                                    <button id="plain">Plain</button>
                                    <button id="inverted">Inverted</button>
                                    <button id="polar">Polar</button>
                                </div>
                                </p>
                            </div>
                            <div id="allrequest" class="tab-pane">
                                <p class="m-b0">
                                <table id="myTable" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Id</th>
                                            <th style="text-align: center;">Client Name</th> 
                                            <th style="text-align: center;">Phone</th>
                                            <th style="text-align: center;">Requested Service </th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Option</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (sizeof($allrequest)):
                                            foreach ($allrequest as $value):
                                                ?>
                                                <tr>
                                                    <td style="text-align: center;"><?= $value->id ?></td>
                                                    <td style="text-align: center;"><?= $value->request_by ?></td> 
                                                    <td style="text-align: center;"><?= $value->phone ?></td>
                                                    <td style="text-align: center;"><?= $value->sname ?></td>
                                                    <td style="text-align: center;">
                                                        <?php
                                                        if ($value->final_status == 1):
                                                            echo 'Received';
                                                        else:
                                                            echo 'Not Received';
                                                        endif;
                                                        ?>
                                                    </td> 
                                                    <td style="text-align: center;">
                                                        <a href="<?= base_url('Dashboard/request_details?id=' . $value->id); ?>">  
                                                            <button class="site-button blue radius-xl  m-r15" type="button">View</button>
                                                        </a>
                                                    </td>

                                                </tr>
                                                <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
                                </p>
                            </div>
                            <div id="allmessages" class="tab-pane">
                                <p class="m-b0">
                                <table id="myTable2" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Phone</th> 
                                            <th style="text-align: center;">Email</th>
                                            <th style="text-align: center;">Date</th>
                                            <th style="text-align: center;">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (sizeof($allmessages)):
                                            foreach ($allmessages as $value):
                                                ?>

                                                <tr>
                                                    <td style="text-align: center;"><?= $value->name ?></td>
                                                    <td style="text-align: center;"><?= $value->phone ?></td> 
                                                    <td style="text-align: center;"><?= $value->email ?></td>
                                                    <td style="text-align: center;"><?= $value->date ?></td>
                                                    <td style="text-align: center;">
                                                        <a href="<?= base_url('Dashboard/message_details?id=' . $value->id); ?>">  
                                                            <button class="site-button blue radius-xl  m-r15" type="button">View</button>
                                                        </a>
                                                    </td>

                                                </tr>
                                                <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </tbody>
                                </table>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- who we are END -->
    </div>
    <!-- contact area  END -->
</div>

<script src="<?= base_url('assets/highcharts/highcharts.js') ?>"></script>
<script src="<?= base_url('assets/highcharts/exporting.js') ?>"></script>
<script src="<?= base_url('assets/highcharts/export-data.js') ?>"></script>
<script src="<?= base_url('assets/highcharts/highcharts-more.js') ?>"></script>

<script>
    var chart = Highcharts.chart('container', {
        title: {
            text: 'Month Wise Total Request'
        },
        subtitle: {
            text: 'Plain'
        },
        xAxis: {
            categories: [<?php foreach ($period as $p): ?> '<?= $p ?>', <?php endforeach; ?>]
        },
        series: [{
                type: 'column',
                colorByPoint: true,
                data: [<?= implode(',', $totaldata) ?>],
                showInLegend: false
            }]

    });


    $('#plain').click(function() {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: 'Plain'
            }
        });
    });

    $('#inverted').click(function() {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: 'Inverted'
            }
        });
    });

    $('#polar').click(function() {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: 'Polar'
            }
        });
    });

</script>

