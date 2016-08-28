  
<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">Users <?=count($listOfAccounts) ?></li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="card">

                <div class="card-body">
                    <a href="<?= base_url()."c_mainusers/newuser"?>" class="btn btn-primary btn-sm pull-right">Add User</a>
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                          <?php
                            $ctr = 1;
                            foreach($listOfAccounts as $user)
                            {
                         ?>

                                <tr>
                                    <td><?= $ctr++; ?></td>
                                    <td><?= $user->email; ?></td>
                                    <td><?= $user->firstname; ?></td>
                                    <td><?= $user->lastname; ?></td>
                                    <td>

                                      <a href="<?= base_url()."c_mainusers/edituser/". $user->ndex; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#simpleModal<?= $user->ndex; ?>">Delete</button>
                                        <!-- BEGIN SIMPLE MODAL MARKUP -->
                                        <div class="modal fade" id="simpleModal<?= $user->ndex; ?>" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="simpleModalLabel">Delete Confirm</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you Sure to Delete?</p>
                                                        <p><strong>Full Name : </strong> <?= $user->lastname . ', ' . $user->firstname; ?> <br><strong>Account Email : </strong> <?= $user->email; ?>  </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                        <a href="<?= base_url()."c_accounts/deleteaccount/". $user->ndex; ?>" class="btn btn-danger btn-sm">Delete</a>
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
