<?php

class classHello extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
  }

	public function index()
	{
		$this->load->view('hello');
	}

  public function Profile($nama)
  {
    $data['name'] = $nama;
    $data['age'] = 60;
    $this->load->view('profile',$data);
  }

  public function View()
  {
    $data['users'] = $this->user->get_users();
    $this->load->view('users',$data);
  }

  public function Create()
  {
    $data['users'] = $this->user->set_users();
    $this->load->view('users',$data);
  }

  public function Delete($id)
  {
    $data['users'] = $this->user->delete_users($id);
    $this->load->view('users',$data);
  }

  public function Edit($id)
  {
    $data['id'] = $id;
    $data['users'] = $this->user->get_user($id);
    $this->load->view('edit',$data);
  }

  public function Update($id)
  {
    $data['users'] = $this->user->update_users($id);
    $this->load->view('users',$data);
  }


}

?>
