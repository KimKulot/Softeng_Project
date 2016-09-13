<?php $this->load->view('admin/login_header'); ?>
	<h1>Key code and code link successfully send to your email</h1>
	<button class="btn btn-primary btn-raised"><a href="<?= base_url()."c_mainusers/set_code"; ?>">Proceed</a></button>
<?php $this->load->view('admin/login_footer'); ?>