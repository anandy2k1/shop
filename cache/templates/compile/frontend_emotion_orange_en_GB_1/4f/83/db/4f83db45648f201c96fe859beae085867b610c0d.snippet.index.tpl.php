<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:28
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9225524d6f947a2135-02113915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f83db45648f201c96fe859beae085867b610c0d' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\index.tpl',
      1 => 1376334194,
      2 => 'file',
    ),
    'ca759ea19f43e3636cac3ae5d39a1e16b9603b49' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\frontend\\listing\\box_article.tpl',
      1 => 1376334194,
      2 => 'parent',
    ),
    '440bcb139d1764f48a3f9c3b79acba75003390ca' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\frontend\\listing\\box_article.tpl',
      1 => 1376334194,
      2 => 'parent',
    ),
    '6198f08368c6bf342462148c2cbf0d80c70ee6b1' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_article.tpl',
      1 => 1380798765,
      2 => 'snippet',
    ),
    'f74afc3adc36fa814addcf1c6a510dc9be0f3400' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\slide_articles.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    '2a86fb7e1f37dc12850f874994a956cc43d35af6' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_article_slider.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    '45db9052154dc79a91a01e1987deee2dd2043f64' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_banner.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    '1a1ae7ded08b723fc9d1484646865a76b9bff8cc' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_banner_slider.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    '52e8790252803f14e9a9f4d548c04734ff7042d1' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_blog.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    'e1b3d24e178a84c458ba92d7472cf8df4a3cba54' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_category_teaser.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    '973333f7b6d84d4db3be72deb9c84ba938f9c2bf' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_html.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    '4ae2db1cbe8c16c0180ead70040f6e316af2874a' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_iframe.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    'b2eb833a17c15cb01f3350d3663488f5e9d248b8' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_manufacturer_slider.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    '1852035b734fd917c5fd112be95b17116f50385b' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_emotion\\widgets\\emotion\\components\\component_youtube.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '9225524d6f947a2135-02113915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sEmotions' => 1,
    'emotion' => 1,
    'element' => 1,
    'cellWidth' => 1,
    'cellHeight' => 1,
    'listingTpl' => 1,
    'colWidth' => 1,
    'colHeight' => 1,
    'elementHeight' => 1,
    'elementWidth' => 1,
    'categoryId' => 1,
    'Controller' => 1,
    'style' => 1,
    'left' => 1,
    'top' => 1,
    'template' => 1,
    'finalEndRow' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6f9a9f8b35_53015929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6f9a9f8b35_53015929')) {function content_524d6f9a9f8b35_53015929($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['sEmotions']->value)>0){?>
