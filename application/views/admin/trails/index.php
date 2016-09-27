  
<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">Audit Trails</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="card">

                <div class="card-body">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>User</th>
                                <th>Event Detail</th>
                            </tr>
                        </thead>

                        <tbody>
                          <?php
                            $ctr = 1;
                            foreach($listOfTrails as $trail)
                            {
                         ?>
                                <tr>
                                    <td><?= $ctr++; ?></td>
                                    <td><?= $trail->logdatetime; ?></td>
                                    <td><?= $trail->User; ?></td>
                                    <td><?= $trail->EventDetail; ?></td>
                                   
                                </tr>
                        <?php
                            }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end .section-body -->
    </section>

    <!-- BEGIN BLANK SECTION -->
</div><!--end #content-->
<!-- END CONTENT -->
