<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:27
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\frontend\compare\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8464524d6f93c764b5-46084445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae93c539f59284081dba873a44a88984a31370de' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\frontend\\compare\\index.tpl',
      1 => 1376334194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8464524d6f93c764b5-46084445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sComparisons' => 0,
    'compare' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6f93eed2a9_35112696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6f93eed2a9_35112696')) {function content_524d6f93eed2a9_35112696($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\Smarty\\plugins\\modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['sComparisons']->value){?>
<div id="compareContainer" onmouseover="jQuery.compare.showCompare();" onmouseout="jQuery.compare.hideCompare();">
	<span id="compareHighlight"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareInfoCount",'default'=>'Mein Vergleich','namespace'=>'frontend/compare/index','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'default'=>'Mein Vergleich','namespace'=>'frontend/compare/index','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compare product<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'default'=>'Mein Vergleich','namespace'=>'frontend/compare/index','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span class="comparisons"><?php echo count($_smarty_tpl->tpl_vars['sComparisons']->value);?>
</span></span>
</div>
<div id="compareContainerResults" onmouseover="jQuery.compare.showCompare();" onmouseout="jQuery.compare.hideCompare()">
<div class="arrow"></div>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['compare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['compare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sComparisons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['compare']->key => $_smarty_tpl->tpl_vars['compare']->value){
$_smarty_tpl->tpl_vars['compare']->_loop = true;
?>
		<li>
			<div><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['compare']->value['articlename'],30);?>
</div>
			<a href="<?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'delete_article', 'articleID' => $_smarty_tpl->tpl_vars['compare']->value['articleID'], )); ?>" rel="nofollow" class="del_comp compare_delete_article">&nbsp;</a>
		</li>
		<?php } ?>
		
		
		<li class="bt_compare">
			<a href="<?php echo 'http://localhost/shop/compare/overlay';?>" rel="nofollow" class="bt_compare compare_get_overlay" onclick="return false;">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareActionStart",'namespace'=>'frontend/compare/index','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionStart",'namespace'=>'frontend/compare/index','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Start comparison<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionStart",'namespace'=>'frontend/compare/index','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</a>
		</li>
		
		<li class="last">
			<a href="<?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'delete_all', 'forceSecure' => '1', )); ?>" rel="nofollow" class="bt_compare_del compare_delete_all" onclick="return false;">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareActionDelete",'namespace'=>'frontend/compare/index','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionDelete",'namespace'=>'frontend/compare/index','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete comparison<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionDelete",'namespace'=>'frontend/compare/index','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</a>
		</li>
	</ul>
</div>
<?php }?><?php }} ?>