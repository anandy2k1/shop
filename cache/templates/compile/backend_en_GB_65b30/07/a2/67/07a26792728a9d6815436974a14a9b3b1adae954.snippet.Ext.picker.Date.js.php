<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:56
         compiled from "D:\data\Ampps\www\shop\engine\Library\ExtJs\overrides\Ext.picker.Date.js" */ ?>
<?php /*%%SmartyHeaderCode:18572524d6b3c2209b1-03707529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07a26792728a9d6815436974a14a9b3b1adae954' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\ExtJs\\overrides\\Ext.picker.Date.js',
      1 => 1376334192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18572524d6b3c2209b1-03707529',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b3c2e9007_70817041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b3c2e9007_70817041')) {function content_524d6b3c2e9007_70817041($_smarty_tpl) {?>/**
 * Enlight
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://enlight.de/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@shopware.de so we can send you a copy immediately.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 * @version    $Id$
 * @author     Stephan Pohl
 * @author     $Author$
 */
Ext.override(Ext.picker.Date, {

    /**
     * Overrides the todayBtn to use our
     * fancy and shiny button kit.
     *
     * @private
     * @return void
     */
    beforeRender: function () {
        var me = this;
        me.callOverridden();
        if(me.todayBtn) {
            me.todayBtn.addCls('small').addCls('secondary');
        }
    }
});<?php }} ?>