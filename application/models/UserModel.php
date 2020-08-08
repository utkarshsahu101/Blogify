<?php

class UserModel extends CI_Model {


    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
    }

    public function getUsers(array $userData){
    	$query = $this->db->get_where('user', array('email' => $userData["email"], 'password' => md5($userData["password"])));

      if($query){
        $result = $query->result();

        foreach ($result as $row){
          return (array) $row;
        }
      }
    }

}
