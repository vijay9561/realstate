<?PHP if($this->session->userdata('UID')) { ?>
<?php  //require_once('adminassets/ckeditor/ckeditor.php'); //ini_set('display_errors', 0); ?><br />
<script type="text/javascript" src="<?php echo base_url(); ?>adminassets/ckeditor/ckeditor.js"></script>
      <link href="<?php echo base_url(); ?>css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>js/fileinput.js" type="text/javascript"></script>

<script>
$(document).ready(function(e) {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
       
        }, 5000);
    });

function propertypost(){
       
		    $("#proppetpostedd").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			
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
				window.location='<?php echo site_url(); ?>users-posted-prorperty';
						return false;
					}
					else {
			        window.location='<?php echo site_url(); ?>users-posted-prorperty';
						return false;
					}
					
				}
			});
			return false;  
		});
			
	}
	function imagesvalidation(id){
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
   
   function myimagesvalidation(id){
	$(document).ready(function() {
		  var lblError = document.getElementById("lblErrorinserted"+id);
   myfile= $('#myinsertedimages'+id).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById('myinsertedimages'+id).value='';
   }
   });
   }
   
</script>
<style>
img{ margin-right:10px;}
option{text-align: center;}
select{text-align: center;}
</style>
<?php  ?>
<div class="login-right">
	<div class="container">
		<h3>Update Your Images</h3>
		<div class="login-top">
			<?php if($this->session->userdata('registrationsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Your property post succesfully.. if you can approve this posted property please contact to admin
</div> 

<?php  $this->session->unset_userdata('registrationsucess'); } ?>
				<!--<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>-->
			<?php /*?>	<div class="form-group">
          <label>Upload  Multiple Property Images</label>
          <div class="container kv-main" style="width:100%">
           
                <!--<label>French Input</label>-->
             <!--   <input id="photo" name="photo[]" type="file" multiple>-->
			 
               <!-- <hr style="border: 2px dotted">-->
           <!-- <form enctype="multipart/form-data" id="imageuploaduniques" method="post">
				 <input type="file" id="photo" name="photo[]" multiple="multiple" onchange="return insertempdata();">
				 </form>-->
            <hr>
			<span style="color:red;" id="lblError"></span>
            <br>
        </div></div><?php */?>
		<?php  $id=$this->uri->segment(2);  $getdata=$this->db->query("select *from property_images where pid='$id'")->result(); $count= count($getdata);?>
				<div class="form-info">
	<form role="form" method="post"  enctype="multipart/form-data" id="proppetpostedd">
	<input type="hidden" value="<?php echo $id; ?>" id="hiddenid" name="hiddenid" />
		<div class="row">
		  <?php  $i=1; foreach($getdata as $rows){ ?>
		
		  <div class="col-md-3" align="left">
		  <img src="<?php echo base_url(); ?>assets/upload/property_image/<?php echo $rows->image_name; ?>" class="img-thumbnail" style="width:100%; height:150px;" />
          <input type="file" id="myinsertedimages<?php echo $i; ?>" name="myinsertedimages<?php echo $i; ?>" onchange="myimagesvalidation(<?php echo $i; ?>)" >
		  <input type="hidden" id="mydefaultimages<?php echo $i; ?>"  name="mydefaultimages<?php echo $i; ?>" value="<?php echo $rows->image_name; ?>"/>
		  <span style="color:red;" id="lblErrorinserted<?php echo $i; ?>"></span>
        </div>
		<?php $i++; } ?>
		<?php
		for($i=$count;$i<8; $i++){ ?>
		<div class="col-md-3">
		  <img src="<?php echo base_url(); ?>assets/images/noimages.png" class="img-thumbnail" style="width:100%; height:150px;" />
          <input type="file" id="insertimages<?php echo $i; ?>" name="insertimages<?php echo $i; ?>" onchange="return imagesvalidation(<?php echo $i; ?>)">
		  <span style="color:red;" id="lblError<?php echo $i; ?>"></span>
        </div>
		<?php } ?>
		</div>
       
        <button type="submit" class="btn btn-primary" onClick="return propertypost()">Update Images</button>
      </form>
	  
	
				</div>
			
	</div>
</div>
</div>
<script>
    $('#photo').fileinput({
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        */
    });
	</script>
<?php }else{ ?>
<script>
window.location='<?php echo site_url();?>';
</script>
<?php } ?>