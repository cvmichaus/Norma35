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

    $HoraGuardado = date("H:i:s");


  if($_POST['accion'] == 'procesaguia1'){

   //echo"<script>alert('Entro a procesaguia1 ')</script>";

              $p1 = $_POST ["p1"];  
              $p2 = $_POST ["p2"]; 
              $p3 = $_POST ["p3"]; 
              $p4 = $_POST ["p4"]; 
              $p5 = $_POST ["p5"]; 
              $p6 = $_POST ["p6"]; 
              $p7 = $_POST ["p7"]; 
              $p8 = $_POST ["p8"]; 
              $p9 = $_POST ["p9"]; 
              $p10 = $_POST ["p10"];  
              $p11 = $_POST ["p11"];  
              $p12 = $_POST ["p12"];  
              $p13 = $_POST ["p13"];  
              $p14 = $_POST ["p14"];  
              $p15 = $_POST ["p15"];  
              $p16 = $_POST ["p16"];  
              $p17 = $_POST ["p17"];  
              $p18 = $_POST ["p18"];  
              $p19 = $_POST ["p19"];  
              $p20 = $_POST ["p20"]; 
              $continuarForm = $_POST ["continuar"]; 
              $atencionForm = $_POST ["atencionclinica"]; 
              $codusuarioForm = $_POST ["codusuariophp"]; 
              $HoraGuardado1 = date("H:i:s");

              $sqlGuardaGuia1 = "{call sp_INC_NOM35_GuardarGuia1 (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
          $parametros = array(
          array($p1, SQLSRV_PARAM_IN),
          array($p2, SQLSRV_PARAM_IN),
          array($p3, SQLSRV_PARAM_IN),
          array($p4, SQLSRV_PARAM_IN),
          array($p5, SQLSRV_PARAM_IN),
          array($p6, SQLSRV_PARAM_IN),
          array($p7, SQLSRV_PARAM_IN),
          array($p8, SQLSRV_PARAM_IN),
          array($p9, SQLSRV_PARAM_IN),
          array($p10, SQLSRV_PARAM_IN),
          array($p11, SQLSRV_PARAM_IN),
          array($p12, SQLSRV_PARAM_IN),
          array($p13, SQLSRV_PARAM_IN),
          array($p14, SQLSRV_PARAM_IN),
          array($p15, SQLSRV_PARAM_IN),
          array($p16, SQLSRV_PARAM_IN),
          array($p17, SQLSRV_PARAM_IN),
          array($p18, SQLSRV_PARAM_IN),
          array($p19, SQLSRV_PARAM_IN),
          array($p20, SQLSRV_PARAM_IN),
          array($atencionForm, SQLSRV_PARAM_IN),
          array($codusuarioForm, SQLSRV_PARAM_IN),
          array($HoraGuardado1, SQLSRV_PARAM_IN));

              $qryGuardaGuia1 = sqlsrv_query($con,$sqlGuardaGuia1,$parametros);
              if ( $qryGuardaGuia1 ){
                       
                      // echo"<script>alert('se cumplio el QRY  ')</script>";
                                 
                                  header("Location: fin1.php?codUsu=".$codusuarioForm."");
                               


               }else{ // echo"<script>alert('No se cumplio el QRY ')</script>"; 

                              if( $qryGuardaGuia1 === false ) {
                              if( ($errors = sqlsrv_errors() ) != null) {
                              foreach( $errors as $error ) {
                              echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                              echo "code: ".$error[ 'code']."<br />";
                              echo "message: ".$error[ 'message']."<br />";
                              }
                              }
                              }
             }

  }

    if($_POST['accion'] == 'procesaguia5'){

   //echo"<script>alert('Entro a procesaguia5 ')</script>";

              $p1 = $_POST ["p1"];  
              $p2 = $_POST ["p2"]; 
              $p3 = $_POST ["p3"]; 
              $p4 = $_POST ["p4"]; 
              $p5 = $_POST ["p5"]; 
              $p6 = $_POST ["p6"]; 
              $p7 = $_POST ["p7"]; 
              $p8 = $_POST ["p8"]; 
              $p9 = $_POST ["p9"]; 
              $p10 = $_POST ["p10"];  
              $p11 = $_POST ["p11"];  
              $p12 = $_POST ["p12"];  
              $p13 = $_POST ["p13"];  
              $p14 = $_POST ["p14"];  
              $codusuarioForm = $_POST ["codusuariophp"]; 
              $continuarForm = $_POST ["continuar"]; 

              $sqlGuardaGuia5 = "{call sp_INC_NOM35_GuardarGuia5  (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
          $parametros = array(
          array($p1, SQLSRV_PARAM_IN),
          array($p2, SQLSRV_PARAM_IN),
          array($p3, SQLSRV_PARAM_IN),
          array($p4, SQLSRV_PARAM_IN),
          array($p5, SQLSRV_PARAM_IN),
          array($p6, SQLSRV_PARAM_IN),
          array($p7, SQLSRV_PARAM_IN),
          array($p8, SQLSRV_PARAM_IN),
          array($p9, SQLSRV_PARAM_IN),
          array($p10, SQLSRV_PARAM_IN),
          array($p11, SQLSRV_PARAM_IN),
          array($p12, SQLSRV_PARAM_IN),
          array($p13, SQLSRV_PARAM_IN),
          array($p14, SQLSRV_PARAM_IN),
          array($codusuarioForm, SQLSRV_PARAM_IN),
          array($HoraGuardado, SQLSRV_PARAM_IN),
          array($continuarForm, SQLSRV_PARAM_IN)  
                   
          );

              $qryGuardaGuia5 = sqlsrv_query($con,$sqlGuardaGuia5,$parametros);
              if ( $qryGuardaGuia5 ){
                                  header("Location: fin5.php?codUsu=".$codusuarioForm."");

               }else{ // echo"<script>alert('No se cumplio el QRY5 ')</script>"; 

                              if( $qryGuardaGuia5 === false ) {
                              if( ($errors = sqlsrv_errors() ) != null) {
                              foreach( $errors as $error ) {
                              echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                              echo "code: ".$error[ 'code']."<br />";
                              echo "message: ".$error[ 'message']."<br />";
                              }
                              }
                              }
             }

  }

    if($_POST['accion'] == 'procesaguia2'){

   //echo"<script>alert('Entro a procesaguia5 ')</script>";

              $p1 = $_POST ["p1"];  
              $p2 = $_POST ["p2"]; 
              $p3 = $_POST ["p3"]; 
              $p4 = $_POST ["p4"]; 
              $p5 = $_POST ["p5"]; 
              $p6 = $_POST ["p6"]; 
              $p7 = $_POST ["p7"]; 
              $p8 = $_POST ["p8"]; 
              $p9 = $_POST ["p9"]; 
              $p10 = $_POST ["p10"];  
              $p11 = $_POST ["p11"];  
              $p12 = $_POST ["p12"];  
              $p13 = $_POST ["p13"];  
              $p14 = $_POST ["p14"];  
              $p15 = $_POST ["p15"];  
              $p16 = $_POST ["p16"];  
              $p17 = $_POST ["p17"];  
              $p18 = $_POST ["p18"];  
              $p19 = $_POST ["p19"];  
              $p20 = $_POST ["p20"]; 
              $p21 = $_POST ["p21"]; 
              $p22 = $_POST ["p22"]; 
              $p23 = $_POST ["p23"]; 
              $p24 = $_POST ["p24"]; 
              $p25 = $_POST ["p25"]; 
              $p26 = $_POST ["p26"]; 
              $p27 = $_POST ["p27"]; 
              $p28 = $_POST ["p28"]; 
              $p29 = $_POST ["p29"]; 
              $p30 = $_POST ["p30"]; 
              $p31 = $_POST ["p31"]; 
              $p32 = $_POST ["p32"]; 
              $p33 = $_POST ["p33"]; 
              $p34 = $_POST ["p34"]; 
              $p35 = $_POST ["p35"]; 
              $p36 = $_POST ["p36"]; 
              $p37 = $_POST ["p37"]; 
              $p38 = $_POST ["p38"]; 
              $p39 = $_POST ["p39"]; 
              $p40 = $_POST ["p40"]; 
              $patencion = $_POST ["atencion"]; 
              $p41 = $_POST ["p41"]; 
              $p42 = $_POST ["p42"]; 
              $p43 = $_POST ["p43"]; 
              $pjefe = $_POST ["jefe"]; 
              $p44 = $_POST ["p44"]; 
              $p45 = $_POST ["p45"]; 
              $p46 = $_POST ["p46"]; 
              $CdomPHP = $_POST ["Cdom"]; 
              $CcatPHP = $_POST ["Ccat"]; 
              $CfinalPHP = $_POST ["Cfinal"]; 
              $continuarForm = $_POST ["continuar"]; 
              $codusuarioForm = $_POST ["codusuariophp"]; 
              $HoraGuardado2 = date("H:i:s");
              $CRes = $_POST ["CRes"]; 

              $sqlGuardaGuia2 = "{call sp_INC_NOM35_GuardarGuia2 (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
          $parametros = array(
          array($p1, SQLSRV_PARAM_IN),
          array($p2, SQLSRV_PARAM_IN),
          array($p3, SQLSRV_PARAM_IN),
          array($p4, SQLSRV_PARAM_IN),
          array($p5, SQLSRV_PARAM_IN),
          array($p6, SQLSRV_PARAM_IN),
          array($p7, SQLSRV_PARAM_IN),
          array($p8, SQLSRV_PARAM_IN),
          array($p9, SQLSRV_PARAM_IN),
          array($p10, SQLSRV_PARAM_IN),
          array($p11, SQLSRV_PARAM_IN),
          array($p12, SQLSRV_PARAM_IN),
          array($p13, SQLSRV_PARAM_IN),
          array($p14, SQLSRV_PARAM_IN),
          array($p15, SQLSRV_PARAM_IN),
          array($p16, SQLSRV_PARAM_IN),
          array($p17, SQLSRV_PARAM_IN),
          array($p18, SQLSRV_PARAM_IN),
          array($p19, SQLSRV_PARAM_IN),
          array($p20, SQLSRV_PARAM_IN),
          array($p21, SQLSRV_PARAM_IN),
          array($p22, SQLSRV_PARAM_IN),
          array($p23, SQLSRV_PARAM_IN),
          array($p24, SQLSRV_PARAM_IN),
          array($p25, SQLSRV_PARAM_IN),
          array($p26, SQLSRV_PARAM_IN),
          array($p27, SQLSRV_PARAM_IN),
          array($p28, SQLSRV_PARAM_IN),
          array($p29, SQLSRV_PARAM_IN),
          array($p30, SQLSRV_PARAM_IN),
          array($p31, SQLSRV_PARAM_IN),
          array($p32, SQLSRV_PARAM_IN),
          array($p33, SQLSRV_PARAM_IN),
          array($p34, SQLSRV_PARAM_IN),
          array($p35, SQLSRV_PARAM_IN),
          array($p36, SQLSRV_PARAM_IN),
          array($p37, SQLSRV_PARAM_IN),
          array($p38, SQLSRV_PARAM_IN),
          array($p39, SQLSRV_PARAM_IN),
          array($p40, SQLSRV_PARAM_IN),
          array($patencion, SQLSRV_PARAM_IN),
          array($p41, SQLSRV_PARAM_IN),
          array($p42, SQLSRV_PARAM_IN),
          array($p43, SQLSRV_PARAM_IN),
          array($pjefe, SQLSRV_PARAM_IN),
          array($p44, SQLSRV_PARAM_IN),
          array($p45, SQLSRV_PARAM_IN),
          array($p46, SQLSRV_PARAM_IN),
          array($CdomPHP, SQLSRV_PARAM_IN),
          array($CcatPHP, SQLSRV_PARAM_IN),
          array($CfinalPHP, SQLSRV_PARAM_IN),
          array($codusuarioForm, SQLSRV_PARAM_IN),
          array($HoraGuardado2, SQLSRV_PARAM_IN),
          array($CRes, SQLSRV_PARAM_IN)                   
          );

              $qryGuardaGuia2 = sqlsrv_query($con,$sqlGuardaGuia2,$parametros);
              if ( $qryGuardaGuia2 ){
                       
                       //echo"<script>alert('se cumplio el QRY5 ')</script>";

                                     header("Location: fin2.php");
                                

               }else{ // echo"<script>alert('No se cumplio el QRY5 ')</script>"; 

                              if( $qryGuardaGuia2 === false ) {
                              if( ($errors = sqlsrv_errors() ) != null) {
                              foreach( $errors as $error ) {
                              echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                              echo "code: ".$error[ 'code']."<br />";
                              echo "message: ".$error[ 'message']."<br />";
                              }
                              }
                              }
             }

  }


   if($_POST['accion'] == 'procesaguia3'){

   //echo"<script>alert('Entro a procesaguia5 ')</script>";

              $p1 = $_POST ["p1"];  
              $p2 = $_POST ["p2"]; 
              $p3 = $_POST ["p3"]; 
              $p4 = $_POST ["p4"]; 
              $p5 = $_POST ["p5"]; 
              $p6 = $_POST ["p6"]; 
              $p7 = $_POST ["p7"]; 
              $p8 = $_POST ["p8"]; 
              $p9 = $_POST ["p9"]; 
              $p10 = $_POST ["p10"];  
              $p11 = $_POST ["p11"];  
              $p12 = $_POST ["p12"];  
              $p13 = $_POST ["p13"];  
              $p14 = $_POST ["p14"];  
              $p15 = $_POST ["p15"];  
              $p16 = $_POST ["p16"];  
              $p17 = $_POST ["p17"];  
              $p18 = $_POST ["p18"];  
              $p19 = $_POST ["p19"];  
              $p20 = $_POST ["p20"]; 
              $p21 = $_POST ["p21"]; 
              $p22 = $_POST ["p22"]; 
              $p23 = $_POST ["p23"]; 
              $p24 = $_POST ["p24"]; 
              $p25 = $_POST ["p25"]; 
              $p26 = $_POST ["p26"]; 
              $p27 = $_POST ["p27"]; 
              $p28 = $_POST ["p28"]; 
              $p29 = $_POST ["p29"]; 
              $p30 = $_POST ["p30"]; 
              $p31 = $_POST ["p31"]; 
              $p32 = $_POST ["p32"]; 
              $p33 = $_POST ["p33"]; 
              $p34 = $_POST ["p34"]; 
              $p35 = $_POST ["p35"]; 
              $p36 = $_POST ["p36"]; 
              $p37 = $_POST ["p37"]; 
              $p38 = $_POST ["p38"]; 
              $p39 = $_POST ["p39"]; 
              $p40 = $_POST ["p40"]; 
              $p41 = $_POST ["p41"]; 
              $p42 = $_POST ["p42"]; 
              $p43 = $_POST ["p43"]; 
              $p44 = $_POST ["p44"]; 
              $p45 = $_POST ["p45"]; 
              $p46 = $_POST ["p46"]; 
              $p47 = $_POST ["p47"]; 
              $p48 = $_POST ["p48"]; 
              $p49 = $_POST ["p49"]; 
              $p50 = $_POST ["p50"];
              $p51 = $_POST ["p51"]; 
              $p52 = $_POST ["p52"]; 
              $p53 = $_POST ["p53"]; 
              $p54 = $_POST ["p54"]; 
              $p55 = $_POST ["p55"]; 
              $p56 = $_POST ["p56"]; 
              $p57 = $_POST ["p57"]; 
              $p58 = $_POST ["p58"];
              $p59 = $_POST ["p59"]; 
              $p60 = $_POST ["p60"]; 
              $p61 = $_POST ["p61"]; 
              $p62 = $_POST ["p62"]; 
              $p63 = $_POST ["p63"]; 
              $p64 = $_POST ["p64"]; 
              $pextra65 = $_POST ["pextra65"]; 
              $p65 = $_POST ["p65"]; 
              $p66 = $_POST ["p66"]; 
              $p67 = $_POST ["p67"];
              $p65 = $_POST ["p68"];  
              $pextra69 = $_POST ["pextra69"];
              $p69 = $_POST ["p69"]; 
              $p70 = $_POST ["p70"]; 
              $p71 = $_POST ["p71"]; 
              $p72 = $_POST ["p72"]; 
              $CdomPHP = $_POST ["Cdom"]; 
              $CcatPHP = $_POST ["Ccat"]; 
              $CfinalPHP = $_POST ["Cfinal"]; 
              $continuarForm = $_POST ["continuar"]; 
              $codusuarioForm = $_POST ["codusuariophp"]; 
              $HoraGuardado2 = date("H:i:s");
              $CRes = $_POST ["CRes"]; 

              $sqlGuardaGuia3 = "{call sp_INC_NOM35_GuardarGuia3 (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
          $parametros = array(
          array($p1, SQLSRV_PARAM_IN),
          array($p2, SQLSRV_PARAM_IN),
          array($p3, SQLSRV_PARAM_IN),
          array($p4, SQLSRV_PARAM_IN),
          array($p5, SQLSRV_PARAM_IN),
          array($p6, SQLSRV_PARAM_IN),
          array($p7, SQLSRV_PARAM_IN),
          array($p8, SQLSRV_PARAM_IN),
          array($p9, SQLSRV_PARAM_IN),
          array($p10, SQLSRV_PARAM_IN),
          array($p11, SQLSRV_PARAM_IN),
          array($p12, SQLSRV_PARAM_IN),
          array($p13, SQLSRV_PARAM_IN),
          array($p14, SQLSRV_PARAM_IN),
          array($p15, SQLSRV_PARAM_IN),
          array($p16, SQLSRV_PARAM_IN),
          array($p17, SQLSRV_PARAM_IN),
          array($p18, SQLSRV_PARAM_IN),
          array($p19, SQLSRV_PARAM_IN),
          array($p20, SQLSRV_PARAM_IN),
          array($p21, SQLSRV_PARAM_IN),
          array($p22, SQLSRV_PARAM_IN),
          array($p23, SQLSRV_PARAM_IN),
          array($p24, SQLSRV_PARAM_IN),
          array($p25, SQLSRV_PARAM_IN),
          array($p26, SQLSRV_PARAM_IN),
          array($p27, SQLSRV_PARAM_IN),
          array($p28, SQLSRV_PARAM_IN),
          array($p29, SQLSRV_PARAM_IN),
          array($p30, SQLSRV_PARAM_IN),
          array($p31, SQLSRV_PARAM_IN),
          array($p32, SQLSRV_PARAM_IN),
          array($p33, SQLSRV_PARAM_IN),
          array($p34, SQLSRV_PARAM_IN),
          array($p35, SQLSRV_PARAM_IN),
          array($p36, SQLSRV_PARAM_IN),
          array($p37, SQLSRV_PARAM_IN),
          array($p38, SQLSRV_PARAM_IN),
          array($p39, SQLSRV_PARAM_IN),
          array($p40, SQLSRV_PARAM_IN),
          array($p41, SQLSRV_PARAM_IN),
          array($p42, SQLSRV_PARAM_IN),
          array($p43, SQLSRV_PARAM_IN),
          array($p44, SQLSRV_PARAM_IN),
          array($p45, SQLSRV_PARAM_IN),
          array($p46, SQLSRV_PARAM_IN),
          array($p47, SQLSRV_PARAM_IN),
          array($p48, SQLSRV_PARAM_IN),
          array($p49, SQLSRV_PARAM_IN),
          array($p50, SQLSRV_PARAM_IN),
          array($p51, SQLSRV_PARAM_IN),
          array($p52, SQLSRV_PARAM_IN),
          array($p53, SQLSRV_PARAM_IN),
          array($p54, SQLSRV_PARAM_IN),
          array($p55, SQLSRV_PARAM_IN),
          array($p56, SQLSRV_PARAM_IN),
          array($p57, SQLSRV_PARAM_IN),
          array($p58, SQLSRV_PARAM_IN),
          array($p59, SQLSRV_PARAM_IN),
          array($p60, SQLSRV_PARAM_IN),
          array($p61, SQLSRV_PARAM_IN),
          array($p62, SQLSRV_PARAM_IN),
          array($p63, SQLSRV_PARAM_IN),
          array($p64, SQLSRV_PARAM_IN), 
          array($pextra65, SQLSRV_PARAM_IN),
          array($p65, SQLSRV_PARAM_IN),
          array($p66, SQLSRV_PARAM_IN),
          array($p67, SQLSRV_PARAM_IN),
          array($p68, SQLSRV_PARAM_IN),
          array($pextra69, SQLSRV_PARAM_IN),
          array($p69, SQLSRV_PARAM_IN),
          array($p70, SQLSRV_PARAM_IN),
          array($p71, SQLSRV_PARAM_IN),
          array($p72, SQLSRV_PARAM_IN),
          array($CdomPHP, SQLSRV_PARAM_IN),
          array($CcatPHP, SQLSRV_PARAM_IN),
          array($CfinalPHP, SQLSRV_PARAM_IN),
          array($codusuarioForm, SQLSRV_PARAM_IN),
          array($HoraGuardado2, SQLSRV_PARAM_IN),
          array($CRes, SQLSRV_PARAM_IN)                   
          );

              $qryGuardaGuia3 = sqlsrv_query($con,$sqlGuardaGuia3,$parametros);
              if ( $qryGuardaGuia3 ){
                       
                       echo"<script>alert('se cumplio el QRY5 ')</script>";

                                     header("Location: fin3.php");
                                

               }else{  echo"<script>alert('No se cumplio el QRY5 ')</script>"; 

                              if( $qryGuardaGuia3 === false ) {
                              if( ($errors = sqlsrv_errors() ) != null) {
                              foreach( $errors as $error ) {
                              echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                              echo "code: ".$error[ 'code']."<br />";
                              echo "message: ".$error[ 'message']."<br />";
                              }
                              }
                              }
             }

  }


?>