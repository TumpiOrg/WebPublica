<?php /* Smarty version Smarty-3.1.15, created on 2013-10-23 13:25:40
         compiled from "templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2715177035267b2349eb704-69409547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44473f1c7779fd2764925cf1eff848b4714c81c4' => 
    array (
      0 => 'templates/home.tpl',
      1 => 1382042561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2715177035267b2349eb704-69409547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5267b2349fc777_70696273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5267b2349fc777_70696273')) {function content_5267b2349fc777_70696273($_smarty_tpl) {?><div id="carousel_home" class="carousel slide">
    <ol class="carousel-indicators target">
        <li data-target="#carousel_home" data-slide-to="0" class="active"></li>
        <li data-target="#carousel_home" data-slide-to="1"></li>
        <li data-target="#carousel_home" data-slide-to="2"></li>
        <!--li data-target="#carousel_home" data-slide-to="3"></li-->
    </ol>
    <a id="carousel_button" href="javascript:changeCarouselState(true);"><img class="" src="imgs/general/pause.png" style="left:40px;top:20px;z-index:1;min-width:0px;min-height:0px;height:48px;display:inline;"></img></a>
    <div class="carousel-inner">
        <!-- div class="item active" >
            <img src="imgs/carrousell_home/slide-01.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Antiguas versiones Android</h1>
                    <p class="lead">Tumpi para las antiguas versiones de Android! Si tu version de android de android es menor de la 3.0, tenemos un Tumpi para ti! </p>
                    <p class="lead espaciado">Por ahora no podras crear tus propios tumpis, pero no te preocupes, estamos trabajando en ello.</p>
                    <p class="lead espaciado">Disfrutala, es totalmente gratuita y sin anuncios!!</p>
                    <p>
                        Próximamente en <img alt="Android app on Google Play" style="position: inherit;height:45px;min-width:0px;min-height:0px;" src="https://developer.android.com/images/brand/en_app_rgb_wo_45.png" />
                    </p>
                </div>
            </div>
        </div -->
        <div class="item active">
            <img src="imgs/carrousell_home/slide-02.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Tumpi Android</h1>
                    <p class="lead">
                        ¡Aquí tienes el Tumpi para Android!<br>
                        Conectate al Tumpi de un amigo o crea el tuyo propio donde quieras gracias a la movilidad que ofrece tu smartphone.
                    </p>
                    <p class="lead espaciado">En <a href="index.php?reproductorAndroid">esta página</a> encontraras el manual para la aplicación por si tienes algun problema, aun así, si tienes alguna duda contacta con nosotros a <a href="mailto:support@tumpi.net">support@tumpi.net</a></p>
                    <p class="">Próximamente en <img alt="Android app on Google Play" style="position: inherit;height:45px;min-width:0px;min-height:0px;" src="https://developer.android.com/images/brand/en_app_rgb_wo_45.png" /></p>
                    <!-- link de la imagen cuando este subida: https://play.google.com/store/apps/details?id=Tumpi -->
                </div>
            </div>
        </div>
        <div class="item">
            <img src="imgs/carrousell_home/slide-03.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Crea tu Tumpi en el PC</h1>
                    <p class="lead">¡¡Esta es nuestra aplicación para Escritorio!! Aprovecha esta apliación para poner música en tus fiestas en casa ó en tu garito. Publica tus listas y... ¡A disfrutar! </p>
                    <p class="lead espaciado">Tumpi es multiplataforma, conectate y/o crea un Tumpi desde Windows, Linux, o tu smarthphone y, proximamente desde Macintosh y la Web!</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="imgs/carrousell_home/slide-04.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Sobre Nosotros</h1>
                    <p class="lead">Somos un grupo de cinco estudiantes de 4º de Ingeniería Informática, nos encanta programar y desarrollar sistemas y aplicaciones.</p>
                    <p class="lead espaciado">Todos nuestros esfuerzos y nuestro poco tiempo libre han dado sus frutos en esta aplicación, es nuestra primera "Gran aplicación", y la estamos desarrollando para aprender y para el disfrute de todos, por lo que si veis cualquier "bug", o algo que sea mejorable, no dudeis en mandarnos un correo a: info@tumpi.net</p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control left" href="#carousel_home" data-slide="prev">‹</a>
    <a class="carousel-control right" href="#carousel_home" data-slide="next">›</a>
</div>
<script>
    $("#carousel_home").carousel(
    {
        interval:10000,
        pause:""
    });
    function changeCarouselState(state)
    {
        var elem=document.getElementById("carousel_button");
        if(state)
        {
            $('#carousel_home').carousel('pause');
            elem.href="javascript:changeCarouselState(false);";
            elem.children[0].src="imgs/general/play.png";
        }
        else
        {
            $('#carousel_home').carousel('cycle');
            elem.href="javascript:changeCarouselState(true);";
            elem.children[0].src="imgs/general/pause.png";
        }
    }
</script><?php }} ?>
