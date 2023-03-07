<?php
session_start();
$con = mysqul_connect("localhost", "root", "", "phptutorials");

if(isset($_POST['save_select']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $currentRole = $_POST['currentRole'];
    $sameGroup = $_POST['sameGroup'];

    
}