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

      $Continua = $_GET['continua'];
    $secc = "guia5";

 $sql110 = "{call sp_INC_NOM35_ContestaronGuia1 (?)}";
        $param110 = array(array($Codigousuario, SQLSRV_PARAM_IN));
        $qry110 = sqlsrv_query($con,$sql110,$param110);
        $data110 = sqlsrv_fetch_object($qry110);
        $ContestoGuia1PHP = $data110->ContestoGuia1; 


         $sql01 = "{call sp_INC_NOM35_ContestaronGuia2 (?)}";
        $param01 = array(array($Codigousuario, SQLSRV_PARAM_IN));
        $qry01 = sqlsrv_query($con,$sql01,$param01);
        $data01 = sqlsrv_fetch_object($qry01);
        $ContestoGuia2PHP = $data01->ContestoGuia2; 


                    $sql0 = "{call sp_INC_NOM35_ContestaronGuia5 (?)}";
                    $param0 = array(array($Codigousuario, SQLSRV_PARAM_IN));
                    $qry0 = sqlsrv_query($con,$sql0,$param0);
                    $data0 = sqlsrv_fetch_object($qry0);
                    $ContestoGuia5PHP = $data0->ContestoGuia5; 


        $sql03 = "{call sp_INC_NOM35_ContestaronGuia3 (?)}";
        $param03 = array(array($Codigousuario, SQLSRV_PARAM_IN));
        $qry03 = sqlsrv_query($con,$sql03,$param03);
        $data03 = sqlsrv_fetch_object($qry03);
        $ContestoGuia3PHP = $data03->ContestoGuia3;             

                    

                      if($data0->ContestoGuia5 == 1){
                    
                                        header("Location: fin5.php");    
                              
                      }else{
                               // echo"<script>alert('No ha contestado la Guia 1')</script>";
                      }

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
                    <li><a href="#" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Inicio</span></a></li>
                    
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

                   
                                   <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Información del trabajador</h3>
                            <p class="text-muted m-b-30 font-13">  </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-6">

                                    <form action="acciones.php" method="post"  >
                                        <input type="hidden" name="accion" id="accion" value="procesaguia5">

                                           <div class="form-group">
                                          
                                            <div class="input-group">
                                             
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputuname">
                               SEXO<br>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select  class="form-control"  type="text" maxlength="2" name="p1" id="p1" placeholder=" Valor Pregunta 1" >
                                            <option value="">::..SELECCIONE..::</option>
                                            <option value="M">MASCULINO</option>
                                            <option value="F">FEMENINO</option>
                                            </select>
                                               
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> EDAD EN AÑOS</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p2" id="p2" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="15-19">15-19</option>
                                                <option value="20-24">20-24</option>
                                                <option value="25-29">25-29</option>
                                                <option value="30-34">30-34</option>
                                                <option value="35-39">35-39</option>
                                                <option value="40-44">40-44</option>
                                                <option value="45-49">45-49</option>
                                                <option value="50-54">50-54</option>
                                                <option value="55-59">55-59</option>
                                                <option value="60-64">60-64</option>
                                                <option value="65-69">65-69</option>
                                                <option value="70 o Mas">70 o Mas</option>
                                               
                                                </select>
                                                </div>
                                        </div>

                                       <div class="form-group">
                                            <label for="exampleInputEmail1">ESTADO CIVIL:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p3" id="p3" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="CASADO">CASADO</option>
                                                <option value="SOLTERO">SOLTERO</option>
                                                 <option value="UNION LIBRE">UNION LIBRE</option>
                                                  <option value="DIVORCIADO">DIVORCIADO</option>
                                                   <option value="VIUDO">VIUDO</option>
                                                </select>
                                                </div>
                                        </div>

                                      <div class="form-group">
                                            <label for="exampleInputEmail1">NIVEL DE ESTUDIOS</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p4" id="p4" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="Sin formación">Sin formación</option>
                                                <option value="Primaria">Primaria </option>
                                                <option value="Secundaria">Secundaria </option>
                                                <option value="Preparatoria o Bachillerato">Preparatoria o Bachillerato </option>
                                                <option value="Técnico Superior">Técnico Superior </option>
                                                <option value="Licenciatura">Licenciatura </option>
                                                <option value="Maestría">Maestría </option>
                                                <option value="Doctorado">Doctorado </option>
                                                </select>
                                                </div>
                                        </div>

                                       <div class="form-group">
                                            <label for="exampleInputEmail1">NIVEL DE ESTUDIOS CONCLUIDO O  TRUNCO</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p5" id="p5" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="Terminada">Terminada</option>
                                                <option value="Incompleta">Incompleta</option>
                                                </select>
                                                </div>
                                        </div>

                                     
                                       
                               


                           <div class="col-md-12" id="Recuerdos" >
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Datos laborales:</h3>
                            <p class="text-muted m-b-30 font-13">  </p>
                            <div class="row">
                               <div class="col-sm-12 col-xs-12">
                                   
                                       
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ocupación/profesión/puesto: </label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <input type="text" class="form-control" type="text"  name="p6" id="p6" placeholder=" Ocupación/profesión/puesto:" >
                                               
                                                </div>
                                        </div>



                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Departamento/Sección/Área:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <input type="text" class="form-control" type="text"  name="p7" id="p7" placeholder="Departamento/Sección/Área:" >
                                               
                                                </div>
                                        </div>



                                       <div class="form-group">
                                            <label for="exampleInputEmail1">Tipo de puesto:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p8" id="p8" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="Operativo">Operativo</option>
                                                <option value="Profesional o técnico">Profesional o técnico</option>
                                                <option value="Supervisor">Supervisor</option>
                                                <option value="Gerente">Gerente</option>
                                                </select>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Tipo de contratación:</label>
                                        <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-email"></i></div>
                                        <select class="form-control" type="text" maxlength="2" name="p9" id="p9" placeholder=" Valor Pregunta 2" >
                                        <option value="">::..SELECCIONE..::</option>
                                        <option value="Por obra o proyecto">Por obra o proyecto</option>
                                        <option value="Por tiempo determinado (temporal)">Por tiempo determinado (temporal)</option>
                                        <option value="Tiempo indeterminado ">Tiempo indeterminado </option>
                                        <option value="Honorarios">Honorarios</option>
                                        </select>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tipo de personal:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p10" id="p10" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="Sindicalizado">Sindicalizado</option>
                                                <option value="Confianza">Confianza</option>
                                                <option value="Ninguno">Ninguno</option>                                         
                                                </select>
                                                </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Tipo de jornada de trabajo:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p11" id="p11" placeholder="Tipo de jornada de trabajo:" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="Fijo nocturno">Fijo nocturno (entre las 20:00 y 6:00 hrs)</option>
                                                <option value="Fijo diurno">Fijo diurno (entre las 6:00 y 20:00 hrs)</option>
                                                 <option value="Fijo mixto">Fijo mixto (combinación de nocturno y diurno)</option>   
                                                </select>
                                                </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Realiza rotación de turnos:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p12" id="p12" placeholder="Realiza rotación de turnos" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>


                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Experiencia (años):
                                            Tiempo en el puesto actual
                                        </label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p13" id="p13" placeholder="Tiempo en el puesto actual" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="Menos de 6 meses">Menos de 6 meses</option>
                                                <option value="Entre 6 meses y  1 año">Entre 6 meses y  1 año</option>
                                                <option value="Entre 1 a 4 años">Entre 1 a 4 años</option>
                                                <option value="Entre 5 a 9 años">Entre 5 a 9 años</option>
                                                <option value="Entre 10 a 14 años">Entre 10 a 14 años</option>
                                                <option value="Entre 15 a 19 años">Entre 15 a 19 años</option>
                                                <option value="Entre 20 a 24 años">Entre 20 a 24 años</option>
                                                <option value="25 años o más">25 años o más</option>
                                                </select>
                                                </div>
                                        </div>


                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Tiempo experiencia laboral
                                        </label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p14" id="p14" placeholder="Tiempo experiencia laboral" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="Menos de 6 meses">Menos de 6 meses</option>
                                                <option value="Entre 6 meses y  1 año">Entre 6 meses y  1 año</option>
                                                <option value="Entre 1 a 4 años">Entre 1 a 4 años</option>
                                                <option value="Entre 5 a 9 años">Entre 5 a 9 años</option>
                                                <option value="Entre 10 a 14 años">Entre 10 a 14 años</option>
                                                <option value="Entre 15 a 19 años">Entre 15 a 19 años</option>
                                                <option value="Entre 20 a 24 años">Entre 20 a 24 años</option>
                                                <option value="25 años o más">25 años o más</option>
                                                </select>
                                                </div>
                                        </div>
                                            
                                             <input type="hidden" name="continuar" id="continuar" value="<?php echo $Continua; ?>">
                
                                               <input type="hidden" name="codusuariophp" id="codusuariophp" value="<?php echo $Codigousuario; ?>"> 

                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">CONTINUAR</button>
                                       
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
            heading: 'Guía de referencia V',
            text: 'Datos del trabajador',
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
