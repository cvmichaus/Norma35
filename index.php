<?php
  date_default_timezone_set("America/Mexico_City");
  session_start();
  ini_set("display_errors",0);
  include "includes/bd.php";

  if ($_GET["op"] == "logout") 
  {
    $_SESSION['logued'] = false;
    $_SESSION['CodUsuario'] ='';
    $_SESSION['Perfil'] = '';
    $_SESSION['Nombre'] = '';
    $_SESSION['ApPaterno'] = '';
    $_SESSION['ApMaterno'] = '';
  
    session_destroy();
  }


  function encrypt($string, $key) 
  {
    $result = '';
        for($i=0; $i<strlen($string); $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key))-1, 1);
        $char = chr(ord($char)+ord($keychar));
        $result.=$char;
    }
    return base64_encode($result);
  }

   if ($_POST["inicias"] == 1)
  {

   // echo"<script>alert('Si inicio Session')</script>";
    
        $claveaccesoPHP = $_POST["clave"];
            $clave_encriptado = encrypt($claveaccesoPHP,"NORMA35INC"); //ENCRIPTAR 

            if ($clave_encriptado != NULL){
                   
                   // echo"<script>alert('si esta lleno el campo clave ')</script>";

                        $sqlExisteUsuarioDB  = "{ call sp_VerificarLogInUsuarioInterno ( ? )}";
                        $parametros = array( array($clave_encriptado, SQLSRV_PARAM_IN));
                        $qryExisteUsuarioD = sqlsrv_query($con,$sqlExisteUsuarioDB,$parametros );
                        $rowExisteUsuarioD = sqlsrv_fetch_object( $qryExisteUsuarioD);

                         $ExistePHP = $rowExisteUsuarioD->Existe;

                         if($ExistePHP == 1){
                                   // echo"<script>alert('Entro')</script>";

                                          $sqlUserData = "{call sp_LogInUsuarioInterno(?)}";
                                          $parametros = array(array($clave_encriptado, SQLSRV_PARAM_IN));
                                          $qryDataUser = sqlsrv_query($con,$sqlUserData,$parametros);


                                           if ($qryDataUser){

                                                    //echo"<script>alert('se cumplio la consulta')</script>";

                                                    $dataUser = sqlsrv_fetch_object( $qryDataUser);

                                                 if($dataUser->Perfil == 1){
                                                        //echo"<script>alert('perfil 1')</script>";

                                                      
                                                      $_SESSION['logued'] = true;
                                                      $_SESSION['CodUsuario'] = $dataUser->CodUsuario;
                                                      $_SESSION['Perfil'] =  $dataUser->Perfil;
                                                      $_SESSION['Nombre'] =  $dataUser->Nombre;
                                                      $_SESSION['ApPaterno'] =  $dataUser->ApPaterno;
                                                      $_SESSION['ApMaterno'] =  $dataUser->ApMaterno;
                                                      
                                                      
                                                      header("Location: admin.php");
                                                }
                                                 else if($dataUser->Perfil == 2){
                                                         //echo"<script>alert('perfil 2')</script>";
                                                     
                                                      $_SESSION['logued'] = true;
                                                      $_SESSION['CodUsuario'] = $dataUser->CodUsuario;
                                                      $_SESSION['Perfil'] =  $dataUser->Perfil;         
                                                      $_SESSION['Nombre'] =  $dataUser->Nombre;
                                                      $_SESSION['ApPaterno'] =  $dataUser->ApPaterno;
                                                      $_SESSION['ApMaterno'] =  $dataUser->ApMaterno;
                                                     
                                                      
                                                      header("Location: sistema.php");

                                                }



                                           }

                              }

                    }
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
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Norma 35 Admin </title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="style.css" rel="stylesheet">
<!-- color CSS -->
<link href="colors_blue.css" id="theme"  rel="stylesheet">
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
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
<br><br><br><br><br><br>
      <form class="form-horizontal form-material"  action="index.php" id="loginform" method="post" >

        <a href="javascript:void(0)" class="text-center db"><img src="plugins/images/pixeladmin-logo_dark.png" />
          <br/>
          <img src="plugins/images/pixeladmin-text_dark.png" /></a>  
        
        <div class="form-group m-t-40">
          <div class="col-xs-12">
           
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
           <input class="form-control" type="password" required="" placeholder="Clave Acceso" id="clave" name="clave">
            <input type="hidden" id="inicias" name="inicias" value="1">
          </div>
        </div>

         


        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Entrar</button>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
            Todos los derechos reservados &copy; Incapital, <strong> NORMA 35</strong>
          </div>
        </div>
       
      </form>
      
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="custom.min.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
