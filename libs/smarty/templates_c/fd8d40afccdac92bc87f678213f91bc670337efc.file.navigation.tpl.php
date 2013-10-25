<?php /* Smarty version Smarty-3.1.15, created on 2013-10-25 10:22:20
         compiled from "templates\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20628526a465c0f4370-35838778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd8d40afccdac92bc87f678213f91bc670337efc' => 
    array (
      0 => 'templates\\navigation.tpl',
      1 => 1382696357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20628526a465c0f4370-35838778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navbar' => 0,
    'key' => 0,
    'page' => 0,
    'nav_element' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526a465c15db29_17868485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a465c15db29_17868485')) {function content_526a465c15db29_17868485($_smarty_tpl) {?><div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                </button>
                <a class="brand seleccionado" id="" href="index.php?page=home">Tumpi</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                    <?php  $_smarty_tpl->tpl_vars['nav_element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_element']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navbar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_element']->key => $_smarty_tpl->tpl_vars['nav_element']->value) {
$_smarty_tpl->tpl_vars['nav_element']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_element']->key;
?>
                        <li id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><a class="
                            <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['key']->value) {?>
                                 seleccionado
                            <?php }?>
                        " href="index.php<?php echo $_smarty_tpl->tpl_vars['nav_element']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_element']->value['texto'];?>
</a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
