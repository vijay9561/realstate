<?php if($this->session->userdata('EMAILID')){ ?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css" />
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<link href="<?php echo base_url();?>assets/css/site.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>assets/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
   $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        }); });
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
		
function submission_pathr(){ 
		 var allowedFiles = [".docx",".rtf",".pdf",".txt"];
        var fileUpload = document.getElementById("submission_path");
        var lblError = document.getElementById("submission_pathr");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.value.toLowerCase())) {
            lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
			document.getElementById("submission_path").value='';
            return false;
			
        }
        lblError.innerHTML = "";
		 $('#submission_pathr').html(' ');
        return true;
		
		}
		function document_namer(){if($('#document_name').val()==''){}else{ $('#document_namer').html(' '); }}
		 function add_document_file(){
		var document_name=document.getElementById('document_name').value.trim(); 
		var submission_path=document.getElementById('submission_path').value.trim();
	   
				if(document_name==''){
				$("#document_namer").html('Please enter your document name');
				return false;
				}
				if(submission_path==''){
				$("#submission_pathr").html('Please upload your document file');
				return false;
				}
		  $("#addyourdocumentfile").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/add_document",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='team-profile';
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
				if(photo==''){
				$("#photor").html('Please upload image');
				return false;
				}
		  $("#formcontrolls").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/member_registration",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='team-profile';
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
	
	function team_namer(){if($('#team_name').val()==''){}else{ $('#team_namer').html(' '); }}
	function team_captain_namer(){if($('#team_captain_name').val()==''){}else{ $('#team_captain_namer').html(' '); }}
		function email_id123r(){if($('#email_id123').val()==''){}else{ $('#email_id123r').html(' '); }}
			function contact_info123r(){if($('#contact_info123').val()==''){}else{ $('#contact_info123r').html(' '); }}
	function updateyourprofiles(){
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/; var mobilenovalidation=/^\d{10}$/;
		var team_name=document.getElementById('team_name').value.trim(); 
		var team_captain_name=document.getElementById('team_captain_name').value.trim();
	    var  email_id123=document.getElementById('email_id123').value.trim(); 
		var  contact_info123=document.getElementById('contact_info123').value.trim();
		
				if(team_name==''){
				$("#team_namer").html('Please enter name');
				return false;
				}
				if(team_captain_name==''){
				$("#team_captain_namer").html('Please enter contact number');
				return false;
				}
				
				if(email_id123==''){
				$("#email_id123r").html('Please enter email address');
				return false;
				}
				var email_id = email_id123.toLowerCase();
				if (emailpattern.test(email_id) == false){
				$("#email_id123r").html("Please Enter Valid Email Address");
					   
				return false;
				}
				if(contact_info123==''){
				$("#contact_info123r").html('Please enter institute name');
				return false;
				}
				if (!(contact_info123.match(mobilenovalidation))) {
				$("#contact_info123r").html("Please enter valid contact number");	
				return false;
				}
		  $("#updateteams").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/update_team_profile",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='team-profile';
						return false;
					}
					else if(data==2) {
				      window.location='team-profile';
						return false;
					
					}else{
					  $('#duplicateemailscheck').show();
					  $("#duplicateemailscheck").html("This Email Address Allready Exits Here Please Entered Different Email Address");
						setTimeout(function() {
						$("#duplicateemailscheck").fadeOut("slow");
						
						}, 5000);
	
					}
					
				}
			});
			return false;  
		});
			
	}
	
	function remove_errror_renpassword (){ if($("#newPassword1").val()=='') { } else { $('#newPasswordError1').html(' '); } }
	function remove_error_newpassword (){ if($("#newPassword").val()=='') { } else { $('#newPasswordError').html(' '); $('#password_strength').html(' '); } 
	 var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
	  var password=document.getElementById('newPassword').value.trim();
			 var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if (!(password.match(regularExpression))) {
           // alert("Password must contain at least six character,one digit,one special character");
			 $('#newPasswordError').html('Password Must Contain At Least Six Character,One Digit,One Special Character');
              password.focus()
            return false;
        }  else {
		$('#newPasswordError').html(' ');
		}
	}
		function remove_error_oldpassword (){ if($("#oldPassword").val()=='') { } else { $('#oldPasswordError').html(' '); } }

		function changePassword(){
			if(document.getElementById('oldPassword').value==""){
				$("#oldPasswordError").html('Please Enter Old Password');
				$('#oldPassword').focus();
				return false;
			}
			if(document.getElementById('newPassword').value==""){
				$("#newPasswordError").html('Please Enter New Password');
				$('#newPassword').focus();
				return false;
			}
			 var password=document.getElementById('newPassword').value.trim();
			 var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if (!(password.match(regularExpression))) {
           // alert("Password must contain at least six character,one digit,one special character");
			 $('#newPasswordError').html('Password Must Contain At Least Six Character,One Digit,One Special Character');
              password.focus()
            return false;
        }  
			if(document.getElementById('newPassword1').value==""){
				$("#newPasswordError1").html('Please Re-enter Old Password');
				$('#newPassword1').focus();
				return false;
			}
			var oldPassword=document.getElementById('oldPassword').value.trim();
			var newPassword=document.getElementById('newPassword').value.trim();
			var newPassword1=document.getElementById('newPassword1').value.trim();
			if(newPassword!=newPassword1){
				$("#passwordError").html('<b>Password Does Not Match</b>');
				return false;
			}
			var postTo = '<?php echo site_url();?>Users_Controller/change_password';
			var data = {
				oldPassword: oldPassword,
				newPassword: newPassword
			};
			jQuery.post(postTo, data,
			function(data) {
				if(data==1){
					$("#passwordSuccess").html('<b>Password Changed Successfully</b>');
					document.getElementById('oldPassword').value="";
					document.getElementById('newPassword').value="";
					document.getElementById('newPassword1').value="";
					window.location='team-profile';
					$('#passwordError').hide();
				}else{
					$("#oldPasswordError").html('<b>Incorrect Old Password</b>');
				}
			});
		}
		
		function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("password_strength");
 
        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }
 
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
 
        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
        }
 
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
                break;
            case 2:
                strength = "Good";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong";
                color = "green";
                break;
            case 5:
                strength = "Very Strong";
                color = "darkgreen";
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
    }


