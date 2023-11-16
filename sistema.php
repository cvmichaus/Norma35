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
     $secc = "guia1";    

     //echo"<script>alert('".$Codigousuario."')</script>";

     /*VALIDAREMOS SI YA CONTESTO LA GUIA DE REFRENCIA 1 */

          $sql0 = "{call sp_INC_NOM35_ContestaronGuia1 (?)}";
          $param0 = array(array($Codigousuario, SQLSRV_PARAM_IN));
                $qry0 = sqlsrv_query($con,$sql0,$param0);
                $data0 = sqlsrv_fetch_object($qry0);
                      $ContestoGuia1PHP = $data0->ContestoGuia1; 

                      if($data0->ContestoGuia1 == 1){
                         header("Location: fin1.php?codUsu=".$Codigousuario." ");
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
    <link href="pixel-html/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $Codigousuario; echo "-"; echo  $NombreUsuario; ?></b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> Mi Perfil</a></li>
                            <li role="separator" class="divider"></li>
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
                            <li><a href="javascript:void(0)" class="waves-effect">Norma35s<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="sistema.php">Guia I</a></li>
                                    <li> <a href="cuestionario5.php">Guia V</a></li>
                                    <li> <a href="cuestionario2.php">Guia II</a></li>
                                    <li> <a href="cuestionario3.php">Guia III</a></li>
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
                    <h2>Guía de Referencia I</h2>
                    <h4>Seleccione  "SI/NO" a la respuesta que se le indica</h4>
                   
                                   <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">I.- Acontecimiento traumático severo</h3>
                            <p class="text-muted m-b-30 font-13">  </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">

                                    <form action="acciones.php" method="post" >

                                        <input type="hidden" name="atencionclinica" id="atencionclinica" value=""> 
                                        <input type="hidden" name="continuar" id="continuar" value=""> 
                                        <input type="hidden" name="codusuariophp" id="codusuariophp" value="<?php echo $Codigousuario; ?>"> 

                                        <input type="hidden" name="accion" id="accion" value="procesaguia1">

                                           <div class="form-group">
                                            <label for="exampleInputEmail1"> ¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento cómo los siguientes:</label>
                                            <div class="input-group">
                                             
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputuname">
                                1.1 Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o unalesión grave?<br>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select  class="form-control"  type="text" maxlength="2" name="p1" id="p1" placeholder=" Valor Pregunta 1" >
                                            <option value="">::..SELECCIONE..::</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                            </select>
                                               
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> 1.2 Asaltos?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p2" id="p2" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                       <div class="form-group">
                                            <label for="exampleInputEmail1">1.3 Actos violentos que derivaron en lesiones graves?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p3" id="p3" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                      <div class="form-group">
                                            <label for="exampleInputEmail1">1.4 Secuestro?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p4" id="p4" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                       <div class="form-group">
                                            <label for="exampleInputEmail1">1.5  Amenazas?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p5" id="p5" placeholder=" Valor Pregunta 2" >
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">1.6 Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p6" id="p6" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                            <button id="btncont" type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="display: none">CONTINUAR</button>

                                       
                                </div>
                            </div>
                        </div>
                    </div>


                           <div class="col-md-12" id="Recuerdos" style="display: none;" >
                        <div class="white-box">
                            <h3 class="box-title m-b-0">II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h3>
                            <p class="text-muted m-b-30 font-13">  </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                   
                                       
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p7" id="p7" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>



                                       <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producenmalestar?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p8" id="p8" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                       <div class="form-group">
                                            <label for="exampleInputEmail1">III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p9" id="p9" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p10" id="p10" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivanrecuerdos del acontecimiento?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p11" id="p11" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha tenido dificultad para recordar alguna parte importante del evento?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p12" id="p12" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>


                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha disminuido su interés en sus actividades cotidianas?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p13" id="p13" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>


                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Se ha sentido usted alejado o distante de los demás?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p14" id="p14" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>


                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha notado que tiene dificultad para expresar sus sentimientos?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p15" id="p15" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>


                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otraspersonas o que tiene un futuro limitado?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p16" id="p16" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>


                                         </div>
                            </div>
                        </div>
                    </div>


                        <div class="col-md-12" style="display: none" id="Afectacion">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">IV Afectación (durante el último mes):</h3>
                            <p class="text-muted m-b-30 font-13">  </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha tenido usted dificultades para dormir?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p17" id="p17" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha estado particularmente irritable o le han dado arranques de coraje?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p18" id="p18" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha tenido dificultad para concentrarse?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p19" id="p19" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">¿Ha estado nervioso o constantemente en alerta?</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                                <select class="form-control" type="text" maxlength="2" name="p20" id="p20" placeholder=" Valor Pregunta 2"  onchange="verificar()">
                                                <option value="">::..SELECCIONE..::</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                </select>
                                                </div>
                                        </div>


                        
                                            <button id="btncont2" type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="display: none">CONTINUAR</button>
                                    
                                       
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
    <!--Counter js -->
    <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="pixel-html/js/custom.min.js"></script>
    <script src="pixel-html/js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->

    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Bienvenido, <?php echo  $NombreUsuario; ?>  a la NORMA 35',
            text: 'Favor de Contestar la Encuesta.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
    <!--Style Switcher -->
     <script src="verificar.js"></script>
</body>

</html>
