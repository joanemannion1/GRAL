<?php 
include('db_connect.php');
session_start();

if(!isset($_SESSION['email'])){
  header("location:login.php");
  die();
}
  ?>