
<script>
function query_namer(id){ if($("#query_name"+id).val()=='') { } else { $('#query_namer'+id).html(' '); $('#query_name'+id).css('border-color', ''); } }
function query_emailsr(id){ if($("#query_emails"+id).val()=='') { } else { $('#query_emailsr'+id).html(' '); $('#query_emails'+id).css('border-color', ''); } }
function query_mobile_nor(id){ if($("#query_mobile_no"+id).val()=='') { } else { $('#query_mobile_nor'+id).html(' '); $('#query_mobile_no'+id).css('border-color', '');  } }
function query_messager(id){ if($("#query_message"+id).val()=='') { } else { $('#query_messager'+id).html(' ');  $('#query_message'+id).css('border-color', '');} }
	function sendyourfeedbackquery(id){
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/; var mobilenovalidation=/^\d{10}$/;
		var query_name=document.getElementById('query_name'+id).value.trim(); 
		var query_emails=document.getElementById('query_emails'+id).value.trim();
	    var  query_mobile_no=document.getElementById('query_mobile_no'+id).value.trim(); 
		var  query_message=document.getElementById('query_message'+id).value.trim();
		
				if(query_name==''){
				$("#query_namer"+id).html('Please enter name');
				 $('#query_name'+id).css('border-color', 'red');
				   $("#query_name"+id).focus();
				return false;
				}
				if(query_emails==''){
				$("#query_emailsr"+id).html('Please enter email address');
				$('#query_emails'+id).css('border-color', 'red');
				 $("#query_emails"+id).focus();
				return false;
				}
				var email_id = query_emails.toLowerCase();
				if (emailpattern.test(email_id) == false){
				$("#query_emailsr"+id).html("Please Enter Valid Email Address");
				$('#query_emails'+id).css('border-color', 'red');
				 $("#query_emails"+id).focus();
					   
				return false;
				}
				if(query_mobile_no==''){
				$("#query_mobile_nor"+id).html('Please enter contact number');
				$('#query_mobile_no'+id).css('border-color', 'red');
				 $("#query_mobile_no"+id).focus();
				return false;
				}
				if (!(query_mobile_no.match(mobilenovalidation))) {
				$("#query_mobile_nor"+id).html("Please enter valid contact number");	
				$('#query_mobile_no'+id).css('border-color', 'red');
				 $("#query_mobile_no"+id).focus();
				return false;
				}
				if(query_message==''){
				$("#query_messager"+id).html('Please enter your message');
				$('#query_message'+id).css('border-color', 'red');
				 $("#query_message"+id).focus();
				return false;
				}
					$("#loaderimages"+id).show();
		  $("#sendyourfeedbackquery"+id).unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/property_post_requirement_users",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='search_user_view_requirement';
						setTimeout(function () {
						$("#loaderimages"+id).hide();
						}, 5000); 
						return false;
					} else{
					
	                    alert("not send emails");
							setTimeout(function () {
						$("#loaderimages"+id).hide();
						}, 5000); 
					}
					
				}
			});
			return false;  
		});
			
	}
	$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });
