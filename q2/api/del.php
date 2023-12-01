<?php
include_once "../db.php";

if(isset($_GET['id']))
{
    $Que->del($_GET['id']);
}


header("location:../admin.php");