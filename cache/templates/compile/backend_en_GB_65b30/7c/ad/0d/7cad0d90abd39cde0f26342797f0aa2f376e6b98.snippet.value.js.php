<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:04:08
         compiled from "D:\data\Ampps\www\shop\templates\_default\backend\base\model\value.js" */ ?>
<?php /*%%SmartyHeaderCode:31704524d6b4848c156-86592968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cad0d90abd39cde0f26342797f0aa2f376e6b98' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\backend\\base\\model\\value.js',
      1 => 1376334194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31704524d6b4848c156-86592968',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b486f4bf2_13137754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b486f4bf2_13137754')) {function content_524d6b486f4bf2_13137754($_smarty_tpl) {?>/**
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
 * @package    Shopware_Base
 * @subpackage Config
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.Base.model.Value', {
    extend: 'Ext.data.Model',

    alternateClassName: 'Shopware.model.Value',

    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'shopId', type: 'int' },
        { name: 'value', defaultValue: null, useNull: true }
    ]
});
//<?php }} ?>