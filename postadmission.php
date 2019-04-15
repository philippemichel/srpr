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
$admvasc1 = (isset ($_POST['adm_ac_vasc1']))?$_POST['adm_ac_vasc1']:"NA";
$admvasc2 = (isset ($_POST['adm_ac_vasc2']))?$_POST['adm_ac_vasc2']:"NA";
//
$adm_sg = (isset ($_POST['adm_sg']))?$_POST['adm_sg']:"NA";
$adm_gastomie = (isset ($_POST['adm_gastomie']))?$_POST['adm_gastomie']:"NA";
$adm_stomie = (isset ($_POST['adm_stomie']))?$_POST['adm_stomie']:"NA";
$adm_su = (isset ($_POST['adm_su']))?$_POST['adm_su']:"NA";
$adm_ksp = (isset ($_POST['adm_ksp']))?$_POST['adm_ksp']:"NA";
$adm_trach = (isset ($_POST['adm_trach']))?$_POST['adm_trach']:"NA";
//
$adm_vm = (isset ($_POST['adm_vm']))?$_POST['adm_vm']:"NA";
$adm_vm_cont = (isset ($_POST['adm_vm_cont']))?$_POST['adm_vm_cont']:"NA";
$adm_vm_h = (isset ($_POST['adm_vm_h']))?$_POST['adm_vm_h']:"NA";

$adm_vni = (isset ($_POST['adm_vni']))?$_POST['adm_vni']:"NA";
$adm_vni_cont = (isset ($_POST['adm_vni_cont']))?$_POST['adm_vni_cont']:"NA";
$adm_vni_h = (isset ($_POST['adm_vni_h']))?$_POST['adm_vni_h']:"NA";
//
$adm_esc = (isset ($_POST['adm_esc']))?$_POST['adm_esc']:"NA";
$adm_date_esc = (isset ($_POST['adm_date_esc']))?$_POST['adm_date_esc']:"NA";
$adm_esc_stade = (isset ($_POST['adm_esc_stade']))?$_POST['adm_esc_stade']:"NA";
//
$adm_bmr = (isset ($_POST['adm_bmr']))?$_POST['adm_bmr']:"NA";
$adm_bmr_loc = (isset ($_POST['adm_bmr_loc']))?$_POST['adm_bmr_loc']:"NA";
$adm_bmr_germe = (isset ($_POST['adm_bmr_germe']))?$_POST['adm_bmr_germe']:"NA";
//
$adm_bhr = (isset ($_POST['adm_bhr']))?$_POST['adm_bhr']:"NA";
$adm_bhr_contact = (isset ($_POST['adm_bhr_contact']))?$_POST['adm_bhr_contact']:"NA";
$adm_clostridium = (isset ($_POST['adm_clostridium']))?$_POST['adm_clostridium']:"NA";
//
$adm_igs2 = (isset ($_POST['adm_igs2']))?$_POST['adm_igs2']:"NA";
$adm_sofa = (isset ($_POST['adm_sofa']))?$_POST['adm_sofa']:"NA";
$adm_poids = (isset ($_POST['adm_poids']))?$_POST['adm_poids']:"NA";
$adm_taille = (isset ($_POST['adm_taille']))?$_POST['adm_taille']:"NA";
$adm_prealb = (isset ($_POST['adm_prealb']))?$_POST['adm_prealb']:"NA";
$adm_alb = (isset ($_POST['adm_alb']))?$_POST['adm_alb']:"NA";
$adm_uree = (isset ($_POST['adm_uree']))?$_POST['adm_uree']:"NA";
$adm_creat = (isset ($_POST['adm_creat']))?$_POST['adm_creat']:"NA";
//
// = (isset ($_POST['']))?$_POST['']:"NA";
//
$req=$base-> prepare("
    UPDATE admission SET 
        adm_ac_vasc1= ?,
        adm_ac_vasc2= ?,
        adm_sg= ?,
        adm_gastomie= ?,
        adm_stomie= ?,
        adm_su= ?,
        adm_ksp= ?,
        adm_trach= ?,
        adm_vm= ?,
        adm_vm_cont= ?,
        adm_vm_h= ?,
        adm_vni= ?,
        adm_vni_cont= ?,
        adm_vni_h= ?,
        adm_esc= ?,
        adm_date_esc= ?,
        adm_esc_stade= ?,
        adm_bmr= ?,
        adm_bmr_loc= ?,
        adm_bmr_germe= ?,
        adm_bhr= ?,
        adm_bhr_contact= ?,
        adm_clostridium= ?,
        adm_igs2= ?,
        adm_sofa= ?,
        adm_poids= ?,
        adm_taille= ?,
        adm_prealb= ?,
        adm_alb= ?,
        adm_uree= ?,
        adm_creat= ?
    WHERE codepat='$codepat'
");
$req->execute(array(
    $admvasc1,$admvasc2,
    $adm_sg,$adm_gastomie,$adm_stomie,$adm_su,$adm_ksp,$adm_trach,
    $adm_vm,$adm_vm_cont,$adm_vm_h,
    $adm_vni,$adm_vni_cont,$adm_vni_h,
    $adm_esc,$adm_date_esc,$adm_esc_stade,
    $adm_bmr,$adm_bmr_loc,$adm_bmr_germe,
    $adm_bhr,$adm_bhr_contact,$adm_clostridium,
    $adm_igs2,$adm_sofa,$adm_poids,$adm_taille,$adm_prealb,$adm_alb,$adm_uree,$adm_creat,
));
if ($req===FALSE){
    $err=$base->errorInfo();
    echo $err[2];
}
//
header("Location:admission2.php");
ob_end_flush();
?>
<BR>