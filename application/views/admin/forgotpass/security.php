<?php $this->load->view('admin/login_header'); ?>
<div class="card">
                <div class="card-body">
                    <form action="<?= base_url()."c_forgotpass/checksecurity" ?>" method="post">
						<div class="form-group floating-label">
					        <label for="security_question">Security Question </label>
					        <select class="form-control" id="security_question" name="security_question" required>
					            <option value="1">What is your favorite color?</option>
					            <option value="2">Who's your crush?</option>
					            <option value="3?">What is the name of your pet?</option>
					        </select>
					    </div>

					    <div class="form-group floating-label">
					        <label for="security_answer">Answer</label>
					        <input type="text" class="form-control" id="security_answer" name="security_answer" required>
					    </div>
    			<button class="btn ink-reaction btn-primary btn-raised" type="submit">Submit</button>
		    </form>
		</div>
	</div>

<?php $this->load->view('admin/login_footer'); ?>