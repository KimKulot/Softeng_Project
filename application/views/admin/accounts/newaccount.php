<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <div class="card contain-sm style-transparent">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-12" style="text-align: left;">
    <section>
            <br>
            <div class="card card-bordered style-primary">
                <div class="card-head">
                    <header><i class="fa fa-fw fa-tag"></i> New Site</header>
                </div>
                <div class="card-body style-default-bright">
                    <form action="<?= base_url()."c_accounts/addaccount" ?>" method="post">
                        

                        <div class="form-group floating-label">
                            <label for="url">URL</label>
                            <select class="form-control" id="url" name="url" required>
                                <option value="www.fp_checkKoBayadKo.com">www.fp_checkKoBayadKo.com</option>
                            </select>
                        </div>

                        <div class="form-group floating-label">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>

                        <div class="form-group floating-label">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"  required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="note">Note</label>
                                <textarea  name="note" rows="<2></2>" id="note" class="form-control" placeholder="Write Something" required></textarea>
                        </div>

                        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Save</button>
                    </form>

                </div>
            </div>

        </div>

    <!-- BEGIN BLANK SECTION -->
</div><!--end #content-->
<!-- END CONTENT -->

                    </div><!--end .col -->
                <div class="col-sm-3"></div>
            </div><!--end .row -->
    </div>




<!--<html>-->
<!--    <head><title>My Books</title></head>-->
<!--    <body>-->
<!--        <h1>Add New Book</h1>-->
<!--        <hr>-->
<!--        <form action="--><?//= base_url()."book/addbook" ?><!--" method="post">-->
<!--            <label for="">Book Title *</label>-->
<!--            <input type="text" placeholder="Book Title" name="booktitle" required> <br>-->
<!--            <label for="">Book Description *</label>-->
<!--            <input type="text" placeholder="Description" name="bookdesc" required> <br>-->
<!--            <label for="">Author Name *</label>-->
<!--            <input type="text" placeholder="Description" name="authorname" required><br>-->
<!--            <button type="submit">Save</button>-->
<!--        </form>-->
<!--    </body>-->
<!--</html>-->