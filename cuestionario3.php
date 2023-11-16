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


    $secc = "guia5";

                    $sql0 = "{call sp_INC_NOM35_ContestaronGuia2 (?)}";
                    $param0 = array(array($Codigousuario, SQLSRV_PARAM_IN));
                    $qry0 = sqlsrv_query($con,$sql0,$param0);
                    $data0 = sqlsrv_fetch_object($qry0);
                    $ContestoGuia2PHP = $data0->ContestoGuia2; 

                    $sql110 = "{call sp_INC_NOM35_ContestaronGuia1 (?)}";
                    $param110 = array(array($Codigousuario, SQLSRV_PARAM_IN));
                    $qry110 = sqlsrv_query($con,$sql110,$param110);
                    $data110 = sqlsrv_fetch_object($qry110);
                    $ContestoGuia1PHP = $data110->ContestoGuia1; 

                    $sql005 = "{call sp_INC_NOM35_ContestaronGuia5 (?)}";
                    $param005 = array(array($Codigousuario, SQLSRV_PARAM_IN));
                    $qry005 = sqlsrv_query($con,$sql005,$param005);
                    $data005 = sqlsrv_fetch_object($qry005);
                    $ContestoGuia5PHP = $data005->ContestoGuia5; 


                    $sql03 = "{call sp_INC_NOM35_ContestaronGuia3 (?)}";
                    $param03 = array(array($Codigousuario, SQLSRV_PARAM_IN));
                    $qry03 = sqlsrv_query($con,$sql03,$param03);
                    $data03 = sqlsrv_fetch_object($qry03);
                    $ContestoGuia3PHP = $data03->ContestoGuia3;             



                      if($data03->ContestoGuia3 == 1){

                             header("Location: fin3.php");    

                              
                      }else{

                         $sql01 = "{call sp_INC_NOM35_ObtenerDatosGuia3 (?)}";
                                $param01 = array(array($Codigousuario, SQLSRV_PARAM_IN));
                                $qry01 = sqlsrv_query($con,$sql01,$param01);
                                $data01 = sqlsrv_fetch_object($qry01);

                                    $Continua = $data01->Continua;

                               // echo"<script>alert('No ha contestado la Guia 1')</script>";
                      }

  $secc = "s1";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>NORMA 35 </title>
    <!-- Bootstrap Core CSS -->
    <link href="pixel-html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="pixel-html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="pixel-html/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">

    <link href="pixel-html/css/colors/blue.css" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

     <script src="scripts3.js"></script>


</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b>
                    <img src="plugins/images/pixeladmin-logo.png" alt="home" />
                </b><span class="hidden-xs"><img src="plugins/images/pixeladmin-text.png" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                   
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                       
                        <!-- /.dropdown-messages -->
                    </li>
                  
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo  $NombreUsuario; ?></b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                          
                            <li><a href="#"><i class="fa fa-power-off"></i> Salir</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
        
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                       
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> <?php echo $Codigousuario; echo "-"; echo  $NombreUsuario; ?> <span class="fa arrow"></span></span>
                        </a>
                       <ul class="nav" id="side-menu">
                
                    
                   
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Salir</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">-Menu Principal</li>
                    <li><a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Inicio</span></a></li>
                    
                    <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Encuesta <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)" class="waves-effect">Norma 35<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <?php
                                        if($ContestoGuia1PHP==1){
                                            ?>
                                            <li> <a href="#">Guia I Contestada</a></li>
                                            <?php
                                        }
                                        else{
                                             ?>
                                               <li> <a href="sistema.php">Guia I</a></li> 
                                            <?php
                                        }
                                    ?>
                                     <?php
                                        /*
                                        ContestoGuia5PHP
                                         ContestoGuia2PHP
                                         */
                                        if($ContestoGuia5PHP==1){
                                            ?>
                                             <li> <a href="#">Guia V Contestada</a></li>
                                            <?php
                                        }
                                        else{
                                             ?>
                                                 <li> <a href="cuestionario5.php">Guia V</a></li>
                                            <?php
                                        }
                                     ?>   
                                         <?php
                                        /*
                                        ContestoGuia5PHP
                                         ContestoGuia2PHP
                                         */
                                        if($ContestoGuia2PHP==1){
                                            ?>
                                             <li> <a href="cuestionario2.php">Guia II Contestada</a></li>
                                            <?php
                                        }
                                        else{
                                             ?>
                                                 <li> <a href="cuestionario2.php">Guia II</a></li>
                                            <?php
                                        }
                                     ?>  

                                          <?php
                                       
                                        if($ContestoGuia3PHP==1){
                                            ?>
                                             <li> <a href="cuestionario3.php">Guia III Contestada</a></li>
                                            <?php
                                        }
                                        else{
                                             ?>
                                                 <li> <a href="cuestionario3.php">Guia III</a></li>
                                            <?php
                                        }
                                     ?>  
                                  
                                   
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
           
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
              
                <!-- /.row -->
                <div class="row">

                     <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-success myadmin-alert-top alerttop"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish. <a href="#" class="closed">&times;</a> </div>

                   
                                   <div class="col-md-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Guía de Referencia III - CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL Y EVALUAR EL ENTORNO ORGANIZACIONAL EN LOS CENTROS DE TRABAJO
