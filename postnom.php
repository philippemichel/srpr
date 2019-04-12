<?php
    ob_start();
    ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
    session_start();
    if ($_SESSION['connect']==0){header("Location:index.php");}
    include('connect.php');
    //
    $nomr = $_POST['nomr'];
    echo $nomr;
    if(strlen($nomr) === 0){
        header("Location:liste.php");
    }else{
        $reponse = $base->query("SELECT * FROM etatcivil WHERE nom='$nomr'");
        $donnees = $reponse->fetch();
        $_SESSION['codepat'] = $donnees['codepat'];
        if($_SESSION['codepat']){
            header("Location:admission.php");
        }
    }
    //
    header("Location:liste.php");
    ob_end_flush();
?>
<BR>zz  