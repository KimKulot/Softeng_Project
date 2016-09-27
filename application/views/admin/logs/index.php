<!-- BEGIN CONTENT-->
<div id="content">
    <div class="card contain-sm style-transparent">
        <div class="row">
            <div class="col-sm-3"></div>
                <div class="col-sm-12" style="text-align: left;">
                    <!-- BEGIN BLANK SECTION -->
                    <section>
                        <div class="section-header">
                            <ol class="breadcrumb">
                                <li><a href="<?= base_url()."assets/mat-admin" ?>/html/.html">home</a></li>
                                <li class="active">Device Activity</li>
                            </ol>
                        </div><!--end .section-header -->
                        <div class="section-body">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table no-margin">
                                        <tbody>
                        
                                        <?php
                                            $count = 1;
                                            $counter = 1;
                                            $browser = get_browser(null, true);
                                            foreach($listOfLogs as $logs)
                                            {
                                                if ($this->session->userdata('ndex') == $logs->user_id) {
                                                  if($counter <= 3) {
                                                    
                                        ?>  <tr>
                                                <?php if ($counter == 1) {
                                                         $counter++; ?>
                                                    <td>
                                                    <?php if($browser['device_type'] == "Desktop"){ ?>
                                                        <img height="25px" src="<?= base_url()."assets/mat-admin" ?>/img/laptop.png" alt="" />
                                                    <?php }elseif ($browser['device_type'] == "Mobile Phone" || $browser['device_type'] == "Mobile Device") { ?>
                                                        <img height="25px" src="<?= base_url()."assets/mat-admin" ?>/img/mobile.png" alt="" />
                                                    <?php }elseif ($browser['device_type'] == "Tablet") { ?>
                                                        <img height="25 px" src="<?= base_url()."assets/mat-admin" ?>/img/tablet.png" alt="" />
                                                    <?php } ?>
                                                    <?= $browser['platform']; ?>
                                                </td>
                                                <td><?= $browser['parent'] . " "; ?>
                                                    <?php if ($count > 1) {
                                                        echo  " - <span class='text-primary'>" .  $logs->time . "</span> "; 

                                                    }else{?> 
                                                        <span class="text-success">CURRENT DEVICE</span>
                                                    <?php  $count++;} ?>
                                                </td>
                                                <?php }else{
                                                     $counter++;
                                                ?>
                                                <td>
                                                    <?php if($logs->devicetype == "Desktop"){ ?>
                                                        <img height="25px" src="<?= base_url()."assets/mat-admin" ?>/img/laptop.png" alt="" />
                                                    <?php }elseif ($logs->devicetype == "Mobile Phone" || $logs->devicetype == "Mobile Device") { ?>
                                                        <img height="25px" src="<?= base_url()."assets/mat-admin" ?>/img/mobile.png" alt="" />
                                                    <?php }elseif ($logs->devicetype == "Tablet") { ?>
                                                        <img height="25 px" src="<?= base_url()."assets/mat-admin" ?>/img/tablet.png" alt="" />
                                                    <?php } ?>
                                                    <?= $logs->platform; ?>
                                                </td>
                                                <td><?= $logs->browser . " "; ?>
                                                    <?php if ($count > 1) {
                                                        echo  " - <span class='text-primary'>" .  $logs->time . "</span> "; 

                                                    }else{?> 
                                                        <span class="text-success">CURRENT DEVICE</span>
                                                    <?php  $count++;} ?>
                                                </td>
                                                                             
                                            </tr>
                                        <?php 
                                                        }
                                                    }
                                                }
                                            }
                                        ?>


                                        </tbody>
                                    </table>
                                    <br>
                                    <a  href="<?= base_url()."c_devlogs/index_readmore/"; ?>" class="btn btn-primary btn-sm">View More</a>
                                </div>
                            </div>
                        </div><!--end .section-body -->
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN BLANK SECTION -->
</div><!--end #content-->
<!-- END CONTENT -->