<?php $_smarty_tpl->tpl_vars['style'] = new Smarty_variable('', true, 0);?>
<?php  $_smarty_tpl->tpl_vars['emotion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emotion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sEmotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['emotion']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['emotion']->key => $_smarty_tpl->tpl_vars['emotion']->value){
$_smarty_tpl->tpl_vars['emotion']->_loop = true;
 $_smarty_tpl->tpl_vars['emotion']->index++;
?>

    
    <?php $_smarty_tpl->tpl_vars['cellWidth'] = new Smarty_variable($_smarty_tpl->tpl_vars['emotion']->value['containerWidth']/$_smarty_tpl->tpl_vars['emotion']->value['grid']['cols'], true, 0);?>
    <?php $_smarty_tpl->tpl_vars['cellHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['emotion']->value['grid']['cellHeight'], true, 0);?>
    <?php $_smarty_tpl->tpl_vars['finalEndRow'] = new Smarty_variable(1, true, 0);?>

    <div class="emotion-listing emotion-col<?php echo $_smarty_tpl->tpl_vars['emotion']->value['grid']['cols'];?>
 emotion-<?php echo $_smarty_tpl->tpl_vars['emotion']->index;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['emotion']->value['containerWidth'];?>
px">
        <?php if ($_smarty_tpl->tpl_vars['emotion']->value['elements'][0]){?>
            <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emotion']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['element']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
 $_smarty_tpl->tpl_vars['element']->index++;
?>

                
                <?php $_smarty_tpl->tpl_vars['colWidth'] = new Smarty_variable(($_smarty_tpl->tpl_vars['element']->value['endCol']-$_smarty_tpl->tpl_vars['element']->value['startCol'])+1, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['colHeight'] = new Smarty_variable(($_smarty_tpl->tpl_vars['element']->value['endRow']-$_smarty_tpl->tpl_vars['element']->value['startRow'])+1, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['elementWidth'] = new Smarty_variable((($_smarty_tpl->tpl_vars['element']->value['endCol']-$_smarty_tpl->tpl_vars['element']->value['startCol'])+1)*$_smarty_tpl->tpl_vars['cellWidth']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['elementHeight'] = new Smarty_variable((($_smarty_tpl->tpl_vars['element']->value['endRow']-$_smarty_tpl->tpl_vars['element']->value['startRow'])+1)*$_smarty_tpl->tpl_vars['cellHeight']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['left'] = new Smarty_variable(($_smarty_tpl->tpl_vars['element']->value['startCol']-1)*$_smarty_tpl->tpl_vars['cellWidth']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['top'] = new Smarty_variable(($_smarty_tpl->tpl_vars['element']->value['startRow']-1)*$_smarty_tpl->tpl_vars['cellHeight']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['listingTpl'] = new Smarty_variable("listing-".((string)$_smarty_tpl->tpl_vars['emotion']->value['grid']['cols'])."col", true, 0);?>
                <?php $_smarty_tpl->tpl_vars['template'] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['component']['template'], true, 0);?>

                
                <?php $_smarty_tpl->tpl_vars['Data'] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['data'], true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sArticle'] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['data'], true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sTemplate'] = new Smarty_variable($_smarty_tpl->tpl_vars['listingTpl']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sColWidth'] = new Smarty_variable($_smarty_tpl->tpl_vars['colWidth']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sColHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['colHeight']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sElementHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['elementHeight']->value-$_smarty_tpl->tpl_vars['emotion']->value['grid']['gutter'], true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sElementWidth'] = new Smarty_variable($_smarty_tpl->tpl_vars['elementWidth']->value-$_smarty_tpl->tpl_vars['emotion']->value['grid']['gutter'], true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sCategoryId'] = new Smarty_variable($_smarty_tpl->tpl_vars['categoryId']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sController'] = new Smarty_variable($_smarty_tpl->tpl_vars['Controller']->value, true, 0);?>
                <?php $_smarty_tpl->tpl_vars['sEmotionCols'] = new Smarty_variable($_smarty_tpl->tpl_vars['emotion']->value['grid']['cols'], true, 0);?>

                <?php ob_start();?>{<?php $_tmp1=ob_get_clean();?><?php ob_start();?>}<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['style'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['style']->value).".emotion-element-".((string)$_smarty_tpl->tpl_vars['emotion']->index)."-".((string)$_smarty_tpl->tpl_vars['element']->index).$_tmp1."width:".((string)$_smarty_tpl->tpl_vars['elementWidth']->value)."px;height:".((string)$_smarty_tpl->tpl_vars['elementHeight']->value)."px;left:".((string)$_smarty_tpl->tpl_vars['left']->value)."px;top:".((string)$_smarty_tpl->tpl_vars['top']->value)."px".$_tmp2, true, 0);?>
                <?php ob_start();?>{<?php $_tmp3=ob_get_clean();?><?php ob_start();?>}<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['style'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['style']->value).".emotion-inner-element-".((string)$_smarty_tpl->tpl_vars['emotion']->index)."-".((string)$_smarty_tpl->tpl_vars['element']->index).$_tmp3."width:".((string)($_smarty_tpl->tpl_vars['elementWidth']->value-$_smarty_tpl->tpl_vars['emotion']->value['grid']['gutter']))."px;height:".((string)($_smarty_tpl->tpl_vars['elementHeight']->value-$_smarty_tpl->tpl_vars['emotion']->value['grid']['gutter']))."px".$_tmp4, true, 0);?>
                
                <div class="emotion-element emotion-element-<?php echo $_smarty_tpl->tpl_vars['emotion']->index;?>
-<?php echo $_smarty_tpl->tpl_vars['element']->index;?>
 box<?php echo $_smarty_tpl->tpl_vars['colWidth']->value;?>
x<?php echo $_smarty_tpl->tpl_vars['colHeight']->value;?>
 col<?php echo $_smarty_tpl->tpl_vars['colWidth']->value;?>
 row<?php echo $_smarty_tpl->tpl_vars['colHeight']->value;?>
">
                    <div class="emotion-inner-element emotion-inner-element-<?php echo $_smarty_tpl->tpl_vars['emotion']->index;?>
-<?php echo $_smarty_tpl->tpl_vars['element']->index;?>
 <?php echo $_smarty_tpl->tpl_vars['element']->value['component']['cls'];?>
">
                    
                        <?php if ($_smarty_tpl->tpl_vars['template']->value=='component_article'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_article.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f952ef876_11248817($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_article.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_article_slider'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_article_slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_article_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f97a605e1_51821905($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_article_slider.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_banner'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_banner.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f989df380_92922494($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_banner.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_banner_slider'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_banner_slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_banner_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f98e59525_92046590($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_banner_slider.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_blog'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_blog.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f9953c444_30069487($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_blog.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_category_teaser'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_category_teaser.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_category_teaser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f99a28e66_54767736($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_category_teaser.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_html'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_html.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f99c4e248_11940792($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_html.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_iframe'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_iframe.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_iframe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f99d6b697_12297721($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_iframe.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_manufacturer_slider'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_manufacturer_slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_manufacturer_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f99e3a225_87766574($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_manufacturer_slider.tpl" */?>
                        <?php }elseif($_smarty_tpl->tpl_vars['template']->value=='component_youtube'){?>
                            <?php /*  Call merged included template "widgets/emotion/components/component_youtube.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/components/component_youtube.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '9225524d6f947a2135-02113915');
content_524d6f9a6bbab6_47169830($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/components/component_youtube.tpl" */?>
                        <?php }elseif($_smarty_tpl->smarty->templateExists("widgets/emotion/components/".((string)$_smarty_tpl->tpl_vars['template']->value).".tpl")){?>
                            <?php echo $_smarty_tpl->getSubTemplate ("widgets/emotion/components/".((string)$_smarty_tpl->tpl_vars['element']->value['component']['template']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <?php }else{ ?>
                            &nbsp;
                        <?php }?>
                    
                    </div>
                </div>

                
                <?php if ($_smarty_tpl->tpl_vars['finalEndRow']->value<$_smarty_tpl->tpl_vars['element']->value['endRow']){?>
                    <?php $_smarty_tpl->tpl_vars['finalEndRow'] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['endRow'], true, 0);?>
                <?php }?>
            <?php } ?>
        <?php }?>
        <div class="emotion-spacer" style="height:<?php echo $_smarty_tpl->tpl_vars['finalEndRow']->value*$_smarty_tpl->tpl_vars['cellHeight']->value;?>
px"></div>
        <?php $_smarty_tpl->tpl_vars['finalEndRow'] = new Smarty_variable(1, true, 0);?>
    </div>
<?php } ?>
<style type="text/css"><?php echo $_smarty_tpl->tpl_vars['style']->value;?>
</style>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:29
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_article.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f952ef876_11248817')) {function content_524d6f952ef876_11248817($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_currency')) include 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\Enlight\\Template/Plugins\\modifier.currency.php';
?><div class="artbox<?php if ($_smarty_tpl->tpl_vars['lastitem']->value){?> last<?php }?><?php if ($_smarty_tpl->tpl_vars['firstitem']->value){?> first<?php }?>">
	<div class="inner">

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['highlight']){?>
			<div class="ico_tipp"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxTip','namespace'=>'frontend/listing/box_article','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxTip','namespace'=>'frontend/listing/box_article','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hint!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxTip','namespace'=>'frontend/listing/box_article','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			<?php }?>
		
		
		
		
	<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['newArticle']){?>
	<div class="ico_new" <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>style="top:50px;"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxNew','namespace'=>'frontend/listing/box_article','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxNew','namespace'=>'frontend/listing/box_article','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NEW<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxNew','namespace'=>'frontend/listing/box_article','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	<?php }?>

		
		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['esd']){?>
			<div class="ico_esd"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxInstantDownload','namespace'=>'frontend/listing/box_article','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxInstantDownload','namespace'=>'frontend/listing/box_article','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Download<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxInstantDownload','namespace'=>'frontend/listing/box_article','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			<?php }?>
		
		
		
        
        	<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverange']['averange']){?>
	        <div class="star star<?php echo round(($_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverange']['averange']*2),0);?>
"></div>
	        <?php }?>
	    
        
		
		

				
	
	<?php if ($_smarty_tpl->tpl_vars['sTemplate']->value=='listing-3col'){?>
		
		<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][3], true, 0);?>
		<?php }?>
		
	
	<?php }else{ ?>
		
		<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==4){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][4], true, 0);?>
		
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'][3], true, 0);?>
		<?php }?>
	<?php }?>
	
	<a href="<?php echo Shopware_Plugins_Core_PostFilter_Bootstrap::rewriteLink($_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'], $_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['articleName'];?>
