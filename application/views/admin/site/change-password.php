

<script>
$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });

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
			var postTo = '<?php echo site_url();?>Admin_Controller/change_password_process';
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
					window.location='<?php echo site_url();?>admin_password_change';
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

</script>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Change Password</h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>Change Password</li>&nbsp;&nbsp;
      </ol>
	 <?php if($this->session->userdata('documentadded')) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> <?php echo $this->session->userdata('documentadded');?>
</div> 

<?php  $this->session->unset_userdata('documentadded'); } ?>
    </div>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
     <?php  //$id=$this->uri->segment(2);  $getdata=$this->db->query("select *from property_images where pid='$id'")->result(); $count= count($getdata);?> 
	  
    </div>
  </div>
  <!-- /.row -->
  <div class="form-info">
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
                    <input type="button" class="btn btn-primary mydbubttt" value="Change Password" onClick="return changePassword();">
                  </div>
                </div>
              </form>
	  
	
				</div>
</div>
<br><br>
