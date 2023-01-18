<?php
session_start();
if (isset($_SESSION['staffNo']));
{

    unset($_SESSION['$staffNo']);

}
header("Location:adminLogin.php");
