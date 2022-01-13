<?php if(isset($_GET['category'])){
      $this->session->set_userdata('categorory',$_GET['category']);
} ?>
<script>

$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });
	
function forgotpasswordemailsr(){if($('#forgotpasswordemails').val()==''){}else{ $('#forgotpasswordemailsr').html(' '); }}
  function forgotpassword(){
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;

		var email=document.getElementById('forgotpasswordemails').value.trim();
		
				if(email==''){
				$("#forgotpasswordemailsr").html('Please enter email address');
				return false;
				}
					var email1 = email.toLowerCase();
					if (emailpattern.test(email1) == false)
					{
					$("#forgotpasswordemailsr").html("Please Enter Valid Email Address");
					       
					return false;
				}
		  $("#forgotpasswordemailsrr").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/users_forgot_password",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
					$("#forgotpasswordemails").val("");
						$('#sendsucessfullyemails').show();
						//   setTimeout(function() {$("#duplicateemailcheck1234").fadeOut("slow");}, 5000);
						    setTimeout(function() {$("#sendsucessfullyemails").fadeOut("slow");}, 5000);
							window.location='<?php echo site_url();?>login';
						  
				     	}
					else {
					//$('body,html').animate({scrollTop: $("#duplicateemailcheck").offset().top },500);
				  		$('#duplicateemailcheck123').show();
						   setTimeout(function() {$("#duplicateemailcheck123").fadeOut("slow");}, 5000);
					}
					
				}
			});
			return false;  
		});
			
	}
			
	
function passwordr(){if($('#password').val()==''){}else{ $('#passwordr').html(' '); }}
  function emailr(){if($('#eamil').val()==''){}else{ $('#emailr').html(' '); }}
  
  function loginusers(){
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		
		var email=document.getElementById('eamil').value.trim();
		var password=document.getElementById('password').value.trim();
		
				if(email==''){
				$("#emailr").html('Please enter email address');
				return false;
				}
					var email1 = email.toLowerCase();
					if (emailpattern.test(email1) == false)
					{
					$("#emailr").html("Please enter valid email address");
					       
					return false;
					}
				
				if(password==''){
				$("#passwordr").html('Please enter password');
				return false;
				}
		 $("#commentform").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/users_login",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
					<?php if($this->session->userdata('categorory')==1) { ?>
							window.location='post-property';
						return false;
					<?php }elseif($this->session->userdata('categorory')){ ?>
					    	window.location='otherpostform?category='+<?php echo $this->session->userdata('categorory'); ?>;
						return false;
					<?php }else{ ?>
					   window.location='<?php echo site_url(); ?>';
						return false;
					<?php } ?>
					}
					else {
				  		$('#duplicateemailcheck').show();
					  setTimeout(function() {$("#duplicateemailcheck").fadeOut("slow");}, 5000);
						   return false;
					}
					
				}
			});
			return false;  
		});
			
	}

</script>
<?php if($this->session->userdata('UID')) { ?>

<script>
window.location='<?php echo site_url();?>';
</script>
<?php }else{ ?>

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
		<h3>Login</h3>
		<div class="login-top">
		<div id="duplicateemailcheck" style="display:none">
				<div class="alert alert-danger">
				<strong>Error!</strong>Email Or Passsword Is Incorrect
				</div> 
				</div>
		<?php if($this->session->userdata('registrationsucess')==1) { ?>
	  <div class="alert alert-success">
  Your Registration Is Successfully Done.. 
</div> 

<?php  $this->session->unset_userdata('registrationsucess'); } ?>
	<?php if($this->session->userdata('forgotemails')) { ?>
	  <div class="alert alert-success">
<?php echo $this->session->userdata('forgotemails'); ?>
</div> 

<?php  $this->session->unset_userdata('forgotemails'); } ?>
				<!-- <ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul> -->
				
					<form  id="commentform" name="commentform" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="eamil" id="eamil" onchange="emailr();" placeholder="Email Adress" required="">
						<span id="emailr" style="color:red;"></span>
						</div>
							<div class="form-group">
						<input type="password"  class="form-control" placeholder="Password" name="password" id="password" onchange="passwordr();" required="">
							<span id="passwordr" style="color:red;"></span>
							</div>
						 <div class="form-group">
				           	<input type="submit" value="Login" class="btn btn-primary mydbubttt" onclick="return loginusers();"> &nbsp;
				          
						 	<a style="cursor:pointer;"  data-toggle="modal" data-target=".bs-example-modal-sm">Forgot Password?</a>
							</div>
					</form>
				</div>
				<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-7">
			<div class="create" align="center">
				<h4>Don't have an Account?&nbsp;&nbsp;</h4>
				<a class="hvr-sweep-to-right" style="float:left;" href="<?php echo base_url();?>register">Create an Account</a>
				<div class="clearfix"> </div>
			</div></div>
			<div class="col-md-4"></div>
			</div>
	</div>
</div>
</div>
<?php } ?>


</div>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login Your Account</h4>
      </div>
	     <form method="post" action="#" id="forgotpasswordemailsrr">
      <div class="modal-body">
       
        <div id="duplicateemailcheck123" style="display:none">
          <div class="alert alert-danger"> <strong>Error!</strong>This Email Address Not Found Our Database </div>
        </div>
       
        <div id="forgootpasswordid">
       
            <div class="form-group">
              <input name="forgotpasswordemails"  id="forgotpasswordemails" class="form-control" onchange="forgotpasswordemailsr()" placeholder="Enter Email ID" required="" type="text">
              <span id="forgotpasswordemailsr" style="color:red;"></span> </div>
            <br />
           
          
         
        </div>
      </div>
	  <div class="modal-footer">
	   <input class="btn btn-primary mydbubttt" value="Send" type="submit" onclick="return forgotpassword();">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>
  </div>
</div>