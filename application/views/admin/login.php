<?php $this->load->view('admin/login_header'); ?>

<!-- BEGIN LOGIN SECTION -->

                    <form class="form floating-label" action="<?= base_url()."c_logins/beginlogin" ?>" accept-charset="utf-8" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <label for="password">Password</label>
                            <p class="help-block"><a href="<?= base_url()."c_forgotpass/"; ?>">Forgot Password?</a></p>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <div class="checkbox checkbox-inline checkbox-styled">
                                    <label>
                                        <input type="checkbox"> <span>Remember me</span>
                                    </label>
                                </div>
                            </div><!--end .col -->
                            <div class="col-xs-3 text-right">
                                <button class="btn btn-primary btn-raised" type="submit">Sign-In</button>
                            </div>

                            <div class="col-xs-3 text-right">

                                <button class="btn btn-primary btn-raised"><a href="<?= base_url()."c_signups/newuser/"; ?>">Sign-Up</a></button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                
<?php $this->load->view('admin/login_footer'); ?>