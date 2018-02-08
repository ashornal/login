<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 2/8/2018
 * Time: 11:00 AM
 */

class Admin extends User
{

    private $accessLevel;

    function __construct($username, $password, $accessLevel)
    {
        $this->$username = $username;
        $this->$password = $password;
        $this->$accessLevel = $accessLevel;
    }

    function setAccessLevel($accessLevel) {

        $this-> accessLevel = $accessLevel;
    }

    function getAccessLevel() {

        return $this-> accessLevel;
    }

    function editUser($username) {

        echo "<p>Editing $username</p>";
    }
}