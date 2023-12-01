<?php
include_once('../db.php');

dd($_POST);
// new
$data = [];
$data['text'] = $_POST['subject'];
$data['count'] = 0;
$data['sh'] = 1;
// 

$Que->save($data);

foreach ($_POST['opt'] as $opt) {
    // -init
    $data = [];
    // -

    $subject_id = $Que->find(['text' => $_POST['subject']])['id'];

    $data['text'] = $opt;
    // --設定一個主題(分隊、分類...)
    $data['subject_id'] = $subject_id;
    // --
    $data['count'] = 0;
    $data['sh'] = 1;
    // sh 控制顯示主題
    $Que->save($data);
}

header("location:../admin.php");