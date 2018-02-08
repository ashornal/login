<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 2/8/2018
 * Time: 11:00 AM
 */

class Admin extends User
{
    private $username;
    private $password;
    private $accessLevel;

    function __construct()
    {
        $this->username = "";
        $this->password = "";
        $this->accessLevel = "";
    }

    function getAccessLevel(){
        echo "<p>Access level: $this->_accessLevel</p>";
    }
    function setAccessLevel($level){
        $this->_accessLevel = $level;
    }
    function editUser($user){
        echo "<p>Editing: ".$user->getUser()."</p>";
    }
}