" class="artbox_thumb" <?php if (isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'])){?> 
		style="background: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
) no-repeat center center"<?php }?>>
	<?php if (!isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['src'])){?><img src="/shop/templates/_default/frontend/_resources/images/no_picture.jpg" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxNoPicture','namespace'=>'widgets/emotion/components/component_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxNoPicture','namespace'=>'widgets/emotion/components/component_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No image<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxNoPicture','namespace'=>'widgets/emotion/components/component_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /><?php }?></a>

				
		
		
		<a href="<?php echo Shopware_Plugins_Core_PostFilter_Bootstrap::rewriteLink($_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'], $_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
" class="title" title="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['articleName'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['sArticle']->value['articleName'],47);?>
</a>
		
		
		
		

	
	<?php if ($_smarty_tpl->tpl_vars['Controller']->value=='index'){?>
		
		<?php if ($_smarty_tpl->tpl_vars['sTemplate']->value=='listing-3col'){?>
			<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(1250, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(700, true, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(200, true, 0);?>
			<?php }?>
	
		
		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==4){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(1350, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(800, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(0, true, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(165, true, 0);?>
			<?php }?>
		<?php }?>
		
		
		<?php }else{ ?>
					
		
		<?php if ($_smarty_tpl->tpl_vars['sTemplate']->value=='listing-3col'){?>
			<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(850, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(350, true, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(180, true, 0);?>
			<?php }?>
	
		
		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==4){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(850, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(500, true, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(0, true, 0);?>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(120, true, 0);?>
			<?php }?>
		<?php }?>
	<?php }?>
	
	
	

		
		
		
<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']){?>
    <div class="<?php if (!$_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>article_price_unit<?php }else{ ?>article_price_unit_pseudo<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=0){?>
            <p>
            	<span class="purchaseunit">
                	<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/components/component_article','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/components/component_article','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/components/component_article','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>

                </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>
                <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>
                	<span class="referenceunit">
                     (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['referenceprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'widgets/emotion/components/component_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/emotion/components/component_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/emotion/components/component_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>
)
                    </span>
                <?php }?>
            </p>
        <?php }?>
    </div>
<?php }?>
    	
		
		
		
<p class="<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>pseudoprice<?php }else{ ?>price<?php }?><?php if (!$_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?> both<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>
    	<span class="pseudo"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Instead of:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
    <?php }?>
    <span class="price"><?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
From<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
</p>

       	
       	
       	
    <div class="actions">

        

        
            
            <a href="<?php echo Shopware_Plugins_Core_PostFilter_Bootstrap::rewriteLink($_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'], $_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
" title="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['articleName'];?>
" class="more"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkDetails','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkDetails','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
See details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkDetails','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        
    </div>

	<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']){?>
		<div class="pseudo_percent">%</div>
	<?php }?>

	</div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:31
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_article_slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f97a605e1_51821905')) {function content_524d6f97a605e1_51821905($_smarty_tpl) {?><script type="text/javascript">
(function($) {
    $(document).ready(function() {
        <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sElementHeight']->value, true, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_title']){?>
            <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderHeight']->value-36, true, 0);?>;
        <?php }?>
        <?php $_smarty_tpl->tpl_vars['perPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['sColWidth']->value, true, 0);?>
        var config  = {
            'url': '<?php echo $_smarty_tpl->tpl_vars['Data']->value['ajaxFeed'];?>
',
            'title': "<?php echo $_smarty_tpl->tpl_vars['Data']->value['article_slider_title'];?>
",
            'headline': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_title']){?>true<?php }else{ ?>false<?php }?>,
            'scrollSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['article_slider_scrollspeed'];?>
'),
            'rotateSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['article_slider_rotatespeed'];?>
'),
            'rotate': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_rotation']){?>true<?php }else{ ?>false<?php }?>,
            'layout': 'horizontal',
            'showNumbers': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_numbers']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_type']=='selected_article'){?>true<?php }else{ ?>false<?php }?>,
            'showArrows': <?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_arrows']){?>true<?php }else{ ?>false<?php }?>,
            'scrollWidth': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
'),
            'scrollHeight': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
'),
            'skipInitalRendering': true,
            'maxPages': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['pages'];?>
'),
            'extraParams': {
                'category': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['categoryId'];?>
'),
                'start': 0,
                'limit': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['perPage']->value;?>
'),
                'elementWidth': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
'),
                'elementHeight': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value-5;?>
'),
                'max': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['article_slider_max_number'];?>
')
            }
        };

        var slider = $('.slider_article_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
').ajaxSlider(<?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_type']=='selected_article'){?>'locale'<?php }else{ ?>'ajax'<?php }?>, config);
        slider.find('.sliding_outer, .sliding_container').css('height', <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>
);
        slider.find('.ajaxSlider').css('height', <?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value-2;?>
);
    });

})(jQuery);
</script>
<div class="slider_article_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
 article-slider-emotion" style="height:<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px">
