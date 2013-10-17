<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:03:54
         compiled from "D:\data\Ampps\www\shop\engine\Library\ExtJs\overrides\Ext.Template.js" */ ?>
<?php /*%%SmartyHeaderCode:23777524d6b3a3d4445-22002729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a9d5f61797c190f8c4c9ec9f6ebec79568ad175' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\engine\\Library\\ExtJs\\overrides\\Ext.Template.js',
      1 => 1376334192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23777524d6b3a3d4445-22002729',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b3a574390_74282010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b3a574390_74282010')) {function content_524d6b3a574390_74282010($_smarty_tpl) {?>/**
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
 * @author     Heiner Lohaus
 * @author     $Author$
 */

/**
 * Override template syntax for smarty support.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2011, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 */
//
Ext.override(Ext.Template, {
    re: /[{\[]([\w\-]+)(?:\:([\w\.]*)(?:\((.*?)?\))?)?[}\]]/g
});
Ext.override(Ext.String, {
    format: function(format) {
        var formatRe = /[{\[](\d+)[}\]]/g;
        var args = Ext.Array.toArray(arguments, 1);
        return format.replace(formatRe, function(m, i) {
            return args[i];
        });
    }
});
//
<?php }} ?>