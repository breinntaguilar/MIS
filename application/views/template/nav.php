<!-- Navbar
    ================================================== -->

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="<?php echo  base_url()?>">TGO HRIS</a>
            <!--
            <div class="nav-collapse" id="main-menu">
                <ul class="nav" id="main-menu-left">
                    <li><a class="#" href="<?php echo  base_url()?>">Gallery</a></li>
                </ul>
            </div> -->
            <?php if ($this->session->userdata('user_id')) : ?>
            <div class="pull-right">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> Welcome, Lemonade<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('user/edit_account'); ?>"><i class="icon-edit"></i> Edit Account</a></li>
                            <li><a href="<?php echo site_url('user/change_password'); ?>"><i class="icon-cog"></i> Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('auth/logout'); ?>"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