<?php if ($_smarty_tpl->tpl_vars['Data']->value['article_slider_type']=='selected_article'){?>
    <?php  $_smarty_tpl->tpl_vars['articles'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articles']->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['Data']->value['values'],$_smarty_tpl->tpl_vars['perPage']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articles']->key => $_smarty_tpl->tpl_vars['articles']->value){
$_smarty_tpl->tpl_vars['articles']->_loop = true;
?>
        <?php /*  Call merged included template "widgets/emotion/slide_articles.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("widgets/emotion/slide_articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('articles'=>$_smarty_tpl->tpl_vars['articles']->value,'sElementWidth'=>$_smarty_tpl->tpl_vars['sElementWidth']->value,'sPerPage'=>$_smarty_tpl->tpl_vars['perPage']->value,'sElementHeight'=>$_smarty_tpl->tpl_vars['sliderHeight']->value-5), 0, '9225524d6f947a2135-02113915');
content_524d6f9812b606_71783939($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "widgets/emotion/slide_articles.tpl" */?>
    <?php } ?>
<?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:32
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\slide_articles.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f9812b606_71783939')) {function content_524d6f9812b606_71783939($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_currency')) include 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\Enlight\\Template/Plugins\\modifier.currency.php';
?><?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable($_smarty_tpl->tpl_vars['sElementWidth']->value-61, true, 0);?>
<div class="slide" style="width:<?php echo round($_smarty_tpl->tpl_vars['width']->value,0);?>
px;height:<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px">
	<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['article']->value['image']['src'][4], null, 0);?>
        <div class="outer-article-box" style="width:<?php echo '100'/$_smarty_tpl->tpl_vars['sPerPage']->value;?>
