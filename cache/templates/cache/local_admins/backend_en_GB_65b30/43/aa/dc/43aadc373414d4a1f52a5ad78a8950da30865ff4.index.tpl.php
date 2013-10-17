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
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b3299b587_04213730',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b3299b587_04213730')) {function content_524d6b3299b587_04213730($_smarty_tpl) {?><!DOCTYPE html>
<html>


    <head>



<meta charset="UTF-8" />
<meta name="robots" content="noindex,nofollow" />

<meta http-equiv="X-UA-Compatible" content="IE=Edge" />



<title>Shopware 4.1.2  (Rev. 201308130033) - Backend (c) 2013 shopware AG</title>


    <link rel="stylesheet" type="text/css" href="/shop/templates/_default/backend/_resources/resources/css/ext-all.css?201308130033" />
    <link rel="stylesheet" type="text/css" href="/shop/templates/_default/backend/_resources/resources/css/core-icon-set.css?201308130033" />
    <link rel="stylesheet" type="text/css" href="/shop/engine/Library/CodeMirror/lib/codemirror.css?201308130033" />
    <link rel="stylesheet" type="text/css" href="/shop/engine/Library/CodeMirror/theme/monokai.css?201308130033" />

<link rel="stylesheet" type="text/css" href="/shop/templates/_default/backend/_resources/styles/growl.css" />
<style type="text/css">
iframe { border: 0 none !important; width: 100%; height: 100%; }
#nav ul { top: 26px !important }
#header li.main { height: 28px !important }
.deprecated { color: #fff; font-size: 11px; font-weight: 700; text-align: center }
</style>


    <link rel="icon" href="/shop/templates/_default/backend/_resources/images/index/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/shop/templates/_default/backend/_resources/images/index/favicon.ico" type="image/x-icon" />



    <script type="text/javascript" src="/shop/engine/Library/ExtJs/ext-all.js?201308130033"></script>
    <script type="text/javascript" src="/shop/engine/Library/ExtJs/locale/ext-lang-en_GB.js?201308130033"></script>
    <script type="text/javascript" src="/shop/engine/Library/TinyMce/tiny_mce.js?201308130033"></script>
    <script type="text/javascript" src="/shop/engine/Library/CodeMirror/lib/codemirror.js?201308130033"></script>

	
	<script type="text/javascript">
        Ext.editorLang = 'en_GB';
	    Ext.shopwareRevision = '201308130033';
    </script>

    <?php if ($_smarty_tpl->tpl_vars['user']->value){?>
        <script type="text/javascript" src="<?php echo '/shop/backend/base';?>?file=bootstrap&loggedIn=<?php echo time();?>
"></script>
    <?php }else{ ?>
        <script type="text/javascript" src="<?php echo '/shop/backend/base';?>?file=bootstrap&<?php echo Shopware::REVISION;?>
"></script>
    <?php }?>

<script type="text/javascript">
    var userName = '<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
',
        maxParameterLength = '<?php echo $_smarty_tpl->tpl_vars['maxParameterLength']->value;?>
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
<?php if ($_smarty_tpl->tpl_vars['user']->value){?>

			this.addSubApplication({
				name: "Shopware.apps.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value, ENT_QUOTES, 'utf-8', true);?>
",
				controller: <?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
,
				params: <?php echo $_smarty_tpl->tpl_vars['params']->value;?>
,
                localizedName: 'Shopware'
			});
<?php }else{ ?>
            this.addSubApplication({
                name: "Shopware.apps.Login",
                localizedName: 'Login'
            });
<?php }?>

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
		disableCachingValue: '1380805426<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value->locale){?>+<?php echo $_smarty_tpl->tpl_vars['user']->value->locale->getId();?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->role->getId();?>
<?php }?>'
	});
    Ext.Loader.setPath('Shopware.apps', '/shop/backend', '?file=app');
</script>

</head>


  <body>
    
    <div class="container">

    

    </div>
    
<form id="history-form" class="x-hide-display">
    <input type="hidden" id="x-history-field" />
    <iframe id="x-history-frame"></iframe>
</form>

  </body>
</html>
<?php }} ?>