</script>
<style>
.hideoverflow{
height:200px;
overflow-y: auto;
}
</style>
<div  class="contact">
	<div class="container">
	<?php if($this->session->userdata('documentadded')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> <?php echo $this->session->userdata('documentadded'); ?>
</div> 
<?php  $this->session->unset_userdata('documentadded'); } ?>
		<h3>Search Requirment</h3>
	 <div class="contact-top">
	 <div class="row">
	 <div class="col-md-8">
	
	 </div>
	 </div>
	 <div class="row">
		 <div id="equalheight">     
		 <?php 
		 $num_rec_per_page=18;
				 if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
				     $start_from = ($page-1) * $num_rec_per_page;  
		   $property=$this->db->query("SELECT * FROM post_requirement where status='active' order by prid desc LIMIT $start_from, $num_rec_per_page")->result();  $i=1; foreach( $property as  $movie ) { ?>
				
									 <div class="col-md-4 ">
		           <div class="panel panel-primary">
							<div class="panel-heading"><strong><?php // echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >40) ? substr($movie->property_title,0,37).'...' :$movie->property_title; ?>
						           <a  style="text-align:center;color: white;" class="mask"><?php echo ucfirst($string1); ?></a>
										</strong></div>
							<div class="panel-body hideoverflow">
									 	
											<table>
							<?php  if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<th>Requirement ID:</th>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?>
								<?php  if(!empty($movie->slaeby)){ ?>
							<tr style="color:#000;;font-size: 11px;">
						<td><strong>Property</strong><span style="font-weight: unset;">&nbsp;&nbsp;For</span></td>
							<td>&nbsp;&nbsp; <strong> <?php echo $movie->slaeby; ?></strong></td>
							</tr>       <?php } ?>
							
						<?php /*?>	<?php  if(!empty($movie->address)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<th>Address:</th>
							<td>&nbsp;&nbsp;<?php echo substr($movie->address,0,50); ?></td>
							</tr>       <?php } ?><?php */?>
							<?php if($this->session->userdata('UNIQUEID')==$movie->property_unique_id){ ?>
								<tr style="color:#000;">
							<th>Email:</th>
							<td>&nbsp;&nbsp;<?php echo $movie->eamil; ?></td></tr>
							<tr style="color:#000;">
							<th>Owner Conatct Number:</th>
							<td>&nbsp;&nbsp;<?php echo $movie->mobile_no; ?></td></tr>
							<?php } ?>
							</table>
							<br />		<!-- 	<small>50 Reviews</small>-->
									 
								
								<?php /*?> <p>Property For <?php echo $movie->slaeby; ?><?php */?>
								 
								 </p>
								  <p style="text-align: justify;"><strong>Description</strong> <?php echo substr($movie->description,0,1000); ?>
								 </p><br />
								<div class="row">
								<div class="col-md-8">
								 <?php echo $movie->firstname.'&nbsp;'. $movie->lastname.'&nbsp;('.$movie->yourpropesinal.')'; ?><br />
								 <?php echo substr($movie->address,0,500); ?><br /><br />
								 <?php if($this->session->userdata('UNIQUEID')==$movie->property_unique_id){ ?><?php }else{ ?>
								 </div><div class="col-md-4">
								   <a style="cursor:pointer;" class="btn btn-primary mydbubttt" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Contact</a><?php } ?></div></div>
								<?php /*?> <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a><?php */?>
							</div>
							</div></div>
							<div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Details</h4>
       </div>
       <div class="modal-body">
        	<form id="sendyourfeedbackquery<?php echo $i; ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" placeholder="Name"  class="form-control" name="query_name" id="query_name<?php echo $i; ?>" onchange="query_namer(<?php echo $i; ?>)">
						<input type="hidden" value="<?php echo $movie->property_unique_id; ?>" name="unquie_id" />
						<input type="hidden" value="<?php echo  $movie->slaeby; ?>" name="salyeuser" />
						<input type="hidden" value="<?php echo $movie->category_name; ?>" name="categoryuser" />
						<input type="hidden" value="<?php echo $movie->firstname.' '.$movie->lastname ?>" name="ownernames" />
						<span id="query_namer<?php echo $i; ?>" style="color:red;float: left;"></span>
						</div>
				<div class="form-group">
						<input type="text" placeholder="Email" class="form-control" name="query_emails" onchange="query_emailsr(<?php echo $i; ?>)" id="query_emails<?php echo $i; ?>">
						<span id="query_emailsr<?php echo $i; ?>" style="color:red;float: left;"></span>
						</div>
					<div class="form-group">
						<input type="text" placeholder="Contact No" class="form-control" onchange="query_mobile_nor(<?php echo $i; ?>)" name="query_mobile_no" id="query_mobile_no<?php echo $i; ?>">
							<span id="query_mobile_nor<?php echo $i; ?>" style="color:red;float: left;"></span>
							</div>
							<div class="form-group">
						<textarea placeholder="Your Details" style="resize:none" class="form-control" id="query_message<?php echo $i; ?>" onchange="query_messager(<?php echo $i; ?>)" name="query_message"></textarea>
						<span id="query_messager<?php echo $i; ?>" style="color:red;"></span>
						</div>
					<div class="form-group">
						<input type="submit" value="SEND" class="btn btn-primary mydbubttt" onclick="return sendyourfeedbackquery(<?php echo $i; ?>);"> &nbsp;&nbsp;	
						<img  id="loaderimages<?php echo $i; ?>" style="display:none;" src="<?php echo base_url(); ?>assets/images/loading.gif" />
						</div>
				</form>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
							
					<?php  $i++; } ?>
					
					
		<div class="clearfix"> </div>