%">
            <div class="article_box">
            <!-- article 1 -->
            <?php if ($_smarty_tpl->tpl_vars['image']->value){?>
            <a class="article-thumb-wrapper" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" />
            </a>
            <?php }else{ ?>
            <a class="article-thumb-wrapper" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
">
                <img src="/shop/templates/_default/frontend/_resources/images/no_picture.jpg" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" />
            </a>
            <?php }?>
            <a title="<?php echo $_smarty_tpl->tpl_vars['article']->value['articleName'];?>
" class="title" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['linkDetails'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['articleName'],35);?>
</a>

            <?php if ($_smarty_tpl->tpl_vars['article']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['article']->value['purchaseunit']!=0){?>
                <p class="article-purchase-unit">
                    <span class="purchaseunit">
                        <strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/slide_articles','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/slide_articles','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'widgets/emotion/slide_articles','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['article']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['sUnit']['description'];?>

                    </span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['article']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['article']->value['referenceunit']){?>
                    <?php if ($_smarty_tpl->tpl_vars['article']->value['referenceunit']){?>
                        <span class="referenceunit">
                         (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['article']->value['referenceprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'widgets/emotion/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/emotion/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/emotion/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['article']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['sUnit']['description'];?>
)
                        </span>
                    <?php }?>
                </p>
            <?php }?>

            <p class="price">
                <?php if ($_smarty_tpl->tpl_vars['article']->value['pseudoprice']){?>
                    <span class="pseudo">
                    <em>
                    	<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'widgets/emotion/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'widgets/emotion/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Instead of:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reducedPrice",'default'=>'Statt: ','namespace'=>'widgets/emotion/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['article']->value['pseudoprice']);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'default'=>'*','namespace'=>'widgets/emotion/slide_articles')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'widgets/emotion/slide_articles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'default'=>'*','namespace'=>'widgets/emotion/slide_articles'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </em>
                    </span>
                <?php }?>
                <span class="price<?php if ($_smarty_tpl->tpl_vars['article']->value['pseudoprice']){?> pseudo<?php }?>"><?php if ($_smarty_tpl->tpl_vars['article']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['article']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/emotion/slide_articles','name'=>'ListingBoxArticleStartsAt')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/emotion/slide_articles','name'=>'ListingBoxArticleStartsAt'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
from<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/emotion/slide_articles','name'=>'ListingBoxArticleStartsAt'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['article']->value['price']);?>
 *</span>
            </p>
            </div>
        </div>
	<?php } ?>
</div>
<?php if ($_smarty_tpl->tpl_vars['pages']->value){?>
<div class="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:32
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_banner.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f989df380_92922494')) {function content_524d6f989df380_92922494($_smarty_tpl) {?><div class="mapping">
    <?php if ($_smarty_tpl->tpl_vars['Data']->value['link']){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['Data']->value['link'];?>
">
            <img src="<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => $_smarty_tpl->tpl_vars['Data']->value['file'], "fullPath" => false), $_smarty_tpl); ?>" />
        </a>
    <?php }else{ ?>
        <img src="<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => $_smarty_tpl->tpl_vars['Data']->value['file'], "fullPath" => false), $_smarty_tpl); ?>" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Data']->value['bannerMapping']){?>
        <div class="banner-mapping" style="height: <?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px;width: <?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
px">
			<?php  $_smarty_tpl->tpl_vars['mapping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mapping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Data']->value['bannerMapping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mapping']->key => $_smarty_tpl->tpl_vars['mapping']->value){
$_smarty_tpl->tpl_vars['mapping']->_loop = true;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['mapping']->value['link'];?>
"<?php if ($_smarty_tpl->tpl_vars['mapping']->value['linkLocation']=="external"){?> target="_blank"<?php }?> class="emotion-banner-mapping" style="width:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['width'];?>
px;height:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['height'];?>
px;left:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['x'];?>
px;top:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['y'];?>
px"<?php if ($_smarty_tpl->tpl_vars['mapping']->value['title']){?> title="<?php echo $_smarty_tpl->tpl_vars['mapping']->value['title'];?>
"<?php }?>></a>
				<?php if ($_smarty_tpl->tpl_vars['mapping']->value['as_tooltip']===1&&$_smarty_tpl->tpl_vars['mapping']->value['title']){?>
					<div class="banner-mapping-tooltip" style="width:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['width'];?>
px;left:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['x'];?>
px;top:<?php echo $_smarty_tpl->tpl_vars['mapping']->value['y']+$_smarty_tpl->tpl_vars['mapping']->value['height']-($_smarty_tpl->tpl_vars['mapping']->value['height']/2);?>
px">
						<span><?php echo $_smarty_tpl->tpl_vars['mapping']->value['title'];?>
</span>
					</div>
				<?php }?>
			<?php } ?>
        </div>
    <?php }?>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:32
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_banner_slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f98e59525_92046590')) {function content_524d6f98e59525_92046590($_smarty_tpl) {?><script type="text/javascript">
(function($) {
    $(document).ready(function() {
        <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sElementHeight']->value, true, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_title']){?>
            <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderHeight']->value-36, true, 0);?>;
        <?php }?>
        var config  = {
            'title': '<?php echo $_smarty_tpl->tpl_vars['Data']->value['banner_slider_title'];?>
',
            'headline': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_title']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_navigation']){?>true<?php }else{ ?>false<?php }?>,
            'scrollSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['banner_slider_scrollspeed'];?>
'),
            'rotateSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['banner_slider_rotatespeed'];?>
'),
            'rotate': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_rotation']){?>true<?php }else{ ?>false<?php }?>,
            'layout': 'horizontal',
            'showNumbers': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_numbers']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_arrows']){?>true<?php }else{ ?>false<?php }?>,
            'showArrows': <?php if ($_smarty_tpl->tpl_vars['Data']->value['banner_slider_arrows']){?>true<?php }else{ ?>false<?php }?>,
            'scrollWidth': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
