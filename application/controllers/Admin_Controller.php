<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
ob_start();
  class Admin_Controller extends MY_Controller {

 public function __construct() {

        parent::__construct();
		$this->load->helper(array('url','html','form'));
		header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0',false);
		header('Pragma: no-cache');
		 date_default_timezone_set('Asia/Kolkata');
		 //$this->load->helper('pdf_helper'); 
    }
	public function admin(){
		$data['template']='index';
		$data['page']='Home';
		$data['title']='Home';
		$this->layout_admin($data);
	}
  public function login(){
     $this->load->view('admin/site/login');
  }
  public function login_process(){
  
    echo $this->Admin_Model->admin_login($_POST);
  }
  function logoutadmin() {
        $this->session->sess_destroy();
         redirect('sai-admin-login');
    }

public function property_category(){
		$data['template']='add-property-category';
		$data['page']='Property Category';
		$data['title']='Add Property Category';
		$this->layout_admin($data);
	}
	public function view_property_category(){
		$data['template']='view-property-category';
		$data['page']='Property Category';
		$data['title']='view Property Category';
		$this->layout_admin($data);
	}
	
public function sub_sub_category(){
		$data['template']='sub_sub_category';
		$data['page']='Sub Sub Category';
		$data['title']='Sub Sub Category';
		$this->layout_admin($data);
	}	
public function search_users_post_requirment(){
       $data['template']='search-users-post-requirment';
		$data['page']='Search Users Post Requirment';
		$data['title']='Search Users Post Requirment';
		$this->layout_admin($data);
}
public function view_users_post_requirment($id){
		$data['template']='view-requirement-details';
		$data['viewdata']=$this->Admin_Model->view_users_post_requirment($id);
		$data['page']='Search Users Post Requirment';
		$data['title']='View  Users Post Requirment';
		$this->layout_admin($data);
	}
public function add_property_category(){
echo $this->Admin_Model->add_property_category($_POST);
}
public function update_property_category(){
echo $this->Admin_Model->update_property_category($_POST);
}
public function add_sub_sub_category(){
echo $this->Admin_Model->add_sub_sub_category($_POST);
}
public function updatestatus_property_category_inactive($id){
   $this->Admin_Model->updatestatus_property_category_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-property-category');
 }
 public function updatestatus_property_category_active($id){
   $this->Admin_Model->updatestatus_property_category_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-property-category');
 }
 public function updatestatus_property_sub_inactive($id){
   $this->Admin_Model->updatestatus_property_sub_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('sub_sub_category');
 }
 public function updatestatus_property_sub_active($id){
   $this->Admin_Model->updatestatus_property_sub_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('sub_sub_category');
 }
 public function updatestatus_property_sub_delete($id){
 $this->Admin_Model->updatestatus_property_sub_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('sub_sub_category');
}

public function updatestatus_property_category_delete($id){
 $this->Admin_Model->updatestatus_property_category_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('view-property-category');
}
public function property(){
		$data['template']='add-property';
		$data['page']='Property';
		$data['title']='Add Property';
		$this->layout_admin($data);
	}
	public function view_property(){
		$data['template']='view-property';
		$data['page']='Property';
		$data['title']='View Property';
		$this->layout_admin($data);
	}
	public function registered_users(){
		$data['template']='registered-users';
		$data['page']='Registered Users';
		$data['title']='Registered Users';
		$this->layout_admin($data);
	}
	public function view_property_details($id){
		$data['template']='view-property-details';
		$data['viewdata']=$this->Admin_Model->view_admin_property_details($id);
		$data['page']='Property';
		$data['title']='View Property Details';
		$this->layout_admin($data);
	}
public function updatestatus_property_inactive($id){
   $this->Admin_Model->updatestatus_property_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-admin-property');
 }
 public function updatestatus_property_active($id){
   $this->Admin_Model->updatestatus_property_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-admin-property');
 }
public function updatestatus_property_delete($id){
 $this->Admin_Model->updatestatus_property_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('view-admin-property');
}
public function add_main_category_property(){
		$data['template']='add-main-property-category';
		$data['page']='Main Category';
		$data['title']='Main Category';
		$this->layout_admin($data);
	}
public function insert_main_category(){
           $string=explode('.',$_FILES["category_images"]["name"]);
           $memberimages = $string[0].'-'. rand(0, 10000) . '.' . end(explode(".", $_FILES["category_images"]["name"]));
			move_uploaded_file($_FILES["category_images"]["tmp_name"], "adminassets/upload/category/" . $memberimages);
			echo $this->Admin_Model->insert_main_category($_POST,$memberimages);
}
public function view_main_property_category(){
$data['template']='view-main-property-category';
		$data['page']='Main Category';
		$data['title']='View Main Category';
		$this->layout_admin($data);
}
public function update_main_property_category(){
   if(!empty($_FILES["category_images"]["name"])){
     $string=explode('.',$_FILES["category_images"]["name"]);
           $memberimages = $string[0].'-'. rand(0, 10000) . '.' . end(explode(".", $_FILES["category_images"]["name"]));
			move_uploaded_file($_FILES["category_images"]["tmp_name"], "adminassets/upload/category/" . $memberimages);
   }else{
     $memberimages=$this->input->post('defaultimage');
   } 
   echo $this->Admin_Model->update_main_property_category($_POST,$memberimages);
}

public function updatestatus_main_property_category_inactive($id){
   $this->Admin_Model->updatestatus_main_property_category_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-main-property-category');
 }
 public function updatestatus_main_property_category_active($id){
   $this->Admin_Model->updatestatus_main_property_category_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-main-property-category');
 }
public function updatestatus_main_property_category_delete($id){
 $this->Admin_Model->updatestatus_main_property_category_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('view-main-property-category');
}

public function updatestatus_users_inactive($id){
   $this->Admin_Model->updatestatus_users_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('registered-users');
 }
 public function updatestatus_users_active($id){
   $this->Admin_Model->updatestatus_users_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('registered-users');
 }
public function updatestatus_users_delete($id){
 $this->Admin_Model->updatestatus_users_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('registered-users');
}
public function delete_checkbox_wise_property()
{
if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->delete('property_post');
		    $this->db->where('pid',$id);
		   $this->db->delete('property_images');
        }
		$this->session->set_userdata('multipledeleteoption','Property Deleted Successfully..'); 
		redirect('view-admin-property'); 
	}
