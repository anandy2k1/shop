<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:35
         compiled from "D:\data\Ampps\www\shop\templates\_default\frontend\plugins\index\tagcloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6346524d6f9b5df441-53039811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec95104e7e8234c31c68f242bb96bb3cf144bb6' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\frontend\\plugins\\index\\tagcloud.tpl',
      1 => 1376334194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6346524d6f9b5df441-53039811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sCloud' => 0,
    'sCloudItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6f9b7a45a2_49626250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6f9b7a45a2_49626250')) {function content_524d6f9b7a45a2_49626250($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\Smarty\\plugins\\modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['sCloud']->value){?>
<h2 class="headingbox_nobg"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"TagcloudHead",'namespace'=>'frontend/plugins/index/tagcloud')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"TagcloudHead",'namespace'=>'frontend/plugins/index/tagcloud'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag cloud<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"TagcloudHead",'namespace'=>'frontend/plugins/index/tagcloud'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<div class="tagcloud">
    <?php  $_smarty_tpl->tpl_vars['sCloudItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sCloudItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sCloud']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sCloudItem']->key => $_smarty_tpl->tpl_vars['sCloudItem']->value){
$_smarty_tpl->tpl_vars['sCloudItem']->_loop = true;
?>
    	<a href="<?php echo Shopware_Plugins_Core_PostFilter_Bootstrap::rewriteLink($_smarty_tpl->tpl_vars['sCloudItem']->value['link'], $_smarty_tpl->tpl_vars['sCloudItem']->value['name']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['sCloudItem']->value['name'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['sCloudItem']->value['class'];?>
">
    		<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['sCloudItem']->value['name'],15,'',false);?>

    	</a> 
    <?php } ?>
</div>
<?php }?><?php }} ?>