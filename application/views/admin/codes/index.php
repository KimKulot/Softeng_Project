<?php $this->load->view('admin/login_header'); ?>

	<form class="form floating-label" action="<?= base_url()."c_mainusers/code_check" ?>" accept-charset="utf-8" method="post">
        <div class="form-group">
            <input type="text" class="form-control" id="code" name="code" required>
            <label for="code">Code</label>
        </div>
        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Submit</button>
        <br/>
        
    </form>

<?php $this->load->view('admin/login_footer'); ?>