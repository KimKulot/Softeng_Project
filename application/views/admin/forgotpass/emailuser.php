
<?php $this->load->view('admin/access_header') ?>
<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">Input your Email</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url()."c_forgotpass/email_check" ?>" method="post">
                        <div >
                            <input type="hidden" class="form-control" id="role" name="role" value="user" required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="accessno">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
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


<?php $this->load->view('admin/footer') ?>