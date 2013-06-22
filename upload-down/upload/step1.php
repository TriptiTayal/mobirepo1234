<?php

if($_POST['name']!="" && $_POST['email']!="" && $_POST['password']!="" && isset($_POST['cb']) && $_POST['gender']!="Select" && $_POST['age']!="")
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    require "../config.php";
    $insert=mysql_query("insert into candidate_personal(name,email,password,age,gender) values('$name','$email','$password',$age,'$gender')",$con);
    session_start();
    $_SESSION['email']=$email;
    header("Location:edudetails.php");
}
else
{
    if($_POST['name']=="")
    {
        echo "Please enter your name.<br />";
    }
    if($_POST['email']=="")
    {
        echo "Please enter your email id.<br />";
    }
    if($_POST['password']=="")
    {
        echo "Please enter your password.<br />";
    }
    if(!isset($_POST['cb']))
    {
        echo "Please agree to the terms and conditions.<br />";
    }
    if($_POST['gender']=="Select")
    {
        echo "Please enter your gender.<br />";
    }
    if($_POST['age']=="")
    {
        echo "Please enter your age.<br />";
    }
}
?>