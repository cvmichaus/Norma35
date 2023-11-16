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
 <style>
        

.count-title {
    font-size: 50px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 20px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #4ad1e5;
}

/*
Full screen Modal 
*/
.fullscreen-modal .modal-dialog {
  margin: 0;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
@media (min-width: 768px) {
  .fullscreen-modal .modal-dialog {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .fullscreen-modal .modal-dialog {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .fullscreen-modal .modal-dialog {
     width: 1170px;
  }
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
                            <li><a href="index.php?op=logout"><i class="fa fa-power-off"></i> Salir</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">-Menu Principal</li>
                    <li><a href="admin.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Inicio</span></a></li>
                    
                    <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Usuarios <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="usuarios.php" class="btn btn-link"  >Alta de Usuarios</a></li>
                            <!-- <li><a href="bulk.php">Bulk de usuarios</a></li>-->
                           
                        </ul>
                    </li>
                </ul>
            </div>
           
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid" id="contenidos">
              
                <!-- /.row -->
                <div class="row">
                    <h2>CPANEL ADMIN</h2>
                    
                   
                    <div class="col-md-12">
                        <div class="white-box">

                            
                                        <table id="example2" class="display compact" style="width:100%">
                                        <thead>
                                        <tr>
                                        <th>Usuario</th>
                                        <th>Guía de Referencia I</th>
                                        <th>Guía de Referencia V</th>
                                        <th>Guía de Referencia II</th>
                                        <th>Guía de Referencia III</th>
                                        <th>Empresa</th>
                                        <th>Opciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sqlU = "{call sp_INC_NOM35_ObtenerUsuarios ()}";
                                        $qryU = sqlsrv_query($con,$sqlU);
                                        while( $row = sqlsrv_fetch_object( $qryU)) {
                                            $NombrePHP = $row->Nombre;
                                            $ApM_PHP = $row->ApMaterno;
                                            $ApP_PHP = $row->ApPaterno;
                                            $CodUsuarioPHP = $row->codUsuario;
                                            $EmpresaPHP = $row->Empresa;
                                        ?> 
                                        <tr>
                                        <td><?php echo $CodUsuarioPHP; echo "-"; echo $NombrePHP; echo " "; echo $ApP_PHP; echo " "; echo $ApM_PHP; ?></td>
                                        <td>
                                            <?php
                                                $sqlG1 = "{call sp_INC_NOM35_ContestaronGuia1 (?)}";
                                                $paramG1 = array(array($CodUsuarioPHP, SQLSRV_PARAM_IN));
                                                $qryG1 = sqlsrv_query($con,$sqlG1,$paramG1);
                                                while( $rowG1 = sqlsrv_fetch_object( $qryG1)){
                                                     $ContestoGuia1PHP = $rowG1->ContestoGuia1;
                                                     if($ContestoGuia1PHP == 1){
                                                         echo "TOMADO";  
                                                     }else{
                                                         echo "NO LO HA TOMADO";   
                                                     }

                                                }
                                            ?>
                                        </td>
                                        <td>
                                             <?php
                                                $sqlG5 = "{call sp_INC_NOM35_ContestaronGuia5 (?)}";
                                                $paramG5 = array(array($CodUsuarioPHP, SQLSRV_PARAM_IN));
                                                $qryG5 = sqlsrv_query($con,$sqlG5,$paramG5);
                                                while( $rowG5 = sqlsrv_fetch_object( $qryG5)){
                                                     $ContestoGuia5PHP = $rowG5->ContestoGuia5;
                                                     if($ContestoGuia5PHP == 1){
                                                         echo "TOMADO";  
                                                     }else{
                                                         echo "NO LO HA TOMADO";   
                                                     }

                                                }
                                            ?>
                                        </td>
                                        <td>
                                             <?php
                                                $sqlG2 = "{call sp_INC_NOM35_ContestaronGuia2 (?)}";
                                                $paramG2 = array(array($CodUsuarioPHP, SQLSRV_PARAM_IN));
                                                $qryG2 = sqlsrv_query($con,$sqlG2,$paramG2);
                                                while( $rowG2 = sqlsrv_fetch_object( $qryG2)){
                                                     $ContestoGuia2PHP = $rowG2->ContestoGuia2;
                                                     if($ContestoGuia2PHP == 1){
                                                         echo "TOMADO";  
                                                     }else{
                                                         echo "NO LO HA TOMADO";   
                                                     }

                                                }
                                            ?>
                                        </td>

                                        <td>
                                             <?php
                                                $sqlG3 = "{call sp_INC_NOM35_ContestaronGuia3 (?)}";
                                                $paramG3 = array(array($CodUsuarioPHP, SQLSRV_PARAM_IN));
                                                $qryG3 = sqlsrv_query($con,$sqlG3,$paramG3);
                                                while( $rowG3 = sqlsrv_fetch_object( $qryG3)){
                                                     $ContestoGuia3PHP = $rowG2->ContestoGuia3;
                                                     if($ContestoGuia3PHP == 1){
                                                         echo "TOMADO";  
                                                     }else{
                                                         echo "NO LO HA TOMADO";   
                                                     }

                                                }
                                            ?>
                                        </td>


                                        <td>
                                           <?php echo $EmpresaPHP;?>
                                        </td>
                                       
                                         <td>
                                            <div class="form-group row">
                                            <?php
                                            $sql012 = "{call sp_INC_NOM35_ObtenerDatosGuia2 (?)}";
                                            $param012 = array(array($CodUsuarioPHP, SQLSRV_PARAM_IN));
                                            $qry012 = sqlsrv_query($con,$sql012,$param012);
                                            while($data012 = sqlsrv_fetch_object($qry012)){
                                            $ContestadosG2 = $data012->Contestado;
                                            if($ContestadosG2 == 1){
                                            ?>                                                           
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" onclick="cargarDiv2('#ventana','detalles.php?cod=<?php echo $CodUsuarioPHP; ?>');" >Resultado Guia II</button></div>
                                            <!--ejecuta_ajax('detalles.php','cod=<?php //echo $CodUsuarioPHP; ?>','ventana');-->



                                            <div class="form-group row">
                                            <?php
                                            }
                                            } 

                                            $sql03 = "{call sp_INC_NOM35_ObtenerDatosGuia3 (?)}";
                                            $param03 = array(array($CodUsuarioPHP, SQLSRV_PARAM_IN));
                                            $qry03 = sqlsrv_query($con,$sql03,$param03);
                                            while($data03 = sqlsrv_fetch_object($qry03)){
                                            $ContestadosG3 = $data03->Contestado;
                                            if($ContestadosG3 == 1){
                                            ?>                                                           
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" onclick="ejecuta_ajax('detallesGII.php','cod=<?php echo $CodUsuarioPHP; ?>','ventana');" >Resultado Guia III</button>

                                            <?php
                                            }
                                            } 

                                            ?>
                                             </div>   
                                        </td>
                                                    
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                        </table>

                                </div>
                            </div>
                        </div>


                    <!--TOTALTES COUNTER-->

                <div class="row">

                   <?php
                                        $sql001 = "{call sp_INC_NOM35_TotalContestaronGuia1 ()}";
                                        $qry001 = sqlsrv_query($con,$sql001);
                                        $data001 = sqlsrv_fetch_object($qry001);
                                        $data001->TotalGuia1;
                                        
                    ?>

                        <div class="col-3 col-md-3">
                        <div class="counter">
                       
                        <h2 class="timer count-title count-number" data-to="<?php echo $data001->TotalGuia1;  ?>" data-speed="1500"></h2>
                        <p class="count-text ">Usuarios Tomaro Guia I </p>
                        </div>
                        </div>

                        <?php
                                        $sql002 = "{call sp_INC_NOM35_TotalContestaronGuia5 ()}";
                                        $qry002 = sqlsrv_query($con,$sql002);
                                        $data002 = sqlsrv_fetch_object($qry002);
                                        $data002->TotalGuia5;
                                        
                                ?>

                           <div class="col-3 col-md-3">
                        <div class="counter">
                       
                        <h2 class="timer count-title count-number" data-to="<?php echo $data002->TotalGuia5;  ?>" data-speed="1500"></h2>
                        <p class="count-text ">Usuarios Tomaro Guia V </p>
                        </div>
                        </div>         


                    
                        <?php
                                        $sql003 = "{call sp_INC_NOM35_TotalContestaronGuia2 ()}";
                                        $qry003 = sqlsrv_query($con,$sql003);
                                       $data003 = sqlsrv_fetch_object($qry003);
                                      $data003->TotalGuia2;
                                        
                                ?>


                                      <div class="col-3 col-md-3">
                        <div class="counter">
                       
                        <h2 class="timer count-title count-number" data-to="<?php echo $data003->TotalGuia2;  ?>" data-speed="1500"></h2>
                        <p class="count-text ">Usuarios Tomaro Guia II </p>
                        </div>
                        </div> 



                           <?php
                                        $sql004 = "{call sp_INC_NOM35_TotalContestaronGuia3 ()}";
                                        $qry004 = sqlsrv_query($con,$sql004);
                                       $data004 = sqlsrv_fetch_object($qry004);
                                      $data004->TotalGuia3;
                                        
                                ?>


                                      <div class="col-3 col-md-3">
                        <div class="counter">
                       
                        <h2 class="timer count-title count-number" data-to="<?php echo $data004->TotalGuia3;  ?>" data-speed="1500"></h2>
                        <p class="count-text ">Usuarios Tomaro Guia III </p>
                        </div>
                        </div> 

          <!--TOTALTES COUNTER-->
      

              <!--GRAFICAS-->
                  <div class="col-lg-6 col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading"> GUIAS CONTESTADAS
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>
                                        
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                    google.charts.load('current', {'packages':['corechart']});
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {

                                    var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ['Guia I',   <?php  echo  $data001->TotalGuia1; ?> ],
                                    ['Guia V',   <?php  echo  $data002->TotalGuia5; ?>],
                                    ['Guia II',  <?php  echo  $data003->TotalGuia2; ?>],
                                    ['Guia III',  <?php echo  $data004->TotalGuia3; ?>]
                                    ]);

                                    var options = {
                                    title: 'Totales Guias',
                                     is3D: true,
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                    chart.draw(data, options);
                                    }
                                    </script>

                                    <div id="piechart" style="width: 500px; height: 300px;"></div>


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

            
                            <?php
                                       /*
                                        $sql0099 = "{call sp_INC_NOM35_RespuestaMuyAlto ()}";
                                        $qry0099 = sqlsrv_query($con,$sql0099);
                                        $data0099 = sqlsrv_fetch_object($qry0099);
                                        $data0099->MuyAlto;

                                        $sql005 = "{call sp_INC_NOM35_RespuestaAlto ()}";
                                        $qry005 = sqlsrv_query($con,$sql005);
                                        $data005 = sqlsrv_fetch_object($qry005);
                                        $data005->Alto;

                                         $sql006 = "{call sp_INC_NOM35_RespuestaMedio ()}";
                                        $qry006 = sqlsrv_query($con,$sql006);
                                        $data006 = sqlsrv_fetch_object($qry006);
                                        $data006->Medio;
                                        
                                        $sql007 = "{call sp_INC_NOM35_RespuestaBajo ()}";
                                        $qry007 = sqlsrv_query($con,$sql007);
                                        $data007 = sqlsrv_fetch_object($qry007);
                                        $data007->Bajo;
                                        

                                        $sql008 = "{call sp_INC_NOM35_RespuestaNulo ()}";
                                        $qry008 = sqlsrv_query($con,$sql008);
                                        $data008 = sqlsrv_fetch_object($qry008);
                                        $data008->Nulo;
                                        */


                                        
                                ?>
                       <div class="col-lg-6 col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading"> RESULTADOS GUIA II
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>
                                        
                                   
                                    <script type="text/javascript">
                                    google.charts.load('current', {'packages':['corechart']});
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {

                                    var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ['MUY ALTO ',   <?php  echo  $data0099->MuyAlto; ?> ],
                                    ['ALTO',        <?php  echo  $data005->Alto; ?>],
                                    ['MEDIO ',      <?php  echo  $data006->Medio; ?>],
                                    ['BAJO ',       <?php  echo  $data007->Bajo; ?>],
                                    ['NULO ',       <?php  echo  $data008->Nulo; ?>]
                                    
                                    ]);

                                    var options = {
                                    title: 'RESULTADOS GUIA II',
                                     is3D: true,
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

                                    chart.draw(data, options);
                                    }
                                    </script>

                                    <div id="piechart2" style="width: 500px; height: 300px;"></div>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                        <?php
                                        $sql009 = "{call sp_INC_NOM35_Guia5Masculino ()}";
                                        $qry009 = sqlsrv_query($con,$sql009);
                                        $data009 = sqlsrv_fetch_object($qry009);
                                        $data009->MASCULINO;


                                        $sql0010 = "{call sp_INC_NOM35_Guia5Femenino ()}";
                                        $qry0010 = sqlsrv_query($con,$sql0010);
                                        $data0010 = sqlsrv_fetch_object($qry0010);
                                        $data0010->FEMENINO;
                        ?>

                     <div class="col-lg-6 col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading"> NIVEL DE PARTICIPACION
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>
                                       <script type="text/javascript">
                                           google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Cantidad');
      data.addColumn('number', 'Cantidad');

      data.addRows([
        [{v: [8, 0, 0], f: 'Hombre'}, <?php  echo  $data009->MASCULINO; ?>],
        [{v: [9, 0, 0], f: 'Mujer'}, <?php  echo   $data0010->FEMENINO ?>],
      ]);

      var options = {
        title: 'Nivel de Participacion',
        hAxis: {
          title: 'Hombre / Mujer',
          format: '',
          
        },
        vAxis: {
          title: 'Rating (Cantidad)'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }
                                       </script> 
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <div id="chart_div"></div>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

  <?php
                                        $sql0100 = "{call sp_INC_NOM35_RespuestaMuyAltoGII ()}";
                                        $qry0100 = sqlsrv_query($con,$sql0100);
                                        $data0100 = sqlsrv_fetch_object($qry0100);
                                        $data0100->MuyAlto;

                                        $sql0101 = "{call sp_INC_NOM35_RespuestaAltoGII ()}";
                                        $qry0101 = sqlsrv_query($con,$sql0101);
                                        $data0101 = sqlsrv_fetch_object($qry0101);
                                        $data0101->Alto;

                                         $sql0102 = "{call sp_INC_NOM35_RespuestaMedioGII ()}";
                                        $qry0102 = sqlsrv_query($con,$sql0102);
                                        $data0102 = sqlsrv_fetch_object($qry0102);
                                        $data0102->Medio;
                                        
                                        $sql0103 = "{call sp_INC_NOM35_RespuestaBajoGII ()}";
                                        $qry0103 = sqlsrv_query($con,$sql0103);
                                        $data0103 = sqlsrv_fetch_object($qry0103);
                                        $data0103->Bajo;
                                        

                                        $sql0104 = "{call sp_INC_NOM35_RespuestaNuloGII ()}";
                                        $qry0104 = sqlsrv_query($con,$sql0104);
                                        $data0104 = sqlsrv_fetch_object($qry0104);
                                        $data0104->Nulo;

                                ?>
                       <div class="col-lg-6 col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading"> RESULTADOS GUIA III
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>
                                        
                                   
                                    <script type="text/javascript">
                                    google.charts.load('current', {'packages':['corechart']});
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {

                                    var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ['MUY ALTO ',   <?php  echo  $data0100->MuyAlto; ?> ],
                                    ['ALTO',        <?php  echo  $data0101->Alto; ?>],
                                    ['MEDIO ',      <?php  echo  $data0102->Medio; ?>],
                                    ['BAJO ',       <?php  echo  $data0103->Bajo; ?>],
                                    ['NULO ',       <?php  echo  $data0104->Nulo; ?>]
                                    
                                    ]);

                                    var options = {
                                    title: 'RESULTADOS GUIA IIi',
                                     is3D: true,
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

                                    chart.draw(data, options);
                                    }
                                    </script>

                                    <div id="piechart3" style="width: 500px; height: 300px;"></div>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

 <div class="row">
  <div class="col-md-12">
                        <div class="white-box">
                    <?php
                     


              $sql01202020 = "{call sp_INC_NOM35_Respuesta_Alto ()}";
              $qry01202020 = sqlsrv_query($con,$sql01202020);
              $dataDatosG2 = sqlsrv_fetch_object($qry01202020);

            /* CATEGORIA */

             $AmbienteTrabajo =   $dataDatosG2->P2_C2 + $dataDatosG2->P1_C2 + $dataDatosG2->P3_C2; 
             
            $Factores = $dataDatosG2->P4_C2 + $dataDatosG2->P9_C2 + $dataDatosG2->P5_C2 + $dataDatosG2->P6_C2  + $dataDatosG2->P7_C2 + $dataDatosG2->P8_C2 + $dataDatosG2->P41_C2 + $dataDatosG2->P42_C2+ $dataDatosG2->P43_C2 + $dataDatosG2->P10_C2  + $dataDatosG2->P11_C2  + $dataDatosG2->P12_C2 + $dataDatosG2->P13_C2 + $dataDatosG2->P20_C2+ $dataDatosG2->P21_C2 + $dataDatosG2->P22_C2 + $dataDatosG2->P18_C2 + $dataDatosG2->P19_C2 + $dataDatosG2->P26_C2 + $dataDatosG2->P27_C2;

            $Organizacion = $dataDatosG2->P14_C2 + $dataDatosG2->P15_C2 + $dataDatosG2->P16_C2+ $dataDatosG2->P17_C2;
            $Liderazgo = $dataDatosG2->P23_C2 + $dataDatosG2->P24_C2 + $dataDatosG2->P25_C2+ $dataDatosG2->P28_C2 + $dataDatosG2->P29_C2 + $dataDatosG2->P30_C2 + $dataDatosG2->P31_C2 + $dataDatosG2->P32_C2 + $dataDatosG2->P44_C2  + $dataDatosG2->P45_C2 + $dataDatosG2->P46_C2 ; + $dataDatosG2->P33_C2 + $dataDatosG2->P34_C2 + $dataDatosG2->P35_C2 + $dataDatosG2->P36_C2 + $dataDatosG2->P37_C2 + $dataDatosG2->P38_C2 + $dataDatosG2->P39_C2 + $dataDatosG2->P40_C2;

          /* DOMINIO */

          $Condiciones = $dataDatosG2->P2_C2 + $dataDatosG2->P1_C2 + $dataDatosG2->P3_C2;
          $CargaTrabajo= $dataDatosG2->P4_C2 + $dataDatosG2->P9_C2 + $dataDatosG2->P5_C2 + $dataDatosG2->P6_C2  + $dataDatosG2->P7_C2 + $dataDatosG2->P8_C2 + $dataDatosG2->P41_C2 + $dataDatosG2->P42_C2+ $dataDatosG2->P43_C2 + $dataDatosG2->P10_C2  + $dataDatosG2->P11_C2  + $dataDatosG2->P12_C2 + $dataDatosG2->P13_C2;
          $FaltaControl= $dataDatosG2->P20_C2+ $dataDatosG2->P21_C2 + $dataDatosG2->P22_C2 + $dataDatosG2->P18_C2 + $dataDatosG2->P19_C2 + $dataDatosG2->P26_C2 + $dataDatosG2->P27_C2;
          $JornadaTrabajo= $dataDatosG2->P14_C2 + $dataDatosG2->P15_C2;
          $Interferencia=  $dataDatosG2->P16_C2 + $dataDatosG2->P17_C2;
          $Liderazgo2= $dataDatosG2->P23_C2 + $dataDatosG2->P24_C2 + $dataDatosG2->P25_C2 + $dataDatosG2->P28_C2 + $dataDatosG2->P29_C2;
          $Relaciones= $dataDatosG2->P30_C2 + $dataDatosG2->P31_C2 + $dataDatosG2->P32_C2 + $dataDatosG2->P28_C2 + $dataDatosG2->P29_C2;
          $Violencia= $dataDatosG2->P33_C2 + $dataDatosG2->P34_C2 + $dataDatosG2->P35_C2 + $dataDatosG2->P36_C2 + $dataDatosG2->P37_C2 + $dataDatosG2->P38_C2 + $dataDatosG2->P39_C2 + $dataDatosG2->P40_C2;


              echo "Calificacion Dominio: "; echo $CDom =  $Condiciones +  $CargaTrabajo +  $FaltaControl +  $JornadaTrabajo +  $Interferencia + $Liderazgo2 + $Relaciones + $Violencia; echo "<br>";
              echo "Calificacion Categoria: "; echo $CCat = $AmbienteTrabajo + $Factores + $Organizacion + $Liderazgo;  echo "<br>";
              $total = $CCat + $CDom;
              echo "Calificacion Final: "; echo "<span style='font-weight: bold;font-style: italic;'>"; echo $total; echo "</span>";  echo "<br>";
              echo "<hr>";


              


                    ?>
</div>
</div>
</div>

                     


                    <!-- Large modal -->

<div class="modal fullscreen-modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalle Guia II</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          <div id="ventana"></div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                   
                </div>

                 
                <!--row -->
             
  <!--GRAFICAS-->

                            

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
            heading: 'Bienvenido, Admin   ',
            text: '<?php echo  $NombreUsuario; ?>',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
    <!--Style Switcher -->
    
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


<script type="text/javascript" language="javascript" class="init">
 $(document).ready(function() {
        var selected = [];

        $('#example2').DataTable( {
          dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
            stateSave: true,
            "order": [[ 1, "desc" ]],
        } );

        $('#example tbody').on('click', 'tr', function () {
            var id = this.id;
            var index = $.inArray(id, selected);

            if ( index === -1 ) {
                selected.push( id );
            } else {
                selected.splice( index, 1 );
            }

            $(this).toggleClass('selected');
        } );

    } )



 $(document).ready(function() {
        var selected = [];

        $('#example4').DataTable( {
          dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
            stateSave: true,
            "order": [[ 1, "desc" ]],
        } );

        $('#example tbody').on('click', 'tr', function () {
            var id = this.id;
            var index = $.inArray(id, selected);

            if ( index === -1 ) {
                selected.push( id );
            } else {
                selected.splice( index, 1 );
            }

            $(this).toggleClass('selected');
        } );

    } )


  $(document).ready(function() {
        var selected = [];

        $('#example5').DataTable( {
          dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
            stateSave: true,
            "order": [[ 1, "desc" ]],
        } );

        $('#example tbody').on('click', 'tr', function () {
            var id = this.id;
            var index = $.inArray(id, selected);

            if ( index === -1 ) {
                selected.push( id );
            } else {
                selected.splice( index, 1 );
            }

            $(this).toggleClass('selected');
        } );

    } )
</script>

 <script>

        (function ($) {
  $.fn.countTo = function (options) {
    options = options || {};
    
    return $(this).each(function () {
      // set options for current element
      var settings = $.extend({}, $.fn.countTo.defaults, {
        from:            $(this).data('from'),
        to:              $(this).data('to'),
        speed:           $(this).data('speed'),
        refreshInterval: $(this).data('refresh-interval'),
        decimals:        $(this).data('decimals')
      }, options);
      
      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;
      
      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data('countTo') || {};
      
      $self.data('countTo', data);
      
      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);
      
      // initialize the element with the starting value
      render(value);
      
      function updateTimer() {
        value += increment;
        loopCount++;
        
        render(value);
        
        if (typeof(settings.onUpdate) == 'function') {
          settings.onUpdate.call(self, value);
        }
        
        if (loopCount >= loops) {
          // remove the interval
          $self.removeData('countTo');
          clearInterval(data.interval);
          value = settings.to;
          
          if (typeof(settings.onComplete) == 'function') {
            settings.onComplete.call(self, value);
          }
        }
      }
      
      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };
  
  $.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
  };
  
  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
  formatter: function (value, options) {
    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
  var $this = $(this);
  options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  $this.countTo(options);
  }
});

function ejecuta_ajax(archivo, parametros, capa){
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById(capa).innerHTML=xmlhttp.responseText;
        }
        }

        x = Math.random()*99999999;
        xmlhttp.open("GET",archivo+"?"+parametros+"&y="+x, true);
        xmlhttp.send();
        }

          /***************************/  

        function cargarDiv(div,url)
        {
        $(div).load(url);
         $('#ventana').slideDown(1000);  
        }


        function cargarDiv2(div,url)
        {
        $(div).load(url);
        }


      </script>








</body>

</html>
