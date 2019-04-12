<?php
ob_start();
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
session_start();
$base=new PDO('mysql:host=localhost;dbname=phpmyadmin','phpmyadmin','polii',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$nom = (isset ($_POST['login']))?$_POST['login']:"xx";
$pass = (isset ($_POST['pass']))?$_POST['pass']:"xx";
echo $nom;
echo $pass;
$reponse = $base->query("SELECT * FROM codes WHERE nom LIKE '$nom'");
$donnees = $reponse->fetch();
$code=$donnees['code'];
echo " - ",$code;
if ($code == $pass)
{
     $_SESSION['connect']=1;
     header("Location:index2.php");
}
else{
    header("Location:index.php");
}
ob_end_flush();
?>
kkkk  bb