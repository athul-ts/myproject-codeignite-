<?php

class UserModel extends CI_Model
{
    public function insertUser($data1,$data2)
    {
        $this->db->insert('registration', $data1);
        $this->db->insert('login', $data2);
    }

    public function loginUser($data){
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', $this->input->post('password'));
        $query = $this->db->get('login'); 

        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else {  
            return false;  
        } 
    }

}


    




