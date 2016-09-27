
<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="<?= base_url()."assets/mat-admin" ?>/html/dashboards/dashboard.html">
                <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
            </a>
        </div>
    </div>
    <div class="menubar-scroll-panel">

        <!-- BEGIN MAIN MENU -->
        <ul id="main-menu" class="gui-controls">

            <!-- BEGIN DASHBOARD -->
            <?php if ($this->session->userdata('role') != 'admin'){ ?>
            <li>
                <a href="<?= base_url()."c_accounts" ?>" >
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <!-- END DASHBOARD -->

            <!-- BEGIN DASHBOARD -->
            
            <li>
                <a href="<?= base_url()."c_accounts/newaccount" ?>" >
                    <div class="gui-icon"><i class="fa fa-plus"></i></div>
                    <span class="title">Add Site</span>
                </a>
            </li>
            <!-- END DASHBOARD -->
            
            <!-- BEGIN SECUTE NOTE -->
            
            <li>
                <a href="<?= base_url()."c_secures" ?>" >
                    <div class="gui-icon"><i class="md md-description"></i></div>
                    <span class="title">Secure Notes</span>
                </a>
            </li>
            <!-- END SECUTE NOTE -->

            <!-- BEGIN ADD SECUTE NOTE -->
            <li>
                <a href="<?= base_url()."c_secures/newsecure" ?>" >
                    <div class="gui-icon"><i class="fa fa-plus"></i></div>
                    <span class="title">Add Secure Notes</span>
                </a>
            </li>
            <!-- BEGIN LOG ACTIVITY -->
            <li>
                <a href="<?= base_url()."c_devlogs" ?>" >
                    <div class="gui-icon"><i class="glyphicon glyphicon-log-in"></i></div>
                    <span class="title">Log Activity</span>
                </a>
            </li>
            <!-- END LOG ACTIVITY -->
            <?php } ?>
            <!-- END ADD SECUTE NOTE  -->

            <!-- BEGIN USERS -->
            <li>
                <?php if ($this->session->userdata('role') == 'admin'){ ?>
                    <a href="<?= base_url()."c_mainusers" ?>" >
                        <div class="gui-icon"><i class="fa fa-user"></i></div>
                        <span class="title">Users</span>
                    </a>

                    <a href="<?= base_url()."c_audit_trails" ?>" >
                        <div class="gui-icon"><i class="fa fa-user"></i></div>
                        <span class="title">Audit Trails</span>
                    </a>
                <?php } ?>
            </li>
            <!-- END USERS -->
            <!-- <li>
                <?php if ($this->session->userdata('role') != 'admin'){ ?>
                    <a href="<?= base_url()."c_mainusers/newuser" ?>" >
                        <div class="gui-icon"><i class="fa fa-plus"></i></div>
                        <span class="title">Add User</span>
                    </a>
                <?php } ?>
            </li>
 -->

            
            <!-- BEGIN DASHBOARD -->
            <!-- <li>
                <a href="<?= base_url()."c_accounts" ?>" >
                    <div class="gui-icon"><i class="md md-web"></i></div>
                    <span class="title">Dashboard</span>
                </a>
            </li> --><!--end /menu-li -->
            <!-- END DASHBOARD -->

            <!-- BEGIN UI -->
            <!-- <li>
                <a>
                    <div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
                    <span class="title">UI elements</span>
                </a>
            </li> --><!--end /menu-li -->
            <!-- END UI -->

            <!-- BEGIN TABLES -->
            <!-- <li>
                <a>
                    <div class="gui-icon"><i class="fa fa-table"></i></div>
                    <span class="title">Tables</span>
                </a>
            </li> --><!--end /menu-li -->
            <!-- END TABLES -->


            </div><!--end #base-->
        </ul>
    </div>
</div>
<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->
<script src="<?= base_url()."assets/mat-admin" ?>/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/libs/spin.js/spin.min.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/core/source/App.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/core/source/AppNavigation.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/core/source/AppOffcanvas.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/core/source/AppCard.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/core/source/AppForm.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/core/source/AppNavSearch.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/core/source/AppVendor.js"></script>
<script src="<?= base_url()."assets/mat-admin" ?>/js/core/demo/Demox    .js"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
