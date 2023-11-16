<table id="example4" class="order-column" style="width:100%">
			<h4>CATEGORIAS</h4>
			<thead>
			<tr style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Ambiente de Trabajo</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Factores propios de la actividad</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Organización del tiempo de trabajo</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Liderazgo y relaciones en el trabajo</th>
			</tr>
			</thead>
			<tbody>
			<tr style="text-align: center;vertical-align: middle;font-size: .9em;">
			<td><?php echo  $AmbienteTrabajo;  ?></td>
			<td><?php echo  $Factores;  ?></td>
			<td><?php echo  $Organizacion;  ?></td>
			<td><?php echo  $Liderazgo;  ?></td>
			</tr>
			<tr style="text-align: center;vertical-align: middle;font-size: .9em;">
			<td><?php
			  if ($AmbienteTrabajo < 3 ){
			  		echo "NULO";
			    }else if( $AmbienteTrabajo <= 3  && $AmbienteTrabajo < 5 ){
			    	echo "BAJO";
			    }else if( $AmbienteTrabajo <= 5 && $AmbienteTrabajo < 7 ){
			    	//echo "MEDIO";
				echo '
				<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
				sagittis lacus vel augue laoreet rutrum faucibus.">
				Medio
				</button>
			    	';
			    }else if( $AmbienteTrabajo <= 7  && $AmbienteTrabajo < 9 ){
			    	echo "ALTO";
			    }else if(  $AmbienteTrabajo >= 9 ){
			    	echo "MUY ALTO";
			    }
			   ?></td>
			<td><?php 
				if ($Factores < 10 ){
			  		echo "NULO";
			    }else if( $Factores <= 10  && $Factores < 20 ){
			    	echo "BAJO";
			    }else if( $Factores <= 20 && $Factores < 30 ){
			    	echo "MEDIO";
			    }else if( $Factores <= 30  && $Factores < 40 ){
			    	echo "ALTO";
			    }else if(  $Factores >= 40){
			    	echo "MUY ALTO";
			    }
	
			 ?></td>
			<td><?php 
					if ($Organizacion < 4 ){
			  		echo "NULO";
			    }else if( $Organizacion <= 4  && $Organizacion < 6 ){
			    	echo "BAJO";
			    }else if( $Organizacion <= 6 && $Organizacion < 9 ){
			    	echo "MEDIO";
			    }else if( $Organizacion <= 9  && $Organizacion < 12 ){
			    	echo "ALTO";
			    }else if(  $Organizacion >= 12){
			    	echo "MUY ALTO";
			    }
			  ?></td>
			<td><?php 
					if ($Liderazgo < 10 ){
			  		echo "NULO";
			    }else if( $Liderazgo <= 10  && $Liderazgo < 18 ){
			    	echo "BAJO";
			    }else if( $Liderazgo <= 18 && $Liderazgo < 28 ){
			    	echo "MEDIO";
			    }else if( $Liderazgo <= 28  && $Liderazgo < 38 ){
			    	echo "ALTO";
			    }else if(  $Liderazgo >= 38){
			    	echo "MUY ALTO";
			    }
			  ?></td>
			</tr>
			<tr style="text-align: justify;vertical-align: middle;font-size: .9em;">
			<td><?php
			  if ($AmbienteTrabajo < 3 ){
			  				echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $AmbienteTrabajo <= 3  && $AmbienteTrabajo < 5 ){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $AmbienteTrabajo <= 5 && $AmbienteTrabajo < 7 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo"</div>";
			    }else if( $AmbienteTrabajo <= 7  && $AmbienteTrabajo < 9 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }else if(  $AmbienteTrabajo >= 9 ){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			   ?></td>
			<td><?php 
				if ($Factores < 10 ){
			  			echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $Factores <= 10  && $Factores < 20 ){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $Factores <= 20 && $Factores < 30 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo"</div>";
			    }else if( $Factores <= 30  && $Factores < 40 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }else if(  $Factores >= 40){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
	
			 ?></td>
			<td><?php 
					if ($Organizacion < 4 ){
			  			echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $Organizacion <= 4  && $Organizacion < 6 ){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $Organizacion <= 6 && $Organizacion < 9 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo"</div>";
			    }else if( $Organizacion <= 9  && $Organizacion < 12 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }else if(  $Organizacion >= 12){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			  ?></td>
			<td><?php 
					if ($Liderazgo < 10 ){
			  			echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $Liderazgo <= 10  && $Liderazgo < 18 ){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $Liderazgo <= 18 && $Liderazgo < 28 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo"</div>";
			    }else if( $Liderazgo <= 28  && $Liderazgo < 38 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }else if(  $Liderazgo >= 38){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			  ?></td>
			</tr>
			</tbody>
			</table>



<table id="example5" class="order-column" style="width:100%">
			<h4>DOMINIO</h4>
			<thead>
			<tr style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Condiciones en el ambiente de trabajo</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Carga de trabajo</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Falta de control sobre el trabajo</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Jornada de trabajo</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Interferencia en la relación trabajo-familia</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Liderazgo</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Relaciones en el trabajo</th>
			<th style="text-align: center;vertical-align: middle;font-size: .9em;background-color: grey;color: white;">Violencia</th>
			</tr>
			</thead>
			<tbody>
			<tr style="text-align: center;vertical-align: middle;font-size: .9em;">
			<td><?php echo $Condiciones;   ?></td>
			<td><?php echo $CargaTrabajo;  ?> </td>
			<td><?php echo $FaltaControl; ?></td>
			<td><?php echo $JornadaTrabajo;  ?> </td>
			<td><?php echo $Interferencia; ?> </td>
			<td><?php echo $Liderazgo2;  ?> </td>
			<td><?php echo $Relaciones;  ?></td>
			<td><?php echo $Violencia; ?> </td>
			</tr>
			<tr style="text-align: center;vertical-align: middle;font-size: .9em;">
			<td><?php
			  if ($Condiciones < 3 ){
			  		echo "NULO";
			    }else if( $Condiciones <= 3  && $Condiciones < 5 ){
			    	echo "BAJO";
			    }else if( $Condiciones <= 5 && $Condiciones < 7 ){
			    	echo "MEDIO";
			    }else if( $Condiciones <= 7  && $Condiciones < 9 ){
			    	echo "ALTO";
			    }else if(  $Condiciones >= 9 ){
			    	echo "MUY ALTO";
			    }
			   ?></td>
			<td><?php 
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
	
			 ?></td>
			<td><?php 
					if ($FaltaControl < 5 ){
			  		echo "NULO";
			    }else if( $FaltaControl <= 5  && $FaltaControl < 8 ){
			    	echo "BAJO";
			    }else if( $FaltaControl <= 8 && $FaltaControl < 11 ){
			    	echo "MEDIO";
			    }else if( $FaltaControl <= 11  && $FaltaControl < 14 ){
			    	echo "ALTO";
			    }else if(  $FaltaControl >= 14){
			    	echo "MUY ALTO";
			    }
			  ?></td>
			<td><?php 
					if ($JornadaTrabajo < 1 ){
			  		echo "NULO";
			    }else if( $JornadaTrabajo <= 1  && $JornadaTrabajo < 2 ){
			    	echo "BAJO";
			    }else if( $JornadaTrabajo <= 2 && $JornadaTrabajo < 4 ){
			    	echo "MEDIO";
			    }else if( $JornadaTrabajo <= 4 && $JornadaTrabajo < 6 ){
			    	echo "ALTO";
			    }else if(  $JornadaTrabajo >= 6){
			    	echo "MUY ALTO";
			    }
			  ?></td>
			  <td><?php 
					if ($Interferencia < 1 ){
			  		echo "NULO";
			    }else if( $Interferencia <= 1  && $Interferencia < 2 ){
			    	echo "BAJO";
			    }else if( $Interferencia <= 2 && $Interferencia < 4 ){
			    	echo "MEDIO";
			    }else if( $Interferencia <= 4  && $Interferencia < 6 ){
			    	echo "ALTO";
			    }else if(  $Interferencia >= 6){
			    	echo "MUY ALTO";
			    }
			  ?></td>
			  <td><?php 
					if ($Liderazgo2 < 3 ){
			  		echo "NULO";
			    }else if( $Liderazgo2 <= 3  && $Liderazgo2 < 5 ){
			    	echo "BAJO";
			    }else if( $Liderazgo2 <= 5 && $Liderazgo2 < 8 ){
			    	echo "MEDIO";
			    }else if( $Liderazgo2 <= 8  && $Liderazgo2 < 11 ){
			    	echo "ALTO";
			    }else if(  $Liderazgo2 >= 11){
			    	echo "MUY ALTO";
			    }
			  ?></td>
			  <td><?php 
					if ($Relaciones < 5 ){
			  		echo "NULO";
			    }else if( $Relaciones <=5  && $Relaciones < 8 ){
			    	echo "BAJO";
			    }else if( $Relaciones <= 8 && $Relaciones < 11 ){
			    	echo "MEDIO";
			    }else if( $Relaciones <= 11  && $Relaciones < 14 ){
			    	echo "ALTO";
			    }else if(  $Relaciones >= 14){
			    	echo "MUY ALTO";
			    }
			  ?></td>
			  <td><?php 
					if ($Violencia < 7 ){
			  		echo "NULO";
			    }else if( $Violencia <= 7  && $Violencia < 10 ){
			    	echo "BAJO";
			    }else if( $Violencia <= 10 && $Violencia < 13 ){
			    	echo "MEDIO";
			    }else if( $Violencia <= 13  && $Violencia < 16 ){
			    	echo "ALTO";
			    }else if(  $Violencia >= 16){
			    	echo "MUY ALTO";
			    }
			  ?></td>
			</tr>
			<tr style="text-align: justify;vertical-align: middle;font-size: .9em;">
			<td><?php
			  if ($Condiciones < 3 ){
			  				echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $Condiciones <= 3  && $Condiciones < 5 ){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $Condiciones <= 5 && $Condiciones < 7 ){
			    	echo"<div class='alert alert-warning'>";
			    	//echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    		echo '
							<div class="card" style="width: 18rem;">
							<div class="card-body">
							<h5 class="card-title">MEDIO</h5>
							<p class="card-text" style="font-size: .7em;" ">Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.</p>
							</div>
							
							
							</div>
			    	';
			    	echo"</div>";
			    }else if( $Condiciones <= 7  && $Condiciones < 9 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    
			    	echo"</div>";
			    }else if(  $Condiciones >= 9 ){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			   ?></td>
			<td><?php 
				if ($CargaTrabajo < 12 ){
			  				echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $CargaTrabajo <= 12 && $CargaTrabajo < 16){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $CargaTrabajo <= 16 && $CargaTrabajo < 20 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo"</div>";
			    }else if( $CargaTrabajo >= 20  && $CargaTrabajo < 24 ){
			    	echo"<div class='alert alert-warning'>";
			    	//echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo '
							<div class="card" style="width: 18rem;">
							
							<div class="card-body">
							<h5 class="card-title">ALTO</h5>
							<p class="card-text" style="font-size: .4em;">Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión</p>
							</div>
							
							
							</div>
			    	';
			    	echo"</div>";
			    }else if(  $CargaTrabajo >= 24 ){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			 ?></td>
			<td><?php 
					if ($FaltaControl < 5 ){
			  				echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $FaltaControl <= 5 && $FaltaControl < 8){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $FaltaControl <= 8 && $FaltaControl < 11 ){
			    	echo"<div class='alert alert-warning'>";
			    	//echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo '
							<div class="card" style="width: 18rem;">
							
							<div class="card-body">
							<h5 class="card-title">MEDIO</h5>
							<p class="card-text" style="font-size: .4em;">Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.</p>
							</div>
							
							
							</div>
			    	';
			    	echo"</div>";
			    }else if( $FaltaControl <= 11  && $FaltaControl < 14 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }else if(  $FaltaControl >= 14 ){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			  ?></td>
			<td><?php 
					if ($JornadaTrabajo < 1 ){
			  				echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $JornadaTrabajo <= 1 && $JornadaTrabajo < 2){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $JornadaTrabajo <= 2 && $JornadaTrabajo < 4 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo"</div>";
			    }else if( $JornadaTrabajo <= 4  && $JornadaTrabajo < 6 ){
			    	echo"<div class='alert alert-warning'>";
			    	//echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	//
			    	echo '
							<div class="card" style="width: 18rem;">
							
							<div class="card-body">
							<h5 class="card-title">ALTO</h5>
							<p class="card-text" style="font-size: .4em;">Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.</p>
							</div>
							
							
							</div>
			    	';
			    	echo"</div>";
			    }else if(  $JornadaTrabajo >= 6 ){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			  ?></td>
			  <td><?php 
					if ($Interferencia < 1 ){
			  				echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $Interferencia <= 1 && $Interferencia < 2){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $Interferencia <= 2 && $Interferencia < 4 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo"</div>";
			    }else if( $Interferencia <= 4  && $Interferencia < 6 ){
			    	echo"<div class='alert alert-warning'>";
			    	//echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo '
							<div class="card" style="width: 18rem;">
							
							<div class="card-body">
							<h5 class="card-title">ALTO</h5>
							<p class="card-text" style="font-size: .4em;">Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.</p>
							</div>
							
							
							</div>
			    	';
			    	echo"</div>";
			    }else if(  $Interferencia >= 6 ){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			  ?></td>
			  <td><?php 
					if ($Liderazgo2 < 3 ){
			  				echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $Liderazgo2 <= 3 && $Liderazgo2 < 5){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $Liderazgo2 <= 5 && $Liderazgo2 < 8 ){
			    	echo"<div class='alert alert-warning'>";
			    	//echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo '
							<div class="card" style="width: 18rem;">
							
							<div class="card-body">
							<h5 class="card-title">MEDIO</h5>
							<p class="card-text" style="font-size: .4em;">Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención</p>
							</div>
							
							
							</div>
			    	';
			    	echo"</div>";
			    }else if( $Liderazgo2 <= 8  && $Liderazgo2 < 11 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }else if(  $Liderazgo2 >= 11 ){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			  ?></td>
			  <td><?php 
					if ($Relaciones < 5 ){
			  				echo"<div class='alert alert-primary'>";
			  		echo "El riesgo resulta despreciable por lo que no se requiere medidas adicionales.";
			  		        echo"</div>";
			    }else if( $Relaciones <= 5 && $Relaciones < 8){
			    	echo"<div class='alert alert-success'>";
			    	echo "Es necesario una mayor difusión de la política de prevención de riesgos psicosociales y programas para: la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral.";
			    	echo"</div>";
			    }else if( $Relaciones <= 8 && $Relaciones <11 ){
			    	echo"<div class='alert alert-warning'>";
			    	//echo "Se requiere revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión, mediante un Programa de intervención.";
			    	echo"</div>";
			    }else if( $Relaciones <=11  && $Relaciones < 14 ){
			    	echo"<div class='alert alert-warning'>";
			    	echo "Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan determinar las acciones de intervención apropiadas a través de un Programa de intervención, que podrá incluir una evaluación específica1 y deberá incluir una campaña de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }else if(  $Relaciones >= 14 ){
			    	echo"<div class='alert alert-danger'>";
			    	echo "Se requiere realizar el análisis de cada categoría y dominio para establecer las acciones de intervención apropiadas, mediante un Programa de intervención que deberá incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, así como reforzar su aplicación y difusión.";
			    	echo"</div>";
			    }
			  ?></td>
			  <td><?php 
					
			  ?></td>
			</tr>
			</tbody>
			</table>