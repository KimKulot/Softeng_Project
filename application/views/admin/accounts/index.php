<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">Account List <?=count($listOfAccounts) ?></li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                <a href="<?= base_url()."c_accounts/newaccount"?>" class="btn btn-primary btn-sm pull-right">Add Account</a>
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>#</th>
                                <!-- <th>user_id<th> -->
                                <th>Label</th>
                                <th>Username</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                            $ctr = 1;
                            foreach($listOfAccounts as $account)
                            {
                         ?>

                                <tr>
                                    <td><?= $ctr++; ?></td>
                                    <!--<td>$account->user_id<!--</td>-->
                                    <td><?= $account->label; ?></td>
                                    <td><?= $account->email; ?></td>
                                    <td>
                                        <a href="<?= base_url()."c_accounts/editaccount/". $account->ndex; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#simpleModal<?= $account->ndex; ?>">Delete</button>
                                        <!-- BEGIN SIMPLE MODAL MARKUP -->
                                        <div class="modal fade" id="simpleModal<?= $account->ndex; ?>" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="simpleModalLabel">Delete Confirm</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you Sure to Delete?</p>
                                                        <p><strong>Account Label : </strong> <?= $account->label; ?> <br><strong>Account Email : </strong> <?= $account->email; ?>  </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                        <a href="<?= base_url()."c_accounts/deleteaccount/". $account->ndex; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <!-- END SIMPLE MODAL MARKUP -->
                                    </td>
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
