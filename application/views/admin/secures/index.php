<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">Secure Note</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>#</th>
                                <!-- <th>user_id<th> -->
                                <th>Name</th>
                                <th>Folder</th>
                                <th>Note-type</th>
                                <th>Note</th>
                                <?php if ($this->session->userdata('role') != 'admin') { ?>
                                <th>Action</th>
                                <?php } ?>
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                            $ctr = 1;
                            foreach($listOfSecures as $secures)
                            {
                         ?> 
                                <tr>
                                  <?php
                                    if ($this->session->userdata('role') == 'admin') {
                                        ?><td><?= $ctr++; ?></td>
                                    <!--<td>$secures->user_id<!--</td>-->
                                    <td><?= $secures->name; ?></td>
                                    <td><?= $secures->folder; ?></td>
                                    <td><?= $secures->note_type; ?></td>
                                    <td><?= $secures->note; ?></td>
                                    
                                        
                                               
                                    <?php }
                                    elseif ($this->session->userdata('ndex') == $secures->user_id) {
                                  ?>
                                    <td><?= $ctr++; ?></td>
                                    <!--<td>$secures->user_id<!--</td>-->
                                    <td><?= $secures->name; ?></td>
                                    <td><?= $secures->folder; ?></td>
                                    <td><?= $secures->note_type; ?></td>
                                    <td><?= $secures->note; ?></td>
                                    <td>
                                        <a href="<?= base_url()."c_secures/editsecure/". $secures->ndex; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#simpleModal<?= $secures->ndex; ?>">Delete</button>
                                        <!-- BEGIN SIMPLE MODAL MARKUP -->
                                        <div class="modal fade" id="simpleModal<?= $secures->ndex; ?>" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">  
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="simpleModalLabel">Delete Confirm</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you Sure to Delete?</p>
                                                        <p><strong>Secute note name : </strong> <?= $secures->name; ?> <br><strong>Secute note folder: </strong> <?= $secures->folder; ?>  </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                        <a href="<?= base_url()."c_secures/deletesecure/". $secures->ndex; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <!-- END SIMPLE MODAL MARKUP -->
                                    </td>
                                     <?php
                                        } 
                                    ?>
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
