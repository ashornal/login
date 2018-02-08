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
}