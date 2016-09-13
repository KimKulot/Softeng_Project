<?php $this->load->view('admin/login_header'); ?>

	<button class="btn btn-primary btn-raised"><a href="<?= base_url()."c_forgotpass/security_question"; ?>">Security Question</a></button>
	<button class="btn btn-primary btn-raised"><a href="<?= base_url()."c_forgotpass/"; ?>">Email</a></button>

<?php $this->load->view('admin/login_footer'); ?>