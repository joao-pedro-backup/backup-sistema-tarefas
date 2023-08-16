<?php
/** 
 *Todo: Implementar sistema para tratamento de senhas, emails e nome de usuário.
*/
class UsersManagement{
    protected $id;
    protected $username;
    protected $email;
    protected $password;
    protected $caracters=["!", "@", "#", "$", "%"];
    protected $minPasswodValid=8;

    protected function __construct($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    protected function getUsername(){
        return $this->username;
    }

    protected function getEmail(){
        return $this->email;
    }

    protected function getPassword(){
        return $this->password;
    }

    

}