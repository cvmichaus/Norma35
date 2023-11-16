
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

<script>
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

  <style>
	#example4 td, #example4 th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  vertical-align: middle;
}

#example4 tr:nth-child(even){background-color: #f2f2f2;}

#example4 tr:hover {background-color: #ddd;}

#example4 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  vertical-align: middle;
  background-color: #12B3F0;
  color: white;
}

  </style>
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


      $CodUsuarioGetPHP = $_GET['cod'];

			$sqlDatosG2 = "{call sp_INC_NOM35_ObtenerDatosGuia2 (?)}";
			$paramDatosG2 = array(array($CodUsuarioGetPHP, SQLSRV_PARAM_IN));
			$qryDatosG2 = sqlsrv_query($con,$sqlDatosG2,$paramDatosG2);
			while($dataDatosG2 = sqlsrv_fetch_object($qryDatosG2)){	

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

			?>

					

						<hr>


						<table id="example4" class="stripe"  style="width:100%; border-collapse: collapse;">
							<thead>
								<h2>Categoría</h2>
										<tr style="vertical-align: middle;text-align: center;font-size: .8em;">
										<th>ITEM</th>
										<th>PUNTOS</th>
										<th>NIVEL DE RIESGO</th>
										<th>NECESIDAD DE ACCION</th>
								
										</tr>
							</thead>
							<tbody>
										<tr>
										 <td>Ambiente de Trabajo</td>
										 <td><?php echo $AmbienteTrabajo; ?> </td>
										<td>
										<?php
										if ($AmbienteTrabajo < 3 ){
										echo "NULO";
										}else if( $AmbienteTrabajo >= 3  && $AmbienteTrabajo < 5 ){
										echo "BAJO";
										}else if( $AmbienteTrabajo >= 5 && $AmbienteTrabajo < 7 ){
										//echo "MEDIO";
										echo 'MEDIO';
										}else if( $AmbienteTrabajo >= 7  && $AmbienteTrabajo < 9 ){
										echo "ALTO";
										}else if(  $AmbienteTrabajo >= 9 ){
										echo "MUY ALTO";
										}
										?>
										</td>
										 <td>
										 	<?php
								if ($AmbienteTrabajo < 3 ){
								echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
								echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
								echo"</div>";
								}else if( $AmbienteTrabajo >= 3  && $AmbienteTrabajo < 5 ){
								echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
								echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
								echo"</div>";
								}else if( $AmbienteTrabajo >= 5 && $AmbienteTrabajo < 7 ){
								echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
								echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
								echo"</div>";
								}else if( $AmbienteTrabajo >= 7  && $AmbienteTrabajo < 9 ){
								echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
								echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}else if(  $AmbienteTrabajo >= 9 ){
								echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
								echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}
								?>
										 </td>
										</tr>

										<tr>
											<td>Factores propios de la actividad</td>
											<td><?php echo $Factores; ?></td>
											<td>
											<?php 
											if ($Factores < 10 ){
											echo "NULO";
											}else if( $Factores >= 10  && $Factores < 20 ){
											echo "BAJO";
											}else if( $Factores >= 20 && $Factores < 30 ){
											echo "MEDIO";
											}else if( $Factores >= 30  && $Factores < 40 ){
											echo "ALTO";
											}else if(  $Factores >= 40){
											echo "MUY ALTO"; }
											?>
											</td>
											<td>
												<?php 
								if ($Factores < 10 ){
								echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'";
								echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
								echo"</div>";
								}else if( $Factores >= 10  && $Factores < 20 ){
								echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
								echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
								echo"</div>";
								}else if( $Factores >= 20 && $Factores < 30 ){
								echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
								echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
								echo"</div>";
								}else if( $Factores >= 30  && $Factores < 40 ){
								echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
								echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}else if(  $Factores >= 40){
								echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
								echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}

								?>
											</td>
										</tr>

										<tr>
											<td>Organización del tiempo de trabajo</td>
											<td><?php echo $Organizacion; ?></td>
											<td>
											<?php 
											if ($Organizacion < 4 ){
											echo "NULO";
											}else if( $Organizacion >= 4  && $Organizacion < 6 ){
											echo "BAJO";
											}else if( $Organizacion >= 6 && $Organizacion < 9 ){
											echo "MEDIO";
											}else if( $Organizacion >= 9  && $Organizacion < 12 ){
											echo "ALTO";
											}else if(  $Organizacion >= 12){
											echo "MUY ALTO"; }
											?>
											</td>
											<td>
												<?php 
								if ($Organizacion < 4 ){
								echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
								echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
								echo"</div>";
								}else if( $Organizacion >= 4  && $Organizacion < 6 ){
								echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
								echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
								echo"</div>";
								}else if( $Organizacion >= 6 && $Organizacion < 9 ){
								echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
								echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
								echo"</div>";
								}else if( $Organizacion >= 9  && $Organizacion < 12 ){
								echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
								echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}else if(  $Organizacion >= 12){
								echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
								echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}

								?>
											</td>
										</tr>
								

								<tr>
											<td>Liderazgo y relaciones en el trabajo</td>
											<td><?php echo $Liderazgo; ?></td>
											<td>
											<?php 
											if ($Liderazgo < 10 ){
											echo "NULO";
											}else if( $Liderazgo >= 10  && $Liderazgo < 18 ){
											echo "BAJO";
											}else if( $Liderazgo >= 18 && $Liderazgo < 28 ){
											echo "MEDIO";
											}else if( $Liderazgo >= 28  && $Liderazgo < 38 ){
											echo "ALTO";
											}else if(  $Liderazgo >= 38){
											echo "MUY ALTO"; }
											?>
											</td>
											<td>
											<?php 
											if ($Liderazgo < 10 ){
											echo"<div class='alert alert-nulo' style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
											echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
											echo"</div>";
											}else if( $Liderazgo >= 10  && $Liderazgo < 18 ){
											echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
											echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
											echo"</div>";
											}else if( $Liderazgo >= 18 && $Liderazgo < 28 ){
											echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
											echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
											echo"</div>";
											}else if( $Liderazgo >= 28  && $Liderazgo < 38 ){
											echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
											echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
											echo"</div>";
											}else if(  $Liderazgo >= 38){
											echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;' >";
											echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
											echo"</div>";
											}

											?>
											</td>
										</tr>


										<tr>
										 <td>Condiciones en el ambiente de trabajo</td>
										 <td><?php echo $Condiciones; ?> </td>
										<td>
										<?php
											if ($Condiciones < 3 ){
											echo "NULO";
											}else if( $Condiciones >= 3  && $Condiciones < 5 ){
											echo "BAJO";
											}else if( $Condiciones >= 5 && $Condiciones < 7 ){
											echo "MEDIO";
											}else if( $Condiciones >= 7  && $Condiciones < 9 ){
											echo "ALTO";
											}else if(  $Condiciones >= 9 ){
											echo "MUY ALTO";
											}
										?>
										</td>
										 <td>
										 	<?php
								if ($Condiciones < 3 ){
								echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
								echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
								echo"</div>";
								}else if( $Condiciones >= 3  && $Condiciones < 5 ){
								echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
								echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
								echo"</div>";
								}else if( $Condiciones >= 5 && $Condiciones < 7 ){
								echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
								echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
								echo"</div>";
								}else if( $Condiciones >= 7  && $Condiciones < 9 ){
								echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
								echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}else if(  $Condiciones >= 9 ){
								echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
								echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}
								?>
										 </td>
										</tr>

										<tr>
										 <td>Carga de trabajo</td>
										 <td><?php echo $CargaTrabajo;  ?></td>
										<td>
											<?php
											if ($CargaTrabajo < 12 ){
											echo "NULO";
											}else if( $CargaTrabajo >= 12  && $CargaTrabajo < 16 ){
											echo "BAJO";
											}else if( $CargaTrabajo >= 16 && $CargaTrabajo < 20 ){
											echo "MEDIO";
											}else if( $CargaTrabajo >= 20  && $CargaTrabajo < 24 ){
											echo "ALTO";
											}else if(  $CargaTrabajo >= 24){
											echo "MUY ALTO";
											}
											?>
										</td>
										 <td>
													 	<?php
								if ($CargaTrabajo < 12 ){
								echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
								echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
								echo"</div>";
								}else if( $CargaTrabajo >= 12  && $CargaTrabajo < 16 ){
								echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
								echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
								echo"</div>";
								}else if( $CargaTrabajo >= 16 && $CargaTrabajo < 20 ){
								echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
								echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
								echo"</div>";
								}else if( $CargaTrabajo >= 20  && $CargaTrabajo < 24 ){
								echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
								echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}else if(  $CargaTrabajo >= 24 ){
								echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
								echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}
								?>
										 </td>
										</tr>

										<tr>
										 <td>Falta de control sobre el trabajo</td>
										 <td><?php echo $FaltaControl; ?></td>
										<td>
											<?php
											if ($FaltaControl < 5 ){
											echo "NULO";
											}else if( $FaltaControl >= 5  && $FaltaControl < 8 ){
											echo "BAJO";
											}else if( $FaltaControl >= 8 && $FaltaControl < 11 ){
											echo "MEDIO";
											}else if( $FaltaControl >= 11  && $FaltaControl < 14 ){
											echo "ALTO";
											}else if(  $FaltaControl >= 14){
											echo "MUY ALTO";
											}
											?>
										</td>
										 <td>
										<?php
								if ($FaltaControl < 5 ){
								echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
								echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
								echo"</div>";
								}else if( $FaltaControl >= 5  && $FaltaControl < 8 ){
								echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
								echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
								echo"</div>";
								}else if( $FaltaControl >= 8 && $FaltaControl < 11 ){
								echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
								echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
								echo"</div>";
								}else if( $FaltaControl >= 11  && $FaltaControl < 14 ){
								echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
								echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}else if(  $FaltaControl >= 14 ){
								echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
								echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}
								?>
										 </td>
										</tr>


										<tr>
										 <td>Jornada de trabajo</td>
										 <td><?php echo $JornadaTrabajo; ?></td>
										<td>
											<?php
														if ($JornadaTrabajo < 1 ){
											echo "NULO";
											}else if( $JornadaTrabajo >= 1  && $JornadaTrabajo < 2 ){
											echo "BAJO";
											}else if( $JornadaTrabajo >= 2 && $JornadaTrabajo < 4 ){
											echo "MEDIO";
											}else if( $JornadaTrabajo >= 4 && $JornadaTrabajo < 6 ){
											echo "ALTO";
											}else if(  $JornadaTrabajo >= 6){
											echo "MUY ALTO";
											}
											?>
										</td>
										 <td>
										<?php
								if ($JornadaTrabajo < 1 ){
								echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
								echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
								echo"</div>";
								}else if( $JornadaTrabajo >= 1  && $JornadaTrabajo < 2 ){
								echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
								echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
								echo"</div>";
								}else if( $JornadaTrabajo >= 2 && $JornadaTrabajo < 4 ){
								echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
								echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
								echo"</div>";
								}else if( $JornadaTrabajo >= 4  && $JornadaTrabajo < 6 ){
								echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
								echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}else if(  $JornadaTrabajo >= 6 ){
								echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
								echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}
								?>
										 </td>
										</tr>


										<tr>
										 <td>Interferencia en la relación trabajo-familia</td>
										 <td><?php echo $Interferencia; ?></td>
										<td>
											<?php
											if ($Interferencia < 1 ){
											echo "NULO";
											}else if( $Interferencia >= 1  && $Interferencia < 2 ){
											echo "BAJO";
											}else if( $Interferencia >= 2 && $Interferencia < 4 ){
											echo "MEDIO";
											}else if( $Interferencia >= 4  && $Interferencia < 6 ){
											echo "ALTO";
											}else if(  $Interferencia >= 6){
											echo "MUY ALTO";
											}
											?>
										</td>
										 <td>
										<?php
								if ($Interferencia < 1 ){
								echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
								echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
								echo"</div>";
								}else if( $Interferencia >= 1  && $Interferencia < 2 ){
								echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
								echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
								echo"</div>";
								}else if( $Interferencia >= 2 && $Interferencia < 4 ){
								echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
								echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
								echo"</div>";
								}else if( $Interferencia >= 4  && $Interferencia < 6 ){
								echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
								echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}else if(  $Interferencia >= 6 ){
								echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
								echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
								echo"</div>";
								}
								?>
										 </td>
										</tr>


										<tr>
										 <td>Liderazgo</td>
										 <td><?php echo $Liderazgo2; ?></td>
										<td>
											<?php
											if ($Liderazgo2 < 3 ){
											echo "NULO";
											}else if( $Liderazgo2 >= 3  && $Liderazgo2 < 5 ){
											echo "BAJO";
											}else if( $Liderazgo2 >= 5 && $Liderazgo2 < 8 ){
											echo "MEDIO";
											}else if( $Liderazgo2 >= 8  && $Liderazgo2 < 11 ){
											echo "ALTO";
											}else if(  $Liderazgo2 >= 11){
											echo "MUY ALTO";
											}
											?>
										</td>
										 <td>
										<?php
										if ($Liderazgo2 < 3 ){
										echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
										echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
										echo"</div>";
										}else if( $Liderazgo2 >= 3  && $Liderazgo2 < 6 ){
										echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
										echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
										echo"</div>";
										}else if( $Liderazgo2 >= 6 && $Liderazgo2 < 8 ){
										echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
										echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
										echo"</div>";
										}else if( $Liderazgo2 >= 8  && $Liderazgo2 < 11 ){
										echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
										echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
										echo"</div>";
										}else if(  $Liderazgo2 >= 11 ){
										echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
										echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
										echo"</div>";
										}
										?>
										 </td>
										</tr>

										<tr>
										 <td>Relaciones en el trabajo</td>
										 <td><?php echo $Relaciones; ?></td>
										<td>
										<?php
										if ($Relaciones < 5 ){
										echo "NULO";
										}else if( $Relaciones >=5  && $Relaciones < 8 ){
										echo "BAJO";
										}else if( $Relaciones >= 8 && $Relaciones < 11 ){
										echo "MEDIO";
										}else if( $Relaciones >= 11  && $Relaciones < 14 ){
										echo "ALTO";
										}else if(  $Relaciones >= 14){
										echo "MUY ALTO";
										}
										?>
										</td>
										 <td>
										<?php
										if ($Relaciones < 5 ){
										echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
										echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
										echo"</div>";
										}else if( $Relaciones >= 5  && $Relaciones < 8 ){
										echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
										echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
										echo"</div>";
										}else if( $Relaciones >= 8 && $Relaciones < 11 ){
										echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
										echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
										echo"</div>";
										}else if( $Relaciones >= 11  && $Relaciones < 14 ){
										echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
										echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
										echo"</div>";
										}else if(  $Relaciones >= 14 ){
										echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
										echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
										echo"</div>";
										}
										?>
										 </td>
										</tr>

										<tr>
										 <td>Violencia</td>
										 <td><?php echo $Violencia; ?></td>
										<td>
											<?php
											if ($Violencia < 7 ){
											echo "NULO";
											}else if( $Violencia >= 7  && $Violencia < 10 ){
											echo "BAJO";
											}else if( $Violencia >= 10 && $Violencia < 13 ){
											echo "MEDIO";
											}else if( $Violencia >= 13  && $Violencia < 16 ){
											echo "ALTO";
											}else if(  $Violencia >= 16){
											echo "MUY ALTO";
											}
											?>
										</td>
										 <td>
										<?php
										if ($Violencia < 7 ){
										echo"<div class='alert alert-nulo'  style='background: #08ECC9; color: #000; border-color: #08ECC9;'>";
										echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
										echo"</div>";
										}else if( $Violencia >= 7  && $Violencia < 10 ){
										echo"<div class='alert alert-bajo'  style='background: #12F088; color: #000; border-color: #12F088;'>";
										echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
										echo"</div>";
										}else if( $Violencia >= 10 && $Violencia < 13 ){
										echo"<div class='alert alert-medio' style='background: #ECE508; color: #000; border-color: #ECE508;'>";
										echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
										echo"</div>";
										}else if( $Violencia >= 13  && $Violencia < 16 ){
										echo"<div class='alert alert-alto'  style='background: #ECBC08; color: #000; border-color: #ECBC08;'>";
										echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
										echo"</div>";
										}else if(  $Violencia >= 16 ){
										echo"<div class='alert alert-mualto'  style='background: #EC2008; color: #fff; border-color: #EC2008;'>";
										echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
										echo"</div>";
										}
										?>
										 </td>
										</tr>
										<tr>
											<td><?php echo "Calificacion Dominio: "; echo $CDom =  $Condiciones +  $CargaTrabajo +  $FaltaControl +  $JornadaTrabajo +  $Interferencia + $Liderazgo2 + $Relaciones + $Violencia; ?></td>
											<td><?php echo "Calificacion Categoria: "; echo $CCat = $AmbienteTrabajo + $Factores + $Organizacion + $Liderazgo;  ?></td>
											<td><?php $total = $CCat + $CDom; echo "Calificacion Final: "; echo "<span style='font-weight: bold;font-style: italic;'>"; echo $total; echo "</span>"; ?></td>
											<td>
												<?php
													if( $total < 20){
					$alert="alert alert-nulo";
					$estilo ="background: #08ECC9; color: #000; border-color: #08ECC9;";
					$txt1="NULO";
					$txt="El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
					}
					else if( $total >= 25  && $total < 45 ){
					$alert="alert alert-bajo";
					$estilo="background: #12F088; color: #000; border-color: #12F088;";
					$txt1="BAJO";
					$txt="Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
					}
					else if( $total >= 45  && $total < 70 ){
						$alert="alert alert-medio";
						$estilo ="background: #ECE508; color: #000; border-color: #ECE508;";
						$txt1="MEDIO";
						$txt="Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
				}
				else if($total >= 70  && $total < 90 ){
						$alert="alert alert-alto";
						$estilo ="background: #ECBC08; color: #000; border-color: #ECBC08;";
						$txt1="ALTO";
						$txt="Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
				}
				else if($total >= 90){
						$alert="alert alert-muyalto";
						$estilo ="background: #EC2008; color: #fff; border-color: #EC2008;";
						$txt1="MUY ALTO";
						$txt="Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
				}
				



												?>

												<div class="<?php echo $alert; ?>" style="<?php echo $estilo; ?>" role="alert">
				<?php echo $txt1; ?><br>
				<?php echo $txt; ?>
				</div>

											</td>
										</tr>
								
								
						     </tbody>

						</table>

						<hr>

							
						<hr>


			<?php
	
				
			//echo "Calificacion Dominio: "; echo $CDom =  $Condiciones +  $CargaTrabajo +  $FaltaControl +  $JornadaTrabajo +  $Interferencia + $Liderazgo2 + $Relaciones + $Violencia; echo "<br>";
			//echo "Calificacion Categoria: "; echo $CCat = $AmbienteTrabajo + $Factores + $Organizacion + $Liderazgo;  echo "<br>";
			//$total = $CCat + $CDom;
			//echo "Calificacion Final: "; echo "<span style='font-weight: bold;font-style: italic;'>"; echo $total; echo "</span>";  echo "<br>";
				echo "<hr>";

						
				//$total = 20;


					
				



				?>
						
				

				<?php				
			}

?>