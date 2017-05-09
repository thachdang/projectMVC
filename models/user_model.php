<?php

class User_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function userList()
    {
        return $this->db->select('SELECT * FROM user');
    }
    
    public function userSingleList($userid)
    {
        return $this->db->select('SELECT * FROM user WHERE userid = :userid', array(':userid' => $userid));
    }
    
    
    public function editSave($data)
    {
        $postData = array(
            'username' => $data['username'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        );
        $this->db->update('user', $postData, "`userid` = {$data['userid']}");
    }
    
    public function delete($userid)
    {
        $result = $this->db->select('SELECT role FROM user WHERE userid = :userid', array(':userid' => $userid));

        if ($result[0]['role'] == 'admin')
        return false;
        
        $this->db->delete('user', "userid = '$userid'");
    }
}