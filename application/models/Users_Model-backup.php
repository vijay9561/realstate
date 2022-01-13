 <?php  class Users_Model extends CI_Model {
 public function __construct() {
  ini_set('max_execution_time', 300);
  date_default_timezone_set('Asia/Kolkata');
     $this->load->helper('date');
   }
  public function usersregistration($data){
					$date=date('Y-m-d H:i:s');
					$insert=array('name'=>$data['name'],
					'eamil'=>$data['eamil'],
					'password'=>$data['password'],
					'mobile_no'=>$data['mobile_no'],
					'status'=>'active',
					'date'=>$date);
					$query = $this->db->get_where('users', array('eamil' =>$data['eamil']));
					if ($query->num_rows() > 0) {
					return 0;
					} else {
					$this->db->insert('users',$insert);
					$this->session->set_userdata('registrationsucess',1);
					return 1;
       }
    }
 public function usersupdateprofile($data){
					$update=array('name'=>$data['name'],
					'eamil'=>$data['eamil'],
					'mobile_no'=>$data['mobile_no']);
					$id=$this->session->userdata('UID');
					$this->db->where('uid',$id);
					$query=$this->db->update('users',$update);
					//echo $this->db->last_query();
					//exit;
					if ($query==true) {
					$this->session->set_userdata('registrationsucess',1);
					return 1;
					
					} else {
					return 2;
       }
    }
	
public function change_password($oldpassword,$newpassword){
$teamid=$this->session->userdata('UID');
$data=array('password'=>$newpassword);
 $mysql=$this->db->query("select *from users where uid='$teamid'")->result();
 if($mysql[0]->password==$oldpassword){
        $this->db->where('uid',$teamid);
	    $this->db->update('users',$data);
		$this->session->set_userdata('documentadded','Your Password Change Successfully..');
		return 1; }else{  return 0;}
 
}
public function users_login($data) {
        $query = $this->db->get_where('users', array('eamil' => $data['eamil'], 'password like binary' =>$data['password'],'status'=>'active'));
		   $emails=$data['eamil'];
		   $password=$data['password'];
            $mysql=$this->db->query("select *from users where eamil='$emails' and password='$password'")->result();
        if (count($mysql) == 1) {
		      $session_data['NAME']=$mysql[0]->name;
			  $session_data['UID']=$mysql[0]->uid;
			  $session_data['EMAIL']=$mysql[0]->eamil;
			  $session_data['MOBILE']=$mysql[0]->mobile_no;
			  $session_data['logged_in'] = TRUE;
		      $this->session->set_userdata($session_data);
            return 1;
        } else {
            return 2;
        }
      }
public function post_your_property($data,$img,$img1,$img2,$img3,$img4,$img5){
$date=date('Y-m-d H:i:s');
$formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
		 $formattedAddr = str_replace(' ','+',$data['city']);
        $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 
        $output = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
         $data1['latitude']  = $output->results[0]->geometry->location->lat; 
       $data1['longitude'] = $output->results[0]->geometry->location->lng;
   $insert=array('property_title'=>$data['property_title'],
					'category_id'=>$data['category_id'],
					'property_price'=>$data['property_price'],
					'rooms'=>$data['rooms'],
					'area'=>$data['area'],
					'property_builder'=>$data['property_builder'],
					'property_residentaily'=>$data['property_residentaily'],
					'property_furnish'=>$data['property_furnish'],
					'property_owner_name'=>$data['property_owner_name'],
					'owner_contact_no'=>$data['owner_contact_no'],
					'city'=>$data['city'],
					'address_details'=>$data['address_details'],
					'property_description'=>$data['property_description'],
					'photo'=>$img,
					'img1'=>$img1,
					'img2'=>$img2,
					'img3'=>$img3,
					'img4'=>$img4,
					'img5'=>$img5,
					'status'=>'inactive',
					'latitutde'=>$data1['latitude'],
					'longitutde'=>$data1['longitude'],
					'date'=>$date);
			if($this->db->insert('property_post',$insert)){
			 $this->session->set_userdata('registrationsucess',1);
			 return 1;
			
			} else{ return 2;}
}
public  function get_your_update_profile(){
return $this->db->query("select *from property_post p inner join property_category c on c.pcid=p.category_id")->result();
}
function getMovies(){
  $this->db->select("*");
  $this->db->from('property_post');
  $query = $this->db->get();
  return $query->result();
 }
public function get_category_wise_property($id){

$this->db->select("*");
  $this->db->from('property_post');
  $this->db->where('category_id',$id);
  $query = $this->db->get();
  return $query->result();
}
public function get_property_category_details(){
 return $this->db->query("select property_name,date,status,pcid from property_category order by pcid asc")->result();
}
 function totalMovies(){
  return $this->db->count_all_results('property_post');
 }
 public function get_single_property_details($id){
   return $this->db->query("select *from property_post where pid='$id'")->result();
   }
  public function search_all_location($city){
  return $this->db->query("select *from property_post where address_details LIKE '%$city%' and status='active'")->result();
  }
  public function search_all_allbuy($city){
  return $this->db->query("select *from property_post where address_details LIKE '%$city%' and category_id='1' and status='active'")->result();
  }
 public function search_all_allrent($city){
  return $this->db->query("select *from property_post where address_details LIKE '%$city%' and category_id='2' and status='active'")->result();
 }
 public function search_all_allresale($city){
 return $this->db->query("select *from property_post where address_details LIKE '%$city%' and category_id='3' and status='active'")->result();
 }
 public function builder_property_login($data) {
         $msg='';
		 $msg1='';
		    $msg2='';
       //  $proertyid=$data['propertyid'];
	   $proertyid=$data['propertyid'];
        $query = $this->db->get_where('users', array('eamil' => $data['eamil'], 'password like binary' =>$data['password'],'status'=>'active'));
		
		   $emails=$data['eamil'];
		   $password=$data['password'];
            $mysql=$this->db->query("select *from users where eamil='$emails' and password='$password'")->result();
	$myquery=$this->db->query("select u.name,u.eamil,p.uid,p.pid,p.property_title,p.property_owner_name,p.owner_contact_no,p.address_details from users u inner join property_post p on p.uid=u.uid where p.pid='".$proertyid."'")->result();
		
						$msg.='<strong>Dear '.$mysql[0]->name.' <br>Thank you for showing your interest for the property '.$myquery[0]->property_title.'. your contact details have been sent to the advertiser. 
						They will contact you soon.</strong>';
						$msg.='<div  style="border: 1px solid black">
						<table style="width:800px;"><tr><th style="width:20%">Property Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						<tr><th colspan="2">Owner Contact Details,</th></tr>
						<tr><th style="width:20%">Name:</th><td>'.$myquery[0]->property_owner_name.'</td></tr>
						<tr><th style="width:20%">Contact Number:</th><td>'.$myquery[0]->owner_contact_no.'</td></tr>
						<tr><th style="width:20%">Property Location</th><td>'.$myquery[0]->address_details.'</td></tr>
						</table></div>';
						
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers .= 'From: SAIBROKING<info@saibroking.com>' . "\r\n";
						$mail_subject='Enquiry sent successfully. for property '.$myquery[0]->property_title;
						
						
						$msg1.='<strong>Dear '.$myquery[0]->name.' <br> '.$mysql[0]->name.' shown interest in your project '.$myquery[0]->property_title.'.</strong>';
						$msg1.='<div  style="border: 1px solid black">
						<table style="width:800px;"><tr><th style="width:20%">Property Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						<tr><th colspan="2">Buyer Contact Details,</th></tr>
						<tr><th style="width:20%">Name:</th><td>'.$mysql[0]->name.'</td></tr>
						<tr><th style="width:20%">Contact Number:</th><td>'.$mysql[0]->mobile_no.'</td></tr>
						<tr><th style="width:20%">Email</th><td>'.$mysql[0]->eamil.'</td></tr>
						</table></div>';
						$headers1 = "MIME-Version: 1.0" . "\r\n";
						$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers1 .= 'From: SAIBROKING<info@saibroking.com>' . "\r\n";
						$mail_subject1='Enquiry for property '.$myquery[0]->property_title;
						
						
						$msg2.='<strong>Dear Admin <br> '.$mysql[0]->name.' is interested in '.$myquery[0]->property_title.' of '.$myquery[0]->property_owner_name;
						$msg2.='<div  style="border: 1px solid black">
						<table style="width:800px;"><tr><th style="width:20%">Property Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						<tr><th colspan="2">User Contact Details and Owner Contact Details,</th></tr>
						<tr><th style="width:20%">User Name:</th><td>'.$mysql[0]->name.'</td></tr>
						<tr><th style="width:20%">User Contact Number:</th><td>'.$mysql[0]->eamil.'</td></tr>
						<tr><th style="width:20%">User Email</th><td>'.$mysql[0]->mobile_no.'</td></tr>
						<tr><th style="width:20%">Owner Name:</th><td>'.$myquery[0]->property_owner_name.'</td></tr>
						<tr><th style="width:20%">Owner Contact Number:</th><td>'.$myquery[0]->owner_contact_no.'</td></tr>
						<tr><th style="width:20%">Owner Property Location</th><td>'.$myquery[0]->address_details.'</td></tr>
						</table></div>';
						
						$headers2 = "MIME-Version: 1.0" . "\r\n";
						$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers2 .= 'From: SAIBROKING<info@saibroking.com>' . "\r\n";
						$mail_subject2='Enquiry for property '.$myquery[0]->property_title;
						$adminmail='info@saibroking.com';
						
		            $mail_sent2 = mail($adminmail,$mail_subject2,$msg2,$headers2);
                    $mail_sent1 = mail($myquery[0]->eamil,$mail_subject1,$msg1,$headers1);
			        $mail_sent = mail($emails,$mail_subject,$msg,$headers);
		   
        if (count($mysql) == 1) {
		
		      $session_data['NAME']=$mysql[0]->name;
			  $session_data['UID']=$mysql[0]->uid;
			  $session_data['EMAIL']=$mysql[0]->eamil;
			  $session_data['MOBILE']=$mysql[0]->mobile_no;
			  $session_data['logged_in'] = TRUE;
		      $this->session->set_userdata($session_data);
		      $this->session->set_userdata('TEMPSESSION','MYSESSION');
            return 1;
        } else {
            return 2;
        }
      }
public function login_with_session($data){
          $msg='';
		  $msg1='';
		    $msg2='';
			$id=$this->session->userdata('UID');
         $proertyid=$data['tempararyproductid'];
       $mysql=$this->db->query("select *from users where uid='$id'")->result();
	$myquery=$this->db->query("select u.name,u.eamil,p.uid,p.pid,p.property_title,p.property_owner_name,p.owner_contact_no,p.address_details from users u inner join property_post p on p.uid=u.uid where p.pid='".$proertyid."'")->result();
	//echo $this->db->last_query();
	//exit;
		
						$msg.='<strong>Dear '.$mysql[0]->name.' <br>Thank you for showing your interest for the property '.$myquery[0]->property_title.'. your contact details have been sent to the advertiser. 
						They will contact you soon.</strong>';
						$msg.='<div  style="border: 1px solid black">
						<table style="width:800px;"><tr><th style="width:20%">Property Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						<tr><th colspan="2">Owner Contact Details,</th></tr>
						<tr><th style="width:20%">Name:</th><td>'.$myquery[0]->property_owner_name.'</td></tr>
						<tr><th style="width:20%">Contact Number:</th><td>'.$myquery[0]->owner_contact_no.'</td></tr>
						<tr><th style="width:20%">Property Location</th><td>'.$myquery[0]->address_details.'</td></tr>
						</table></div>';
						
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers .= 'From: saibroking<info@saibroking.com>' . "\r\n";
						$mail_subject='Enquiry sent successfully. for property '.$myquery[0]->property_title;
						
						
						$msg1.='<strong>Dear '.$myquery[0]->name.' <br> '.$mysql[0]->name.' shown interest in your project '.$myquery[0]->property_title.'.</strong>';
						$msg1.='<div  style="border: 1px solid black">
						<table style="width:800px;"><tr><th style="width:20%">Property Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						<tr><th colspan="2">Buyer Contact Details,</th></tr>
						<tr><th style="width:20%">Name:</th><td>'.$mysql[0]->name.'</td></tr>
						<tr><th style="width:20%">Contact Number:</th><td>'.$mysql[0]->mobile_no.'</td></tr>
						<tr><th style="width:20%">Email</th><td>'.$mysql[0]->eamil.'</td></tr>
						</table></div>';
						$headers1 = "MIME-Version: 1.0" . "\r\n";
						$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers1 .= 'From: saibroking<info@saibroking.com>' . "\r\n";
						$mail_subject1='Enquiry for property '.$myquery[0]->property_title;
						
						
						$msg2.='<strong>Dear Admin <br> '.$mysql[0]->name.' is interested in '.$myquery[0]->property_title.' of '.$myquery[0]->property_owner_name;
						$msg2.='<div  style="border: 1px solid black">
						<table style="width:800px;"><tr><th style="width:20%">Property Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						<tr><th colspan="2">User Contact Details and Owner Contact Details,</th></tr>
						<tr><th style="width:20%">User Name:</th><td>'.$mysql[0]->name.'</td></tr>
						<tr><th style="width:20%">User Contact Number:</th><td>'.$mysql[0]->eamil.'</td></tr>
						<tr><th style="width:20%">User Email</th><td>'.$mysql[0]->mobile_no.'</td></tr>
						<tr><th style="width:20%">Owner Name:</th><td>'.$myquery[0]->property_owner_name.'</td></tr>
						<tr><th style="width:20%">Owner Contact Number:</th><td>'.$myquery[0]->owner_contact_no.'</td></tr>
						<tr><th style="width:20%">Owner Property Location</th><td>'.$myquery[0]->address_details.'</td></tr>
						</table></div>';
						
						$headers2 = "MIME-Version: 1.0" . "\r\n";
						$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers2 .= 'From:saibroking<info@saibroking.com>' . "\r\n";
						$mail_subject2='Enquiry for property '.$myquery[0]->property_title;
						$adminmail='info@saibroking.com';
						
		            $mail_sent2 = mail($adminmail,$mail_subject2,$msg2,$headers2);
                    $mail_sent1 = mail($myquery[0]->eamil,$mail_subject1,$msg1,$headers1);
			        $mail_sent = mail($mysql[0]->eamil,$mail_subject,$msg,$headers);
		   
        if($mail_sent2=true) {
		      $this->session->set_userdata('TEMPSESSION','MYSESSION');
			  $this->session->set_userdata('sucessmessage',1);
            return 1;
        } else {
            return $mail_sent2;
        }
      }
	public function delete_our_owen_property($id){
/*	$query=$this->db->query("select *from property_images where pid='$id'")->result();
	foreach($query as $rows){
	unlink("assets/upload/property_image/".$rows->image_name);
	}*/
	//$update=array('status'=>'inactive');
  $this->db->where('pid',$id);
 $query=$this->db->delete('property_post');
   $this->db->where('pid',$id);
 $query=$this->db->delete('property_images');
}
public function get_temp_data_images(){
 $id=$this->session->userdata('UID'); 
return $this->db->query("select *from temp_image where uid='$id'")->result();
}
public function deletetemitems($id){
$query=$this->db->query("select *from temp_image where piid='$id'")->result();
unlink("assets/upload/property_image/".$query[0]->image_name);
    $this->db->where('piid',$id);
	 $this->db->delete('temp_image');
 }
 public function deletupdateimages($id){
$query=$this->db->query("select *from property_images where piid='$id'")->result();
unlink("assets/upload/property_image/".$query[0]->image_name);
      $this->db->where('piid',$id);
	 $delete=$this->db->delete('property_images');
	   if($delete==true){
	    $this->session->set_userdata('documentadded','Image Deleted Successfully..');
	 return 1;
	   }else{
	  return 2;
	   }
 }
 public function get_sub_categories($id){
 return $this->db->query("select *from subcategory where mid='$id' order by category_name asc")->result();
 }
  public function temp_sub_sub_category($id){
 return $this->db->query("select *from child_category where scid='$id' order by child_category_name asc")->result();
 }
 }