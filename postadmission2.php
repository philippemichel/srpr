<?php
   ob_start();
   ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
   session_start();
   if ($_SESSION['connect']==0){header("Location:index.php");}
   include('connect.php');
//
$codepat = $_SESSION['codepat'];
echo $codepat."<BR>";
//
//print_r($_POST);
$adm_defaillance = (isset ($_POST['adm_defaillance']))?$_POST['adm_defaillance']:"NA";
$adm_hemod = (isset ($_POST['adm_hemod']))?$_POST['adm_hemod']:"NA";
$adm_rein = (isset ($_POST['adm_rein']))?$_POST['adm_rein']:"NA";
$adm_neuro = (isset ($_POST['adm_neuro']))?$_POST['adm_neuro']:"NA";
$adm_hemato = (isset ($_POST['adm_hemato']))?$_POST['adm_hemato']:"NA";
$adm_respi = (isset ($_POST['adm_respi']))?$_POST['adm_respi']:"NA";
$adm_autre = (isset ($_POST['adm_autre']))?$_POST['adm_autre']:"NA";
//
$adm_csg = (isset ($_POST['adm_csg']))?$_POST['adm_csg']:"NA";
$adm_crsr = (isset ($_POST['adm_crsr']))?$_POST['adm_crsr']:"NA";
$adm_goat = (isset ($_POST['adm_goat']))?$_POST['adm_goat']:"NA";
$adm_mrcd = (isset ($_POST['adm_mrcd']))?$_POST['adm_mrcd']:"NA";
$adm_mrcg = (isset ($_POST['adm_mrcg ']))?$_POST['adm_mrcg ']:"NA";
$adm_whim = (isset ($_POST['adm_whim']))?$_POST['adm_whim']:"NA";
$adm_mif = (isset ($_POST['adm_mif']))?$_POST['adm_mif']:"NA";
$adm_drs = (isset ($_POST['adm_drs']))?$_POST['adm_drs']:"NA";
$adm_gose = (isset ($_POST['adm_gose']))?$_POST['adm_gose']:"NA";
//
$adm_asia_mot = (isset ($_POST['adm_asia_mot']))?$_POST['adm_asia_mot']:"NA";
$adm_asia_ssb = (isset ($_POST['adm_asia_ssb']))?$_POST['adm_asia_ssb']:"NA";
$adm_asia_anom = (isset ($_POST['adm_asia_anom']))?$_POST['adm_asia_anom']:"NA";
//
$adm_ecgnormal = (isset ($_POST['adm_ecgnormal']))?$_POST['adm_ecgnormal']:"NA";
$adm_tdrvent = (isset ($_POST['adm_tdrvent']))?$_POST['adm_tdrvent']:"NA";
$adm_tdrsupra = (isset ($_POST['adm_tdrsupra']))?$_POST['adm_tdrsupra']:"NA";
$adm_conduction = (isset ($_POST['adm_conduction']))?$_POST['adm_conduction']:"NA";
$adm_repol = (isset ($_POST['adm_repol']))?$_POST['adm_repol']:"NA";
$adm_ische = (isset ($_POST['adm_ische']))?$_POST['adm_ische']:"NA";
//
$adm_echo = (isset ($_POST['adm_echo']))?$_POST['adm_echo']:"NA";
$adm_date_echo = (isset ($_POST['adm_date_echo']))?$_POST['adm_date_echo']:"NA";
//
$adm_deglu = (isset ($_POST['adm_deglu']))?$_POST['adm_deglu']:"NA";
$adm_alim = (isset ($_POST['adm_alim']))?$_POST['adm_alim']:"NA";
//
$adm_diag = (isset ($_POST['adm_diag']))?$_POST['adm_diag']:"NA";
//
$adm_cognitif = (isset ($_POST['adm_cognitif']))?$_POST['adm_cognitif']:"NA";
$adm_sommeil = (isset ($_POST['adm_sommeil']))?$_POST['adm_sommeil']:"NA";
$adm_agitation = (isset ($_POST['adm_agitation']))?$_POST['adm_agitation']:"NA";
$adm_visuel = (isset ($_POST['adm_visuel']))?$_POST['adm_visuel']:"NA";
$adm_hemip = (isset ($_POST['adm_hemip']))?$_POST['adm_hemip']:"NA";
$adm_parap = (isset ($_POST['adm_parap']))?$_POST['adm_parap']:"NA";
$adm_tetrap = (isset ($_POST['adm_tetrap']))?$_POST['adm_tetrap']:"NA";
$adm_retract= (isset ($_POST['adm_retract']))?$_POST['adm_retract']:"NA";
//
// = (isset ($_POST['']))?$_POST['']:"NA";
//
$req=$base-> prepare("
    UPDATE admission SET 
        adm_defaillance= ?,
        adm_hemod= ?,
        adm_rein= ?,
        adm_hemato= ?,
        adm_respi= ?,
        adm_autre= ?,
        adm_csg= ?,
        adm_crsr= ?,
        adm_goat= ?,
        adm_mrcd= ?,
        adm_mrcg= ?,
        adm_whim= ?,
        adm_mif= ?,
        adm_drs= ?,
        adm_gose= ?,
        adm_asia_mot= ?,
        dm_asia_ssb= ?,
        adm_asia_anom= ?,
        adm_ecgnormal= ?,
        adm_tdrvent= ?,
        adm_tdrsupra= ?,
        adm_conduction= ?,
        adm_repol= ?,
        adm_ische= ?,
        adm_echo= ?,
        adm_date_echo= ?,
        adm_deglu= ?,
        adm_alim= ?,
        adm_diag= ?,
        adm_cognitif= ?,
        adm_sommeil= ?,
        adm_agitation= ?,
        adm_visuel= ?,
        adm_hemip= ?,
        adm_parap= ?,
        adm_tetrap= ?,
        adm_retract= ?,
        adm_clinique= ?
    WHERE codepat='$codepat'
");
$req->execute(array(
    $adm_defaillance,$adm_hemod,$adm_rein,$adm_neuro,$adm_hemato,$adm_respi,$adm_autre,
    $adm_csg,$adm_crsr,$adm_goat,$adm_mrcd,$adm_mrcg,$adm_whim,$adm_mif,$adm_drs,$adm_gose,
    $adm_asia_mot,$adm_asia_ssb,$adm_asia_anom,
    $adm_ecgnormal,$adm_tdrvent,$adm_tdrsupra,$adm_conduction,$adm_repol,$adm_ische,
    $adm_echo,$adm_date_echo,
    $adm_deglu,$adm_alim,
    $adm_diag,
    $adm_cognitif,$adm_sommeil,$adm_agitation,$adm_visuel,$adm_hemip,$adm_parap,$adm_tetrap,$adm_retract,$adm_clinique 
));
if ($req===FALSE){
    $err=$base->errorInfo();
    echo $err[2];
}
if ($_SESSION['adm'] === 1){
    header("Location:sortie.php");
}else{
    header("Location:index2.php");
}
ob_end_flush();
?>
aa