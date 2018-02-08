<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2/8/2018
 * Time: 11:14 AM
 */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

include 'User.php';
include 'Admin.php';
echo "<h3>Test Users</h3>";

echo "<p>Test User1</p>";
$user1 = new User();
$user1->login("username","password");
$user1->setUser("Alex");

echo "<p>Test User2</p>";
$user2 = new User();
$user2->login("user","pass");

echo "<p>Testing Admin</p>";
$admin = new Admin();
$admin->setAccessLevel("5");
$admin->getAccessLevel();
$admin->editUser($user1);
