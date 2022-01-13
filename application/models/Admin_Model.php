 <?php 
 ob_start();
  class Admin_Model extends CI_Model {
  public function __construct() {
   date_default_timezone_set('Asia/Kolkata');
     $this->load->helper('date');
     }
	 public function admin_login($data) {
        $query = $this->db->get_where('admin', array('email' => $data['inputEmail'], 'password like binary' => $data['inputPassword']));

        if ($query->num_rows() == 1) {
		     $session_data['MAINADMIN']=$data['inputEmail'];
			  $session_data['logged_in'] = TRUE;
		    $this->session->set_userdata($session_data);
            return 1;
        } else {
            return 2;
        }
      }
	  
public function add_property_category($data){
$posting_time=date('Y-m-d H:i:s');
  $insert=array('property_name'=>$data['property_name'],'date'=>$posting_time,'status'=>'active');
  if($this->db->insert('property_category',$insert)){
  $this->session->set_userdata('insertsucess',1);
  return 1;
 }else{
 return 2;
}
}
public function add_sub_sub_category($data){
$insert=array('mid'=>$data['category_name'],'scid'=>$data['get_sub_sub_category'],'child_category_name'=>$data['sub_sub_category_name'],'status'=>'active');
if($this->db->insert('child_category',$insert)){
  $this->session->set_userdata('insertsucess',1);
  return 1;
 }else{
 return 2;
}
}
public function insert_main_category($data,$image){
$posting_time=date('Y-m-d H:i:s');
  $insert=array('category_name'=>$data['category_name'],'category_images'=>$image,'date'=>$posting_time,'status'=>'active');
  if($this->db->insert('main_category',$insert)){
  $this->session->set_userdata('insertsucess',1);
  return 1;
 }else{
 return 2;
}
}
public function update_main_property_category($data,$image){
$update=array('category_name'=>$data['category_name'],'category_images'=>$image);
$id=$data['mid'];
$this->db->where('mid',$id);
$query=$this->db->update('main_category',$update);
if($query){
   $this->session->set_userdata('updatearticals',1);
   return 1;
}else{ return 2;}
}
public function updatestatus_main_property_category_inactive($id){
  $data=array('status'=>'inactive');
  $this->db->where('mid',$id);
 $query=$this->db->update('main_category',$data);
}
public function updatestatus_main_property_category_active($id){
   $data=array('status'=>'active');
  $this->db->where('mid',$id);
 $query=$this->db->update('main_category',$data);
}
public function updatestatus_main_property_category_delete($id){
  $this->db->where('mid',$id);
 $query=$this->db->delete('main_category');
}
public function get_property_category_details(){
 return $this->db->query("select property_name,date,status,pcid from property_category order by pcid desc")->result();
}
public function get_property_category_Buy(){
 return $this->db->query("select property_name,date,status,pcid from property_category where pcid='1'")->result();
}
public function get_property_category_Rent(){
 return $this->db->query("select property_name,date,status,pcid from property_category where pcid='2'")->result();
}
public function get_property_category_Resale(){
 return $this->db->query("select property_name,date,status,pcid from property_category where pcid='3'")->result();
}

public function particular_property_get($id){
 return $this->db->query("select property_name,date,status,pcid from property_category where pcid='$id'")->result();
}
public function update_property_category($data){
$update=array('property_name'=>$data['property_name']);
$id=$data['pcid'];
$this->db->where('pcid',$id);
$query=$this->db->update('property_category',$update);
if($query){
   $this->session->set_userdata('updatearticals',1);
   return 1;
}else{ return 2;}
}



public function updatestatus_property_category_inactive($id){
  $data=array('status'=>'inactive');
  $this->db->where('pcid',$id);
 $query=$this->db->update('property_category',$data);
}
public function updatestatus_property_category_active($id){
   $data=array('status'=>'active');
  $this->db->where('pcid',$id);
 $query=$this->db->update('property_category',$data);
}
public function updatestatus_property_category_delete($id){
  $this->db->where('pcid',$id);
 $query=$this->db->delete('property_category');
}
public function get_main_property_details(){
return $this->db->query("select *from property_post order by pid desc")->result();
}
public function updatestatus_property_inactive($id){
  $data=array('status'=>'inactive');
  $this->db->where('pid',$id);
 $query=$this->db->update('property_post',$data);
}
public function updatestatus_property_active($id){
   $data=array('status'=>'active');
  $this->db->where('pid',$id);
 $query=$this->db->update('property_post',$data);
}
public function updatestatus_property_delete($id){
  $this->db->where('pid',$id);
 $query=$this->db->delete('property_post');
  $this->db->where('pid',$id);
 $query=$this->db->delete('property_images');
}
public function view_admin_property_details($id){
return $this->db->query("select p.*,c.property_name from property_post p inner join property_category c on c.pcid=p.category_id where p.pid='$id'")->result();
}
public function updatestatus_users_inactive($id){
  $data=array('status'=>'inactive');
  $this->db->where('uid',$id);
 $query=$this->db->update('users',$data);
}
public function updatestatus_users_active($id){
   $data=array('status'=>'active');
  $this->db->where('uid',$id);
 $query=$this->db->update('users',$data);
}
public function updatestatus_users_delete($id){
  $this->db->where('uid',$id);
 $query=$this->db->delete('users');
}
public function view_users_post_requirment($id){
return $this->db->query("select *from post_requirement where prid='$id'")->result();
}

public function updatestatus_requirement_inactive($id){
  $data=array('status'=>'inactive');
  $this->db->where('prid',$id);
 $query=$this->db->update('post_requirement',$data);
}
public function updatestatus_requirement_active($id){
   $data=array('status'=>'active');
   $this->db->where('prid',$id);
 $query=$this->db->update('post_requirement',$data);
}
public function updatestatus_requirement_delete($id){
    $this->db->where('prid',$id);
 $query=$this->db->delete('post_requirement');
}

public function insert_sub_category($data){
$posting_time=date('Y-m-d H:i:s');
  $insert=array('category_name'=>$data['category_name'],'mid'=>$data['mid'],'date'=>$posting_time,'status'=>'active');
  if($this->db->insert('subcategory',$insert)){
  $this->session->set_userdata('insertsucess',1);
  return 1;
 }else{
 return 2;
}
}
public function update_sub_property_category($data){
$update=array('category_name'=>$data['category_name'],'mid'=>$data['mid']);
$id=$data['mid12'];
$this->db->where('scid',$id);
$query=$this->db->update('subcategory',$update);
if($query){
   $this->session->set_userdata('updatearticals',1);
   return 1;
}else{ return 2;}
}

public function updatestatus_subcategory_inactive($id){
  $data=array('status'=>'inactive');
  $this->db->where('scid',$id);
 $query=$this->db->update('subcategory',$data);
}
public function updatestatus_subcategory_active($id){
   $data=array('status'=>'active');
   $this->db->where('scid',$id);
 $query=$this->db->update('subcategory',$data);
}
public function updatestatus_subcategory_delete($id){
    $this->db->where('scid',$id);
 $query=$this->db->delete('subcategory');
}
public function change_password($oldpassword,$newpassword){
$data=array('password'=>$newpassword);
 $mysql=$this->db->query("select *from admin where id='1'")->result();
 if($mysql[0]->password==$oldpassword){
        $this->db->where('id',1);
	    $this->db->update('admin',$data);
		$this->session->set_userdata('documentadded','Your Password Changed Successfully..');
		return 1; }else{  return 0;}
 
}

public function insert_advertisment_category($data,$image){
$posting_time=date('Y-m-d H:i:s');
  $insert=array('adveristment_name'=>$data['adveristment_name'],'advertisment_image'=>$image,'top_advertisement'=>$data['top_advertisement'],'mid'=>$data['mid'],'date'=>$posting_time,'status'=>'active');
  if($this->db->insert('advertisment',$insert)){
  $this->session->set_userdata('insertsucess',1);
  return 1;
 }else{
 return 2;
}
}
public function updatestatus_advertisment_inactive($id){
  $data=array('status'=>'inactive');
  $this->db->where('aid',$id);
 $query=$this->db->update('advertisment',$data);
}
public function updatestatus_advertisment_active($id){
   $data=array('status'=>'active');
  $this->db->where('aid',$id);
 $query=$this->db->update('advertisment',$data);
}
public function updatestatus_advertisment_delete($id){
  $this->db->where('aid',$id);
 $query=$this->db->delete('advertisment');
}
public function updatestatus_property_sub_inactive($id){
  $data=array('status'=>'inactive');
  $this->db->where('ccid',$id);
 $query=$this->db->update('child_category',$data);
}

public function updatestatus_property_sub_active($id){
   $data=array('status'=>'active');
  $this->db->where('ccid',$id);
 $query=$this->db->update('child_category',$data);
}
public function updatestatus_property_sub_delete($id){
  $this->db->where('ccid',$id);
 $query=$this->db->delete('child_category');
}


}