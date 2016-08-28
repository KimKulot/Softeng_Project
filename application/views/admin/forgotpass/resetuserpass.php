<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">Reset Password</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url()."c_forgotpass/resetpass" ?>" method="post">
                        <input type="hidden" name="ndex" value="<?= $thisuser['ndex'] ?>">
                        <div >
                            <input type="hidden" class="form-control" id="role" name="role" value="user" required>
                        </div>

                        <div class="form-group floating-label">
                            <label for="accessno">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="">
                        </div>

                        <div class="form-group floating-label">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="" required>
                        </div>

                        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Submit</button>
                    </form>

                </div>
            </div>

        </div><!--end .section-body -->
    </section>

    <!-- BEGIN BLANK SECTION -->
</div><!--end #content-->
<!-- END CONTENT -->