function query_namer (){ if($("#query_name").val()=='') { } else { $('#query_namer').html(' '); } }
function query_emailsr (){ if($("#query_emails").val()=='') { } else { $('#query_emailsr').html(' '); } }
function query_mobile_nor (){ if($("#query_mobile_no").val()=='') { } else { $('#query_mobile_nor').html(' '); } }
function query_messager (){ if($("#query_message").val()=='') { } else { $('#query_messager').html(' '); } }
	function sendyourfeedbackquery(){
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/; var mobilenovalidation=/^\d{10}$/;
		var query_name=document.getElementById('query_name').value.trim(); 
		var query_emails=document.getElementById('query_emails').value.trim();
	    var  query_mobile_no=document.getElementById('query_mobile_no').value.trim(); 
		var  query_message=document.getElementById('query_message').value.trim();
		
				if(query_name==''){
				$("#query_namer").html('Please enter name');
				return false;
				}
				if(query_emails==''){
				$("#query_emailsr").html('Please enter email address');
				return false;
				}
				var email_id = query_emails.toLowerCase();
				if (emailpattern.test(email_id) == false){
				$("#query_emailsr").html("Please Enter Valid Email Address");
					   
				return false;
				}
				if(query_mobile_no==''){
				$("#query_mobile_nor").html('Please enter contact number');
				return false;
				}
				if (!(query_mobile_no.match(mobilenovalidation))) {
				$("#query_mobile_nor").html("Please enter valid contact number");	
				return false;
				}
				if(query_message==''){
				$("#query_messager").html('Please enter your message');
				return false;
				}
		  $("#queryformsendrequests").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/query_send_your",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='team-profile';
						return false;
					} else{
					
	                    alert("not send emails");
					}
					
				}
			});
			return false;  
		});
			
	}
  </script>
