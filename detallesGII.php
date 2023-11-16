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


      $CodUsuarioGetPHP3 = $_GET['cod'];

			$sqlDatosG3 = "{call sp_INC_NOM35_ObtenerDatosGuia3 (?)}";
			$paramDatosG3 = array(array($CodUsuarioGetPHP3, SQLSRV_PARAM_IN));
			$qryDatosG3 = sqlsrv_query($con,$sqlDatosG3,$paramDatosG3);
			while($dataDatosG3 = sqlsrv_fetch_object($qryDatosG3)){
				$total = $dataDatosG3->Cfinal_C3;
			echo "Calificacion Dominio: ";  echo "<span style='font-weight: 900;'>";echo  $dataDatosG3->Cdom_C3; echo "</span>"; echo "<br>";
			echo "Calificacion Categoria: "; echo "<span style='font-weight: 900;'>";echo $dataDatosG3->Ccat_C3; echo "</span>"; echo "<br>";
			echo "Calificacion Final: "; echo "<span style='font-weight: 900;'>";echo $dataDatosG3->Cfinal_C3; echo "</span>";  echo "<br>";
				echo "<hr>";

				//$total = 20;


					if( $total < 50){
					$alert="alert alert-primary";
					$txt1="<span style='font-weight: 900;'>NULO</span>";
					$txt="El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
					}
					else if( $total >= 50  && $total < 75 ){
					$alert="alert alert-success";
					$txt1="<span style='font-weight: 900;'>BAJO</span>";
					$txt="Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
					}
					else if( $total >= 75  && $total < 99 ){
						$alert="alert alert-warning";
						$txt1="<span style='font-weight: 900;'>MEDIO</span>";
						$txt="Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
				}
				else if($total >= 99  && $total <= 140 ){
						$alert="alert alert-warning";
						$txt1="<span style='font-weight: 900;'>ALTO</span>";
						$txt="Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
				}
				else if($total > 140){
						$alert="alert alert-danger";
						$txt1="<span style='font-weight: 900;'>MUY ALTO</span>";
						$txt="Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
				}
				



				?>
						
				<div class="<?php echo $alert; ?>" role="alert">
				<?php echo $txt1; ?><br>
				<?php echo $txt; ?>
				</div>

				<?php				
			}

?>