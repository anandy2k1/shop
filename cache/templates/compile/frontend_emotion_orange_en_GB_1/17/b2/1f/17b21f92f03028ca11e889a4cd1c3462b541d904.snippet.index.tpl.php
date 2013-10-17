<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:35
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\last_articles\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19003524d6f9b8c9ce3-81021061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17b21f92f03028ca11e889a4cd1c3462b541d904' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\last_articles\\index.tpl',
      1 => 1376334194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19003524d6f9b8c9ce3-81021061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sLastArticles' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6f9b94fdd5_32391012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6f9b94fdd5_32391012')) {function content_524d6f9b94fdd5_32391012($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['sLastArticles']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ("frontend/plugins/index/viewlast.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sLastArticles'=>$_smarty_tpl->tpl_vars['sLastArticles']->value), 0);?>

<?php }?>
<?php }} ?>