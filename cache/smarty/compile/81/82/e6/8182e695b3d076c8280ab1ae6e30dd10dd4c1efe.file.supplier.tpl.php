<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 18:34:35
         compiled from "/Users/Gauthier/Desktop/G-M-Shop/prestashop/themes/default-bootstrap/supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1496887322568d502be9f708-98233098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8182e695b3d076c8280ab1ae6e30dd10dd4c1efe' => 
    array (
      0 => '/Users/Gauthier/Desktop/G-M-Shop/prestashop/themes/default-bootstrap/supplier.tpl',
      1 => 1448557798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496887322568d502be9f708-98233098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'supplier' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d502bf141a1_33215330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d502bf141a1_33215330')) {function content_568d502bf141a1_33215330($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<h1 class="page-heading product-listing">
		<?php echo smartyTranslate(array('s'=>'List of products by supplier:'),$_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value->name, ENT_QUOTES, 'UTF-8', true);?>

	</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['supplier']->value->description)) {?>
		<div class="description_box rte">
			<p><?php echo $_smarty_tpl->tpl_vars['supplier']->value->description;?>
</p>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
		<div class="content_sortPagiBar">
	    	<div class="sortPagiBar clearfix">
				<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
	    	<div class="top-pagination-content clearfix">
	        	<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_follow'=>1), 0);?>

	        </div>
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


		<div class="content_sortPagiBar">
	        <div class="bottom-pagination-content clearfix">
	        	<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom','no_follow'=>1), 0);?>

	        </div>
		</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No products for this supplier.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>
<?php }} ?>
