<?php

class UserModel extends CI_Model
{
    public function insertUser($data1,$data2)
    {
        $this->db->insert('registration', $data1);
        $this->db->insert('login', $data2);
    }
}