'),
            'scrollHeight': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
')
        };

        var slider = $('.slider_banner_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
').ajaxSlider('locale', config);
        slider.find('.sliding_outer, .sliding_container').css('height', <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>
);
        slider.find('.ajaxSlider').css('height', <?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
);
    });

})(jQuery);
</script>
<div class="slider_banner_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
 banner-slider-emotion" style="height:<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px">
    <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Data']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
        <div class="slide" style="width:<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
px; height: <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>
px">
            <?php if ($_smarty_tpl->tpl_vars['banner']->value['link']){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['link'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['path'];?>
" />
                </a>
            <?php }else{ ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['path'];?>
" />
            <?php }?>

        </div>
    <?php } ?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:33
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_blog.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f9953c444_30069487')) {function content_524d6f9953c444_30069487($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\Smarty\\plugins\\modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['Data']->value){?>
    <div class="blog-outer-container">
        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Data']->value['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['entry']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['entry']->iteration++;
 $_smarty_tpl->tpl_vars['entry']->last = $_smarty_tpl->tpl_vars['entry']->iteration === $_smarty_tpl->tpl_vars['entry']->total;
?>
			<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['entry']->value['media']['thumbnails'][$_smarty_tpl->tpl_vars['Data']->value['thumbnail_size']], true, 0);?>
            <div class="blog-entry" style="width:<?php echo "100"/count($_smarty_tpl->tpl_vars['Data']->value['entries']);?>
