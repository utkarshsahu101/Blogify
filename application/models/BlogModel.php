<?php

class BlogModel extends CI_Model {


    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
    }

    public function listPosts($limit = null){
      if(!$limit == null){
		  $this->db->order_by("date", "DESC");
        $query = $this->db->get('blog',$limit);
      }else{
		  $this->db->order_by("date", "DESC");
        $query = $this->db->get('blog');
      }

      if($query){
        $result = $query->result();

        return $result;
      }
    }

    public function getPost($post){
    	$query = $this->db->get_where('blog', array('id' => $post));

      if($query){
        $result = $query->result();

        foreach ($result as $row) {
          return $row;
        }
      }
    }

    public function getPosts(){
        $query = $this->db->get('blog');

        if($query){
            $result = $query->result();

            return $result;
        }
    }

    public function editPost($post){
    	$query = $this->db->get_where('blog', array('id' => $post));

      if($query){
        $result = $query->result();

        foreach ($result as $row) {
          return (array) $row;
        }
      }
    }

    public function deletePost($pid){
    	$query = $this->db->delete('blog', array('id' => $pid));

      if($query){
        return true;
      }else{
        return false;
      }
    }

    public function getCategories(){
      $query = $this->db->get('categories');

      if($query){
        $result = $query->result();

        return (array) $result;
      }
    }

    public function addNewPost(array $data){
      $query = $this->db->insert('blog', $data);

      if($query){
        return true;
      }else{
        return false;
      }
    }

}