if(isset($_POST['bulk_active_submit'])){
        $idArr = $_POST['checked_id'];
		$acitve='active';
		$update=array('status'=>$acitve);
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->update('property_post',$update);
		  }
		$this->session->set_userdata('multipleupdatestatus','Status Updated Successfully..'); 
		redirect('view-admin-property'); 
        }
if(isset($_POST['bulk_inactive_submit'])){
        $idArr = $_POST['checked_id'];
		$acitve='inactive';
		$update=array('status'=>$acitve);
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->update('property_post',$update);
		  }
		$this->session->set_userdata('multipleupdatestatus','Status Updated Successfully..'); 
		redirect('view-admin-property'); 
        }
}

public function delete_checkbox_wise_requirement(){
if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
		   $this->db->where('prid',$id);
		   $this->db->delete('post_requirement');
        }
		$this->session->set_userdata('multipledeleteoption','Property Requirement Deleted Successfully..'); 
		redirect('search_users_post_requirment'); 
	}
if(isset($_POST['bulk_active_submit'])){
        $idArr = $_POST['checked_id'];
		$acitve='active';
		$update=array('status'=>$acitve);
        foreach($idArr as $id){
		 $this->db->where('prid',$id);
		   $this->db->update('post_requirement',$update);
		  }
		$this->session->set_userdata('multipleupdatestatus','Status Updated Successfully..'); 
		redirect('search_users_post_requirment'); 
        }
if(isset($_POST['bulk_inactive_submit'])){
        $idArr = $_POST['checked_id'];
		$acitve='inactive';
		$update=array('status'=>$acitve);
        foreach($idArr as $id){
		  $this->db->where('prid',$id);
		   $this->db->update('post_requirement',$update);
		  }
		$this->session->set_userdata('multipleupdatestatus','Status Updated Successfully..'); 
		redirect('search_users_post_requirment'); 
        }
}

public function updatestatus_requirement_inactive($id){
   $this->Admin_Model->updatestatus_requirement_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('search_users_post_requirment');
 }
 public function updatestatus_requirement_active($id){
   $this->Admin_Model->updatestatus_requirement_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('search_users_post_requirment');
 }
