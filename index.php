<?php

    $navbar = array(
		"reproductorAndroid" => 'Tumpi Android',
		"reproductorPc" => 'Tumpi PC',
		"quienesSomos" => 'Sobre nosotros'
	);
    $page_name = 'home';
    if(isset($_GET['page'])) {
        $page_name = $_GET['page'];
    }
	include("inc/header.php");
	include("inc/navigation.php");
	include("inc/footer.php");
	include("site/$page_name.php");
	include("inc/footer.php");
?>
