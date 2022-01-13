<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
 error_reporting(0);
 class Users_Controller extends MY_Controller {

 public function __construct() {
        parent::__construct();
		header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		//header('Cache-Control: post-check=0, pre-check=0',false);
		header('Pragma: no-cache');
		 date_default_timezone_set('Asia/Kolkata');
		//$this->load->library('image_lib');
		 //$this->load->helper('pdf_helper'); 
    }
	public function index(){
		$data['template']='index';
		$data['page']='Home';
		$data['title']='Free Classified Ads in Aurangabad';
		$this->layout_users($data);
	}
public function view_category(){
    	$data['template']='view_category';
		$data['page']='view category';
		$data['title']='view category';
		$this->layout_users($data);
}
	public function login(){
		$data['template']='login';
		$data['page']='Login';
		$data['title']='Login';
		$this->layout_users($data);
	}
public function login_property(){
        $data['template']='login-property';
		$data['page']='Login';
		$data['title']='Login';
		$this->layout_users($data);
}
  public function services(){
  		$data['template']='services';
		$data['page']='Features';
		$data['title']='Features';
		$this->layout_users($data);
  }
    public function sitemap(){
  		$data['template']='site_map';
		$data['page']='Site Map';
		$data['title']='Site Map';
		$this->layout_users($data);
  }
  public function gallery(){
  
        $data['template']='gallery';
		$data['page']='Gallery';
		$data['title']='Gallery';
		$this->layout_users($data);
}
 public function about(){
  
        $data['template']='about';
		$data['page']='About Us';
		$data['title']='About Us';
		$this->layout_users($data);
}
 public function registers(){
  
        $data['template']='register';
		$data['page']='Register';
		$data['title']='Register';
		$this->layout_users($data);
}
public function contact(){
  
        $data['template']='contact';
		$data['page']='Contact Us';
		$data['title']='Contact Us';
		$this->layout_users($data);
}
public function terms(){
  
        $data['template']='term';
		$data['page']='Terms';
		$data['title']='Terms';
		$this->layout_users($data);
}
public function policy(){
  
        $data['template']='policy';
		$data['page']='Privacy';
		$data['title']='Privacy';
		$this->layout_users($data);
}
public function change_password(){
  
        $data['template']='change-password';
		$data['page']='Change Password';
		$data['title']='Change Password';
		$this->layout_users($data);
}


public function change_password_process(){
     $olpassword=$this->input->post('oldPassword');
	 $newpassword=$this->input->post('newPassword');
	 echo $this->Users_Model->change_password( $olpassword,$newpassword);
}

 public function packages(){
  
        $data['template']='packages';
		$data['page']='Packages';
		$data['title']='Packages';
		$this->layout_users($data);
}
public function post_property(){
       $data['template']='post_property';
		$data['page']='Post Property';
		$data['title']='Post Property';
		$this->layout_users($data);
}

public function view_posted_property(){

 
      $data['template']='view-property';
		$data['page']='View Property';
		$data['title']='View Property';
	
		$this->layout_users($data);
  

 }
 public function view_property_categories_wise(){
      $query = $this->Users_Model->get_category_wise_property($_GET['category']);
      $data['template']='view-property-category';
		$data['page']='View Property  ';
		$data['title']='View Property';
		 $data['MOVIES'] =  $query;
		$this->layout_users($data);
 }
public function delete_temparary_images(){
   $id=$this->input->post('categoryname');
   $this->db->where('uid',$id);
   $gquer=$this->db->delete('temp_image');
   if($gquer==true){
   echo 1;
   }else{
   echo 2;
   }
}
public function delete_temparary_images_particular(){
   $id=$this->input->post('id');
   $this->db->where('piid',$id);
   $gquer=$this->db->delete('temp_image');
   if($gquer==true){
   echo 1;
   }else{
   echo 2;
   }
}
 public function view_single_property_details($id){	
		$data['template']='view_property_details';
		$data['page']='View Property';
		$data['viewdata']=$this->Users_Model->get_single_property_details($id);
		$data['title']='View Property Details';
		$this->layout_users($data);
		
		
 }
 public function profile(){
         $data['template']='view_property_details';
		$data['page']='View Property';
		$data['viewdata']=$this->Users_Model->get_single_property_details($id);
		$data['title']='View Property Details';
		$this->layout_users($data);
 }
 public function otherpostform(){
         $data['template']='otherpostform';
		$data['page']='Other Property';
	//	$data['viewdata']=$this->Users_Model->get_single_property_details($id);
		$data['title']='Other Property';
		$this->layout_users($data);
 }
public function residential_property(){
      $data['template']='residential-property';
	  $data['page']='Rsidential Property'; 
	  $data['title']='Rsidential Property';
	  $this->layout_users($data);
}
public function property_post_requirement(){
      $data['template']='property-post-requirement';
	  $data['page']='Post Your Requirement'; 
	  $data['title']='Property Post Requirement';
	  $this->layout_users($data);
}
public function users_posted_prorperty(){
      $data['template']='view-property-users';
	  $data['page']='Your Posted Ad List';
	  $data['viewdata']=$this->Users_Model->get_single_property_details($id); 
	  $data['title']='Your Posted Property List';
	  $this->layout_users($data);
}
public function update_your_property($id){
     $data['template']='update_property';
	  $data['page']='Your Posted Property Update'; 
	//  $data['viewdata']=$this->Users_Model->get_your_update_profile($id); 
	  $data['title']='Your Posted Property Update';
	  $this->layout_users($data);
}
public function get_google_map_details(){
  $this->load->view('users/site/get_locality_map');
}
public function temp_file_upload_data(){
  $this->load->view('users/site/temp_file_upload_data');
}
public function get_temp_image_values(){
  $data['viedatmydata']=$this->Users_Model->get_temp_data_images();
  if($data['viedatmydata']){
   echo $this->load->view('users/site/get_temp_image_values', $data, true);
   }else{
   echo false;
   }
}
 public function deletetempitems() {
	 
        $id = $this->input->post('id');
        $this->Users_Model->deletetemitems($id);
        $data['viedatmydata']=$this->Users_Model->get_temp_data_images();
	    echo $this->load->view('users/site/get_temp_image_values',$data, true);
       
    }
public function mail_sends(){
        
		  $msg='';
		   $email=$this->input->post('email');
		  $phone=$this->input->post('phone');
		  $name=$this->input->post('name');
		  $message=$this->input->post('message');	
		  $msg.='<h3>Users Feedback</h3>';
		  $msg.='<table><tr><th style="width:20%">Users Name:</th><td>'.$name.'</td></tr>
		            <tr><th style="width:20%">Users Emaild Id</th><td>'.$email.'</td></tr>
					<tr><th style="width:20%">Users Phone</th><td>'.$phone.'</td></tr>
					<tr><th style="width:20%">Users Feedback</th><td>'.$message.'</td></tr>
					</table>';
		  $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From: Teleglobal<info@teleglobal.in>' . "\r\n";
		  $mail_to='vijay@globallianz.com';
		  $mail_subject='Teleglobal Communication Users Feedback';
		 $mail_sent = mail($mail_to,$mail_subject,$msg,$headers);
		 if($mail_sent==true){
		   $this->session->set_userdata('insertsucess',1);
		   echo 1;
		 }else{  echo 2; }
		      
} 


public function contactus_mails(){
        
		     $msg='';
		   $msg1='';
		   $email=trim($this->input->post('query_emails'));
		  $phone=$this->input->post('query_mobile_no');
		  $name=$this->input->post('query_name');
		  $message=$this->input->post('query_message');	
		  $msg.='<h3>SAIBROKING Users</h3>';
		  $msg.='<table><tr><th style="width:20%">Users Name:</th><td>'.$name.'</td></tr>
		            <tr><th style="width:20%">Users Emaild Id</th><td>'.$email.'</td></tr>
					<tr><th style="width:20%">Users Phone</th><td>'.$phone.'</td></tr>
					<tr><th style="width:20%">Users Feedback</th><td>'.$message.'</td></tr>
					</table>';
		  $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From: SAIBROKING<info@saibroking.com>' . "\r\n";
		  
		  $headers1 = "MIME-Version: 1.0" . "\r\n";
          $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers1 .= 'From:SAIBROKING<info@saibroking.com>' . "\r\n";
		  $msg1='<p><strong>Dear &nbsp;'.$name.'<br>
		  Your message received successfully we will contact you soon...!</strong></p>';
		  $mail_to='info@saibroking.com';
		  $mail_subject1="Feedback sent for Saibroking";
		  $mail_subject='Saibroking Contact Us Users';
		 $mail_sent = mail($mail_to,$mail_subject,$msg,$headers);
		  $mail_sent1 = mail($email,$mail_subject1,$msg1,$headers1);
		 if($mail_sent==true && $mail_sent1==true){
		   $this->session->set_userdata('documentadded','Your Messages Send Successfully..');
		   echo 1;
		 }else{  echo 2; }
		      
} 
public function usersregistration(){
  echo $this->Users_Model->usersregistration($_POST);
 }
 public function usersupdateprofile(){
  echo $this->Users_Model->usersupdateprofile($_POST);
 }
public function users_login(){
echo $this->Users_Model->users_login($_POST);
}
public function builder_property_login(){
echo $this->Users_Model->builder_property_login($_POST);
}
public function login_with_session(){
echo $this->Users_Model->login_with_session($_POST);
}


function logoutusers() {
        $this->session->sess_destroy();
       redirect(base_url());
    }
/*public function property_temparary_images_upload(){
$this->load->library('image_lib');
   $uid=$this->session->userdata('UID');
 //print_r($_FILES);
//	echo count($_FILES['photo']['name']);
//	exit;	
$query12=$this->db->query("select *from temp_image where uid='$uid'")->result();
$usercount=count($query12);
$filecount=count($_FILES['photo']['name']);
$totalcount=$usercount+$filecount;
if($totalcount<=8){
    $images_arr = array();
    foreach($_FILES['photo']['name'] as $key=>$val){
        $target_dir = "assets/upload/property_image/";
        $target_file = $target_dir.$_FILES['photo']['name'][$key];
       move_uploaded_file($_FILES['photo']['tmp_name'][$key],$target_file);
			$images_arr[] = $target_file;
			$config['image_library'] = 'gd2';
	     $config['source_image'] ='./assets/upload/property_image/'.$val;
			$config['wm_text'] = 'www.saibroking.com';
			$config['wm_type'] = 'text';
			$config['wm_font_path'] = './system/fonts/texb.ttf';
			$config['wm_font_size'] = '25';
			$config['wm_font_color'] = '#00ffffff';
			$config['wm_vrt_alignment'] = 'bottom';
			$config['wm_hor_alignment'] = 'center';
			$config['wm_padding'] = '20';
			$config['wm_vrt_offset'] = '70';
			$this->image_lib->initialize($config);
           $this->image_lib->watermark();
		
			if (!$this->image_lib->watermark())
			{
		    $this->image_lib->display_errors();
			}
		 $this->image_lib->clear();
	   $array=array('image_name'=>$val,'uid'=>$uid);
	   $query =$this->db->insert('temp_image',$array);
        }
	   echo  1;
	   exit; 
	  } else{
	 echo 2;
	 exit;
	  }
}*/

/*public function property_temparary_images_upload(){
$this->load->library('image_lib');
   $uid=$this->session->userdata('UID');
 //print_r($_FILES);
//	echo count($_FILES['photo']['name']);
//	exit;	
$query12=$this->db->query("select *from temp_image where uid='$uid'")->result();
$usercount=count($query12);
$filecount=count($_FILES['photo']['name']);
$totalcount=$usercount+$filecount;
/*if($totalcount<=8){
    $images_arr = array();
    foreach($_FILES['photo']['name'] as $key=>$val){
        $target_dir = "assets/upload/property_image/";
        $target_file = $target_dir.$_FILES['photo']['name'][$key];
       move_uploaded_file($_FILES['photo']['tmp_name'][$key],$target_file);
			$images_arr[] = $target_file;
			$config['image_library'] = 'gd2';
	     $config['source_image'] ='./assets/upload/property_image/'.$val;
			$config['wm_text'] = 'www.saibroking.com';
			$config['wm_type'] = 'text';
			$config['wm_font_path'] = './system/fonts/texb.ttf';
			$config['wm_font_size'] = '25';
			$config['wm_font_color'] = '#00ffffff';
			$config['wm_vrt_alignment'] = 'bottom';
			$config['wm_hor_alignment'] = 'center';
			$config['wm_padding'] = '20';
			$config['wm_vrt_offset'] = '70';
			$this->image_lib->initialize($config);
           $this->image_lib->watermark();
		
			if (!$this->image_lib->watermark())
			{
		    $this->image_lib->display_errors();
			}
		 $this->image_lib->clear();
	   $array=array('image_name'=>$val,'uid'=>$uid);
	   $query =$this->db->insert('temp_image',$array);
        }
		if($query){
	   echo  1;
	   exit; 
	  } else{
	 echo 2;
	 exit;
	  }
}*/
public function property_temparary_images_upload(){
$this->load->library('image_lib');
   $uid=$this->session->userdata('UID');
 //print_r($_FILES);
//	echo count($_FILES['photo']['name']);
//	exit;	
$query12=$this->db->query("select *from temp_image where uid='$uid'")->result();
$usercount=count($query12);
$filecount=count($_FILES['photo']['name']);
$totalcount=$usercount+$filecount;
/*if($totalcount<=8){*/
    $images_arr = array();
    foreach($_FILES['photo']['name'] as $key=>$val){
        $target_dir = "assets/upload/property_image/";
        $target_file = $target_dir.$_FILES['photo']['name'][$key];
			$keyfile ='property_images'. rand(0, 10000) . '.' . end(explode(".", $_FILES["photo"]["name"][$key]));
          move_uploaded_file($_FILES['photo']['tmp_name'][$key],$target_file);
			$images_arr[] = $target_file;
			$config['image_library'] = 'gd2';
	     $config['source_image'] ='./assets/upload/property_image/'.$val;
			$config['wm_text'] = 'www.saibroking.com';
			$config['wm_type'] = 'text';
			$config['wm_font_path'] = './system/fonts/texb.ttf';
			$config['wm_font_size'] = '25';
			$config['wm_font_color'] = '#00ffffff';
			$config['wm_vrt_alignment'] = 'bottom';
			$config['wm_hor_alignment'] = 'center';
			$config['wm_padding'] = '20';
			$config['wm_vrt_offset'] = '70';
			$this->image_lib->initialize($config);
           $this->image_lib->watermark();
		
			if (!$this->image_lib->watermark())
			{
		    $this->image_lib->display_errors();
			}
		 $this->image_lib->clear();
	   $array=array('image_name'=>$val,'uid'=>$uid);
	   $query =$this->db->insert('temp_image',$array);
        }
		if($query){
	   echo  1;
	   exit; 
	  } else{
	 echo 2;
	 exit;
	  }
}


public function post_your_property(){
		/*$string=explode('.',$_FILES["photo"]["name"]);
        $img =  $string[0].'_'. rand(0, 10000) . '.' . end(explode(".", $_FILES["photo"]["name"]));
		move_uploaded_file($_FILES["photo"]["tmp_name"], "assets/upload/property_image/" . $img);*/
		$userid1=$this->session->userdata('UID');
		 $gettempdat=$this->db->query("select *from temp_image where uid='".$userid1."'")->result();
				if(count($gettempdat)<=8){
		$date=date('Y-m-d H:i:s');
$formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
		 $formattedAddr = str_replace(' ','+',$data['city']);
        $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 
        $output = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
		
         $data1['latitude']  = $output->results[0]->geometry->location->lat; 
       $data1['longitude'] = $output->results[0]->geometry->location->lng;
	   $amenities = implode(',',$this->input->post('amenities'));
	   $checkbox=$this->input->post('negotiable',TRUE)==NULL ? 0 : 1;
	    $brokeragenegociable=$this->input->post('brokerage_negociable',TRUE)==NULL ? 0 : 1;
		 $despositnegociable=$this->input->post('deposite_negociable',TRUE)==NULL ? 0 : 1;
   $insert=array('property_title'=>$this->input->post('property_title'),'category_id'=>$this->input->post('category_id'),'property_price'=>$this->input->post('property_price'),'rooms'=>$this->input->post('rooms'),'area'=>$this->input->post('area'),'property_builder'=>$this->input->post('property_builder'),
					'property_residentaily'=>$this->input->post('property_residentaily'),
					'property_furnish'=>$this->input->post('property_furnish'),
					'property_owner_name'=>$this->input->post('property_owner_name'),
					'owner_contact_no'=>$this->input->post('owner_contact_no'),
					'city'=>$this->input->post('city'),'address_details'=>$this->input->post('address_details'),
					'property_description'=>$this->input->post('property_description'),'status'=>'inactive',
					'latitutde'=>$data1['latitude'],
					'longitutde'=>$data1['longitude'],
					'amenities'=>$amenities,
					'residential_category'=>$this->input->post('residential_category'),
					'price_negociable'=>$checkbox,
					'brokerage_negociable'=>$brokeragenegociable,
					'deposite_negociable'=>$despositnegociable,
					'main_categories_id'=>1,
					'deposite_price'=>$this->input->post('deposite_price'),
					'brokerage_price'=>$this->input->post('brokerage_price'),
					'uid'=>$this->session->userdata('UID'),
					'near_bus_stand'=>$this->input->post('insert_bustand_location'),
					'near_railway_station'=>$this->input->post('insert_railway_station'),
					'property_unique_id'=>'SBA'.mt_rand(100000, 999999).'P',
					'date'=>$date);
			$this->db->insert('property_post',$insert);
			$propertyid=$this->db->insert_id();
		$userid=$this->session->userdata('UID');
		$gettempdat=$this->db->query("select *from temp_image where uid='".$userid."'")->result();
					 $images_arr = array();
    foreach($gettempdat as $rows){
	     
	  $array=array('image_name'=>$rows->image_name,'pid'=>$propertyid);
	  $this->db->insert('property_images',$array);
        }
			 $this->session->set_userdata('registrationsucess',1);
			 echo  1;
			//echo count($_FILES["photo"]["name"]);
		//exit;
           $this->db->where('uid',$userid);
		   $this->db->delete('temp_image');
			} else{ echo  2;}
		
}
public function otherproperty_category(){
		/*$string=explode('.',$_FILES["photo"]["name"]);
        $img =  $string[0].'_'. rand(0, 10000) . '.' . end(explode(".", $_FILES["photo"]["name"]));
		move_uploaded_file($_FILES["photo"]["tmp_name"], "assets/upload/property_image/" . $img);*/
		$uniqueid='';
		$userid1=$this->session->userdata('UID');
		 $gettempdat=$this->db->query("select *from temp_image where uid='".$userid1."'")->result();
				if(count($gettempdat)<=8){
		$date=date('Y-m-d H:i:s');
$formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
		 $formattedAddr = str_replace(' ','+',$data['city']);
        $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 
        $output = json_decode($geocodeFromAddr);
		$addtitle='';
        //Get latitude and longitute from json data
		if($this->input->post('mainhiddencategory')==3){
		  $uniqueid='SBA'.mt_rand(100000, 999999).'H';
		}elseif($this->input->post('mainhiddencategory')==4){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'RS';
		}elseif($this->input->post('mainhiddencategory')==5){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'C';
		}elseif($this->input->post('mainhiddencategory')==6){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'CR';
		}elseif($this->input->post('mainhiddencategory')==7){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'B';
		}elseif($this->input->post('mainhiddencategory')==8){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'OE';
		}elseif($this->input->post('mainhiddencategory')==9){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'OF';
		}elseif($this->input->post('mainhiddencategory')==10){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'TL';
		}elseif($this->input->post('mainhiddencategory')==11){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'J';
		} elseif($this->input->post('mainhiddencategory')==12){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'WL';
		} elseif($this->input->post('mainhiddencategory')==13){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'WS';
		} elseif($this->input->post('mainhiddencategory')==14){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'HL';
		} 
		 elseif($this->input->post('mainhiddencategory')==16){
		 $uniqueid='SBA'.mt_rand(100000, 999999).'MB';
		} 
		if($this->input->post('property_title')){
		$addtitle=$this->input->post('property_title');
		}else{
		$addtitle=$this->input->post('school_name');
		}
		
         $data1['latitude']  = $output->results[0]->geometry->location->lat; 
       $data1['longitude'] = $output->results[0]->geometry->location->lng;
	   $amenities = implode(',',$this->input->post('amenities'));
	   $single_room_type = implode(',',$this->input->post('single_room_type'));
	   $checkbox=$this->input->post('negotiable',TRUE)==NULL ? 0 : 1;
        $insert=array('property_title'=>$addtitle,
					'property_owner_name'=>$this->input->post('property_owner_name'),
					'owner_contact_no'=>$this->input->post('owner_contact_no'),
					'city'=>$this->input->post('city'),
					'address_details'=>$this->input->post('address_details'),
					'property_description'=>$this->input->post('property_description'),
					'status'=>'inactive',
					'amenities'=>$amenities,
					'category_id'=>$this->input->post('property_subcategory'),
					'price_negociable'=>$checkbox,
					'property_price'=>$this->input->post('property_price'),
					'main_categories_id'=>$this->input->post('mainhiddencategory'),
					'uid'=>$this->session->userdata('UID'),
					'property_unique_id'=>$uniqueid,
					'car_name'=>$this->input->post('car_name'),
					'furniture_condtion'=>$this->input->post('allmostlike'),
				    'hall_facility'=>$this->input->post('hall_facility'),
					'hall_type'=>$this->input->post('hall_decorate'),
					'area'=>$this->input->post('area'),
					'water_storage'=>$this->input->post('water_storage_capcity'),
					'hanuman_temple'=>$this->input->post('human_temple_distance'),
					'parking_square_foot'=>$this->input->post('parking_squate_foot'),
					'parking_capcity'=>$this->input->post('parking_bike_capcity'),
					'model'=>$this->input->post('car_mdoel_name'),
					'car_driven_kilometer'=>$this->input->post('killometerdriven'),
					'parking_type_one'=>$this->input->post('parkingtypedd'),
					'year'=>$this->input->post('car_year'),
					'fuel'=>$this->input->post('car_fuel'),
					'single_room_type'=>$single_room_type,
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
					'dealer_type'=>$this->input->post('delartype'),
					'date'=>$date);
			$this->db->insert('property_post',$insert);
			$propertyid=$this->db->insert_id();
		$userid=$this->session->userdata('UID');
		$gettempdat=$this->db->query("select *from temp_image where uid='".$userid."'")->result();
					 $images_arr = array();
    foreach($gettempdat as $rows){
	     
	  $array=array('image_name'=>$rows->image_name,'pid'=>$propertyid);
	  $this->db->insert('property_images',$array);
        }
			 $this->session->set_userdata('registrationsucess',1);
			 echo  1;
			//echo count($_FILES["photo"]["name"]);
		//exit;
           $this->db->where('uid',$userid);
		   $this->db->delete('temp_image');
			} else{ echo  2;}
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
					'status'=>'inactive',
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
			$target_file ='property_images'. rand(0, 10000) . '.' . end(explode(".",$_FILES["myinsertedimages$i"]["name"]));
		move_uploaded_file($_FILES["myinsertedimages$i"]["tmp_name"], "assets/upload/property_image/" .$target_file);
			$config['image_library'] = 'gd2';
	     $config['source_image'] ='./assets/upload/property_image/'.$target_file;
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
		$target_file12 ='property_images'. rand(0, 10000) . '.' . end(explode(".",$_FILES["insertimages$i12"]["name"]));
	 	move_uploaded_file($_FILES["insertimages$i12"]["tmp_name"], "assets/upload/property_image/" .$target_file12);
		 $insertnewentry=array('image_name'=>$_FILES["insertimages$i12"]["name"],'pid'=>$id);
		 $this->db->insert('property_images',$insertnewentry);
		 
		 	$config['image_library'] = 'gd2';
	     $config['source_image'] ='./assets/upload/property_image/'.$target_file12;
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
 $updateinactive=array('status'=>'inactive');
 $this->db->where('pid',$propertyid);
 $this->db->update('property_post',$updateinactive);
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
  $propertyid=$this->input->post('hiddenid'); 
 $updateinactive=array('status'=>'inactive');
 $this->db->where('pid',$propertyid);
 $this->db->update('property_post',$updateinactive);
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
	   'status'=>'inactive',
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
public function view_search_property(){
    //$query = $this->Users_Model->get_category_wise_property($_GET['category']);
       $data['template']='search_property';
		$data['page']='View Search Property';
		$data['title']='View Search Property';
		$this->layout_users($data);
}
public function users_profile(){
     $data['template']='profile';
	 $data['page']='Profile';
	 $data['title']='Profile';
	 $this->layout_users($data);
}
public function faq(){
     $data['template']='faq';
	 $data['page']='Frquently Asked Questions';
	 $data['title']='Frquently Asked Questions';
	 $this->layout_users($data);
}

public function update_property_images(){
    $data['template']='update-property-images';
	 $data['page']='Update Your Ad Images';
	 $data['title']='Update Property Images';
	 $this->layout_users($data);
}
public function search_user_view_requirement(){
       $data['template']='search_requirement';
	  $data['page']='Search Requirement';
	  $data['title']='View Requirement';
	 $this->layout_users($data);
}
public function view_all_type_categories(){
       $data['template']='view-all-category-wise';
	  $data['page']='View All Catgories';
	  $data['title']='View All Catgories';
	 $this->layout_users($data);
}
public function view_other_details($id){
       $data['template']='view_property_other_details';
	  $data['page']='View Other Details';
	  $data['title']='View Other Details';
	  $data['viewdata']=$this->Users_Model->get_single_property_details($id);
	 $this->layout_users($data);
}

public function users_forgot_password(){
  
     $forgotpasswordemails=$this->input->post('forgotpasswordemails');
	 $getdata=$this->db->query("select eamil,password from users where eamil='$forgotpasswordemails'")->result();
//	 echo $this->db->last_query();
$msg='';
	 if($getdata[0]->eamil==$forgotpasswordemails){
	     $msg.='<h3>Your Forgot Password</h3>';
		  $msg.='<table><tr><th style="width:20%">Your Email Id:</th><td>'.$forgotpasswordemails.'</td></tr>
		            <tr><th style="width:20%">Your Password</th><td>'.$getdata[0]->password.'</td></tr>
					</table>';
		  $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From: SAIBROKING<info@saibroking.com>' . "\r\n";
		  $mail_subject='Forgot Password for saibroking account';
           $mail_sent1 = mail($forgotpasswordemails,$mail_subject,$msg,$headers);
		    echo 1;
		   $this->session->set_userdata('forgotemails','Mail has been sent successfully on your email address');
		   exit;
		   
	  }else {
	    echo 2;
		exit;
	  }
   }
   
   public function property_post_requirement1(){
        
		   $msg1='';
		   $firstname=$this->input->post('firstname');
		  $lastname=$this->input->post('lastname');
		  $eamil=$this->input->post('eamil');
		  $mobile_no=$this->input->post('mobile_no');	
		    $yourpropesinal=$this->input->post('yourpropesinal');	
				 $address=$this->input->post('address');
			/* $slaeby=$this->input->post('slaeby');*/
			  $description=$this->input->post('description');
			    $category_name=$this->input->post('category_name');
				 $sub_category_id=$this->input->post('sub_category_id');
				$categoryname=$this->db->query("select *from main_category where mid='".$category_name."'")->result();
			 $property_title=$this->input->post('property_title');
			 $budget=$this->input->post('budget');
			 $date=date('Y-m-d H:i:s');
	$insert=array('firstname'=>$firstname,'lastname'=>$lastname,'eamil'=>$eamil,'mobile_no'=>$mobile_no,'yourpropesinal'=>$yourpropesinal,'address'=>$address,'description'=>$description,'property_title'=>$property_title,'category_name'=>$category_name,'status'=>'active','budget'=>$budget,'slaeby'=>$sub_category_id,'date'=>$date,'property_unique_id'=>'SBR'.mt_rand(100000, 999999).'P');
			
		  $msg.='<h3>Property Post Requirement</h3>';
		  $msg.='<table><tr><th style="width:20%">Users First Name:</th><td>'.$firstname.'</td></tr>
		               <tr><th style="width:20%">Users Last Name:</th><td>'.$lastname.'</td></tr>
					     <tr><th style="width:20%">Users Email ID:</th><td>'.$eamil.'</td></tr>
		            <tr><th style="width:20%">Users Emaild Id</th><td>'.$mobile_no.'</td></tr>
					<tr><th style="width:20%">Users Professional</th><td>'.$yourpropesinal.'</td></tr>
					<tr><th style="width:20%">Users Address Details</th><td>'.$address.'</td></tr>
						<tr><th style="width:20%">Users Property Budget</th><td>'.$budget.'</td></tr>
					<tr><th style="width:20%">Users Property Description</th><td>'.$description.'</td></tr>
					<tr><th style="width:20%">Property Category</th><td>'.$categoryname[0]->category_name.'</td></tr>
					tr><th style="width:20%">Property Sub Category</th><td>'.$sub_category_id.'</td></tr>
					</table>';
		  $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From:SAIBROKING<info@saibroking.com>' . "\r\n";
		  
		  $headers1 = "MIME-Version: 1.0" . "\r\n";
          $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers1 .= 'From:SAIBROKING<info@saibroking.com>' . "\r\n";
		  $msg1='<p><strong>Dear &nbsp;'.$firstname.'<br> thank you your requirement posted successfully.. we will give feedback as soon as possible</strong></p>';
		  $mail_to='info@saibroking.com';
		  $mail_subject1="Property posted successfully - saibroking";
		  $mail_subject='Users Property Post Requirement';
		 $mail_sent = mail($mail_to,$mail_subject,$msg,$headers);
		  $mail_sent1 = mail($eamil,$mail_subject1,$msg1,$headers1);
		  $this->db->insert('post_requirement',$insert);
		 if($mail_sent==true && $mail_sent1==true){
		   $this->session->set_userdata('documentadded','Your Property Post Requirement Send Successfully..');
		   echo 1;
		 }else{  echo 2; }
} 
public function autosearch_recors(){
$searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $this->db->query("SELECT * FROM locality_master WHERE city_name LIKE '".$searchTerm."%' ORDER BY city_name ASC")->result();
    $array = array();
    foreach ($query as $row) {
        $array[] = array (
       
            'value' => $row->city_name,
        );
    }
    
    //return json data
    echo json_encode($array);
}
public function autosearch_recors_property(){
$searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $this->db->query("SELECT * FROM property_category WHERE property_name LIKE '".$searchTerm."%' ORDER BY property_name ASC")->result();
    $array = array();
    foreach ($query as $row) {
        $array[] = array (
       
            'value' => $row->property_name,
			'id' => $row->pcid,
        );
    }
    
    //return json data
    echo json_encode($array);
}

public function delete_our_owen_property($id){
$this->Users_Model->delete_our_owen_property($id);
   $this->session->set_userdata('deletearticals',1);
   redirect('users-posted-prorperty');
}

 public function deleteupdatimages() {
	 
        $id = $this->input->post('id');
      echo $this->Users_Model->deletupdateimages($id);
       
    }
	
 public function property_post_requirement_users(){
        
		   $msg1='';
		   $msg='';
		   $firstname=$this->input->post('query_name');
		   $eamil=$this->input->post('query_emails');
		   $mobile_no=$this->input->post('query_mobile_no');	
		   $query_message=$this->input->post('query_message');	
		   
			$unquie_id=$this->input->post('unquie_id');
			 $salyeuser=$this->input->post('salyeuser');
			  $categoryuser=$this->input->post('categoryuser');
			  $categoryname=$this->db->query("select *from main_category where mid='".$categoryuser."'")->result();
			  $ownernames=$this->input->post('ownernames');
			  
		    $msg.='<h3>Property users Insersted</h3>';
		  //$msg.='<strong>Dear Admin <br> '. $firstname.' is interested in '.$unquie_id .;
		  $msg.='<strong>Dear Admin <br> '.$firstname.' is interested in '.$unquie_id.' of '.$ownernames;
		  $msg.='<table>
		            <tr><th style="width:40%">Users First Name:</th><td>'.$firstname.'</td></tr>
		            <tr><th style="width:50%">Users Email ID:</th><td>'.$eamil.'</td></tr>
		            <tr><th style="width:60%">Users Mobile</th><td>'.$mobile_no.'</td></tr>
					<tr><th style="width:50%">Users Details</th><td>'.$query_message.'</td></tr>
					<tr><th style="width:40%">Property Category</th><td>'. $categoryname[0]->category_name.'</td></tr>
					<tr><th style="width:40%">Users Property For</th><td>'.$salyeuser.'</td></tr>
					</table>';
		  $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From:SAIBROKING<info@saibroking.com>' . "\r\n";
		  
		 /* $headers1 = "MIME-Version: 1.0" . "\r\n";
          $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers1 .= 'From:SAIBROKING<info@saibroking.com>' . "\r\n";
		  $msg1='<p><strong>Dear &nbsp;'.$firstname.'<br> thank you  for showing interest  for the property <b style="color:red;">'.$unquie_id.'</b> we will get back to you shortly.</strong></p>';*/
		  $mail_to='info@saibroking.com';
		 // $mail_subject1="Property - saibroking";
		  $mail_subject='Users Property View Contact';
		 $mail_sent = mail($mail_to,$mail_subject,$msg,$headers);
	/*	  $mail_sent1 = mail($eamil,$mail_subject1,$msg1,$headers1);*/
		 if($mail_sent==true){
		   $this->session->set_userdata('UNIQUEID',$unquie_id);
		   $this->session->set_userdata('documentadded','Your Contact Send Successfully..');
		   echo 1;
		 }else{  echo 2; }
} 

public function get_tem_sub_category(){
 $inputpost=$this->input->post('category');
  $data['viedatmydata']=$this->Users_Model->get_sub_categories($inputpost);
  if($data['viedatmydata']){
   echo $this->load->view('users/site/get_temp_sub_cateogry', $data, true);
   }else{
   echo '
   <label>Select Sub Category<b style="color:#FF0000">*</b></label>
   <select id="sub_category_id" name="sub_category_id" onchange="sub_category_idr()" class="form-control">
    <option value="">Select Sub Category</option>
   </select>
   <span style="color:red" id="sub_category_idr"></span>
   ';
   }
}

public function get_tem_sub_category12(){
 $inputpost=$this->input->post('category');
  $data['viedatmydata']=$this->Users_Model->get_sub_categories($inputpost);
  if($data['viedatmydata']){
   echo $this->load->view('users/site/get_temp_sub_search', $data, true);
   }else{
   echo '
   <select name="allsearchsubcatories123"  id="allsearchsubcatories123" onchange="allsearchsubcatoriesr()" style="margin-bottom: 10px;"  class="form-control customewidth">
    <option value="">Select Sub Category</option>
   </select>
   <span style="color:red" id="allsearchsubcatoriesr"></span>
   ';
   }
}
public function other_update_property($id){
     $data['template']='other-property-update';
	  $data['page']='Update Your Ad'; 
	//  $data['viewdata']=$this->Users_Model->get_your_update_profile($id); 
	  $data['title']='Update Your Ad';
	  $this->layout_users($data);
}

public function search_result(){
     $data['template']='search_result';
	  $data['page']='Search Result'; 
	//  $data['viewdata']=$this->Users_Model->get_your_update_profile($id); 
	  $data['title']='Search Result';
	  $this->layout_users($data);
}


public function get_sub_sub_category(){
 $inputpost=$this->input->post('category');
  $data['viedatmydata']=$this->Users_Model->get_sub_categories($inputpost);
  if($data['viedatmydata']){
   echo $this->load->view('users/site/get_temp_sub_category', $data, true);
   }else{
   echo '
   <select name="get_sub_sub_category"  id="get_sub_sub_category"  class="form-control" required>
    <option value="">Select Sub Category</option>
   </select>
   <span style="color:red" id="allsearchsubcatoriesr"></span>
   ';
   }
}
public function temp_sub_sub_category(){
 $inputpost=$this->input->post('property_subcategory');
  $data['viedatmydata']=$this->Users_Model->temp_sub_sub_category($inputpost);
  if($data['viedatmydata']){
   echo $this->load->view('users/site/temp_sub_sub_category', $data, true);
   }else{
   echo '<label>Brand Name<b style="color:#FF0000"> *</b></label>
   <select name="car_namer"  id="car_name" class="form-control" required>
    <option value="">Select Brand Name</option>
   </select>
   <span style="color:red" id="car_namer"></span>
   ';
   }
}
public function temp_bran_name(){
$inputpost=$this->input->post('property_subcategory');
if($inputpost==330){
   echo $this->load->view('users/site/temp_bran_name');
  }else{
   echo $this->load->view('users/site/temp_sale_brand_name');
  }
}

public function bike_bran_names(){
$inputpost=$this->input->post('property_subcategory');
if($inputpost==95){
   echo $this->load->view('users/site/temp_bike_name');
  }else{
   echo $this->load->view('users/site/temp_cycle_name');
  }
}
}
