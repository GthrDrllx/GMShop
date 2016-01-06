<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 18:37:27
         compiled from "/Users/Gauthier/Desktop/G-M-Shop/prestashop/admin257hkzkll/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1964404217568d50d700c495-43338533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67434c24d0b2926a908607d47122a0b11f79036d' => 
    array (
      0 => '/Users/Gauthier/Desktop/G-M-Shop/prestashop/admin257hkzkll/themes/default/template/content.tpl',
      1 => 1448557798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1964404217568d50d700c495-43338533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d50d7017669_99095853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d50d7017669_99095853')) {function content_568d50d7017669_99095853($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
