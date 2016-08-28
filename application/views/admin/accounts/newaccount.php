<!-- BEGIN CONTENT-->
<div id="content">

    <!-- BEGIN BLANK SECTION -->
    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                <li class="active">New Book</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url()."c_accounts/addaccount" ?>" method="post">
                         <div class="form-group floating-label">
                            <label for="label">URL</label>
                            <input type="text" class="form-control" id="label" name="label">
                        </div>
                        <div class="form-group floating-label">
                            <label for="email"> Username</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group floating-label">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"  required>
                        </div>
                        <div class="form-group floating-label">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
                        </div>


                        <button class="btn ink-reaction btn-primary btn-raised" type="submit">Save</button>
                    </form>

                </div>
            </div>

        </div><!--end .section-body -->
    </section>

    <!-- BEGIN BLANK SECTION -->
</div><!--end #content-->
<!-- END CONTENT -->






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