public function updatestatus_requirement_delete($id){
 $this->Admin_Model->updatestatus_requirement_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('search_users_post_requirment');
}
public function add_admin_sub_category(){
$data['template']='add-sub-property-category';
		$data['page']='Sub Category';
		$data['title']='Sub Category';
		$this->layout_admin($data);
}
public function insert_sub_category(){
    echo $this->Admin_Model->insert_sub_category($_POST);
}
public function view_sub_category(){
$data['template']='view-sub-property-category';
		$data['page']='Sub Category';
		$data['title']='View Sub Category';
		$this->layout_admin($data);
}
public function update_sub_property_category(){
  echo $this->Admin_Model->update_sub_property_category($_POST);
}

public function updatestatus_subcategory_inactive($id){
   $this->Admin_Model->updatestatus_subcategory_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view_sub_category');
 }
 public function updatestatus_subcategory_active($id){
   $this->Admin_Model->updatestatus_subcategory_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view_sub_category');
 }
public function updatestatus_subcategory_delete($id){
 $this->Admin_Model->updatestatus_subcategory_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('view_sub_category');
}
public function update_admin_property($id){
     $data['template']='update_property_admin';
	  $data['page']='Property'; 
	  $data['title']='Update Property';
	  $this->layout_admin($data);
}

public function update_admin_property_images($id){
     $data['template']='update_property_images_admin';
	  $data['page']='Property'; 
	  $data['title']='Update Property Images';
	  $this->layout_admin($data);
}
public function change_password_process(){
     $olpassword=$this->input->post('oldPassword');
	 $newpassword=$this->input->post('newPassword');
	 echo $this->Admin_Model->change_password( $olpassword,$newpassword);
}
public function admin_password_change($id){
     $data['template']='change-password';
	  $data['page']='Change Password'; 
	  $data['title']='Change Password';
	  $this->layout_admin($data);
}


public function inactive_all_property()
{
if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->delete('property_post');
		    $this->db->where('pid',$id);
		   $this->db->delete('property_images');
        }
		$this->session->set_userdata('multipledeleteoption','Property Deleted Successfully..'); 
		redirect('inactive_admin_property'); 
	}
if(isset($_POST['bulk_active_submit'])){
        $idArr = $_POST['checked_id'];
		$acitve='active';
		$update=array('status'=>$acitve);
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->update('property_post',$update);
		  }
		$this->session->set_userdata('multipleupdatestatus','Status Updated Successfully..'); 
		redirect('inactive_admin_property'); 
        }
if(isset($_POST['bulk_inactive_submit'])){
        $idArr = $_POST['checked_id'];
		$acitve='inactive';
		$update=array('status'=>$acitve);
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->update('property_post',$update);
		  }
		$this->session->set_userdata('multipleupdatestatus','Status Updated Successfully..'); 
		redirect('inactive_admin_property'); 
        }
}

public function inactive_admin_property(){
     $data['template']='inactive_property';
	  $data['page']='Inactive Property'; 
	  $data['title']='Inactive Property';
	  $this->layout_admin($data);
}
public function updatestatus_property_inactive_expired($id){
   $this->Admin_Model->updatestatus_property_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('inactive_admin_property');
 }
public function updatestatus_property_delete_expried($id){
 $this->Admin_Model->updatestatus_property_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('inactive_admin_property');
}
public function active_admin_property(){
     $data['template']='active_property';
	  $data['page']='Active Property'; 
	  $data['title']='Active Property';
	  $this->layout_admin($data);
}
public function my_active_propery($id){
   $this->Admin_Model->updatestatus_property_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('active_admin_property');
 }
 
 public function my_all_active_property()
{
if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->delete('property_post');
		    $this->db->where('pid',$id);
		   $this->db->delete('property_images');
        }
		$this->session->set_userdata('multipledeleteoption','Property Deleted Successfully..'); 
		redirect('active_admin_property'); 
	}
if(isset($_POST['bulk_active_submit'])){
        $idArr = $_POST['checked_id'];
		$acitve='inactive';
		$update=array('status'=>$acitve);
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->update('property_post',$update);
		  }
		$this->session->set_userdata('multipleupdatestatus','Status Updated Successfully..'); 
		redirect('active_admin_property'); 
        }
}

