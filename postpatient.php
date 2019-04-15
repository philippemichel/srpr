<?php
ob_start();
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
session_start();
if ($_SESSION['connect']==0){header("Location:index.php");}
include('connect.php');
include('macro.php');
//
$nom = varget('nom');
$prenom = varget('prenom');
$datenaiss = varget('datenaiss');
$dateadm = varget('dateadm');

$codepat = substr($nom,0,2).substr($prenom,0,2).substr($datenaiss,0,2).substr($datenaiss,5,2);
$_SESSION['codepat']=$codepat;
$_SESSION['adm']=1;
//telpt1
$req=$base-> prepare("
    INSERT INTO etatcivil(codepat,nom,prenom,datenaiss,dateadm)
    VALUE(?,?,?,?,?)
");
$req->execute(array($codepat,$nom,$prenom,$datenaiss,$dateadm));
if ($req===FALSE){
    $err=$base->errorInfo();
   echo $err[2];
  }
//
$req=$base-> prepare("
    INSERT INTO admission(codepat)
    VALUE(?)
");
$req->execute(array($codepat));
//
$req=$base-> prepare("
    INSERT INTO sejour(codepat)
    VALUE(?)
");
$req->execute(array($codepat));
//
$req=$base-> prepare("
    INSERT INTO sortie(codepat)
    VALUE(?)
");
$req->execute(array($codepat));
//
$req=$base-> prepare("
    INSERT INTO j28(codepat)
    VALUE(?)
");
$req->execute(array($codepat));
//
$req=$base-> prepare("
    INSERT INTO j90(codepat)
    VALUE(?)
");
$req->execute(array($codepat));
//
$req=$base-> prepare("
    INSERT INTO m6(codepat)
    VALUE(?)
");
$req->execute(array($codepat));
//
$req=$base-> prepare("
    INSERT INTO m12(codepat)
    VALUE(?)
");
$req->execute(array($codepat));
//
header("Location:admission.php");
ob_end_flush();