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
                    <form action="<?= base_url()."c_mainusers/updateuser" ?>" method="post">
                        <input type="hidden" name="ndex" value="<?= $thisuser['ndex'] ?>">
                        <div >
                            <input type="hidden" class="form-control" id="role" name="role" value="user" required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="accessno">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $thisuser['email']?>">
                        </div>
                        <div class="form-group floating-label">
                            <label for="accessno">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $thisuser['firstname']?>">
                        </div>
                        <div class="form-group floating-label">
                            <label for="accessno">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $thisuser['lastname']?>">
                        </div>

                        <div class="form-group floating-label">
                            <label for="accessno">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="">
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

