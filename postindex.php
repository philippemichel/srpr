<?php
ob_start();
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
session_start();
$base=new PDO('mysql:host=localhost;dbname=srpr','root','polii',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$nom = (isset ($_POST['login']))?$_POST['login']:"xx";
$pass1 = (isset ($_POST['pass']))?$_POST['pass']:"xx";
$pass = hash('sha256',$pass1);
$reponse = $base->query("SELECT * FROM codes WHERE nom LIKE '$nom'");
$donnees = $reponse->fetch();
$code=$donnees['code'];
if ($code == $pass)
{
     $_SESSION['connect']=1;
     header("Location:index2.php");
}
else{
    $_SESSION['connect']=0;
    header("Location:index.php");
}
ob_end_flush();
