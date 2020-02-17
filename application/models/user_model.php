<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class User_model extends CI_Model
 {
	
	 public function __construct() 
   {

		parent::__construct();
	 }
	
	public function login($user,$password)
	{

  		$this->db->where('user',$user);
  		$this->db->where('password',$password);
  		$query = $this->db->get('users');
  		if($query->num_rows() > 0)
  		{
  			return $query->row();
  		}
      
      return null; 

	}

	public function registers($name,$user,$password)
	{
		$data = array(

			'name' =>  $name,
			'user' => $user,
			'password' => $password,
		);

		return $this->db->insert('users',$data);
	}

	public function validauser($user)
	{
		$this->db->where('user', $this->input->post('user'));
		return $this->db->get('users')->row_array();
	}

	public function listar()
	{
		$this->db->select('*');    
        $this->db->from('users u');
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result();
	}

//   public function valida($email)
//   {
//      $this->db->where('email',$email);
//      $query = $this->db->get('user');

//         if ($query->num_rows() > 0)
//         {
//           return $query->row();
//         }
//           return null;  
      

//     /*
//      $row = $query->row();
     
//      if (isset($row))
//     {
//       echo $row->email;
//     }

//     else
//     {
//       echo 'no existe';
//     }
//     */
     
//   }

//    public function updatepass($id_user,$data)
//    {
     
//      $this->db->where('id_user', $id_user);
//      $this->db->update('user',$data);
//     //echo $this->db->last_query(); die;
//       //UPDATE user SET password '1' WHERE id_user = '1'
//    }

 

  

      //ipmprimir consultas//     
    
        
}
