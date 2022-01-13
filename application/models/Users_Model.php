  <?php   class Users_Model extends CI_Model {
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
				$msg='<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Saibroking</title>
    <style>
  
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }  body {
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }


      .body {
    width: 100%;
}

      
      .container {
        display: block;
        Margin: 0 auto !important;
        max-width: 580px;
        padding: 10px;
        width: 580px; }

     
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
		border: 1px solid #581b56;
		border-radius: 14px; }

    
      .main {
        background: #fff;
        border-radius: 3px;
        width: 100%; }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; }

       .footer {
        clear: both;
        padding-top: 10px;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color:#1d1c1c;
          font-size: 12px;
          text-align: center; }



     
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }

      a {
        color: #3498db;
        text-decoration: underline; }

   
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          }



   
      .last {
        margin-bottom: 0; }

      .first {
        margin-top: 0; }

      .align-center {
        text-align: center; }

      .align-right {
        text-align: right; }

      .align-left {
        text-align: left; }

      .clear {
        clear: both; }

      .mt0 {
        margin-top: 0; }

      .mb0 {
        margin-bottom: 0; }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }

      .powered-by a {
        text-decoration: none; }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }

 
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}

   
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; } 
       }
		  th{text-align: left;}

    </style>
  </head>
  <body class="">
    <table border="0"  cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <table class="main">

            
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p>Dear '.$data['name'].',</p>
						
                        <p>thank you for registration on saibroking.</p>
						<hr style="border-bottom: 1px solid #581b56;">
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                   
                                   </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              </table>
       
            <div class="footer">
              <table border="0" cellpadding="0" cellspacing="0">
			
                <tr>
				 <td class="content-block">
				 <span class="content-block">
				 <a href=""><img src="http://saibroking.com/assets/images/sai-broking-logo-2.png" style="height:75px;"></a></span>
				 </td>
				  <td> <span class="content-block">
				<strong>Sai Broking , Aurangabad</strong><br>
				Mobile No: +91 8805 723 555<br>
				Whats App: +91 8805 723 555<br>
				<a href="http://www.saibroking.com">www.saibroking.com</a>
				 </span></td>
                  <td class="content-block">
                    <span class="apple-link"><br><br>
					<a href="https://www.facebook.com/Sai-Broking-238756333209100" target="_blank"><img src="http://www.wiu.edu/cas/images/facebook_circle_color-512.png" style="height:30px; width:30px;"></a>
					<a  target="_blank" href="https://twitter.com/saibroking"><img src="http://yolna.com/wp-content/uploads/2015/12/twitter-circle-logo.png" style="height:30px;width:30px;"></a>&nbsp;
					<a href="https://plus.google.com/107777935296318575709" target="_blank"><img src="http://icons.iconarchive.com/icons/martz90/circle/512/google-plus-icon.png" style="height:26px; width:26px;"></a>&nbsp;&nbsp;
					<a href="https://www.youtube.com/channel/UCEOUzRAAwiwgehy3SQoTOAQ" target="_blank"><img src="https://www.stuorg.iastate.edu/uploads/org-site/ckuploads/1419/Social%20Media%20Icons/youtube.png" style="width:27px; height:27px;"></a>
					</span>
                 
                  </td>
                </tr>
               
              </table>
            </div>
		</div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';
           $headers = "MIME-Version: 1.0" . "\r\n";
           $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
           $headers .= 'From: SAIBROKING<info@saibroking.com>' . "\r\n";
		   $mail_subject='Registration Successfully for saibroking';
		   $mail_sent = mail($data['eamil'],$mail_subject,$msg,$headers);
		  

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
		
						
						
						$msg.='<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Saibroking</title>
    <style>
  
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }  body {
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }


      .body {
    width: 100%;
}

      
      .container {
        display: block;
        Margin: 0 auto !important;

        max-width: 580px;
        padding: 10px;
        width: 580px; }

     
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
		border: 1px solid #581b56;
		border-radius: 14px; }

    
      .main {
        background: #fff;
        border-radius: 3px;
        width: 100%; }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; }
    .footer {
        clear: both;
        padding-top: 10px;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color:#1d1c1c;
          font-size: 12px;
          text-align: center; }


     
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }

      a {
        color: #3498db;
        text-decoration: underline; }

   
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          }


    
   
      .last {
        margin-bottom: 0; }

      .first {
        margin-top: 0; }

      .align-center {
        text-align: center; }

      .align-right {
        text-align: right; }

      .align-left {
        text-align: left; }

      .clear {
        clear: both; }

      .mt0 {
        margin-top: 0; }

      .mb0 {
        margin-bottom: 0; }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }

      .powered-by a {
        text-decoration: none; }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }

 
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}

   
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; } 
         }
		  th{text-align: left;}

    </style>
  </head>
  <body class="">
    <table border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <table class="main">

            
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                         <p><strong>Dear '.$mysql[0]->name.', <br></strong>Thank you for showing your interest for the Ad '.$myquery[0]->property_title.'. your contact details have been sent to the advertiser. 
						They will contact you soon.</p>
						
                        
						<hr style="border-bottom: 1px solid #581b56;">
						<p><strong>Owner Contact Details,</strong></p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
						 <tbody>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                     <th>Ad Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_title.'</td>
                                    </tr>
									 <tr>
                                     <th>Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_owner_name.'</td>
                                    </tr>
									<tr>
                                     <th>Contact Number:&nbsp;&nbsp;</th><td>'.$myquery[0]->owner_contact_no.'</td>
                                    </tr>
									<tr>
                                     <th>Ad Location:&nbsp;&nbsp;</th><td>'.$myquery[0]->address_details.'</td>
                                    </tr>
                                 </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              </table> <div class="footer">
              <table border="0" cellpadding="0" cellspacing="0">
			
                <tr>
				 <td class="content-block">
				 <span class="content-block" style="padding-left:10PX; ">
				 <a href=""><img src="http://saibroking.com/assets/images/sai-broking-logo-2.png" style="height:75px;"></a></span>
				 </td>
				  <td> <span class="content-block">
				<strong>Sai Broking, Aurangabad</strong><br>
				Mobile No: +91 8805 723 555<br>
				Whats App: +91 8805 723 555<br>
				<a href="http://www.saibroking.com">www.saibroking.com</a>
				 </span></td>
                  <td class="content-block">
                    <span class="apple-link"><br>
					<a href="https://www.facebook.com/Sai-Broking-238756333209100" target="_blank"><img src="http://www.wiu.edu/cas/images/facebook_circle_color-512.png" style="height:30px; width:30px;"></a>
					<a  target="_blank" href="https://twitter.com/saibroking"><img src="http://yolna.com/wp-content/uploads/2015/12/twitter-circle-logo.png" style="height:30px;width:30px;"></a>&nbsp;
					<a href="https://plus.google.com/107777935296318575709" target="_blank"><img src="http://icons.iconarchive.com/icons/martz90/circle/512/google-plus-icon.png" style="height:26px; width:26px;"></a>&nbsp;&nbsp;
					<a href="https://www.youtube.com/channel/UCEOUzRAAwiwgehy3SQoTOAQ" target="_blank"><img src="https://www.stuorg.iastate.edu/uploads/org-site/ckuploads/1419/Social%20Media%20Icons/youtube.png" style="width:27px; height:27px;"></a>
					</span>
                 
                  </td>
                </tr>
               
              </table>
            </div></div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
