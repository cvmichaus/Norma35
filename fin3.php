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

        $sql009 = "{call sp_INC_NOM35_ContestaronGuia1 (?)}";
        $param009 = array(array($Codigousuario, SQLSRV_PARAM_IN));
        $qry009 = sqlsrv_query($con,$sql009,$param009);
        $data009 = sqlsrv_fetch_object($qry009);
        $ContestoGuia1PHP = $data009->ContestoGuia1; 

        $sql02 = "{call sp_INC_NOM35_ContestaronGuia5 (?)}";
        $param02 = array(array($Codigousuario, SQLSRV_PARAM_IN));
        $qry02 = sqlsrv_query($con,$sql02,$param02);
        $data02 = sqlsrv_fetch_object($qry02);
        $ContestoGuia5PHP = $data02->ContestoGuia5; 

         $sql01 = "{call sp_INC_NOM35_ContestaronGuia2 (?)}";
        $param01 = array(array($Codigousuario, SQLSRV_PARAM_IN));
        $qry01 = sqlsrv_query($con,$sql01,$param01);
        $data01 = sqlsrv_fetch_object($qry01);
        $ContestoGuia2PHP = $data01->ContestoGuia2; 

        $sql03 = "{call sp_INC_NOM35_ContestaronGuia3 (?)}";
        $param03 = array(array($Codigousuario, SQLSRV_PARAM_IN));
        $qry03 = sqlsrv_query($con,$sql03,$param03);
        $data03 = sqlsrv_fetch_object($qry03);
        $ContestoGuia3PHP = $data03->ContestoGuia3; 

                    


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
</head>

    <style>

    .alerta {
padding: 8px 35px 8px 14px;
margin-bottom: 18px;
color: #c09853;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
background-color: #fcf8e3;
border: 1px solid #fbeed5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}
.alerta-heading {
color: inherit;
}
.alerta .close {
position: relative;
top: -2px;
right: -21px;
line-height: 18px;
}


.alerta-success {
color: #468847;
background-color: #dff0d8;
border-color: #d6e9c6;
}

.alerta-danger,
.alerta-error {
color: #b94a48;
background-color: #f2dede;
border-color: #eed3d7;
}


.alerta-info {
color: #3a87ad;
background-color: #d9edf7;
border-color: #bce8f1;
}

.alerta-block {
padding-top: 14px;
padding-bottom: 14px;
}

.alerta-block > p,
.alerta-block > ul {
margin-bottom: 0;
}
.alerta-block p + p {
margin-top: 5px;
}
  </style>

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
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> Mi Perfil</a></li>
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
                                             <li> <a href="#">Guia II Contestada</a></li>
                                            <?php
                                        }
                                        else{
                                             ?>
                                                 <li> <a href="cuestionario2.php">Guia II</a></li>
                                            <?php
                                        }
                                     ?>  
                                        
                                          <?php
                                        /*
                                        ContestoGuia5PHP
                                         ContestoGuia2PHP
                                         */
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

                    <div class="col-md-12">
                         <div class="white-box"><BR><BR><BR>
                     <CENTER><h1> GRACIAS POR TU VALIOSO TIEMPO AL TOMAR ESTE CUESTIONARIO , SALUDOS</h1>
                           <BR><BR><BR>
                           <?php
                            $sql0 = "{call sp_INC_NOM35_SeGuardoAcuseG3 (?)}";
                            $param0 = array(array($Codigousuario, SQLSRV_PARAM_IN));
                            $qry0 = sqlsrv_query($con,$sql0,$param0);
                            $data0 = sqlsrv_fetch_object($qry0);
                            $visible = $data0->AcuseG3;
                      if($visible == 1){
                           //echo"<script>alert('Acuse ya Enviado  ')</script>";
                         $varvisible ="display:none;";
                            $varvisible2 ="display:inline;";    
                         //document.gertelementById("contestado").style.display:inline;
                      }else{
                         $varvisible ="display:inline;";
                         $varvisible2 ="display:none;";
                      }
                           ?> 
                    <div style="<?php echo $varvisible; ?>">
                        <h2 class="card-title">ACUSE DE APLICACION DE GUIA DE REFERENCIA III</h2> 
                    <form class="form-inline" method="post" id="formdata">
                    <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="nombre">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo  $NombreUsuario; echo " "; echo $ApPaternoPHP; echo " "; echo $ApMaternoPHP; ?>">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="fecha">FECHA</label>
                    <input type="date" class="form-control" readonly id="fecha" placeholder="fecha" value="<?php echo date("Y-m-d");?>">
                    <input type="hidden" class="form-control" readonly id="fechar" name="fechar" placeholder="fechar" value="<?php echo date("Y-m-d");?>">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="firma">FIRMA</label>
                    <input type="text" class="form-control" id="firma"  name="firma" placeholder="Nombre Completo">
                    </div>
                    <input class="btn btn-primary" type="button" id="botonenviar" value="Guardar Acuse">
                    </form>

                        <div id="exito" style="display:none" class="alerta alerta-success" role="alerta">
                        Su Acuse se Guardo con éxito.
                        </div>
                        <div id="fracaso" style="display:none" class="alerta alerta-warning" role="alerta">
                        Se ha producido un error durante el envío de datos, Intentelo de Nuevo.
                        </div>

                </div>

                <div id="contestado" style="<?php echo $varvisible2;?>" class="alerta alerta-success" role="alerta">
                        Su Acuse se Guardo con éxito.
                        </div>
                            
                                            </CENTER>
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
    <!--Counter js -->
    <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="pixel-html/js/custom.min.js"></script>
    <script src="pixel-html/js/dashboard1.js"></script>

    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Gracias por contestar la  NORMA 35',
            text: 'ya puede salir de la encuesta.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
    <!--Style Switcher -->

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


    <script type="text/javascript">
    function validaForm(){
    // Campos de texto
    if($("#nombre").val() == ""){
        alert("El campo Nombre no puede estar vacío.");
        $("#nombre").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
        return false;
    }
    if($("#firma").val() == ""){
        alert("El campo Firma 1 no puede estar vacío.");
        $("#firma").focus();
        return false;
    }
   
    return true; // Si todo está correcto
}


$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
    $("#botonenviar").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        if(validaForm()){                               // Primero validará el formulario.
            $.post("GuardaAcuse3.php",$("#formdata").serialize(),function(res){
                $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
                if(res == 1){
                    $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
                     $("#formdata").delay(500).fadeOut("slow");   
                } else {
                    $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
                }
            });
        }
    });    
});

</script>

  

</body>

</html>
