<script>
function query_namer (){ if($("#query_name").val()=='') { } else { $('#query_namer').html(' '); $('#query_name').css('border-color', ''); } }
function query_emailsr (){ if($("#query_emails").val()=='') { } else { $('#query_emailsr').html(' '); $('#query_emails').css('border-color', ''); } }
function query_mobile_nor (){ if($("#query_mobile_no").val()=='') { } else { $('#query_mobile_nor').html(' '); $('#query_mobile_no').css('border-color', '');  } }
function query_messager (){ if($("#query_message").val()=='') { } else { $('#query_messager').html(' ');  $('#query_message').css('border-color', '');} }
	function sendyourfeedbackquery(){
		var emailpattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/; var mobilenovalidation=/^\d{10}$/;
		var query_name=document.getElementById('query_name').value.trim(); 
		var query_emails=document.getElementById('query_emails').value.trim();
	    var  query_mobile_no=document.getElementById('query_mobile_no').value.trim(); 
		var  query_message=document.getElementById('query_message').value.trim();
		
				if(query_name==''){
				$("#query_namer").html('Please enter name');
				 $('#query_name').css('border-color', 'red');
				   $("#query_name" ).focus();
				return false;
				}
				if(query_emails==''){
				$("#query_emailsr").html('Please enter email address');
				$('#query_emails').css('border-color', 'red');
				 $("#query_emails" ).focus();
				return false;
				}
				var email_id = query_emails.toLowerCase();
				if (emailpattern.test(email_id) == false){
				$("#query_emailsr").html("Please Enter Valid Email Address");
				$('#query_emails').css('border-color', 'red');
				 $("#query_emails" ).focus();
					   
				return false;
				}
				if(query_mobile_no==''){
				$("#query_mobile_nor").html('Please enter contact number');
				$('#query_mobile_no').css('border-color', 'red');
				 $("#query_mobile_no" ).focus();
				return false;
				}
				if (!(query_mobile_no.match(mobilenovalidation))) {
				$("#query_mobile_nor").html("Please enter valid contact number");	
				$('#query_mobile_no').css('border-color', 'red');
				 $("#query_mobile_no" ).focus();
				return false;
				}
				if(query_message==''){
				$("#query_messager").html('Please enter your message');
				$('#query_message').css('border-color', 'red');
				 $("#query_message" ).focus();
				return false;
				}
		  $("#sendyourfeedbackquery").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/contactus_mails",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='contact';
						return false;
					} else{
					
	                    alert("not send emails");
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
<div  class="contact">
	<div class="container">
	
		<h3>Contact</h3>
			<?php if($this->session->userdata('documentadded')) { ?>
      <div class="alert alert-success"><strong>Success!</strong> <?php echo $this->session->userdata('documentadded'); ?> </div>
      <?php  $this->session->unset_userdata('documentadded'); } ?>
	 <div class="contact-top">
		<div class="col-md-6 contact-top1">
          <p class="text-contact"><img src="<?php echo base_url();?>assets/images/contact-us.png" style="width:100%"/></p>
		  <div class="contact-address">
		  	<div class="col-md-6 contact-address1">
			  	 <h5>Address</h5>
	         <!--     <p><b>Globallianz</b></p> -->
	           
	             <p>Near Reliance Mart, Opp. Shivgaya Complex, Gajanan Colony, Garkheda, Aurangabad, Maharashtra 431009</p>	
		  	</div>
		  	<div class="col-md-6 contact-address1">
			  	  <h5>Email Address </h5>
	             <p>General :<a href="malito:info@globallianz.com"> info@saibroking.com</a></p>
	             <p>Office :<a href="malito:info@globallianz.com"> info@saibroking.com</a></p>
		  	</div>
		  	<div class="clearfix"></div>
		  </div>
		  <div class="contact-address">
		  	<div class="col-md-6 contact-address1">
			  	 <h5 >Phone </h5>
	          <!--    <p>Landline : 254-8974-5847</p> -->
	             <p>Mobile : +91  8087 245 555</p>
	        </div>
		  	<div class="clearfix"></div>
		  </div>
		</div>
		<div class="col-md-6">
	
                     
					<form id="sendyourfeedbackquery" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" placeholder="Name"  class="form-control" name="query_name" id="query_name" onchange="query_namer()">
						
						<span id="query_namer" style="color:red;float: left;"></span>
						</div>
							<div class="form-group">
						<input type="text" placeholder="Email" class="form-control" name="query_emails" onchange="query_emailsr()" id="query_emails">
						<span id="query_emailsr" style="color:red;float: left;"></span>
						</div>
							<div class="form-group">
						<input type="text" placeholder="Contact No" class="form-control" onchange="query_mobile_nor()" name="query_mobile_no" id="query_mobile_no">
							<span id="query_mobile_nor" style="color:red;float: left;"></span>
							</div>
								<div class="form-group">
						<textarea placeholder="Message" class="form-control" id="query_message" onchange="query_messager()" name="query_message"></textarea>
						<span id="query_messager" style="color:red;float: left;"></span>
						</div>
								<div class="form-group">
						<input type="submit" value="SEND" class="btn btn-primary mydbubttt" onclick="return sendyourfeedbackquery();">
						</div>
					</form>
				
		</div>
		<div class="clearfix"> </div>
</div>
	</div>
	<div class="map">
<!-- 	     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
 -->	 
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15009.711806013238!2d75.3445812!3d19.8641434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48b51d678a76c411!2sSai+Broking!5e0!3m2!1sen!2sin!4v1479989095220" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div></div>