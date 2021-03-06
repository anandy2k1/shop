<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:52
         compiled from "D:\data\Ampps\www\shop\engine\Library\ExtJs\overrides\Ext.app.Application.js" */ ?>
<?php /*%%SmartyHeaderCode:8617524d6b37f41ca3-60614942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af94bf2c53023b2a79d1d8a7b1c984b7e5b226c0' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\ExtJs\\overrides\\Ext.app.Application.js',
      1 => 1376334192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8617524d6b37f41ca3-60614942',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b382afb09_97835064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b382afb09_97835064')) {function content_524d6b382afb09_97835064($_smarty_tpl) {?>/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    ExtJS
 * @subpackage Application
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     Stephan Pohl
 * @author     Mitchel Simoens https://github.com/mitchellsimoens
 * @author     $Author$
 */

//

/**
 * Ext.app.Application
 *
 * Override the default ext application
 * to add our sub application functionality
 */
Ext.override(Ext.app.Application, {

	/**
	 * Adds a new controller to the application
	 *
	 * @param controller
	 * @param skipInit
	 */
	addController: function(controller, skipInit) {

		if (Ext.isDefined(controller.name)) {
			var name = controller.name;
			delete controller.name;

			controller.id = controller.id || name;

			controller = Ext.create(name, controller);
		}

		var me          = this,
			controllers = me.controllers;

		controllers.add(controller);


		if (!skipInit) {
			controller.init();
		}

		return controller;
	},

	/**
	 * Remove a controller from the application
	 *
	 * @param controller
	 * @param removeListeners
	 */
	removeController: function(controller, removeListeners) {
		removeListeners = removeListeners || true;

		var me          = this,
			controllers = me.controllers;

		controllers.remove(controller);

		if (removeListeners) {
			var bus = me.eventbus;

			bus.uncontrol([controller.id]);
		}
	},

	/**
	 * Adds a new sub application to the
	 * main application
	 *
	 * @param subapp
	 */
	addSubApplication: function(subapp, skipInit, fn, showLoadMask) {
        skipInit = (skipInit === undefined) ? false : true;
		subapp.app = this;

        if(subapp.hasOwnProperty('showLoadMask')) {
            showLoadMask = subapp.showLoadMask;
        }

        showLoadMask = (showLoadMask === undefined) ? true : showLoadMask;
        if(showLoadMask) {
            this.moduleLoadMask = new Ext.LoadMask(Ext.getBody(), {
                msg: Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'application'/'loading','default'=>'Loading','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'application'/'loading','default'=>'Loading','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loading<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'application'/'loading','default'=>'Loading','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 [0]...', (subapp.localizedName) ? subapp.localizedName : subapp.name),
                hideModal: true
            });
            this.moduleLoadMask.show();
        }

        fn = fn || Ext.emptyFn;
        Ext.require(subapp.name, Ext.bind(function() {
            this.addController(subapp, skipInit);
            fn(subapp);
        }, this));
	},

    /**
      * Helper method which returns all open windows.
      *
      * @private
      * @param [boolean] deprecated Wheather or not to include Shopware.apps.Deprecated.view.main.Window in the listing
      * @return [array] active windows
      */
    getActiveWindows: function(deprecated) {
        var activeWindows = [];

        if (deprecated === undefined) {
            deprecated = true;
        }

        Ext.each(Ext.WindowManager.zIndexStack, function (item) {
            if (typeof(item) !== 'undefined') {
                var className = item.$className;
                if ((className == 'Ext.window.Window' || className == 'Enlight.app.Window' || className == 'Ext.Window' || (deprecated && className == 'Shopware.apps.Deprecated.view.main.Window')) && className != "Ext.window.MessageBox") {
                    activeWindows.push(item);
                }

                className = item.alternateClassName;
                if ((className == 'Ext.window.Window' || className == 'Enlight.app.Window' || className == 'Ext.Window' || (deprecated && className == 'Shopware.apps.Deprecated.view.main.Window')) && className != "Ext.window.MessageBox") {
                    activeWindows.push(item);
                }
            }
        });

        return activeWindows;
    }
});
<?php }} ?>