%">
            	<div class="blog-entry-inner<?php if ($_smarty_tpl->tpl_vars['entry']->last){?> last<?php }?>">
                    <div class="blog_img">
                       <?php if ($_smarty_tpl->tpl_vars['image']->value){?>
                            <a href="<?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'blog', 'action' => 'detail', 'sCategory' => $_smarty_tpl->tpl_vars['entry']->value['categoryId'], 'blogArticle' => $_smarty_tpl->tpl_vars['entry']->value['id'], )); ?>" style="background:url(<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => $_smarty_tpl->tpl_vars['image']->value, "fullPath" => false), $_smarty_tpl); ?>) no-repeat center center;" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
">&nbsp;</a>
                       <?php }else{ ?>
                            <a href="<?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'blog', 'action' => 'detail', 'sCategory' => $_smarty_tpl->tpl_vars['entry']->value['categoryId'], 'blogArticle' => $_smarty_tpl->tpl_vars['entry']->value['id'], )); ?>" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"EmotionBlogPreviewNopic",'default'=>'Kein Bild vorhanden','namespace'=>'widgets/emotion/components/component_blog','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"EmotionBlogPreviewNopic",'default'=>'Kein Bild vorhanden','namespace'=>'widgets/emotion/components/component_blog','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No image available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"EmotionBlogPreviewNopic",'default'=>'Kein Bild vorhanden','namespace'=>'widgets/emotion/components/component_blog','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </a>
                       <?php }?>
                    </div>
	                
	                <h2>
	                	<a href="<?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'blog', 'action' => 'detail', 'sCategory' => $_smarty_tpl->tpl_vars['entry']->value['categoryId'], 'blogArticle' => $_smarty_tpl->tpl_vars['entry']->value['id'], )); ?>" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entry']->value['title'],40);?>
</a>
	                </h2>
	                <?php if ($_smarty_tpl->tpl_vars['entry']->value['shortDescription']){?>
	                    <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entry']->value['shortDescription'],105);?>
</p>
	                <?php }else{ ?>
	                    <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value['description']),105);?>
</p>
	                <?php }?>
            	</div>
            </div>
        <?php } ?>
    </div>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:33
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_category_teaser.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f99a28e66_54767736')) {function content_524d6f99a28e66_54767736($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['Data']->value){?>
	<div class="teaser_box">
		<a href="<?php if ($_smarty_tpl->tpl_vars['Data']->value['blog_category']){?><?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'blog', 'action' => 'index', 'sCategory' => $_smarty_tpl->tpl_vars['Data']->value['category_selection'], )); ?><?php }else{ ?><?php echo Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'cat', 'action' => 'index', 'sCategory' => $_smarty_tpl->tpl_vars['Data']->value['category_selection'], )); ?><?php }?>" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['Data']->value['categoryName']);?>
">
			
			<div class="teaser_img"<?php if ($_smarty_tpl->tpl_vars['Data']->value['image']){?> style="background:url(<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => $_smarty_tpl->tpl_vars['Data']->value['image'], "fullPath" => false), $_smarty_tpl); ?>) no-repeat center center"<?php }?>>&nbsp;</div>

			
			<div class="teaser_headline">
				<h3><?php echo $_smarty_tpl->tpl_vars['Data']->value['categoryName'];?>
</h3>
			</div>
		</a>
	</div>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:33
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_html.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f99c4e248_11940792')) {function content_524d6f99c4e248_11940792($_smarty_tpl) {?><div class="html-text-inner-element">
<div class="inner">
    <?php if ($_smarty_tpl->tpl_vars['Data']->value['cms_title']){?>
        <h2 class="headline"><?php echo $_smarty_tpl->tpl_vars['Data']->value['cms_title'];?>
</h2>
    <?php }?>

    <div class="text">
        <?php echo $_smarty_tpl->tpl_vars['Data']->value['text'];?>

    </div>
