<?php

	function desencriptar($q){

			$key='NORMA35INC';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
			$result = '';
			$string = base64_decode($q);
			for($i=0; $i<strlen($string); $i++) {
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char)-ord($keychar));
			$result.=$char;
			}
			return $result;

	}

	$encrypted  = 'r72ys7mpoqi9';
	$encrypted2 = 'jLyys72qp5a1gHN/hw==';
	$encrypted3 = 'tq8=';
	$encrypted4 = 'kZ2hn450aA==';

	
	$SERVER =  desencriptar( $encrypted );
	$PASS   =  desencriptar( $encrypted2 );
	$USER   =  desencriptar( $encrypted3 );
	$BASE   =  desencriptar( $encrypted4 );
	

	$info= array('Database'=>$BASE, 'UID'=>$USER, 'PWD'=>$PASS);
	$con= sqlsrv_connect($SERVER, $info);
	if(!$con)
		die( print_r(sqlsrv_errors(),true));
	else
	{
		
	}
	
?>
