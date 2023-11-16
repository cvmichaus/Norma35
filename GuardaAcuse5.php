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

    $NombrePHP = $_POST["nombre"];
    $FechaPHP = $_POST["fechar"];
    $FirmaPHP = $_POST["firma"];
    $HoraGuardado1 = date("H:i:s");


     $sqlGuardaGuia1 = "{call sp_INC_NOM35_GuardarAcuseGuia5 (?,?,?,?,?)}";
          $parametros = array(
          array($Codigousuario, SQLSRV_PARAM_IN),
          array($NombrePHP, SQLSRV_PARAM_IN),
          array($FechaPHP, SQLSRV_PARAM_IN),
          array($FirmaPHP, SQLSRV_PARAM_IN),
          array($HoraGuardado1, SQLSRV_PARAM_IN) );

              $qryGuardaGuia1 = sqlsrv_query($con,$sqlGuardaGuia1,$parametros);
              if ( $qryGuardaGuia1 ){
                       
                        echo $res = 1;

                       }else
                       {
                         echo $res = 0;
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