<div class="content">
  <div class="services">
    <div class="container">
      <h3>Team Profile</h3>
      <?php if($this->session->userdata('membersucess')==1) { ?>
      <div class="alert alert-success"> <strong>Success!</strong> Member Added Successfully.. </div>
      <?php  $this->session->unset_userdata('membersucess'); } ?>
      <?php if($this->session->userdata('documentadded')) { ?>
      <div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->userdata('documentadded'); ?> </div>
      <?php  $this->session->unset_userdata('documentadded'); } ?>
      <?php if($this->session->userdata('updatemembers')==1) { ?>
      <div class="alert alert-success"> <strong>Success!</strong> Member Update Successfully.. </div>
      <?php  $this->session->unset_userdata('updatemembers'); } ?>
	  <div class="alert alert-danger" style="display:none" id="duplicateemailscheck"> <strong>Success!</strong> Member Update Successfully.. </div>
      <div class="services-grids">
        <div class="col-md-8 services-grid">
          <div id="tabs">
            <ul>
              <li><a href="#tabs-1">Dashboard</a></li>
              <li><a href="#tabs-2">Team</a></li>
              <li><a href="#tabs-3">Submission</a></li>
              <li><a href="#tabs-4">Downloads</a></li>
			  <li><a href="#tabs-5">Change Passowrd</a></li>
            </ul>
            <div id="tabs-1">
           <?php $dashboard=$this->Users_Model->get_dashbord_teams(); ?>
		   <div class="row">
		   <div class="col-md-3"><img src="<?php base_url(); ?>assets/upload/team_id/<?php echo $dashboard[0]->upload_team_image;?>" class="img-thumbnail"  width="100%"/></div>
		   <div class="col-md-9">
		   <form role="form" id="updateteams" name="updateteams" enctype="multipart/form-data" method="post">
                  <div class="form-group">
                    <label>Teams</label>
                    <input class="form-control" id="team_name" name="team_name" onchange="team_namer();" value="<?php echo $dashboard[0]->team_name;?>" required>
					<span id="team_namer" style="color:red;"></span>
                  </div>
                  <div class="form-group">
                    <label>Captain</label>
                    <input class="form-control" id="team_captain_name" name="team_captain_name" value="<?php echo $dashboard[0]->team_captain_name;?>" required>
					<span id="team_captain_namer" style="color:red;"></span>
                  </div>
                  <div class="form-group">
                    <label>Emails</label> 
                    <input class="form-control" id="email_id123" name="email_id123" onchange="email_id123();" value="<?php echo $dashboard[0]->email_id;?>"  required>
					<input type="hidden" id="defaultemails" name="defaultemails" value="<?php echo $dashboard[0]->email_id;?>" />
					<span id="email_id123r" style="color:red;"></span>
                   </div>
                  <div class="form-group">
                    <label>Contact No</label>
                    <input type="text" class="form-control" id="contact_info123" name="contact_info123" onchange="contact_info123();" value="<?php echo $dashboard[0]->contact_info;?>"  required  />
					<span id="contact_info123r" style="color:red;"></span>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary"  onclick="return updateyourprofiles();" value="Update Profile">
                  </div>
                </form>
		   </div>
		   </div>
		    <div class="row">
		   <div class="col-md-3"><img src="<?php base_url(); ?>assets/upload/college_id/<?php echo $dashboard[0]->upload_colloege_image;?>" class="img-thumbnail"  width="100%"/></div>
		   <div class="col-md-9">
		   Virtual Round- 18th to 20th June 2017, Venue-Indore Madhya Pradesh
