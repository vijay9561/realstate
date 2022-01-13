
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
function addarticals(){
		  $("#addportfilo").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Admin_Controller/insert_sub_category",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='add_admin_sub_category';
						return false;
					}
					else {
				  		window.location='add-main-category-property';
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
	$('#category_images').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("category_images").value='';
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
      <h1 class="page-header">Sub Property Category Mangement </h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i> Sub Category Mangement</li>
      </ol>
	  <?php if($this->session->userdata('insertsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Sub Property Category Added Successfully..
</div> 

<?php  $this->session->unset_userdata('insertsucess'); } ?>
    </div>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <form role="form" id="addportfilo" name="addportfilo" enctype="multipart/form-data">
	    <div class="form-group">
          <label>Select Main Category Name</label>
          <select class="form-control" id="mid" name="mid" placeholder="Main Category Name" required>
		  <option value="">Select</option>
		  <?php $db=$this->db->query("select *from main_category order by mid asc")->result(); foreach($db as $rows) { ?>
		  <option value="<?php echo $rows->mid; ?>"><?php echo $rows->category_name; ?></option>
		  <?php } ?>
		  </select>
        </div>
        <div class="form-group">
          <label>Sub Category Name</label>
          <input type="text" id="category_name" name="category_name" class="form-control"  placeholder="Sub Category Name" required>
		  <span style="color:red;" id="lblError"></span>
        </div>
        <button type="submit" class="btn btn-primary" onClick="addarticals();">Save Category</button>
        <button type="reset" class="btn btn-default">Reset</button>
      </form>
    </div>
  </div>
  <!-- /.row -->
</div>