public function updatestatus_property_delete_inactive_property($id){
 $this->Admin_Model->updatestatus_property_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('active_admin_property');
}
public function view_property_other(){
		$data['template']='view-property-other';
		$data['page']='View Property Other';
		$data['title']='View Property Other';
		$this->layout_admin($data);
	}
public function view_property_details_other($id){
		$data['template']='view-property-details-other';
	//	$data['viewdata']=$this->Admin_Model->view_admin_property_details($id);
		$data['page']='View Property Other';
		$data['title']='View Property Other Details';
		$this->layout_admin($data);
	}

public function other_property_update($id){
         $data['template']='update_property-other';
	//	$data['viewdata']=$this->Admin_Model->view_admin_property_details($id);
		$data['page']='View Property Other';
		$data['title']='Update Other Property';
		$this->layout_admin($data);
}
public function update_admin_property_images_other($id){
     $data['template']='update_admin_property_images_other';
	  $data['page']='View Property Other'; 
	  $data['title']='Update Property Images Other';
	  $this->layout_admin($data);
}

public function delete_checkbox_wise_property_other()
{
if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->delete('property_post');
		    $this->db->where('pid',$id);
		   $this->db->delete('property_images');
        }
		$this->session->set_userdata('multipledeleteoption','Services Deleted Successfully..'); 
		redirect('view_property_other'); 
	}
if(isset($_POST['bulk_active_submit'])){
        $idArr = $_POST['checked_id'];
		$acitve='active';
		$update=array('status'=>$acitve);
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->update('property_post',$update);
		  }
		$this->session->set_userdata('multipleupdatestatus','Status Updated Successfully..'); 
		redirect('view_property_other'); 
        }
if(isset($_POST['bulk_inactive_submit'])){
        $idArr = $_POST['checked_id'];
		$acitve='inactive';
		$update=array('status'=>$acitve);
        foreach($idArr as $id){
		   $this->db->where('pid',$id);
		   $this->db->update('property_post',$update);
		  }
		$this->session->set_userdata('multipleupdatestatus','Status Updated Successfully..'); 
		redirect('view_property_other'); 
        }
}
public function updatestatus_property_inactive_other($id){
   $this->Admin_Model->updatestatus_property_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view_property_other');
 }
 public function updatestatus_property_active_other($id){
   $this->Admin_Model->updatestatus_property_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view_property_other');
 }
