<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">New User</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url()."book/adduser" ?>" method="post">
                        <div class="form-group floating-label">
                            <label for="accessno">Email.</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group floating-label">
                            <label for="accessno">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>

                        <div class="form-group floating-label">
                            <label for="accessno">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>

                        <div class="form-group floating-label">
                            <label for="accessno">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>


                        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Save</button>
                    </form>

                </div>
            </div>

        </div><!--end .section-body -->
    </section>

    <!-- BEGIN BLANK SECTION -->
</div><!--end #content-->
<!-- END CONTENT -->


<!--</html>-->