<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 2/8/2018
 * Time: 10:24 AM
 */

class User
{
    private $username;
    private $password;
    private $loggedIn;

    function __construct($username = " ", $password = " ", $loggedIn = false)
    {
        $this->username = $username;
        $this->password = $password;
        $this->loggedIn = $loggedIn;
    }

    function getUser()
    {
        return $this->_name;
    }

    function setUser($name)
    {
        $this->_name = $name;
    }

    function setPassword($password)
    {
        if(strlen($password >= 6))
        {
            $this-> password = $password;
        }
    }

    function login($username, $password)
    {
        include 'users.php';
        if($username==$username && $password == $password)
        {
            echo "<p>$username is logged in";
            $loggedIn = true;
        }
        echo "<p>Login Error</p>";
    }
}