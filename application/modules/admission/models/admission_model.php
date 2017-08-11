<?php 
(defined('BASEPATH')) OR exit('No direct script access allowed'); 
/**
 * Description of Model
 *
 * @author Harshal 
 */
class Admission_model extends CI_Model {
 
    function __construct() 
	{
        parent::__construct();
		$this->load->database();	
    }
 
    public function index() 
	{		
		
    }
	
	public function validate_existing_email()
	{		
		$user_email = $this->db->escape($_POST['your_email']);		
		$query_result = $this->db->query("SELECT * FROM student_register WHERE student_email_id = $user_email");
		return $query_result->result();
    }
	
	public function validate_existing_mobile_no()
	{		
		$student_mobile_no = $this->db->escape($_POST['mobile_number']);		
		$query_result = $this->db->query("SELECT * FROM student_register WHERE student_mobile_no = $student_mobile_no");
		return $query_result->result();
    }
	
		
}