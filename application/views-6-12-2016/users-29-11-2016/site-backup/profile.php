<?PHP if($this->session->userdata('UID')) { ?>
<script>
$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });
	
function namer(){if($('#name').val()==''){}else{ $('#namer').html(' '); }}
function eamilr(){if($('#eamil').val()==''){}else{ $('#eamilr').html(' '); }}

function mobile_nor(){if($('#mobile_no').val()==''){}else{ $('#mobile_nor').html(' '); }}
function regiterusers(){
        var namecheck = /[A-Za-z]+$/;      
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var numbermatch= /^[1-9]\d{0,10}(?:\.\d)?$|^0\.[1-9]$/;
		var mobilenovalidation=/^\d{10}$/;
		var positvenumber=/[0-9 -()+]+$/;
		var chequeno=/^\d{6,14}$/;
	
		var   	name=document.getElementById('name').value.trim();
	    var  eamil=document.getElementById('eamil').value.trim();
		var  mobile_no=document.getElementById('mobile_no').value.trim();
				
				if(name==''){
				$("#namer").html('Please enter team name');
				return false;
				}
				if (!(name.match(namecheck))) {
				$("#namer").html("Please Enter Valid Name");	
				return false;
				}
				if(eamil==''){
				$("#eamilr").html('Please enter email address');
				return false;
				}
					var eamil = eamil.toLowerCase();
					if (emailpattern.test(eamil) == false){
					$("#eamilr").html("Please Enter Valid Email Address");					       
					return false;
					}
				
				if(mobile_no==''){
				$("#mobile_nor").html('Please enter contact number');
				return false;
				}
				if (!(mobile_no.match(mobilenovalidation))) {
				$("#mobile_nor").html("Please enter valid contact number");	
				return false;
				}
		  $("#registerusers11").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/usersupdateprofile",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
					 	window.location='profile';
					}
					else {
			      	//window.location='profile';
						return false;
					}
					
				}
			});
			return false;  
		});
			
	}
</script>
<style>
.form-info input[type="text"], .form-info input[type="password"] {
    outline: none;
    background: none;
    color: #141313;
    width: 100%;
    padding: 10px 10px;
    border: none;
    font-size: 1.2em;
    border: 1px solid #aaa2a2;
    margin: 1em 0 1em;
    padding: 5px;
}
</style>			
<div class="login-right">
	<div class="container">
		<h3>Update Profile</h3>
		<div class="login-top">
		<?php if($this->session->userdata('registrationsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Your Profile Update Successfully..
</div> 

<?php  $this->session->unset_userdata('registrationsucess'); } ?>
				<!--<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>-->
				<div class="form-info">
				<?php $id=$this->session->userdata('UID'); $users=$this->db->query("select *from users where uid='$id'")->result(); ?>
					<form method="post" enctype="multipart/form-data" id="registerusers11" name="registerusers">
						<input type="text"   placeholder="Name" id="name" name="name" value="<?php echo $users[0]->name; ?>" required="" maxlength="30" onChange="namer();" >
						<span id="namer" style="color:red;"></span>
						<input type="text"   placeholder="Email Adress" value="<?php echo $users[0]->eamil; ?>" readonly="true" id="eamil" name="eamil" required="" maxlength="40" onChange="eamilr()" ><span id="eamilr" style="color:red;"></span>
						
					    <input type="text"   placeholder="Mobile No" required="" value="<?php echo $users[0]->mobile_no; ?>"  id="mobile_no" name="mobile_no" maxlength="15"  onChange="mobile_nor()"><span id="mobile_nor" style="color:red;"></span>
						 <label class="hvr-sweep-to-right">
			
							<input type="submit" value="Update Profile" onclick="return regiterusers();">
				           </label>
					</form>
				</div>
			
	</div>
</div>
</div>

<?php }else{ ?>
<script>
window.location='<?php echo site_url();?>';
</script>
<?php } ?>