public function updatestatus_property_delete_other($id){
 $this->Admin_Model->updatestatus_property_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('view_property_other');
}
public function update_my_other_property(){
   $id=$this->input->post('propertypostid');
     $addtitle='';
   $amenities = implode(',',$this->input->post('amenities'));
   $single_room_type = implode(',',$this->input->post('single_room_type'));
if($this->input->post('property_title')){
		$addtitle=$this->input->post('property_title');
		}else{
		$addtitle=$this->input->post('school_name');
		}
   $checkbox=$this->input->post('negotiable',TRUE)==NULL ? 0 : 1;
	//   $single_room_type = implode(',',$this->input->post('single_room_type'));
    $insert=array('property_title'=>$addtitle,
					'property_owner_name'=>$this->input->post('property_owner_name'),
					'owner_contact_no'=>$this->input->post('owner_contact_no'),
					'city'=>$this->input->post('city'),
					'address_details'=>$this->input->post('address_details'),
					'property_description'=>$this->input->post('property_description'),
					'category_id'=>$this->input->post('property_subcategory'),
					'price_negociable'=>$checkbox,
					'amenities'=>$amenities,
					'single_room_type'=>$single_room_type,
					'property_price'=>$this->input->post('property_price'),
					'main_categories_id'=>$this->input->post('mainhiddencategory'),
					'car_name'=>$this->input->post('car_name'),
					'furniture_condtion'=>$this->input->post('allmostlike'),
					 'hall_facility'=>$this->input->post('hall_facility'),
					'hall_type'=>$this->input->post('hall_decorate'),
					'area'=>$this->input->post('area'),
					'water_storage'=>$this->input->post('water_storage_capcity'),
					'hanuman_temple'=>$this->input->post('human_temple_distance'),
					'parking_square_foot'=>$this->input->post('parking_squate_foot'),
					'parking_capcity'=>$this->input->post('parking_bike_capcity'),
					'parking_type_one'=>$this->input->post('parkingtypedd'),
					'model'=>$this->input->post('car_mdoel_name'),
					'car_driven_kilometer'=>$this->input->post('killometerdriven'),
					'year'=>$this->input->post('car_year'),
					'loan_type'=>$this->input->post('loan_type'),
					'fuel'=>$this->input->post('car_fuel'),
					'offer_name'=>$this->input->post('offer_name'),
					'offer_type'=>$this->input->post('offer_type'),
					'product_name'=>$this->input->post('product_nameess'),
					'store_name'=>$this->input->post('store_name'),
					'from_date'=>$this->input->post('from_date'),
					'end_date'=>$this->input->post('end_date'),
					'school_name'=>$this->input->post('school_name'),
					'school_pattern'=>$this->input->post('school_pattern'),
					'dept_type'=>$this->input->post('dept_type'),
					'school_medium'=>$this->input->post('school_medium'),
					'root_num'=>$this->input->post('root_num'),
					'dealer_type'=>$this->input->post('delartype'));
				  $this->db->where('pid',$id);
				 $query=$this->db->update('property_post',$insert);
				//echo $this->db->last_query();
				///exit;
              $this->session->set_userdata('updateproperty',1);
		  echo 1;

}
/*public function update_your_images_values(){
 $this->load->library('image_lib');
 $id=$this->input->post('hiddenid'); 
$getdata=$this->db->query("select *from property_images where pid='$id'")->result(); 
 $count= count($getdata);
  $i=1;   foreach($getdata as $rows){ 
     if(!empty($_FILES["myinsertedimages$i"]["name"])){
	    $img1=$_FILES["myinsertedimages$i"]["name"];
		move_uploaded_file($_FILES["myinsertedimages$i"]["tmp_name"], "assets/upload/property_image/" . $_FILES["myinsertedimages$i"]["name"]);
			$config['image_library'] = 'gd2';
	     $config['source_image'] ='./assets/upload/property_image/'.$_FILES["myinsertedimages$i"]["name"];
			$config['wm_text'] = 'www.saibroking.com';
			$config['wm_type'] = 'text';
			$config['wm_font_path'] = './system/fonts/texb.ttf';
			$config['wm_font_size'] = '20';
			$config['wm_font_color'] = 'ffffff';
			$config['wm_vrt_alignment'] = 'bottom';
			$config['wm_hor_alignment'] = 'center';
			$config['wm_padding'] = '20';
			$config['wm_vrt_offset'] = '70';
			$this->image_lib->initialize($config);
           $this->image_lib->watermark();
		
			if (!$this->image_lib->watermark())
			{
			echo $this->image_lib->display_errors();
			exit;
			}
			   $this->image_lib->clear();
         }else{
		    $img1=$rows->image_name;
		 } 
		 $insert=array('image_name'=>$img1);
		   $this->db->where('piid',$rows->piid);
		   $query=$this->db->update('property_images',$insert);
		  $i++;
  }
 for($i12=$count;$i12<8; $i12++){ 
     if(!empty($_FILES["insertimages$i12"]["name"])){
        $img12 = $_FILES["insertimages$i12"]["name"];
	 	move_uploaded_file($_FILES["insertimages$i12"]["tmp_name"], "assets/upload/property_image/" . $_FILES["insertimages$i12"]["name"]);
		 $insertnewentry=array('image_name'=>$_FILES["insertimages$i12"]["name"],'pid'=>$id);
		 $this->db->insert('property_images',$insertnewentry);
		 
		 	$config['image_library'] = 'gd2';
	     $config['source_image'] ='./assets/upload/property_image/'. $_FILES["insertimages$i12"]["name"];
			$config['wm_text'] = 'www.saibroking.com';
			$config['wm_type'] = 'text';
			$config['wm_font_path'] = './system/fonts/texb.ttf';
			$config['wm_font_size'] = '20';
			$config['wm_font_color'] = 'ffffff';
			$config['wm_vrt_alignment'] = 'bottom';
			$config['wm_hor_alignment'] = 'center';
			$config['wm_padding'] = '20';
			$config['wm_vrt_offset'] = '70';
			$this->image_lib->initialize($config);
           $this->image_lib->watermark();
		
			if (!$this->image_lib->watermark())
			{
			echo $this->image_lib->display_errors();
			exit;
			}
			   $this->image_lib->clear();
		// echo $this->db->last_query();
         }
 }
  $propertyid=$this->input->post('hiddenid'); 
 echo 1;
 $this->session->set_userdata('updateimages',1);
 exit;
}*/

