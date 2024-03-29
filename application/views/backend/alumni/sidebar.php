            <div class="sidebar" data-color="<?php echo $_SESSION['theme_color'] ?>" data-background-color="white" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.png">
                <div class="logo">
                    <a href="<?php echo base_url()?>" class="simple-text logo-normal">
                      <img width="50%" src="<?php echo base_url()?>assets/img/logo.png" alt="">
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item <?php if($page_name == 'dashboard') echo 'active' ?>">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php/alumni/dashboard">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($page_name == 'notifications') echo 'active' ?>">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php/alumni/notifications">
                                <i class="material-icons">notifications</i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($page_name == 'announcement') echo 'active' ?>">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php/alumni/announcement">
                                <i class="material-icons">announcement</i>
                                <p>Announcement</p>
                            </a>
                        </li>
                        <li class="nav-item <?php if($page_name == 'appointment') echo 'active' ?>">
                            <a class="nav-link" href="<?php echo base_url();?>index.php/alumni/appointment">
                                <i class="material-icons">event</i>
                                <p>Appointment</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>