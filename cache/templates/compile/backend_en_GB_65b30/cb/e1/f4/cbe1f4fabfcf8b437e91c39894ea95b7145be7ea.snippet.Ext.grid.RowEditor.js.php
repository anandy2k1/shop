<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:56
         compiled from "D:\data\Ampps\www\shop\engine\Library\ExtJs\overrides\Ext.grid.RowEditor.js" */ ?>
<?php /*%%SmartyHeaderCode:18879524d6b3c0e5ce3-50077862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbe1f4fabfcf8b437e91c39894ea95b7145be7ea' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\ExtJs\\overrides\\Ext.grid.RowEditor.js',
      1 => 1376334192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18879524d6b3c0e5ce3-50077862',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b3c189dc8_50823607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b3c189dc8_50823607')) {function content_524d6b3c189dc8_50823607($_smarty_tpl) {?>/**
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
 * @subpackage RowEditor
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     Stephan Pohl
 * @author     $Author$
 */
Ext.override(Ext.grid.RowEditor, {
    getFloatingButtons: function() {
       var me = this,
           cssPrefix = Ext.baseCSSPrefix,
           btnsCss = cssPrefix + 'grid-row-editor-buttons',
           plugin = me.editingPlugin,
           btns;

       if (!me.floatingButtons) {
           btns = me.floatingButtons = new Ext.Container({
               renderTpl: [
                   '<div class="{baseCls}-ml"></div>',
                   '<div class="{baseCls}-mr"></div>',
                   '<div class="{baseCls}-bl"></div>',
                   '<div class="{baseCls}-br"></div>',
                   '<div class="{baseCls}-bc"></div>',
                   '{%this.renderContainer(out,values)%}'
               ],
               width: 200,
               renderTo: me.el,
               baseCls: btnsCss,
               layout: {
                   type: 'hbox',
                   align: 'middle'
               },
               defaults: {
                   flex: 1,
                   margins: '0 1 0 1'
               },
               items: [{
                   itemId: 'update',
                   xtype: 'button',
                   cls: 'primary small',
                   handler: plugin.completeEdit,
                   scope: plugin,
                   text: me.saveBtnText,
                   disabled: !me.isValid,
                   minWidth: Ext.panel.Panel.prototype.minButtonWidth
               }, {
                   xtype: 'button',
                   handler: plugin.cancelEdit,
                   scope: plugin,
                   cls: 'secondary small',
                   text: me.cancelBtnText,
                   minWidth: Ext.panel.Panel.prototype.minButtonWidth
               }]
           });

           // Prevent from bubbling click events to the grid view
           me.mon(btns.el, {
               // BrowserBug: Opera 11.01
               //   causes the view to scroll when a button is focused from mousedown
               mousedown: Ext.emptyFn,
               click: Ext.emptyFn,
               stopEvent: true
           });
       }
       return me.floatingButtons;
   }
})<?php }} ?>