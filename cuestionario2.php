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



                      if($data0->ContestoGuia2 == 1){

                             header("Location: fin2.php");    

                              
                      }else{

                         $sql01 = "{call sp_INC_NOM35_ObtenerDatosGuia1 (?)}";
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

     <script src="scripts.js"></script>


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
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
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
                           
                            <li><a href="index.php?op=logout"><i class="fa fa-power-off"></i> Salir</a></li>
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
                
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> <?php echo $Codigousuario; echo "-"; echo  $NombreUsuario; ?> <span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                   
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
                            <h3 class="box-title m-b-0">Guía de Referencia II DE TRABAJO
</h3>
                            <p class="text-muted m-b-30 font-13">  </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                     <form action="acciones.php" method="post">
                                    <input type="hidden" name="accion" id="accion" value="procesaguia2">

                                        <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em; ">Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo detrabajo.</H4>


                                        <div class="form-group">
                                            <label for="exampleInputuname">1. Mi trabajo me exige hacer mucho esfuerzo físico</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                <select  type="text" name="p1" id="p1"  class="form-control"  class="formulario_select"> 
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
                                    <label for="exampleInputEmail1">2. Me preocupa sufrir un accidente en mi trabajo</label>
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
                                    <label for="exampleInputEmail1">3. Considero que las actividades que realizo son peligrosas</label>
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
                                    <label for="exampleInputEmail1">4. Por la cantidad de trabajo que tengo debo quedarmetiempo adicional a mi turno</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p4" id="p4" > 
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
                                    <label for="exampleInputEmail1">5.Por la cantidad de trabajo que tengo debo trabajar sin parar</label>
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

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">6. Considero que es necesario mantener un ritmo de trabajo acelerado.</label>
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


                                     <div class="form-group">7. Mi trabajo exige que esté muy concentrado</label>
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
                                    <label for="exampleInputEmail1">8. Mi trabajo requiere que memorice mucha información </label>
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

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">9. Mi trabajo exige que atienda varios asuntos al mismo tiempo</label>
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
                                        <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em;">Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</H4>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">10. En mi trabajo soy responsable de cosas de mucho valor</label>
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
                                    <label for="exampleInputEmail1">11. Respondo ante mi jefe por los resultados de toda mi área de trabajo</label>
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
                                    <label for="exampleInputEmail1">12. En mi trabajo me dan órdenes contradictorias</label>
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


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">13. Considero que en mi trabajo me piden hacer cosas innecesarias</label>
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


                                      <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em;">Las preguntas siguientes están relacionadas con el tiempo destinado a su trabajo y sus responsabilidades familiares.</H4>




                                    <div class="form-group">
                                    <label for="exampleInputEmail1">14. Trabajo horas extras más de tres veces a la semana</label>
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
                                    <label for="exampleInputEmail1">15. Mi trabajo me exige laborar en días de descanso, festivos o fines de semana</label>
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
                                    <label for="exampleInputEmail1">16. Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales</label>
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

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">17. Pienso en las actividades familiares o personales cuando estoy en mi trabajo</label>
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


                                      <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em;">Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</H4>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">18.Mi trabajo permite que desarrolle nuevas habilidades </label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p18" id="p18" > 
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
                                    <label for="exampleInputEmail1">19. En mi trabajo puedo aspirar a un mejor puesto </label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p19" id="p19" > 
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
                                    <label for="exampleInputEmail1">20. Durante mi jornada de trabajo puedo tomar pausas cuando las necesito</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p20" id="p20" > 
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
                                    <label for="exampleInputEmail1">21. Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo </label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p21" id="p21" > 
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
                                    <label for="exampleInputEmail1">22. Puedo cambiar el orden de las actividades que realizo en mi trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p22" id="p22" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="0"> SIEMPRE </option>
                                    <option value="1"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="3"> CASI NUNCA</option>
                                    <option value="4"> NUNCA</option>
                                    </select>     
                                    </div>
                                    </div>



                                    <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em;">Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo.</H4>



                                    <div class="form-group">
                                    <label for="exampleInputEmail1">23. Me informan con claridad cuáles son mis funciones</label>
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

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">24. Me explican claramente los resultados que debo obtener en mi trabajo</label>
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
                                    <label for="exampleInputEmail1">25. Me informan con quién puedo resolver problemas o asuntos de trabajo</label>
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
                                    <label for="exampleInputEmail1">26. Me permiten asistir a capacitaciones relacionadas con mi trabajo</label>
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
                                    <label for="exampleInputEmail1">27. Recibo capacitación útil para hacer mi trabajo</label>
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


                                    <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em;">Las preguntas siguientes se refieren a las relaciones con sus compañeros de trabajo y su jefe.</H4>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">28.Mi jefe tiene en cuenta mis puntos de vista y opiniones.</label>
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

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">29. Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo.</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p29" id="p29" > 
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
                                    <label for="exampleInputEmail1">30. Puedo confiar en mis compañeros de trabajo</label>
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


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">31. Cuando tenemos que realizar trabajo de equipo los compañeros colaboran</label>
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
                                    <label for="exampleInputEmail1">32. Mis compañeros de trabajo me ayudan cuando tengo dificultades</label>
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
                                    <label for="exampleInputEmail1">33. En mi trabajo puedo expresarme libremente sin interrupciones</label>
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
                                    <label for="exampleInputEmail1">34. Recibo críticas constantes a mi persona y/o trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p34" id="p34" > 
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
                                    <label for="exampleInputEmail1">35. Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p35" id="p35" > 
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
                                    <label for="exampleInputEmail1">36. Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p36" id="p36" > 
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
                                    <label for="exampleInputEmail1">37. Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p37" id="p37" > 
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
                                    <label for="exampleInputEmail1">38. Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p38" id="p38" > 
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
                                    <label for="exampleInputEmail1">39. Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p39" id="p39" > 
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
                                    <label for="exampleInputEmail1">40. He presenciado actos de violencia en mi centro de trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p40" id="p40" > 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                    <H4 style="text-align: center; vertical-align: middle;font-style: italic; font-size: 1em;">Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</H4>

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">* En mi trabajo debo brindar servicio a clientes o usuarios:</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  id="atencion" name=atencion" onchange="atencionaclientes();"> 
                                    <option value="">::SELECCIONAR::</option>
                                    <option value="SI">SI </option>
                                    <option value="NO">NO</option>
                                    </select>   
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">41. Atiendo clientes o usuarios muy enojados</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p41" id="p41" > 
                                    <option value="0">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>   
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">42. Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p42" id="p42" > 
                                    <option value="0">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>    
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label for="exampleInputEmail1">43. Para hacer mi trabajo debo demostrar sentimientos distintos a los míos</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <select  class="form-control"  type="text" name="p43" id="p43" > 
                                    <option value="0">::SELECCIONAR::</option>
                                    <option value="4"> SIEMPRE </option>
                                    <option value="3"> CASI SIEMPRE</option>
                                    <option value="2"> ALGUNAS VECES</option>
                                    <option value="1"> CASI NUNCA</option>
                                    <option value="0"> NUNCA</option>
                                    </select>  
                                    </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputEmail1">** Soy jefe de otros trabajadores:</label>
                                        <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-email"></i></div>
                                        <select  class="form-control"  type="text" name="jefe" id="jefe" > 
                                        <option value="">::SELECCIONAR::</option>
                                        <option value="SI"> SI </option>
                                        <option value="NO"> NO</option>
                                     
                                        </select>    
                                        </div>
                                        </div>



                                        <div class="form-group">
                                        <label for="exampleInputEmail1">44. Comunican tarde los asuntos de trabajo</label>
                                        <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-email"></i></div>
                                        <select  class="form-control"  type="text" name="p44" id="p44" > 
                                        <option value="0">::SELECCIONAR::</option>
                                        <option value="4"> SIEMPRE </option>
                                        <option value="3"> CASI SIEMPRE</option>
                                        <option value="2"> ALGUNAS VECES</option>
                                        <option value="1"> CASI NUNCA</option>
                                        <option value="0"> NUNCA</option>
                                        </select>    
                                        </div>
                                        </div>


                                     <div class="form-group">
                                    <label for="exampleInputEmail1">45. Dificultan el logro de los resultados del trabajo</label>
                                    <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                <select  class="form-control"  type="text" name="p45" id="p45" > 
<option value="0">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>  
                                    </div>
                                    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">46. Ignoran las sugerencias para mejorar su trabajo</label>
    <div class="input-group">
    <div class="input-group-addon"><i class="ti-email"></i></div>
    <select  class="form-control"  type="text" name="p46" id="p46" onchange="verificar();verificar2();"> 
    <option value="0">::SELECCIONAR::</option>
    <option value="4"> SIEMPRE </option>
    <option value="3"> CASI SIEMPRE</option>
    <option value="2"> ALGUNAS VECES</option>
    <option value="1"> CASI NUNCA</option>
    <option value="0"> NUNCA</option>
    </select>   
    </div>
    </div>


    <input class="form-control" type="hidden" name="Cdom" id="Cdom"> 
    <input class="form-control" type="hidden" name="Ccat" id="Ccat"> 
    <input class="form-control" type="hidden" name="Cfinal" id="Cfinal"> 
    <input class="form-control" type="hidden" name="CRes" id="CRes"> 

    <input type="hidden" name="continuar" id="continuar" value="<?php echo $Continua; ?>">
    <input type="hidden" name="codusuariophp" id="codusuariophp" value="<?php echo $Codigousuario; ?>"> 


    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">CONTINUAR -> </button>
                                       
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
            heading: 'Guía de Referencia II DE TRABAJO ',
            text: 'Favor de Contestar la Guía de Referencia II DE TRABAJO.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
    <!--Style Switcher -->
   


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