public function update_your_images_values(){
 $this->load->library('image_lib');
 $id=$this->input->post('hiddenid'); 
$getdata=$this->db->query("select *from property_images where pid='$id'")->result(); 
 $count= count($getdata);
  $i=1;   foreach($getdata as $rows){ 
     if(!empty($_FILES["myinsertedimages$i"]["name"])){
	    $img1=$_FILES["myinsertedimages$i"]["name"];
		move_uploaded_file($_FILES["myinsertedimages$i"]["tmp_name"], "assets/upload/property_image/" . $_FILES["myinsertedimages$i"]["name"]);
			$config['image_library'] = 'gd2';
	     $config['source_image'] ='./assets/upload/property_image/'.$_FILES["myinsertedimages$i"]["name"];
			$config['wm_text'] = 'www.saibroking.com';
			$config['wm_type'] = 'text';
			$config['wm_font_path'] = './system/fonts/texb.ttf';
			$config['wm_font_size'] = '20';
			$config['wm_font_color'] = 'ffffff';
			$config['wm_vrt_alignment'] = 'bottom';
			$config['wm_hor_alignment'] = 'center';
			$config['wm_padding'] = '20';
			$config['wm_vrt_offset'] = '70';
			$this->image_lib->initialize($config);
           $this->image_lib->watermark();
		
			if (!$this->image_lib->watermark())
			{
			echo $this->image_lib->display_errors();
			exit;
			}
			   $this->image_lib->clear();
         }else{
		    $img1=$rows->image_name;
		 } 
		 $insert=array('image_name'=>$img1);
		   $this->db->where('piid',$rows->piid);
		   $query=$this->db->update('property_images',$insert);
		  $i++;
  }
 for($i12=$count;$i12<8; $i12++){ 
     if(!empty($_FILES["insertimages$i12"]["name"])){
        $img12 = $_FILES["insertimages$i12"]["name"];
	 	move_uploaded_file($_FILES["insertimages$i12"]["tmp_name"], "assets/upload/property_image/" . $_FILES["insertimages$i12"]["name"]);
		 $insertnewentry=array('image_name'=>$_FILES["insertimages$i12"]["name"],'pid'=>$id);
		 $this->db->insert('property_images',$insertnewentry);
		 
		 	$config['image_library'] = 'gd2';
	     $config['source_image'] ='./assets/upload/property_image/'. $_FILES["insertimages$i12"]["name"];
			$config['wm_text'] = 'www.saibroking.com';
			$config['wm_type'] = 'text';
			$config['wm_font_path'] = './system/fonts/texb.ttf';
			$config['wm_font_size'] = '20';
			$config['wm_font_color'] = 'ffffff';
			$config['wm_vrt_alignment'] = 'bottom';
			$config['wm_hor_alignment'] = 'center';
			$config['wm_padding'] = '20';
			$config['wm_vrt_offset'] = '70';
			$this->image_lib->initialize($config);
           $this->image_lib->watermark();
		
			if (!$this->image_lib->watermark())
			{
			echo $this->image_lib->display_errors();
			exit;
			}
			   $this->image_lib->clear();
		// echo $this->db->last_query();
         }
 }
  //$propertyid=$this->input->post('hiddenid'); 
 //$updateinactive=array('status'=>'inactive');
 //$this->db->where('pid',$propertyid);
 //$this->db->update('property_post',$updateinactive);
 echo 1;
 $this->session->set_userdata('updateimages',1);
 exit;
}


