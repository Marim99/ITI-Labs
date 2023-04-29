<?php
require_once("views/home.php");


$index = $_SESSION["index"] ?? 0;
$file = simplexml_load_file('files/data.xml');
if(isset($_POST["next"])&& $index < count($file->user)-1){
    $_SESSION["index"] ++;
};
if(isset($_POST["reset"])){

    $_SESSION["index"] = 0;
};
if(isset($_POST["prev"])&& $index >= 0){
    $_SESSION["index"] --;
};
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $user = $file->xpath("//user[id='$id']")[0];
    $user->name = $_POST['name'];
    $user->phone = $_POST['phone'];
    $user->address = $_POST['address'];
    $user->email =$_POST['email'];
    $file->asXML('files/data.xml');
    $_SESSION["index"] =0;
}

if(isset($_POST['delete'])){
$id = $_POST['id'];
$user = $file->xpath("//user[id='$id']")[0];
unset($user[0]);
$file->asXML('files/data.xml');
$_SESSION["index"] =0;
}
