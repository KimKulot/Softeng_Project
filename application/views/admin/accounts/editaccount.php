<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <div class="card contain-sm style-transparent">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-12" style="text-align: left;">
    <section>
        <div class="section-body">
            <div class="card card-bordered style-primary">
                <div class="card-head">
                    <header><i class="fa fa-fw fa-tag"></i>Edit User</header>
                </div>
                <div class="card-body style-default-bright">
                    <form action="<?= base_url()."c_accounts/updateaccount" ?>" method="post">
                        <input type="hidden" name="ndex" value="<?= $thisaccount['ndex'] ?>">
                        <div class="form-group floating-label">
                            <label for="url">URL</label>
                            <input type="text" class="form-control" id="url" name="url" value="<?= $thisaccount['url']?>">
                        </div>
                        <div class="form-group floating-label">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $thisaccount['username']?>">
                        </div>

                        <div class="form-group floating-label">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="" required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="" required>
                        </div>

                        <div class="form-group floating-label">
                            <label for="note">Note</label>
                                <textarea  name="note" rows="2" id="note" class="form-control" placeholder="Write Something" required><?= $thisaccount['note']?></textarea>
                        </div>
                        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Update</button>
                    </form>

                </div>
            </div>

        </div><!--end .section-body -->
    </section>

    <!-- BEGIN BLANK SECTION -->
</div><!--end #content-->
<!-- END CONTENT -->

 </div><!--end .col -->
                <div class="col-sm-3"></div>
            </div><!--end .row -->
        </div>