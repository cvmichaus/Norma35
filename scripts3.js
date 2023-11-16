		function verificar(){

	 	select1 = document.getElementById("p1").value;
	 	select2 = document.getElementById("p2").value;
	 	select3 = document.getElementById("p3").value;
	 	select4 = document.getElementById("p4").value;
	 	select5 = document.getElementById("p5").value;
	 	select6 = document.getElementById("p6").value;
	 	select7 = document.getElementById("p7").value;
	 	select8 = document.getElementById("p8").value;
	 	select9 = document.getElementById("p9").value;

	 	select10 = document.getElementById("p10").value;
	 	select11 = document.getElementById("p11").value;
	 	select12 = document.getElementById("p12").value;
	 	select13 = document.getElementById("p13").value;

	 	select14 = document.getElementById("p14").value;
	 	select15 = document.getElementById("p15").value;
	 	select16 = document.getElementById("p16").value;
	 	select17 = document.getElementById("p17").value;

	 	select18 = document.getElementById("p18").value;
	 	select19 = document.getElementById("p19").value;
	 	select20 = document.getElementById("p20").value;
	 	select21 = document.getElementById("p21").value;
	 	select22 = document.getElementById("p22").value;

	 	select23 = document.getElementById("p23").value;
	 	select24 = document.getElementById("p24").value;
	 	select25 = document.getElementById("p25").value;
	 	select26 = document.getElementById("p26").value;
	 	select27 = document.getElementById("p27").value;

	 	select28 = document.getElementById("p28").value;
	 	select29 = document.getElementById("p29").value;
	 	select30 = document.getElementById("p30").value;
	 	select31 = document.getElementById("p31").value;
	 	select32 = document.getElementById("p32").value;
	 	select33 = document.getElementById("p33").value;
	 	select34 = document.getElementById("p34").value;
	 	select35 = document.getElementById("p35").value;
	 	select36 = document.getElementById("p36").value;
	 	select37 = document.getElementById("p37").value;
	 	select38 = document.getElementById("p38").value;
	 	select39 = document.getElementById("p39").value;
	 	select40 = document.getElementById("p40").value;

	 	select41 = document.getElementById("p41").value;
	 	select42 = document.getElementById("p42").value;
	 	select43 = document.getElementById("p43").value;

	 	select44 = document.getElementById("p44").value;
	 	select45 = document.getElementById("p45").value;
	 	select46 = document.getElementById("p46").value;

	 	select47 = document.getElementById("p47").value;
	 	select48 = document.getElementById("p48").value;
	 	select49 = document.getElementById("p49").value;
	 	select50 = document.getElementById("p50").value;
	 	select51 = document.getElementById("p51").value;
	 	select52 = document.getElementById("p52").value;
	 	select53 = document.getElementById("p53").value;
	 	select54 = document.getElementById("p54").value;
	 	select55 = document.getElementById("p55").value;
	 	select56 = document.getElementById("p56").value;
	 	select57 = document.getElementById("p57").value;
	 	select58 = document.getElementById("p58").value;
	 	select59 = document.getElementById("p59").value;
	 	select60 = document.getElementById("p60").value;

	 	select61 = document.getElementById("p61").value;
	 	select62 = document.getElementById("p62").value;
	 	select63 = document.getElementById("p63").value;
	 	select64 = document.getElementById("p64").value;
	 	select65 = document.getElementById("p65").value;
	 	select66 = document.getElementById("p66").value;
	 	select67 = document.getElementById("p67").value;
	 	select68 = document.getElementById("p68").value;
	 	select69 = document.getElementById("p69").value;
	 	select70 = document.getElementById("p70").value;

	 	select71 = document.getElementById("p71").value;
	 	select72 = document.getElementById("p72").value;


	 	/*CALIFICACION DE DOMINIO*/
		CalCond =  parseInt(select1) + parseInt(select3) + parseInt(select2)+ parseInt(select4)+ parseInt(select5);
		CalCarga =  parseInt(select6) + parseInt(select12) + parseInt(select7) + parseInt(select8) + parseInt(select9) + parseInt(select10) + parseInt(select11) + parseInt(select65) + parseInt(select66)+ parseInt(select67)+ parseInt(select68)+ parseInt(select13)+ parseInt(select14)+ parseInt(select15)+ parseInt(select16);
		CalFAltaControl = parseInt(select25) + parseInt(select26) + parseInt(select27) + parseInt(select28) + parseInt(select23) + parseInt(select24) + parseInt(select29) + parseInt(select30) + parseInt(select35)+ parseInt(select36);
		CalJornada = parseInt(select17) + parseInt(select18);
		CalInterferencia = parseInt(select19) + parseInt(select20)+ parseInt(select21)+ parseInt(select22);
		CalLiderazgo = parseInt(select31) + parseInt(select32) + parseInt(select33)+ parseInt(select34);
		CalRelaciones =  parseInt(select42) + parseInt(select43) + parseInt(select44) + parseInt(select45) + parseInt(select46) + parseInt(select69)+ parseInt(select70)+ parseInt(select71)+ parseInt(select72);
		CalViolencia = parseInt(select57) + parseInt(select58) + parseInt(select59) + parseInt(select60) + parseInt(select61) + parseInt(select62) + parseInt(select63) + parseInt(select64);
		CalEntornOrg =  parseInt(select47) + parseInt(select48) + parseInt(select49)+ parseInt(select50)+ parseInt(select51)+ parseInt(select52)+ parseInt(select55)+ parseInt(select56)+ parseInt(select53)+ parseInt(select54);

		TotalDom = 	 parseInt(CalCond) + parseInt(CalCarga)  + parseInt(CalFAltaControl)  + parseInt(CalJornada)  + parseInt(CalInterferencia)  + parseInt(CalLiderazgo)  + parseInt(CalRelaciones)  + parseInt(CalViolencia) + parseInt(CalEntornOrg); 
	 	
	 	document.getElementById("Cdom").value = TotalDom;

	 	/*CALIFICACION CATEGORIA*/	
	 	CalAmbiente =  parseInt(select1) + parseInt(select3) + parseInt(select2)+ parseInt(select4)+ parseInt(select5);
	 	CalFactores =   parseInt(select6) + parseInt(select12) + parseInt(select7) + parseInt(select8) + parseInt(select9) + parseInt(select10) + parseInt(select11) + parseInt(select65) + parseInt(select66)+ parseInt(select67)+ parseInt(select68)+ parseInt(select13)+ parseInt(select14)+ parseInt(select15)+ parseInt(select16)+parseInt(select25) + parseInt(select26) + parseInt(select27) + parseInt(select28) + parseInt(select23) + parseInt(select24) + parseInt(select29) + parseInt(select30) + parseInt(select35)+ parseInt(select36);
		CalOrganizacion =  parseInt(select17) + parseInt(select18)+parseInt(select19) + parseInt(select20)+ parseInt(select21)+ parseInt(select22);
		CalLidereazgo = parseInt(select31) + parseInt(select32) + parseInt(select33)+ parseInt(select34)+parseInt(select42) + parseInt(select43) + parseInt(select44) + parseInt(select45) + parseInt(select46) + parseInt(select69)+ parseInt(select70)+ parseInt(select71)+ parseInt(select72)+parseInt(select57) + parseInt(select58) + parseInt(select59) + parseInt(select60) + parseInt(select61) + parseInt(select62) + parseInt(select63) + parseInt(select64);
		CalEntorno =   parseInt(select47) + parseInt(select48) + parseInt(select49)+ parseInt(select50)+ parseInt(select51)+ parseInt(select52)+ parseInt(select55)+ parseInt(select56)+ parseInt(select53)+ parseInt(select54);
		TotalCategoria =  parseInt(CalAmbiente) + parseInt(CalFactores)  + parseInt(CalOrganizacion)  + parseInt(CalLidereazgo)+ parseInt(CalEntorno);

		document.getElementById("Ccat").value = TotalCategoria;


      /* TOTAL */	
	 	total =  parseInt(TotalDom) + parseInt(TotalCategoria);
		
		document.getElementById("Cfinal").value = total;

				if( total < 50){
					document.getElementById("CRes").value = "NULO";
				}
				else if( total >= 50  && total < 75){
					document.getElementById("CRes").value = "BAJO";
				}
				else if( total >= 75  && total < 99){
					document.getElementById("CRes").value = "MEDIO";
				}
				else if( total >= 99  && total < 140){
					document.getElementById("CRes").value = "ALTO";
				}
				else if( total > 140){
					document.getElementById("CRes").value = "MUY ALTO";
				}

		}


	 function verificar2(){

	 	select1 = document.getElementById("p1").value;
	 	select2 = document.getElementById("p2").value;
	 	select3 = document.getElementById("p3").value;
	 	select4 = document.getElementById("p4").value;
	 	select5 = document.getElementById("p5").value;
	 	select6 = document.getElementById("p6").value;
	 	select7 = document.getElementById("p7").value;
	 	select8 = document.getElementById("p8").value;
	 	select9 = document.getElementById("p9").value;

	 	select10 = document.getElementById("p10").value;
	 	select11 = document.getElementById("p11").value;
	 	select12 = document.getElementById("p12").value;
	 	select13 = document.getElementById("p13").value;

	 	select14 = document.getElementById("p14").value;
	 	select15 = document.getElementById("p15").value;
	 	select16 = document.getElementById("p16").value;
	 	select17 = document.getElementById("p17").value;

	 	select18 = document.getElementById("p18").value;
	 	select19 = document.getElementById("p19").value;
	 	select20 = document.getElementById("p20").value;
	 	select21 = document.getElementById("p21").value;
	 	select22 = document.getElementById("p22").value;

	 	select23 = document.getElementById("p23").value;
	 	select24 = document.getElementById("p24").value;
	 	select25 = document.getElementById("p25").value;
	 	select26 = document.getElementById("p26").value;
	 	select27 = document.getElementById("p27").value;

	 	select28 = document.getElementById("p28").value;
	 	select29 = document.getElementById("p29").value;
	 	select30 = document.getElementById("p30").value;
	 	select31 = document.getElementById("p31").value;
	 	select32 = document.getElementById("p32").value;
	 	select33 = document.getElementById("p33").value;
	 	select34 = document.getElementById("p34").value;
	 	select35 = document.getElementById("p35").value;
	 	select36 = document.getElementById("p36").value;
	 	select37 = document.getElementById("p37").value;
	 	select38 = document.getElementById("p38").value;
	 	select39 = document.getElementById("p39").value;
	 	select40 = document.getElementById("p40").value;

	 	select41 = document.getElementById("p41").value;
	 	select42 = document.getElementById("p42").value;
	 	select43 = document.getElementById("p43").value;

	 	select44 = document.getElementById("p44").value;
	 	select45 = document.getElementById("p45").value;
	 	select46 = document.getElementById("p46").value;

	 	select47 = document.getElementById("p47").value;
	 	select48 = document.getElementById("p48").value;
	 	select49 = document.getElementById("p49").value;
	 	select50 = document.getElementById("p50").value;
	 	select51 = document.getElementById("p51").value;
	 	select52 = document.getElementById("p52").value;
	 	select53 = document.getElementById("p53").value;
	 	select54 = document.getElementById("p54").value;
	 	select55 = document.getElementById("p55").value;
	 	select56 = document.getElementById("p56").value;
	 	select57 = document.getElementById("p57").value;
	 	select58 = document.getElementById("p58").value;
	 	select59 = document.getElementById("p59").value;
	 	select60 = document.getElementById("p60").value;

	 	select61 = document.getElementById("p61").value;
	 	select62 = document.getElementById("p62").value;
	 	select63 = document.getElementById("p63").value;
	 	select64 = document.getElementById("p64").value;
	 	select65 = document.getElementById("p65").value;
	 	select66 = document.getElementById("p66").value;
	 	select67 = document.getElementById("p67").value;
	 	select68 = document.getElementById("p68").value;
	 	select69 = document.getElementById("p69").value;
	 	select70 = document.getElementById("p70").value;

	 	select71 = document.getElementById("p71").value;
	 	select72 = document.getElementById("p72").value;

}