public function update_your_property_posted(){
		$pid=$this->input->post('piiid');
	   if($this->input->post('amenities')){
	     $amenities = implode(',',$this->input->post('amenities'));
	   }else{
	     $amenities = $this->input->post('defaultamenities1');
	   }
	   $checkbox=$this->input->post('negotiable',TRUE)==NULL ? 0 : 1;
	  $brokeragenegociable=$this->input->post('brokerage_negociable',TRUE)==NULL ? 0 : 1;
	   $despositnegociable=$this->input->post('deposite_negociable',TRUE)==NULL ? 0 : 1;
   $insert=array('property_title'=>$this->input->post('property_title'),
   'category_id'=>$this->input->post('category_id'),
   'property_price'=>$this->input->post('property_price'),
   'rooms'=>$this->input->post('rooms'),
   'area'=>$this->input->post('area'),
   'property_builder'=>$this->input->post('property_builder'),
   'property_residentaily'=>$this->input->post('property_residentaily'),
   'property_furnish'=>$this->input->post('property_furnish'),'property_owner_name'=>$this->input->post('property_owner_name'),
   'owner_contact_no'=>$this->input->post('owner_contact_no'),
   'city'=>$this->input->post('city'),
   'address_details'=>$this->input->post('address_details'),
'property_description'=>$this->input->post('property_description'),
'amenities'=>$amenities,
                     'brokerage_negociable'=>$brokeragenegociable,
					'deposite_negociable'=>$despositnegociable,
					'deposite_price'=>$this->input->post('deposite_price'),
					'brokerage_price'=>$this->input->post('brokerage_price'),
'residential_category'=>$this->input->post('residential_category'),
'price_negociable'=>$checkbox,'near_bus_stand'=>$this->input->post('insert_bustand_location'),
'near_railway_station'=>$this->input->post('insert_railway_station'));		
			$this->db->where('pid',$pid);
			$query=$this->db->update('property_post',$insert);
	      // echo $this->db->last_query();
		 //  echo $this->db->affected_rows();
		   
			if($this->db->affected_rows()){
			 $this->session->set_userdata('updateproperty',1);
			 return  1;
			 exit;
    
			} else{  $this->session->set_userdata('updateproperty',1); return  2; exit;}
}

public function insert_advertisment_category(){
           $string=explode('.',$_FILES["advertisment_image"]["name"]);
           $memberimages = $string[0].'-'. rand(0, 10000) . '.' . end(explode(".", $_FILES["advertisment_image"]["name"]));
			move_uploaded_file($_FILES["advertisment_image"]["tmp_name"], "adminassets/upload/ad/" . $memberimages);
			echo $this->Admin_Model->insert_advertisment_category($_POST,$memberimages);
}

public function advertisment(){
     $data['template']='advertisment';
	  $data['page']='Add Advertisment'; 
	  $data['title']='Add Advertisment';
	  $this->layout_admin($data);
}
public function view_advertisement(){
      $data['template']='view-advertisment';
	  $data['page']='Add Advertisment'; 
	  $data['title']='View Advertisment';
	  $this->layout_admin($data);
}
public function updatestatus_advertisment_inactive($id){
   $this->Admin_Model->updatestatus_advertisment_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view_advertisement');
 }
 public function updatestatus_advertisment_active($id){
   $this->Admin_Model->updatestatus_advertisment_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view_advertisement');
 }
 public function updatestatus_advertisment_delete($id){
 $this->Admin_Model->updatestatus_advertisment_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('view_advertisement');
}
public function slider_images(){
      $data['template']='slide';
	  $data['page']='Slider'; 
	  $data['title']='Slider';
	  $this->layout_admin($data);
}

public function insert_slider_images(){
           $string=explode('.',$_FILES["sliderimages"]["name"]);
           $memberimages = $string[0].'-'. rand(0, 10000) . '.' . end(explode(".", $_FILES["sliderimages"]["name"]));
			move_uploaded_file($_FILES["sliderimages"]["tmp_name"], "adminassets/upload/slider/" . $memberimages);
			echo $this->Admin_Model->slider_images($memberimages);
}
 public function updatestatus_sliders_delete($id){
 $this->Admin_Model->updatestatus_sliders_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('slider_images');
}
public function update_slider_images(){
           $string=explode('.',$_FILES["sliderimages"]["name"]);
           $memberimages = $string[0].'-'. rand(0, 10000) . '.' . end(explode(".", $_FILES["sliderimages"]["name"]));
			move_uploaded_file($_FILES["sliderimages"]["tmp_name"], "adminassets/upload/slider/" . $memberimages);
			echo $this->Admin_Model->update_slider_images($_POST,$memberimages);
			  $this->session->set_userdata('updateimages',1);
}
}