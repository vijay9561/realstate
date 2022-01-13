<?php  require_once('adminassets/ckeditor/ckeditor.php'); ini_set('display_errors', 0); ?><br />
<script type="text/javascript" src="<?php echo base_url(); ?>adminassets/ckeditor/ckeditor.js"></script>
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
function addarticals(){
		  $("#addportfilo").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Admin_Controller/add_property_category",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='property-category';
						return false;
					}
					else {
				  		window.location='property-category';
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
	$('#gallery_images').on( 'change', function() {
   myfile= $(this).val();
   var ext = myfile.split('.').pop();
   if(ext=="png" || ext=="jpg" || ext=="jpeg" || ext=="gif"){
      // alert('Valid');
	    lblError.innerHTML='';
   } else{
         lblError.innerHTML = "Please upload files having extensions: <b> only png,jpg,jpeg,gif</b> only.";
			document.getElementById("gallery_images").value='';
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
      <h1 class="page-header"> Property Mangement </h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i> Property Mangement</li>
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
      <form role="form" id="addportfilo" name="addportfilo" enctype="multipart/form-data">
	  <div class="form-group">
          <label>Property Title</label>
          <textarea class="ckeditor" id="ckeditor" name="proftolio_description"></textarea>
        </div>
	  <div class="form-group">
          <label>Select Property Category</label>
          <select class="form-control" id="category_id" name="category_id" required>
		  <?php $cateogoy=$this->Admin_Model->get_property_category_details(); ?>
		  <option value="">Select Property Category</option>
		  <?php foreach($cateogoy as  $cat){ ?>
		  <option value="<?php echo $cat->pcid; ?>"><?php echo $cat->property_name; ?></option>
		  <?php } ?>
		  </select>
        </div>
        <div class="form-group">
          <label>Portfolio  Description</label>
          <textarea class="ckeditor" id="ckeditor" name="proftolio_description"></textarea>
        </div>
        <div class="form-group">
          <label>Upload Portfoli Images mandatory</label>
          <input type="file" id="portfolio_imageqq" name="portfolio_imageqq" onchange="ValidateExtension();" required>
		  <span style="color:red;" id="lblError"></span>
        </div>
		  <div class="form-group">
          <label>Upload Portfoli Images1(optional)</label>
          <input type="file" id="img1" name="img1" onchange="ValidateExtension1();">
		  <span style="color:red;" id="lblError1"></span>
        </div>
		
		 <div class="form-group">
          <label>Upload Portfoli Images2(optional)</label>
          <input type="file" id="img2" name="img2" onchange="ValidateExtension2();">
		  <span style="color:red;" id="lblError2"></span>
        </div>
		
		<div class="form-group">
          <label>Upload Portfoli Images3(optional)</label>
          <input type="file" id="img3" name="img3" onchange="ValidateExtension3();">
		  <span style="color:red;" id="lblError3"></span>
        </div>
		
		<div class="form-group">
          <label>Upload Portfoli Images4(optional)</label>
          <input type="file" id="img4" name="img4" onchange="ValidateExtension4();">
		  <span style="color:red;" id="lblError4"></span>
        </div>
		
		<div class="form-group">
          <label>Upload Portfoli Images5(optional)</label>
          <input type="file" id="img5" name="img5" onchange="ValidateExtension5();">
		  <span style="color:red;" id="lblError5"></span>
        </div>
        <!--<div class="form-group">
          <label>Upload Gallery Images</label>
          <input type="file" id="gallery_images" name="gallery_images" required>
		  <span style="color:red;" id="lblError"></span>
        </div>-->
        <button type="submit" class="btn btn-primary" onClick="addarticals();">Save Category</button>
        <button type="reset" class="btn btn-default">Reset</button>
      </form>
    </div>
  </div>
  <!-- /.row -->
</div>
