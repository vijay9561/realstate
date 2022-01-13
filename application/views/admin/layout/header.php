<script>
	function isNumber(evt, element) {
   // evt = (evt) ? evt : window.event;
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (
            (charCode!=8  || $(element).val()) &&  
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      // “.” CHECK DOT, AND ONLY ONE.
            (charCode < 48 || charCode > 57)){
		
       alert('Only Accept Numeric Values');
	   return false;
    } 
	
    return true;
}
</script>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url(); ?>admin">SAIBROKING ADMIN PANEL</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>-->
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php echo $this->session->userdata('MAINADMIN'); ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
					<li class="divider"></li>
						<li>
                            <a href="<?php echo site_url();?>admin_password_change"><i class="fa fa-pencil"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo site_url();?>logout-admin"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
						
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                  <li class="<?= $page=='Home'? "active" :""; ?>">
                        <a href="<?php echo site_url(); ?>admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <?php /*?>   <li class="<?= $page=='Gallery Categires'? "active" :""; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Property Category<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo site_url(); ?>property-category">Add Category</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>view-property-category">View Categories</a>
                            </li>
                        </ul>
                    </li><?php */?>
					<li class="<?= $page=='Property'? "active" :""; ?>"> <a href="<?php echo site_url();?>view-admin-property">View Property</a></li>
								<li class="<?= $page=='Active Property'? "active" :""; ?>"> <a href="<?php echo site_url();?>active_admin_property">Active Property</a></li>
					<li class="<?= $page=='Inactive Property'? "active" :""; ?>"> <a href="<?php echo site_url();?>inactive_admin_property">Inactive Property</a></li>
					<li class="<?= $page=='Search Users Post Requirment'? "active" :""; ?>"> <a href="<?php echo site_url(); ?>search_users_post_requirment">Search Requirement</a></li>
					<li class="<?= $page=='View Property Other'? "active" :""; ?>"> <a href="<?php echo site_url(); ?>view_property_other">Other Services</a></li>
					
					<li class="<?= $page=='Registered Users'? "active" :""; ?>"> <a href="<?php echo site_url(); ?>registered-users">Registered Users</a></li>
					
					<li class="<?= $page=='Main Category'? "active" :""; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#main"><i class="fa fa-fw fa-arrows-v"></i>Main Category<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="main" class="collapse">
                            <li>
                                <a href="<?php echo site_url(); ?>add-main-category-property">Add Category</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>view-main-property-category">View Category</a>
                            </li>
                        </ul>
                    </li>
					
					<li class="<?= $page=='Sub Category'? "active" :""; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#category"><i class="fa fa-fw fa-arrows-v"></i>Sub Category<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="category" class="collapse">
                            <li>
                                <a href="<?php echo site_url(); ?>add_admin_sub_category">Add Sub Category</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>view_sub_category">View Sub Category</a>
                            </li>
                        </ul>
                    </li>
	<li class="<?= $page=='Sub Sub Category'? "active" :""; ?>"> <a href="<?php echo site_url(); ?>sub_sub_category">Sub Sub Category</a></li>
					
					
                    <?php /*?><li class="<?= $page=='Gallery'? "active" :""; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#news"><i class="fa fa-fw fa-arrows-v"></i>Property<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="news" class="collapse">
                            <li>
                                <a href="<?php echo site_url(); ?>admin-property">Add Property</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>view-admin-property">View Property</a>
                            </li>
                        </ul>
                    </li><?php */?>
                <?php /*?> <li class="<?= $page=='Portfolio'? "active" :""; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#Portfolio"><i class="fa fa-fw fa-arrows-v"></i> Car Package <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Portfolio" class="collapse">
                            <li>
                                <a href="<?php echo site_url(); ?>admin-packages">Add Car Package</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>view-admin-packages">View Package</a>
                            </li>
                        </ul>
                    </li><?php */?>
				<?php /*?><li class="<?= $page=='Porfolio Category'? "active" :""; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#Category"><i class="fa fa-fw fa-arrows-v"></i> Portfolio Category <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Category" class="collapse">
                            <li>
                                <a href="<?php echo site_url(); ?>portfolio_category">Add Portfolio Category</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>view-portfolio-category">View Portfolio Category</a>
                            </li>
                        </ul>
                    </li><?php */?>
					
						<?php /*?><li  class="<?= $page=='Activites'? "active" :""; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#activites"><i class="fa fa-fw fa-arrows-v"></i>Activites<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="activites" class="collapse">
                            <li>
                                <a href="<?php echo site_url(); ?>adminactivistes">Add Activites</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>admin_view_activities">View Activites</a>
                            </li>
                        </ul>
                    </li><?php */?>
					<li class="<?= $page=='Gallery Categires'? "active" :""; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#advertisment"><i class="fa fa-fw fa-arrows-v"></i>Advertisement<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="advertisment" class="collapse">
                            <li>
                                <a href="<?php echo site_url(); ?>advertisment">Add Advertisement</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>view_advertisement">View Advertisement</a>
                            </li>
                        </ul>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
