<?php
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
session_start();
if ($_SESSION['connect']==0){header("Location:index.php");}
include('connect.php');
include('macro.php');
$codepat = " ";
$codepat = $_SESSION['codepat'];
?>
<!DOCTYPE HTML PUBLIC "HTML">
<html lang = "fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="https://code.cdn.mozilla.net/fonts/fira.css">
<link rel="stylesheet" href="style.css"/>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" href="https://code.cdn.mozilla.net/fonts/fira.css">
<![endif]-->
<title>SRPR</title>
</head>
<body>

<header>
<h1>SRPR Beaumont sur Oise</h1>
<?php
echo "<h2> Patient $codepat - $titre </h2>";
?>
</header>
<DIV class = "corps">
<?php 
  if ($form === 1){
    include('menu.php');
    $form=0;
}
?>