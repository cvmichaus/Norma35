<?php

  date_default_timezone_set("America/Mexico_City");
  session_start();
  ini_set("display_errors",0);
  include "includes/bd.php";

  if (!$_SESSION['logued']) {
      header("location:index.php");
      exit();
  }
    /* DATOS DE SESSION*/
    $Codigousuario = $_SESSION['CodUsuario'];
    $PerifilUsuario = $_SESSION['Perfil'];
    $UsuarioPHP = $_SESSION['Usuario'];
    $NombreUsuario =$_SESSION['Nombre'];
    $CorreoUsuario = $_SESSION['CorreoUsu'];
    $ApPaternoPHP = $_SESSION['ApPaterno'];
    $ApMaternoPHP =  $_SESSION['ApMaterno'];

       $secc = "s1";
      /* DATOS DEL FORMULARIO */
      $archivo = $_FILES['archivo']['name'];
      $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $Tipo=$_FILES["archivo"]["type"]; ;
      $tipoarchivo = explode("/", $Tipo);
      /*OBTENEMOS LA EXTENSION DEL ARCHIVO PARA QUE SOLO SE SUBAN ARCHIVOS .CSV*/
      $entrada1 = explode( '.', $archivo);
      $extension = $entrada1[1];

        /* PREGUNTAMOS SI EL ARCHIVO A SUBIR ES DIFERENTE A .CSV SI ES ASI MANDA UNA ALERTA*/
      if($extension <> 'csv'){
              echo '<script language="javascript">alert(" Ese tipo de archivo no esta permitido solo archivo .csv , el archivo que intentas subir es de extension :  '.$extension.' ");</script>';
                  }else{
                    /* DE NO SER ASI SIGNIFICA QUE ES UN ARCHIVO CSV ASI QUE LO DEJAMOS PASAR Y GUARDAMOS EN LA BD Y DESPUES LO MANDAMOS A ARCHIVOS/BULK */

                        $sqlGuardaBulk = "{call sp_ActualizarBulk ( ? )}";
                        $parametros = array( array($archivo, SQLSRV_PARAM_IN));

                        $qryGuardaBulk = sqlsrv_query($con,$sqlGuardaBulk,$parametros);
                           if ( $qryGuardaBulk ){

                                  $target_dir = "archivos/bulk/";
                                  $target_file = $target_dir . basename($_FILES["archivo"]["name"]);
                                    
                                        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
                                        //echo  $alerta = "guardado";
                                        
                                         $doc = $archivo;
                                      $row = 1;
                                      $handle = fopen("archivos/bulk/$doc", "r"); //Coloca el nombre de tu archivo .csv que contiene los datos
                                      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { //Lee toda una linea completa, e ingresa los datos en el array 'data'
                                      $num = count($data); //Cuenta cuantos campos contiene la linea (el array 'data')
                                      $row++;
                                      $cadena = "INSERT INTO tbl_Usuarios (CodUsuario,CodVerificacion,Nombre,ApPaterno,ApMaterno,Perfil,Area,Status,Hora_Alta,Fecha_Alta,Correo,Pass) values(";  //Cambia los valores 'CampoX' por el nombre de tus campos de tu tabla y colócales los necesarios
                                      for ($c=0; $c < $num; $c++) { //Aquí va colocando los campos en la cadena, si aun no es el último campo, le agrega la coma (,) para separar los datos
                                      if ($c==($num-1))
                                      $cadena = $cadena."'".$data[$c] . "'";
                                      else
                                      $cadena = $cadena."'".$data[$c] . "',";
                                      }

                                      $cadena = $cadena.");"; //Termina de armar la cadena para poder ser ejecutada
                                      //echo $cadena."<br>";  //Muestra la cadena para ejecutarse

                                      $stmt1 = sqlsrv_query( $con, $cadena);

                                      }
                                      fclose($handle);

                                       echo  $alerta = "guardado";

                                        }else {
                                        echo  $alerta = "no se movio el archivo a bulks";
                                        }

                            } else {
                              if( ($errors = sqlsrv_errors() ) != null) {
                                foreach( $errors as $error ) {
                                echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                                echo "code: ".$error[ 'code']."<br />";
                                echo "message: ".$error[ 'message']."<br />";
                                echo  $alerta = "error no se guardo bulk";
                                }
                              }
                            }
             
                           }/* DE NO SER ASI SIGNIFICA QUE ES UN ARCHIVO CSV ASI QUE LO DEJAMOS PASAR Y GUARDAMOS EN LA BD Y DESPUES LO MANDAMOS A ARCHIVOS/BULK */
             

?>