<br /><br /><br />
Final Round-20th 23rd Oct 2017, Venue- Meco Kartopia, Banglore, Karnataka

		   </div>
		   </div>
            </div>
            <div id="tabs-2">
              <form class="form-horizontal" id="formcontrolls"  enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Name <b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" placeholder="Name" onchange="namer();" name="name" id="name">
                    <span id="namer" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Name <b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" placeholder="Contact No" onchange="contact_nor();" name="contact_no" id="contact_no">
                    <span id="contact_nor" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Institute Name <b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" placeholder="Institute Name" onchange="institute_namer();" name="institute_name" id="institute_name">
                    <span id="institute_namer" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Email Id <b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" placeholder="Email Id" onchange="email_idr();" name="email_id" id="email_id">
                    <span id="email_idr" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Branch Name <b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" placeholder="Branch Name" onchange="branch_namer();" name="branch_name" id="branch_name">
                    <span id="branch_namer" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Year <b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                    <select class="form-control" type="text" placeholder="Branch Name" onchange="yearr();" name="year" id="year">
                      <option value="">Select Year</option>
                      <?php $query=$this->Users_Model->year_master();  foreach($query as $year){?>
                      <option value="<?php echo $year->year_name; ?>"><?php echo $year->year_name; ?></option>
                      <?php } ?>
                    </select>
                    <span id="yearr" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Department Team<b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" placeholder="Department Team" onchange="department_teamr();" name="department_team" id="department_team">
                    <span id="department_teamr" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Photo<b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                    <input type="file" placeholder="Department Team" onchange="photor();" name="photo" id="photo">
                    <span id="photor" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" value="Save" onclick="return registertems();">
                  </div>
                </div>
              </form>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Sr No</th>
                      <th>Name</th>
                      <th>Contact No</th>
                      <th>Email ID</th>
                      <th>Branch Name</th>
                      <th>Academic Year</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $data=$this->Users_Model->get_registered_members(); $i1=1; foreach($data as $rows) {?>
                    <tr>
                      <td><?php echo $i1++; ?></td>
                      <td><?php echo $rows->name;?></td>
                      <td><?php echo $rows->contact_no;?></td>
                      <td><?php echo $rows->email_id;?></td>
                      <td><?php echo $rows->branch_name;?></td>
                      <td><?php echo $rows->year;?></td>
                      <td><img src="<?php echo base_url();?>assets/upload/member_images/<?php echo $rows->photo ?>" height="100" class="img-thumbnail" /></td>
                      <td><a href="<?php echo site_url();?>update_member/<?php echo $rows->mid; ?>" class="btn btn-primary">Update</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div id="tabs-3">
              <h4 class="reg">Upload Your Document</h4>
              <form class="form-horizontal" id="addyourdocumentfile"  enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Document Name <b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" placeholder="Name" onchange="document_namer();"   name="document_name" id="document_name">
                    <span id="document_namer" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Upload Document</label>
                  <div class="col-sm-9">
                    <input type="file" placeholder="Department Team" onchange="submission_pathr();" name="submission_path" id="submission_path" />
                    <span id="submission_pathr" style="color:red;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" value="Update" onclick="return add_document_file();">
                  </div>
                </div>
              </form>
              <div class="table-responsive">
                <h4>All Uploaded Your Documents</h4>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Sr No</th>
                      <th>File Name</th>
                      <th>Download</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $document=$this->Users_Model->get_registered_team_document(); $i2=1; foreach($document as $rows) {?>
                    <tr>
                      <td><?php echo $i2++; ?></td>
                      <td><?php echo $rows->document_name;?></td>
                      <td><a href="<?php site_url();?>Users_Controller/downloadfile/<?php echo $rows->rsid; ?>" class="btn btn-primary">Download</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div id="tabs-4">
			<?php $viewdata=$this->Admin_Model->getpdfdata(); ?>
			<?php foreach($viewdata as $row){ ?>
            <div class="row">
			<div class="col-md-12">
			<a style="width:100%" href="<?php site_url();?>Users_Controller/downloadfilepdffile/<?php echo $row->pid; ?>" class="btn btn-primary"><?php echo $row->pdf_name; ?></a>
			</div>
			</div><br />
			<?php } ?>
            </div>
			
			<div id="tabs-5">
              <h4 class="reg">Change Password</h4>
              <form class="form-horizontal" id="addyourdocumentfile"  enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Old Password <b style="color:red;">*</b></label>
                  <div class="col-sm-9">
                     <input type="password" class="form-control"  maxlength="10"  onChange="remove_error_oldpassword()" ng-model="user.oldPassword" id="oldPassword" name="oldPassword">
									
									  <span id="oldPasswordError" style="color:red; font-size: 15px;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Enter New Password </label>
                  <div class="col-sm-9">
                  <input type="password" class="form-control" onChange="remove_error_newpassword()" onKeyUp="CheckPasswordStrength(this.value)"  maxlength="10"  ng-model="user.newPassword" id="newPassword" name="newPassword">
                   <span id="password_strength"></span> <br />
									  <span id="newPasswordError" style="color:red; font-size: 15px;"></span> </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-3 control-label">Re-Enter New Password </label>
                  <div class="col-sm-9">
               <input type="password" class="form-control"  maxlength="10" onChange="remove_errror_renpassword()"  ng-model="user.newPassword1" id="newPassword1" name="newPassword1">
                  	  <span id="newPasswordError1" style="color:red; font-size: 15px;"></span> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <input type="button" class="btn btn-primary" value="Change Password" onClick="return changePassword();">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4 services-grid">
          <div class="ser1">
            <div class="panel panel-primary">
              <div class="panel-heading active">
                <div class="blog-top">
                  <h4 style="margin-top:0px; margin-bottom:0px; color:white;">Write us your query</h4>
                </div>
              </div>
              <div class="panel-body">
                <form role="form" id="queryformsendrequests" style="margin:0px;" name="queryformsendrequests" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" id="query_name" name="query_name" onchange="query_namer()">
					<span id="query_namer" style="color:red;"></span>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" id="query_emails" name="query_emails" onchange="query_emailsr();">
					<span id="query_emailsr" style="color:red;"></span>
                  </div>
                  <div class="form-group">
                    <label>Mobile No</label>
                    <input class="form-control" id="query_mobile_no" name="query_mobile_no" onchange="query_mobile_nor();">
					<span id="query_mobile_nor" style="color:red;"></span>
                  </div>
                  <div class="form-group">
                    <label>Comment/Suggestions (If Any)</label>
                    <textarea class="form-control" id="query_message" name="query_message" onchange="query_messager();" style="resize:none" required></textarea>
					<span id="query_messager" style="color:red;"></span>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" id="portfolio_name" name="portfolio_name" onclick="return sendyourfeedbackquery()" value="Send Query" style="background-color:#BD2D2D;border-color: #BD2D2D;">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <br />
		    <div class="ser1">
		  <div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News Feeds</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1">
<?php $viewdata=$this->Admin_Model->newgetdata(); foreach($viewdata as $rows) {   ?>
<?php //$string1 = (strlen($data['blog_description']) >503) ? substr($data['blog_description'],0,100).'...Read' : $data['blog_description']; ?>
<li class="news-item"><?php echo substr($rows->news_description,0,100); ?> &nbsp;&nbsp;<a href="#">Read more...</a></li>
<?php } ?>

</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div></div><br />
          <div class="ser1">
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=186861481753677";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-page" data-href="https://www.facebook.com/Globallianz-105527619622249/" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/Globallianz-105527619622249/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Globallianz-105527619622249/">Globallianz</a></blockquote>
            </div>
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
