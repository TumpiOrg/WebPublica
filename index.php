<?php
	// include("inc/header.php");
	// include("html/home.html");
	// include("inc/footer.php");
    define('SMARTY_DIR', 'libs/smarty/');
    require(SMARTY_DIR . 'Smarty.class.php');

    $smarty = new Smarty;

    $smarty->template_dir = 'templates/';
    $smarty->compile_dir = SMARTY_DIR . 'templates_c/';
    $smarty->config_dir = SMARTY_DIR . 'configs/';
    $smarty->cache_dir = SMARTY_DIR . 'cache/';

    $page_name = $_GET['page'];
    if(!isset($page_name)) {
        $page_name = 'home';
    }
    $smarty->assign('page', $page_name);

    $navbar = array(
        'reproductorAndroid'  => ['texto'=>'Tumpi Movil',  'url'=>'?page=reproductorAndroid'],
        'reproductorPc' => ['texto'=>'Reproductor PC', 'url'=>'?page=reproductorPc'],
        'quienesSomos' => ['texto'=>'Sobre nosotros', 'url'=>'?page=quienesSomos'],
    );
    $smarty->assign('navbar', $navbar);

    $smarty->display('index.tpl');