<?php

  date_default_timezone_set("America/Mexico_City");
  session_start();
  ini_set("display_errors",0);
  include "includes/bd.php";

  if (!$_SESSION['logued']) {
      header("location:index.php");
      exit();
  }

    $Codigousuario = $_SESSION['CodUsuario'];
    $PerifilUsuario = $_SESSION['Perfil'];
    $UsuarioPHP = $_SESSION['Usuario'];
    $NombreUsuario =$_SESSION['Nombre'];
    $CorreoUsuario = $_SESSION['CorreoUsu'];
    $ApPaternoPHP = $_SESSION['ApPaterno'];
    $ApMaternoPHP =  $_SESSION['ApMaterno'];

 $secc = "s1";

   
    $codigoPH = $_POST["codigo"];
    $passPH = $_POST["pass"];
    $NombrePHP = $_POST["nombre"];
    $apPPH = $_POST["apP"];
    $apMPH = $_POST["apM"];
    $perfilPH = $_POST["perfil"];
    $areaPH = $_POST["usu_area"];
    $EmpresaPHP =  $_POST['empresa'];

    $HoraGuardado1 = date("H:i:s");



     $sqlGuardaUsuario = "{call sp_INC_NOM35_GuardarUsuario (?,?,?,?,?,?,?,?,?)}";
          $parametros = array(
          array($passPH, SQLSRV_PARAM_IN),
          array($NombrePHP, SQLSRV_PARAM_IN),
          array($apPPH, SQLSRV_PARAM_IN),
          array($apMPH, SQLSRV_PARAM_IN),
          array($perfilPH, SQLSRV_PARAM_IN),
          array($areaPH, SQLSRV_PARAM_IN),
          array($HoraGuardado1, SQLSRV_PARAM_IN),
          array($codigoPH, SQLSRV_PARAM_IN),
          array($EmpresaPHP, SQLSRV_PARAM_IN));

              $qryGuardaUsuario = sqlsrv_query($con,$sqlGuardaUsuario,$parametros);
              if ( $qryGuardaUsuario ){
                
                                 echo $res = 1;

                            }
                              if( $qryGuardaUsuario === false ) {
                              if( ($errors = sqlsrv_errors() ) != null) {
                              foreach( $errors as $error ) {
                              echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                              echo "code: ".$error[ 'code']."<br />";
                              echo "message: ".$error[ 'message']."<br />";
                              echo $res = 0;
                              }
                              }
                              }
             
                         
                       

/*
                       if( $qryGuardaGuia5 === false ) {
                              if( ($errors = sqlsrv_errors() ) != null) {
                              foreach( $errors as $error ) {
                              echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                              echo "code: ".$error[ 'code']."<br />";
                              echo "message: ".$error[ 'message']."<br />";
                              echo $res = 0;
                              }
                              }
                              }
             }
*/

?>