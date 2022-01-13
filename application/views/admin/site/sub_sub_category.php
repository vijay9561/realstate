 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
function addarticals(){
		  $("#addblogimages").unbind('submit').bind('submit',function() {
			var formData = new FormData($(this)[0]);
			$.ajax({   
				url: "<?php echo site_url(); ?>Admin_Controller/add_sub_sub_category",
				type: "POST",
				data : formData,
				async: true,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if(data==1){
						window.location='sub_sub_category';
						return false;
					}
					else {
				  		window.location='sub_sub_category';
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
   
   function category_namer(){if($('#category_name').val()==''){
             }else{     
			        var category=document.getElementById('category_name').value.trim();
                       $.ajax({
					  	url: "<?php echo site_url(); ?>Users_Controller/get_sub_sub_category",
						type: 'POST',
						data: {category:category},
						success: function(data) {
						$("#getsubcategory2344").fadeOut().html(data).fadeIn('slow');
				
						}
						});
					
            $("#loaderimages12").fadeOut("slow"); }}
</script>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Sub Sub Category</h1>
      <ol class="breadcrumb">
        <li> <i class="fa fa-dashboard"></i> <a href="<?php echo site_url(); ?>admin">Dashboard</a> </li>
        <li class="active"> <i class="fa fa-home"></i>Sub Sub Category<</li>
      </ol>
	  <?php if($this->session->userdata('updatequery')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Status Update Sucessfully..
</div> 

<?php  $this->session->unset_userdata('updatequery'); } ?>

  <?php if($this->session->userdata('insertsucess')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong>Child Category Added Successfully...
</div> 

<?php  $this->session->unset_userdata('insertsucess'); } ?>
<?php if($this->session->userdata('deletearticals')==1) { ?>
	  <div class="alert alert-success">
  <strong>Success!</strong> Child Category Deleted Sucessfully..
</div> 

<?php  $this->session->unset_userdata('deletearticals'); } ?>
    </div>
  </div>
  <!-- /.row -->
  <?php if(isset($_GET['subcategory'])) { ?>
  <div class="row">
  <div class="col-lg-12">
   <form role="form" id="addblogimages"  name="addblogimages"  method="post" enctype="multipart/form-data">
      
		  <div class="form-group">
          <label>Select Main Category Name <b style="color:red;">*</b></label>
          	<?php   $viewdata2=$this->db->query("select *from main_category where mid IN(8) order by mid asc")->result(); ?>
			 <select class="form-control" required id="category_name" name="category_name" maxlength="200"  onChange="category_namer()">
			 <option value="">Select Main Category</option>
			 <?php foreach( $viewdata2 as $rows) { ?>
			 <option value="<?php echo $rows->mid ?>"><?php echo $rows->category_name; ?></option>
			 <?php } ?>
			 </select>
			  <img  id="loaderimages12" style="display:none;" src="<?php echo base_url(); ?>assets/images/loading.gif" />
        </div>
 <div class="form-group" id="getsubcategory2344">
		 
		 </div>
		 <div class="form-group">
		 <label>Sub Sub Category Name <b style="color:red;">*</b></label>
		 <input type="text" class="form-control" name="sub_sub_category_name" required />
		 </div>

        <button type="submit" class="btn btn-primary" onClick="addarticals();">Update Category</button>
        <a  href="<?php echo site_url(); ?>view-property-category" class="btn btn-default">Back</a>
      </form>
  </div>
  </div>
  <br><br>
  <script>
 $(document).ready(function() {
	$('#example').DataTable( {
        "ordering": false,
        "info":     false
    } );
} );
 </script>
  <?php } ?>
  <div class="row">
    <div class="col-lg-12">
	<div class="table-responsive">
	<table class="table table-bordered" id="example"><thead><tr><th>#</th><th>Main Category Name</th><th>Sub Category Name</th><th>Sub Sub Category Name</th><th style="width:30%">Action <a href="<?php echo site_url();?>sub_sub_category?subcategory=subcategory"  title="Edit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a></th></tr></thead>
	<tbody>
	<?php $i=1; 
	$viewdata=$this->db->query("select *from child_category order by ccid asc")->result();
	//echo $this->db->last_query();
	foreach($viewdata as $rows){?>
	<tr>
	<td><?php echo $i++; $maincategory=$this->db->query("select *from main_category where mid='". $rows->mid."'")->result(); ?></td>
	<td><?php echo $maincategory[0]->category_name; ?></td>
	<td><?php  $subcategory=$this->db->query("select *from subcategory where scid='". $rows->scid."'")->result(); 
	echo $subcategory[0]->category_name;?></td>
	<td><?php echo $rows->child_category_name; ?></td>
<td>&nbsp;
		 <?php if($rows->status=='active') { ?><a href="<?php echo site_url();?>Admin_Controller/updatestatus_property_sub_inactive/<?php echo  $rows->ccid; ?>" onClick="return confirm('Are You Sure Update This Status'); " class="btn btn-success"><?php echo $rows->status;  ?></a><?php }else {?><a href="<?php echo site_url();?>Admin_Controller/updatestatus_property_sub_active/<?php echo  $rows->ccid; ?>"  onclick="return confirm('Are You Sure Update This Status'); " class="btn btn-danger"><?php echo $rows->status; }  ?></a>&nbsp;
		   <a href="<?php echo site_url(); ?>Admin_Controller/updatestatus_property_sub_delete/<?php echo  $rows->ccid;?>" class="btn btn-danger" onClick="return confirm('Are You Sure Delete This sub sub category'); "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		   </td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
	</div>
     
    </div>
  </div>
  <!-- /.row -->
</div>