</div>

<div class="nav-page"><nav> 
		<ul class="pagination">
				<?php 
					$url= base_url(uri_string());
 $queryall=$this->db->query("SELECT * FROM  post_requirement where  status='active' order by prid desc")->result();
$total_records = count($queryall);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
$current_page=$_GET['page'];
$next_page = $current_page + 1;
if($_GET['page']==1 || $url=='http://saibroking.com/search_user_view_requirement'){
$prev_page =1; 
}else {
$prev_page = $current_page -1; 
}
?>
  <li class="next page"><a href="<?php echo site_url(); ?>search_user_view_requirement?page=1"> < </a></li>
   <?php if($total_records>19) { ?>
  <li class="page"><a href="<?php echo site_url(); ?>search_user_view_requirement?page=<?php echo $prev_page; ?>">Previous Page</a></li>
  <?php } ?>
<?php 
for ($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page <?php if($_GET['page']==$i){ echo 'active'; } else { echo ''; } ?>"><a href="<?php echo site_url(); ?>search_user_view_requirement?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php };  ?>
 <?php if($total_records>19) { ?>
  <li class="page"><a href="<?php echo site_url(); ?>search_user_view_requirement?page=<?php echo $next_page; ?>">Next Page</a></li>
  <?php } ?>
<li class="prev page"><a href="<?php echo site_url(); ?>search_user_view_requirement?page=<?php echo $total_pages;?>"> > </a></li>
</ul></nav></div>
	</div></div>
	</div>



	<?php /*?><div  class="contact">
	<div class="container">		
 <?php    $property=$this->db->query("SELECT * FROM post_requirement order by prid desc")->result(); ?>
              <div class="row">
             <?php foreach( $property as  $movie ) { ?>
				
									 <div class="col-md-3" style="border: 1px solid #AEAEAE;margin-right: 10px;">
									 	<strong><?php // echo $movie->property_title; ?>
										<?php  $string1 = (strlen($movie->property_title) >25) ? substr($movie->property_title,0,22).'...' :$movie->property_title; ?>
						           <a class="mask"><?php echo ucfirst($string1); ?></a>
										</strong>
											<table>
							<?php  if(!empty($movie->property_unique_id)){ ?>
							<tr style="color:#000;font-size: 11px;">
							<td>Ad ID:</td>
							<td>&nbsp;&nbsp;<?php echo $movie->property_unique_id; ?></td>
							</tr>       <?php } ?></table>
									<!-- 	<small>50 Reviews</small>-->
									 
								
								 <p>Property For <?php echo $movie->slaeby; ?>
								 
								 </p>
								 <p class="cost">Rs <?php echo $movie->property_price; ?></p>
								<?php /*?> <a href="<?php echo site_url(); ?>view_single_property_details/<?php echo $movie->pid; ?>" class="hvr-sweep-to-right more">See Details</a><?php */?>
							</div>
					<?php // } ?>
					</div>
					<br />
 
</div></div>
			<?php //*/?>