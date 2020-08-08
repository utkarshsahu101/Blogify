<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{

		$this->load->model("BlogModel");
		$blogModel = $this->BlogModel;

		$data = array(
			"posts" => $blogModel->listPosts(),
			"categories" => $blogModel->getCategories()
		);
		
		$data['showPostsMetaOg'] = false;
		
		for($i = 0; $i < count($data['posts']); $i++){
			$data['posts'][$i]->date = $this->formatDate($data['posts'][$i]->date);
		}

		$this->load->view('blog', $data);
	}

	public function post($pid){

		$this->load->model("BlogModel");
		$blogModel = $this->BlogModel;

		$data = array(
			"post" => $blogModel->getPost($pid),
			"categories" => $blogModel->getCategories()
		);

		$data['post']->date = $this->formatDate($data['post']->date);

		$data['showPostsMetaOg'] = true;

		$this->load->view('post', $data);
	}
	
	public function formatDate($item){
		return $item = date("d.m.Y", strtotime($item));
	}

	public function getPosts() {
        $this->load->model("BlogModel");
        $blogModel = $this->BlogModel;

        $data = $blogModel->getPosts();

        $response = new ArrayObject();
        $response['status'] = 0;
        $response['data'] = [];

        if($data) {
            $response['status'] = 1;
            $response['data'] = $data;
        }

        echo json_encode($response);
    }
}
