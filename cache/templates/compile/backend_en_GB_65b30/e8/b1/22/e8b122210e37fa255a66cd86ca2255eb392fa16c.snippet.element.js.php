<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:04:07
         compiled from "D:\data\Ampps\www\shop\templates\_default\backend\base\model\element.js" */ ?>
<?php /*%%SmartyHeaderCode:19131524d6b47a93047-93834537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b122210e37fa255a66cd86ca2255eb392fa16c' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\backend\\base\\model\\element.js',
      1 => 1376334194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19131524d6b47a93047-93834537',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b47c6a4c5_96389481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b47c6a4c5_96389481')) {function content_524d6b47c6a4c5_96389481($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Base.model.Element', {
    extend: 'Ext.data.Model',
    alternateClassName: 'Shopware.model.Element',

    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string' },
        { name: 'value' },
        { name: 'label', type: 'string' },
        { name: 'description', type: 'string', useNull: true },
        { name: 'type', type: 'string', useNull: true },
        { name: 'required', type: 'boolean' },
        { name: 'scope', type: 'int' },
        'options'
    ],
    associations: [{
        type: 'hasMany', model: 'Shopware.apps.Base.model.Value',
        name: 'getValues', associationKey: 'values'
    }]
});
//<?php }} ?>