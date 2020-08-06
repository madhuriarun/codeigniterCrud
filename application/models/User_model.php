<?php
class User_model extends CI_Model{
 
    function getUsersList(){
        $query=$this->db->get('users');
        return $query->result();
    }
 
    function saveUser(){
        $data = array(
                'name'  => $this->input->post('username'), 
                'email'  => $this->input->post('email'), 
                'phone' => $this->input->post('phone'), 
                'city' => $this->input->post('city')
            );
        $result=$this->db->insert('users',$data);
        return $result;
    }
 
    function updateUser(){
        $userId=$this->input->post('userId');
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $city=$this->input->post('city');
        
        $this->db->set('name', $username);
        $this->db->set('email', $email);
        $this->db->set('phone', $phone);
        $this->db->set('city', $city);
        $this->db->where('id', $userId);
        $result=$this->db->update('users');
        return $result;
    }
 
    function deleteUser(){
        $userId=$this->input->post('userId');
        $this->db->where('id', $userId);
        $result=$this->db->delete('users');
        return $result;
    }
     
}