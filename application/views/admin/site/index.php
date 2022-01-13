
<style>
.panel-title:hover {
     cursor: pointer;
}

.accordion_head {
    background-color:#337ab7;
    color: white;
    cursor: pointer;
    font-size: 14px;
    margin: 0 0 1px 0;
    padding: 7px 11px;
    font-weight: bold;
}
.accordion_body {
  /*  background: lightgray;*/
  border:1px solid #337ab7;
  margin-top: -1px;
}
.accordion_body p {
    padding: 18px 5px;
    margin: 0px;
}
.plusminus {
    float:right;
}
</style>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function () {
        if ($('.accordion_body').is(':visible')) {
            $(".accordion_body").slideUp(300);
            $(".plusminus").text('+');
        }
        if ($(this).next(".accordion_body").is(':visible')) {
            $(this).next(".accordion_body").slideUp(300);
            $(this).children(".plusminus").text('+');
        } else {
            $(this).next(".accordion_body").slideDown(300);
            $(this).children(".plusminus").text('-');
        }
    });
});
</script>

            <div class="container-fluid">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>SAIBROKING</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                <!-- /.row -->

                
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-building-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php $totalproperty=$this->db->query("select *from property_post where main_categories_id IN(1) ")->result(); ?>
                                        <div class="huge"><?php echo  count($totalproperty); ?></div>
                                        <div>Total Property!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo site_url(); ?>view-admin-property">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php $activecount=$this->db->query("select *from property_post where main_categories_id IN(1) and  status='active'")->result(); ?>
                                        <div class="huge"><?php echo count($activecount); ?></div>
                                        <div>Total Active Property</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo site_url();?>active_admin_property">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-close fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
										<?php $inactive=$this->db->query("select *from property_post where  main_categories_id IN(1) and status='inactive'")->result(); ?>
                                        <div class="huge"><?php echo count($inactive); ?></div>
                                        <div>Total Pending Property</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo site_url();?>inactive_admin_property">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
					
					
					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php $totalusers=$this->db->query("select *from users")->result(); ?>
                                        <div class="huge"><?php  echo count($totalusers); ?></div>
                                        <div>Total Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo site_url(); ?>registered-users">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					
					
					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-building-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php $totalothercategory=$this->db->query("select *from property_post where main_categories_id IN(3,4,5,6,7,8,9,10,11,12,13,14,16)")->result(); ?>
                                        <div class="huge"><?php  echo count($totalothercategory); ?></div>
                                        <div>Total Other Services</div>
                                    </div>
                                </div>
                            </div>
                           
                                <div class="panel-footer">
                                   <div class="accordion_container">
    <div class="accordion_head"><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;Total List Other Services<span class="plusminus">+</span>
    </div>
    <div class="accordion_body" style="display: none;">
       <div class="panel-body">
             <ul style="list-style-type:none; ">
			 <?php $listofallcount=$this->db->query("select *from main_category where mid IN(3,4,5,6,7,8,9,10,11,12,13,14,16)")->result(); 
			 foreach($listofallcount as $listofall){
			 $otherlist=$this->db->query("select *from property_post where main_categories_id='".$listofall->mid."'")->result(); ?> 
			 <li><a href="<?php echo site_url(); ?>view_property_other?totalallservicess=<?php echo $listofall->mid;  ?>"><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;<?php echo $listofall->category_name; ?> &nbsp;(<?php echo count($otherlist);?>)</a></li>
			 <?php } ?>
			 </ul>
            </div>
    </div>
    
	
</div>
                                </div>
                         
                        </div>
						
 </div>
					
					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php $totalactiveothers=$this->db->query("select *from property_post where main_categories_id IN(3,4,5,6,7,8,9,10,11,12,13,14,16) and status='active'")->result(); ?>
                                        <div class="huge"><?php  echo count($totalactiveothers); ?></div>
                                        <div>Total Active Other Services </div>
                                    </div>
                                </div>
                            </div>
                            
                                <div class="panel-footer">
                                   <div class="accordion_container">
    <div class="accordion_head" style="background-color:#5cb85c; "><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;Pending List Other Services<span class="plusminus">+</span>
 
    </div>
    <div class="accordion_body" style="display: none; border: 1px solid #5cb85c;">
       <div class="panel-body">
             <ul style="list-style-type:none; ">
			 <?php $listofallcount2=$this->db->query("select *from main_category where mid IN(3,4,5,6,7,8,9,10,11,12,13,14,16)")->result(); 
			 foreach($listofallcount2 as $listofall){
			 $otherlist=$this->db->query("select *from property_post where main_categories_id='".$listofall->mid."' and status='active'")->result(); ?> 
			 <li><a  style="color:#5cb85c;" href="<?php echo site_url(); ?>view_property_other?totalactivecateogry=<?php echo $listofall->mid;  ?>"><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;<?php echo $listofall->category_name; ?> &nbsp;(<?php echo count($otherlist);?>)</a></li>
			 <?php } ?>
			 </ul>
            </div>
    </div>
    
	
</div>
                                </div>
                            
                        </div>
						
                    </div>
					
					
					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-close fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php $inactivesatusother=$this->db->query("select *from property_post where main_categories_id IN(3,4,5,6,7,8,9,10,11,12,13,14,16) and status='inactive'")->result(); ?>
                                        <div class="huge"><?php  echo count($inactivesatusother); ?></div>
                                        <div>Total Pending Other Services </div>
                                    </div>
                                </div>
                            </div>
                           
                                <div class="panel-footer">
                                   <div class="accordion_container">
    <div class="accordion_head" style="background-color:#d9534f; "><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;Pending List Other Services<span class="plusminus">+</span>
 
    </div>
    <div class="accordion_body" style="display: none; border: 1px solid #d9534f;">
       <div class="panel-body">
              <ul style="list-style-type:none; ">
			 <?php $listofallcount1=$this->db->query("select *from main_category where mid IN(3,4,5,6,7,8,9,10,11,12,13,14,16)")->result(); 
			 foreach($listofallcount1 as $listofall){
			 $otherlist=$this->db->query("select *from property_post where main_categories_id='".$listofall->mid."' and status='inactive'")->result(); ?> 
			 <li><a style="color:#d9534f; " href="<?php echo site_url(); ?>view_property_other?pendingserivces=<?php echo $listofall->mid;  ?>"><i class="fa fa-arrow-circle-right" style="font-weight:bold;"  aria-hidden="true"></i>&nbsp;<?php echo $listofall->category_name; ?> &nbsp;(<?php echo count($otherlist);?>)</a></li>
			 <?php } ?>
			 </ul>
            </div>
    </div>
    
	
</div>
                                </div>
                          
                        </div>
						
                    </div>
					
					
					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-search fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<?php $post_requirement=$this->db->query("select *from post_requirement")->result(); ?>
                                        <div class="huge"><?php  echo count($post_requirement); ?></div>
                                        <div>Total Search Requirement</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo site_url(); ?>search_users_post_requirment">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					
					
					
					
                </div>
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->


        <!-- /#page-wrapper -->

   
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->


        <!-- /#page-wrapper -->

   