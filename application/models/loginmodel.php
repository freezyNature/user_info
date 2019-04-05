<?php
class loginmodel extends CI_Model
{

public function isvalidate($username,$password)
{

// $this->load->db->query("select * from users where username=$username  and password=$password"); basic method
	//codeigniter method using active records
	$q = $this->db->where(['username'=>$username,'password'=>$password])
				  ->get('users');
				  //echo "<pre>";
				  //print_r($q->row()->id);
				  //exit;
				  if($q->num_rows())
				  {
				  	return $q->row()->id;
				  }
                 else
                 {
                 	return False;
                 }
}

public function articleList()
{

 $r=$this->session->userdata('id');
 //print_r($r);exit;
 $q =$this->db->select('article_title')
          ->from('articles')
          ->where(['user_id'=>$r])
          ->get();
          //print_r($q);
          //exit;
          return $q->result();
          
}

}
?>