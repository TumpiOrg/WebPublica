<?php /* Smarty version Smarty-3.1.15, created on 2013-10-25 10:50:37
         compiled from "templates\navigation.php" */ ?>
<?php /*%%SmartyHeaderCode:18558526a4991e75f35-99896604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7e2afd5229bffc4293e59d519aa2d46eb03dc81' => 
    array (
      0 => 'templates\\navigation.php',
      1 => 1382698236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18558526a4991e75f35-99896604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526a4991edb867_85241773',
  'variables' => 
  array (
    'navbar' => 0,
    'key' => 0,
    'page' => 0,
    'nav_element' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a4991edb867_85241773')) {function content_526a4991edb867_85241773($_smarty_tpl) {?><div class="navbar-wrapper">
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
                <a class="brand" id="" href="index.php?page=home" style="color:white;">Tumpi</a>
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
" class="<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['key']->value) {?> active <?php }?>"><a href="index.php<?php echo $_smarty_tpl->tpl_vars['nav_element']->value['url'];?>
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
