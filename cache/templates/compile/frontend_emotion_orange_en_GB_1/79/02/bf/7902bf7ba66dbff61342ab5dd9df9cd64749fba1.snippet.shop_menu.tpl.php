<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:26
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\index\shop_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21517524d6f92efc916-95986879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7902bf7ba66dbff61342ab5dd9df9cd64749fba1' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\index\\shop_menu.tpl',
      1 => 1380540881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21517524d6f92efc916-95986879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'currency' => 0,
    'shop' => 0,
    'languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6f934281a7_35922267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6f934281a7_35922267')) {function content_524d6f934281a7_35922267($_smarty_tpl) {?><div id="topbar">

    
    
        <?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1){?>
            <div class="topbar_currency">
                <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                    <form action="" method="post" class="currency">
                        <input type="hidden" name="__currency" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->getId();?>
" />
                        <input type="submit" <?php if ($_smarty_tpl->tpl_vars['currency']->value->getId()===$_smarty_tpl->tpl_vars['shop']->value->getCurrency()->getId()){?>class="active"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->getCurrency();?>
" />
                    </form>
                <?php } ?>
            </div>
        <?php }?>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['shop']->value&&count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
            <div class="topbar_lang">
                <?php if ($_smarty_tpl->tpl_vars['shop']->value&&count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
                    <div class="flag <?php echo $_smarty_tpl->tpl_vars['shop']->value->getLocale()->toString();?>
"><?php echo $_smarty_tpl->tpl_vars['shop']->value->getName();?>
</div>
                <?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
                    <form method="post" action="">
                        <select name="__shop" class="lang_select auto_submit">
                            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value->getId()===$_smarty_tpl->tpl_vars['shop']->value->getId()){?>selected="selected"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>

                                </option>
                            <?php } ?>
                        </select>
                    </form>
                <?php }?>
            </div>
        <?php }?>
    

</div><?php }} ?>