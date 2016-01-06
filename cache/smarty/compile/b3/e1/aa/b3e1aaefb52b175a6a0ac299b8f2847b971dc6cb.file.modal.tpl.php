<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 18:37:16
         compiled from "/Users/Gauthier/Desktop/G-M-Shop/prestashop/admin257hkzkll/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1202881525568d50ccea6296-50473958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3e1aaefb52b175a6a0ac299b8f2847b971dc6cb' => 
    array (
      0 => '/Users/Gauthier/Desktop/G-M-Shop/prestashop/admin257hkzkll/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1448557798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1202881525568d50ccea6296-50473958',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d50cceaaea5_90150978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d50cceaaea5_90150978')) {function content_568d50cceaaea5_90150978($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
