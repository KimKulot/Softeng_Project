<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">Edit User</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url()."c_accounts/updateaccount" ?>" method="post">
                        <input type="hidden" name="ndex" value="<?= $thisaccount['ndex'] ?>">
                        <div class="form-group floating-label">
                            <label for="label">URL</label>
                            <input type="text" class="form-control" id="label" name="label" value="<?= $thisaccount['label']?>">
                        </div>
                        <div class="form-group floating-label">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $thisaccount['email']?>">
                        </div>

                        <div class="form-group floating-label">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="" required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="" required>
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

