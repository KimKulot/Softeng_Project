

<!-- BEGIN CONTENT-->
<?php $this->load->view('admin/login_header'); ?>

<!-- BEGIN LOGIN SECTION -->

                    <form class="form floating-label" action="<?= base_url()."c_forgotpass/email_check" ?>" accept-charset="utf-8" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" required>
                            <label for="accessno">Email</label>
                        </div>
                        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Submit</button>
                        <br/>
                        
                    </form>
               

<?php $this->load->view('admin/login_footer'); ?>

   