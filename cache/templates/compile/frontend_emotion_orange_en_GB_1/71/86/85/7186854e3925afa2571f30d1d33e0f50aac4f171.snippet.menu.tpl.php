<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:27
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\index\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28610524d6f9352deb5-07422762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7186854e3925afa2571f30d1d33e0f50aac4f171' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\index\\menu.tpl',
      1 => 1376334194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28610524d6f9352deb5-07422762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sGroup' => 0,
    'sMenu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6f9371e483_62790915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6f9371e483_62790915')) {function content_524d6f9371e483_62790915($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sMenu']->value[$_smarty_tpl->tpl_vars['sGroup']->value]){?>
<ul id="servicenavi">
<span class="arrow"></span>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sMenu']->value[$_smarty_tpl->tpl_vars['sGroup']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li>
            <a href="<?php if ($_smarty_tpl->tpl_vars['item']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
<?php }else{ ?><?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'custom', 'sCustom' => $_smarty_tpl->tpl_vars['item']->value['id'], 'title' => $_smarty_tpl->tpl_vars['item']->value['description'], )); ?><?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']){?>target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

            </a>
        </li>
    <?php } ?>
</ul>
<?php }?><?php }} ?>