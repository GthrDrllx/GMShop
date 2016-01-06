<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 18:34:24
         compiled from "/Users/Gauthier/Desktop/G-M-Shop/prestashop/admin/themes/default/template/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:755121546568d5020861913-97694040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83aa05c55261f02d6d623ce5986387843c75d3c' => 
    array (
      0 => '/Users/Gauthier/Desktop/G-M-Shop/prestashop/admin/themes/default/template/error.tpl',
      1 => 1448557798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755121546568d5020861913-97694040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'php_errors' => 0,
    'php_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d502096e504_81108476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d502096e504_81108476')) {function content_568d502096e504_81108476($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)&&count($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
<div class="bootstrap">
	<div id="error-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="alert alert-danger clearfix">
				<?php  $_smarty_tpl->tpl_vars['php_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['php_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['php_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['php_error']->key => $_smarty_tpl->tpl_vars['php_error']->value) {
$_smarty_tpl->tpl_vars['php_error']->_loop = true;
?>
					<?php echo smartyTranslate(array('s'=>'%1$s on line %2$s in file %3$s','sprintf'=>array(htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['type'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['errline'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['errfile'], ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl);?>
<br />
					[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['errno'], ENT_QUOTES, 'UTF-8', true);?>
] <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['php_error']->value['errstr'], ENT_QUOTES, 'UTF-8', true);?>
<br /><br />
				<?php } ?>
				<button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="icon-remove"></i> Close</button>
			</div>
		</div>
	</div>
</div>
<?php }?><?php }} ?>