</h3>
                            <p class="text-muted m-b-30 font-13">  </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                   <form action="acciones.php" method="post">
                                    <input type="hidden" name="accion" id="accion" value="procesaguia3">

                                        <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.</H4>


                                        <div class="form-group">
                                            <label for="exampleInputuname">1. El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                <select  type="text" name="p1" id="p1"  class="form-control"  class="formulario_select"> 
                                                <option value="">::SELECCIONAR::</option>
                                                <option value="0"> SIEMPRE </option>
                                                <option value="1"> CASI SIEMPRE</option>
                                                <option value="2"> ALGUNAS VECES</option>
                                                <option value="3"> CASI NUNCA</option>
                                                <option value="4"> NUNCA</option>
                                                </select>   
                                               
                                            </div>
                                        </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">2. Mi trabajo me exige hacer mucho esfuerzo físico</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p2" id="p2" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">3. Me preocupa sufrir un accidente en mi trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p3" id="p3" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">4. Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p4" id="p4" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">5.Considero que las actividades que realizo sonpeligrosas</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p5" id="p5" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.</H4>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">6. Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p6" id="p6" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>
                                    </div>
                                    </div>


                                     <div class="form-group">
                                    <label for="exampleInputEmail1">7. Por la cantidad de trabajo que tengo debo trabajar sinparar</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p7" id="p7" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>



                                    <div class="form-group">
                                    <label for="exampleInputEmail1">8. Considero que es necesario mantener un ritmo de trabajo acelerado</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p8" id="p8" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                                       <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.</H4>



                                    <div class="form-group">
                                    <label for="exampleInputEmail1">9. Mi trabajo exige que esté muy concentrado</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p9" id="p9" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>
                                    </div>
                                    </div>
                                       
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">10. Mi trabajo requiere que memorice mucha información</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p10" id="p10" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">11. En mi trabajo tengo que tomar decisiones difíciles muy rápido</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p11" id="p11" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">12. Mi trabajo exige que atienda varios asuntos al mismo tiempo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p12" id="p12" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                       <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</H4>



                                    <div class="form-group">
                                    <label for="exampleInputEmail1">13. En mi trabajo soy responsable de cosas de mucho valor</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p13" id="p13" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>



                                    <div class="form-group">
                                    <label for="exampleInputEmail1">14. Respondo ante mi jefe por los resultados de toda mi área de trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p14" id="p14" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">15. En el trabajo me dan órdenes contradictorias</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p15" id="p15" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">16. Considero que en mi trabajo me piden hacer cosas innecesarias. </label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p16" id="p16" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>     
                                    </div>
                                    </div>


                                     <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con su jornada de trabajo.</H4>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">17. Trabajo horas extras más de tres veces a la semana</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p17" id="p17" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                                    

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">18.Mi trabajo me exige laborar en días de descanso,festivos o fines de semana </label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p18" id="p18" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">19. Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales </label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p19" id="p19" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">20. Debo atender asuntos de trabajo cuando estoy en casa </label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p20" id="p20" > 
                                  <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">21. Pienso en las actividades familiares o personales cuando estoy en mi trabajo </label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p21" id="p21" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">22. Pienso que mis responsabilidades familiares afectan mi trabajo </label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p22" id="p22" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>     
                                    </div>
                                    </div>



                                    <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</H4>



                                    <div class="form-group">
                                    <label for="exampleInputEmail1">23. Mi trabajo permite que desarrolle nuevas habilidades</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p23" id="p23" > 
                                 <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                                     <div class="form-group">
                                    <label for="exampleInputEmail1">24. En mi trabajo puedo aspirar a un mejor puesto</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p24" id="p24" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">25. Durante mi jornada de trabajo puedo tomar pausas cuando las necesito</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p25" id="p25" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>     
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">26. Puedo decidir cuánto trabajo realizo durante la jornada laboral</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p26" id="p26" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">27. Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p27" id="p27" > 
                                  <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                               

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">28.Puedo cambiar el orden de las actividades que realizo en mi trabajo.</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p28" id="p28" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                                         <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados).</H4>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">29. Los cambios que se presentan en mi trabajo dificultan mi labor.</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p29" id="p29" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">30. Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p30" id="p30" > 
                              <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                        <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.</H4>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">31. Me informan con claridad cuáles son mis funciones</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p31" id="p31" > 
                         <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">32. Me explican claramente los resultados que debo obtener en mi trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p32" id="p32" > 
                                 <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">33. Me explican claramente los objetivos de mi trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p33" id="p33" > 
                              <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">34. Me informan con quién puedo resolver problemas oasuntos de trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p34" id="p34" > 
                                 <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">35. Me permiten asistir a capacitaciones relacionadas conmi trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p35" id="p35" > 
                               <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">36. Recibo capacitación útil para hacer mi trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p36" id="p36" > 
                                  <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                    </div>
                                    </div>
                                    </div>
                                    </div>


                                    <div class="col-md-6" >
                                    <div class="white-box">
                                    <h3 class="box-title m-b-0"> </h3>
                                    <p class="text-muted m-b-30 font-13">  </p>
                                    <div class="row">
                                    <div class="col-sm-12 col-xs-12">

                                    <BR><BR>

                                      <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto</H4>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">37. Mi jefe ayuda a organizar mejor el trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p37" id="p37" > 
                                  <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">38. Mi jefe tiene en cuenta mis puntos de vista y opiniones</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p38" id="p38" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">39. Mi jefe me comunica a tiempo la informaciónrelacionada con el trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p39" id="p39" > 
                                <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">40. La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p40" id="p40" > 
                               <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                  
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">41. Mi jefe ayuda a solucionar los problemas que sepresentan en el trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p41" id="p41" > 
                                   <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                            <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes se refieren a las relaciones con sus compañeros.</H4>

                                  


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">42. Puedo confiar en mis compañeros de trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p42" id="p42" > 
                                  <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">43. Entre compañeros solucionamos los problemas de trabajo de forma respetuosa</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p43" id="p43" > 
                                 <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>  
                                    </div>
                                    </div>


                                        <div class="form-group">
                                        <label for="exampleInputEmail1">44. En mi trabajo me hacen sentir parte del grupo</label>
                                        <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-email"></i></div>
                                        <select  class="form-control"  type="text" name="p44" id="p44" > 
                                  <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                        </select>    
                                        </div>
                                        </div>


                                        <div class="form-group">
                                        <label for="exampleInputEmail1">45. Cuando tenemos que realizar trabajo de equipo los compañeros colaboran</label>
                                        <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-email"></i></div>
                                        <select  class="form-control"  type="text" name="p45" id="p45" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                        </select>  
                                        </div>
                                        </div>

                                            <div class="form-group">
                                            <label for="exampleInputEmail1">46. Mis compañeros de trabajo me ayudan cuando tengo dificultades</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p46" id="p46" onchange="verificar();verificar2();"> 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                               <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el trabajo, el reconocimiento, el sentido de pertenencia y la estabilidad que le ofrece su trabajo.</H4>


            

                                             <div class="form-group">
                                            <label for="exampleInputEmail1">47. Me informan sobre lo que hago bien en mi trabajo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p47" id="p47" onchange="verificar();verificar2();"> 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">48. La forma como evalúan mi trabajo en mi centro detrabajo me ayuda a mejorar mi desempeño</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p48" id="p48" onchange="verificar();verificar2();"> 
                                       <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">49. En mi centro de trabajo me pagan a tiempo mi salario</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p49" id="p49" onchange="verificar();verificar2();"> 
                                 <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">50. El pago que recibo es el que merezco por el trabajo que realizo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p50" id="p50" onchange="verificar();verificar2();"> 
                                            <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">51. Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen </label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p51" id="p51" onchange="verificar();verificar2();"> 
                                      <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">52. Las personas que hacen bien el trabajo pueden crecer laboralmente</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p52" id="p52" onchange="verificar();verificar2();"> 
                                        <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">53. Considero que mi trabajo es estable</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p53" id="p53" onchange="verificar();verificar2();"> 
                                      <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">54. En mi trabajo existe continua rotación de personal</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p54" id="p54" onchange="verificar();verificar2();"> 
                                            <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">55. Siento orgullo de laborar en este centro de trabajo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p55" id="p55" onchange="verificar();verificar2();"> 
                               <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">56. Me siento comprometido con mi trabajo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p56" id="p56" onchange="verificar();verificar2();"> 
                                      <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                               <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con actos de violencia laboral (malos tratos, acoso, hostigamiento, acoso psicológico).</H4>


                                                 <div class="form-group">
                                            <label for="exampleInputEmail1">57. En mi trabajo puedo expresarme libremente sin interrupciones</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p57" id="p57" onchange="verificar();verificar2();"> 
                                       <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>

                                              <div class="form-group">
                                            <label for="exampleInputEmail1">58. Recibo críticas constantes a mi persona y/o trabajo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p58" id="p58" onchange="verificar();verificar2();"> 
                                            <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>

                                              <div class="form-group">
                                            <label for="exampleInputEmail1">59. Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p59" id="p59" onchange="verificar();verificar2();"> 
                                        <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>

                                              <div class="form-group">
                                            <label for="exampleInputEmail1">60. Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p60" id="p60" onchange="verificar();verificar2();"> 
                                          <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>

                                              <div class="form-group">
                                            <label for="exampleInputEmail1">61. Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p61" id="p61" onchange="verificar();verificar2();"> 
                                      <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>

                                              <div class="form-group">
                                            <label for="exampleInputEmail1">62. Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p62" id="p62" onchange="verificar();verificar2();"> 
                                     <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>

                                              <div class="form-group">
                                            <label for="exampleInputEmail1">63. Me bloquean o impiden las oportunidades que tengopara obtener ascenso o mejora en mi trabajo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p63" id="p63" onchange="verificar();verificar2();"> 
                            <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>

                                              <div class="form-group">
                                            <label for="exampleInputEmail1">64. He presenciado actos de violencia en mi centro detrabajo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p64" id="p64" onchange="verificar();verificar2();"> 
                                <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>



                                               <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</H4>



                                                <div class="form-group">
                                            <label for="exampleInputEmail1">**En mi trabajo debo brindar servicio a clientes ousuarios:</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="pextra65" id="pextra65" onchange="verificar();verificar2();"> 
                                            <option value="">::SELECCIONAR::</option>
                                            <option value="SI"> SI </option>
                                            <option value="NO"> NO</option>                                            
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">65. Atiendo clientes o usuarios muy enojados</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p65" id="p65" onchange="verificar();verificar2();"> 
                                       <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">66. Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p66" id="p66" onchange="verificar();verificar2();"> 
                                 <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">67. Para hacer mi trabajo debo demostrar sentimientos distintos a los míos</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p67" id="p67" onchange="verificar();verificar2();"> 
                                          <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                             <div class="form-group">
                                            <label for="exampleInputEmail1">68. Mi trabajo me exige atender situaciones de violencia</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p68" id="p68" onchange="verificar();verificar2();"> 
                                        <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>>
                                            </select>   
                                            </div>
                                            </div>



                                                <div class="form-group">
                                            <label for="exampleInputEmail1">**Soy jefe de otros trabajadores::</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="pextra69" id="pextra69" onchange="verificar();verificar2();"> 
                                            <option value="">::SELECCIONAR::</option>
                                            <option value="SI"> SI </option>
                                            <option value="NO"> NO</option>                                            
                                            </select>   
                                            </div>
                                            </div>


                                                    <div class="form-group">
                                            <label for="exampleInputEmail1">69. Comunican tarde los asuntos de trabajo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p69" id="p69" onchange="verificar();verificar2();"> 
                                          <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>


                                                    <div class="form-group">
                                            <label for="exampleInputEmail1">70. Dificultan el logro de los resultados del trabajo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p70" id="p70" onchange="verificar();verificar2();"> 
                                            <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>

                                              <div class="form-group">
                                            <label for="exampleInputEmail1">71. Cooperan poco cuando se necesita</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p71" id="p71" onchange="verificar();verificar2();"> 
                                            <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>

                                                <div class="form-group">
                                            <label for="exampleInputEmail1">72. Ignoran las sugerencias para mejorar su trabajo</label>
                                            <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <select  class="form-control"  type="text" name="p72" id="p72" onchange="verificar();verificar2();"> 
                                            <option value="">::SELECCIONAR::</option>
                                            <option value="4"> SIEMPRE </option>
                                            <option value="3"> CASI SIEMPRE</option>
                                            <option value="2"> ALGUNAS VECES</option>
                                            <option value="1"> CASI NUNCA</option>
                                            <option value="0"> NUNCA</option>
                                            </select>   
                                            </div>
                                            </div>
                    


    <input   class="form-control"  type="hidden" name="Cdom" id="Cdom"> 
    <input   class="form-control"  type="hidden" name="Ccat" id="Ccat"> 
    <input   class="form-control"  type="hidden" name="Cfinal" id="Cfinal"> 
    <input   class="form-control"  type="hidden" name="CRes" id="CRes"> 
    <input type="hidden" name="continuar" id="continuar" value="<?php echo $Continua; ?>">
       <input type="hidden" name="codusuariophp" id="codusuariophp" value="<?php echo $Codigousuario; ?>"> 



                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"> FINALIZAR -> </button>
                                       
                                    </form>

                                       
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!--row -->
                <!-- /.row -->
               
                <!-- .right-sidebar -->
      
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
         <?php include("footer.php"); ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="pixel-html/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="pixel-html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="pixel-html/js/waves.js"></script>

    <!--Morris JavaScript -->
    <!-- Custom Theme JavaScript -->
    <script src="pixel-html/js/custom.min.js"></script>
    <script src="pixel-html/js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->

    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Guía de Referencia III',
            text: 'Favor de Contestar la Guía de Referencia III .',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
    <!--Style Switcher -->
   

      <script src="plugins/bower_components/sweetalert/sweetalert.min.js"></script>

         <script src="pixel-html/js/toastr.js"></script>
    <script type="text/javascript">
    //Alerts
    $(".myadmin-alert .closed").click(function(event) {
        $(this).parents(".myadmin-alert").fadeToggle(350);
        return false;
    });
    /* Click to close */
    $(".myadmin-alert-click").click(function(event) {
        $(this).fadeToggle(350);
        return false;
    });
    $(".showtop").click(function() {
        $(".alerttop").fadeToggle(350);
    });
    $(".showtop2").click(function() {
        $(".alerttop2").fadeToggle(350);
    });
    /** Alert Position Bottom  **/
    $(".showbottom").click(function() {
        $(".alertbottom").fadeToggle(350);
    });
    $(".showbottom2").click(function() {
        $(".alertbottom2").fadeToggle(350);
    });
    /** Alert Position Top Left  **/
    $("#showtopleft").click(function() {
        $("#alerttopleft").fadeToggle(350);
    });
    /** Alert Position Top Right  **/
    $("#showtopright").click(function() {
        $("#alerttopright").fadeToggle(350);
    });
    /** Alert Position Bottom Left  **/
    $("#showbottomleft").click(function() {
        $("#alertbottomleft").fadeToggle(350);
    });
    /** Alert Position Bottom Right  **/
    $("#showbottomright").click(function() {
        $("#alertbottomright").fadeToggle(350);
    });

    </script>



</body>

</html>
