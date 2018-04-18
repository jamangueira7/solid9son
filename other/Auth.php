<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 18/04/2018
 * Time: 18:00
 */

class Auth
{
    public function authenticate($user, $pass)
    {
        if($user == 'joao' && $pass == '123'){
            return true;
        }
        return false;
    }
}

class AuthApi extends Auth
{
    public function authenticate($user, $pass)
    {
        if($user == 'joao' && $pass == '123'){
            return [
                'status'=> 'ok'
            ];
        }
        return [
            'status'=> 'fail'
        ];
    }
}

$auth1 = new Auth;
$auth2 = new AuthApi;

$auth1 = $auth1->authenticate('joao','123');
$auth2 = $auth2->authenticate('joao','123');


if($auth2){
    echo 'logado';
}else{
    echo 'deu ruim';
}
