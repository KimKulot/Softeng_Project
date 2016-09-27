<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">Account List</li>
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
                                <th>URL</th>
                                <th>Username</th>
                                <?php if ($this->session->userdata('role') != 'admin'){ ?>
                                <th>Action</th>
                                <?php } ?>
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                            $ctr = 1;
                            $url = "";
                            foreach($listOfAccounts as $account)
                            {
                         ?>

                                <tr>
                                <?php 
                                    if ($this->session->userdata('role') == 'admin') {
                                  ?>
                                    <td><?= $ctr++; ?></td>
                                    <!--<td>$account->user_id<!--</td>-->
                                    <td><?= $account->url; ?></td>
                                    <td><?= $account->username; ?></td>
                                        
                                </tr>
                                  <?php 
                                    }elseif ($this->session->userdata('ndex') == $account->user_id) {
                                  ?>
                                    <td><?= $ctr++; ?></td>
                                    <!--<td>$account->user_id<!--</td>-->
                                    
                                    
                                    <td><?= $account->url; ?></td>
                                    <td><?= $account->username; ?></td>
                                    <td>
                                        <?php if($account->url == 'www.fp_checkKoBayadKo.com'){
                                            $url='http://localhost/fp_checkKoBayadKo/public/site/login';
                                        }
                                        ?>
                                        <?php if ($this->session->userdata('role') != 'admin'){ ?>
                                            <a href="<?= base_url()."c_accounts/editaccount/". $account->ndex; ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <div class="pull-left">
                                            <form method="post" action="<?= base_url()."c_accounts/retrieved/";?>">
                                            <input type="hidden" name="email" value="<?= $account->username; ?>" >
                                                <input type="hidden" name="password" value="<?= $this->encrypt->decode($account->password); ?>">
                                            <button class="btn btn-success btn-sm" type="submit">Retrieved password</button>
                                                
                                            </form>
                                            </div>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#simpleModal<?= $account->ndex; ?>">Delete</button>
                                            <div class="pull-left">
                                            
                                            <div class="pull-left">
                                            <form method="post" action="<?= $url;?>">
                                            <input type="hidden" name="email" value="<?= $account->username; ?>" >
                                                <input type="hidden" name="password" value="<?= $this->encrypt->decode($account->password); ?>">
                                            <button class="btn btn-primary btn-sm" type="submit" title="LOGIN">LOGIN</button>
                                                <input name="login" type="hidden" id="login" value="submit">
                                            </form> 
                                            
                                            </div>

                                        <?php } ?>
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
                                                        <p><strong>Account URL : </strong> <?= $account->url; ?> <br><strong>Account Username : </strong> <?= $account->username; ?>  </p>
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
