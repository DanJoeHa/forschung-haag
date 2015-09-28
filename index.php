<?php
	
	// hole Config-Parameter
	include('config.php');
	
	// hole Header
	include('template/header.php');
	
	// prüfe angeforderte Seite
	( isset( $_GET['p'] ) ? $p = $_GET['p'] : $p = 0 );
	
	// hole Inhalt
	if( $p > 0 ){
		
		// Seiteninhalt aus Config laden
		$page = $conf['pages'][ $_GET['p'] ];
		
		// Seite laden
		include('template/page.php');		
		
	}else{
		// keine Angabe, Startseite
		include('template/start.php');
	}
	
	// hole Footer
	include('template/footer.php');
	
?>