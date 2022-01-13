
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
function addarticals(){
		  $("#addportfilo").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Admin_Controller/insert_advertisment_category",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='advertisment';
						return false;
					}
					else {
				  		window.location='advertisment';
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
		$(document).ready(function() {
		  var lblError = document.getElementById("lblError");
	$('#advertisment_image').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("advertisment_image").value='';
   }
   });
   });
	/*function ValidateExtension() {
        var allowedFiles = [".pdf",".PDF"];
        var fileUpload = document.getElementById("upload_path");
        var lblError = document.getElementById("lblError");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.value.toLowerCase())) {
            lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
			document.getElementById("upload_path").value='';
            return false;
			
        }
        lblError.innerHTML = "";
        return true;
    }*/


</script>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Advertisement Mangement </h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i> Advertisement Mangement</li>
      </ol>
	  <?php if($this->session->userdata('insertsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Advertisement Added Successfully..
</div> 

<?php  $this->session->unset_userdata('insertsucess'); } ?>
    </div>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <form role="form" id="addportfilo" name="addportfilo" enctype="multipart/form-data">
	    <div class="form-group">
          <label>Advertisement Name</label>
          <input class="form-control" id="adveristment_name" name="adveristment_name" placeholder="Advertisment Name" required>
        </div>
		<div class="form-group">
          <label>Select Advertisment Position</label>
          <select class="form-control" id="top_advertisement" name="top_advertisement" placeholder="Advertisment Name" required>
		  <option value="">Select Advertisement Position</option>
		  <option value="Top Position Page">Top Position Page</option>
		  <option value="Internal Page (Map Side)">Internal Page (Map Side)</option>
		   <option value="Bottom Position Page">Bottom Position Page</option>
		  </select>
        </div>
		 <div class="form-group">
          <label>Select Advertisment Category</label>
		  <?php $maincategory=$this->db->query("select *from main_category order by mid asc")->result(); ?>
          <select class="form-control" id="mid" name="mid" placeholder="Advertisment Name" required>
		  <option value="">Select Advertisment Category</option>
		  <?php foreach($maincategory as $main){ ?>
		    <option value="<?php echo $main->mid; ?>"><?php echo $main->category_name; ?></option>
		  <?php } ?>
		  </select>
        </div>
        <div class="form-group">
          <label>Upload Advertisement Image</label>
          <input type="file" id="advertisment_image" name="advertisment_image" required>
		  <span style="color:red;" id="lblError"></span>
        </div>
        <button type="submit" class="btn btn-primary" onClick="addarticals();">Save Advertisment</button>
        <button type="reset" class="btn btn-default">Reset</button>
      </form>
    </div>
  </div>
  <!-- /.row -->
</div>
