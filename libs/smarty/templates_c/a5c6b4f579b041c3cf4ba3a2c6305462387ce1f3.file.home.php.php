<?php /* Smarty version Smarty-3.1.15, created on 2013-10-26 19:07:05
         compiled from "templates\home.php" */ ?>
<?php /*%%SmartyHeaderCode:8405526a482acd0700-88629922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5c6b4f579b041c3cf4ba3a2c6305462387ce1f3' => 
    array (
      0 => 'templates\\home.php',
      1 => 1382814377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8405526a482acd0700-88629922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526a482acd8401_01469938',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a482acd8401_01469938')) {function content_526a482acd8401_01469938($_smarty_tpl) {?><div id="carousel_home" class="carousel slide">
    <ol class="carousel-indicators target">
        <li data-target="#carousel_home" data-slide-to="0" class="active"></li>
        <li data-target="#carousel_home" data-slide-to="1"></li>
        <li data-target="#carousel_home" data-slide-to="2"></li>
        <!--li data-target="#carousel_home" data-slide-to="3"></li-->
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="imgs/carrousell_home/slide-02.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Tumpi Android</h1>
                    <p class="lead">
                        ¡Tumpi para Android ya está aquí!<br>
                        Conéctate al Tumpi de un amigo o crea el tuyo propio donde quieras con tu smartphone Android.
                    </p>
                    <br>
                    <p class=""><a href="https://play.google.com/store/apps/details?id=app.tumpi"><img alt="Android app on Google Play" style="position: inherit;height:45px;min-width:0px;min-height:0px;" src="https://developer.android.com/images/brand/es_app_rgb_wo_45.png" /></a></p>
                    <p class="lead espaciado"><a href="index.php?page=reproductorAndroid">Aquí</a> puedes consultar el manual de la aplicación por si tienes algún problema. Si todavía tienes alguna duda contacta con nosotros: <a href="mailto:support@tumpi.net">support@tumpi.net</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="imgs/carrousell_home/slide-03.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Tumpi en tu PC</h1>
                    <p class="lead">
                        ¡También puedes crear tu Tumpi desde tu ordenador! 
                        Usa Tumpi PC para elegir la música de tus fiestas en casa o en tu local. Publica tus listas, mira cómo votan tus amigos y... ¡A disfrutar! 
                    </p>
                    <p class="lead espaciado">Tumpi es multiplataforma, conéctate y crea un Tumpi desde Windows y Linux. También proximamente disponible para Mac OS y Web.</p>
					<p class=""><a href="app/TUMPIPC.zip">Descárgalo aquí.</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="imgs/carrousell_home/slide-04.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>¿Quiénes somos?</h1>
                    <p class="lead">Somos cinco estudiantes de 4º de Ingeniería Informática y nos hemos embarcado en nuestro primer pequeño gran reto.</p>
                    <p class="lead espaciado">Hemos puesto toda nuestra ilusión, esfuerzo y nuestro poco tiempo libre en este proyecto. Esperamos que disfrutéis de Tumpi tanto como estamos disfrutando nosotros creándolo. Es un proyecto joven, y estamos tratando de aprender, así que si encontráis cualquier error o queréis hacernos cualquier sugerencia, ¡no dudéis en mandarnos un <a href="mailto:dev@tumpi.net">mail</a>!. </p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control left" href="#carousel_home" data-slide="prev">‹</a>
    <a class="carousel-control right" href="#carousel_home" data-slide="next">›</a>
</div>
<script>
    $("#carousel_home").carousel({ interval:10000 });
</script><?php }} ?>
