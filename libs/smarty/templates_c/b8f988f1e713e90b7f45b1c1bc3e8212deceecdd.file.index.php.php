<?php /* Smarty version Smarty-3.1.15, created on 2013-10-25 15:29:48
         compiled from "templates\index.php" */ ?>
<?php /*%%SmartyHeaderCode:4330526a488d1bfba9-99147958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8f988f1e713e90b7f45b1c1bc3e8212deceecdd' => 
    array (
      0 => 'templates\\index.php',
      1 => 1382714970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4330526a488d1bfba9-99147958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526a488d248766_14218562',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a488d248766_14218562')) {function content_526a488d248766_14218562($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navigation.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
