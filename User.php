<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 2/8/2018
 * Time: 10:24 AM
 */

class User
{
    // Initialized variables
    private $username;
    private $password;
    private $loggedIn;

    /**
     * User constructor.
     * @param string $username user name set to empty string
     * @param string $password password set to empty string
     * @param bool $loggedIn loggedIn check set to false;
     */
    function __construct($username = " ", $password = " ", $loggedIn = false)
    {
        $this->username = $username;
        $this->password = $password;
        $this->loggedIn = $loggedIn;
    }

    /**
     * Getter for username
     * @return mixed
     */
    function getUser()
    {
        return $this->_username;
    }

    /**
     * Setter to set username
     * @param $username
     */
    function setUser($username)
    {
        $this->_username = $username;
    }

    /**
     * Sets the password
     * @param $password
     */
    function setPassword($password)
    {
        if(strlen($password >= 6))
        {
            $this-> password = $password;
        }
    }

    /**
     * Compares the username and password to check
     * if they are equal so the user can be logged in
     * @param $username
     * @param $password
     */
    function login($username, $password)
    {
        include 'users.php';
        if($this->username == $username && $this->password == $password)
        {
            echo "<p>$username is logged in";
            $this->loggedIn = true;
        }
        else {
            echo "<p>Login Error</p>";
        }
    }

    /**
     * Logout function sets the username, password, and loggedIn back
     * to default
     */
    function logout() {
        $this->username = " ";
        $this->password = " ";
        $this->loggedIn = false;
    }
}