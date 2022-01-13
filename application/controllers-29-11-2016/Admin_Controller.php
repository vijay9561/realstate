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
         redirect('login-admin');
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
if(isset($_POST['bulk_delete_submit1'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
		   $this->db->where('prid',$id);
		   $this->db->delete('post_requirement');
        }
		$this->session->set_userdata('multipledeleteoption','Property Requirement Deleted Successfully..'); 
		redirect('search_users_post_requirment'); 
	}
if(isset($_POST['bulk_active_submit1'])){
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
if(isset($_POST['bulk_inactive_submit1'])){
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


/*public function add_categoires(){
echo $this->Admin_Model->add_categoires($_POST);
}
public function view_gallery_categories(){
$data['template']='view_gallery_categories';
		$data['page']='Gallery Categires';
		if($_GET['caitegiresid']){
	   $data['particulardata']=$this->Admin_Model->get_particular_gallery_categoires($_GET['caitegiresid']);	
		}
		$data['title']='View Gallery Categires';
		$this->layout_admin($data);
}
public function update_gallery_categoires(){
echo $this->Admin_Model->update_gallery_categoires($_POST);
}

public function updatestatus_gallery_categoires_inactive($id){
   $this->Admin_Model->updatestatus_gallery_categoires_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-gallery-categories');
 }
 public function updatestatus_gallery_categoires_active($id){
   $this->Admin_Model->updatestatus_gallery_categoires_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-gallery-categories');
 }
public function updatestatus_gallery_categoires_delete($id){
 $this->Admin_Model->updatestatus_gallery_categoires_delete($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('view-gallery-categories');
}

public function admin_gallery(){
		$data['template']='gallery';
		$data['page']='Gallery';
		$data['title']='Gallery';
		$this->layout_admin($data);
	}
public function add_admin_gallery(){
     $string=explode('.',$_FILES["gallery_images"]["name"]);
       $img =  $string[0].'_'. rand(0, 10000) . '.' . end(explode(".", $_FILES["gallery_images"]["name"]));
		move_uploaded_file($_FILES["gallery_images"]["tmp_name"], "adminassets/upload/gallery/" . $img);
echo $this->Admin_Model->add_admin_gallery($_POST,$img);
}
public function view_admin_gallery(){
         $data['template']='view_gallery';
		 $data['page']='Gallery';
		if($_GET['galleryid']){
	   $data['particulardata']=$this->Admin_Model->get_particular_gallery_gallery($_GET['galleryid']);	
		}
		$data['title']='View Gallery';
		$this->layout_admin($data);
}

public function update_admin_gallery(){
    if(!empty($_FILES["gallery_images"]["name"])){
     $string=explode('.',$_FILES["gallery_images"]["name"]);
       $img =  $string[0].'_'. rand(0, 10000) . '.' . end(explode(".", $_FILES["gallery_images"]["name"]));
		move_uploaded_file($_FILES["gallery_images"]["tmp_name"], "adminassets/upload/gallery/" . $img); }else{
		$img=$this->input->post('defaultimage');
		}
echo $this->Admin_Model->update_admin_gallery($_POST,$img);
}


public function updatestatus_gallery_inactive($id){
   $this->Admin_Model->updatestatus_gallery_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-admin-gallery');
 }
 public function updatestatus_gallery_active($id){
   $this->Admin_Model->updatestatus_gallery_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-admin-gallery');
 }
public function updatestatus_gallery_delete($id){
$query=$this->db->query("select gallery_images from gallery where gid='$id'")->result();
  unlink(base_url().'/adminassets/upload/gallery/'.$query[0]->gallery_images);
 $this->Admin_Model->updatestatus_gallery_delete($id);
 
   $this->session->set_userdata('deletearticals',1);
   redirect('view-admin-gallery');
}
public function admin_packages(){
		$data['template']='packages';
		$data['page']='Packages';
		$data['title']='Packages';
		$this->layout_admin($data);
	}
public function add_admin_packages(){
 $string=explode('.',$_FILES["package_image"]["name"]);
       $img =  $string[0].'_'. rand(0, 10000) . '.' . end(explode(".", $_FILES["package_image"]["name"]));
		move_uploaded_file($_FILES["package_image"]["tmp_name"], "adminassets/upload/packages/" . $img);
echo $this->Admin_Model->add_admin_packages($_POST,$img);
}
public function view_admin_packages(){
         $data['template']='view_packages';
		 $data['page']='Gallery';
		if($_GET['packageid']){
	   $data['particulardata']=$this->Admin_Model->get_particular_package($_GET['packageid']);	
	   echo $this->db->last_query();
	   		}
		$data['title']='View Gallery';
		$this->layout_admin($data);
}
public function update_packages(){
 if(!empty($_FILES["package_image"]["name"])){
      $string=explode('.',$_FILES["package_image"]["name"]);
       $img =  $string[0].'_'. rand(0, 10000) . '.' . end(explode(".", $_FILES["package_image"]["name"]));
		move_uploaded_file($_FILES["package_image"]["tmp_name"], "adminassets/upload/packages/" . $img); }else{
		$img=$this->input->post('defaultimage');
		}
     echo $this->Admin_Model->update_packages($_POST,$img);
}

public function updatestatus_package_inactive($id){
   $this->Admin_Model->updatestatus_package_inactive($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-admin-packages');
 }
 public function updatestatus_package_active($id){
   $this->Admin_Model->updatestatus_package_active($id);
    $this->session->set_userdata('updatequery',1);
   redirect('view-admin-packages');
 }
public function updatestatus_package_delete($id){
$query=$this->db->query("select package_image from package where pid='$id'")->result();
  unlink(base_url().'/adminassets/upload/packages/'.$query[0]->package_image);
 $this->Admin_Model->updatestatus_package_delete($id);
 
   $this->session->set_userdata('deletearticals',1);
   redirect('view-admin-packages');
}*/
}