</div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:33
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_iframe.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f99d6b697_12297721')) {function content_524d6f99d6b697_12297721($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['Data']->value&&$_smarty_tpl->tpl_vars['Data']->value['iframe_url']){?>
<iframe width="100%" height="100%" src="<?php echo $_smarty_tpl->tpl_vars['Data']->value['iframe_url'];?>
" frameborder="0"></iframe>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:33
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_manufacturer_slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f99e3a225_87766574')) {function content_524d6f99e3a225_87766574($_smarty_tpl) {?><script type="text/javascript">
(function($) {
    $(document).ready(function() {
        <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sElementHeight']->value, true, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_title']){?>
            <?php $_smarty_tpl->tpl_vars['sliderHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderHeight']->value-36, true, 0);?>;
        <?php }?>
        var config  = {
            'title': '<?php echo $_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_title'];?>
',
            'headline': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_title']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_navigation']){?>true<?php }else{ ?>false<?php }?>,
            'scrollSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_scrollspeed'];?>
'),
            'rotateSpeed': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_rotatespeed'];?>
'),
            'rotate': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_rotation']){?>true<?php }else{ ?>false<?php }?>,
            'layout': 'horizontal',
            'showNumbers': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_numbers']){?>true<?php }else{ ?>false<?php }?>,
            'navigation': false,
            'showArrows': <?php if ($_smarty_tpl->tpl_vars['Data']->value['manufacturer_slider_arrows']){?>true<?php }else{ ?>false<?php }?>,
            'scrollWidth': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
'),
            'scrollHeight': ~~(1 * '<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
')
        };

        var slider = $('.slider_manufacturer_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
').ajaxSlider('locale', config);
        slider.find('.sliding_outer, .sliding_container').css('height', <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>
);
        slider.find('.ajaxSlider').css('height', <?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value-2;?>
);
        slider.find('.slide').css({
            'width': <?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
,
            'height': <?php echo $_smarty_tpl->tpl_vars['sliderHeight']->value;?>

        });
    });
})(jQuery);
</script>
<div class="slider_manufacturer_<?php echo $_smarty_tpl->tpl_vars['Data']->value['objectId'];?>
 slider-manufacturer" style="height:<?php echo $_smarty_tpl->tpl_vars['sElementHeight']->value;?>
px">

	<?php if ($_smarty_tpl->tpl_vars['colWidth']->value==3){?>
		<?php $_smarty_tpl->tpl_vars['perPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['sColWidth']->value+1, true, 0);?>
	<?php }elseif($_smarty_tpl->tpl_vars['colWidth']->value==2){?>
		<?php $_smarty_tpl->tpl_vars['perPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['sColWidth']->value+1, true, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['perPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['sColWidth']->value, true, 0);?>
	<?php }?>
	
    <?php  $_smarty_tpl->tpl_vars['suppliers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['suppliers']->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['Data']->value['values'],$_smarty_tpl->tpl_vars['perPage']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['suppliers']->key => $_smarty_tpl->tpl_vars['suppliers']->value){
$_smarty_tpl->tpl_vars['suppliers']->_loop = true;
?>
        <div class="slide" style="width:<?php echo $_smarty_tpl->tpl_vars['sElementWidth']->value;?>
px">
            <div class="inner-slide">
            <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value){
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
                <div class="supplier">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
" class="image-wrapper<?php if (!$_smarty_tpl->tpl_vars['supplier']->value['image']){?> text<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['supplier']->value['image']){?>
                            <span class="vertical-center"></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
" />
                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>

                    <?php }?>
                    </a>
                </div>
            <?php } ?>
            <div class="clear"></div>
            </div>
        </div>
    <?php } ?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:22:34
         compiled from "D:\data\Ampps\www\shop\templates\_emotion\widgets\emotion\components\component_youtube.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6f9a6bbab6_47169830')) {function content_524d6f9a6bbab6_47169830($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['Data']->value&&$_smarty_tpl->tpl_vars['Data']->value['video_id']){?>
<iframe width="100%" height="100%" src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['Data']->value['video_id'];?>
<?php if ($_smarty_tpl->tpl_vars['Data']->value['video_hd']){?>?hd=1&vq=hd720<?php }?>" frameborder="0" allowfullscreen></iframe>
<?php }?><?php }} ?>