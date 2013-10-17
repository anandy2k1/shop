<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:41
         compiled from "D:\data\Ampps\www\shop\templates\_default\backend\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7925524d6b2deeca20-13260697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43aadc373414d4a1f52a5ad78a8950da30865ff4' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\backend\\index\\index.tpl',
      1 => 1376334194,
      2 => 'file',
    ),
    '9dc3aed7ef68a13d5c6826d077da6e435abe7353' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\backend\\base\\index.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    'aceadc516fa8a1fcad5ff21d668285f83ad7fcb2' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\backend\\base\\header.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
    'a097910295b983c5ac25b11fb7f94baaf47c1376' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\backend\\index\\header.tpl',
      1 => 1376334194,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '7925524d6b2deeca20-13260697',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b328299e5_08191179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b328299e5_08191179')) {function content_524d6b328299e5_08191179($_smarty_tpl) {?><!DOCTYPE html>
<html>


    <?php /*  Call merged included template "backend/index/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/index/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '7925524d6b2deeca20-13260697');
content_524d6b30f19e56_72108220($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/index/header.tpl" */?>


  <body>
    
    <div class="container">

    

    </div>
    
<form id="history-form" class="x-hide-display">
    <input type="hidden" id="x-history-field" />
    <iframe id="x-history-frame"></iframe>
</form>

  </body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:42
         compiled from "D:\data\Ampps\www\shop\templates\_default\backend\base\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6b2e63d0c8_94175466')) {function content_524d6b2e63d0c8_94175466($_smarty_tpl) {?>
<head>



<meta charset="UTF-8" />
<meta name="robots" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
noindex,nofollow<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />

<meta http-equiv="X-UA-Compatible" content="IE=Edge" />



<title></title>


    <link rel="stylesheet" type="text/css" href="/shop/templates/_default/backend/_resources/resources/css/ext-all.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/shop/templates/_default/backend/_resources/resources/css/core-icon-set.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/shop/engine/Library/CodeMirror/lib/codemirror.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/shop/engine/Library/CodeMirror/theme/monokai.css?<?php echo Shopware::REVISION;?>
" />


    <link rel="icon" href="/shop/templates/_default/backend/_resources/images/index/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/shop/templates/_default/backend/_resources/images/index/favicon.ico" type="image/x-icon" />



    <script type="text/javascript" src="/shop/engine/Library/ExtJs/ext-all.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "en_GB";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => "ExtJs/locale/ext-lang-".$_tmp1.".js", "fullPath" => false), $_smarty_tpl); ?>?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/shop/engine/Library/TinyMce/tiny_mce.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/shop/engine/Library/CodeMirror/lib/codemirror.js?<?php echo Shopware::REVISION;?>
"></script>

	
	<script type="text/javascript">
        Ext.editorLang = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
en_GB<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
	    Ext.shopwareRevision = '<?php echo Shopware::REVISION;?>
