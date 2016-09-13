<!-- BEGIN CONTENT-->
<div id="content">
     <div class="card contain-sm style-transparent">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-12" style="text-align: left;">
    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-body">
           <div class="card card-bordered style-primary">
                <div class="card-head">
                    <header><i class="fa fa-fw fa-tag"></i>Edit Secure Note</header>
                </div>
                <div class="card-body style-default-bright">
                    <form action="<?= base_url()."c_secures/updatesecure" ?>" method="post">
                        <input type="hidden" name="ndex" value="<?= $thissecure['ndex'] ?>">
                        <div class="form-group floating-label">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $thissecure['name']?>">
                        </div>
                        <div class="form-group floating-label">
                            <label for="folder">Folder</label>
                             <select type="text" class="form-control" id="folder" name="folder" value="<?= $thissecure['folder']?>" required>
                                <option value="Social">Social</option>
                                <option value="Personal">Personal</option>
                             </select>
                        </div>
                       

                        <div class="form-group floating-label">
                            <label for="note_type">Note-Type </label>
                            <select class="form-control" id="note_type" name="note_type" value="<?= $thissecure['note_type']?>" required>
                                <option value="Bank Account">Bank Account</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Driver's License">Driver's License</option>
                                <option value="Passport">Passport</option>
                                <option value="WiFi Password">WiFi Password</option>
                                <option value="Social Security">Social Security</option>
                            </select>
                        </div>

                        <div class="form-group floating-label">
                            <label for="note">Note</label>
                                <textarea  name="note" rows="2" id="note" class="form-control" placeholder="Note" required><?= $thissecure['note']?></textarea>
                        </div>
                        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Update</button>
                    </form>

                </div>
            </div>

        </div><!--end .section-body -->
    </section>

    <!-- BEGIN BLANK SECTION -->
</div><!--end #content-->
<!-- END CONTENT -->

                     </div><!--end .col -->
                <div class="col-sm-3"></div>
            </div><!--end .row -->
    </div>