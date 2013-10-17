<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:04:00
         compiled from "D:\data\Ampps\www\shop\templates\_default\backend\base\model\customer_group.js" */ ?>
<?php /*%%SmartyHeaderCode:8367524d6b40c53d67-09707293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9edd1abc564eb62cf161e50f1fa24d239ad86fe' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\backend\\base\\model\\customer_group.js',
      1 => 1376334194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8367524d6b40c53d67-09707293',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b40dee698_33884706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b40dee698_33884706')) {function content_524d6b40dee698_33884706($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Model
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The customer group model represents a data row of the s_core_customergroups or the
 * Shopware\Models\Customer\Group doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.CustomerGroup', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.CustomerGroup',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name: 'id', type: 'int' },
        { name: 'key', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'tax', type: 'boolean', defaultValue: true },
        { name: 'taxInput', type: 'boolean', defaultValue: true },
        { name: 'mode', type: 'boolean' },
        { name: 'discount', type: 'float', useNull:true }
    ]
});
//
<?php }} ?>