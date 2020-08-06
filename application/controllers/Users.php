<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
    function index(){
        $this->load->view('user_view');
    }
 
    function usersList(){
        $data=$this->User_model->getUsersList();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->User_model->saveUser();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->User_model->updateUser();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->User_model->deleteUser();
        echo json_encode($data);
    }
 
}