<?php
include "location:../dbphp";

dd($_POST);
// new
$data=[];
$data['text']=$_POST['subject'];
$data['count']=0;
$data['sh']=1;
// 