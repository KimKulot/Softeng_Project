<!-- BEGIN HEADER -->
<?php $this->load->view('admin/login_header'); ?>
<!-- END HEADER -->

<!-- BEGIN CONTENT -->
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url()."c_mainusers/sentkeycode" ?>" method="post">
                        <div >
                            <input type="hidden" class="form-control" id="role" name="role" value="user" required>
                        </div>

                        <div class="form-group floating-label">
                            <label for="accessno">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="accessno">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="accessno">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>

                        <div class="form-group floating-label">
                            <label for="accessno">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirmpassword" required>
                        </div>

                       <!--  <div class="form-group floating-label">
                            <label for="security_question">Security Question </label>
                            <select class="form-control" id="security_question" name="security_question" required>
                                <option value="1">What is your favorite color?</option>
                                <option value="2">Who's your crush?</option>
                                <option value="3?">What is the name of your pet?</option>
                            </select>
                        </div> -->

                        <!-- <div class="form-group floating-label">
                            <label for="security_answer">Answer</label>
                            <input type="text" class="form-control" id="security_answer" name="security_answer" required>
                        </div> -->

                        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Submit</button>
                        
							 <button class="btn btn-primary btn-raised text-right"><a href="<?= base_url()."c_logins"; ?>">Sign-In</a></button>
                        
                    </form>
				</div>
             </div>

<!-- END CONTENT -->

<!-- BEGIN SCRIPT -->
<script>
    var password = document.getElementById("password")
      , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
<!-- END SCRIPT -->

<!-- BEGIN FOOTER -->
<?php $this->load->view('admin/login_footer'); ?>
<!-- END FOOTER -->

