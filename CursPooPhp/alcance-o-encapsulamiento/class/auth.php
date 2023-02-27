<?php

use Auth as GlobalAuth;

class Auth
{
    protected $email;
    protected $password;

    public function login($email)
    {
        if(!empty($email)){
            return 'usted se a logueado con exito';
        }else{
            return "el email: $email no ha sido encontrado";
        }
    }

    public function validate($email,$password)
    {
        if(!empty($email) &&!empty($password)){
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            return "usuario validado";
        }else{
            return "revise los datos ingresados";
        }
    }

    // failed, response
}

$logueo = new Auth;
echo $logueo->login("tronco@ok.com")."</br>". $logueo->validate("tronco@ok.com","123456");