';
						
						
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers .= 'From: SAIBROKING<info@saibroking.com>' . "\r\n";
						$mail_subject='Enquiry sent successfully. for Ad '.$myquery[0]->property_title;
						
						
						//$msg1.='<strong>Dear '.$myquery[0]->name.' <br> '.$mysql[0]->name.' shown interest in your project '.$myquery[0]->property_title.'.</strong>';
						//$msg1.='<div  style="border: 1px solid black">
						//<table style="width:800px;"><tr><th style="width:20%">Ad Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						//<tr><th colspan="2">Buyer Contact Details,</th></tr>
						//<tr><th style="width:20%">Name:</th><td>'.$mysql[0]->name.'</td></tr>
						//<tr><th style="width:20%">Contact Number:</th><td>'.$mysql[0]->mobile_no.'</td></tr>
						//<tr><th style="width:20%">Email</th><td>'.$mysql[0]->eamil.'</td></tr>
						//</table></div>';
						
					$msg1.='<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Saibroking</title>
    <style>
  
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }  body {
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }


      .body {
    width: 100%;
}

      
      .container {
        display: block;
        Margin: 0 auto !important;
        max-width: 580px;
        padding: 10px;
        width: 580px; }

     
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
		border: 1px solid #581b56;
		border-radius: 14px; }

    
      .main {
        background: #fff;
        border-radius: 3px;
        width: 100%; }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; }

         .footer {
        clear: both;
        padding-top: 10px;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color:#1d1c1c;
          font-size: 12px;
          text-align: center; }

     
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }

      a {
        color: #3498db;
        text-decoration: underline; }

   
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          }


      

   
      .last {
        margin-bottom: 0; }

      .first {
        margin-top: 0; }

      .align-center {
        text-align: center; }

      .align-right {
        text-align: right; }

      .align-left {
        text-align: left; }

      .clear {
        clear: both; }

      .mt0 {
        margin-top: 0; }

      .mb0 {
        margin-bottom: 0; }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }

      .powered-by a {
        text-decoration: none; }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }

 
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; } 
        }
		  th{text-align: left;}

    </style>
  </head>
  <body class="">
    <table border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <table class="main">

            
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p><strong>Dear '.$myquery[0]->name.', <br></strong> '.$mysql[0]->name.' shown interest in your Ad '.$myquery[0]->property_title.'.</p>
						
                 
						<hr style="border-bottom: 1px solid #581b56;">
						<p><strong>Buyer Contact Details,</strong></p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                     <th>Ad Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_title.'</td>
                                    </tr>
									 <tr>
                                     <th>Name:&nbsp;&nbsp;</th><td>'.$mysql[0]->name.'</td>
                                    </tr>
									<tr>
                                     <th>Contact Number:&nbsp;&nbsp;</th><td>'.$mysql[0]->mobile_no.'</td>
                                    </tr>
									<tr>
                                     <th>Email:&nbsp;&nbsp;</th><td>'.$mysql[0]->eamil.'</td>
                                    </tr>
                                   </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              </table> <div class="footer">
              <table border="0" cellpadding="0" cellspacing="0">
			
                <tr>
				 <td class="content-block">
				 <span class="content-block" style="padding-left:10PX; ">
				 <a href=""><img src="http://saibroking.com/assets/images/sai-broking-logo-2.png" style="height:75px;"></a></span>
				 </td>
				  <td> <span class="content-block">
				<strong>Sai Broking, Aurangabad</strong><br>
				Mobile No: +91 8805 723 555<br>
				Whats App: +91 8805 723 555<br>
				<a href="http://www.saibroking.com">www.saibroking.com</a>
				 </span></td>
                  <td class="content-block">
                    <span class="apple-link"><br>
					<a href="https://www.facebook.com/Sai-Broking-238756333209100" target="_blank"><img src="http://www.wiu.edu/cas/images/facebook_circle_color-512.png" style="height:30px; width:30px;"></a>
					<a  target="_blank" href="https://twitter.com/saibroking"><img src="http://yolna.com/wp-content/uploads/2015/12/twitter-circle-logo.png" style="height:30px;width:30px;"></a>&nbsp;
					<a href="https://plus.google.com/107777935296318575709" target="_blank"><img src="http://icons.iconarchive.com/icons/martz90/circle/512/google-plus-icon.png" style="height:26px; width:26px;"></a>&nbsp;&nbsp;
					<a href="https://www.youtube.com/channel/UCEOUzRAAwiwgehy3SQoTOAQ" target="_blank"><img src="https://www.stuorg.iastate.edu/uploads/org-site/ckuploads/1419/Social%20Media%20Icons/youtube.png" style="width:27px; height:27px;"></a>
					</span>
                 
                  </td>
                </tr>
               
              </table>
            </div></div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';	
						$headers1 = "MIME-Version: 1.0" . "\r\n";
						$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers1 .= 'From: SAIBROKING<info@saibroking.com>' . "\r\n";
						$mail_subject1='Enquiry for Ad '.$myquery[0]->property_title;
						
						
						//$msg2.='<strong>Dear Admin <br> '.$mysql[0]->name.' is interested in '.$myquery[0]->property_title.' of '.$myquery[0]->property_owner_name;
						//$msg2.='<div  style="border: 1px solid black">
						//<table style="width:800px;"><tr><th style="width:20%">Ad Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						//<tr><th colspan="2">User Contact Details and Owner Contact Details,</th></tr>
						//<tr><th style="width:20%">User Name:</th><td>'.$mysql[0]->name.'</td></tr>
						//<tr><th style="width:20%">User Contact Number:</th><td>'.$mysql[0]->eamil.'</td></tr>
						//<tr><th style="width:20%">User Email</th><td>'.$mysql[0]->mobile_no.'</td></tr>
						//<tr><th style="width:20%">Owner Name:</th><td>'.$myquery[0]->property_owner_name.'</td></tr>
						//<tr><th style="width:20%">Owner Contact Number:</th><td>'.$myquery[0]->owner_contact_no.'</td></tr>
						//<tr><th style="width:20%">Owner Ad Location</th><td>'.$myquery[0]->address_details.'</td></tr>
						//</table></div>';
						
						$msg2.='<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Saibroking</title>
    <style>
  
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }  body {
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }


      .body {
    width: 100%;
}

      
      .container {
        display: block;
        Margin: 0 auto !important;
        max-width: 580px;
        padding: 10px;
        width: 580px; }

     
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
		border: 1px solid #581b56;
		border-radius: 14px; }

    
      .main {
        background: #fff;
        border-radius: 3px;
        width: 100%; }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; }
    .footer {
        clear: both;
        padding-top: 10px;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color:#1d1c1c;
          font-size: 12px;
          text-align: center; }

     
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }

      a {
        color: #3498db;
        text-decoration: underline; }

   
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          }


      

   
      .last {
        margin-bottom: 0; }

      .first {
        margin-top: 0; }

      .align-center {
        text-align: center; }

      .align-right {
        text-align: right; }

      .align-left {
        text-align: left; }

      .clear {
        clear: both; }

      .mt0 {
        margin-top: 0; }

      .mb0 {
        margin-bottom: 0; }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }

      .powered-by a {
        text-decoration: none; }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }

 
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}

   
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; } 
       }
		  th{text-align: left;}

    </style>
  </head>
  <body class="">
    <table border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <table class="main">

            
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p><strong>Dear Admin <br> '.$mysql[0]->name.' ,<br></strong> is interested in '.$myquery[0]->property_title.' of '.$myquery[0]->property_owner_name.'</p>
						<hr style="border-bottom: 1px solid #581b56;">
						<p><strong>User Contact Details and Owner Contact Details,</strong></p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">						
                          <tbody>
                            <tr>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                     <th>Ad Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_title.'</td>
                                    </tr>
							
									<tr>
                                     <th>User Name:&nbsp;&nbsp;</th><td>'.$mysql[0]->name.'</td>
                                    </tr>
									<tr>
                                     <th>User Contact Number::&nbsp;&nbsp;</th><td>'.$mysql[0]->mobile_no.'</td>
                                    </tr>
									<tr>
                                     <th>User Email:&nbsp;&nbsp;</th><td>'.$mysql[0]->eamil.'</td>
                                    </tr>
									<tr>
                                     <th>Owner Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_owner_name.'</td>
                                    </tr>
									<tr>
                                     <th>Owner Contact Number:&nbsp;&nbsp;</th><td>'.$myquery[0]->owner_contact_no.'</td>
                                    </tr>
									<tr>
                                     <th>Owner Ad Location:&nbsp;&nbsp;</th><td>'.$myquery[0]->address_details.'</td>
                                    </tr>
                                  </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              </table> <div class="footer">
              <table border="0" cellpadding="0" cellspacing="0">
			
                <tr>
				 <td class="content-block">
				 <span class="content-block" style="padding-left:10PX; ">
				 <a href=""><img src="http://saibroking.com/assets/images/sai-broking-logo-2.png" style="height:75px;"></a></span>
				 </td>
				  <td> <span class="content-block">
				<strong>Sai Broking, Aurangabad</strong><br>
				Mobile No: +91 8805 723 555<br>
				Whats App: +91 8805 723 555<br>
				<a href="http://www.saibroking.com">www.saibroking.com</a>
				 </span></td>
                  <td class="content-block">
                    <span class="apple-link"><br>
					<a href="https://www.facebook.com/Sai-Broking-238756333209100" target="_blank"><img src="http://www.wiu.edu/cas/images/facebook_circle_color-512.png" style="height:30px; width:30px;"></a>
					<a  target="_blank" href="https://twitter.com/saibroking"><img src="http://yolna.com/wp-content/uploads/2015/12/twitter-circle-logo.png" style="height:30px;width:30px;"></a>&nbsp;
					<a href="https://plus.google.com/107777935296318575709" target="_blank"><img src="http://icons.iconarchive.com/icons/martz90/circle/512/google-plus-icon.png" style="height:26px; width:26px;"></a>&nbsp;&nbsp;
					<a href="https://www.youtube.com/channel/UCEOUzRAAwiwgehy3SQoTOAQ" target="_blank"><img src="https://www.stuorg.iastate.edu/uploads/org-site/ckuploads/1419/Social%20Media%20Icons/youtube.png" style="width:27px; height:27px;"></a>
					</span>
                 
                  </td>
                </tr>
               
              </table>
            </div></div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';
						
						$headers2 = "MIME-Version: 1.0" . "\r\n";
						$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers2 .= 'From: SAIBROKING<info@saibroking.com>' . "\r\n";
						$mail_subject2='Enquiry for Ad '.$myquery[0]->property_title;
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
		
						//$msg.='<strong>Dear '.$mysql[0]->name.' <br>Thank you for showing your interest for the property '.$myquery[0]->property_title.'. your contact details have been sent to the advertiser. 
						//They will contact you soon.</strong>';
						//$msg.='<div  style="border: 1px solid black">
						//<table style="width:800px;"><tr><th style="width:20%">Ad Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						//<tr><th colspan="2">Owner Contact Details,</th></tr>
						//<tr><th style="width:20%">Name:</th><td>'.$myquery[0]->property_owner_name.'</td></tr>
						//<tr><th style="width:20%">Contact Number:</th><td>'.$myquery[0]->owner_contact_no.'</td></tr>
						//<tr><th style="width:20%">Ad Location</th><td>'.$myquery[0]->address_details.'</td></tr>
						//</table></div>';
						
						$msg.='<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Saibroking</title>
    <style>
  
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }  body {
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }


      .body {
    width: 100%;
}

      
      .container {
        display: block;
        Margin: 0 auto !important;

        max-width: 580px;
        padding: 10px;
        width: 580px; }

     
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
		border: 1px solid #581b56;
		border-radius: 14px; }

    
      .main {
        background: #fff;
        border-radius: 3px;
        width: 100%; }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; }
    .footer {
        clear: both;
        padding-top: 10px;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color:#1d1c1c;
          font-size: 12px;
          text-align: center; }


     
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }

      a {
        color: #3498db;
        text-decoration: underline; }

   
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          }


     

   
      .last {
        margin-bottom: 0; }

      .first {
        margin-top: 0; }

      .align-center {
        text-align: center; }

      .align-right {
        text-align: right; }

      .align-left {
        text-align: left; }

      .clear {
        clear: both; }

      .mt0 {
        margin-top: 0; }

      .mb0 {
        margin-bottom: 0; }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }

      .powered-by a {
        text-decoration: none; }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }

 
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}

   
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; } 
     }
		  th{text-align: left;}

    </style>
  </head>
  <body class="">
    <table border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <table class="main">

            
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p><strong>Dear '.$mysql[0]->name.' ,</strong><br>Thank you for showing your interest for the property '.$myquery[0]->property_title.'. your contact details have been sent to the advertiser. 
						They will contact you soon.</p>
						
                        
						<hr style="border-bottom: 1px solid #581b56;">
						<p><strong>Owner Contact Details,</strong></p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
						 <tbody>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                     <th>Ad Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_title.'</td>
                                    </tr>
									 <tr>
                                     <th>Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_owner_name.'</td>
                                    </tr>
									<tr>
                                     <th>Contact Number:&nbsp;&nbsp;</th><td>'.$myquery[0]->owner_contact_no.'</td>
                                    </tr>
									<tr>
                                     <th>Ad Location:&nbsp;&nbsp;</th><td>'.$myquery[0]->address_details.'</td>
                                    </tr>
                                    </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              </table> <div class="footer">
              <table border="0" cellpadding="0" cellspacing="0">
			
                <tr>
				 <td class="content-block">
				 <span class="content-block" style="padding-left:10PX; ">
				 <a href=""><img src="http://saibroking.com/assets/images/sai-broking-logo-2.png" style="height:75px;"></a></span>
				 </td>
				  <td> <span class="content-block">
				<strong>Sai Broking, Aurangabad</strong><br>
				Mobile No: +91 8805 723 555<br>
				Whats App: +91 8805 723 555<br>
				<a href="http://www.saibroking.com">www.saibroking.com</a>
				 </span></td>
                  <td class="content-block">
                    <span class="apple-link"><br>
					<a href="https://www.facebook.com/Sai-Broking-238756333209100" target="_blank"><img src="http://www.wiu.edu/cas/images/facebook_circle_color-512.png" style="height:30px; width:30px;"></a>
					<a  target="_blank" href="https://twitter.com/saibroking"><img src="http://yolna.com/wp-content/uploads/2015/12/twitter-circle-logo.png" style="height:30px;width:30px;"></a>&nbsp;
					<a href="https://plus.google.com/107777935296318575709" target="_blank"><img src="http://icons.iconarchive.com/icons/martz90/circle/512/google-plus-icon.png" style="height:26px; width:26px;"></a>&nbsp;&nbsp;
					<a href="https://www.youtube.com/channel/UCEOUzRAAwiwgehy3SQoTOAQ" target="_blank"><img src="https://www.stuorg.iastate.edu/uploads/org-site/ckuploads/1419/Social%20Media%20Icons/youtube.png" style="width:27px; height:27px;"></a>
					</span>
                 
                  </td>
                </tr>
               
              </table>
            </div></div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
