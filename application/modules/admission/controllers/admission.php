<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed'); 
/**
 * Description of site
 *
 * @author Harshal
 * This is Home file of admission_home
 * User comes to admission then this file is displayed
 * Here Register and Login page is displaying
 */
class Admission extends MY_Controller {
 
    function __construct() 
	{
        parent::__construct();
		$this->load->library('session');
		$this->load->helper('captcha');
		$this->load->helper('url');
		
		$this->load->model('admission_model');
    }
 
    public function index() 
	{	
		$data['captcha_image'] = $this->custom_create_captcha();
		$this->load->view('admission_home', $data);
    } 
	
	private function custom_create_captcha()
	{	
		$options = array('img_path'=>FCPATH.'assets/captcha/','img_url'=>base_url().'assets/captcha/','img_height'=>'30','expiration'=>7200,);		
		$cap = create_captcha($options);		
		$image = $cap['image'];		
		$this->session->set_userdata('captchaword', $cap['word']);		
		return $image;
	}
	
	public function check_captcha($string)
	{
		if($string==$this->session->userdata('captchaword')){
		  return TRUE;
		}
		else{
		  $this->form_validation->set_message('check_captcha', 'Wrong captcha code');
		  return FALSE;
		}
    }
	
	public function register_user()
	{
		$your_name 		= $_POST['your_name'];
		$your_email 	= $_POST['your_email'];
		$mobile_number 	= $_POST['mobile_number'];
		$your_password 	= $_POST['your_password'];
		$choose_state 	= $_POST['choose_state'];
		$choose_city 	= $_POST['choose_city'];
		$get_captcha 	= $_POST['get_captcha'];		 	
		
		if(is_array($this->admission_model->validate_existing_email()) && !empty($this->admission_model->validate_existing_email())){
			echo "FAIL";
			return;
		}
		
		if(is_array($this->admission_model->validate_existing_mobile_no()) && !empty($this->admission_model->validate_existing_mobile_no())){
			echo "FAIL";
			return;
		}		
	}	
}