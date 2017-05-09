<?php

class Login_Model extends Model
{

    protected $table = 'user';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_user($username, $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->db->prepare("SELECT * FROM user WHERE 
                username = :username");

        $sth->execute(array(
            ':username' => $username
                    
        ));

        return $sth->fetchAll($fetchMode);
    }

    public function get_pass($password, $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->db->prepare("SELECT * FROM user WHERE 
                password = :password");

        $sth->execute(array(
            ':password' => Hash::create('sha256', $password, HASH_PASSWORD_KEY)
                    
        ));

        return $sth->fetchAll($fetchMode);
    }

    public function get_login($username, $password, $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->db->prepare("SELECT * FROM user WHERE 
                 username = :username AND password = :password ");

        $sth->execute(array(
            ':username' => $username,
            ':password' => Hash::create('sha256', $password, HASH_PASSWORD_KEY)
            ));

        return $sth->fetchAll($fetchMode);
    }

    public function create($data)
    {
        $this->db->insert('user', array(
            'username' => $data['username'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        ));
    }
    
}