';
    </script>

    <?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php if ($_smarty_tpl->tpl_vars[\'user\']->value){?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>

        <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo \'/shop/backend/base\';?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
?file=bootstrap&loggedIn=<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo time();?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
"></script>
    <?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php }else{ ?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>

        <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo \'/shop/backend/base\';?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
?file=bootstrap&<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo Shopware::REVISION;?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
"></script>
    <?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php }?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>


</head>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:44
         compiled from "D:\data\Ampps\www\shop\templates\_default\backend\index\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_524d6b30f19e56_72108220')) {function content_524d6b30f19e56_72108220($_smarty_tpl) {?>
<head>



<meta charset="UTF-8" />
<meta name="robots" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
noindex,nofollow<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />

<meta http-equiv="X-UA-Compatible" content="IE=Edge" />



<title>Shopware <?php echo Shopware::VERSION;?>
 <?php echo Shopware::VERSION_TEXT;?>
 (Rev. <?php echo Shopware::REVISION;?>
) - Backend (c) 2013 shopware AG</title>


    <link rel="stylesheet" type="text/css" href="/shop/templates/_default/backend/_resources/resources/css/ext-all.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/shop/templates/_default/backend/_resources/resources/css/core-icon-set.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/shop/engine/Library/CodeMirror/lib/codemirror.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/shop/engine/Library/CodeMirror/theme/monokai.css?<?php echo Shopware::REVISION;?>
" />

<link rel="stylesheet" type="text/css" href="/shop/templates/_default/backend/_resources/styles/growl.css" />
<style type="text/css">
iframe { border: 0 none !important; width: 100%; height: 100%; }
#nav ul { top: 26px !important }
#header li.main { height: 28px !important }
.deprecated { color: #fff; font-size: 11px; font-weight: 700; text-align: center }
</style>


    <link rel="icon" href="/shop/templates/_default/backend/_resources/images/index/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/shop/templates/_default/backend/_resources/images/index/favicon.ico" type="image/x-icon" />



    <script type="text/javascript" src="/shop/engine/Library/ExtJs/ext-all.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "en_GB";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => "ExtJs/locale/ext-lang-".$_tmp1.".js", "fullPath" => false), $_smarty_tpl); ?>?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/shop/engine/Library/TinyMce/tiny_mce.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/shop/engine/Library/CodeMirror/lib/codemirror.js?<?php echo Shopware::REVISION;?>
"></script>

	
	<script type="text/javascript">
        Ext.editorLang = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
en_GB<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
	    Ext.shopwareRevision = '<?php echo Shopware::REVISION;?>
';
    </script>

    <?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php if ($_smarty_tpl->tpl_vars[\'user\']->value){?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>

        <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo \'/shop/backend/base\';?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
?file=bootstrap&loggedIn=<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo time();?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
"></script>
    <?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php }else{ ?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>

        <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo \'/shop/backend/base\';?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
?file=bootstrap&<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo Shopware::REVISION;?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
"></script>
    <?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php }?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>


<script type="text/javascript">
    var userName = '<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value->name;?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
',
        maxParameterLength = '<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo $_smarty_tpl->tpl_vars[\'maxParameterLength\']->value;?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
';

    Ext.define('Shopware.app.Application', {
    	extend: 'Ext.app.Application',
    	name: 'Shopware',
    	singleton: true,
        autoCreateViewport: false,
        requires: [ 'Shopware.container.Viewport' ],
        baseComponents: {
            'Shopware.container.Viewport': false,
            'Shopware.apps.Index.view.Menu': false,
            'Shopware.apps.Index.view.Footer': false
        },
        viewport: null,
        launch: function() {
            var me = this,
                preloader = Ext.create('Shopware.component.Preloader').bindEvents(Shopware.app.Application),
				errorReporter = Ext.create('Shopware.global.ErrorReporter').bindEvents(Shopware.app.Application)

            /**
             * Activates the Ext.fx.Anim class globally and
             * drives the animations our CSS 3 if supported.
             */
            Ext.enableFx = true;

            this.addEvents('baseComponentsReady', 'subAppLoaded');

            // Disable currency sign
            Ext.apply(Ext.util.Format, {
                currencySign: ''
            });
            // Fix default date format
            Ext.Date.defaultFormat = Ext.util.Format.dateFormat;

            this.callParent(arguments);
<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php if ($_smarty_tpl->tpl_vars[\'user\']->value){?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>


			this.addSubApplication({
				name: "Shopware.apps.<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'app\']->value, ENT_QUOTES, \'utf-8\', true);?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
",
				controller: <?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo $_smarty_tpl->tpl_vars[\'controller\']->value;?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
,
				params: <?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo $_smarty_tpl->tpl_vars[\'params\']->value;?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
,
                localizedName: 'Shopware'
			});
<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php }else{ ?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>

            this.addSubApplication({
                name: "Shopware.apps.Login",
                localizedName: 'Login'
            });
<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php }?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>


			// Start preloading the icon sets
			me.iconPreloader = Ext.create('Shopware.component.IconPreloader', {
       			loadPath: "http://127.0.0.1/shop/templates/_default/backend/_resources/resources/css"
   			});
        },

        /**
         * Checks if all base components are loaded and rendered.
         * If truthy the preloader will be triggered.
         *
         * @param cmp - Component which calls the method
         * @return void
         */
        baseComponentIsReady: function(cmp) {
            var me = this,
                allReady = true;

            me.baseComponents[cmp.$className] = true;
            Ext.iterate(me.baseComponents, function(index, item) {
                if(!item) {
                    allReady = false;
                    return false;
                }
            });

            if(allReady) {
                window.setTimeout(function() {
                    me.fireEvent('baseComponentsReady', me);
                }, 1000);
            }
        }
    });

    /** Basic loader configuration  */
    Ext.Loader.setConfig({
		enabled: true,
		disableCaching: true,
		disableCachingParam: 'no-cache',
		disableCachingValue: '<?php echo time();?>
<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php if ($_smarty_tpl->tpl_vars[\'user\']->value&&$_smarty_tpl->tpl_vars[\'user\']->value->locale){?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
+<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value->locale->getId();?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
+<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php echo $_smarty_tpl->tpl_vars[\'user\']->value->role->getId();?>
/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
<?php echo '/*%%SmartyNocache:7925524d6b2deeca20-13260697%%*/<?php }?>/*/%%SmartyNocache:7925524d6b2deeca20-13260697%%*/';?>
'
	});
    Ext.Loader.setPath('Shopware.apps', '<?php echo '/shop/backend';?>', '?file=app');
</script>

</head>
<?php }} ?>