';
						
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers .= 'From: saibroking<info@saibroking.com>' . "\r\n";
						$mail_subject='Enquiry sent successfully. for Ad '.$myquery[0]->property_title;
						
						
						//$msg1.='<strong>Dear '.$myquery[0]->name.' <br> '.$mysql[0]->name.' shown interest in your project '.$myquery[0]->property_title.'.</strong>';
						//$msg1.='<div  style="border: 1px solid black">
						///<table style="width:800px;"><tr><th style="width:20%">Ad Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						//<tr><th colspan="2">Buyer Contact Details,</th></tr>
						//<tr><th style="width:20%">Name:</th><td>'.$mysql[0]->name.'</td></tr>
						//<tr><th style="width:20%">Contact Number:</th><td>'.$mysql[0]->mobile_no.'</td></tr>
						//<tr><th style="width:20%">Email</th><td>'.$mysql[0]->eamil.'</td></tr>
						//</table></div>';
											$msg1.='<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Saibroking</title>
    <style>
  
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }  body {
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }


      .body {
    width: 100%;
}

      
      .container {
        display: block;
        Margin: 0 auto !important;
        max-width: 580px;
        padding: 10px;
        width: 580px; }

     
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
		border: 1px solid #581b56;
		border-radius: 14px; }

    
      .main {
        background: #fff;
        border-radius: 3px;
        width: 100%; }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; }

       .footer {
        clear: both;
        padding-top: 10px;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color:#1d1c1c;
          font-size: 12px;
          text-align: center; }


     
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }

      a {
        color: #3498db;
        text-decoration: underline; }

   
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          }


     

   
      .last {
        margin-bottom: 0; }

      .first {
        margin-top: 0; }

      .align-center {
        text-align: center; }

      .align-right {
        text-align: right; }

      .align-left {
        text-align: left; }

      .clear {
        clear: both; }

      .mt0 {
        margin-top: 0; }

      .mb0 {
        margin-bottom: 0; }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }

      .powered-by a {
        text-decoration: none; }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }

 
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; } 
         }
		  th{text-align: left;}

    </style>
  </head>
  <body class="">
    <table border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <table class="main">

            
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p><strong>Dear '.$myquery[0]->name.' , <br></strong> '.$mysql[0]->name.' shown interest in your project '.$myquery[0]->property_title.'.</p>
						
                 
						<hr style="border-bottom: 1px solid #581b56;">
						<p><strong>Buyer Contact Details,</strong></p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                     <th>Ad Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_title.'</td>
                                    </tr>
									 <tr>
                                     <th>Name:&nbsp;&nbsp;</th><td>'.$mysql[0]->name.'</td>
                                    </tr>
									<tr>
                                     <th>Contact Number:&nbsp;&nbsp;</th><td>'.$mysql[0]->mobile_no.'</td>
                                    </tr>
									<tr>
                                     <th>Email:&nbsp;&nbsp;</th><td>'.$mysql[0]->eamil.'</td>
                                    </tr>
                                   </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table> <div class="footer">
              <table border="0" cellpadding="0" cellspacing="0">
			
                <tr>
				 <td class="content-block">
				 <span class="content-block" style="padding-left:10PX; ">
				 <a href=""><img src="http://saibroking.com/assets/images/sai-broking-logo-2.png" style="height:75px;"></a></span>
				 </td>
				  <td> <span class="content-block">
				<strong>Sai Broking, Aurangabad</strong><br>
				Mobile No: +91 8805 723 555<br>
				Whats App: +91 8805 723 555<br>
				<a href="http://www.saibroking.com">www.saibroking.com</a>
				 </span></td>
                  <td class="content-block">
                    <span class="apple-link"><br>
					<a href="https://www.facebook.com/Sai-Broking-238756333209100" target="_blank"><img src="http://www.wiu.edu/cas/images/facebook_circle_color-512.png" style="height:30px; width:30px;"></a>
					<a  target="_blank" href="https://twitter.com/saibroking"><img src="http://yolna.com/wp-content/uploads/2015/12/twitter-circle-logo.png" style="height:30px;width:30px;"></a>&nbsp;
					<a href="https://plus.google.com/107777935296318575709" target="_blank"><img src="http://icons.iconarchive.com/icons/martz90/circle/512/google-plus-icon.png" style="height:26px; width:26px;"></a>&nbsp;&nbsp;
					<a href="https://www.youtube.com/channel/UCEOUzRAAwiwgehy3SQoTOAQ" target="_blank"><img src="https://www.stuorg.iastate.edu/uploads/org-site/ckuploads/1419/Social%20Media%20Icons/youtube.png" style="width:27px; height:27px;"></a>
					</span>
                 
                  </td>
                </tr>
               
              </table>
            </div></div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';	
						$headers1 = "MIME-Version: 1.0" . "\r\n";
						$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers1 .= 'From: saibroking<info@saibroking.com>' . "\r\n";
						$mail_subject1='Enquiry for Ad '.$myquery[0]->property_title;
						
						
						//$msg2.='<strong>Dear Admin <br> '.$mysql[0]->name.' is interested in '.$myquery[0]->property_title.' of '.$myquery[0]->property_owner_name;
						//$msg2.='<div  style="border: 1px solid black">
						//<table style="width:800px;"><tr><th style="width:20%">Ad Name:</th><td>'.$myquery[0]->property_title.'</td></tr>
						//<tr><th colspan="2">User Contact Details and Owner Contact Details,</th></tr>
						//<tr><th style="width:20%">User Name:</th><td>'.$mysql[0]->name.'</td></tr>
						//<tr><th style="width:20%">User Contact Number:</th><td>'.$mysql[0]->eamil.'</td></tr>
						//<tr><th style="width:20%">User Email</th><td>'.$mysql[0]->mobile_no.'</td></tr>
						//<tr><th style="width:20%">Owner Name:</th><td>'.$myquery[0]->property_owner_name.'</td></tr>
						//<tr><th style="width:20%">Owner Contact Number:</th><td>'.$myquery[0]->owner_contact_no.'</td></tr>
						//<tr><th style="width:20%">Owner Ad Location</th><td>'.$myquery[0]->address_details.'</td></tr>
						//</table></div>';
												$msg2.='<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Saibroking</title>
    <style>
  
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }  body {
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }


      .body {
    width: 100%;
}

      
      .container {
        display: block;
        Margin: 0 auto !important;
        max-width: 580px;
        padding: 10px;
        width: 580px; }

     
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
		border: 1px solid #581b56;
		border-radius: 14px; }

    
      .main {
        background: #fff;
        border-radius: 3px;
        width: 100%; }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; }

       .footer {
        clear: both;
        padding-top: 10px;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color:#1d1c1c;
          font-size: 12px;
          text-align: center; }


     
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }

      a {
        color: #3498db;
        text-decoration: underline; }

   
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          }


    
   
      .last {
        margin-bottom: 0; }

      .first {
        margin-top: 0; }

      .align-center {
        text-align: center; }

      .align-right {
        text-align: right; }

      .align-left {
        text-align: left; }

      .clear {
        clear: both; }

      .mt0 {
        margin-top: 0; }

      .mb0 {
        margin-bottom: 0; }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }

      .powered-by a {
        text-decoration: none; }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }

 
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}

   
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; } 
       }
		  th{text-align: left;}

    </style>
  </head>
  <body class="">
    <table border="0"  cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <table class="main">

            
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p><strong>Dear Admin <br> '.$mysql[0]->name.' ,</strong> is interested in '.$myquery[0]->property_title.' of '.$myquery[0]->property_owner_name.'</p>
						
         
						<hr style="border-bottom: 1px solid #581b56;">
						<p><strong>User Contact Details and Owner Contact Details,</strong></p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">						
                          <tbody>
                            <tr>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                     <th>Ad Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_title.'</td>
                                    </tr>
							
									<tr>
                                     <th>User Name:&nbsp;&nbsp;</th><td>'.$mysql[0]->name.'</td>
                                    </tr>
									<tr>
                                     <th>User Contact Number::&nbsp;&nbsp;</th><td>'.$mysql[0]->mobile_no.'</td>
                                    </tr>
									<tr>
                                     <th>User Email:&nbsp;&nbsp;</th><td>'.$mysql[0]->eamil.'</td>
                                    </tr>
									<tr>
                                     <th>Owner Name:&nbsp;&nbsp;</th><td>'.$myquery[0]->property_owner_name.'</td>
                                    </tr>
									<tr>
                                     <th>Owner Contact Number:&nbsp;&nbsp;</th><td>'.$myquery[0]->owner_contact_no.'</td>
                                    </tr>
									<tr>
                                     <th>Owner Ad Location:&nbsp;&nbsp;</th><td>'.$myquery[0]->address_details.'</td>
                                    </tr>
                                  </tbody>
                            
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              </table> <div class="footer">
              <table border="0" cellpadding="0" cellspacing="0">
			
                <tr>
				 <td class="content-block">
				 <span class="content-block" style="padding-left:10PX; ">
				 <a href=""><img src="http://saibroking.com/assets/images/sai-broking-logo-2.png" style="height:75px;"></a></span>
				 </td>
				  <td> <span class="content-block">
				<strong>Sai Broking, Aurangabad</strong><br>
				Mobile No: +91 8805 723 555<br>
				Whats App: +91 8805 723 555<br>
				<a href="http://www.saibroking.com">www.saibroking.com</a>
				 </span></td>
                  <td class="content-block">
                    <span class="apple-link"><br>
					<a href="https://www.facebook.com/Sai-Broking-238756333209100" target="_blank"><img src="http://www.wiu.edu/cas/images/facebook_circle_color-512.png" style="height:30px; width:30px;"></a>
					<a  target="_blank" href="https://twitter.com/saibroking"><img src="http://yolna.com/wp-content/uploads/2015/12/twitter-circle-logo.png" style="height:30px;width:30px;"></a>&nbsp;
					<a href="https://plus.google.com/107777935296318575709" target="_blank"><img src="http://icons.iconarchive.com/icons/martz90/circle/512/google-plus-icon.png" style="height:26px; width:26px;"></a>&nbsp;&nbsp;
					<a href="https://www.youtube.com/channel/UCEOUzRAAwiwgehy3SQoTOAQ" target="_blank"><img src="https://www.stuorg.iastate.edu/uploads/org-site/ckuploads/1419/Social%20Media%20Icons/youtube.png" style="width:27px; height:27px;"></a>
					</span>
                 
                  </td>
                </tr>
               
              </table>
            </div></div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';
						
						$headers2 = "MIME-Version: 1.0" . "\r\n";
						$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers2 .= 'From:saibroking<info@saibroking.com>' . "\r\n";
						$mail_subject2='Enquiry for Ad '.$myquery[0]->property_title;
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
 public function duplicateemails($emails){
     $query=$this->db->query("select *from users where eamil='$emails'")->result();
	 if(count($query)==0){
	 echo  1;
	 }else{
	  echo 2;
	 }
 }
 }