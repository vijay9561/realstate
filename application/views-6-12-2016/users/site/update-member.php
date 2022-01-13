   <?php if($this->session->userdata('EMAILID')){ ?>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css" />
  <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  
  function namer(){if($('#name').val()==''){}else{ $('#namer').html(' '); }}
   function contact_nor(){if($('#contact_no').val()==''){}else{ $('#contact_nor').html(' '); }}
      function email_idr(){if($('#email_id').val()==''){}else{ $('#email_idr').html(' '); }}
	    function institute_namer(){if($('#institute_name').val()==''){}else{ $('#institute_namer').html(' '); }}
		function branch_namer(){if($('#branch_name').val()==''){}else{ $('#branch_namer').html(' '); }}
		function yearr(){if($('#year').val()==''){}else{ $('#yearr').html(' '); }}
		function department_teamr(){if($('#department_team').val()==''){}else{ $('#department_teamr').html(' '); }}
		function photor(){ 
		 var allowedFiles = [".png",".jpg"];
        var fileUpload = document.getElementById("photo");
        var lblError = document.getElementById("photor");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.value.toLowerCase())) {
            lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
			document.getElementById("photo").value='';
            return false;
			
        }
        lblError.innerHTML = "";
		 $('#photor').html(' ');
        return true;
		
		}
  function registertems(){
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/; var mobilenovalidation=/^\d{10}$/;
		var name=document.getElementById('name').value.trim(); var contact_no=document.getElementById('contact_no').value.trim();
	    var  institute_name=document.getElementById('institute_name').value.trim(); var  email_id=document.getElementById('email_id').value.trim();
		var  branch_name=document.getElementById('branch_name').value.trim(); var  year=document.getElementById('year').value.trim();
		var  department_team=document.getElementById('department_team').value.trim(); var  photo=document.getElementById('photo').value.trim();
	
				if(name==''){
				$("#namer").html('Please enter name');
				return false;
				}
				if(contact_no==''){
				$("#contact_nor").html('Please enter contact number');
				return false;
				}
				if (!(contact_no.match(mobilenovalidation))) {
				$("#contact_nor").html("Please enter valid contact number");	
				return false;
				}
				if(institute_name==''){
				$("#institute_namer").html('Please enter institute name');
				return false;
				}
				if(email_id==''){
				$("#email_idr").html('Please enter email address');
				return false;
				}
				var email_id = email_id.toLowerCase();
				if (emailpattern.test(email_id) == false){
				$("#email_idr").html("Please Enter Valid Email Address");
					   
				return false;
				}
				if(branch_name==''){
				$("#branch_namer").html('Please enter branch name');
				return false;
				}
				if(year==''){
				$("#yearr").html('Please select year');
				return false;
				}
				if(department_team==''){
				$("#department_teamr").html('Please enter team name');
				return false;
				}
		  $("#formcontrolls").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/members_udpate",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='<?php echo site_url();?>team-profile';
					//	window.location.replace('team-profile');
						return false;
					}
					else {
					alert('not inserted');
					
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
<div class="content">
			<div class="services">
				<div class="container">
					<h3>Update Team Members</h3>
					 <?php if($this->session->userdata('membersucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Member Added Successfully..
</div> 

<?php  $this->session->unset_userdata('membersucess'); } ?>
					<div class="services-grids">
						<div class="col-md-8 services-grid">
							<form class="form-horizontal" id="formcontrolls"  enctype="multipart/form-data" method="post">
  <div class="form-group">
    <label class="col-sm-3 control-label">Name <b style="color:red;">*</b></label>
    <div class="col-sm-9">
      <input class="form-control" type="text" placeholder="Name" onchange="namer();"  value="<?php echo $memberdata[0]->name; ?>" name="name" id="name">
	  <span id="namer" style="color:red;"></span>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Name <b style="color:red;">*</b></label>
    <div class="col-sm-9">
      <input class="form-control" type="text" placeholder="Contact No" onchange="contact_nor();" value="<?php echo $memberdata[0]->contact_no; ?>" name="contact_no" id="contact_no">
	  <span id="contact_nor" style="color:red;"></span>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Institute Name <b style="color:red;">*</b></label>
    <div class="col-sm-9">
      <input class="form-control" type="text" placeholder="Institute Name" value="<?php echo $memberdata[0]->institute_name; ?>" onchange="institute_namer();" name="institute_name" id="institute_name">
	  <span id="institute_namer" style="color:red;"></span>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Email Id <b style="color:red;">*</b></label>
    <div class="col-sm-9">
      <input class="form-control" type="text" placeholder="Email Id" value="<?php echo $memberdata[0]->email_id; ?>" onchange="email_idr();" name="email_id" id="email_id">
	  <span id="email_idr" style="color:red;"></span>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Branch Name <b style="color:red;">*</b></label>
    <div class="col-sm-9">
      <input class="form-control" type="text" placeholder="Branch Name" onchange="branch_namer();" value="<?php echo $memberdata[0]->branch_name; ?>" name="branch_name" id="branch_name">
	  <span id="branch_namer" style="color:red;"></span>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Year <b style="color:red;">*</b></label>
    <div class="col-sm-9">
	   <select class="form-control" type="text" placeholder="Branch Name" onchange="yearr();" name="year" id="year">
	   <option value="<?php echo $memberdata[0]->year; ?>"><?php echo $memberdata[0]->year; ?></option>
	<?php $query=$this->Users_Model->year_master();  foreach($query as $year){ if( $memberdata[0]->year!=$year->year_name) {?>
	<option value="<?php echo $year->year_name; ?>"><?php echo $year->year_name; ?></option>
	<?php } } ?>
   </select>
	  <span id="yearr" style="color:red;"></span>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Department Team<b style="color:red;">*</b></label>
    <div class="col-sm-9">
      <input class="form-control" type="text" placeholder="Department Team" onchange="department_teamr();" value="<?php echo $memberdata[0]->department_team; ?>" name="department_team" id="department_team">
	  <span id="department_teamr" style="color:red;"></span>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Photo</label>
    <div class="col-sm-9">
      <input type="file" placeholder="Department Team" onchange="photor();" name="photo" id="photo">
	  <input type="hidden" value="<?php echo $memberdata[0]->photo; ?>" id="defaultphot"  name="defaultphot">
	  <input type="hidden" value="<?php echo $memberdata[0]->mid; ?>" id="mid" name="mid">
	  <span id="photor" style="color:red;"></span>
    </div>
  </div>
  
   <div class="form-group">
    <label class="col-sm-3 control-label"></label>
    <div class="col-sm-9">
      <input type="submit" class="btn btn-primary" value="Update" onclick="return registertems();">
    </div>
  </div>
  </form>
						</div>
						<div class="col-md-4 services-grid">
							<div class="ser1">
								<img src="<?php echo base_url();?>assets/images/s2.jpg" class="img-responsive" alt="" />
								 <h4>Lorem ipsum dolor</h4>
								 <p>Were dolor in hendrerit in vulputate velit esse molestie con sequat,Nulla consectetur maximus sem vel aliquet. Donec blandit condimentum varius</p>
							</div>
							<br />
							<div class="ser1">
								<img src="<?php echo base_url();?>assets/images/s2.jpg" class="img-responsive" alt="" />
								 <h4>Lorem ipsum dolor</h4>
								 <p>Were dolor in hendrerit in vulputate velit esse molestie con sequat,Nulla consectetur maximus sem vel aliquet. Donec blandit condimentum varius</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>	
				</div>	
			</div>					
			</div>
				<?php }else{ ?>
		<script> window.location='<?php echo site_url();?>';</script>
		<?php } ?>