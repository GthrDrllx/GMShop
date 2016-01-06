<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 18:41:14
         compiled from "/Users/Gauthier/Desktop/G-M-Shop/prestashop/modules/socolissimo/views/templates/admin/back_office.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2048064863568d51bab7d829-93572858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f009e79ab3217c8ca5d787db4ead1bffa97fbf72' => 
    array (
      0 => '/Users/Gauthier/Desktop/G-M-Shop/prestashop/modules/socolissimo/views/templates/admin/back_office.tpl',
      1 => 1452102074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2048064863568d51bab7d829-93572858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'supcostbelg' => 0,
    'taxrate' => 0,
    'moduleDir' => 0,
    'id_user' => 0,
    'key' => 0,
    'dypreparationtime' => 0,
    'costseller' => 0,
    'exp_bel_activ' => 0,
    'supcostbelgttc' => 0,
    'url_so' => 0,
    'url_so_mobile' => 0,
    'display_type' => 0,
    'sup_active' => 0,
    'url_sup' => 0,
    'carrier_socolissimo' => 0,
    'carrier' => 0,
    'id_socolissimo' => 0,
    'carrier_socolissimo_cc' => 0,
    'id_socolissimo_cc' => 0,
    'validation_url' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d51bad1b407_51916497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d51bad1b407_51916497')) {function content_568d51bad1b407_51916497($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['supcostbelg']->value)) {?><?php $_smarty_tpl->tpl_vars['supcostbelgttc'] = new Smarty_variable($_smarty_tpl->tpl_vars['supcostbelg']->value*(1+($_smarty_tpl->tpl_vars['taxrate']->value/100)), null, 0);?><?php }?>
<div class="warn">  <p><?php echo smartyTranslate(array('s'=>'Warning, usage of this module in opc mobile theme is not recommended in production mode for your website.','mod'=>'socolissimo'),$_smarty_tpl);?>
</p></div>
<form action="<?php echo mb_convert_encoding(htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" class="form">
    <input type="hidden" value=<?php if (isset($_smarty_tpl->tpl_vars['taxrate']->value)) {?><?php echo $_smarty_tpl->tpl_vars['taxrate']->value;?>
<?php } else { ?>0<?php }?> class="taxrate" name="taxrate" />
    <fieldset><legend><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['moduleDir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/logo.gif" alt="" /><?php echo smartyTranslate(array('s'=>'Description','mod'=>'socolissimo'),$_smarty_tpl);?>
</legend>
        <?php echo smartyTranslate(array('s'=>'SoColissimo is a service offered by La Poste, which allows you to offer buyers 5 modes of delivery.','mod'=>'socolissimo'),$_smarty_tpl);?>
 :
        <br/><br/><ul style ="list-style:disc outside none;margin-left:30px;">
            <li><?php echo smartyTranslate(array('s'=>'Home delivery','mod'=>'socolissimo'),$_smarty_tpl);?>
.</li>
            <li><?php echo smartyTranslate(array('s'=>'Home delivery (with appointment) between 5pm and 9:30pm ','mod'=>'socolissimo'),$_smarty_tpl);?>
.</li>
            <li><?php echo smartyTranslate(array('s'=>'Delivery in one of 31 Cityssimo locations 24/7','mod'=>'socolissimo'),$_smarty_tpl);?>
.</li>
            <li><?php echo smartyTranslate(array('s'=>'Delivery in one of 10 000 post offices ','mod'=>'socolissimo'),$_smarty_tpl);?>
.</li>
            <li><?php echo smartyTranslate(array('s'=>'Delivery in one of the many pickup points of the La Poste partner network','mod'=>'socolissimo'),$_smarty_tpl);?>
.</li>
        </ul>
        <p><?php echo smartyTranslate(array('s'=>'This module is free and allows you to activate the offer on your store.','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
    </fieldset>
    <div class="clear">&nbsp;</div>
    <fieldset><legend><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['moduleDir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/logo.gif" alt="" /><?php echo smartyTranslate(array('s'=>'Settings','mod'=>'socolissimo'),$_smarty_tpl);?>
</legend>
        <label style="color:#CC0000;text-decoration : underline;"><?php echo smartyTranslate(array('s'=>'Important','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <p  style="width:500px"><?php echo smartyTranslate(array('s'=>'To open your SoColissimo account, please contact "La Poste" at this phone number: 3634 (French phone number).','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'ID So','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <input type="text" name="id_user" value="<?php if (isset($_smarty_tpl->tpl_vars['id_user']->value)) {?><?php echo $_smarty_tpl->tpl_vars['id_user']->value;?>
<?php }?>" />
            <p><?php echo smartyTranslate(array('s'=>'Id user for back office SoColissimo.','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Key','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <input type="text" name="key" value="<?php if (isset($_smarty_tpl->tpl_vars['key']->value)) {?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php }?>" />
            <p><?php echo smartyTranslate(array('s'=>'Secure key for back office SoColissimo.','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Preparation time','mod'=>'socolissimo'),$_smarty_tpl);?>
: </label>
        <div class="margin-form">
            <input type="text" size="5" name="dypreparationtime" value="<?php if (isset($_smarty_tpl->tpl_vars['dypreparationtime']->value)) {?><?php echo $_smarty_tpl->tpl_vars['dypreparationtime']->value;?>
<?php } else { ?>0<?php }?>" /><?php echo smartyTranslate(array('s'=>'Day(s)','mod'=>'socolissimo'),$_smarty_tpl);?>

            <p><?php echo smartyTranslate(array('s'=>'Average time for preparing your orders.','mod'=>'socolissimo'),$_smarty_tpl);?>
 <br><span style="color:red">
                    <?php echo smartyTranslate(array('s'=>'Average time must match that of Coliposte back office.','mod'=>'socolissimo'),$_smarty_tpl);?>
</span></p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Seller expedition cost in France','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <input type="radio" name="costseller" id="sel_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['costseller']->value)&&$_smarty_tpl->tpl_vars['costseller']->value) {?>checked="checked" <?php }?>'/>
                   <label class="t" for="sel_on"> <img src="../img/admin/enabled.gif" alt="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'socolissimo'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'socolissimo'),$_smarty_tpl);?>
" /></label>
            <input type="radio" name="costseller" id="sel_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['costseller']->value)&&!$_smarty_tpl->tpl_vars['costseller']->value) {?> checked="checked" <?php }?>/>
            <label class="t" for="sel_off"> <img src="../img/admin/disabled.gif" alt="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'socolissimo'),$_smarty_tpl);?>
'" title="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'socolissimo'),$_smarty_tpl);?>
" /></label>
            <p><?php echo smartyTranslate(array('s'=>'Seller expedition cost in France','mod'=>'socolissimo'),$_smarty_tpl);?>
 <br><span style="color:red">
                    <?php echo smartyTranslate(array('s'=>'This cost override the normal cost for seller delivery.','mod'=>'socolissimo'),$_smarty_tpl);?>
</span></p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Expedition in belgium','mod'=>'socolissimo'),$_smarty_tpl);?>
: </label>
        <div class="margin-form">
            <input type="radio" name="exp_bel_active" id="exp_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['exp_bel_activ']->value)&&$_smarty_tpl->tpl_vars['exp_bel_activ']->value) {?>checked="checked" <?php }?>'/>
                   <label class="t" for="exp_on"> <img src="../img/admin/enabled.gif" alt="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'socolissimo'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'socolissimo'),$_smarty_tpl);?>
" /></label>
            <input type="radio" name="exp_bel_active" id="exp_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['exp_bel_activ']->value)&&!$_smarty_tpl->tpl_vars['exp_bel_activ']->value) {?> checked="checked" <?php }?>/>
            <label class="t" for="exp_off"> <img src="../img/admin/disabled.gif" alt="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'socolissimo'),$_smarty_tpl);?>
'" title="<?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'socolissimo'),$_smarty_tpl);?>
" /></label>
            <p><?php echo smartyTranslate(array('s'=>'Enable or disable expedition in belgium.','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Overcost for Belgium','mod'=>'socolissimo'),$_smarty_tpl);?>
: </label>
        <div class="margin-form">
            <input type="text" size="5" class="supcostbelg" name="supcostbelg" onkeyup="this.value = this.value.replace(/,/g, '.');" value="<?php if (isset($_smarty_tpl->tpl_vars['supcostbelg']->value)) {?><?php echo $_smarty_tpl->tpl_vars['supcostbelg']->value;?>
<?php } else { ?>0<?php }?>" /> HT
            <input type="text" size="5" name="costbelgttc" class="costbelgttc" value="<?php if (isset($_smarty_tpl->tpl_vars['supcostbelgttc']->value)) {?><?php echo number_format($_smarty_tpl->tpl_vars['supcostbelgttc']->value,2,".",'');?>
<?php } else { ?>0<?php }?>" readonly/> TTC
            <p><?php echo smartyTranslate(array('s'=>'Overcost for Belgium','mod'=>'socolissimo'),$_smarty_tpl);?>
 <br><span style="color:red">
                    <?php echo smartyTranslate(array('s'=>'Additional cost for Belgium must match that of Coliposte back office.','mod'=>'socolissimo'),$_smarty_tpl);?>
</span></p>
        </div>
        <div class="margin-form">
            <p>--------------------------------------------------------------------------------------------------------</p>
            <span style="color:red">
                <?php echo smartyTranslate(array('s'=>'Be VERY CAREFUL with these settings, any changes may cause the module to malfunction.','mod'=>'socolissimo'),$_smarty_tpl);?>

            </span>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Url So','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <input type="text" size="45" name="url_so" value="<?php if (isset($_smarty_tpl->tpl_vars['url_so']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['url_so']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" />
            <p><?php echo smartyTranslate(array('s'=>'Url of back office SoColissimo.','mod'=>'socolissimo'),$_smarty_tpl);?>
<br/></p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Url So Mobile','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <input type="text" size="45" name="url_so_mobile" value="<?php if (isset($_smarty_tpl->tpl_vars['url_so_mobile']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['url_so_mobile']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" />
            <p><?php echo smartyTranslate(array('s'=>'Url of back office SoColissimo Mobile. Customers with smartphones or ipad will be redirect there. Warning, this url do not allow delivery in belgium','mod'=>'socolissimo'),$_smarty_tpl);?>

			<br/></p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Display Mode','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <input type="radio" name="display_type" id="classic_on" value="0" <?php if (isset($_smarty_tpl->tpl_vars['display_type']->value)&&!$_smarty_tpl->tpl_vars['display_type']->value) {?> checked="checked" <?php }?>/>
            <label class="t" for="classic_on"> Classic </label>
            <input type="radio" name="display_type" id="fancybox_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['display_type']->value)&&$_smarty_tpl->tpl_vars['display_type']->value==1) {?> checked="checked" <?php }?>/>
            <label class="t" for="fancybox_on"> Fancybox </label>
            <input type="radio" name="display_type" id="iframe_on" value="2" <?php if (isset($_smarty_tpl->tpl_vars['display_type']->value)&&$_smarty_tpl->tpl_vars['display_type']->value==2) {?> checked="checked"<?php }?>/>
            <label class="t" for="iframe_on"> iFrame </label>
            <p><?php echo smartyTranslate(array('s'=>'Choose your display mode for windows Socolissimo','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Supervision','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <input type="radio" name="sup_active" id="active_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['sup_active']->value)&&$_smarty_tpl->tpl_vars['sup_active']->value) {?>checked="checked" <?php }?>/>
            <label class="t" for="active_on"> <img src="../img/admin/enabled.gif" alt="' . $this->l('Enabled') . '" title="' . $this->l('Enabled') . '" /></label>
            <input type="radio" name="sup_active" id="active_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['sup_active']->value)&&!$_smarty_tpl->tpl_vars['sup_active']->value) {?>checked="checked"<?php }?>/>
                   <label class="t" for="active_off"> <img src="../img/admin/disabled.gif" alt="' . $this->l('Disabled') . '" title="' . $this->l('Disabled') . '" /></label>
            <p><?php echo smartyTranslate(array('s'=>'Enable or disable the check availability  of SoColissimo service.','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Url Supervision','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <input type="text" size="45" name="url_sup" value="<?php if (isset($_smarty_tpl->tpl_vars['url_sup']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['url_sup']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" />
            <p><?php echo smartyTranslate(array('s'=>'The monitor URL is to ensure the availability of the socolissimo service. We strongly recommend that you do not disable it','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Allocation socolissimo','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <select name="id_socolissimo_allocation">
                <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrier_socolissimo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
?>
                      <?php if ($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']==$_smarty_tpl->tpl_vars['id_socolissimo']->value) {?>
                        <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" selected><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                    <?php }?>
                <?php } ?>
            </select>
            <p><?php echo smartyTranslate(array('s'=>'Re allocation of SoColissimo id carrier.','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
        </div>
        <label><?php echo smartyTranslate(array('s'=>'Allocation socolissimo CC','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
        <div class="margin-form">
            <select name="id_socolissimocc_allocation">
                <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrier_socolissimo_cc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['carrier']->value['id_carrier']==$_smarty_tpl->tpl_vars['id_socolissimo_cc']->value) {?>
                        <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" selected><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id_carrier'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                    <?php }?>
                <?php } ?>
            </select>
            <p><?php echo smartyTranslate(array('s'=>'Re allocation of SoColissimo CC id carrier.','mod'=>'socolissimo'),$_smarty_tpl);?>
</p>
        </div>
        <div class="margin-form">
            <input type="submit" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'socolissimo'),$_smarty_tpl);?>
" name="submitSave" class="button" style="margin:10px 0px 0px 25px;" />
        </div>
    </fieldset></form>
<div class="clear">&nbsp;</div>
<fieldset><legend><img src="<?php echo $_smarty_tpl->tpl_vars['moduleDir']->value;?>
/logo.gif" alt="" /><?php echo smartyTranslate(array('s'=>'Information','mod'=>'socolissimo'),$_smarty_tpl);?>
</legend>
    <p><?php echo smartyTranslate(array('s'=>'Please fill in these two addresses in your Back Office SoColissimo.','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </p><br>
    <label><?php echo smartyTranslate(array('s'=>'Validation url','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
    <div class="margin-form">
        <p><?php if (isset($_smarty_tpl->tpl_vars['validation_url']->value)) {?><?php echo $_smarty_tpl->tpl_vars['validation_url']->value;?>
<?php }?></p>
    </div>
    <label><?php echo smartyTranslate(array('s'=>'Return url','mod'=>'socolissimo'),$_smarty_tpl);?>
 : </label>
    <div class="margin-form">
        <p><?php if (isset($_smarty_tpl->tpl_vars['return_url']->value)) {?><?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
<?php }?></p>
    </div>
</fieldset>

    <script type="text/javascript">
    $( document ).ready(function(){
    $( ".supcostbelg" ).change(function(){
    var ttc = $( ".supcostbelg" ).val() *(1+($( ".taxrate" ).val()/100));
    ttc = Math.round(ttc *100)/100;
    $( ".costbelgttc" ).val(ttc);
        });
    });
    </script>
<?php }} ?>
