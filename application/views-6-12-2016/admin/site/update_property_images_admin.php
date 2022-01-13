<style>
.img-wrap {
    border: 1px green solid;
    font-size: 0;

}
.img-wrap .close {
  position: absolute;
top: -11px;
right: -1px;
z-index: 9999;
background-color: #16A823;
padding: 3px 3px 6px;
color: #030303;
font-weight: bold;
cursor: pointer;
opacity: .6;
text-align: center;
font-size: 25px;
line-height: 10px;
border-radius: 50%;
}
.img-wrap:hover .close {
    opacity: 2;
}
</style>

<script>
$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });

function propertypost(){
       
		    $("#proppetpostedd").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$("#loaderimages").show();
			$.ajax({   
				url: "<?php echo site_url(); ?>Users_Controller/update_your_images_values",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
				//	alert(data);
				
				window.location='<?php echo site_url(); ?>view-admin-property';
						return false;
					}
					else {
			        window.location='<?php echo site_url(); ?>view-admin-property';
						return false;
					}
					
				}
			});
			return false;  
		});
			
	}
	function imagesvalidation(id){
	
	  var lblError = document.getElementById("lblError"+id);
       var file_size = $('#insertimages'+id)[0].files[0].size;
              myfile= $('#insertimages'+id).val();
				if(file_size>2097152) {
				$("#lblError"+id).html("File size must not be more than 2 MB");
				$('#insertimages'+id).val('');
				return false;
				} 
    var fileUpload = document.getElementById("insertimages"+id);
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("nottempemptyimage"+id);
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    for (var i = 0; i < fileUpload.files.length; i++) {
                        var file = fileUpload.files[i];
                        if (regex.test(file.name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = document.createElement("IMG");
                                img.height = "146";
                                img.width = "309";
                                img.src = e.target.result;
								img.class="img-thumbnail";
                                dvPreview.appendChild(img);
								
                            }
                            reader.readAsDataURL(file);
							
							$("#notemptyopenimages"+id).hide();
                        } 
						
						else {
                            alert(file.name + " is not a valid image file.");
                            dvPreview.innerHTML = "";
							$('#myinsertedimages'+id).val('');
                            return false;
                        }
                    }
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
	$(document).ready(function() {
		  var lblError = document.getElementById("lblError"+id);
   myfile= $('#insertimages'+id).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById('insertimages'+id).value='';
   }
   });
   }
   

		
            function myimagesvalidation(id) {
			  var lblError = document.getElementById("lblErrorinserted"+id);
			    var file_size = $('#myinsertedimages'+id)[0].files[0].size;
              myfile= $('#myinsertedimages'+id).val();
				if(file_size>2097152) {
				$("#lblErrorinserted"+id).html("File size must not be more than 2 MB");
				return false;
				$('#myinsertedimages'+id).val('');
				} 
 
    var fileUpload = document.getElementById("myinsertedimages"+id);
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("tempemptyimage"+id);
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    for (var i = 0; i < fileUpload.files.length; i++) {
                        var file = fileUpload.files[i];
                        if (regex.test(file.name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = document.createElement("IMG");
                                img.height = "146";
                                img.width = "309";
                                img.src = e.target.result;
								img.class="img-thumbnail";
                                dvPreview.appendChild(img);
								
                            }
                            reader.readAsDataURL(file);
							
							$("#emptyopenimages"+id).hide();
                        } 
						
						else {
                            alert(file.name + " is not a valid image file.");
                            dvPreview.innerHTML = "";
								$('#myinsertedimages'+id).val('');
                            return false;
                        }
                    }
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
         
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById('myinsertedimages'+id).value='';
   }
    }
function temimagesdelete(id) {
        var r=confirm('Are you sure you want to delete this image?');
		if(r==true)
		{
        $.ajax({
            url: "<?php echo site_url(); ?>Users_Controller/deleteupdatimages",
            type: 'POST',
            data: {id: id},
            success: function(data) {
			      if(data==1){
			     	location.reload(); 
					return false;
					}else{
					 alert('Not Deleted images')
					}
          }
        });
        return false;
	} else
	{
	   return false;	
     }
    }
</script>
<style>
img{ margin-right:10px;}
option{text-align: center;}
select{text-align: center;}
</style>


<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Update Propery Images</h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>Update Propery Images</li>&nbsp;&nbsp;
		<a href="<?php echo base_url(); ?>view-admin-property" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      </ol>
	  <?php if($this->session->userdata('insertsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Property Category Added Successfully..
</div> 

<?php  $this->session->unset_userdata('insertsucess'); } ?>
    </div>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
     <?php  $id=$this->uri->segment(2);  $getdata=$this->db->query("select *from property_images where pid='$id'")->result(); $count= count($getdata);?> 
	  <div class="form-info">
	<form role="form" method="post"  enctype="multipart/form-data" id="proppetpostedd">
	<input type="hidden" value="<?php echo $id; ?>" id="hiddenid" name="hiddenid" />
		<div class="row">
		  <?php  $i=1; foreach($getdata as $rows){ ?>
	
		  <div class="col-md-3" align="left">
		  <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $rows->image_name; ?>" class="img-thumbnail" style="width:100%;height: 146px;"  id="emptyopenimages<?php echo $i; ?>" />
		
		    <div id="tempemptyimage<?php echo $i; ?>"></div>
          <input type="file" id="myinsertedimages<?php echo $i; ?>" name="myinsertedimages<?php echo $i; ?>" onchange="myimagesvalidation(<?php echo $i; ?>)" >
		  <input type="hidden" id="mydefaultimages<?php echo $i; ?>"  name="mydefaultimages<?php echo $i; ?>" value="<?php echo $rows->image_name; ?>"/>
		  <span style="color:red;" id="lblErrorinserted<?php echo $i; ?>"></span>
		  <br />
        </div>
		<?php $i++; } ?>
		<?php
		for($i=$count;$i<8; $i++){ ?>
		<div class="col-md-3" align="left" style="float:left;">
		  <img src="<?php echo base_url(); ?>assets/images/noimages.png" class="img-thumbnail" style="width:100%;height:146px;"   id="notemptyopenimages<?php echo $i; ?>" />
		 <div id="nottempemptyimage<?php echo $i; ?>"></div>
          <input type="file" id="insertimages<?php echo $i; ?>" name="insertimages<?php echo $i; ?>" onchange="return imagesvalidation(<?php echo $i; ?>)">
		  <span style="color:red;" id="lblError<?php echo $i; ?>"></span>
		  <br />
        </div>
		<?php } ?>
		<br />
		</div>
		<br />
        <button type="submit" class="btn btn-primary mydbubttt" onClick="return propertypost()">Update Images</button> &nbsp;&nbsp;	<img  id="loaderimages" style="display:none;" src="<?php echo base_url(); ?>assets/images/loading.gif" />
      </form>
	  
	
				</div>
    </div>
  </div>
  <!-- /.row -->
</div>
<br><br>
<script>

$(document).ready(function(){
              $("#address_details").autocomplete({
                     source: "<?php echo site_url() ?>Users_Controller/autosearch_recors",
                     minLength: 1,
                    select: function(event, data) {
                     $("#address_details").val(data.item.value);
					 $(document).ready(function(){
					adddres=document.getElementById('address_details').value.trim();
					var  city=document.getElementById('city').value.trim();
					$.ajax({
					url: "<?php echo site_url();?>Users_Controller/get_google_map_details",
					type: 'POST',
					data: {adddres:adddres,
					city:city,},
					success: function(data) {
					$("#getgooglemaps").fadeOut().html(data).fadeIn('slow');
					}
					});
					});
                    },
                });
           });	
</script>
