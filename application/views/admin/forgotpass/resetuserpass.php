

<!-- BEGIN CONTENT-->
<?php $this->load->view('admin/login_header'); ?>

<!-- BEGIN LOGIN SECTION -->

                    <form class="form floating-label" action="<?= base_url()."c_forgotpass/resetpass" ?>" accept-charset="utf-8" method="post">
                    <input type="hidden" name="ndex" value="<?= $thisuser['ndex'] ?>">
                         <div class="form-group"> 
                            <input type="password" class="form-control" id="password" name="password" value="">
                            <label for="password">Password</label>
                        </div>
                         <div class="form-group">
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="" required>
                            <label for="confirmpassword">Confirm Password</label>
                            
                        </div>
                        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Submit</button>
                        <br/>
                        
                    </form>
               
<?php $this->load->view('admin/login_footer'); ?>


   

