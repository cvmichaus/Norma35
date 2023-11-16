
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>


<style type="text/css">

#ventana{
  position: fixed;
  z-index: 100; /*Crea una capa nueva por encima, si tenemos una con valor 2 estará a una altura o por encima de una con 
                valor 1*/
   margin-left:65%; /*Con este margen posicionamos el div donde queramos*/
   background-color: blue;
   color: white;
}
</style>
<body>


<div id="ventana">
	    
		<h4>Calificacion de Dominio</h4>	
		
		CalCondiciones : <span id="total1" name="total1"> </span><br>
		CaCargaTrabajo : <span id="total2" name="total2"> </span><br>
		CalFalta :      <span id="total3" name="total3"> </span><br>
		CalJornada : <span id="total4" name="total4"> </span><br>
		CalInterferencia : <span id="total5" name="total5"> </span><br>
		CalLiderazgo : <span id="total6" name="total6"> </span><br>
		CalRelaciones : <span id="total7" name="total7"> </span><br>
		CalViolencia : <span id="total8" name="total8"> </span><br>
		Total Dominio :<span id="totalDominio" name="totalDominio"> </span><br><br>
		
		<h4>Calificacion de Categoria</h4>
		
		CalAmbiente : <span id="total9" name="total9"> </span><br>
		CalFactores : <span id="total10" name="total10"> </span><br>
		CalOrganizacion : <span id="total11" name="total11"> </span><br>
		CalLiderazgo : <span id="total12" name="total12"> </span><br>
		TotalCategoria : <span id="totalCategoria" name="totalCategoria"> </span><br>
		
		<h4>TOTAL ENCUESTA</h4>
		
		<h3>TOTAL  : <span id="total" name="total"> </span></h3><br>
</div>

<form id="form1">
PREGUNTA 1 
<select  class="form-control"  type="text" name="p1" id="p1"  onchange="verificar();verificar2()" class="formulario_select"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 2 
<select  class="form-control"  type="text" name="p2" id="p2" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 3 
<select  class="form-control"  type="text" name="p3" id="p3" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 4 
<select  class="form-control"  type="text" name="p4" id="p4" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 5
<select  class="form-control"  type="text" name="p5" id="p5" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 6 
<select  class="form-control"  type="text" name="p6" id="p6" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 7
<select  class="form-control"  type="text" name="p7" id="p7" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 8
<select  class="form-control"  type="text" name="p8" id="p8" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 9
<select  class="form-control"  type="text" name="p9" id="p9" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
<hr>
PREGUNTA 10
<select  class="form-control"  type="text" name="p10" id="p10" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 11
<select  class="form-control"  type="text" name="p11" id="p11" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 12
<select  class="form-control"  type="text" name="p12" id="p12" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 13
<select  class="form-control"  type="text" name="p13" id="p13" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
<hr>
PREGUNTA 14
<select  class="form-control"  type="text" name="p14" id="p14" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 15
<select  class="form-control"  type="text" name="p15" id="p15" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 16
<select  class="form-control"  type="text" name="p16" id="p16" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 17
<select  class="form-control"  type="text" name="p17" id="p17" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
<hr>
PREGUNTA 18
<select  class="form-control"  type="text" name="p18" id="p18" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 19
<select  class="form-control"  type="text" name="p19" id="p19" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 20
<select  class="form-control"  type="text" name="p20" id="p20" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 21
<select  class="form-control"  type="text" name="p21" id="p21" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 22
<select  class="form-control"  type="text" name="p22" id="p22" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
<hr>
PREGUNTA 23
<select  class="form-control"  type="text" name="p23" id="p23" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 24
<select  class="form-control"  type="text" name="p24" id="p24" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 25
<select  class="form-control"  type="text" name="p25" id="p25" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 26
<select  class="form-control"  type="text" name="p26" id="p26" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 27
<select  class="form-control"  type="text" name="p27" id="p27" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
<hr>
PREGUNTA 28
<select  class="form-control"  type="text" name="p28" id="p28" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 29
<select  class="form-control"  type="text" name="p29" id="p29" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 30
<select  class="form-control"  type="text" name="p30" id="p30" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 31
<select  class="form-control"  type="text" name="p31" id="p31" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 32
<select  class="form-control"  type="text" name="p32" id="p32" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 33
<select  class="form-control"  type="text" name="p33" id="p33" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="0"> SIEMPRE </option>
<option value="1"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="3"> CASI NUNCA</option>
<option value="4"> NUNCA</option>
</select>	
<br>
PREGUNTA 34
<select  class="form-control"  type="text" name="p34" id="p34" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 35
<select  class="form-control"  type="text" name="p35" id="p35" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 36
<select  class="form-control"  type="text" name="p36" id="p36" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 37
<select  class="form-control"  type="text" name="p37" id="p37" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 38
<select  class="form-control"  type="text" name="p38" id="p38" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 39
<select  class="form-control"  type="text" name="p39" id="p39" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 40
<select  class="form-control"  type="text" name="p40" id="p40" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
<hr>
PREGUNTA 41
<select  class="form-control"  type="text" name="p41" id="p41" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 42
<select  class="form-control"  type="text" name="p42" id="p42" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 43
<select  class="form-control"  type="text" name="p43" id="p43" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
<hr>
PREGUNTA 44
<select  class="form-control"  type="text" name="p44" id="p44" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 45
<select  class="form-control"  type="text" name="p45" id="p45" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
PREGUNTA 46
<select  class="form-control"  type="text" name="p46" id="p46" onchange="verificar();verificar2()"> 
<option value="">::SELECCIONAR::</option>
<option value="4"> SIEMPRE </option>
<option value="3"> CASI SIEMPRE</option>
<option value="2"> ALGUNAS VECES</option>
<option value="1"> CASI NUNCA</option>
<option value="0"> NUNCA</option>
</select>	
<br>
</form>

<script src="scripts.js" ></script>

</body>
</html>

