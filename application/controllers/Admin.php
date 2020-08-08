<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('session');
  }

	public function index()
	{
    $this->load->library('session');

    if($this->session->userdata("email") == null){
      redirect(site_url('admin/login'), 'refresh');
    }else{
      $this->load->view('admin_header');
      $this->load->view('admin_content');
      $this->load->view('admin_footer');
    }

	}

  public function login()
	{
		$this->load->view('login');

    $dataPost = $this->input->post();

    if ($dataPost) {
      $this->load->library('form_validation');
      $validation = $this->form_validation;

      $this->load->model("UserModel");
      $userModel = $this->UserModel;

      $validationConfig = array(
			        array(
		                'field' => 'email',
		                'label' => 'Email',
		                'rules' => 'required|valid_email|max_length[55]'
			        ),
			        array(
		                'field' => 'password',
		                'label' => 'Password',
		                'rules' => 'required|alpha_numeric|min_length[5]|max_length[55]'
			        )
				);

      $validation->set_rules($validationConfig);

      if (!$validation->run() == false){
        $userData = $userModel->getUsers($dataPost);

        $this->session->set_userdata($userData);

        redirect(site_url('admin'), 'refresh');

      }else{
        $this->load->helper('url');
        redirect(site_url('admin'), 'refresh');
      }
    }
	}

  public function logout()
	{
    $this->session->unset_userdata("email");
    redirect(site_url('admin'), 'refresh');
  }

  public function listPosts()
	{
    $this->load->model("BlogModel");
    $blogModel = $this->BlogModel;

    $posts = $blogModel->listPosts();
    $data = array(
      "posts" => $posts
    );

    $this->load->view('admin_header');
    $this->load->view('listPosts',$data);
    $this->load->view('admin_footer');
  }

  public function editPost($post = null)
	{
    $this->load->model("BlogModel");
    $blogModel = $this->BlogModel;

    $postDetails = $blogModel->getPost($post);
    $categories = $blogModel->getCategories();

    $data = array(
      "post" => $postDetails,
      "categories" => $categories
    );

    $this->load->view('admin_header');
    $this->load->view('editPost',$data);
    $this->load->view('admin_footer');

    $dataPost = $this->input->post();

    if($dataPost){

      if(isset($_FILES)){
        $imageName = $_FILES["postImage"]["name"];
        //var_dump($_FILES); die;
      }else{
        $imageName = $postDetails["resim"];
      }

      $this->do_upload();

      $updateData = array(
              'baslik' => $dataPost["title"],
              'tarih'  => $dataPost["date"],
              'icerik' => $dataPost["content"],
              'resim' => $imageName,
              'kategori' => $dataPost["category"]
      );

      $query = $this->db->update('blog', $updateData,  "id ='".$dataPost["pid"]."'");

      if($query){
        $messages = array(
          "updateSuccess" => "Update Successfully done.",
          "updateFail" => "Update failed."
        );

        redirect(site_url('admin'), 'refresh');
      }else{
        echo "update failed.";
      }
    }
  }

  public function addNewPost()
	{
    $this->load->model("BlogModel");
    $blogModel = $this->BlogModel;
    $categories = $blogModel->getCategories();

    $data = array("categories" => $categories);

    $this->load->view('admin_header');
    $this->load->view('addNewPost', $data);
    $this->load->view('admin_footer');

    $dataPost = $this->input->post();

    if($dataPost){

      if(isset($_FILES)){
        $imageName = $_FILES["postImage"]["name"];
        //var_dump($_FILES); die;
      }else{
        $imageName = null;
      }

      $this->do_upload();

      $insertData = array(
              'baslik' => $dataPost["title"],
              'tarih'  => $dataPost["date"],
              'icerik' => $dataPost["content"],
              'resim' => $imageName,
              'kategori' => $dataPost["category"]
      );

      $addpost = $blogModel->addNewPost($insertData);

      if($addpost){
        redirect("admin", "refresh");
      }else{
        echo "Post couldn't save";
      }
    }
  }

  public function do_upload(){
      $config['upload_path']          = './assets/images/blog/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload("postImage"))
      {
          return false;
      }
      else
      {
          $data = array('upload_data' => $this->upload->data());
          return true;
      }
  }

  public function deletePost($postId = null){
    $this->load->model("BlogModel");
    $blogModel = $this->BlogModel;

    $deletePost = $blogModel->deletePost($postId);

    if($deletePost){
      redirect("admin", "refresh");
    }else{
      echo "Post couldn't remove";
    }
  }
}
