<?php
class user extends CI_Model
{
  public $users = ['Hilman','Fikar','Haider'];

  public function get_users()
  {
    return $this->users;
  }

  public function set_users()
  {
    $new_user = $this->input->post('name');
    array_push($this->users, $new_user); //mengirim isi array
    return $this->users;
  }

  public function delete_users($id)
  {
    unset($this->users[$id]);
    return $this->users;
  }

  public function get_user($id)
  {
    return $this->users[$id];
  }

  public function update_users($id)
  {
    $this->users[$id] = $this->input->post('name');
    return $this->users;
  }

}

 ?>
