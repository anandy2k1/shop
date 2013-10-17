<?php /* Smarty version Smarty-3.1.12, created on 2013-10-03 15:04:05
         compiled from "D:\data\Ampps\www\shop\templates\_default\backend\base\model\address.js" */ ?>
<?php /*%%SmartyHeaderCode:12274524d6b45758b44-20533615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e676fb7862dcd89000f822135998c5be1dfd1e52' => 
    array (
      0 => 'D:\\data\\Ampps\\www\\shop\\templates\\_default\\backend\\base\\model\\address.js',
      1 => 1376334194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12274524d6b45758b44-20533615',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524d6b45952894_60563825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524d6b45952894_60563825')) {function content_524d6b45952894_60563825($_smarty_tpl) {?>/**
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
 * The address model contains all fields for a single address.
 */
//
Ext.define('Shopware.apps.Base.model.Address', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Address',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name:'salutation', type:'string' },
        { name:'company', type:'string' },
        { name:'department', type:'string' },
        { name:'firstName', type:'string' },
        { name:'lastName', type:'string' },
        { name:'street', type:'string' },
        { name:'streetNumber', type:'string' },
        { name:'zipCode', type:'string' },
        { name:'city', type:'string' },
        { name:'countryId', type:'int', useNull: true }
    ]

});
//


<?php }} ?>