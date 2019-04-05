<?php


class admin extends MY_Controller
{

  



	 public function login()
	{

	   
       $this->form_validation->set_rules('uname','User name','trim|required|alpha');
       $this->form_validation->set_rules('pass','Password','trim|required|max_length[12]');
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

       if($this->form_validation->run())

       {
            $uname = $this->input->post('uname');  //to directly access the values
            $pass = $this->input->post('pass');
            // echo "Username is" ." ".$uname."</br>"."password is"." ".$pass;
           $this->load->model('loginmodel');
           $id = $this->loginmodel->isvalidate($uname,$pass);
           if($id)
        
        {
              //echo "matched";
          $this->load->library('session');
          $this->session->set_userdata('id',$id);
          return redirect('admin/welcome');
        }
        else
        {
                echo "not matched";

        }

       }
	else 
		{
			// echo validation_errors();
			 $this->load->view('admin/login');
		}
	}



public function logout()
  {
    $this->session->unset_userdata('id');
    return redirect('admin/login');
  }




public function welcome()
{
   

  $this->load->view('admin/dashboard');
  
}
 public function register()
 {
  $this->load->view('admin/register');
 }



 public function sendmail()
 {
  
  $this->form_validation->set_rules('username','User Name','required|alpha');
  $this->form_validation->set_rules('password','Password','required|max_length[12]');
  $this->form_validation->set_rules('firstname','First Name','required|alpha');
  $this->form_validation->set_rules('lastname','last Name','required|alpha');
  $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
  $this->form_validation->set_rules('number', 'Phone Number', 'required|numeric|min_length[10]|max_length[10]');
  $this->form_validation->set_rules('DOB', 'Date', 'trim|required|callback_checkDateFormat');
$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
  if($this->form_validation->run())
  {
        
    $this->load->library('email');
  
    $this->email->from(set_value('email'),set_value('username'));
    $this->email->to("rituadi20@gmail.com");
    $this->email->subject("Registratiion Greeting..");
    $this->email->message("Thank  You for Registratiion");
    $this->email->set_newline("\r\n");
    $this->email->send();
     if (!$this->email->send())
     {
          show_error($this->email->print_debugger()); }
  else
   {
    echo "Your e-mail has been sent!";
   }
  
    }
  else
  {
   $this->load->view('admin/register');
  }
 }

function checkDateFormat($date) {
        $d = DateTime::createFromFormat('Y-m-d', $date);
        if(($d && $d->format('Y-m-d') === $date) === FALSE){
            $this->form_validation->set_message('checkDateFormat', ' Enter DOB in Y-m-d format');
            return FALSE;
        }else{
            return TRUE;
        }
}

}
?>