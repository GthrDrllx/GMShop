<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 18:41:14
         compiled from "/Users/Gauthier/Desktop/G-M-Shop/prestashop/modules/socolissimo/views/templates/admin/personnal_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1895783314568d51baa55de6-09015250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e14a5f7ee574e5b927ee602b493208769309d7f' => 
    array (
      0 => '/Users/Gauthier/Desktop/G-M-Shop/prestashop/modules/socolissimo/views/templates/admin/personnal_data.tpl',
      1 => 1452102074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895783314568d51baa55de6-09015250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleDir' => 0,
    'phone' => 0,
    'shop_phone' => 0,
    'personal_data_phone_error' => 0,
    'zip_code' => 0,
    'personal_data_zip_code_error' => 0,
    'parcels' => 0,
    'siret' => 0,
    'siret_error' => 0,
    'info_partner_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d51bab37e02_11946118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d51bab37e02_11946118')) {function content_568d51bab37e02_11946118($_smarty_tpl) {?>

	<script type="text/javascript">
		$(document).ready(function() {
			var personal_content = $("#socolissimo_personal_content").html();
			$.fancybox(personal_content, {type: 'html', autoDimensions: true, minWidth: 600, height: 510, padding: 20, modal: false, hideOnOverlayClick: true});
	
			$('input[name=submitPersonalAskMeLater]').on('click', function() {
				$.fancybox.close();
				return false;
			});
		});
	</script>

<div id="socolissimo_personal_content" style="display: none;">
	<div style="text-align: left; margin:0; padding: 0">
		<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['moduleDir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/logo.png" /> <h2 style="display: inline; vertical-align: middle; margin-left: 6px;"><?php echo smartyTranslate(array('s'=>'Preliminary step','mod'=>'socolissimo'),$_smarty_tpl);?>
</h2>
	</div>

	<hr style="display: block; border-bottom: 1px solid #DDD;">

	<p style="text-align: justify;"><?php echo smartyTranslate(array('s'=>'In order to ensure correct use for this module you need to complete this form','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
	<p style="text-align: justify;"><?php echo smartyTranslate(array('s'=>'Fields followed by * are required','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>

	<form action="" method="post" style="margin-top: 30px; text-align: center">
		<dl style="margin: 0 auto; width: auto; text-align: left">
			<dt style="width: 40%"><label for="personal_phone" style="width: 100%; line-height: 18px; vertical-align: middle"><?php echo smartyTranslate(array('s'=>'Phone number','mod'=>'socolissimo'),$_smarty_tpl);?>
* :</label></dt>
			<dd><input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['phone']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_phone']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" name="SOCOLISSIMO_PERSONAL_PHONE" id="personal_phone" />
				&nbsp;&nbsp;<em style="font-size: .8em; <?php if (isset($_smarty_tpl->tpl_vars['personal_data_phone_error']->value)&&$_smarty_tpl->tpl_vars['personal_data_phone_error']->value) {?> color: red; <?php } else { ?> color: #999;<?php }?>">(<?php echo smartyTranslate(array('s'=>'Example  0144183004','mod'=>'socolissimo'),$_smarty_tpl);?>
)</em>
			</dd><br>

			<dt style="width: 40%"><label for="personal_city" style="width: 100%; line-height: 18px; vertical-align: middle"><?php echo smartyTranslate(array('s'=>'Zip code','mod'=>'socolissimo'),$_smarty_tpl);?>
 * :</label></dt>
			<dd><input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['zip_code']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['zip_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>{ $shop_zip_code|escape:'htmlall':'UTF-8'}<?php }?>" name="SOCOLISSIMO_PERSONAL_ZIP_CODE" id="personal_zip_code" />
				&nbsp;&nbsp;<em style="font-size: .8em;<?php if (isset($_smarty_tpl->tpl_vars['personal_data_zip_code_error']->value)&&$_smarty_tpl->tpl_vars['personal_data_zip_code_error']->value) {?>color: red;<?php } else { ?> color: #999;<?php }?>">(<?php echo smartyTranslate(array('s'=>'Example  92300','mod'=>'socolissimo'),$_smarty_tpl);?>
)</em>						</dd><br>

			<dt style="width: 40%"><label for="personal_quantities" style="width: 100%; line-height: 18px; vertical-align: middle"><?php echo smartyTranslate(array('s'=>'Mean number of parcels','mod'=>'socolissimo'),$_smarty_tpl);?>
* :</label></dt>
			<dd>
				<select name="SOCOLISSIMO_PERSONAL_QUANTITIES" id="personal_quantities">
					<option value="< 250 colis / mois"<?php if (isset($_smarty_tpl->tpl_vars['parcels']->value)&&$_smarty_tpl->tpl_vars['parcels']->value=='< 250 colis / mois') {?> selected <?php }?>><?php echo smartyTranslate(array('s'=>'< 250 parcels / month','mod'=>'socolissimo'),$_smarty_tpl);?>
</option>
					<option value="> 250 colis / mois" <?php if (isset($_smarty_tpl->tpl_vars['parcels']->value)&&$_smarty_tpl->tpl_vars['parcels']->value=='> 250 colis / mois') {?> selected <?php }?>><?php echo smartyTranslate(array('s'=>'> 250 parcels / month','mod'=>'socolissimo'),$_smarty_tpl);?>
</option>
				</select>
			</dd><br>

			<dt style="width: 40%"><label for="personal_siret" style="width: 100%;"><?php echo smartyTranslate(array('s'=>'Siret','mod'=>'socolissimo'),$_smarty_tpl);?>
* :</label></dt>
			<dd><input type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['siret']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="SOCOLISSIMO_PERSONAL_SIRET" id="personal_city" />
			&nbsp;&nbsp;<?php if (isset($_smarty_tpl->tpl_vars['siret_error']->value)&&$_smarty_tpl->tpl_vars['siret_error']->value) {?><em style="font-size: .8em;  color: red;">(<?php echo smartyTranslate(array('s'=>'Siret is mandatory','mod'=>'socolissimo'),$_smarty_tpl);?>
)</em><?php }?></dd>
			
			<dt style="float: left; margin: 20px 0 0 2px;"><input type="checkbox" name="SOCOLISSIMO_INFO_PARTNER" value="1" id="info_partner" /></dt>
			<dd style="margin-top: 15px"><?php echo smartyTranslate(array('s'=>'I accept that informations concerning the number of parcels are sent to our partner La poste -Colissimo.','mod'=>'socolissimo'),$_smarty_tpl);?>
<br>
			<?php echo smartyTranslate(array('s'=>' In case of refusal, you can sent an email at the following address :  ','mod'=>'socolissimo'),$_smarty_tpl);?>
 <a style="color: #268ccd;" href="mailto: modules-prestashop@laposte.fr">modules-prestashop@laposte.fr</a>
			<br><?php if (isset($_smarty_tpl->tpl_vars['info_partner_error']->value)&&$_smarty_tpl->tpl_vars['info_partner_error']->value) {?><em style="font-size: .8em;  color: red;">(<?php echo smartyTranslate(array('s'=>'Please tick check box to continue','mod'=>'socolissimo'),$_smarty_tpl);?>
)</em><?php }?>
			</dd>
		</dl>

		<input type="submit" class="button" name="submitPersonalSave" value="<?php echo smartyTranslate(array('s'=>'Confirm','mod'=>'socolissimo'),$_smarty_tpl);?>
" style="float: right; margin-top: 30px; padding: 10px 20px" />
	</form>
	<form action="" method="post">
		<input type="submit" class="button" name="submitPersonalCancel" value="<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'socolissimo'),$_smarty_tpl);?>
" style="float: right; padding: 10px 20px; margin: 30px 15px 0 0" />
	</form>
</div>
<?php }} ?>
