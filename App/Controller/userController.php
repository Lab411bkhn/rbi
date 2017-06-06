<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userController
 *
 * @author Dương
 */
class userController {
    //put your code here
    function userController() {
        
    }
    
    function creatUser($userName,$password,$info){
        
    }
    
    function login($userName,$password){
        if($this->authenticate($userName,$password)){
            //start the session for the user...
            //session_start();
            require_once '../../Model/user.php';
            $user = new user($userName);
            $_SESSION['user'] = $user;
            return true;
        }
        else{ 
            return false;
        }
    }
    
    static function authenticate($user,$password){
        $authentic = false;
        if($user == 'admin' && $password=='admin'){
            $authentic = true;
        }
        return $authentic;
    }
    
    function logout(){
        session_start();
        session_destroy();
    }
}
