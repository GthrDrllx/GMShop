<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 18:34:16
         compiled from "/Users/Gauthier/Desktop/G-M-Shop/prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1394194042568d501899d733-09094394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '861aa5200f3fba354b75992916f9ff1570327957' => 
    array (
      0 => '/Users/Gauthier/Desktop/G-M-Shop/prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1448557798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1394194042568d501899d733-09094394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d50189a3270_09462300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d50189a3270_09462300')) {function content_568d50189a3270_09462300($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
